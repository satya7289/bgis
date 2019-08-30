


 	<div class="container">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-2 col-sm-2"> </div>
					<div class="col-md-8 col-sm-8">  
							<script src='<?= base_url()?>assets/js/api.js'></script> 
							<h1 class="m_title m_title_ext text-center contact-popup-title" style="color: #fff; font-weight: 900"> BGIS ONLINE INSTANCE PAY/DONATION</h1> 

							<form action="<?= base_url()?>pay/ccavRequestHandler.php" method="post" class="contact_form row mt-40" enctype="multipart/form-data">
								<div class="cf_response"></div>

								 <input type="hidden" name="tid" id="tid" readonly />  				
								 <input type="hidden" name="merchant_id" value="50225"/>  
								 <input type="hidden" name="order_id" value="<?php echo  mt_rand( 10000000, 99999999); ?>"/>  
							  
								 <input type="hidden" name="currency" value="INR"/>  
						<input type="hidden" name="redirect_url" value="https://newbgis.org/initiateTransaction/pay/ccavResponseHandlerForDonation.php"/>
						<input type="hidden" name="cancel_url" value="https://newbgis.org/initiateTransaction/pay/ccavResponseHandlerForDonation.php.php"/>  

								  
								 <input type="hidden" name="language" value="EN"/> 
								 <input type="hidden" name="billing_zip" value="281121"/> 
								 <input type="hidden" name="delivery_zip" value="281121"/>   
								 <input type="hidden" name="delivery_name" value="BGIS VRINDAVAN"/>  
								 <input type="hidden" name="delivery_address" value="Raman Reti Road Vrindavan"/>  
								 <input type="hidden" name="delivery_city" value="Vrindavan"/>  
								 <input type="hidden" name="delivery_state" value="Uttar Pradesh"/>
		 						 <input type="hidden" name="delivery_country" value="India"/>  
								 <input type="hidden" name="delivery_tel" value="9456443348"/> 
								 <input type="hidden" name="merchant_param1" value="BGIS INSTANCE DONATIONS"/>  
								 <input type="hidden" name="merchant_param2" value="additional Info3"/>  
								 <input type="hidden" name="merchant_param3" value="ISKCON"/>  
								 <input type="hidden" name="merchant_param4" value="additional Info4."/>  
								 <input type="hidden" name="merchant_param5" value="additional Info5."/>  
								 <input type="hidden" name="promo_code" value=""/>  
								 <input type="hidden" name="customer_identifier" value=""/> 


								 <input type="hidden" name="billing_name" value="IKSCON BGIS"/> 
								 <input type="hidden" name="billing_email" value="support@bgis.org"/> 
								 <input type="hidden" name="billing_tel" value="9456443348"/> 
								 <input type="hidden" name="billing_city" value="Vrindavan"/> 
								 <input type="hidden" name="billing_address" value="Bhaktivedanta Gurukula and International School - Bhaktivedanta Swami Marg, Raman Reti"/> 
								 <input type="hidden" name="billing_state" value="UTTAR PRADESH"/> 
								 <input type="hidden" name="billing_country" value=""/> 
								 <input type="hidden" name="customer_identifier" value=""/> 

								 <div class="col-sm-11 kl-fancy-form">
									<input type="text" name="amount" id="cf_lastname-pop-up" class="form-control" placeholder="Please enter Donation amout" value="" tabindex="1" maxlength="35" required>
									<label class="control-label"> Donation Amount</label>
								</div> 
 

							 


								<div class="col-sm-12"> 									
									<div class="col-sm-11"  style="border: red double 1px ; border-radius: 1%; color: #fff; background: #3188378c">
										<p style="padding-top: 2%" style="font-size: 8px">Pay Registration amount Rs: 1000/-<br>
										To complete registration process click here </p>										
									</div> <br>
									<input type="checkbox" required> &nbsp; I Agreement Terms and Conditions
								</div>
								<div class="col-sm-4" style="margin-top: 2%"> 
									<input type="submit" name="" class="btn-element btn btn-fullcolor btn-md btn-fullwidth" value=" REGISTER & PAY NOW"> 
								</div>
							</form> 
					</div> 
				</div> 
			</div> 
		</div>
</div>
	 