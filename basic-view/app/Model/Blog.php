<?php
class Blog extends AppModel {

			   public $name = 'Blog';
			   var $useTable = 'blogs';
			   var $displayField = 'title';
	
              	function getBlogs()
             {
	            $topMenu = "";
		    $topMenu = $this->find("all", array( 
		'fields' => array('Blog.id','Blog.title','Blog.desc','Blog.dated')	
					));	
		if(!empty($topMenu))
		{
			return $topMenu;	
		}else
		{
			return false;	
		}
         	}
	function checkthis($val)
	{
		$value = array_values($val);
		$value = $value[0];
		if(empty($value)) return false;
		else return true;
	}
}
?>