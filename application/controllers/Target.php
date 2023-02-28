<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Target extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$data = [
			'title' 		=> 'Target Vaksin'
		];
		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('layout/navbar', $data);
		$this->load->view('content/admin/target/index');
		$this->load->view('layout/footer');
	}
}
