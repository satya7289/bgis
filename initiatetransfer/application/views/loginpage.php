
 <div class="container">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-2 col-sm-2"> </div>
					<div class="col-md-8 col-sm-8"> 
						<div class="row" align="left"> 
					  		<div class="col-md-3 col-sm-3"><img src="<?= base_url()?>assets/images/logo.png"></div>
					  		<div class="col-md-8 col-sm-8" align="left"><br><h1 align="left" class="m_title m_title_ext text-center contact-popup-title" style="color: #fff; font-weight: 900">ADMIN CONTROL PANEL & REPORT ANALYSIS </h1></div>
					  </div> 						 

							
							 
							<div class="separator site-header-separator"></div>

							<form action="<?= base_url()?>credentialsRequestHandler" method="post" class="contact_form row mt-40" enctype="multipart/form-data">
								


								<div class="col-sm-8 kl-fancy-form" style="color: red">
										<?php echo validation_errors(); ?>
										<?php if($this->session->flashdata('message_display')) {
											echo $this->session->flashdata('message_display');
										}
											
										?>
								</div>

								<div class="col-sm-8 kl-fancy-form">
									<input type="text" name="username"  class="form-control" placeholder="Please enter Username" value="" tabindex="1" maxlength="35" required>
									<label class="control-label"> Name of User * </label>
								</div>

								<div class="col-sm-8 kl-fancy-form">
									<input type="Password" name="password" id="cf_lastname-pop-up" class="form-control" placeholder="Please enter Password" value="" tabindex="1" maxlength="35" required>
									<label class="control-label"> Password * </label>
								</div>

								 <div class="col-md-8" align="left">
									<div class="col-md-4 col-sm-4" style="margin-left: -3%"> 
										<input type="submit" name="" class="btn-element btn btn-fullcolor btn-md btn-fullwidth" value="LOGIN"> 
									</div>
								</div>
							</form> 
					</div> 
				</div> 
			</div> 
		</div>
</div>
	 

