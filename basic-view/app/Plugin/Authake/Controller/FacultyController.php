<?php 

  class FacultyController extends AppController 
{
     	 public $name = 'Faculty';
		 public $helper = array('Html','Session');
		 public $components = array('Image');
		 public $uses = array('Faculty');
			 public $paginate = array(
				'limit' => 10,
				'order' => array(
					'Faculty.created' => 'DESC'
				)
			);
		
	   function beforeFilter()
{ 
    	     parent::beforeFilter();     
	         $this->layout = 'authake';
      	     $this->facultyDIR = "img/faculty/";
}  
             function index()
	     {
		      $this->Faculty->recursive = -1; 
			  $faculties = array();
			  $absPath = Router::url("/", false);
	       	  $Fields = array(
							 'Faculty.id',
							 'Faculty.name',
							 'Faculty.banner_image',
							 'Faculty.created',
							 'Faculty.status',
							 'Faculty.detail'
							);
		   $sqlArr = array('fields' => $Fields,
						'order' => array('Faculty.created'=>'DESC')
						);
         		  $this->paginate = $sqlArr;
		
		    $faculties = $this->paginate('Faculty'); 
		            $this->set('faculties', $faculties);
		 }
		 
	  function view($id = null) 
	  {
		 if (!$id) {
			$this->Session->setFlash(__('Invalid Page', true));
			$this->redirect(array('action' => 'index'));
		 }
		$faculty = $this->Faculty->read(null, $id);
		if(!empty($faculty))
		{
			#Page Image
			$absPath = Router::url("/", false);
			$faculty['Faculty']['banner_image'] = (!empty($faculty['Faculty']['banner_image'])) ? 
												$absPath."img/faculty/".$faculty['Faculty']['banner_image'] : "";
			#Created On
		}
	       	$this->set('faculty', $faculty);
	}
	      function __addImage()
	{
		if (!empty($this->data))
		{	
			$imgArr = $this ->request-> data['Faculty']['banner_image'];
			$fileName = "";
			$mimeArr = array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/png');
			if(!empty($imgArr['name']))
			{
				if(!in_array($imgArr['type'], $mimeArr)) return "err:Please select valid Image.";
				$imgName = $thumbName = time();
				$uploadArr = array	(	'uploadPath' => WWW_ROOT . $this -> facultyDIR, 
										'fileName' => $imgName,
										'thumb' => array(	'thumbPath' => WWW_ROOT . $this -> facultyDIR, 
															'thumbName' => $thumbName,
														    'thumbWidth' => 130,
															'thumbHeight' => 142
														)
									);
							
				  $this ->Image-> setPaths($uploadArr);
				$fileName = $this -> Image -> upload_image('Faculty.banner_image'); #Upload FIle
				if(empty($fileName)) #If FIle has not been uploaded
					return 'err:The image could not be uploaded.';
			}			
			return $fileName;
		}
	}
	
		       function add() 
	{
			if (!empty($this->request->data))
			{	
				$isUploaded = $this -> __addImage();
				if(strpos($isUploaded, "err:") !== false)
				{
					$this->Session->setFlash(__(substr($isUploaded, 4), true));
				}
				else
				{
					$this ->request->data['Faculty']['banner_image'] = $isUploaded;
					$this->Faculty->create();
					if  ($this->Faculty->save($this->request->data)) {
						$this->Session->setFlash(__('The Faculty page has been saved', true));
					  $this->redirect( array('controller'=>'faculty','action' => 'index'));
					} else {
						$this->Session->setFlash(__('The Faculty page could not be saved. Please, try again.', true));
					}
				}
			}
		                
	}
	
	     function edit($id = null) {
		  if (!$id && empty($this ->request->data)) {
			$this->Session->setFlash(__('Invalid page', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this ->request->data))
		{
				if ($this->Faculty->save($this ->request->data))
		    {
					$this->Session->setFlash(__('The page has been saved', true));
					$this->redirect(array('action' => 'index'));
				} 
				else {
					$this->Session->setFlash(__('The page could not be saved. Please, try again.', true));
				}
			}
		if (empty($this ->request->data)) {
			$this ->request->data = $this->Faculty->read(null, $id);
		}
		
		#$options = array('0'=>'---Select---');		
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for page', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Faculty->delete($id)) {
			$this->Session->setFlash(__('page deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		    $this->Session->setFlash(__('page was not deleted', true));
		     $this->redirect(array('action' => 'index'));
	}
	  
       	  
  }