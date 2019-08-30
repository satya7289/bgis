<?php

class Parents extends AppModel {
/**
 * Namey
 *
 * @var string $name
 */
	
	    public $name =  'Parents';
        var $useTable = 'parents';
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