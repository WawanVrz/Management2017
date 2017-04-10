<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersController extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('m_users');
		$this->load->helper(array('form', 'url'));

		if($this->session->userdata('status') != "login"){
			redirect("panel/admin/login");
		}
	}

  public function index()
  {
		$data['userss'] = $this->m_users->tampil_data()->result();
		$data['userssmember'] = $this->m_users->tampil_data_member()->result();

		$cek = $this->m_users->cek_jumlah("users")->num_rows();
		$ceksampah = $this->m_users->cek_jumlah_sampah()->num_rows();
		$data_session = array(
			'user_jumlah' => $cek,
			'jumlah_sampah_user' => $ceksampah
			);
		$this->session->set_userdata($data_session);

		$cekmember = $this->m_users->cek_jumlah_member("users")->num_rows();
		$ceksampahmember = $this->m_users->cek_jumlah_sampah_member()->num_rows();
		$data_session = array(
			'user_member_jumlah' => $cekmember,
			'jumlah_sampah_user_member' => $ceksampahmember
			);
		$this->session->set_userdata($data_session);
    	$this->load->view('adminview/viewdatauser', $data);
  }

  public function viewbin()
  {
		$data['userss_bin'] = $this->m_users->tampil_data_bin()->result();
		$data['userssmember_bin'] = $this->m_users->tampil_data_member_bin()->result();

		$cek = $this->m_users->cek_jumlah("users")->num_rows();
		$ceksampah = $this->m_users->cek_jumlah_sampah()->num_rows();
		$data_session = array(
			'user_jumlah' => $cek,
			'jumlah_sampah_user' => $ceksampah
			);
		$this->session->set_userdata($data_session);


		$cekmember = $this->m_users->cek_jumlah_member("users")->num_rows();
		$ceksampahmember = $this->m_users->cek_jumlah_sampah_member()->num_rows();
		$data_session = array(
			'user_member_jumlah' => $cekmember,
			'jumlah_sampah_user_member' => $ceksampahmember
			);
		$this->session->set_userdata($data_session);
   	 	$this->load->view('adminview/viewdatauserTrash', $data);
  }

  public function tambah_user()
  {
    	$this->load->view('adminview/adddatauser');
  }

	public function tambah_aksi()
	{
		$config['upload_path'] = './assets/dashboard/dist/img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '10000'; //in kb

		$this->upload->initialize($config);

		$fulname = $this->input->post('fulname');
		$username = $this->input->post('username');
		$pass = md5($this->input->post('pass'));
		$role = $this->input->post('role');
		$keterangan = $this->input->post('keterangan');
		$telp = $this->input->post('telp');
		$email = $this->input->post('email');
		date_default_timezone_set("Asia/Jakarta");
		$date = date('Y-m-d H:i:s');

		if ( !$this->upload->do_upload('image'))
		{
			$data_user = array(
				'fullname'		=> $fulname,
				'username' 		=> $username,
				'password'		=> $pass,
				'role'  		=> $role,
				'status'		=> 1,
				'keterangan'  	=> $keterangan,
				'phone'			=> $telp,
				'email'  		=> $email,
				'tgl_daftar'  => $date,
				'created_at'  => $date,
				'updated_at'  => $date,
				'deleted_at'  => $date,
				'image'  	  => 'nopp.jpg'
				);
			$this->m_users->input_data($data_user,'users');
			redirect('dashboard/admin/data/user/list');
		}else{
				$data_user = array(
					'fullname'		=> $fulname,
					'username' 		=> $username,
					'password'		=> $pass,
					'role'  		=> $role,
					'status'		=> 1,
					'keterangan'  	=> $keterangan,
					'phone'			=> $telp,
					'email'  		=> $email,
					'tgl_daftar'  => $date,
					'created_at'  => $date,
					'updated_at'  => $date,
					'deleted_at'  => $date,
					'image'  	  => $this->upload->data('file_name')
					);
				$this->m_users->input_data($data_user,'users');
				redirect('dashboard/admin/data/user/list');
		}
	}

	function hapus(){
		$id = $_GET['id'];
		$where = array('id_user' => $id);
		$this->m_users->hapus_data($where,'users');
		echo 'succeed';
	}

	function softdelete(){
		$id = $_GET['id'];
		$status = 0;

		$data = array(
			'status' 	=> $status
		);

		$where = array(
			'id_user' => $id
		);
		$this->m_users->hapus_data_soft($where,$data,'users');

		echo 'succeed';
	}

	function restoredelete(){
		$id = $_GET['id'];
		$status = 1;

		$data = array(
			'status' 	=> $status
		);

		$where = array(
			'id_user' => $id
		);
		$this->m_users->hapus_data_soft($where,$data,'users');

		echo 'succeed';
	}

	function edit_user($id){
		$where = array('id_user' => $id);
		$data['edit_user'] = $this->m_users->edit_data($where,'users')->result();
		$this->load->view('adminview/editdatauser',$data);
	}

	function update(){
		$config['upload_path'] = './assets/dashboard/dist/img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '10000'; //in kb

		$this->upload->initialize($config);

		$id = $this->input->post('id');
		$fulname = $this->input->post('fulname');
		$username = $this->input->post('username');
		$pass = md5($this->input->post('pass'));
		$role = $this->input->post('role');
		$keterangan = $this->input->post('keterangan');
		$telp = $this->input->post('telp');
		$email = $this->input->post('email');
		date_default_timezone_set("Asia/Jakarta");
		$date = date('Y-m-d H:i:s');
		$this->upload->do_upload('image');
		$imagepp = $this->upload->data('file_name');

		if($imagepp == "")
		{
			$data = array(
				'fullname'		=> $fulname,
				'username' 		=> $username,
				'password'		=> $pass,
				'role'  		=> $role,
				'keterangan'  	=> $keterangan,
				'phone'			=> $telp,
				'email'  		=> $email,
				'updated_at'    => $date
			);
			$where = array(
				'id_user' => $id
			);
			$this->m_users->update_data($where,$data,'users');
			redirect('dashboard/admin/data/user/list');
		}else{
			$data = array(
				'fullname'		=> $fulname,
				'username' 		=> $username,
				'password'		=> $pass,
				'role'  		=> $role,
				'keterangan'  	=> $keterangan,
				'phone'			=> $telp,
				'email'  		=> $email,
				'image'  		=> $this->upload->data('file_name'),
				'updated_at'    => $date
			);
			$where = array(
				'id_user' => $id
			);
			$this->m_users->update_data($where,$data,'users');
			redirect('dashboard/admin/data/user/list');
		}
	}
}
