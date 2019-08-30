<?php

App::uses('AppController', 'Controller');
Configure::load('Recaptcha.key');
class DynamicpagesController extends AppController
 {
         var $name = 'Dynamicpages';
         var $helpers = array('Html', 'Session','Recaptcha.Recaptcha');
	 var $components = array('Email','RequestHandler','Recaptcha.Recaptcha','Session');
	 var $uses = array('About','Admission','Campus','Menu','Submenu','Contribute','Donation','Campusdonation');

                 public function about()

{
	             $this->pageTitle = 'About | BGIS ';
	
	
}
                  public function aboutus()
				  {
					   $subID = $this->request->params['param'];
					   $subID = str_replace('-', ' ', $subID);
	                   $this ->set('subID',$subID);
		    $menu_id= $this->Submenu->find('list',array('conditions'=>array('Submenu.name'=>$subID),'fields' => array('Submenu.id')));
			     $this ->set('menu_id',$menu_id);
		          $tt = array();
			  $topMenu = $this->About->find('all',array('conditions'=> array('About.menu_id'=>$menu_id,'About.status'=> 1),'fields'=>array('About.id','About.menu_id','About.content','About.banner_image','About.page_title')));
			  foreach($topMenu as $tt)
			  {
			         $id = $tt['About']['id'];
			         $this->set('id',$id);
				     $menu_id = $tt['About']['menu_id'];
			         $this->set('menu_id',$menu_id);
				    $content = $tt['About']['content'];
			        $this->set('content',$content);
				    $banner_img = $tt['About']['banner_image'];
			        $this->set('banner_img',$banner_img);
				    $page_title = $tt['About']['page_title'];
			        $this->set('page_title',$page_title);		  
			 }
			  $toprat = $this->Submenu->find("list", array(
		                                      'conditions' => array('Submenu.id'=> $menu_id),
											  'fields' => array('Submenu.name')	
					));	
					foreach($toprat as $top1)
			        {
				       $this ->set('top1',$top1);
                    }
				
					   
					$this->pageTitle = $subID.'| BGIS ';
				  }
				  
				  public function campus()
				  {
					  $this->pageTitle = 'BGIS Campus | BGIS'; 
					  
				  }
				  public function campusmain()
				  {
					  $subID = $this->request->params['param'];
					  $subID = str_replace('-',' ', $subID);
					  $this->set('subID',$subID);
		   $menu_id = $this->Submenu->find('list',array('conditions'=>array('Submenu.name'=>$subID),'fields'=>array('Submenu.id')));
			    	  $this->set('menu_id',$menu_id);
		   $topmenu = $this->Campus->find('all',array('conditions'=>array('Campus.menu_id'=>$menu_id , 'Campus.status'=>1),'fields'=> array('Campus.id','Campus.menu_id','Campus.content','Campus.banner_image','Campus.page_title')));
			        foreach($topmenu as $tt)
			  {
			         $id = $tt['Campus']['id'];
			         $this->set('id',$id);
				     $menu_id = $tt['Campus']['menu_id'];
			         $this->set('menu_id',$menu_id);
				    $content = $tt['Campus']['content'];
			        $this->set('content',$content);
				    $banner_img = $tt['Campus']['banner_image'];
			        $this->set('banner_img',$banner_img);
				    $page_title = $tt['Campus']['page_title'];
			        $this->set('page_title',$page_title);		  
			 }
			  $toprat = $this->Submenu->find("list", array(
		                                      'conditions' => array('Submenu.id'=> $menu_id),
											  'fields' => array('Submenu.name')	
					));	
					foreach($toprat as $top1)
			        {
				       $this ->set('top1',$top1);
                    }
					$this->pageTitle = $subID.' | BGIS ';	  
				  }
				  
				  public function admission()
				  {
					$this->pageTitle = 'BGIS Admissions | BGIS'; 
				  }
				  public function admissions()
				  {
					$subID = $this->request->params['param'];
					$subID = str_replace('-',' ',$subID);
					 $this->set('subID',$subID);			
		$menu_id = $this->Submenu->find('list',array('conditions'=>array('Submenu.name'=>$subID),'fields'=>array('Submenu.id')));
			    	  $this->set('menu_id',$menu_id);
		   $topmenu = $this->Admission->find('all',array('conditions'=>array('Admission.menu_id'=>$menu_id , 'Admission.status'=>1),'fields'=> array('Admission.id','Admission.menu_id','Admission.content','Admission.banner_image','Admission.page_title')));
			        foreach($topmenu as $tt)
			  {
			         $id = $tt['Admission']['id'];
			         $this->set('id',$id);
				     $menu_id = $tt['Admission']['menu_id'];
			         $this->set('menu_id',$menu_id);
				    $content = $tt['Admission']['content'];
			        $this->set('content',$content);
				    $banner_img = $tt['Admission']['banner_image'];
			        $this->set('banner_img',$banner_img);
				    $page_title = $tt['Admission']['page_title'];
			        $this->set('page_title',$page_title);		  
			 }
			  $toprat = $this->Submenu->find("list", array(
		                                      'conditions' => array('Submenu.id'=> $menu_id),
											  'fields' => array('Submenu.name')	
					));	
					foreach($toprat as $top1)
			        {
				       $this ->set('top1',$top1);
                    }
					$this->pageTitle = $subID.' | BGIS ';	
					  
				  }
				  
				  public function contribute()
				  {
					$this->pageTitle = 'BGIS Contributes | BGIS'; 
				  }
				  public function contributes()
				  {
					$subID = $this->request->params['param'];
					$subID = str_replace('-',' ',$subID);
					$this->set('subID',$subID);
					  $menu_id = $this->Submenu->find('list',array('conditions'=>array('Submenu.name'=>$subID),'fields'=>array('Submenu.id')));
			    	  $this->set('menu_id',$menu_id);
		   $topmenu = $this->Contribute->find('all',array('conditions'=>array('Contribute.menu_id'=>$menu_id , 'Contribute.status'=>1),'fields'=> array('Contribute.id','Contribute.menu_id','Contribute.content','Contribute.banner_image','Contribute.page_title')));
			        foreach($topmenu as $tt)
			  {
			         $id = $tt['Contribute']['id'];
			         $this->set('id',$id);
				     $menu_id = $tt['Contribute']['menu_id'];
			         $this->set('menu_id',$menu_id);
				    $content = $tt['Contribute']['content'];
			        $this->set('content',$content);
				    $banner_img = $tt['Contribute']['banner_image'];
			        $this->set('banner_img',$banner_img);
				    $page_title = $tt['Contribute']['page_title'];
			        $this->set('page_title',$page_title);		  
			 }
			  $toprat = $this->Submenu->find("list", array(
		                                      'conditions' => array('Submenu.id'=> $menu_id),
											  'fields' => array('Submenu.name')	
					));	
					foreach($toprat as $top1)
			        {
				       $this ->set('top1',$top1);
                    }
					$this->pageTitle = $subID.' | BGIS ';	
					  
				  }
				       public function faculty ()
				      {
					   $this->pageTitle = 'BGIS Faculty | BGIS'; 
				      }
				      
				              public function payment()
				          {
					       $this->pageTitle = 'BGIS ONLINE PAYMENT GATEWAY | BGIS';  
				              /* 	 if ($this->request->isPost())
	                             {
	                            App::import('Vendor', 'Recaptchalib', array('file' => 'Recaptchalib/recaptchalib.php'));  
	                                $this->Donation->set($this->request->data);   	                        
		                        $private = "6LeZj_kSAAAAAAVbctJtgE8OkzkRDRqmauPvys8N";	
		                        $remote = $this->request->clientIp();	                        
         $resp = recaptcha_check_answer ($private,$remote,$this->request->data['recaptcha_challenge_field'],$this->request->data['recaptcha_response_field']);  
                                    
                                       
	      			            if (!$resp->is_valid)
	      		                   {
                                $this->Session->setFlash(__('Plz Enter a valid captcha !!!'), 'error', array('plugin' => 'Authake'));   		                   
	      		                 $this->redirect('/contributes/online-payment');  
	      		                     }
	      		               else
	      		                     {
				                      $this->Donation->create();
					              $name = $this->request->data['name'];
				                     $email = $this->request->data['email'];
				                     $mobile = $this->request->data['mobile'];
				          	     $amount = $this->request->data['amount'];
				          	     $comment = $this->request->data['comment'];
			          	       
                            if($this->Donation->save($this->request->data, true, array('id','name','email','mobile','amount','comment')))			                 
				          {
					            $id = $this->Donation->getLastInsertId();
					             $this->set('id',$id);
                                         $Email = new CakeEmail();
  $Email->viewVars(array('name' => $name,'email' => $email,'mobile' => $mobile,'comment' => $comment,'amount' => $amount));
				         $Email->template('donation');
				         $Email->emailFormat('both');
	                                 $Email->from('info@bgis.org');
	                                 $Email->replyTo('info@bgis.org');
	                                 $Email->to('newbgis@gmail.com');
	                                 $Email->cc('mansi@maatti.com'); 
	                                 $Email->subject('BGIS | Donation Detail Of Donor');
	                                 $Email->send();                          
                                      } 
                                                       else
                                                         {
                                      $this->Session->setFlash('Data Validation Failure', 'default', array('class' => 'cake-error'));
                                                         } 
                                   }
                             }
					*/        
				        }
				        
				             public function onlinepayments()
				             {
					          $this->pageTitle = 'BGIS Online payment | BGIS'; 
				             }
				             public function newcampusdonate()
	                {
				          $this->pageTitle = 'BGIS ONLINE PAYMENT GATEWAY | BGIS';  
					         if ($this->request->isPost())
	      			              {
						       $this->Campusdonation->create();
						       $currency = 'INR';
						       $name = $this->request->data['name'];
						       $email = $this->request->data['email'];
						       $mobile = $this->request->data['mobile'];
			          	  /*  $dob = $this->request->data['dob']; */
			          	  /*  $payment = $this->request->data['payment']; */
			          	      $amount = $this->request->data['amount'];
			          	 /*   $currency = $this->request->data['currency']; */
			                 /*  $nationality = $this->request->data['nationality']; */
			          	/*    $state = $this->request->data['state'];
			          	    $city = $this->request->data['city'];
			          	    $comment = $this->request->data['comment'];*/
			          	    
			          	     $address = $this->request->data['address']; 
			          	     $this->request->data['currency']= $currency ; 
			                if ($this->Campusdonation->save($this->request->data))
				        {
				          $id = $this->Campusdonation->getLastInsertId();
				           $this->set('id',$id);
                                          $Email = new CakeEmail();
                 $Email->viewVars(array('name' => $name,'email' => $email,'mobile' => $mobile,'amount' => $amount));
				         $Email->template('donation');
				         $Email->emailFormat('both');
	                                 $Email->from('bgis.services@gmail.com');
	                                 $Email->replyTo('bgis.services@gmail.com');
	                                 $Email->to('bgis.services@gmail.com'); 
	                                 $Email->subject('BGIS | Donation Detail Of Donor');
	                                 $Email->send();
                               } 
                                    }
					        
				        }
				  

			 function beforeFilter() 
				{
					$this->theme = 'default';
				}



		

   		   
	}
?>