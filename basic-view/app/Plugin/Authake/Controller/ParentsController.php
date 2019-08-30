<?php 

  class ParentsController extends AppController 
{
     	 public $name = 'Parents';
		 public $helper = array('Html','Session');
		 public $components = array('Image');
		 public $uses = array('Parents');
		 public $paginate = array(
	        'limit' => 10,
	        'order' => array(
	            'Parents.modified' => 'DESC'
	        )
	    );
		
	    function beforeFilter()
{ 
    	     parent::beforeFilter();     
	         $this->layout = 'authake';
      	    $this->parentDIR = "img/parents/";
}  
             function index()
	     {
		      $this->Parents->recursive = -1; 
			  $parents = array();
			  $absPath = Router::url("/", false);
	       	$Fields = array(
							'Parents.id',
							'Parents.page_title',
							'Parents.created',
							'Parents.status',
							'Parents.content'
							);
		   $sqlArr = array('fields' => $Fields,
						'order' => array('Parents.created'=>'DESC')
						);
         		  $this->paginate = $sqlArr;
		
		         $parents = $this->paginate('Parents'); 
		            $this->set('parents', $parents);
		 }
		 
	  function view($id = null) 
	  {
		 if (!$id) {
			$this->Session->setFlash(__('Invalid Page', true));
			$this->redirect(array('action' => 'index'));
		 }
		$about = $this->Parents->read(null, $id);
		if(!empty($about))
		{
			#Page Image
			$absPath = Router::url("/", false);
			$about['Parents']['banner_image'] = (!empty($about['Parents']['banner_image'])) ? 
												$absPath."img/parents/".$about['Parents']['banner_image'] : "";
			#Created On
		}
	       	$this->set('parent', $parent);
	}
	      function __addImage()
	{
		if (!empty($this->data))
		{	
			$imgArr = $this ->request-> data['Parents']['banner_image'];
			$fileName = "";
			$mimeArr = array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/png');
			if(!empty($imgArr['name']))
			{
				if(!in_array($imgArr['type'], $mimeArr)) return "err:Please select valid Image.";
				$imgName = $thumbName = time();
				$uploadArr = array	(	'uploadPath' => WWW_ROOT . $this -> parentDIR, 
										'fileName' => $imgName,
										'thumb' => array(	'thumbPath' => WWW_ROOT . $this -> parentDIR, 
															'thumbName' => $thumbName,
															'thumbWidth' => 1000,
															'thumbHeight' => 280
														)
									);
							
				  $this ->Image-> setPaths($uploadArr);
				$fileName = $this -> Image -> upload_image('Parents.banner_image'); #Upload FIle
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
					$this ->request->data['Parents']['banner_image'] = $isUploaded;
					$this->Parents->create();
					if  ($this->Parents->save($this->request->data)) {
						  $this->Session->setFlash(__('The Parents page has been saved', true));
					     $this->redirect( array('controller'=>'parents','action' => 'index'));
					} else {
						$this->Session->setFlash(__('The Parents page could not be saved. Please, try again.', true));
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
				if ($this->Parents->save($this ->request->data))
		    {
					$this->Session->setFlash(__('The page has been saved', true));
					$this->redirect(array('action' => 'index'));
				} 
				else {
					$this->Session->setFlash(__('The page could not be saved. Please, try again.', true));
				}
			}
		if (empty($this ->request->data)) {
			$this ->request->data = $this->Parents->read(null, $id);
		}
		
		#$options = array('0'=>'---Select---');		
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for page', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Parents->delete($id)) {
			$this->Session->setFlash(__('page deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		    $this->Session->setFlash(__('page was not deleted', true));
		     $this->redirect(array('action' => 'index'));
	}
	  
       	  
  }