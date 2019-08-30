<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'homepages', 'action' => 'index'));
	
	
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
   	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
    Router::connect('/about',   array('plugin'=>false,'controller' => 'dynamicpages', 'action' =>'about'));
    Router::connect('/success/:param', array('plugin'=>false,'controller' => 'innerspage', 'action' =>'success'));
    Router::connect('/newcampustransaction/:param', array('plugin'=>false,'controller' => 'innerspage', 'action' =>'newcampustransaction'));
    Router::connect('/onlinepayments/:param', array('plugin'=>false,'controller' => 'dynamicpages', 'action' =>'onlinepayments'));
        
        
    //INNRERPAGE CONTROLLER ROUTH
	Router::connect('/contact', array('controller' => 'innerspage', 'action' => 'contact')); 
	Router::connect('/job', array('controller' => 'innerspage', 'action' => 'job'));
	Router::connect('/newbgiscontact', array('controller' => 'innerspage', 'action' => 'newbgiscontact'));
	
	//DYNAMICPAGE CONTROLLER ROUTH
	Router::connect('/payment', array('controller' => 'dynamicpages', 'action' => 'payment'));
	Router::connect('/newcampusdonate', array('controller' => 'dynamicpages', 'action' => 'newcampusdonate'));
	
	//INNRERPAGE CONTROLLER ROUTH
	Router::connect('/latest', array('controller' => 'innerspage', 'action' => 'latest'));
	Router::connect('/onlineregister', array('controller' => 'innerspage', 'action' => 'onlineregister'));
	Router::connect('/e404', array('plugin'=> false,'controller' => 'innerspage', 'action' => 'e404'));
	Router::connect('/daily', array('controller' => 'innerspage', 'action' => 'daily'));
	Router::connect('/mansiganga', array('controller' => 'innerspage', 'action' => 'mansiganga'));
	Router::connect('/result', array('controller' => 'innerspage', 'action' => 'result'));
	Router::connect('/grand', array('controller' => 'innerspage', 'action' => 'grand'));
	Router::connect('/latest', array('controller' => 'innerspage', 'action' => 'latest'));	
	Router::connect('/competition', array('controller' => 'innerspage', 'action' => 'competition'));
	Router::connect('/competition2', array('controller' => 'innerspage', 'action' => 'competition2'));
	Router::connect('/competition3', array('controller' => 'innerspage', 'action' => 'competition3'));
	Router::connect('/competition4', array('controller' => 'innerspage', 'action' => 'competition4'));
	Router::connect('/competition5', array('controller' => 'innerspage', 'action' => 'competition5'));
	Router::connect('/competition6', array('controller' => 'innerspage', 'action' => 'competition6'));
	Router::connect('/mphemamalini', array('controller' => 'innerspage', 'action' => 'mphemamalini'));
	Router::connect('/championship', array('controller' => 'innerspage', 'action' => 'championship'));
	Router::connect('/plantedtree', array('controller' => 'innerspage', 'action' => 'plantedtree'));
	Router::connect('/nirmaan', array('controller' => 'innerspage', 'action' => 'nirmaan'));
	Router::connect('/media', array('controller' => 'innerspage', 'action' => 'media'));
	Router::connect('/publication', array('controller' => 'innerspage', 'action' => 'publication'));
	Router::connect('/janmashtami-event', array('controller' => 'innerspage', 'action' => 'janmashtamiEvent'));
	Router::connect('/farewell-ceremony', array('controller' => 'innerspage', 'action' => 'farewellCeremony'));
	Router::connect('/narasimhacaturdashi', array('controller' => 'innerspage', 'action' => 'narasimhacaturdashi'));
	Router::connect('/dusshera', array('controller' => 'innerspage', 'action' => 'dusshera'));
	Router::connect('/prize-giving-day', array('controller' => 'innerspage', 'action' => 'prizeGivingDay'));
	Router::connect('/gopastami', array('controller' => 'innerspage', 'action' => 'gopastami'));
	Router::connect('/bharat-gurukula-shiksha-abhiyana', array('controller' => 'innerspage', 'action' => 'bharatGurukula'));
	Router::connect('/protest-plastics-bags', array('controller' => 'innerspage', 'action' => 'protestPlasticsBags'));
	Router::connect('/gita-jayanti', array('controller' => 'innerspage', 'action' => 'gitaJayanti'));
	Router::connect('/republic_day_2018', array('controller' => 'innerspage', 'action' => 'rePublicDay'));
	Router::connect('/nityananda-trayodashi-2018', array('controller' => 'innerspage', 'action' => 'nityanandaTrayodashi'));
	
    // NEWS PAGE ROUTE CUSTOM ROUTE CRATEED 
	

	Router::connect('/shobha-yatra-2018', array('controller' => 'innerspage', 'action' => 'shobhayatra'));
	Router::connect('/independence-day-2018', array('controller' => 'innerspage', 'action' => 'independence2018'));
	Router::connect('/chinmaya-bhagavatgita-competition', array('controller' => 'innerspage', 'action' => 'bhagavatamContents'));
	Router::connect('/bgis-vrindavan-organized', array('controller' => 'innerspage', 'action' => 'bgisVrindavanOrganized'));
	Router::connect('/janmashtami-2018', array('controller' => 'innerspage', 'action' => 'janmashtami2018'));
	Router::connect('/kirtan-mela-2018', array('controller' => 'innerspage', 'action' => 'kirtanMela2018'));
	Router::connect('/gita-jayanti-2018', array('controller' => 'innerspage', 'action' => 'gitaJayanti_2018'));
	
    
    
    
    
      

	
 

	
	//Social media promotion
	Router::connect('/googlef6c21c1ddad6c478.html', array('controller' => 'innerspage', 'action' => 'google'));
	Router::connect('/googlef6c21c1ddad6c478.html', array('controller' => 'innerspage', 'action' => 'google'));
	
	
	Router::connect('/build.xml', array('controller' => 'innerspage', 'action' => 'sitemap'));
	
	//DYNAMIC PAGE CONTROLLER ROUTH
	Router::connect('/faculty',   array('plugin'=>false,'controller' => 'dynamicpages', 'action' =>'faculty'));
	Router::connect('/aboutus/:param', array('plugin'=>false,'controller' => 'dynamicpages', 'action' =>'aboutus'));
	Router::connect('/campus',   array('plugin'=>false,'controller' => 'dynamicpages', 'action' =>'campus'));
	Router::connect('/campusmain/:param', array('plugin'=>false,'controller' => 'dynamicpages', 'action' =>'campusmain'));
	Router::connect('/admission', array('plugin'=>false,'controller' => 'dynamicpages', 'action' =>'admission'));
	Router::connect('/admissions/:param', array('plugin'=>false,'controller' => 'dynamicpages', 'action' =>'admissions'));
	Router::connect('/contribute',   array('plugin'=>false,'controller' => 'dynamicpages', 'action' =>'contribute'));
	
	//STUDENT PAGE CONTROLLER ROUTH
	Router::connect('/student',   array('plugin'=>false,'controller' => 'students', 'action' =>'student'));
	Router::connect('/alumni',   array('plugin'=>false,'controller' => 'students', 'action' =>'alumni'));
	Router::connect('/parents',   array('plugin'=>false,'controller' => 'parents', 'action' =>'parents'));
	Router::connect('/contributes/:param', array('plugin'=>false,'controller' => 'dynamicpages', 'action' =>'contributes'));
	Router::connect('/login', array('plugin'=>'authake','controller' => 'user', 'action' => 'login'));
	Router::connect('/logout', array('plugin'=>'authake','controller' => 'user', 'action' => 'logout'));
	
	
	
	
/**
 * Load all plugin routes.  See the CakePlugin documentation on 
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();
	
/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';