<?php 

  class AboutController extends AppController 
{
     	 public $name = 'About';
		 public $helper = array('Html','Session');
		 public $components = array('Image');
		 public $uses = array('About','Submenu');
		 public $paginate = array(
	        'limit' => 10,
	        'order' => array(
	            'About.modified' => 'DESC'
	        )
	    );
		
	function beforeFilter()
{ 
    	     parent::beforeFilter();     
	         $this->layout = 'authake';
      	     $this->abouteDIR = "img/abouts/";
}  
             function index()
	     {
		      $this->About->recursive = -1; 
			  $abouts = array();
			  $absPath = Router::url("/", false);
	   	$Fields = array(
							'About.id',
							'About.menu_id',
							'About.page_title',
							'Submenu.name',
							'About.created',
							'About.status',
							'About.content'
							);
		
		$joinsArr = array(
			    array('table' => 'sub_menu',
					'alias' => 'Submenu',
					'type' => 'INNER',
					'conditions' => array(
						'Submenu.id = About.menu_id',
					)
				));

		   $sqlArr = array('joins' => $joinsArr,
						'fields' => $Fields,
						'order' => array('About.created'=>'DESC')
						);
		  $this->paginate = $sqlArr;
		
		    $abouts = $this->paginate('About'); 
		  if(!isEmpty($abouts))
		  {
			for($i=0;$i < sizeof($abouts); $i++)
			{
				 $abouts[$i]['Submenu']['name'] = $abouts[$i]['Submenu']['name'];	
			}
		}
		            $this->set('abouts', $abouts);
		 }
		 
	  function view($id = null) 
	  {
		 if (!$id) {
			$this->Session->setFlash(__('Invalid Page', true));
			$this->redirect(array('action' => 'index'));
		 }
		$about = $this->About->read(null, $id);
		if(!empty($about))
		{
			#Page Image
			$absPath = Router::url("/", false);
			$about['About']['banner_image'] = (!empty($about['About']['banner_image'])) ? 
												$absPath."img/abouts/".$about['About']['banner_image'] : "";
			#Created On
		}
	       	$this->set('about', $about);
	}
	      function __addImage()
	{
		if (!empty($this->data))
		{	
			$imgArr = $this ->request-> data['About']['banner_image'];
			$fileName = "";
			$mimeArr = array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/png');
			if(!empty($imgArr['name']))
			{
				if(!in_array($imgArr['type'], $mimeArr)) return "err:Please select valid Image.";
				$imgName = $thumbName = time();
				$uploadArr = array	(	'uploadPath' => WWW_ROOT . $this -> abouteDIR, 
										'fileName' => $imgName,
										'thumb' => array(	'thumbPath' => WWW_ROOT . $this -> abouteDIR, 
															'thumbName' => $thumbName,
															'thumbWidth' => 1000,
															'thumbHeight' => 280
														)
									);
							
				  $this ->Image-> setPaths($uploadArr);
				$fileName = $this -> Image -> upload_image('About.banner_image'); #Upload FIle
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
					$this ->request->data['About']['banner_image'] = $isUploaded;
					$this->About->create();
					if  ($this->About->save($this->request->data)) {
						$this->Session->setFlash(__('The About page has been saved', true));
					  $this->redirect( array('controller'=>'about','action' => 'index'));
					} else {
						$this->Session->setFlash(__('The About page could not be saved. Please, try again.', true));
					}
				}
			}
		                
    $submenu = $this->Submenu->find('list',array('conditions' => array('Submenu.menu_id' => 2),'recursive' => 0));
		       $this->set('submenu',$submenu);		
	}
	
	     function edit($id = null) {
		  if (!$id && empty($this ->request->data)) {
			$this->Session->setFlash(__('Invalid page', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this ->request->data))
		{
				if ($this->About->save($this ->request->data))
		    {
					$this->Session->setFlash(__('The page has been saved', true));
					$this->redirect(array('action' => 'index'));
				} 
				else {
					$this->Session->setFlash(__('The page could not be saved. Please, try again.', true));
				}
			}
		if (empty($this ->request->data)) {
			$this ->request->data = $this->About->read(null, $id);
		}
		
		$submenu = $this->Submenu->find('list',array('conditions' => array('Submenu.menu_id' => 2),'recursive' => 0));
		       $this->set('submenu',$submenu);	
		#$options = array('0'=>'---Select---');		
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for page', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->About->delete($id)) {
			$this->Session->setFlash(__('page deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		    $this->Session->setFlash(__('page was not deleted', true));
		     $this->redirect(array('action' => 'index'));
	}
	  
       	  
  }