<?php
                 class Blogs extends AppModel
                 {
			   public $name = 'Blogs';
			   var $useTable = 'blogs_newbgis';
			   var $displayField = 'title';
	
					function checkthis($val)
					{
						$value = array_values($val);
						$value = $value[0];
						if(empty($value)) return false;
						else return true;
					}
}
?>