<?php if(isempty($this->Session->read('Authake.id'))){ ?>
<?php echo $this->Html->docType('html5'); ?>
<head>
	<title>
		<?php echo $title_for_layout ?>
	</title>
	<?php
	echo $this->Html->charset();
	echo $this->Html->meta('icon');
	//$this->Html->css('/authake/css/bootstrap.min', null, array('inline' => false));
	//$this->Html->css('/authake/css/custom', null, array('inline' => false));
    $this->Html->css('validationEngine.jquery', null, array('inline' => false));
    
    ?>
    
    <?php 
    if($this->params['controller'] == "user"){
    	$this->Html->css('bootstrap.min', null, array('inline' => false));
		$this->Html->css('bootstrap-responsive.min', null, array('inline' => false));
    }
	//$this->Html->css('font-awesome', null, array('inline' => false));
	
	$this->Html->css('base-admin', null, array('inline' => false));
	$this->Html->css('pages/signin', null, array('inline' => false));
    ?>
    

    <?php
	$this->Html->script('Authake.jquery-latest', array('block' => 'script'));
	$this->Html->script('Authake.custom', array('block' => 'script'));
	$this->Html->script('Authake.bootstrap.min', array('block' => 'script'));
	$this->Html->script('Authake.html5shiv', array('block' => 'script'));
    $this->Html->script('jquery.validationEngine', array('block' => 'script'));
    $this->Html->script('jquery.validationEngine-en', array('block' => 'script'));

   

	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	?>
    
    <script type="text/javascript">
	$(document).ready(function(){
			// binds form submission and fields to the validation engine
			$("#UserLoginForm").validationEngine('attach', {promptPosition : "topRight", autoPositionUpdate : true});
		});

	</script>
    <style>
    .alert {
		position: absolute;
		width: 50%;
		top: 83px;
		margin-left: 24%;
	}
	.btn-warning{background:cornflowerblue !important;}
	.account-container h1 {
		color: cornflowerblue !important;width: 1170px;
	}
	   body{background:url(img/pic.jpg) no-repeat;}
    </style>
</head>
<body>
	
		<?php
		if ($this->Session->check('Message.flash')):
			echo $this->Session->flash();
		endif;
		?>
		<?php 
		echo $this->fetch('content'); 
		?>
	<footer>
    	
	</footer>
</body>
</html>
<?php } ?>
<?php $groupIds = $this->Authake->getGroupIds();
		  $curGroup = $groupIds[0];
?>
<?php if($this->Session->read('Authake.id')){ ?>
<?php echo $this->Html->docType('html5'); ?>
<head>
	<title>
		<?php echo $title_for_layout ?>
	</title>
	<?php
	echo $this->Html->charset();
	echo $this->Html->meta('icon');
	//$this->Html->css('jquery.mobile-1.0.1.min', null, array('inline' => false));
	$this->Html->css('bootstrap.min', null, array('inline' => false));
	$this->Html->css('bootstrap-responsive.min', null, array('inline' => false));
	$this->Html->css('font-awesome', null, array('inline' => false));
	$this->Html->css('base-admin', null, array('inline' => false));
	$this->Html->css('base-admin-responsive', null, array('inline' => false));
	
	$this->Html->css('colorbox', null, array('inline' => false));
    ?>
    
    <?php 
    
    $this->Html->css('pages/dashboard', null, array('inline' => false));
	$this->Html->css('datePicker', null, array('inline' => false));
	$this->Html->css('demo', null, array('inline' => false));
	$this->Html->css('validationEngine.jquery', null, array('inline' => false));
	echo $this->fetch('meta');
	echo $this->fetch('css');
    ?>
	
    
    <?php
	$this->Html->script('jquery-1.7.2.min', array('block' => 'script'));
	$this->Html->script('excanvas.min', array('block' => 'script'));
	$this->Html->script('bootstrap', array('block' => 'script'));
	$this->Html->script('base', array('block' => 'script'));
	$this->Html->script('date', array('block' => 'script'));
	$this->Html->script('jquery.colorbox', array('block' => 'script'));
	$this->Html->script('custom', array('block' => 'script'));
	$this->Html->script('jquery.datePicker', array('block' => 'script'));
	$this->Html->script('jquery.validationEngine', array('block' => 'script'));
    $this->Html->script('jquery.validationEngine-en', array('block' => 'script'));
	echo $this->fetch('script');
	?>
	
	<script type="text/javascript">
	$(document).ready(function(e) {
		// binds form submission and fields to the validation engine
			$("#OrderAddForm").validationEngine('attach', {promptPosition : "topRight", autoPositionUpdate : true});
    });
	//Date.firstDayOfWeek = 0;
	Date.format = 'yyyy-mm-dd';
    $(function()
	{
		$('.date-pick').datePicker({clickInput:true,startDate:'2014-01-01'});
	});
    
    function showDate(date) {
        alert('The date chosen is ' + date);
    }
    </script>
    
    
    <style>
    .span6 > .widget{width:1170px !important;}
	.form-actions {
		margin-right: 35px;
	}
	.dropdown-menu{
		min-width:100px !important;		
	}
	.widget{overflow:visible !important;}
	body{background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #111C22), color-stop(50%, #59666E), color-stop(100%, #111C22));
	font-family:Arial !important;
	font-size:12px !important;
	}
	.message
	{
	  text-align: center;
      font-weight: bolder;
      font-size: 15px;
	}
	
	
    </style>
    

</head>
<body>
<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner" style="background: #760208;">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="/authake">
				BGIS cPanel &copy; <?php echo date('Y'); ?>			
			</a>		
			
			<div class="nav-collapse">
			<ul class="nav pull-right">
					<li class="dropdown">
			 <?php    if(($curGroup == 1)){ ?>  
				
						
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-cog"></i>
							Settings
							<b class="caret"></b>
						</a>
						
						<ul class="dropdown-menu">
							<li><a href="javascript:;">Account Settings</a></li>
							<li><a href="javascript:;">Privacy Settings</a></li>
							<li class="divider"></li>
							<li><a href="javascript:;">Help</a></li>
						</ul>
						
					</li>
			<?php   } ?> 
					<li class="dropdown">
						
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-user"></i> 
							<?php echo $this->Session->read('Authake.login');?>
							<b class="caret"></b>
						</a>
						
						<ul class="dropdown-menu">
						
							<li class="divider"></li>
							<li><a href="<?php echo $this->Html->url(array('controller'=>'user','action'=>'logout')); ?>">Logout</a></li>
						</ul>
						
					</li>
				</ul>
			
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->
    



  <?php    if(($curGroup == 1)){ ?>    
<div class="subnavbar">

	<div class="subnavbar-inner">
	
		<div class="container">

			<ul class="mainnav">
				<li class="<?php if($this->params['controller'] == "user"){ echo "active"; }?>">
					<a href="<?php echo $this->Html->url(array('plugin'=>'authake','controller'=>'user','action'=>'')); ?>">
						<i class="icon-home"></i>
						<span>Home</span>
					</a>	    				
				</li>
				<li class="dropdown <?php if($this->params['controller'] == "users"){ echo "active"; }?>">					
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-th-large"></i>
						<span>Users</span>
						<b class="caret"></b>
					</a>	
				
					<ul class="dropdown-menu">
						<li><?php echo $this->Html->link(__('New User'), array('controller'=>'users','action'=>'add')); ?></li>
						<li class="divider"></li>
						<li><a href="<?php echo $this->Html->url( array('controller'=>'users','action'=>'index')); ?>">List Users</a></li>
					</ul>    				
				</li>
                <li class="dropdown <?php if($this->params['controller'] == "rules"){ echo "active"; }?>">					
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-th-large"></i>
						<span>Rules</span>
						<b class="caret"></b>
					</a>	
				
					<ul class="dropdown-menu">
						<li><?php echo $this->Html->link(__('New Rule'), array('controller'=>'rules','action'=>'add')); ?></li>
						<li class="divider"></li>
						<li><a href="<?php echo $this->Html->url( array('controller'=>'rules','action'=>'index')); ?>">List Rules</a></li>
					</ul>    				
				</li>
                <li class="dropdown <?php if($this->params['controller'] == "groups"){ echo "active"; }?>">					
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-th-large"></i>
						<span>Groups</span>
						<b class="caret"></b>
					</a>	
				
					<ul class="dropdown-menu">
						<li><?php echo $this->Html->link(__('New Group'), array('controller'=>'groups','action'=>'add')); ?></li>
						<li class="divider"></li>
						<li><a href="<?php echo $this->Html->url( array('controller'=>'groups','action'=>'index')); ?>">List Groups</a></li>
					</ul>    				
				</li>
				<li class="dropdown <?php if($this->params['controller'] == "admissions"){ echo "active"; }?>">					
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-pushpin"></i>
						<span>Admission</span>
						<b class="caret"></b>
					</a>	
				
					<ul class="dropdown-menu">
						<li><?php echo $this->Html->link(__('Admission'), array('controller'=>'admissions','action'=>'add')); ?></li>
						<li class="divider"></li>
						<li><a href="<?php echo $this->Html->url( array('controller'=>'admissions','action'=>'index')); ?>">List Admissions</a></li>
					</ul>    				
				</li>
			<li class="dropdown <?php if($this->params['controller'] == "campus"){ echo "active"; }?>">					
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-pushpin"></i>
						<span>Campus</span>
						<b class="caret"></b>
					</a>	
				
					<ul class="dropdown-menu">
						<li><?php echo $this->Html->link(__('Campus'), array('controller'=>'campus','action'=>'add')); ?></li>
						<li class="divider"></li>
						<li><a href="<?php echo $this->Html->url( array('controller'=>'campus','action'=>'index')); ?>">List Campus</a></li>
					</ul>    				
				</li>
                <li class="dropdown <?php if($this->params['controller'] == "contributes"){ echo "active"; }?>">					
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-pushpin"></i>
						<span>Contributes</span>
						<b class="caret"></b>
					</a>	
				
					<ul class="dropdown-menu">
						<li><?php echo $this->Html->link(__('Contribute'), array('controller'=>'contributes','action'=>'add')); ?></li>
						<li class="divider"></li>
						       <li><a href="<?php echo $this->Html->url( array('controller'=>'contributes','action'=>'index')); ?>">List Contributes</a></li>
					</ul>    				
				</li>
                    <li class="dropdown <?php if($this->params['controller'] == "results"){ echo "active"; }?>">					
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-pushpin"></i>
						 <span>Results</span>
						 <b class="caret"></b>
					</a>	
				
					<ul class="dropdown-menu">
	 <li><?php echo $this->Html->link(__('New Entry'), array('controller'=>'results','action'=>'add')); ?></li>
						<li class="divider"></li>
						  <li><a href="<?php echo $this->Html->url( array('controller'=>'results','action'=>'index')); ?>">List Previous Entry</a></li>
					</ul>    				
				</li>
	
			</ul>

		</div> <!-- /container -->
	
	</div> <!-- /subnavbar-inner -->

</div> <!-- /subnavbar -->
    

<div class="main">
	
	<div class="main-inner" style="background: coral;">

	    <div class="container">
	
	      <div class="row">
	      	
	      	<div class="span12">
	      		
	      		<?php
						if ($this->Session->check('Message.flash')):
							   echo $this->Session->flash();
						endif;
                    ?>
						
<div class="widget">
						
					<div class="widget-header">
						<i class="icon-bookmark"></i>
						<h3>Quick Shortcuts</h3>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						<div class="shortcuts">
				<a href="<?php echo $this->Html->url( array('controller'=>'menus','action'=>'index')); ?>" class="shortcut">
						<i class="shortcut-icon icon-list-alt"></i>
                        <span class="shortcut-label">Menu</span>
							</a>
			   <a href="<?php echo $this->Html->url( array('controller'=>'homepage','action'=>'index')); ?>" class="shortcut">
						<i class="shortcut-icon icon-bookmark"></i>
                      <span class="shortcut-label">Home</span>							
							</a>
							
	    	<a href="<?php echo $this->Html->url( array('controller'=>'about','action'=>'index')); ?>" class="shortcut">
								<i class="shortcut-icon icon-signal"></i>
								<span class="shortcut-label">About Us</span>	
							</a>
							
		   <a href="<?php echo $this->Html->url( array('controller'=>'news','action'=>'welcome_index')); ?>" class="shortcut">
								<i class="shortcut-icon icon-comment"></i>
								<span class="shortcut-label">News</span>								
							</a>
							
	   <a href="<?php echo $this->Html->url( array('controller'=>'students','action'=>'index')); ?>" class="shortcut">
								<i class="shortcut-icon icon-user"></i>
								<span class="shortcut-label">Students</span>
							</a>
     <a href="<?php echo $this->Html->url( array('controller'=>'parents','action'=>'index')); ?>" class="shortcut">
							 	<i class="shortcut-icon icon-user"></i>
								<span class="shortcut-label">Parents</span>
							</a>
							
		 <a href="<?php echo $this->Html->url( array('controller'=>'faculty','action'=>'index')); ?>" class="shortcut">
								<i class="shortcut-icon icon-file"></i>
								<span class="shortcut-label">Faculty</span>	
							</a>
							
	<a href="<?php echo $this->Html->url( array('controller'=>'blogs','action'=>'welcome_index')); ?>" class="shortcut">
								<i class="shortcut-icon icon-picture"></i>
								<span class="shortcut-label">Blogs</span>	
							</a>				
						</div> <!-- /shortcuts -->	
					
					</div> <!-- /widget-content -->
					
				 </div>
                                     <div class="widget widgets">
					
					<div class="widget-header">
						<i class="icon-file"></i>
						<h3><?php echo Inflector::humanize($this->params['controller']); ?> Management</h3>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
					
                    <?php 
						echo "<p class='breadcrum'></p>";
						echo $this->fetch('content'); 
                    ?>
						
					</div> <!-- /widget-content -->
				
				</div> <!-- /widget -->
                
                
				<!-- /    RESULT ADMIN LOGIN VIEW -->		
				 <?php }else { ?>
				 <div class="widget">
						
					<div class="widget-header">
						<i class="icon-bookmark"></i>
						<h3>Quick Shortcuts</h3>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						<div class="shortcuts">			
	   <a href="<?php echo $this->Html->url( array('controller'=>'results','action'=>'index')); ?>" class="shortcut">
								<i class="shortcut-icon icon-user"></i>
								<span class="shortcut-label">All Students</span>
							</a>
							
		      <a href="<?php echo $this->Html->url( array('controller'=>'results','action'=>'add')); ?>" class="shortcut">
								<i class="shortcut-icon icon-file"></i>
								<span class="shortcut-label">Add Students</span>	
							</a>
							
              <a href="<?php echo $this->Html->url( array('controller'=>'results','action'=>'welcome_index')); ?>" class="shortcut">
								<i class="shortcut-icon icon-picture"></i>
								<span class="shortcut-label">Search Class wise</span>	
							</a>				
						</div> <!-- /shortcuts -->	
					
					</div> <!-- /widget-content -->	
					
											
				        <div class="widget widgets">
					
					<div class="widget-header">
						<i class="icon-file"></i>
						<h3><?php echo Inflector::humanize($this->params['controller']); ?> Management</h3>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
					
                    <?php 
						echo "<p class='breadcrum'></p>";
						echo $this->fetch('content'); 
                    ?>
						
					</div> <!-- /widget-content -->
				
				</div> <!-- /widget -->
	      		
              <?php }?>
									
		      </div> <!-- /span6 -->
	      	
	      </div> <!-- /row -->
	
	    </div> <!-- /container -->
	    
	</div> <!-- /main-inner -->
    
</div> <!-- /main -->
        
<div class="footer">
	
	<div class="footer-inner">
		
		<div class="container">
			
			<div class="row">
				
    			<div class="span12">
    				&copy; <?php echo date('Y');?> <a href="#" target="_new">BGIS.</a>.
    			</div> <!-- /span12 -->
    			
    		</div> <!-- /row -->
    		
		</div> <!-- /container -->
		
	</div> <!-- /footer-inner -->
	
</div> <!-- /footer -->
    

    <?php }else{?>
	<?php	} ?>
    <?php echo $this->element('sql_dump'); ?>
</body>
</html>