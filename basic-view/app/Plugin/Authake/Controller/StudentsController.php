<?php 

  class StudentsController extends AppController 
{
     	 public $name = 'Students';
		 public $helper = array('Html','Session');
		 public $components = array('Image');
		 public $uses = array('Student');
			 public $paginate = array(
				'limit' => 10,
				'order' => array(
					'Student.modified' => 'DESC'
				)
			);
		
	   function beforeFilter()
{ 
    	     parent::beforeFilter();     
	         $this->layout = 'authake';
      	     $this->studentDIR = "img/students/";
}  
             function index()
	     {
		      $this->Student->recursive = -1; 
			  $students = array();
			  $absPath = Router::url("/", false);
	       	  $Fields = array(
							'Student.id',
							'Student.page_title',
							'Student.created',
							'Student.status',
							'Student.content'
							);
		   $sqlArr = array('fields' => $Fields,
						'order' => array('Student.created'=>'DESC')
						);
         		  $this->paginate = $sqlArr;
		
		         $students = $this->paginate('Student'); 
		            $this->set('students', $students);
		 }
		 
	  function view($id = null) 
	  {
		 if (!$id) {
			$this->Session->setFlash(__('Invalid Page', true));
			$this->redirect(array('action' => 'index'));
		 }
		$about = $this->Student->read(null, $id);
		if(!empty($about))
		{
			#Page Image
			$absPath = Router::url("/", false);
			$about['Student']['banner_image'] = (!empty($about['Student']['banner_image'])) ? 
												$absPath."img/students/".$about['Student']['banner_image'] : "";
			#Created On
		}
	       	$this->set('student', $student);
	}
	      function __addImage()
	{
		if (!empty($this->data))
		{	
			$imgArr = $this ->request-> data['Student']['banner_image'];
			$fileName = "";
			$mimeArr = array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/png');
			if(!empty($imgArr['name']))
			{
				if(!in_array($imgArr['type'], $mimeArr)) return "err:Please select valid Image.";
				$imgName = $thumbName = time();
				$uploadArr = array	(	'uploadPath' => WWW_ROOT . $this -> studentDIR, 
										'fileName' => $imgName,
										'thumb' => array(	'thumbPath' => WWW_ROOT . $this -> studentDIR, 
															'thumbName' => $thumbName,
														    'thumbWidth' => 1000,
															'thumbHeight' => 280
														)
									);
							
				  $this ->Image-> setPaths($uploadArr);
				$fileName = $this -> Image -> upload_image('Student.banner_image'); #Upload FIle
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
					$this ->request->data['Student']['banner_image'] = $isUploaded;
					$this->Student->create();
					if  ($this->Student->save($this->request->data)) {
						$this->Session->setFlash(__('The Student page has been saved', true));
					  $this->redirect( array('controller'=>'students','action' => 'index'));
					} else {
						$this->Session->setFlash(__('The Student page could not be saved. Please, try again.', true));
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
				if ($this->Student->save($this ->request->data))
		    {
					$this->Session->setFlash(__('The page has been saved', true));
					$this->redirect(array('action' => 'index'));
				} 
				else {
					$this->Session->setFlash(__('The page could not be saved. Please, try again.', true));
				}
			}
		if (empty($this ->request->data)) {
			$this ->request->data = $this->Student->read(null, $id);
		}
		
		#$options = array('0'=>'---Select---');		
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for page', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Student->delete($id)) {
			$this->Session->setFlash(__('page deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		    $this->Session->setFlash(__('page was not deleted', true));
		     $this->redirect(array('action' => 'index'));
	}
	  
       	  
  }