<?php

class Gusers extends AppModel {
/**
 * Namey
 *
 * @var string $name
 */
	
	    public $name =  'Gusers';
        var $useTable = 'authake_groups_users';
	    var $displayField = 'user_id';
	/*var $actsAs = array('Tree');*/
	
	  var $validate = array('user_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		)
		);
}

?>