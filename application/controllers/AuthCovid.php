<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthCovid extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library('session');
	}
	
	public function index()
	{
		if ($this->session->userdata('status_log') != TRUE) {
			$data['token'] = $this->private_token();
			$this->load->view('V_login', $data);
		} else {
			redirect('import/v1','refresh');
		}
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
		$url = "http://api.rstugurejo.jatengprov.go.id:8060/wsrstugu/rstugu/covid/private_token/";
        $data = json_decode($this->get_cors($url), TRUE);
       
		return $data;
    }
	
	public function login_pendataan()
	{
		$curl = curl_init();

		$username = htmlentities($this->input->post('username', TRUE));
		$password = htmlentities($this->input->post('password', TRUE));
		$token = $this->input->post('private_token');
		curl_setopt_array($curl, array(
		CURLOPT_URL => "http://api.rstugurejo.jatengprov.go.id:8060/wsrstugu/rstugu/covid/login_pendataan",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => array('username' => $username,'password' => $password, 'private_key' => $token)
		));

		$response = curl_exec($curl);
		$dec_response = json_decode($response);
		foreach($dec_response as $key){}
		if($key->kode == 200){	
			$array = array(
				'status_log' => TRUE,
				'username' => $key->USERNM
			);
			$this->session->set_userdata( $array );	
		} 
		curl_close($curl);
		echo $response;
		//print_r($key->kode);
	}

	public function signout_pendataan()
	{
		$this->session->sess_destroy();
		redirect('signin');
	}

	public function test()
	{
		echo json_encode($this->session->userdata('username'));
	}
}
