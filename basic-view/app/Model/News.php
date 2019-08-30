<?php

class News extends AppModel {
/**
 * Namey
 *
 * @var string $name
 */
	
	    public $name =  'News';
        var $useTable = 'newsletter';
	    var $displayField = 'news_date';
	/*var $actsAs = array('Tree');*/
	
	var $validate = array('news_date' => array(
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
		
		
	
		function getPublicationnew()
		{
		  $topMenu = "";
			$topMenu = $this->find("all", array(
						'conditions' => array('News.status'=> 1),
		'fields' => array('News.news_image','News.id','News.news_date'),
						 'order' =>'News.id DESC'
					));	
		if(!empty($topMenu)){
			return $topMenu;	
		}else{
			return false;	
		}
	  } 
}

?>