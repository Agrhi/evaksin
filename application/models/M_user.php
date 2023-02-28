<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
	public function get($role)
	{

		$sql = "SELECT * FROM `user`";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function insert($data)
	{
		$sql = "INSERT INTO `user`(`id`, `nama`, `username`, `password`, `role`, `active`) VALUES ('','" . $data['nama'] . "','" . $data['username'] . "','" . $data['pass'] . "','1','" . $data['status'] . "')";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}

	public function update($data)
	{
		$sql = "UPDATE `user` SET `username` = '" . $data['username'] . "', `password` = '" . $data['pass'] . "' WHERE `id` = '" . $data['id'] . "';";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function nonaktif($id)
	{
		$sql = "UPDATE `user` SET `active` = '0' WHERE `id` = '" . $id . "';";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function aktif($id)
	{
		$sql = "UPDATE `user` SET `active` = '1' WHERE `id` = '" . $id . "';";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}
}
