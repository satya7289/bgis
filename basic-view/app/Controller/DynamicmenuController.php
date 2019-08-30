<?php
     class DynamicmenuController extends AppController
    {
    var $name = 'Dynamicmenu';
	public $components = array('Image'); 
	 var $uses = array('Submenu','Faculty');
	
	
      function getAbout()
	  {
		   $this->autoRender = false;
		   $this->layout = null;
		   $tt = array();
		
		  $topMenu = $this->Submenu->getAboutMenu();	
		   foreach($topMenu as $top){
			$tt['Submenu_id'][] = $top['Submenu']['id'];
			$tt['Submenu'][] = $top['Submenu']['name'];	
		}

		$jsonData = json_encode($tt);
		return $jsonData;	
	}
	  function getCampus()
	{
		$this->autoRender = false;
		$this->layout = null;
		$tt = array();
		
		 $topMenu = $this->Submenu->getCampusMenu();
		
	     	foreach($topMenu as $top){
			$tt['Submenu_id'][] = $top['Submenu']['id'];
			$tt['Submenu'][] = $top['Submenu']['name'];
		}

		$jsonData = json_encode($tt);
		return $jsonData;	
	}
	function getAdmission()
	{
		$this->autoRender = false;
		$this->layout = null;
		$tt = array();
		
		 $topMenu = $this->Submenu->getAdmissionMenu();	
		
	     	foreach($topMenu as $top){
			$tt['Submenu_id'][] = $top['Submenu']['id'];
			$tt['Submenu'][] = $top['Submenu']['name'];
		}

		$jsonData = json_encode($tt);
		return $jsonData;	
	}
	function getContribute()
	{
		$this->autoRender = false;
		$this->layout = null;
		$tt = array();
		 $topMenu = $this->Submenu->getContributeMenu();
	     	foreach($topMenu as $top){
			$tt['Submenu_id'][] = $top['Submenu']['id'];
			$tt['Submenu'][] = $top['Submenu']['name'];
		}

		$jsonData = json_encode($tt);
		return $jsonData;	
	}
	  function getFaculty()
	  {
		   $this->autoRender = false;
		   $this->layout = null;
		   $tt = array();
		  $topMenu = $this->Faculty->getFacultyMember();	
		     foreach($topMenu as $top){
			$tt['Faculty_id'][] = $top['Faculty']['id'];
			$tt['Faculty'][] = $top['Faculty']['name'];	
			$tt['Faculty_image'][] = $top['Faculty']['banner_image'];
			$tt['Faculty_detail'][] = $top['Faculty']['detail'];
			$tt['Faculty_postion'][] = $top['Faculty']['postion'];
		}

		$jsonData = json_encode($tt);
		return $jsonData;	
	}
/*	function getSubcat1()
	{
		$this->autoRender = false;
		$this->layout = null;
		$tt = array();
		$topMenu1 = $this->Subcategory->getSubcat1Menu();	
		
	     	foreach($topMenu1 as $top2){
			$tt['Subcategory_id'][] = $top2['Subcategory']['id'];
			$tt['Subcategory'][] = $top2['Subcategory']['cat_name'];	
			$tt['Subcategory_category_id'][] = $top2['Subcategory']['category_id'];
			$tt['Subcategory_cat_image'][] = $top2['Subcategory']['cat_image'];	
		}

		$jsonData = json_encode($tt);
		return $jsonData;	
	}
	function getSubcat2()
	{
		$this->autoRender = false;
		$this->layout = null;
		$tt = array();
		$topMenu2 = $this->Subcategory->getSubcat2Menu();	
		
	     	foreach($topMenu2 as $top3){
			$tt['Subcategory_id'][] = $top3['Subcategory']['id'];
			$tt['Subcategory'][] = $top3['Subcategory']['cat_name'];	
			$tt['Subcategory_category_id'][] = $top3['Subcategory']['category_id'];
			$tt['Subcategory_cat_image'][] = $top3['Subcategory']['cat_image'];	
		}

		$jsonData = json_encode($tt);
		return $jsonData;	
	}
	function getSubcat3()
	{
		$this->autoRender = false;
		$this->layout = null;
		$tt = array();
		$topMenu2 = $this->Subcategory->getSubcat3Menu();	
		
	     	foreach($topMenu2 as $top3){
			$tt['Subcategory_id'][] = $top3['Subcategory']['id'];
			$tt['Subcategory'][] = $top3['Subcategory']['cat_name'];	
			$tt['Subcategory_category_id'][] = $top3['Subcategory']['category_id'];
			$tt['Subcategory_cat_image'][] = $top3['Subcategory']['cat_image'];	
		}

		$jsonData = json_encode($tt);
		return $jsonData;	
	}*/
	
	    function beforeFilter()
	{  
		$this->theme = 'default';	
	} 

}
?>