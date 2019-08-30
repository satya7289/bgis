<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class AdmissionPageController extends CI_Controller {



	/**

	 * Index Page for this controller.

	 *

	 * Maps to the following URL

	 * 		http://example.com/index.php/welcome

	 *	- or -

	 * 		http://example.com/index.php/welcome/index

	 *	- or -

	 * Since this controller is set as the default controller in

	 * config/routes.php, it's displayed at http://example.com/

	 *

	 * So any other public methods not prefixed with an underscore will

	 * map to /index.php/welcome/<method_name>

	 * @see https://codeigniter.com/user_guide/general/urls.html

	 */

	public function index() 	{



		$this->load->view('CommonLayout/Header');

		$this->load->view('Admissionpage');

		$this->load->view('CommonLayout/Footer');

	} 

    public function getWebsiteInformation(){
        
    }


	public function instanceDonations()	{



		$this->load->view('CommonLayout/Header');

		$this->load->view('InstanceDonation');

		$this->load->view('CommonLayout/Footer');

	}  



	public function login(){

		if($this->session->userdata('logged_in')) {

			 redirect('dashboard', 'refresh');

		} else {



		$this->load->library('form_validation');



		$this->load->view('CommonLayout/Header');

		$this->load->view('loginpage');

		$this->load->view('CommonLayout/Footer');

	  }		

	}



	public function credentialsRequestHandler(){

		if($this->session->userdata('logged_in')) {

			 redirect('dashboard', 'refresh');

		} else {



		$this->load->library('form_validation');



		$username = $this->input->post('username');

		$password = $this->input->post('password'); 



		$this->form_validation->set_rules('username', 'Username', 'trim|required');

		$this->form_validation->set_rules('password', 'Password', 'trim|required');





		if ($this->form_validation->run() == FALSE) {



            $this->load->view('CommonLayout/Header');

			$this->load->view('loginpage');

			$this->load->view('CommonLayout/Footer');



         } else  {



         	$data = array('username' => $username,'password' => $password);

            $this->load->model('credentialsHandler');

            $userAuthenticate = $this->credentialsHandler->getUserAuthenticate($data);  



            if($userAuthenticate == TRUE)  {

            	 $this->session->set_userdata('logged_in', $userAuthenticate);

            	 redirect('dashboard', 'refresh');



            } else{



            	$this->session->set_flashdata('message_display', 'Invalid Username or Password'); 



            	$this->load->view('CommonLayout/Header');

				$this->load->view('loginpage');

				$this->load->view('CommonLayout/Footer');

            }              

        }

      }



	}





	public function dashboard(){



		if($this->session->userdata('logged_in')) {

				$this->load->view('CommonLayout/admin-header');

				$this->load->view('admin-dashboard');

				$this->load->view('CommonLayout/Footer');





			} else {

				$this->load->library('form_validation');

				$this->load->view('CommonLayout/Header');

				$this->load->view('loginpage');

				$this->load->view('CommonLayout/Footer');

		}

	}



	public function admissionDetails(){



		if($this->session->userdata('logged_in')) { 



				$this->load->model('credentialsHandler');

	            $data['admissions'] = $this->credentialsHandler->getAdmissionsDetails();



				$this->load->view('CommonLayout/admin-header');

				$this->load->view('admin-adminssions',$data);

				$this->load->view('CommonLayout/Footer');





			} else {

				$this->load->library('form_validation');

				$this->load->view('CommonLayout/Header');

				$this->load->view('loginpage');

				$this->load->view('CommonLayout/Footer');

		}



	}	



	public function donationDetails(){



		if($this->session->userdata('logged_in')) {

				$this->load->view('CommonLayout/admin-header');

				$this->load->view('admin-donations');

				$this->load->view('CommonLayout/Footer');





			} else {

				$this->load->library('form_validation');

				$this->load->view('CommonLayout/Header');

				$this->load->view('loginpage');

				$this->load->view('CommonLayout/Footer');

		}



	}

 











	public function logout() {

		$sess_array = array('username' => '');

		$this->session->unset_userdata('logged_in', $sess_array); 



		$this->load->library('form_validation');

		$this->load->view('CommonLayout/Header');

		$this->load->view('loginpage');

		$this->load->view('CommonLayout/Footer');

	}













		// create xlsx

    public function createXLS() {



 		 $this->load->model('Invoice', 'export');



		// create file name

        $fileName = 'Reports/BGIS-DATA'.time().'.xlsx';  

		// load excel library

        $this->load->library('Excel');	  



        $empInfo = $this->export->employeeList();

        $objPHPExcel = new PHPExcel();

        $objPHPExcel->setActiveSheetIndex(0);

        // set Header

        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Full Name');

        $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Refence ID');

        $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Tracking ID');

        $objPHPExcel->getActiveSheet()->SetCellValue('D1', 'Grade');

        $objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Admission');       

        $objPHPExcel->getActiveSheet()->SetCellValue('F1', 'Parents Name');       

        $objPHPExcel->getActiveSheet()->SetCellValue('G1', 'Payment Mode');       

        $objPHPExcel->getActiveSheet()->SetCellValue('H1', 'Amount');       

        $objPHPExcel->getActiveSheet()->SetCellValue('I1', 'Mobile No');       

        $objPHPExcel->getActiveSheet()->SetCellValue('J1', 'Email ID');       

        $objPHPExcel->getActiveSheet()->SetCellValue('K1', 'Transfer Date');     

        // set Row

        $rowCount = 2;



        foreach ($empInfo as $element) {

            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, str_replace( '_',' ',$element['billing_name']));

            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $element['order_id']);

            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $element['tracking_id']);

            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $element['applyingGrade']);

            $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $element['admission_date']);

            $objPHPExcel->getActiveSheet()->SetCellValue('F' . $rowCount, str_replace( '_',' ',$element['parentname'])); 

            $objPHPExcel->getActiveSheet()->SetCellValue('G' . $rowCount, $element['payment_mode']);

            $objPHPExcel->getActiveSheet()->SetCellValue('H' . $rowCount, $element['amount']);

            $objPHPExcel->getActiveSheet()->SetCellValue('I' . $rowCount, $element['billing_tel']);

            $objPHPExcel->getActiveSheet()->SetCellValue('J' . $rowCount, str_replace( '(a)','@',$element['billing_email']));

            $objPHPExcel->getActiveSheet()->SetCellValue('K' . $rowCount, $element['trans_date']);

            $rowCount++;

        }





        $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);

        $objWriter->save($fileName);

		// // download file

        header("Content-Type: application/vnd.ms-excel");

        redirect($fileName);  





    }





}

