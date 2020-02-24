<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('Data_model');
                $this->load->helper('url');
	}
 
	function index(){
		$data['title'] = 'Data Master';
		$data['pemakaikontrasepsi'] = $this->Data_model->tampil_data_pemakai()->result();				
		$data['propinsi'] = $this->Data_model->tampil_data_propinsi()->result();
		$data['kontrasepsi'] = $this->Data_model->tampil_data_kontrasepsi()->result();
		$data['content'] = $this->load->view('pemakaikontrasepsi',$data, TRUE);
		$this->load->view('element/main', $data);	
	}

	function kontrasepsi(){
		$data['title'] = 'Data Master';
		$data['kontrasepsi'] = $this->Data_model->tampil_data_kontrasepsi()->result();		
		// $this->load->view('listkontrasepsi',$data);		
		// $data['kontrasepsi'] = $this->Data_model->tampil_data_kontrasepsi();
		//$data['normalisasi'] = $this->Data_model->getNormalisasi();
		$data['content'] = $this->load->view('listkontrasepsi',$data, TRUE);
		$this->load->view('element/main', $data);	
	}


	function propinsi(){
		$data['title'] = 'Data Propinsi';
		$data['propinsi'] = $this->Data_model->tampil_data_propinsi()->result();		
		$data['content'] = $this->load->view('listpropinsi',$data, TRUE);
		$this->load->view('element/main', $data);
	}

	function laporanpemakai(){
		$data['title'] = 'Laporan Pemakai';
		$data['propinsi'] = $this->Data_model->tampil_data_propinsi()->result();		
		// $data['laporanpemakai'] = $this->Data_model->tampil_laporan_pemakai()->result();
		$data['laporanpemakai'] = $this->Data_model->tampil_laporan_pemakai();		
		$data['content'] = $this->load->view('laporanpemakai',$data, TRUE);
		$this->load->view('element/main', $data);
	}

	public function tambahData()
	{
		$this->Data_model->addDataKontrasepsi();
		redirect(base_url().'Dashboard/kontrasepsi');
	}

	public function tambahPropinsi()
	{
		$this->Data_model->addDataPropinsi();
		redirect(base_url().'Dashboard/propinsi');
	}

	public function tambahPemakai()
	{
		$this->Data_model->addDataPemakai();
		redirect(base_url().'Dashboard/index');
	}
	public function editData($id)
	{
		$this->Data_model->editDataKontrasepsi($id);
		redirect(base_url().'Dashboard/kontrasepsi');
	}
	public function editPropinsi($id)
	{
		$this->Data_model->editDataPropinsi($id);
		redirect(base_url().'Dashboard/propinsi');
	}
	public function hapusData($id)
	{
		$this->Data_model->deleteDataKontrasepsi($id);
		redirect(base_url().'Dashboard/kontrasepsi');
	}
	public function hapusPropinsi($id)
	{
		$this->Data_model->deleteDataPropinsi($id);
		redirect(base_url().'Dashboard/propinsi');
	}
	
}
