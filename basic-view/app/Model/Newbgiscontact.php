<?php


class Newbgiscontact extends AppModel {

	 public $name = 'Newbgiscontact';
	 var $useTable = 'contact_newbgis';
	
	public $validate = array(
		'name' => 'notEmpty',
                 'email' => array(
			'rule' => 'email',
			'required' => true,
			'message' => 'Please enter a valid Email Address'
		)
		
    );
}
?>