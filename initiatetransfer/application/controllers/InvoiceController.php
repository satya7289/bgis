<?php 
class InvoiceController extends CI_Controller{

	public function InvoiceProcessing(){ 

		$invoice_id =  $this->input->get('invoice');
		$this->load->model('Invoice');

		$data['invoiceDetails'] = $this->Invoice->getInvoiceById($invoice_id);
 
		$this->load->view('invoice',$data);		 
		

	}
}