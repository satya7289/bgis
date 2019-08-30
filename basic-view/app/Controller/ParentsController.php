<?php

App::uses('AppController', 'Controller');
class ParentsController extends AppController
 {
     var $name = 'Parents';
    var $helpers = array('Html', 'Session');
	var $components = array('Email','RequestHandler');
	var $uses = array('Parents');

                 public function parents()
            {
	               $this->pageTitle = 'Parent Life  | BGIS ';
				  $topMenu = $this->Parents->find('all',array('conditions'=> array('Parents.status'=> 1),'fields'=>array('Parents.id','Parents.content','Parents.banner_image','Parents.page_title')));
			       foreach($topMenu as $tt)
			      {
			        $id = $tt['Parents']['id'];
			        $this->set('id',$id);
				    $content = $tt['Parents']['content'];
			        $this->set('content',$content);
				    $banner_img = $tt['Parents']['banner_image'];
			        $this->set('banner_img',$banner_img);
				    $page_title = $tt['Parents']['page_title'];
			        $this->set('page_title',$page_title);		  
			    }
}
         		  

			 function beforeFilter() 
				{
					$this->theme = 'default';
				}
   		   
}
?>