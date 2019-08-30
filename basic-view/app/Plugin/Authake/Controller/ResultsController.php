<?php 
  App::uses('AppError', 'Lib');
  class ResultsController extends AppController 
{
     	            public $name = 'Results';
		  public $helper = array('Html','Session');
   public $components = array('Image','Filter.Filter' => array('nopersist' => array('index')),'RequestHandler','Paginator','Email');
		          public $uses = array('Result','Upload','Plogin','Gusers');
			 public $paginate = array(
				 'Result' => array(
                                    'limit' => 40,
                                    'order' => array('name' => 'asc')
			               ) );
			 var $filters = array  
        (  
            'index' => array  
            (  
				'Result' => array  
                (  	
'Result.registration_no' => array('condition' => 'like', 'type' => 'text','label' => 'Student Registration No'),
'Result.name' => array('condition' => 'like', 'type' => 'text','label' => 'Student Name'),
'Result.class' => array('condition' => 'like', 'type' => 'select','label' => 'Class','filterField' => 'Result.class', 'options' => true,'id'=>'student_class'),
'Result.section' => array('condition' => 'like', 'type' => 'select','label' => 'Section','filterField' => 'Result.section', 'options' => true)
					                      
                )
			)  
        );  
		
		
	   function beforeFilter()
{ 
					parent::beforeFilter();     
					$this->layout = 'authake'; 
					$this->pdfDIR =    "files/students_results/";
					$this->resultDIR = "img/students_profile/";
					
					
					
}  

                           function welcome_index()
                           {
                           
                           }


             function index()
	     {
		          $this->Result->recursive = -1; 
			  $results = array();
			  $absPath = Router::url("/", false);
			  if(isset($this->request->query['q']) && $this->request->query['q'] != "")
			  {
			     $class = $this->request->query['q'];
			 
	       	          $Fields = array(
							'Result.id',
							'Result.name',
							'Result.roll_no',
							'Result.registration_no',
							'Result.status',
							'Result.class',
							'Result.section',
							'Result.year',
							'Result.session',
							'Result.status'
						                  	);
			        
				               $conditions = array('Result.class'=>$class);
		                        
         		    $this->Paginator->settings = array(
         		                                      'Result' => array(
         		                                       'conditions' => $conditions,
                                                                'limit' => 40,
                                                               'order' => array('name' => 'asc')
					             ));     
					
					$results = $this->Paginator->paginate('Result');
		                        $this->set('results', $results);
		             }
		             else
		             {
		                  $Fields = array(
							'Result.id',
							'Result.name',
							'Result.roll_no',
							'Result.registration_no',
							'Result.status',
							'Result.class',
							'Result.section',
							'Result.year',
							'Result.session',
							'Result.status'
						                  	);
			        
				   
		                                $this->Paginator->settings = array(
								 'Result' => array(
                                                                    'limit' => 40,
                                                               'order' => array('name' => 'asc')
					));    
					
					$results = $this->Paginator->paginate('Result');
		                         $this->set('results', $results);
		             }
		 }
		 
	  function view($id = null) 
	  {
		 if (!$id) {
			$this->Session->setFlash(__('Invalid Student', true));
			$this->redirect(array('action' => 'index'));
		 }
		$about = $this->Result->read(null, $id);
		if(!empty($about))
		{
			#Page Image
			$absPath = Router::url("/", false);
			$about['Result']['student_image'] = (!empty($about['Result']['student_image'])) ? 
												$absPath."img/students_profile/".$about['Result']['student_image'] : "";
			#Created On
		}
	       	$this->set('student', $student);
	}
	      function __addImage()
	{
		if (!empty($this->data))
		{	
			$imgArr = $this ->request-> data['Result']['student_image'];
			$fileName = "";
			$mimeArr = array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/png');
			if(!empty($imgArr['name']))
			{
				if(!in_array($imgArr['type'], $mimeArr)) return "err:Please select valid Image.";
				$imgName = $thumbName = time();
				$uploadArr = array	(	'uploadPath' => WWW_ROOT . $this -> resultDIR, 
										'fileName' => $imgName,
										'thumb' => array(	'thumbPath' => WWW_ROOT . $this -> resultDIR, 
															'thumbName' => $thumbName,
														    'thumbWidth' => 300,
															'thumbHeight' => 180
														)
									);
							
				  $this ->Image-> setPaths($uploadArr);
				$fileName = $this -> Image -> upload_image('Result.student_image'); #Upload FIle
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
					    $this ->request->data['Result']['student_image'] = $isUploaded;
				         	$this->Result->create();
				         	$email = $this ->request->data['Result']['parent_email'];
					        $username = $this ->request->data['Result']['parent_email'];
					       $registration = $this ->request->data['Result']['registration_no'];
			          if  ($this->Result->save($this->request->data)) 
		                   {
		                                      $Date = today();
			                              $Data['Plogin']['login'] = $username;
				                      $Data['Plogin']['registration_no'] = $registration;
				                      $Data['Plogin']['email'] = $email;
				                      $Data['Plogin']['password'] = $registration;
				                      $Data['Plogin']['created'] = $Date;
						      $this->Plogin->create();
						      $this->Plogin->save($Data);
	                                         $Email = new CakeEmail();
					         $Email->viewVars(array('username' => $username,'registration' => $registration));
					         $Email->template('login');
					         $Email->emailFormat('both');
		                                 $Email->from('info@bgis.org');
		                                 $Email->replyTo('info@bgis.org');
		                                 $Email->to($email);
		                                 $Email->subject('PARENT LOGIN DETAILS | BGIS');
		                                 $Email->send();
		                                       $Id = $this->Plogin->getLastInsertId();
				                      $Data1['Gusers']['user_id'] = $Id;
				                      $Data1['Gusers']['group_id'] = 4;
						      $this->Gusers->create();
						      $this->Gusers->save($Data1);
				                $this->Session->setFlash(__('The Student has been saved', true));
						$this->redirect( array('controller'=>'results','action' => 'index'));	
			        }
					
					 else 
					{
						$this->Session->setFlash(__('The Student could not be saved. Please, try again.', true));
					}
				}
			}
		                
	}
	
	     function edit($id = null) {
		    if (!$id && empty($this ->request->data)) {
			$this->Session->setFlash(__('Invalid Student', true));
			$this->redirect(array('action' => 'index'));
		}
		
		if (!empty($this ->request->data))
		{
				if ($this->Result->save($this ->request->data))
		    {
					$this->Session->setFlash(__('The Student has been saved', true));
					$this->redirect(array('action' => 'index'));
				} 
				else {
					$this->Session->setFlash(__('The Student could not be saved. Please, try again.', true));
				}
			}
		      if (empty($this ->request->data)) {
			$this ->request->data = $this->Result->read(null, $id);
		}
		
		#$options = array('0'=>'---Select---');		
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Student', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Result->delete($id)) {
			$this->Session->setFlash(__('Student deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		    $this->Session->setFlash(__('Student was not deleted', true));
		     $this->redirect(array('action' => 'index'));
	}
	function pdf_delete($id = null) {
	
	        if (!$id) {
			$this->Session->setFlash(__('Invalid id for pdf', true));
			$this->redirect(array('action'=>'index'));
		}

		#--Delete current existing file---
			$sqlArr = array(
							'conditions' => array('Upload.id' => $id),
							  'fields' => array('result_pdf')
						);
			$currCompArr = $this -> Upload -> find("first", $sqlArr);
			$currImage = $currCompArr['Upload']['result_pdf'];
			if(!empty($currImage))
			{
				if(is_file(WWW_ROOT . $this -> pdfDIR . $currImage))
				{
					unlink(WWW_ROOT . $this -> pdfDIR . $currImage);
				}
			}
		#---

		if ($this->Upload->delete($id)) {
			$this->Session->setFlash(__('pdf deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('pdf was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
        	 function __addpdf()
	    {
	       if (!empty($this->data))
		  {	
			$imgArr = $this ->request-> data['Upload']['result_pdf'];
			$fileName = "";
			$mimeArr = array('application/pdf');
			if(!empty($imgArr['name']))
			{
				if(!in_array($imgArr['type'], $mimeArr)) return "err:Please select valid pdf.";
				$imgName = $thumbName = time();
				$uploadArr1 = array	('uploadPath' => WWW_ROOT . $this -> pdfDIR, 
										'fileName' => $imgName,
							'thumb' => array(	'thumbPath' => WWW_ROOT . $this -> pdfDIR, 
							'thumbName' => $thumbName
														)
									       );
							
				 $this ->Image-> setPaths($uploadArr1);
				$fileName = $this -> Image -> upload_image('Upload.result_pdf'); #Upload FIle
				if(empty($fileName)) #If FIle has not been uploaded
					return 'err:The image could not be uploaded.';
			}			
			return $fileName;
		}
	
	}
	           function add_pdf()
		     {
			        if (!empty($this->request->data))
			 {	
				 $isUploaded1 = $this -> __addpdf();
				if(strpos($isUploaded, "err:") !== false)
				{
					$this->Session->setFlash(__(substr($isUploaded, 4), true));
				}
				else
				{
					    $this ->request->data['Upload']['result_pdf'] = $isUploaded1; 
					   $this->Upload->create();
					   $reg_no = $this ->request->data['Upload']['registration_no'];
		       $parents = $this->Plogin->find('first', array('conditions' => array('Plogin.registration_no' => $reg_no)));
		                           $this->set(compact('parents'));
		                           $parents_id = $parents['Plogin']['login'];
		                           $username = $parents['Plogin']['login'];
					   $subject = $this ->request->data['Upload']['subject'];
					  if  ($this->Upload->save($this->request->data))
				          {
				                 $Email = new CakeEmail();
		     $Email->viewVars(array('subject' => $subject,'reg_no' => $reg_no,'username' =>$username));
					         $Email->template('update');
					         $Email->emailFormat('both');
		                                 $Email->from('info@bgis.org');
		                                 $Email->replyTo('info@bgis.org');
		                                 $Email->to($parents_id);
		                                 $Email->subject('UPDATE RESLUT | BGIS');
		                                 $Email->send();
				             
				             
				             $this->Session->setFlash(__('The pdf has been saved', true));
					     $this->redirect( array('controller'=>'results','action' => 'index'));
					} else 
					{
						$this->Session->setFlash(__('The pdf could not be saved. Please, try again.', true));
					}
				}
			}
			   
			   
		   }
		   
		        function index_delete()
		       {
				  
			       $registration_no = $this->request->params['pass'][0];
				   $conditions = array('Upload.registration_no'=>$registration_no);
		             $this->Upload->recursive = 1;
		             $this->Paginator->settings = array(
							  'conditions' => $conditions,
								'results' => array(
								'Upload.id' => 'DESC'
					));    
					
					$results = $this->Paginator->paginate('Upload');
	              	$this->set('results', $results);
			 
			   }
	
	
	  
       	  
  }