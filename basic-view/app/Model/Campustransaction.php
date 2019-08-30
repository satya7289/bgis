<?php


class Campustransaction extends AppModel {

	   public $name =  'Campustransaction';
	   var $useTable = 'transaction_campus';
	
	var $validate = array('transaction_id' => array(
			'transaction_id' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		);
}
?>