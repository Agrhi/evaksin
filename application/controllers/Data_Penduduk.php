<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Penduduk extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_penduduk');
		cek_login();
	}

	public function index()
	{
		$data = [
			'title' => 'Data Penduduk',
			'penduduk' => $this->M_penduduk->get(),
		];

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('layout/navbar', $data);
		$this->load->view('content/admin/penduduk/index', $data);
		$this->load->view('layout/footer');
	}

	public function add()
	{
		$data 	= [
			'nik' => $this->input->post('nik'),
			'nama' => $this->input->post('nama'),
			'ttl' => $this->input->post('tmpt') .','. $this->input->post('tgl'),
			'jk' => $this->input->post('jk'),
			'alamat' => $this->input->post('alamat'),
			'agama' => $this->input->post('agama'),
			'tikor' => $this->input->post('lokasi'),
			'sd1' => $this->input->post('st1'),
			'sd2' => $this->input->post('st2'),
			'sd3' => $this->input->post('st3'),
			'latitude' => $this->input->post('latitude'),
			'longitude' => $this->input->post('longitude')
		];
	}
}
