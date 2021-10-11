<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Imunisasi');
	}
	public function index()
	{
		$recordImn = $this->Imunisasi->getDataImunisasi();
		$DATA = array('data_imn' => $recordImn);
		$this->load->view('home', $DATA);
	}
	public function input()
	{
		$this->load->view('input');
	}
	public function edit($id_anak)
	{
		$queryImunisasiDetail = $this->Imunisasi->getDataImunisasiDetail($id_anak);
		$DATA = array('queryImnDetail' => $queryImunisasiDetail);
		$this->load->view('edit', $DATA);
	}

	public function fungsiInput()
	{
		$id_anak = $this->input->post('id_anak');
		$nama_anak = $this->input->post('nama_anak');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$usia = $this->input->post('usia');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$nama_ibu = $this->input->post('nama_ibu');
	
			$ArrInsert = array(
				'id_anak' => $id_anak,
				'nama_anak' => $nama_anak,
				'tempat_lahir' => $tempat_lahir,
				'tanggal_lahir' => $tanggal_lahir,
				'usia' => $usia,
				'jenis_kelamin' => $jenis_kelamin,
				'nama_ibu' => $nama_ibu
			);
			$this->Imunisasi->insertDataImunisasi($ArrInsert);
			redirect(base_url(''));
	}
}
