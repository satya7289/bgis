<?php 

  class AdmissionsController extends AppController 
{
     	 public $name = 'Admissions';
		 public $helper = array('Html','Session');
		 public $components = array('Image');
		 public $uses = array('Admission','Submenu');
		 public $paginate = array(
	        'limit' => 10,
	        'order' => array(
	            'Admission.modified' => 'DESC'
	        )
	    );
		
	function beforeFilter()
{ 
    	     parent::beforeFilter();     
	         $this->layout = 'authake';
      	     $this->admissionDIR = "img/admission/";
}  
             function index()
	     {
		      $this->Admission->recursive = -1; 
			  $admissions = array();
			  $absPath = Router::url("/", false);
		$Fields = array(
							'Admission.id',
							'Admission.menu_id',
							'Admission.page_title',
							'Submenu.name',
							'Admission.created',
							'Admission.status',
							'Admission.content'
							);
		
		$joinsArr = array(
			    array('table' => 'sub_menu',
					'alias' => 'Submenu',
					'type' => 'INNER',
					'conditions' => array(
						'Submenu.id = Admission.menu_id',
					)
				));

		   $sqlArr = array('joins' => $joinsArr,
						'fields' => $Fields,
						'order' => array('Admission.created'=>'DESC')
						);
		  $this->paginate = $sqlArr;
		
		 $admissions = $this->paginate('Admission'); 
		  if(!isEmpty($admissions))
		  {
			for($i=0;$i < sizeof($admissions); $i++)
			{
				$admissions[$i]['Submenu']['name'] = $admissions[$i]['Submenu']['name'];	
			}
		}
		            $this->set('admissions', $admissions);
		 }
		 
	  function view($id = null) 
	  {
		 if (!$id) {
			$this->Session->setFlash(__('Invalid Menu', true));
			$this->redirect(array('action' => 'index'));
		 }
		$admission = $this->Admission->read(null, $id);
		if(!empty($admission))
		{
			#Page Image
			$absPath = Router::url("/", false);
			$admission['Admission']['banner_image'] = (!empty($admission['Admission']['banner_image'])) ? 
												$absPath."img/admission/".$admission['Admission']['banner_image'] : "";
			#Created On
		}
	       	$this->set('admission', $admission);
	}
	      function __addImage()
	{
		if (!empty($this->data))
		{	
			$imgArr = $this ->request-> data['Admission']['banner_image'];
			$fileName = "";
			$mimeArr = array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/png');
			if(!empty($imgArr['name']))
			{
				if(!in_array($imgArr['type'], $mimeArr)) return "err:Please select valid Image.";
				$imgName = $thumbName = time();
				$uploadArr = array	(	'uploadPath' => WWW_ROOT . $this -> admissionDIR, 
										'fileName' => $imgName,
										'thumb' => array(	'thumbPath' => WWW_ROOT . $this -> admissionDIR, 
															'thumbName' => $thumbName,
															'thumbWidth' => 1000,
															'thumbHeight' => 280
														)
									);
							
				  $this ->Image-> setPaths($uploadArr);
				$fileName = $this -> Image -> upload_image('Admission.banner_image'); #Upload FIle
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
				$this ->request->data['Admission']['banner_image'] = $isUploaded;
				$this->Admission->create();
				if  ($this->Admission->save($this->request->data)) {
					$this->Session->setFlash(__('The admission has been saved', true));
				  $this->redirect( array('controller'=>'admissions','action' => 'index'));
				} else {
					$this->Session->setFlash(__('The admission could not be saved. Please, try again.', true));
				}
			}
		}
		                
    $submenu = $this->Submenu->find('list',array('conditions' => array('Submenu.menu_id' => 4),'recursive' => 0));
		       $this->set('submenu',$submenu);		
	}
	
	     function edit($id = null) {
		  if (!$id && empty($this ->request->data)) {
			$this->Session->setFlash(__('Invalid page', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this ->request->data))
		{
				if ($this->Admission->save($this ->request->data))
		    {
					$this->Session->setFlash(__('The page has been saved', true));
					$this->redirect(array('action' => 'index'));
				} 
				else {
					$this->Session->setFlash(__('The page could not be saved. Please, try again.', true));
				}
			}
		if (empty($this ->request->data)) {
			$this ->request->data = $this->Admission->read(null, $id);
		}
		
		$submenu = $this->Submenu->find('list',array('conditions' => array('Submenu.menu_id' => 4),'recursive' => 0));
		       $this->set('submenu',$submenu);	
		#$options = array('0'=>'---Select---');		
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for page', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Admission->delete($id)) {
			$this->Session->setFlash(__('page deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		    $this->Session->setFlash(__('Menu was not deleted', true));
		     $this->redirect(array('action' => 'index'));
	}
	  
       	  
  }