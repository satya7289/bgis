<?php 

  class NewsController extends AppController 
{
     	 public $name = 'News';
		 public $helper = array('Html','Session');
		 public $components = array('Image');
		 public $uses = array('Event');
			 public $paginate = array(
				'limit' => 10,
				'order' => array(
					'Event.created' => 'DESC'
				)
			);
		
	   function beforeFilter()
{ 
    	     parent::beforeFilter();     
	         $this->layout = 'authake';
      	     $this->newsDIR = "img/news/";
}  

				  function welcome_index() 
			      {
						  
			      }

             function index()
	     {
		      $this->Event->recursive = -1; 
			  $events = array();
			  $absPath = Router::url("/", false);
	       	  $Fields = array(
							 'Event.id',
							 'Event.news_type',
							 'Event.news_image',
							 'Event.news_heading',
							 'Event.news_date',
							 'Event.news_description',
							 'Event.created',
							 'Event.status',
							);
		   $sqlArr = array('fields' => $Fields,
						'order' => array('Event.created'=>'DESC')
						);
         		  $this->paginate = $sqlArr;
		
		    $events = $this->paginate('Event'); 
		            $this->set('events', $events);
		 }
		 
	  function view($id = null) 
	  {
		 if (!$id) {
			$this->Session->setFlash(__('Invalid Page', true));
			$this->redirect(array('action' => 'index'));
		 }
		$event= $this->Event->read(null, $id);
		if(!empty($event))
		{
			#Page Image
			$absPath = Router::url("/", false);
			$event['Event']['news_image'] = (!empty($event['Event']['news_image'])) ? 
												$absPath."img/news/".$event['Event']['news_image'] : "";
			#Created On
		}
	       	$this->set('event', $event);
	}
	      function __addImage()
	{
		if (!empty($this->data))
		{	
			$imgArr = $this ->request-> data['Event']['news_image'];
			$fileName = "";
			$mimeArr = array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/png');
			if(!empty($imgArr['name']))
			{
				if(!in_array($imgArr['type'], $mimeArr)) return "err:Please select valid Image.";
				$imgName = $thumbName = time();
				$uploadArr = array	(	'uploadPath' => WWW_ROOT . $this -> newsDIR, 
										'fileName' => $imgName,
										'thumb' => array(	'thumbPath' => WWW_ROOT . $this -> newsDIR, 
															'thumbName' => $thumbName,
														    'thumbWidth' => 150,
															'thumbHeight' => 80
														)
									);
							
				  $this ->Image-> setPaths($uploadArr);
				$fileName = $this -> Image -> upload_image('Event.news_image'); #Upload FIle
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
					$this ->request->data['Event']['news_image'] = $isUploaded;
					$this->Event->create();
					if  ($this->Event->save($this->request->data)) {
						$this->Session->setFlash(__('The Event page has been saved', true));
					  $this->redirect( array('controller'=>'news','action' => 'index'));
					} else {
						$this->Session->setFlash(__('The Event page could not be saved. Please, try again.', true));
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
				if ($this->Event->save($this ->request->data))
		    {
					$this->Session->setFlash(__('The page has been saved', true));
					$this->redirect(array('action' => 'index'));
				} 
				else {
					$this->Session->setFlash(__('The page could not be saved. Please, try again.', true));
				}
			}
		if (empty($this ->request->data)) {
			$this ->request->data = $this->Event->read(null, $id);
		}
		
		#$options = array('0'=>'---Select---');		
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for page', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Event->delete($id)) {
			$this->Session->setFlash(__('page deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		    $this->Session->setFlash(__('page was not deleted', true));
		     $this->redirect(array('action' => 'index'));
	}
	  
       	  
  }