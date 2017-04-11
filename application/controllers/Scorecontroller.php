<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class scorecontroller extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('m_soal');
		$this->load->model('m_score');
		$this->load->helper('url');

		if($this->session->userdata('status') != "login"){
			redirect("panel/admin");
		}
	}

  // public function index()
  // {
		// $data['soal'] = $this->m_soal->tampil_data()->result();
		// $cek = $this->m_soal->cek_jumlah("soal")->num_rows();
		// $ceksampah = $this->m_soal->cek_jumlah_sampah()->num_rows();
		// $data_session = array(
		// 	'soal_jumlah' => $cek,
		// 	'jumlah_sampah_soal' => $ceksampah
		// 	);
		// $this->session->set_userdata($data_session);
  //   	$this->load->view('adminview/viewdatasoal', $data);
  // }

  // public function viewbin()
  // {
		// $data['soalbin'] = $this->m_soal->tampil_data_bin()->result();
		// $cek = $this->m_soal->cek_jumlah("soal")->num_rows();
		// $ceksampah = $this->m_soal->cek_jumlah_sampah()->num_rows();
		// $data_session = array(
		// 	'soal_jumlah' => $cek,
		// 	'jumlah_sampah_soal' => $ceksampah
		// 	);
		// $this->session->set_userdata($data_session);
  //   	$this->load->view('adminview/viewdatasoalTrash', $data);
  // }

  // public function tambah_soal()
  // {
  //   $this->load->view('adminview/adddatasoal');
  // }

	public function tambah_data()
	{
		$hasil = array(
			'error' => 'no',
		);

		$point 		= $this->input->post('score');
		$keterangan = $this->input->post('keterangan1');
		date_default_timezone_set("Asia/Jakarta");
		$date = date('Y-m-d H:i:s');

		$data = array(
			'id_user'		=> 2,
			'score'  		=> $point,
			'keterangan'  => $keterangan,
			'status'	  => 1,
			'created_at'  => $date,
			'updated_at'  => $date,
			'deleted_at'  => $date
			);
		$resulyhasil = $this->m_score->input_data($data,'score');
		$hasil['id'] = $resulyhasil;
		echo json_encode($hasil);
	}

	public function tambah_data_finish()
	{
		$hasil = array(
			'error' => 'no',
		);

		$point 		= 0;
		$keterangan = "Finish";
		date_default_timezone_set("Asia/Jakarta");
		$date = date('Y-m-d H:i:s');

		$data = array(
			'id_user'	  => 2,
			'score'  	  => $point,
			'keterangan'  => $keterangan,
			'status'	  => 1,
			'created_at'  => $date,
			'updated_at'  => $date,
			'deleted_at'  => $date
			);
		$resulyhasil = $this->m_score->input_data($data,'score');
		$hasil['id'] = $resulyhasil;
		echo json_encode($hasil);
	}

	function deleteall1(){
		$id = 1;
		$where = array('status' => $id);
		$this->m_score->hapus_data($where,'score');
		echo 'succeed';
	}

	// function softdelete(){
	// 	$id = $_GET['id'];
	// 	$status = 0;

	// 	$data = array(
	// 		'status' 	=> $status
	// 	);

	// 	$where = array(
	// 		'id_soal' => $id
	// 	);
	// 	$this->m_soal->hapus_data_soft($where,$data,'soal');

	// 	echo 'succeed';
	// }

	// function restoredelete(){
	// 	$id = $_GET['id'];
	// 	$status = 1;

	// 	$data = array(
	// 		'status' 	=> $status
	// 	);

	// 	$where = array(
	// 		'id_soal' => $id
	// 	);
	// 	$this->m_soal->hapus_data_soft($where,$data,'soal');

	// 	echo 'succeed';
	// }

	// function edit_soal($id){
	// 	$where = array('id_soal' => $id);
	// 	$data['soaledit'] = $this->m_soal->edit_data($where,'soal')->result();
	// 	$this->load->view('adminview/editdatasoal',$data);
	// }

	// function update(){
	// 	$id 		= $this->input->post('id');
	// 	$nama 		= $this->input->post('nama');
	// 	$soal 		= $this->input->post('soal');
	// 	$jawaban 	= $this->input->post('jawaban');
	// 	$poin 		= $this->input->post('poin');
	// 	$keterangan = $this->input->post('keterangan');
	// 	date_default_timezone_set("Asia/Jakarta");
	// 	$date = date('Y-m-d H:i:s');

	// 	$data = array(
	// 		'nama'		=> $nama,
	// 		'soal'  	=> $soal,
	// 		'jawaban'	=> $jawaban,
	// 		'poin'  	=> $poin,
	// 		'keterangan'  => $keterangan,
	// 		'updated_at'  => $date
	// 	);

	// 	$where = array(
	// 		'id_soal' => $id
	// 	);

	// 	$this->m_soal->update_data($where,$data,'soal');
	// 	redirect('dashboard/admin/data/soal/list');
	// }


	function GetScoreList()
	{
		$output =  $this->m_score->getscore();
		echo json_encode($output->result());
	}
}
