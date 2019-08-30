<?php

class Registration extends AppModel {
/**
 * Namey
 *
 * @var string $name
 */
	
	    public $name = 'Registration';
            var $useTable = 'registration';
	    var $displayField = 'email';
	/*var $actsAs = array('Tree');*/
	
	var $validate = array('email' => array('rule' => 'email')); 
}

?>