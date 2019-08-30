<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DonationPageController extends CI_Controller {

		public function index() {

		$this->load->view('CommonLayout/Header');
		$this->load->view('donationpage');
		$this->load->view('CommonLayout/Footer');
	} 

}
