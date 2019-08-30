<?php

class Upload extends AppModel {
/**
 * Namey
 *
 * @var string $name
 */
	
	    public $name =  'Upload';
        var $useTable = 'results';
	    var $displayField = 'registration_no';
	/*var $actsAs = array('Tree');*/
	
	  var $validate = array('registration_no' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		      'result_pdf' => array(
		     	'notempty' => array(
				'rule' => array('notempty'),
				),
		),
		);
}

?>