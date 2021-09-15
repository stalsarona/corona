<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Poskes extends CI_Controller {

    public function index()
    {
        $this->load->view('V_poskes');
    }

    public function dataPoskes()
    {
        $data = $this->db->from('cakupan')
            ->where_in('keterangan', ['RAPID ANTIGEN COVID-19', 'RT PCR SARS-CoV-2'])
            ->limit(2)->order_by('created_at', 'desc')
            ->get()->result();
        $rapid = [];
        $pcr = [];
        foreach($data as $value){
            $value->keterangan === 'RAPID ANTIGEN COVID-19' ?
                $rapid = [
                    'total' => $value->total,
                    'positif' => $value->hasil_positif,
                    'negatif' => $value->hasil_negatif
                ]:
                $pcr = [
                    'total' => $value->total,
                    'positif' => $value->hasil_positif,
                    'negatif' => $value->hasil_negatif
                ];
        }
        $res = [
            'rapid' => $rapid,
            'pcr' => $pcr,
            'last_update' => date('d M Y',strtotime($value->created_at))
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($res)); 
    }

}

/* End of file Poskes.php */
