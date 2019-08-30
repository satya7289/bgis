<?php

class HomepagesController extends AppController
 {
    var $name = 'Homepages';
    var $helpers = array('Html', 'Session');
	var $components = array('Email','RequestHandler');
	var $uses = array('Event');
	function beforeFilter() 
	{
		$this->theme = 'default';
	}
		 

   		      function index() 
	        {
	              $this->pageTitle = 'BGIS - One of the Top Boarding Schools in India | Residential Schools in India | BGIS ';
	        } 
			
			      function getlatest()
			   {
				    $this->autoRender = false;
		                      $this->layout = null;
		                        $tt = array();
		                     $topMenu = $this->Event->getLatestnews();
		                   foreach($topMenu as $top){
					 $tt['Event_id'][] = $top['Event']['id'];
					 $tt['Event_heading'][] = $top['Event']['news_heading'];	
					 $tt['Event_date'][] = $top['Event']['news_date'];	
					 $tt['Event_image'][] = $top['Event']['news_image'];
					 $tt['Event_url'][] = $top['Event']['url'];
					 $tt['Event_description'][] = substr($top['Event']['news_description'],0,248);
				}
				$jsonData = json_encode($tt);
	          	return $jsonData;
				
			}
			
	                
					   function getDaily()
			   {
				    $this->autoRender = false;
		            $this->layout = null;
		            $tt = array();
		           $topMenu = $this->Event->getLatestnews();
		           foreach($topMenu as $top){
					 $tt['Event_id'][] = $top['Event']['id'];
					 $tt['Event_heading'][] = $top['Event']['news_heading'];	
					 $tt['Event_date'][] = $top['Event']['news_date'];	
					 $tt['Event_image'][] = $top['Event']['news_image'];
					 $tt['Event_description'][] = $top['Event']['news_description'];
				}
				$jsonData = json_encode($tt);
	          	return $jsonData;
				
			}
			      function getMedia()
			   {
				    $this->autoRender = false;
		            $this->layout = null;
		            $tt = array();
		           $topMenu = $this->Event->getLatestnews();
		           foreach($topMenu as $top){
					 $tt['Event_id'][] = $top['Event']['id'];
					 $tt['Event_heading'][] = $top['Event']['news_heading'];	
					 $tt['Event_date'][] = $top['Event']['news_date'];	
					 $tt['Event_image'][] = $top['Event']['news_image'];
					 $tt['Event_description'][] = $top['Event']['news_description'];
				}
				$jsonData = json_encode($tt);
	          	return $jsonData;
				
			}   
			                 
			 
}
?>