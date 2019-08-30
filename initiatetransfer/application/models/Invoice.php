<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Model {

	public function getInvoiceById($data){ 
		$query = $this->db->select('*')->where('order_id', $data)->get('adminssion_payment');
		if($query == TRUE) {
			return $query->result();
		}		 
	}  

	public function employeeList() {
        $this->db->select(array('billing_name', 'order_id', 'tracking_id', 'order_status', 'applyingGrade', 'admission_date','parentname','payment_mode','amount','billing_tel','billing_email','trans_date'));
        $this->db->from('adminssion_payment');
        $query = $this->db->get();
        return $query->result_array();       
    }


}


