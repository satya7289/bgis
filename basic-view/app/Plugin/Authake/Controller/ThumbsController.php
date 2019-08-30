<?php  
class ThumbsController extends AppController 
{ 
    var $name = 'Thumbs'; 
    var $uses = null; 
    var $layout = null; 
    var $autoRender = false; 
	public $components = array('Image');
  
  	function beforeFilter() {
		$this->Auth->allowedActions = array('index');
	}
    	
    function index() 
    {
		#print_r($this -> params['pass']);
		$width = $this -> params['pass'][0];
		$height = $this -> params['pass'][1];
		$option = $this -> params['pass'][2];
		$image = $this -> params['pass'][3];
		
		if(empty($width) || empty($height) || empty($option) || empty($image)) die();
		
		if($option == "users")
		{
			$image = WWW_ROOT . $this -> userDIR . $image;
		}
		

		if($option == "admissions")
		{
			$image = WWW_ROOT . $this -> admissionDIR . $image;
		}
		if($option == "campus")
		{
			$image = WWW_ROOT . $this -> campusDIR . $image;
		}
		if($option == "contributes")
		{
			$image = WWW_ROOT . $this -> contributeDIR . $image;
		}
				
		if(is_file($image))
		{
			$this -> Image -> createThumbnail($image, $width, $height);
		}
		
		exit();
	} 
} 
?>