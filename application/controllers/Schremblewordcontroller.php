<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schremblewordcontroller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('m_schremble');
		$this->load->helper('url');

		if($this->session->userdata('status') != "login"){
			redirect("panel/admin/login");
		}
	}

	public function listview()
	{
		$data['datascw'] = $this->m_schremble->tampil_data()->result();
		$this->load->view('adminview/viewschremblewords',$data);
	}

	public function index()
	{
		$this->load->view('adminview/addscremblewords');
	}

	public function tambah_aksi(){
		$nama1 = $this->input->post('sw1');
		$nama2 = $this->input->post('sw2');
		$nama3 = $this->input->post('sw3');
		$nama4 = $this->input->post('sw4');
		$nama5 = $this->input->post('sw5');
		$nama6 = $this->input->post('sw6');
		$nama7 = $this->input->post('sw7');
		$nama8 = $this->input->post('sw8');
		$nama9 = $this->input->post('sw9');
		$nama10 = $this->input->post('sw10');
		$nama11 = $this->input->post('sw11');
		$nama12 = $this->input->post('sw12');
		$nama13 = $this->input->post('sw13');
		$nama14 = $this->input->post('sw14');
		$nama15 = $this->input->post('sw15');
		$keterangan = $this->input->post('keterangan');
		date_default_timezone_set("Asia/Jakarta");
		$date = date('Y-m-d H:i:s');

		$temp1 =count($this->input->post('sw1'));
		$temp2 =count($this->input->post('sw2'));
		$temp3 =count($this->input->post('sw3'));
		$temp4 =count($this->input->post('sw4'));
		$temp5 =count($this->input->post('sw5'));
		$temp6 =count($this->input->post('sw6'));
		$temp7 =count($this->input->post('sw7'));
		$temp8 =count($this->input->post('sw8'));
		$temp9 =count($this->input->post('sw9'));
		$temp10 =count($this->input->post('sw10'));
		$temp11 =count($this->input->post('sw11'));
		$temp12 =count($this->input->post('sw12'));
		$temp13 =count($this->input->post('sw13'));
		$temp14 =count($this->input->post('sw14'));
		$temp15 =count($this->input->post('sw15'));

		for($i=0; $i<$temp1;$i++)
		{
			$data1 = array(
				'nama1'		=> $nama1[$i],
				'nama2'		=> $nama2[$i],
				'nama3'		=> $nama3[$i],
				'nama4'		=> $nama4[$i],
				'nama5'		=> $nama5[$i],
				'nama6'		=> $nama6[$i],
				'nama7'		=> $nama7[$i],
				'nama8'		=> $nama8[$i],
				'nama9'		=> $nama9[$i],
				'nama10'		=> $nama10[$i],
				'nama11'		=> $nama11[$i],
				'nama12'		=> $nama12[$i],
				'nama13'		=> $nama13[$i],
				'nama14'		=> $nama14[$i],
				'nama15'		=> $nama15[$i],
				'status'  	=> 1,
				'created_at'  => $date,
				'updated_at'  => $date,
				'deleted_at'  => $date
			);
			$this->m_schremble->input_data($data1,'schremble');
		}
		redirect('dashboard/admin/schremblewords/list');
	}
}
