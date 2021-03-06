<?php

class m_schremble extends CI_Model
{
	function tampil_data()
	{
		$this->db->select("");
    	$this->db->from("schremble");
		$this->db->where("status","1");
	    $this->db->order_by("id", "asc");
	    $query = $this->db->get();
	    return $query;
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function hapus_data_soft($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function edit_data($where,$table){
	return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}
