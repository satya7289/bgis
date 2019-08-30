<?php   $billing_cust_name =   $_GET['user_name']; ?>
<?php   $pmtid  = $_GET['id'];?>
<?php   $billing_cust_email =  $_GET['email'];?>
<?php   $ord_totamt   =   $_GET['amount']; ?>
<?php   $phone       =   $_GET['billing_tel']; ?>
<?php   $billing_cust_address =  'Delhi'; ?>
<?php   $billing_cust_city =   'Delhi'; ?>
<?php   $billing_cust_state =   'Delhi'; ?>
<?php   $billing_zip_code =   '110015'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BGIS SCHOOL</title>

<div class="body" style="background:#fff; width:510px; margin:auto ;">
<div class="content">
  <div class="hd3" style="background: #C00; font-size:30px; line-height:40px; width:510px; border:1px #FFF solid; color:#FFF; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; padding-left:10px;"> &nbsp;&nbsp;Donate  Today… Change Tomorrow</div>


<div class="bullet" style="background: #F2F2F2; font-size:18px; line-height:40px; width:510px; border:1px #FFF solid; color:# 333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; padding-left:8px;">
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please Click to proceed .</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../img/ccavenue.png" width="200" height="110" align="absmiddle" /></p>
</div>
  
   <?php if($billing_cust_name !="" && $phone !="" && $pmtid !="" && $billing_cust_email !="" && $ord_totamt !=""){
  ?>


          
                            <form method="post" name="customerData" action="http://bgis.org/ccavenue/ccavRequestHandler.php">
				<input type="hidden" name="merchant_id" value="50226"/>
				<input type="hidden" name="order_id" value="<?php echo $pmtid;?>"/>
				<input type="hidden" name="amount" value="<?php echo $ord_totamt;?>"/>   
				<input type="hidden" name="currency" value="INR"/>
				<input type="hidden" name="redirect_url" value="http://bgis.org/ccavenue/ccavResponseHandler.php"/>
				<input type="hidden" name="cancel_url"   value="http://bgis.org/ccavenue/ccavResponseHandler.php"/>
			 	<input type="hidden" name="language" value="EN"/>
				
		     	<!--<tr>
		     		<td colspan="2">Billing information(optional):</td>
		     	</tr>-->
		        <input type="hidden" name="billing_name" value="<?php echo $billing_cust_name;?>"/>
		        <input type="hidden" name="billing_address" value="<?php echo $billing_cust_address;?>"/>
		        <input type="hidden" name="billing_city" value="<?php echo $billing_cust_city;?>"/>
		        <input type="hidden" name="billing_state" value="<?php echo $billing_cust_state;?>"/>
		        <input type="hidden" name="billing_zip" value="<?php echo $billing_zip_code;?>"/>
		        <input type="hidden" name="billing_country" value="India"/>
		        <input type="hidden" name="billing_tel" value="<?php echo $phone;?>"/>
		        <input type="hidden" name="billing_email" value="<?php echo $billing_cust_email;?>"/>
		        <!--</tr>-->
		        <!--<tr>
		        	<td colspan="2">Shipping information(optional)</td>
		        </tr>-->
                
		        <input type="hidden" name="delivery_name" value="<?php echo $billing_cust_name;?>"/>
		        <input type="hidden" name="delivery_address" value="<?php echo $billing_cust_address;?>"/>
		        <input type="hidden" name="delivery_city" value="<?php echo $billing_cust_city;?>"/>
		       <input type="hidden" name="delivery_state" value="<?php echo $billing_cust_state;?>"/>
		        <input type="hidden" name="delivery_zip" value="<?php echo $billing_zip_code;?>"/>
		        <input type="hidden" name="delivery_country" value="India"/>
		        <input type="hidden" name="delivery_tel" value="<?php echo $phone;?>"/>
		        <input type="hidden" name="merchant_param1" value=""/>
		        <input type="hidden" name="merchant_param2" value=""/>
		        <input type="hidden" name="merchant_param3" value=""/>
				<input type="hidden" name="merchant_param4" value=""/>
				<input type="hidden" name="merchant_param5" value=""/>
				<input type="hidden" name="promo_code" value=""/>
				<input type="hidden" name="customer_identifier" value=""/>
				<input type="hidden" name="integration_type" value="iframe_normal"/>
		              <!--<INPUT TYPE="submit" value="CheckOut">-->
                     <input type="submit" id="continue" name="Submit"  value="Proceed to Pay" style="margin-left: 190px;"  >
		        
	      </form>
  
  <?php } 
  
  
  ?>
 <div class="spacer10"></div>
<div class="spacer20"></div>
<div class="spacer10"></div>
<div class="spacer20"></div>
<div class="spacer10"></div>

</div>
 </div>
</div>
</div>
</body>
</html>

</body>
</html>