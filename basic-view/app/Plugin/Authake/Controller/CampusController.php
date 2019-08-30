<?php 

  class CampusController extends AppController 
{
     	 public $name = 'Campus';
		 public $helper = array('Html','Session');
		 public $components = array('Image');
		 public $uses = array('Campus','Submenu');
		 public $paginate = array(
	        'limit' => 10,
	        'order' => array(
	            'Campus.modified' => 'DESC'
	        )
	    );
		
	function beforeFilter()
{ 
    	     parent::beforeFilter();     
	         $this->layout = 'authake';
      	     $this->campusDIR = "img/campus/";
}  
             function index()
	     {
		      $this->Campus->recursive = -1; 
			  $campus = array();
			  $absPath = Router::url("/", false);
	   	$Fields = array(
							'Campus.id',
							'Campus.menu_id',
							'Campus.page_title',
							'Submenu.name',
							'Campus.created',
							'Campus.status',
							'Campus.content'
							);
		
		$joinsArr = array(
			    array('table' => 'sub_menu',
					'alias' => 'Submenu',
					'type' => 'INNER',
					'conditions' => array(
						'Submenu.id = Campus.menu_id',
					)
				));

		   $sqlArr = array('joins' => $joinsArr,
						'fields' => $Fields,
						'order' => array('Campus.created'=>'DESC')
						);
		  $this->paginate = $sqlArr;
		
		 $campus = $this->paginate('Campus'); 
		  if(!isEmpty($campus))
		  {
			for($i=0;$i < sizeof($campus); $i++)
			{
				$campus[$i]['Submenu']['name'] = $campus[$i]['Submenu']['name'];	
			}
		}
		            $this->set('campus', $campus);
		 }
		 
	  function view($id = null) 
	  {
		 if (!$id) {
			$this->Session->setFlash(__('Invalid Menu', true));
			$this->redirect(array('action' => 'index'));
		 }
		$campus = $this->Campus->read(null, $id);
		if(!empty($campus))
		{
			#Page Image
			$absPath = Router::url("/", false);
			$campus['Campus']['banner_image'] = (!empty($campus['Campus']['banner_image'])) ? 
												$absPath."img/admission/".$campus['Campus']['banner_image'] : "";
			#Created On
		}
	       	$this->set('campus', $campus);
	}
	      function __addImage()
	{
		if (!empty($this->data))
		{	
			$imgArr = $this ->request-> data['Campus']['banner_image'];
			$fileName = "";
			$mimeArr = array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/png');
			if(!empty($imgArr['name']))
			{
				if(!in_array($imgArr['type'], $mimeArr)) return "err:Please select valid Image.";
				$imgName = $thumbName = time();
				$uploadArr = array	(	'uploadPath' => WWW_ROOT . $this -> campusDIR, 
										'fileName' => $imgName,
										'thumb' => array(	'thumbPath' => WWW_ROOT . $this -> campusDIR, 
															'thumbName' => $thumbName,
															'thumbWidth' => 990,
															'thumbHeight' => 255
														)
									);
							
				  $this ->Image-> setPaths($uploadArr);
				$fileName = $this -> Image -> upload_image('Campus.banner_image'); #Upload FIle
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
				$this ->request->data['Campus']['banner_image'] = $isUploaded;
				$this->Campus->create();
				if  ($this->Campus->save($this->request->data)) {
					$this->Session->setFlash(__('The campus page has been saved', true));
				  $this->redirect( array('controller'=>'campus','action' => 'index'));
				} else {
					$this->Session->setFlash(__('The campus page could not be saved. Please, try again.', true));
				}
			}
		}
		                
    $submenu = $this->Submenu->find('list',array('conditions' => array('Submenu.menu_id' => 3),'recursive' => 0));
		       $this->set('submenu',$submenu);		
	}
	
	     function edit($id = null) {
		  if (!$id && empty($this ->request->data)) {
			$this->Session->setFlash(__('Invalid page', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this ->request->data))
		{
				if ($this->Campus->save($this ->request->data))
		    {
					$this->Session->setFlash(__('The page has been saved', true));
					$this->redirect(array('action' => 'index'));
				} 
				else {
					$this->Session->setFlash(__('The page could not be saved. Please, try again.', true));
				}
			}
		if (empty($this ->request->data)) {
			$this ->request->data = $this->Campus->read(null, $id);
		}
		
		$submenu = $this->Submenu->find('list',array('conditions' => array('Submenu.menu_id' => 3),'recursive' => 0));
		       $this->set('submenu',$submenu);	
		#$options = array('0'=>'---Select---');		
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for page', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Campus->delete($id)) {
			$this->Session->setFlash(__('page deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		    $this->Session->setFlash(__('page was not deleted', true));
		     $this->redirect(array('action' => 'index'));
	}
	  
       	  
  }