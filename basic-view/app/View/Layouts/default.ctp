<?php
/**
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
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
 <?php echo  $this->Html->docType(); ?>
<head>
        <?php echo $this->Html->charset(); ?>
        <title><?php  echo $title_for_layout ?></title>

        <!-- Global site tag (gtag.js) - Google Ads: 770587281 -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=AW-770587281"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'AW-770587281');
		</script>



        
        




	<?php
	     
		  echo $this->Html->meta('icon');
		  echo $this->fetch('meta');
		  echo $this->fetch('css');
		  echo $this->fetch('script');
		  echo $this->Html->css(array('default'));
		  echo $this->Html->css('validationEngine.jquery');
	?>
    <?php	
				   echo $this->Html->script('jquery-1.10.1.min.js');
				  echo $this->Html->script('header.js');
				    echo $this->Html->script('news.js');
				    echo $this->Html->script('jquery.validationEngine.js');
				 echo $this->Html->script('jquery.validationEngine-en.js');
				  $this->Js->JqueryEngine->jQueryObject = '$j';
               echo $this->Html->scriptBlock('var $j = jQuery.noConflict();',array('inline' => false));
	?>
	</head>
	     <div class="outer">
		 <div class="header">
	   <?php echo $this->element('header', array('cache' => false)); ?>
	    </div>
	     <?php echo $this->element('sidebar', array('cache' => false)); ?>
		       <div class="inouter">
                <?php echo $this->Session->flash(); ?>
               <?php echo $content_for_layout; ?>
             </div>
           <div class="down">&nbsp;</div>
          <?php echo $this->element('footer', array('cache' => false)); ?>	
	      <?php echo $this->element('sql_dump');
	       echo $this->Js->writeBuffer(); ?>
             </div>
</body>
</html>