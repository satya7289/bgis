<?php

class Event extends AppModel {
/**
 * Namey
 *
 * @var string $name
 */
	
	    public $name =  'Event';
        var $useTable = 'news';
	    var $displayField = 'news_type';
	/*var $actsAs = array('Tree');*/
	
	var $validate = array('news_type' => array(
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
		
		
		
		function getLatestnews()
		{
		  $topMenu = "";
			$topMenu = $this->find("all", array(
						'conditions' => array('Event.status'=> 1 ,'Event.news_type'=> 1),
		'fields' => array('Event.news_image','Event.id','Event.news_heading','Event.url','Event.news_description','Event.news_date'),
						 'order' =>'Event.id DESC'
					));	
		if(!empty($topMenu)){
			return $topMenu;	
		}else{
			return false;	
		}
	  }
}

?>