<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/autoload.php';
class ImportData extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('M_covid');
        if ($this->session->userdata('status_log') != TRUE) {
			$this->session->set_flashdata('errorMessage', '<div class="alert alert-danger">Silahkan masuk dahulu !</div>');
					redirect('signin');
		}
    }

    public function index()
    {
        $this->template->load('layouts/Layouts', 'dashboard/V_importv1');
    }

    public function v2()
    {
        $this->template->load('layouts/Layouts', 'dashboard/V_importv2');
    }

    public function complementary()
    {
        $this->template->load('layouts/Layouts', 'dashboard/V_complementary');
    }

    public function uploadFileV1()
    {
        if(!empty($_FILES['file']['name'])){
            $config['upload_path'] = './assets/import-dewo19/'; 
            $config['allowed_types'] = 'xls|xlsx';
            $config['max_size'] = 10024; // max_size in kb
            $config['file_name'] = 'FasyankesOnline';

            //Load upload library
            $this->load->library('upload',$config); 

            // File upload
            if($this->upload->do_upload('file')){
                // Get data about the file
                $uploadData = $this->upload->data();
              
                $name = $uploadData['file_name'];
                $response = $this->insertv1($name);
                echo $response;
            }
        }
    }

    public function uploadFileV2()
    {
        if(!empty($_FILES['file']['name'])){
            $config['upload_path'] = './assets/import-dewo19/'; 
            $config['allowed_types'] = 'xls|xlsx';
            $config['max_size'] = 10024; // max_size in kb
            $config['file_name'] = 'FasyankesOnline-V2';

            //Load upload library
            $this->load->library('upload',$config); 

            // File upload
            if($this->upload->do_upload('file')){
                // Get data about the file
                $uploadData = $this->upload->data();
               
                $name = $uploadData['file_name'];
                $response = $this->insertv2($name);
                echo $response;
            }
        }
    }

    function insertv1($file){
        
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $spreadsheet = $reader->load("./assets/import-dewo19/".$file."");
        $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
        $confirm = 0;
        $suspect = 0;
        $duplicate = 0;
        $insert = false;
        foreach ($sheetData as $key => $value) {
            if($key === 1){
                continue;
            }
            // if(ctype_alpha($value['D'])){
                $value['O'] === 'Konfirmasi' 
                ? $confirm++
                : $suspect++ ;
                $value['H'] === 'Perempuan' ? $gender = 'P' : $gender = 'L';
               
                $tgl_masuk = date('Y-m-d', strtotime($value['J']));
                $tgl_keluar = date('Y-m-d', strtotime($value['R']));
                $status_lap = date('Y-m-d H:i:s', strtotime($value['T']));
                // echo $newDate.'<pre>';
                $field = array(
                    'no_excel' => $value['B'],
                    'inisial' => $value['D'],
                    'nama' => $value['E'],
                    'kelamin' => $gender,
                    'usia' => $value['I'],
                    'tgl_masuk' => $tgl_masuk,
                    'provinsi' => $value['K'],
                    'kab_kota' => $value['L'],
                    'kecamatan' => $value['M'],
                    'jenis_pasien' => $value['N'],
                    'status_pasien' => $value['O'],
                    'tgl_keluar' => $tgl_keluar,
                    'status_keluar' => $value['S'],
                    'status_laporan' => $status_lap
                );
                $check = $this->M_covid->check_data($value['B'], $value['D'], $value['E']);
                if($check > 0){
                    $duplicate++;
                }else{
                    $insert = $this->M_covid->simpanV1($field);
                }
                $response = array('duplicate' => $duplicate, 'insert' => $insert, 'message' => 'success', 'code' => 200);
            // } else {
            //     $response = array('message' => 'format tidak bisa digunakan', 'code' => 500);
            // }
            
        }      
        echo json_encode($response);       
    }

    function insertv2($file){
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $spreadsheet = $reader->load("./assets/import-dewo19/".$file."");
        $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
        $duplicate = 0;
        $insert = false;
        foreach ($sheetData as $key => $value) {
            if($key === 1){
                continue;
            }
            if (preg_match('/^[0-9]+$/', $value['D'])) {
                $tanggal = date('Y-m-d', strtotime($value['C']));
                $field = array(
                    'no_excel' => $value['B'],
                    'tanggal' => $tanggal,
                    'suspect_l' => $value['L'],
                    'suspect_p' => $value['M'],
                    'confirm_l' => $value['N'],
                    'confirm_p' => $value['O'],
                    'tgl_lapor' => $value['P'],
                );
                $check = $this->M_covid->check_dataV2($value['B'], $tanggal);
                if($check > 0){
                    $duplicate++;
                }else{
                    $insert = $this->M_covid->simpanV2($field);
                }
                $response = array('duplicate' => $duplicate, 'insert' => $insert, 'message' => 'success', 'code' => 200);
            } else {
                $response = array('message' => 'format tidak bisa digunakan', 'code' => 500);
            }
           
        }
       
        echo json_encode($response);     
    }

}

/* End of file ImportData.php */
