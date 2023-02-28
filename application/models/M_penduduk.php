<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_penduduk extends CI_Model
{
	public function get()
	{

		$sql = "SELECT * FROM `penduduk`";

		$data = $this->db->query($sql);

		return $data->result();
	}
}
