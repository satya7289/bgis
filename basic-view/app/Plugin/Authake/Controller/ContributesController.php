<?php 

  class ContributesController extends AppController 
{
     	 public $name = 'Contributes';
		 public $helper = array('Html','Session');
		 public $components = array('Image');
		 public $uses = array('Contribute','Submenu');
		 public $paginate = array(
	        'limit' => 10,
	        'order' => array(
	            'Contribute.modified' => 'DESC'
	        )
	    );
		
	function beforeFilter()
{ 
    	     parent::beforeFilter();     
	         $this->layout = 'authake';
      	     $this->contributeDIR = "img/contributes/";
}  
             function index()
	     {
		      $this->Contribute->recursive = -1; 
			  $contributes = array();
			  $absPath = Router::url("/", false);
	   	$Fields = array(
							'Contribute.id',
							'Contribute.menu_id',
							'Contribute.page_title',
							'Submenu.name',
							'Contribute.created',
							'Contribute.status',
							'Contribute.content'
							);
		
		$joinsArr = array(
			    array('table' => 'sub_menu',
					'alias' => 'Submenu',
					'type' => 'INNER',
					'conditions' => array(
						'Submenu.id = Contribute.menu_id',
					)
				));

		   $sqlArr = array('joins' => $joinsArr,
						'fields' => $Fields,
						'order' => array('Contribute.created'=>'DESC')
						);
		  $this->paginate = $sqlArr;
		
		   $contributes = $this->paginate('Contribute'); 
		  if(!isEmpty($contributes))
		  {
			for($i=0;$i < sizeof($contributes); $i++)
			{
				  $contribute[$i]['Submenu']['name'] = $contribute[$i]['Submenu']['name'];	
			}
		}
		            $this->set('contributes', $contributes);
		 }
		 
	  function view($id = null) 
	  {
		 if (!$id) {
			$this->Session->setFlash(__('Invalid Page', true));
			$this->redirect(array('action' => 'index'));
		 }
		$contribute = $this->Contribute->read(null, $id);
		if(!empty($contribute))
		{
			#Page Image
			$absPath = Router::url("/", false);
			$contribute['Contribute']['banner_image'] = (!empty($contribute['Contribute']['banner_image'])) ? 
												$absPath."img/contributes/".$contribute['Contribute']['banner_image'] : "";
			#Created On
		}
	       	$this->set('contribute', $contribute);
	}
	      function __addImage()
	{
		if (!empty($this->data))
		{	
			$imgArr = $this ->request-> data['Contribute']['banner_image'];
			$fileName = "";
			$mimeArr = array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/png');
			if(!empty($imgArr['name']))
			{
				if(!in_array($imgArr['type'], $mimeArr)) return "err:Please select valid Image.";
				$imgName = $thumbName = time();
				$uploadArr = array	(	'uploadPath' => WWW_ROOT . $this -> contributeDIR, 
										'fileName' => $imgName,
										'thumb' => array(	'thumbPath' => WWW_ROOT . $this -> contributeDIR, 
															'thumbName' => $thumbName,
															'thumbWidth' => 1000,
															'thumbHeight' => 280
														)
									);
							
				  $this ->Image-> setPaths($uploadArr);
				$fileName = $this -> Image -> upload_image('Contribute.banner_image'); #Upload FIle
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
				$this ->request->data['Contribute']['banner_image'] = $isUploaded;
				$this->Contribute->create();
				if  ($this->Contribute->save($this->request->data)) {
					$this->Session->setFlash(__('The contribute page has been saved', true));
				  $this->redirect( array('controller'=>'contributes','action' => 'index'));
				} else {
					$this->Session->setFlash(__('The campus page could not be saved. Please, try again.', true));
				}
			}
		}
		                
    $submenu = $this->Submenu->find('list',array('conditions' => array('Submenu.menu_id' => 5),'recursive' => 0));
		       $this->set('submenu',$submenu);		
	}
	
	     function edit($id = null) {
		  if (!$id && empty($this ->request->data)) {
			$this->Session->setFlash(__('Invalid page', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this ->request->data))
		{
				if ($this->Contribute->save($this ->request->data))
		    {
					$this->Session->setFlash(__('The page has been saved', true));
					$this->redirect(array('action' => 'index'));
				} 
				else {
					$this->Session->setFlash(__('The page could not be saved. Please, try again.', true));
				}
			}
		if (empty($this ->request->data)) {
			$this ->request->data = $this->Contribute->read(null, $id);
		}
		
		$submenu = $this->Submenu->find('list',array('conditions' => array('Submenu.menu_id' => 5),'recursive' => 0));
		       $this->set('submenu',$submenu);	
		#$options = array('0'=>'---Select---');		
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for page', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Contribute->delete($id)) {
			$this->Session->setFlash(__('page deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		    $this->Session->setFlash(__('page was not deleted', true));
		     $this->redirect(array('action' => 'index'));
	}
	  
       	  
  }