<?php


class Donation extends AppModel {

	  public $name =  'Donation';
	  var $useTable = 'donation';
	
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