<?php

class Submenu extends AppModel {
/**
 * Namey
 *
 * @var string $name
 */
	    public $name = 'Submenu';
    	var $useTable = 'sub_menu';
	    var $displayField = 'name';
	/*var $actsAs = array('Tree');*/
	
	 var $belongTo = array(
		'Menu' => array(
			'className' => 'Menu',
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
		
      function getAboutMenu(){
		$topMenu = "";
		$topMenu = $this->find("all", array(
						'conditions' => array('Submenu.menu_id'=> 2,'Submenu.status'=> 1),
						   'fields' => array('Submenu.name','Submenu.id'),
						   'order' =>'Submenu.id ASC'
					));	
		if(!empty($topMenu)){
			return $topMenu;	
		}else{
			return false;	
		}
	}
	function getCampusMenu(){
		$topMenu = "";
			$topMenu = $this->find("all", array(
						'conditions' => array('Submenu.menu_id'=> 3,'Submenu.status'=> 1),
						'fields' => array('Submenu.name','Submenu.id'),
						'order' =>'Submenu.id ASC'
					));	
		if(!empty($topMenu)){
			return $topMenu;	
		}else{
			return false;	
		}
	}
	function getAdmissionMenu(){
		$topMenu = "";
			$topMenu = $this->find("all", array(
						'conditions' => array('Submenu.menu_id'=> 4,'Submenu.status'=> 1),
						'fields' => array('Submenu.name','Submenu.id'),
						'order' =>'Submenu.id ASC'
					));	
		if(!empty($topMenu)){
			return $topMenu;	
		}else{
			return false;	
		}
	}
	   function getContributeMenu(){
		$topMenu = "";
			$topMenu = $this->find("all", array(
						'conditions' => array('Submenu.menu_id'=> 5,'Submenu.status'=> 1),
						'fields' => array('Submenu.name','Submenu.id'),
						'order' =>'Submenu.id ASC'
					));	
		if(!empty($topMenu)){
			return $topMenu;	
		}else{
			return false;	
		}
	}
	
}
