<?php
class MenusController extends AppController {

	var $name = 'Menus';
	var $scaffold;
	var $uses = array('Menu','Submenu');
	
	function beforeFilter()
	{ 
	  parent::beforeFilter();     
	  $this->layout = 'authake';
	}
			
	  function index()
	 {
		$this->Menu->recursive = 0;
		#$this->set('products', $this->paginate());
		$menuArr = $this->paginate();
		$menus = array();
		$absPath = Router::url("/", false);
		
		foreach($menuArr as $no => $menu)
		{
			$menu['Menu']['created'] = formatDate($menu['Menu']['created']);	
			$menus[] = $menu;
		}
		$this->set('menus', $menus);
	}

	   function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid menu', true));
			$this->redirect(array('action' => 'index'));
		}
		$menu = $this->Menu->read(null, $id);
		if(!empty($menu))
		{
			#Product Status
		}
		$this->set('menu', $menu);
	}
	
	  function subadd() 
	  {
		if (!empty($this->request->data))
		{	
				$this->Submenu->create();
				if  ($this->Submenu->save($this->request->data)) {
					$this->Session->setFlash(__('The Submenu has been saved', true));
					$this->redirect( array('controller'=>'menus','action' => 'index'));
				} else {
					$this->Session->setFlash(__('The Submenu could not be saved. Please, try again.', true));
				}
			}	
	}
	
	    function update($id = null) 
     {
		 $menu_id = $id;
		 $submenu = $this->Menu->Submenu->find('list',array('fields' => array('Submenu.name'),'conditions' => array('Submenu.menu_id'=>$menu_id)));
		        $this->set('submenu',$submenu);
	 }
	     function update_menu() 
      {
		       $this->layout=false;
		       $this->autoRender = false;
				$name = $this->request->data['Submenu']['name'];
				$id = $this->request->data['Menu']['id'];
				$menu_id = $this->request->data['Menu']['menu_id'];
		if (!empty($this->request->data))
		{
			$query = "UPDATE sub_menu SET name = '".$name."' WHERE id = '".$id."' ";
			$challange = $this->Submenu->query($query);
			 $this->Session->setFlash(__('The submenu has been changed'), 'success' , array('plugin'=>'authake'));
			 $this->redirect(array('plugin'=>'authake','controller'=>'menus','action' => 'index'));
		}
		else
		{
			$this->Session->setFlash(__('The order status has not been updated'), 'error' , array('plugin'=>'authake'));
		}
	 }
	 function add() {
		if (!empty($this->request->data))
		{	
				$this->Menu->create();
				if  ($this->Menu->save($this->request->data)) {
					$this->Session->setFlash(__('The menu has been saved', true));
					$this->redirect( array('controller'=>'menus','action' => 'index'));
				} else {
					$this->Session->setFlash(__('The menu could not be saved. Please, try again.', true));
				}
			}	
	}

	 function edit($id = null) {
		if (!$id && empty($this ->request->data)) {
			$this->Session->setFlash(__('Invalid menu', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this ->request->data))
		{
				if ($this->Menu->save($this ->request->data))
		    {
					$this->Session->setFlash(__('The menu has been saved', true));
					$this->redirect(array('action' => 'index'));
				} 
				else {
					$this->Session->setFlash(__('The menu could not be saved. Please, try again.', true));
				}
			}
		if (empty($this ->request->data)) {
			$this ->request->data = $this->Menu->read(null, $id);
		}
		
		#$options = array('0'=>'---Select---');		
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for menu', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Menu->delete($id)) {
			$this->Session->setFlash(__('menu deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		    $this->Session->setFlash(__('Menu was not deleted', true));
		     $this->redirect(array('action' => 'index'));
	}
}	
?>