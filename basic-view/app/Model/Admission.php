<?php

class Admission extends AppModel {
/**
 * Namey
 *
 * @var string $name
 */
	
	    public $name = 'Admission';
        var $useTable = 'admission';
	    var $displayField = 'title_page';
	/*var $actsAs = array('Tree');*/
	
	 var $belongTo = array(
		  'Submenu' => array(
			'className' => 'Submenu',
			'foreignKey' => 'menu_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	var $validate = array('title_page' => array(
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