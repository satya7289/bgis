<?php 

  class NewsletterController extends AppController 
{
     	 public $name = 'Newsletter';
		 public $helper = array('Html','Session');
		 public $components = array('Image');
		 public $uses = array('News');
			 public $paginate = array(
				'limit' => 10,
				'order' => array(
					'News.created' => 'DESC'
				)
			);
		
	   function beforeFilter()
{ 
    	     parent::beforeFilter();     
	         $this->layout = 'authake';
      	     $this->newsletterDIR = "img/newsletter/";
}  



                function index()
	       {
		      $this->News->recursive = -1; 
			  $news = array();
			  $absPath = Router::url("/", false);
	       	  $Fields = array(
							  'News.id',
							  'News.news_image',
							  'News.news_date',
							  'News.created',
							  'News.status',
							);
		   $sqlArr = array('fields' => $Fields,
						'order' => array('News.created'=>'DESC')
						);
         		  $this->paginate = $sqlArr;
		
		    $news = $this->paginate('News'); 
		            $this->set('news', $news);
		 }
		 
	      function __addImage()
	{
		if (!empty($this->data))
		{	
			$imgArr = $this ->request-> data['News']['news_image'];
			$fileName = "";
			$mimeArr = array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/png');
			if(!empty($imgArr['name']))
			{
				if(!in_array($imgArr['type'], $mimeArr)) return "err:Please select valid Image.";
				$imgName = $thumbName = time();
				$uploadArr = array	(	'uploadPath' => WWW_ROOT . $this -> newsletterDIR, 
										'fileName' => $imgName,
										'thumb' => array(	'thumbPath' => WWW_ROOT . $this -> newsletterDIR, 
															'thumbName' => $thumbName,
														    'thumbWidth' => 180,
															'thumbHeight' => 250
														)
									);
							
				  $this ->Image-> setPaths($uploadArr);
				$fileName = $this -> Image -> upload_image('News.news_image'); #Upload FIle
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
					$this ->request->data['News']['news_image'] = $isUploaded;
					$this->News->create();
					if  ($this->News->save($this->request->data)) {
						$this->Session->setFlash(__('The News page has been saved', true));
					  $this->redirect( array('controller'=>'news','action' => 'index'));
					} else {
						$this->Session->setFlash(__('The News page could not be saved. Please, try again.', true));
					}
				}
			}
		                
	}
	 
	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for page', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->News->delete($id)) {
			$this->Session->setFlash(__('page deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		    $this->Session->setFlash(__('page was not deleted', true));
		     $this->redirect(array('action' => 'index'));
	}
	  
       	  
  }