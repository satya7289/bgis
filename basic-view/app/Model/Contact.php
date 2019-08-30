<?php


class Contact extends AppModel {

	 public $name = 'Contact';
	 var $useTable = 'contact';
	
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