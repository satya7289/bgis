<?php

class Result extends AppModel {
/**
 * Namey
 *
 * @var string $name
 */
	
	    public $name =  'Result';
        var $useTable = 'students_detail';
	    var $displayField = 'roll_no';
	/*var $actsAs = array('Tree');*/
	
	      var $validate = array('roll_no' => array(
			       'notempty' => array(
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