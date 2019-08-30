<?php

App::uses('AppController', 'Controller');
class StudentsController extends AppController
 {
    var $name = 'Students';
    var $helpers = array('Html', 'Session');
	var $components = array('Email','RequestHandler');
	var $uses = array('Student');

                 public function student()
            {
	               $this->pageTitle = 'Student Life  | BGIS ';
				  $topMenu = $this->Student->find('all',array('conditions'=> array('Student.status'=> 1),'fields'=>array('Student.id','Student.content','Student.banner_image','Student.page_title')));
			       foreach($topMenu as $tt)
			      {
			        $id = $tt['Student']['id'];
			        $this->set('id',$id);
				    $content = $tt['Student']['content'];
			        $this->set('content',$content);
				    $banner_img = $tt['Student']['banner_image'];
			        $this->set('banner_img',$banner_img);
				    $page_title = $tt['Student']['page_title'];
			        $this->set('page_title',$page_title);		  
			    }
}
         		   public function alumni()
                    {
            
                             $this->pageTitle = 'Alumni | BGIS ';
                 }

			 function beforeFilter() 
				{
					$this->theme = 'default';
				}
   		   
}
?>