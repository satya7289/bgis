<?php

class Transaction extends AppModel {
/**
 * Namey
 *
 * @var string $name
 */
	
	    public $name =  'Transaction';
            var $useTable = 'transaction';
	    var $displayField = 'transaction_id';
	/*var $actsAs = array('Tree');*/
	
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