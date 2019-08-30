<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('AppController', 'Controller');

class BlogsController extends AppController {

	         var $name = 'Blogs';
                 var $scaffold; 
	         var $uses = array('Blog');
	
        	public function blogs() 
	   {
        	$this->pageTitle = 'Blogs| Enhance Clinics ';
            }
							  
						   
                    function getBlog()
	       {
	        $this->pageTitle = 'Blogs| Enhance Clinics ';	 
		$this->autoRender = false;
		$this->layout = null;
		$tt = array();
		$topMenu = $this->Blog->getBlogs();	
		//pr($topMenu);die;
		foreach($topMenu as $top){
			$tt['Blog_id'][] = $top['Blog']['id'];
			$tt['Blog'][] = $top['Blog']['title'];
			$tt['Blog_desc'][] = $top['Blog']['desc'];
			$tt['Blog_dated'][] = $top['Blog']['dated'];
		}
        $jsonData = json_encode($tt);
		return $jsonData;
	}
			        function details()
	        {
		                $subID = $this->request->params['param'];
				/* $subID = str_replace('-', ' ', $subID); */
				$this ->set('subID',$subID);
				$tt = array();
		$topMenu = $this->Blog->find("all", array(
						'conditions' => array('Blog.id'=> $subID,'Blog.status'=> 1),
	                            'fields' => array('Blog.id','Blog.title','Blog.desc','Blog.dated')	
					));		
		              foreach($topMenu as $top2)
		   {	
			             $subtitle = $top2['Blog']['title'];
			             $this ->set('subtitle',$subtitle);
		                     $subDesc = $top2['Blog']['desc'];
				     $this ->set('subDesc',$subDesc);
			             $subDated = $top2['Blog']['dated'];
				     $this ->set('subDated',$subDated);
		   }
		   }
	
	
	function beforeFilter() 
	{
		$this->theme = 'default';
	}
	
		       
	
	 		
}
?>