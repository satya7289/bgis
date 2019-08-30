<?php


class Campusdonation extends AppModel {

	  public $name =  'Campusdonation';
	  var $useTable = 'campus_donation';
	
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