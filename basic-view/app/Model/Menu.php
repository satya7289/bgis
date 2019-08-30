<?php

class Menu extends AppModel {
/**
 * Namey
 *
 * @var string $name
 */
	
	
	
	    public $name = 'Menu';
    	var $useTable = 'menu';
	    var $displayField = 'name';
	/*var $actsAs = array('Tree');*/
	
	var $hasMany = array(
		'Submenu' => array(
			'className' => 'Submenu',
			'foreignKey' => 'menu_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	var $validate = array('name' => array(
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
