<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Management_User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
		cek_login();
	}

	public function index()
	{
		$role = $this->session->userdata('role');
		$data = [
			'title' => 'Management User',
			'user' => $this->M_user->get($role)
		];
		// print_r($data['user']); die;
		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('layout/navbar', $data);
		$this->load->view('content/admin/management_user/index', $data);
		$this->load->view('layout/footer');
	}

	public function add()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required', ['required' => 'Anda belum memasukan Nama User']);
		$this->form_validation->set_rules('username', 'Username', 'trim|required', ['required' => 'Anda belum memasukan Username User']);
		$this->form_validation->set_rules('pass', 'Password', 'trim|required|min_length[3]', ['required' => 'Anda belum memasukan Password User', 'min_length' => 'Minimal Password 3 Digit Huruf/Angka/Karakter']);
		$this->form_validation->set_rules('status', 'Status', 'trim|required', ['required' => 'Anda belum memili Status User']);

		if ($this->form_validation->run() != false) {
			$data 	= [
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'pass' => $this->input->post('pass'),
				'status' => $this->input->post('status')
			];
			$result = $this->M_user->insert($data);
			if ($result > 0) {
				$this->session->set_flashdata('pesan', 'Data Berhasil Di Tambahkan !!!');
				redirect('Management_User');
			} else {
				$this->session->set_flashdata('error', 'Data Gagal di Tambahkan !!!');
				redirect('Management_User');
			}
		} else {
			$this->session->set_flashdata('error', validation_errors());
			// $this->session->set_flashdata('error', 'Data Gagal di Tambahkan !!!');
			redirect('Management_User');
			// $this->load->view('content/admin/management_user/index');	
		}
	}

	public function edit()
	{
		$data = [
			'username' => $this->input->post('username'),
			'pass' => $this->input->post('pass'),
			'id' => $this->input->post('id')
		];
		$result = $this->M_user->update($data);
		if ($result > 0) {
			$this->session->set_flashdata('pesan', 'Data Berhasil Di Ubah !!!');
			redirect('Management_User');
		} else {
			$this->session->set_flashdata('error', 'Data Gagal di Ubah !!!');
			redirect('Management_User');
		}
	}

	public function nonaktif($id)
	{
		$result = $this->M_user->nonaktif($id);
		if ($result > 0) {
			$this->session->set_flashdata('pesan', 'Akun Berhasil di Non Aktifkan');
			redirect('Management_User');
		} else {
			$this->session->set_flashdata('error', 'Akun Gagal di Non Aktifkan');
			redirect('Management_User');
		}
	}

	public function aktif($id)
	{
		$result = $this->M_user->aktif($id);
		if ($result > 0) {
			$this->session->set_flashdata('pesan', 'Akun Berhasil di Aktifkan');
			redirect('Management_User');
		} else {
			$this->session->set_flashdata('error', 'Akun Gagal di Aktifkan');
			redirect('Management_User');
		}
	}
}
