<?php

class Faculty extends AppModel {
/**
 * Namey
 *
 * @var string $name
 */
	
	    public $name =  'Faculty';
        var $useTable = 'faculty';
	    var $displayField = 'name';
	/*var $actsAs = array('Tree');*/
	
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
		
		
		
		
		function getFacultyMember()
		{
		$topMenu = "";
			$topMenu = $this->find("all", array(
						'conditions' => array('Faculty.status'=> 1),
		'fields' => array('Faculty.name','Faculty.id','Faculty.banner_image','Faculty.detail','Faculty.postion'),
						 'order' =>'Faculty.id ASC'
					));	
		if(!empty($topMenu)){
			return $topMenu;	
		}else{
			return false;	
		}
	}
}

?>