<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/autoload.php';
class Covid_informasi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        
        $this->load->model('M_covid');
        
    }
    
    public function index()
    {
        $data['private_token'] = $this->private_token();
        $data1 = $this->get_total_data();
    
        if(count($data1) > 0 ){
            $data['data'] = $data1;          
        } else {
            $data['data'] = $this->info_covid_mysql();         
        }
        $this->load->view('V_informasi_covid', $data);
    }

    public function new_info()
    {
        $data['private_token'] = $this->private_token();
        $data1 = $this->get_data_covidNew();
        
        if(count($data1) > 0 ){
            $data['data'] = $data1;          
        } 
        $this->load->view('V_new_informasi_covid', $data);
    }

    public function newCovidDashboard(){
        $data['data'] = $this->get_data_covidNew();
        $this->load->view('V_newInformasiCovid', $data);
    }

    public function newCovidDashboard_V1()
    {
        $data['data'] = $this->get_data_covidNew();
        $this->load->view('V_informasi_covid_v1', $data);
    }

    public function newCovidDashboard_V2()
    {
        //$data['data'] = $this->get_data_covidNew();
        $data['data'] = $this->getDataDewo();
        $this->load->view('V_informasi_covid_v2', $data);
    }

    public function newCovidDashboard_V3()
    {
        $data['data'] = $this->get_data_covidNew();
        $this->load->view('V_informasi_covid_v3', $data);
    }

    public function newCovidDashboard_V4()
    {
        $x = $this->db->select('DATE_FORMAT(created_at,"%d/%m/%Y %H:%i") as tanggal')
            ->order_by('created_at', 'desc')->limit(1)->get('covidreportv3')->row();
        $data['last_updated'] = $x->tanggal;
        //echo json_encode($data);
        $this->load->view('V_informasi_covid_v4', $data);
    }

    public function pendataan()
    {
        //fitur tidak di gunakan
        if ($this->session->userdata('status_log') != TRUE) {
			$this->session->set_flashdata('errorMessage', '<div class="alert alert-danger">Silahkan masuk dahulu !</div>');
					redirect('signin');
		}
        $data['token'] = $this->private_token();
        //$data['total'] = $this->get_total_data();
        $this->load->view('V_pendataan', $data);       
    }

    public function get_cors($url)
    {
      
        $ch0 	 = curl_init();
                curl_setopt($ch0, CURLOPT_URL, $url);
                curl_setopt ($ch0, CURLOPT_RETURNTRANSFER, 1);
        $exec0 	 = curl_exec ($ch0);
        curl_close ($ch0); 
        return $exec0;
    }
    
    public function private_token()
	{
		$url = "http://api.rstugurejo.jatengprov.go.id:8000/wsrstugu/rstugu/covid/private_token/";
        $data = json_decode($this->get_cors($url), TRUE);
       
		return $data;
    }

    public function get_total_data()
	{
		
		$url = "http://api.rstugurejo.jatengprov.go.id:8000/wsrstugu/rstugu/covid/get_data_terakhir";
        $data = json_decode($this->get_cors($url), TRUE);
        
        //print_r($data['status']['ID']);
		return $data;
    }

    public function get_data_covidNew()
    {
        $url = "http://api.rstugurejo.jatengprov.go.id:8000/wsrstugu/rstugu/covid/get_covid_new";
        $data = json_decode($this->get_cors($url), TRUE);
        //print_r($data['status']);
        return $data;
    }
    
    
    public function simpan_total()
    {
        $obj = array(
            'COV_DWS_SMB' => $this->input->post('cov_dws_sembuh'),
            'COV_DWS_RWT' => urlencode($this->input->post('cov_dws_dirawat')),
            'COV_DWS_MNG' => urlencode($this->input->post('cov_dws_meninggal')),
            'COV_DWS_ISO' => urlencode($this->input->post('cov_dws_iso')),
            'COV_ANK_SMB' => urlencode($this->input->post('cov_ank_sembuh')),
            'COV_ANK_RWT' => urlencode($this->input->post('cov_ank_dirawat')),
            'COV_ANK_MNG' => urlencode($this->input->post('cov_ank_meninggal')),
            'COV_ANK_ISO' => urlencode($this->input->post('cov_ank_iso')),
            'PDP_DWS_SMB' => urlencode($this->input->post('pdp_dws_sembuh')),
            'PDP_DWS_RWT' => urlencode($this->input->post('pdp_dws_dirawat')),
            'PDP_DWS_MNG' => urlencode($this->input->post('pdp_dws_meninggal')),
            'PDP_ANK_SMB' => urlencode($this->input->post('pdp_ank_sembuh')),
            'PDP_ANK_RWT' => urlencode($this->input->post('pdp_ank_dirawat')),
            'PDP_ANK_MNG' => urlencode($this->input->post('pdp_ank_meninggal')),
            'ODP_DWS_SMB' => urlencode($this->input->post('odp_dws_sembuh')),
            'ODP_DWS_RWT' => urlencode($this->input->post('odp_dws_dirawat')),
            'ODP_DWS_MNG' => urlencode($this->input->post('odp_dws_meninggal')),
            'ODP_ANK_SMB' => urlencode($this->input->post('odp_ank_sembuh')),
            'ODP_ANK_RWT' => urlencode($this->input->post('odp_ank_dirawat')),
            'ODP_ANK_MNG' => urlencode($this->input->post('odp_ank_meninggal')),
            'USER_INPUT' => urlencode($this->session->userdata('username')),
            'private_key' => $this->input->post('private_token')
        );

        $field_db = array(
            'COV_DWS_SMB' => $obj['COV_DWS_SMB'],
            'COV_DWS_RWT' => $obj['COV_DWS_RWT'],
            'COV_DWS_MNG' => $obj['COV_DWS_MNG'],
            'COV_DWS_ISO' => $obj['COV_DWS_ISO'],
            'COV_ANK_SMB' => $obj['COV_ANK_SMB'],
            'COV_ANK_RWT' => $obj['COV_ANK_RWT'],
            'COV_ANK_MNG' => $obj['COV_ANK_MNG'],
            'COV_ANK_ISO' => $obj['COV_ANK_ISO'],
            'PDP_DWS_SMB' => $obj['PDP_DWS_SMB'],
            'PDP_DWS_RWT' => $obj['PDP_DWS_RWT'],
            'PDP_DWS_MNG' => $obj['PDP_DWS_MNG'],
            'PDP_ANK_SMB' => $obj['PDP_ANK_SMB'],
            'PDP_ANK_RWT' => $obj['PDP_ANK_RWT'],
            'PDP_ANK_MNG' => $obj['PDP_ANK_MNG'],
            'ODP_DWS_SMB' => $obj['ODP_DWS_SMB'],
            'ODP_DWS_RWT' => $obj['ODP_DWS_RWT'],
            'ODP_DWS_MNG' => $obj['ODP_DWS_MNG'],
            'ODP_ANK_SMB' => $obj['ODP_ANK_SMB'],
            'ODP_ANK_RWT' => $obj['ODP_ANK_RWT'],
            'ODP_ANK_MNG' => $obj['ODP_ANK_MNG'],
            'USER_INPUT' => $obj['USER_INPUT'],
        );

        $data = $this->db->insert('covidreport', $field_db);

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://api.rstugurejo.jatengprov.go.id:8000/wsrstugu/rstugu/covid/simpan_total",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => $obj,
          
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        echo $response;
        
    }

    public function pendataanPasien()
	{
		$this->load->view('dashboard/V_pasien_covid');    
    }
    
    public function info_covid_mysql()
    {
       $data = $this->M_covid->info_covid_mysql();
       foreach($data as $key){}
       if(count($data) > 0){
            $response = array('status' => $key,
                            'message' => 'success',
                            'code' => 200
            );	
        } else {
            $response = array('status' => false,
                            'message' => 'failed',
                            'code' => 403
            );	
        }
       
        return $response;
       
    }

    public function info_statistik()
    {
        $this->load->view('dashboard/V_dashboard');  
    }
    
    public function get_statistik_kasus()
    {
        $url = "http://api.rstugurejo.jatengprov.go.id:8000/wsrstugu/rstugu/covid/get_covid_new";
        $data = json_decode($this->get_cors($url), TRUE);
        $hasil = array();
        foreach ($data['status'] as $key) {
            $hasil = array('sembuh' => $key['SEMBUH'],
                           'dirawat' => $key['DIRAWAT'],
                           'meninggal' => $key['MENINGGAL'],
                           'reactive' => $key['REACTIVE'],    
            );
            foreach ($hasil as $hasil => $item) {
                $datanew[] = array('title' => $hasil, 'total' => $item);
            }
        }
       
        //$result = array(array('title' => 'sembuh', 'value' => $hasil['sembuh']));
        $this->output->set_content_type('application/json')->set_output(json_encode($datanew));
    }

    public function statistik_gender()
    {
        $url = "http://api.rstugurejo.jatengprov.go.id:8000/wsrstugu/rstugu/covid/statistik_gender";
        $data = json_decode($this->get_cors($url), TRUE);
        $key = $data['data'];
        $this->output->set_content_type('application/json')->set_output(json_encode($key));
    }

    public function statistik_age()
    {
        $url = "http://api.rstugurejo.jatengprov.go.id:8000/wsrstugu/rstugu/covid/statistik_age";
        $data = json_decode($this->get_cors($url), TRUE);
        $key = $data['data'];
        $this->output->set_content_type('application/json')->set_output(json_encode($key));
    }

    public function statistik_rekapbulan()
    {
        $url = "http://api.rstugurejo.jatengprov.go.id:8000/wsrstugu/rstugu/covid/statistik_rekapbulan";
        $data = json_decode($this->get_cors($url), TRUE);
        $key = $data['data'];
        $this->output->set_content_type('application/json')->set_output(json_encode($key));
    }

    public function statistik_persentaseSembuh()
    {
        $url = "http://api.rstugurejo.jatengprov.go.id:8000/wsrstugu/rstugu/covid/statistik_persentaseSembuh";
        $data = json_decode($this->get_cors($url), TRUE);
        $key = $data['data'];
        $this->output->set_content_type('application/json')->set_output(json_encode($key));
    }

    public function statistik_persentaseKematian()
    {
        $url = "http://api.rstugurejo.jatengprov.go.id:8000/wsrstugu/rstugu/covid/statistik_persentaseMeninggal";
        $data = json_decode($this->get_cors($url), TRUE);
        $key = $data['data'];
        $this->output->set_content_type('application/json')->set_output(json_encode($key));
    }

    // Redesign V.2.1
    
    public function getDataDewo()
    {
        $v1 = 'covidreportv1';
        $v2 = 'covidreportv2';
        $datav1 = $this->M_covid->getDataDewo($v1);
        $datav2 = $this->M_covid->getDataDewo($v2);
        $confirmv1 = 0;
        $suspectv1 = 0;
        foreach ($datav1 as $key => $value) {
            if($value->status_pasien === 'Konfirmasi'){
                $confirmv1++;
            } else {
                $suspectv1++;
            }
        }
        $confirmv2 = 0;
        $suspectv2 = 0;
        foreach ($datav2 as $key => $value) {
            $total_sus = $value->suspect_l + $value->suspect_p;
            $total_conf = $value->confirm_l + $value->confirm_p;
            $suspectv2 += $total_sus;
            $confirmv2 += $total_conf;
        }
        $response = [
            'confirm' => $confirmv1+$confirmv2,
            'suspect' => $suspectv1+$suspectv2,
            'total' => $confirmv2+$confirmv1+$suspectv1+$suspectv2
        ];
        return $response;
    }

    public function groupByMonthv1()
    {
        $data = $this->M_covid->groupByMonthv1();
        $total = 0;
        foreach ($data as $key) {
            $total = $total + $key->totalkasus;
            $hasil[] = array('total' => $total,  'tanggal' => $key->tanggal);
            //var_dump($total);

        }
        //echo json_encode($data);
        return $data;
    }

    public function groupByMonthv2()
    {
        $data = $this->M_covid->groupByMonthv2();
        $total = 0;
        foreach ($data as $key) {
            $total = $total + $key->totalkasus;
            $hasil[] = array('total' => $total,  'tanggal' => $key->tanggal);
        }
        //echo json_encode($hasil);
        return $data;
    }
 
    public function groupByMonth()
    {
        $v1 = $this->groupByMonthv1();
        $v2 = $this->groupByMonthv2();
        $data = array_merge($v1, $v2);
        ksort($data);
        $total = 0;
        
        foreach ($data as $x => $key) {
            $total = $total + $key->totalkasus;
            $hasil[] = array('tanggal' => $key->tanggal, 'total' => $total);
        }
        
        echo json_encode($hasil);
    }

    #update 2021 april covid

    public function statistikKasus()
    {
        $data = $this->db->select('DATE_FORMAT(bulan, "%Y-%m") as bulan, rekaptotal, cov_jml_pasien_masuk, cov_meninggal, cov_masih_dirawat, cov_pulang_sembuh')->from('rekapitulasi')->get()->result();
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function totalPersentaseStatus()
    {
        $data = $this->db->where('status_data', 0)->order_by('created_at', 'desc')->get('covidreportv3')->result();
        $total = 0;
        $meninggal = 0;
        $sembuh = 0;
        $dirawat =  0;
        foreach ($data as $key => $value) {
            $total += $value->cov_jumlah;
            if($value->status_keluar == 'MENINGGAL > 48 JAM' || $value->status_keluar == 'MENINGGAL < 48 JAM'){
                $meninggal += $value->cov_jumlah;
            } else if($value->status_keluar == 'MASIH DIRAWAT'){
                $dirawat += $value->cov_jumlah;
            } else {
                $sembuh += $value->cov_jumlah;
            }
        }
        $res = [
            [
                'label' => 'Meninggal',
                'value' => round(($meninggal/$total)*100),
                'color' => 'am4core.color("#020100")'
            ],
            [
                'label' => 'Dirawat',
                'value' => round(($dirawat/$total)*100),
                'color' => 'am4core.color("#F1D302")'
            ],
            [
                'label' => 'Sembuh',
                'value' => round(($sembuh/$total)*100),
                'color' => 'am4core.color("#235789")'
            ]
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($res));
        
    }

    public function persentaseKematian(){
        $array = array('PULANG SEMBUH', 'MENINGGAL > 48 JAM', 'MENINGGAL < 48 JAM');
        $data = $this->db->where_in('status_keluar', $array)->order_by('created_at', 'desc')->limit(3)->get('covidreportv3')->result();
        $totaldpc =0;
        $meninggal = 0;
        $hidup = 0;
        foreach ($data as $key => $value) {
            $totaldpc += $value->totaldpc;
            $value->status_keluar === 'PULANG SEMBUH' ? $hidup = $value->totaldpc : $meninggal += $value->totaldpc; 
        }
        $persentase_hidup = round($hidup/$totaldpc*100);
        $persentase_meninggal = round($meninggal/$totaldpc*100);
        $res = [
            [
                'label' => 'hidup',
                'value' => $persentase_hidup,
            ],  
            [
                'label' => 'meninggal',
                'value' => $persentase_meninggal
            ]
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($res));
    }

    public function persentaseKesembuhan()
    {
        $array = array('MENINGGAL > 48 JAM', 'MENINGGAL < 48 JAM');
        $data = $this->db->where_not_in('status_keluar', $array)->order_by('created_at', 'desc')->limit(6)->get('covidreportv3')->result();
        $totaldpc =0;
        $sembuh = 0;
        $belumsembuh = 0;
        foreach ($data as $key => $value) {
            $totaldpc += $value->totaldpc;
            $value->status_keluar === 'PULANG SEMBUH' ? $sembuh = $value->totaldpc : $belumsembuh += $value->totaldpc; 
        }
        $persentase_sembuh = round($sembuh/$totaldpc*100);
        $persentase_belum_sembuh = round($belumsembuh/$totaldpc*100);
        $res = [
            [
                'label' => 'sembuh',
                'value' => $persentase_sembuh,
            ],  
            [
                'label' => 'belum sembuh',
                'value' => $persentase_belum_sembuh
            ]
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($res));        
    }

    public function totalKasus()
    {
        $data = $this->db->select(' SUM(dis_jumlah) as total_dis, SUM(prop_jumlah) as total_prop, SUM(cov_jumlah) as total_cov')
            ->from('covidreportv3')->where('status_data', 0)->order_by('created_at', 'desc')->limit(7)->get()->result();
        $res = [
            'total_dis' => intval($data[0]->total_dis),
            'total_prop' => intval($data[0]->total_prop),
            'total_cov' => intval($data[0]->total_cov),
            'total' => $data[0]->total_dis + $data[0]->total_prop + $data[0]->total_cov
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($res));
        
    }

}

/* End of file Covid_informasi.php */
