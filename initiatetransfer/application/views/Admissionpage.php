<script language="javascript">
function onLoadSubmit() {
	document.sendInfo.submit();
}
</script>


<div class="container" onload="onLoadSubmit()>

    <form action="<?= base_url()?>/website-information" method="post" name="sendInfo">
    
        <input type="hidden" name="" value="<?php echo isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'NULL'; ?>">
        <input type="hidden" name="" value="<?php echo $_SERVER['HTTP_USER_AGENT']; ?>">
        <input type="hidden" name="" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
        <input type="hidden" name="" value="<?php echo $_SERVER['SERVER_ADDR']; ?>">
       
    </form>




			<div class="container-fluid">

				<div class="row">

					<div class="col-md-2 col-sm-2"> </div>

					<div class="col-md-8 col-sm-8"> 

						<div class="row" align="left"> 

					  		<div class="col-md-3 col-sm-3"><img src="<?= base_url()?>assets/images/logo.png"></div>

					  		<div class="col-md-8 col-sm-8" align="left"><br><h1 align="left" class="m_title m_title_ext text-center contact-popup-title" style="color: #fff; font-weight: 900"> BGIS ONLINE ADMISSION REGISTRATION FORM 2019-2020</h1></div>

					  </div> 						 



							

							 

							<div class="separator site-header-separator"></div>



							<form action="<?= base_url()?>pay/ccavRequestHandler.php" method="post" class="contact_form row mt-40" enctype="multipart/form-data">

								<div class="cf_response"></div>



								 <input type="hidden" name="tid" id="tid" readonly />  				

								 <input type="hidden" name="merchant_id" value="50225"/>  

								 <input type="hidden" name="order_id" value="<?php echo  mt_rand( 10000000, 99999999); ?>"/>  

								 <input type="hidden" name="amount" value="1000"/>  

								 <input type="hidden" name="currency" value="INR"/>  	

								 <input type="hidden" name="redirect_url" value="<?= base_url()?>pay/ccavResponseHandlerForAdminssion.php"/>

								 <input type="hidden" name="cancel_url" value="<?= base_url()?>pay/ccavResponseHandlerForAdminssion.php"/>  



								 <input type="hidden" name="language" value="EN"/> 

								 <input type="hidden" name="billing_zip" value="281121"/> 

								 <input type="hidden" name="delivery_zip" value="281121"/>       

								 <input type="hidden" name="delivery_city" value="Vrindavan"/>  

								 <input type="hidden" name="delivery_state" value="Uttar Pradesh"/>

		 						 <input type="hidden" name="delivery_country" value="India"/>  

								 <input type="hidden" name="delivery_tel" value="9456443348"/> 

								 <input type="hidden" name="merchant_param1" value="BGIS ADMISSION 2019-2020"/>  

								 <input type="hidden" name="promo_code" value=""/>   

								 <input type="hidden" name="customer_identifier" value=""/> 



							 



								<div class="col-sm-6 kl-fancy-form">

									<input type="text" name="billing_name"  class="form-control" placeholder="Please enter Name of applicant " value="" tabindex="1" maxlength="35" required>

									<label class="control-label"> Name of applicant * </label>

								</div>



								<div class="col-sm-6 kl-fancy-form">

									<input type="text" name="merchant_param3" id="cf_lastname-pop-up" class="form-control" placeholder="Please enter Parent's Name " value="" tabindex="1" maxlength="35" required>

									<label class="control-label"> Parent's Name * </label>

								</div>



								<div class="col-sm-6 kl-fancy-form">

									<input type="text" name="billing_email"  class="form-control" placeholder="Please enter Email ID" value="" tabindex="1" maxlength="35" required>

									<label class="control-label"> Email ID * </label>

								</div>



								<div class="col-sm-6 kl-fancy-form">

									<input type="text" name="billing_tel" id="cf_lastname-pop-up" class="form-control" placeholder="Please enter Contact Number" value="" tabindex="1" maxlength="35" required>

									<label class="control-label"> Contact Number * </label>

								</div> 

					





								<div class="col-sm-6 kl-fancy-form">									

									<SELECT name="merchant_param2"   class="form-control" style="height: calc(2.25rem + 15px)"> 

										<OPTION>SELECT CLASS </OPTION>

										<OPTION>3TH GRADE</OPTION>

										<OPTION>4TH GRADE</OPTION>

										<OPTION>5TH GRADE</OPTION>

										<OPTION>6TH GRADE</OPTION>

										<OPTION>7TH GRADE</OPTION>

										<OPTION>8TH GRADE</OPTION>

										<OPTION>9TH GRADE</OPTION>

										<OPTION>11TH GRADE</OPTION>

									</SELECT>

									

									<label class="control-label"> APPLYING FOR  * </label>

								</div>



								<div class="col-sm-6 kl-fancy-form">
									<label class="control-label"> Avaliable  Admission Dates </label>

									<SELECT name="merchant_param4" class="form-control" style="height: calc(2.25rem + 15px)">  
										<option value="26-01-2019">SATURDAY, 26 JANUARY 2019 | BGIS NEW CAMPUS - VRINDAVAN</option>  
										<option value="27-01-2019">SUNDAY, 27 JANUARY 2019 | ISKCON MUMBAI</option>  
										<option value="03-02-2019">SUNDAY, 03 FEBRUARY 2019 | EAST OF KAILASH - ISKCON DELHI</option>  
										<option value="10-02-2019">SUNDAY, 10 FEBRUARY 2019 | BGIS NEW CAMPUS - VRINDAVAN</option>  
										<option value="24-02-2019">SUNDAY, 24 FEBRUARY 2019 | BGIS NEW CAMPUS - VRINDAVAN</option>  


 
									</SELECT>

								</div>






								 

 

								<div class="col-sm-12 kl-fancy-form">

									<input type="text" name="billing_address" id="cf_email-pop-up" class="form-control h5-email" placeholder="Please enter your Address" value="" tabindex="1" maxlength="35" required>

									<label class="control-label"> Address *</label>

								</div>	



								<div class="col-sm-6 kl-fancy-form">

									<input type="text" name="billing_city" id="cf_lastname-pop-up" class="form-control" placeholder="Please enter your city" value="" tabindex="1" maxlength="35" required>

									<label class="control-label"> CITY  * </label>

								</div>



								<div class="col-sm-6 kl-fancy-form">

									<input type="text" name="billing_state" id="cf_lastname-pop-up" class="form-control" placeholder="Please enter your State" value="" tabindex="1" maxlength="35" required>

									<label class="control-label"> State  * </label>

								</div> 							

								



								<div class="col-sm-6 kl-fancy-form">

									<input type="text" name="billing_country"  class="form-control" placeholder="Please enter your Contry" value="" tabindex="1" maxlength="35" required>

									<label class="control-label"> Country  * </label>

								</div>	





								<div class="col-sm-6 kl-fancy-form">

									<input type="text" name="merchant_param5" id="cf_lastname-pop-up" class="form-control" placeholder="Enter Your Query">

									<label class="control-label"> Parent's Query </label>

								</div> 







								<div class="col-sm-12"> 									

									<div class="col-sm-12"  style="font-size: 11px; border: red double 1px ; border-radius: 1%; color: #fff; background: #3188378c">

										<p style="padding-top: 2%">Pay Registration fees Rs: 1000/- (Non-refundable)<br>

										 Note :- Payment to be made via online, cash, DD, Credit/Debit card only.</p>										

									</div> <br>

									<input type="checkbox" required> &nbsp; I agree  to the terms and conditions

								</div>

								<div class="col-sm-4" style="margin-top: 2%"> 

									<input type="submit" name="" class="btn-element btn btn-fullcolor btn-md btn-fullwidth" value="PAY NOW"> 

								</div>

							</form> 

					</div> 

				</div> 

			</div> 

		</div>

</div> 