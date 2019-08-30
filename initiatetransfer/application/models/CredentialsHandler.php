<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class credentialsHandler extends CI_Model {

	public function getUserAuthenticate($data) {
 
	$condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . md5($data['password']) . "'";
	$query = $this->db->select('*')->from('user_login')->where($condition)->limit(1)->get();
	if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		} 
	}


	public function getAdmissionsDetails() {

		$query = $this->db->select('*')->from('adminssion_payment')->order_by('id', 'DESC')->get();

		if($query) {
			return $query->result();
		}
	}  
}