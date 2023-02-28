<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model 
{

	public function total_user() 
	{
		return $this->db->get('user')->num_rows();
	}
}
