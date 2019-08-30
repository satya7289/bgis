<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="http://bgis.org/">
	<?php echo $this->Html->image('logo1.png',array('style'=>'margin-left: 56px;position: relative; margin-bottom: -90px; margin-top: -25px;')); ?>			
			</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					
									
					<li class="">						
						<a href="http://bgis.org/" class="">
							<i class="icon-chevron-left"></i>
							Back to BGIS
						</a>
						
					</li>
				</ul>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->

<div class="account-container">
	<div style="background: #111c22;"></div>
	<div class="content clearfix">
		
		<?php echo $this->Form->create(null, array('url' => array('controller' => 'user', 'action'=>'login')));?> 
		
			<h2><center style="COLOR: #84020c;">BGIS ADMIN PANEL</center></h2>		
			<br clear="all">
            <div class="login-fields">
				
				<p>Sign in using your registered account:</p>
				<?php
					$this->Form->inputDefaults(array(
						'label' => false,
					));
				?>
                <div class="field">
                <label for="username">Username:</label>
                <?php
					echo $this->Form->input('login', array(
						'placeholder' => 'Username',
						'class' => 'login username-field validate[required,custom[onlyLetterSp]] text-input',
					));
				?>
                </div>
                <div class="field">
                <label for="username">Password:</label>
                <?php
					echo $this->Form->input('password', array(
						'placeholder' => 'Password',
						'class' => 'login password-field validate[required]',
					));
				?>
                </div>
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
									
				<button type="submit" class="button btn btn-warning btn-large">Sign In</button>
				
			</div> <!-- .actions -->
			
			
			
		<?php echo $this->Form->end(); ?>
		
	</div> <!-- /content -->
	
</div>
