<?php
App::uses('Sanitize', 'Utility');
class InnerspageController extends AppController
 {
    var $name = 'Innerspage';
    var $helpers = array('Html', 'Session');
     public $uses = array('Contact','News','Donation','Transaction','Campusdonation','Campustransaction','Newbgiscontact','Registration');
	var $components = array('Email','RequestHandler');
	function beforeFilter() 
	{ 
		$this->theme = 'default';
	}
	         function e404()
		 {
		  $this->pageTitle = 'BGIS - One of the Top Boarding Schools in India | Residential Schools in India | Error ';
		 }           
	      function contact() 
            {
                 $this->pageTitle = 'Contact | BGIS ';
	 
               if ($this->request->isPost())
	          {
				         $this->Contact->create();
				         $name = $this->request->data['name'];
				         $email = $this->request->data['email'];
			               	 $mobile = $this->request->data['phone'];
			          	 $city = $this->request->data['city'];
			          	 $title = $this->request->data['comment'];
			                if ($this->Contact->save($this->request->data))
				{
                       $Email = new CakeEmail();
                       $Email->viewVars(array('name' => $name,'email' => $email,'mobile' => $mobile,'city' => $city,'title' => $title));
				         $Email->template('report');
				         $Email->emailFormat('both');
	                                 $Email->from($email);
	                                 $Email->replyTo('bgis.services@gmail.com');
	                                 $Email->to('bgis.services@gmail.com'); 
	                                 $Email->subject('BGIS | Contact Detail Of Visitor');
	                                 $Email->send();
                      
                      
                                              } 
                       }
                        } 
                        
                                         function newbgiscontact() 
	                          {
	                               $this->autoRender = false;
				        $this->layout = null;
				        	 
                                     if ($this->request->isPost())
	      			      {
				          $this->Newbgiscontact->create();
				         $name = $this->request->data['name'];
				         $email = $this->request->data['email'];
				         $contactnumber = $this->request->data['contactnumber'];
			          	 $message = $this->request->data['message'];
			                if ($this->Newbgiscontact->save($this->request->data))
				    {
                                           $Email = new CakeEmail();
                                           $Email->viewVars(array('name' => $name,'email' => $email,'contactnumber' => $contactnumber,'message' => $message));
				         $Email->template('contact');
				         $Email->emailFormat('both');
	                                 $Email->from('donotreplay@bgis.org');
	                                 $Email->replyTo('info@bgis.org');
	                                 $Email->to('bgis.services@gmail.com');
	                                 $Email->cc('bgisreport@gmail.com');
	                                 $Email->subject('NEW BGIS CAMPUS | Contact Detail Of Visitor');
	                                 $Email->send();
                      
                                      $this->redirect(array('controller'=>'dynamicpages','action' => 'contribute'));
                                              } 
                       }
                        } 
                        
                        
                             function publication()
                       {
                       
                            $this->pageTitle = 'Publication Books | BGIS ';
                       
                       
                       }
                           function latest()
                       {
                       
                            $this->pageTitle = 'Latest News  | BGIS ';
                       
                       }
                       
                       function  mphemamalini()
				                       {
				                        $this->pageTitle = 'MP Hemamalini visits Bhaktivedanta Gurukul | BGIS ';
				                       }
				                       
                       
				                       function  championship()
				                       {
				                        $this->pageTitle = 'Swiming Championship 2014 News  | BGIS ';
				                       }
				                         function  competition()
				                       {
				                        $this->pageTitle = 'Laddoo Gopal Drawing Competition 2014 News  | BGIS ';
				                       }
                       
                            function daily()
                           {
                       
                            $this->pageTitle = 'Daily  News  | BGIS ';
                           }
                           
                           function mayapuri()
                           {
                           
                            $this->pageTitle = 'Mayapur Spiritual Retreat  | BGIS ';
                           }
                           
                           
                           
                           
                           
                        function prizeGivingDay()
                        {
                          $this->pageTitle = 'Prize Giving Day | BGIS ';
                        }
                        function gopastami()
                        {
                         $this->pageTitle = 'Gopastami | BGIS ';
                        }
                        function bharatGurukula()
                        {
                         $this->pageTitle = 'Bharat Gurukula | BGIS ';
                        }
                        
                        function protestPlasticsBags()
                        {
                         $this->pageTitle = 'protest Plastics Bags| BGIS ';
                        }
                              
                           
                           
                           
                           
                           
                           
                        function nirmaan()
                        {
                       
                         $this->pageTitle = 'Grand Nirmaan Subharambha Ceremony of BGIS New Campus News  | BGIS ';
                        }
                           
                        function result()
                         {
                       	  $this->pageTitle = 'BGIS Students Get Top Exam Results | BGIS ';
                         }
                           
                         function job()
                          {
                       		$this->pageTitle = 'Carrer | BGIS ';
                           }
                       
                         function media()
                          {
                       
                            $this->pageTitle = 'Media News  | BGIS ';
                       
                         }
                           function mansiganga()
                          {
                       
                            $this->pageTitle = 'Media News  | BGIS ';
                       
                         }
                         
                         function competition6()
                         {
                             $this->pageTitle = 'Visit of Chief Minister of UP to ISKCON Vrindavan';
                         }
                         
                         function competition5()
                         {
                             $this->pageTitle = 'Gaura Purnima Celebrations at BGIS';
                         }
                         
                         function competition4()
                         {
                             $this->pageTitle = 'Sport Day: Lets Play | BGIS ';
                         }
                         
                         public function google() {
							$this->autoRender = false;
							echo "google-site-verification: googlef6c21c1ddad6c478.html"; 
						} 
			
                                             
                         function competition3()
                         {
                             $this->pageTitle = 'Mission: Clean Virndavan | BGIS ';
                         }
                         
                          function grand()
                         {
                             $this->pageTitle = 'Grand Sankirtan Festival Celebrated in BGIS | BGIS ';
                         }
                         
                         function competition2()
                         {
                             $this->pageTitle = 'Gita Jayanti celebrated in BGIS | BGIS ';
                         }

                         function janmashtamiEvent()
                         {
                             $this->pageTitle = 'Janmashtami Event 2017  | BGIS ';
                         }
                         
                         function dusshera(){
                              $this->pageTitle = 'Dusshera celebrated in BGIS | BGIS ';
                         }

                         
                        function narasimhacaturdashi()
                        {
                           $this->pageTitle = 'Narasimha Caturdashi celebrated in BGIS | BGIS ';
                        }
                               
                               
                       function plantedtree()
                       {
                       
                        $this->pageTitle = 'Enthusiastic students planted trees  | BGIS ';
                            
                       }
                       function rePublicDay()
                       {
                           $this->pageTitle = 'BGIS Vrindavan Celebrates Republic Day 2018  | BGIS '; 
                       } 
                       
                         
                         
                      function success()  {
					       $this->autoRender = false;
					       $this->layout = null;
				               $url = $this->request->params['param'];
				               $transaction = explode("&", $url); 
				               $transaction_id = explode("=", $transaction[0]);  
				               $message = explode("=", $transaction[1]);  
				               $username = explode("=", $transaction[2]); 
				               $username_id = explode("=", $transaction[3]); 
		
					try {
	                 if($this->Donation->updateAll(array('Donation.payment_status'=>"'" . Sanitize::escape($message[1]) . "'"),array('Donation.id'=>$username_id[1])))
		   			{
			            $Date = today();
			            $Data['Transaction']['user_id'] = $username_id[1];
			            $Data['Transaction']['transaction_id'] = $transaction_id[1];
			            $Data['Transaction']['status'] = $message[1];
			            $Data['Transaction']['created'] = $Date;
						$this->Transaction->create();
						$this->Transaction->save($Data);
				 $Email = new CakeEmail();
                             $Email->viewVars(array('Donation_name' => $username[1],'transaction' => $transaction_id[1],'message' => $message[1],'Date' => $Date));
				         $Email->template('transaction');
				         $Email->emailFormat('both');
	                                 $Email->from('info@bgis.org');
	                                 $Email->replyTo('info@bgis.org');
	                                 $Email->to('newbgis@gmail.com');
	                                 $Email->cc('mansi@maatti.com'); 
	                                 $Email->subject('BGIS | Transaction Detail Of Donor');
	                                 $Email->send();
			 	$this->redirect(array('controller'=>'homepages','action' => 'index'));
		    }
		    }
		           catch (Exception $e)
		     {
                                   
                                   
                                    }
				           
		           $this->redirect(array('controller'=>'homepages','action' => 'index')); 
				
			} 
			            function newcampustransaction()
			      {
					           $this->autoRender = false;
					            $this->layout = null;
				               $url = $this->request->params['param'];
				               $transaction = explode("&", $url); 
				               $transaction_id = explode("=", $transaction[0]);  
				               $message = explode("=", $transaction[1]);  
				               $username = explode("=", $transaction[2]); 
				               $username_id = explode("=", $transaction[3]); 
		
		try {
	                 if($this->Campusdonation->updateAll(array('Campusdonation.payment_status'=>"'" . Sanitize::escape($message[1]) . "'"),array('Campusdonation.id'=>$username_id[1])))
		   {
			            $Date = today();
			            $Data['Campustransaction']['user_id'] = $username_id[1];
			            $Data['Campustransaction']['transaction_id'] = $transaction_id[1];
			            $Data['Campustransaction']['status'] = $message[1];
			            $Data['Campustransaction']['created'] = $Date;
						$this->Campustransaction->create();
						$this->Campustransaction->save($Data);
				 $Email = new CakeEmail();
                             $Email->viewVars(array('Donation_name' => $username[1],'transaction' => $transaction_id[1],'message' => $message[1],'Date' => $Date));
				         $Email->template('transaction');
				         $Email->emailFormat('both');
	                                 $Email->from('info@bgis.org');
	                                 $Email->replyTo('info@bgis.org');
	                                 $Email->to('newbgis@gmail.com');
	                                 $Email->cc('mansi@maatti.com'); 
	                                 $Email->subject('BGIS | Transaction Detail Of Donor from New Bgis Campus');
	                                 $Email->send();
			 	$this->redirect(array('controller'=>'homepages','action' => 'index'));
		    }
		    }
		           catch (Exception $e)
		     {
                                   
                      }
				           
		           $this->redirect(array('controller'=>'homepages','action' => 'index')); 
				
			} 
                         
                            function getPublication()
                         {
                            $this->autoRender = false;
		            $this->layout = null;
		             $tt = array();
		           $topMenu = $this->News->getPublicationnew();
		           foreach($topMenu as $top){
					 $tt['News_id'][] = $top['News']['id'];
					 $tt['News_image'][] = $top['News']['news_image'];
					 $tt['News_date'][] = $top['News']['news_date'];
				}
				$jsonData = json_encode($tt);
	          	return $jsonData;
                         
                         
                         }
                               
                                                 public function onlineregister()
	                                 {
	                                 
	                                 
				          $this->pageTitle = 'BGIS ONLINE REGISTRATION FORM | BGIS';  
					               if ($this->request->isPost())
	      			              {
						        $this->Registration->create();
						        $name = $this->request->data['name'];
						        $email= $this->request->data['email'];
						        $mobile = $this->request->data['mobile'];
						        $dob = $this->request->data['dob'];
						        $parents_name = $this->request->data['parents_name'] ;
						        $grade = $this->request->data['grade'];
						        $date = $this->request->data['prefered_date'];
				          if(!empty($email))
				     {		        
					          $Email = new CakeEmail();
	                                          $Email->viewVars(array('name' => $name,'email' => $email,'mobile' => $mobile,'parents_name' => $parents_name,'dob' => $dob,'grade' => $grade));
					         $Email->template('registration');
					         $Email->emailFormat('both');
		                                 $Email->from('support@bgis.org');
		                                 $Email->replyTo('support@bgis.org');
		                                 $Email->to('mansi@maatti.com');
		                                 $Email->cc('nimalan@bk.ru');
		                                 $Email->subject('BGIS | Registration Detail for Session 2015-2016');
		                                 $Email->send();
	                           }				  	     	  
			                if ($this->Registration->save($this->request->data))
				        {
				        
				        $Email = new CakeEmail();
                                 $Email->viewVars(array('name' => $name,'email' => $email));
				         $Email->template('thankyou');
				         $Email->emailFormat('both');
	                                 $Email->from('support@bgis.org');
	                                 $Email->replyTo('support@bgis.org');
	                                 $Email->to($email);
	                                 $Email->subject('BGIS | Registration Detail Confirmation for Session 2015-2016');
	                                 $Email->send();
                                                 
                                      } 
                             }
					        
				        }
				        
				        
				        
			/*  News controller updating function */
			
		    function gitaJayanti(){
		        
			     $this->pageTitle = 'Gita Jayanti Honoured at Bhaktivedanta Gurukula | BGIS ';
			}
			function nityanandaTrayodashi(){
		        
			     $this->pageTitle = 'nityananda Trayodashi Honoured at Bhaktivedanta Gurukula | BGIS ';
			}


			public function farewellCeremony() {
				$this->pageTitle = 'Farewell Ceremony - 2018  | BGIS'; 
			}
			
			public function shobhayatra() {
				$this->pageTitle = 'Shobha Yatra - 2018  | BGIS'; 
			}
			public function bgisVrindavanOrganized() {
				$this->pageTitle = 'Shobha Yatra - 2018  | BGIS'; 
			}
			public function bhagavatamContents() {
				$this->pageTitle = 'Chinmaya Bhagavatgita Competition - 2018  | BGIS'; 
			}

			public function independence2018() {
				$this->pageTitle = 'Independence - 2018  | BGIS'; 
			}    

			public function janmashtami2018() {
				$this->pageTitle = 'janmashtam - 2018  | BGIS'; 
			}   

			public function kirtanMela2018() {
				$this->pageTitle = 'kirtan Mela - 2018  | BGIS'; 
			} 

			public function gitaJayanti_2018() {
				$this->pageTitle = 'Gita Jayanti Honoured at Bhaktivedanta Gurukula | BGIS'; 
			}                                                        
	        
}
?>