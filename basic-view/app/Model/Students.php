<?php

class Student extends AppModel {
/**
 * Namey
 *
 * @var string $name
 */
	
	    public $name =  'Student';
        var $useTable = 'students';
	    var $displayField = 'page_title';
	/*var $actsAs = array('Tree');*/
	
	var $validate = array('page_title' => array(
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