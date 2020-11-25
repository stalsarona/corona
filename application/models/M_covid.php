<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_covid extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function info_covid_mysql()
	{
        $data = $this->db->select('*')->from('covidreport')->limit(1)->order_by('TGLINPUT', 'desc')->get();
        return $data->result_array();
	}

	public function check_data($noexcel, $inisial, $nama)
	{
		$check = $this->db->where('no_excel', $noexcel)->where('inisial', $inisial)->where('nama', $nama)->get('covidreportv1');

		return $check->num_rows();
	}

	public function check_dataV2($noexcel, $tanggal)
	{
		$check = $this->db->where('no_excel', $noexcel)->where('tanggal', $tanggal)->get('covidreportv2');

		return $check->num_rows();
	}

	public function simpanV1($field)
	{
		$insert = $this->db->insert('covidreportv1', $field);

		return $insert;
	}

	public function simpanV2($field)
	{
		$insert = $this->db->insert('covidreportv2', $field);

		return $insert;
	}

	public function getDataDewo($table)
	{
		$data = $this->db->get($table);
		return $data->result();
	}

	public function groupByMonthv1()
	{
		$data = $this->db->select("count(no_excel) as totalkasus, DATE_FORMAT(tgl_masuk, '%Y-%m') as tanggal")->from('covidreportv1')->group_by('DATE_FORMAT(tgl_masuk, "%Y-%m")')->get();

		return $data->result();
	}

	public function groupByMonthv2()
	{
		$data = $this->db->select('((SUM(suspect_l)+SUM(suspect_p)) + (SUM(confirm_l)+SUM(confirm_p))) as totalkasus, DATE_FORMAT(tgl_lapor, "%Y-%m") as tanggal')
							->from('covidreportv2')->group_by('DATE_FORMAT(tgl_lapor,"%Y-%m")')->get();

		return $data->result();
	}
}
