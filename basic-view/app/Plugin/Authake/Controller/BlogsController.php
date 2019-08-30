<?php
class BlogsController extends AppController {

	var $name = 'Blogs';
	 public $components = array('Email','RequestHandler','Paginator');
	var $uses = array('Blog','Blogs');
	
	function beforeFilter()
	{ 
	   parent::beforeFilter();     
	  $this->layout = 'authake';
	}
	  function welcome_index() 
			      {
						  
			      }
	
	   function index() 
	   {
		$this->Blog->recursive = 0;
		#$this->set('products', $this->paginate());
		$catArr = $this->paginate();
		$Blogs = array();
		$absPath = Router::url("/", false);
		foreach($catArr as $no => $Blog)
		{
			$Blog['Blog']['createdOn'] = formatDate($Blog['Blog']['created']);
			$Blog['Blog']['Status'] = $this-> $Blog['Blog']['status'];
			$Blogs[] = $Blog;
		}
		  $this->set('Blogs', $Blogs);
		/*echo'<pre>';print_r($Blogs);echo'<pre>';die();*/
	}
	          function bgis_index() 
	  {
	          $blogs = array();
		  $absPath = Router::url("/", false);
	          $this->Blogs->recursive = 0;
	          $conditions = array('Blogs.status'=>1);
		  $this->Paginator->settings = array(
			'conditions' => $conditions,
			'order' => array(
					'Blogs.id' => 'DESC'
					)
		);
		       $blogs = $this->Paginator->paginate('Blogs');
			$this->set('blogs', $blogs);
	   }

	   function view($id = null) {
		   
		if (!$id) {
			$this->Session->setFlash(__('Invalid Blog', true));
			$this->redirect(array('action' => 'index'));
		}
		$Blog = $this->Blog->read(null, $id);
		if(!empty($Blog))
		{
			#Product Status
			$Blog['Blog']['status'] = $this -> $Blog['Blog']['status'];
			#Product Image
			$absPath = Router::url("/", false);
			#Created On
			$Blog['Blog']['created'] = formatDate($Blog['Blog']['created']);
			
			#Modified On
			$Blog['Blog']['modified'] = formatDate($Blog['Blog']['modified']);
		}
		$this->set('Blog', $Blog);
	}
	
	function add()
	 {
		if (!empty($this->request->data))
		{	
			         $this->Blog->create();
				 if  ($this->Blog->save($this->request->data))
				 {
					$this->Session->setFlash(__('The Blog has been saved', true));
					$this->redirect( array('controller'=>'Blogs','action' => 'index'));
				 } 
				else
				 {
					$this->Session->setFlash(__('The Blog could not be saved. Please, try again.', true));
				 }
			}
		          		
	}
                   function bgis_add()
	        {
		          if (!empty($this->request->data))
		{	
			         $this->Blogs->create();
				 if  ($this->Blogs->save($this->request->data))
				 {
					$this->Session->setFlash(__('The  New Bgis Blog has been saved', true));
					$this->redirect( array('controller'=>'Blogs','action' => 'bgis_index'));
				 } 
				else
				 {
					$this->Session->setFlash(__('The Blog could not be saved. Please, try again.', true));
				 }
			}
		          		
	}

	 function edit($id = null) 
	 {
		if (!$id && empty($this ->request->data))
		{
			$this->Session->setFlash(__('Invalid Blog', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this ->request->data))
		{
			

				if ($this->Blog->save($this ->request->data))
				 {
					$this->Session->setFlash(__('The Blog has been saved', true));
					$this->redirect(array('action' => 'index'));
				} 
				else
				{
					$this->Session->setFlash(__('The Blog could not be saved. Please, try again.', true));
				}
			}
		if (empty($this ->request->data)) 
		{
			$this ->request->data = $this->Blog->read(null, $id);
		}
		
		#$options = array('0'=>'---Select---');
}

                       function bgis_edit($id = null) 
	           {
					if (!$id && empty($this ->request->data))
					{
						$this->Session->setFlash(__('Invalid Blog', true));
						$this->redirect(array('action' => 'bgis_index'));
					}
		if (!empty($this ->request->data))
		{
			

				if ($this->Blogs->save($this ->request->data))
				 {
					$this->Session->setFlash(__('The New Bgis Blog has been saved', true));
					$this->redirect(array('action' => 'bgis_index'));
				} 
				else
				{
					$this->Session->setFlash(__('The Blog could not be saved. Please, try again.', true));
				}
			}
		if (empty($this ->request->data)) 
		{
			$this ->request->data = $this->Blogs->read(null, $id);
		}
		
		#$options = array('0'=>'---Select---');
}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Blog', true));
			$this->redirect(array('action'=>'index'));
		}
		
		if ($this->Blog->delete($id)) {
			$this->Session->setFlash(__('Blog deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Blog was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
                	function bgis_delete($id = null)
             {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Blog', true));
			$this->redirect(array('action'=>'bgis_index'));
		}
		
		if ($this->Blogs->delete($id)) {
			$this->Session->setFlash(__('Blog deleted', true));
			$this->redirect(array('action'=>'bgis_index'));
		}
		$this->Session->setFlash(__('Blog was not deleted', true));
		$this->redirect(array('action' => 'bgis_index'));
	}
	
}	
?>