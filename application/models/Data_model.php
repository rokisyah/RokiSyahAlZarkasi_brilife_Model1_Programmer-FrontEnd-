<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_model extends CI_Model {
	
	function tampil_data_kontrasepsi(){
		return $this->db->get('list_kontrasepsi');
		
	}

	function tampil_data_propinsi(){
		return $this->db->get('list_propinsi');
		return $query->result_array();
	}

	function tampil_data_pemakai(){
		return $this->db->get('list_pemakai_kontrasepsi');
		return $query->result_array();
	}
	function tampil_laporan_pemakai(){
		$this->db->select('list_propinsi.*,list_pemakai_kontrasepsi.*');
    	$this->db->from('list_propinsi');
   	 	$this->db->join('list_pemakai_kontrasepsi', 'list_propinsi.Id_Propinsi = list_pemakai_kontrasepsi.Id_Propinsi', 'right outer'); 
    	$query = $this->db->get();
    	return $query->result();


		// return $this->db->get('list_pemakai_kontrasepsi');
		// return $query->result_array();
	}
	public function deleteDatakontrasepsi($id)
	{
		$this->db->where('id', $id);
		$this->db->delete("kelurahan");
	}

	public function addDataKontrasepsi()
	{
		$object = array('Id_Kontrasepsi' => $this->input->post('Id_Kontrasepsi'),
		                'Nama_Kontrasepsi' => $this->input->post('Nama_Kontrasepsi'));
		$this->db->insert("list_kontrasepsi", $object);
	}
	
	public function addDataPemakai()
	{
		$object = array('Id_Propinsi' => $this->input->post('Id_Propinsi'),
		                'Id_Kontrasepsi' => $this->input->post('Id_Kontrasepsi'),
		                // 'Id_Kontrasepsi' => $this->input->post('Id_Kontrasepsi'),
		                'Jumlah_Pemakai' => $this->input->post('Jumlah_Pemakai'));
		$this->db->insert("list_pemakai_kontrasepsi", $object);
	}
	
	public function addDataPropinsi()
	{
		$object = array('Id_Propinsi' => $this->input->post('Id_Propinsi'),
		                'Nama_Propinsi' => $this->input->post('Nama_Propinsi'));
		$this->db->insert("list_propinsi", $object);
	}


	public function editDatakontrasepsi($id)
	{
		$object = array('Kelurahan' => $this->input->post('kelurahan'),
		                'Jaringan' => $this->input->post('jaringan'),
		                'SistemInformasi' => $this->input->post('sistem'),
		                'Infrastruktur' => $this->input->post('infrastruktur'),
		            	'id_admin' => $this->session->userdata('id'));
		$this->db->where('id', $id);
		$this->db->update("kelurahan", $object);
	}

	
}