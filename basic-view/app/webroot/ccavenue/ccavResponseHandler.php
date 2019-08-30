<?php
include('Crypto.php');
?>
<?php

	error_reporting(0);
	
	$workingKey='58CDDBD303BAF80202339DEF2B4989F7';		//Working Key should be provided here.
	$encResponse=$_POST["encResp"];			//This is the response sent by the CCAvenue Server
	$rcvdString=decrypt($encResponse,$workingKey);		//Crypto Decryption used as per the specified working key.
	$order_status="";
	$decryptValues=explode('&', $rcvdString);
	$dataSize=sizeof($decryptValues);
	echo "<center>";

	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
		//if($i==3)	$order_status=$information[1];
		if($i==0) $order_id   =$information[1];
		if($i==1) $tracking_id  =$information[1];
		if($i==2) $bank_ref_no	=$information[1];
		if($i==3) $order_status	=$information[1];
		if($i==4) $failure_message =$information[1]; 
		if($i==5) $payment_mode =$information[1];	
		if($i==6) $card_name =$information[1];	
		if($i==7) $status_code =$information[1];
		if($i==8) $status_message =$information[1];
		if($i==9) $currency =$information[1];
		if($i==10) $amount =$information[1];
		if($i==11) $billing_name =$information[1];
		if($i==12) $billing_address =$information[1];
		if($i==13) $billing_city =$information[1];
		if($i==14) $billing_state =$information[1];
		if($i==15) $billing_zip =$information[1];
		if($i==16) $billing_country =$information[1];
		if($i==17) $billing_tel =$information[1];
		if($i==18) $billing_email =$information[1];
		if($i==19) $delivery_name =$information[1];
		if($i==20) $delivery_address =$information[1];
		if($i==21) $delivery_city =$information[1];
		if($i==22) $delivery_state =$information[1];
		if($i==23) $delivery_zip =$information[1];
		if($i==24) $delivery_country =$information[1];
		if($i==25) $delivery_tel =$information[1];
		if($i==26) $merchant_param1 =$information[1];
		if($i==27) $merchant_param2 =$information[1];
		if($i==28) $merchant_param3 =$information[1];
		if($i==29) $merchant_param4 =$information[1];
		if($i==30) $merchant_param5 =$information[1];
		
	}
	
	
	
	                            if($order_status==="Success")
              	       {
						/*echo "<br>Thank you for shopping with us. Your credit card has been charged and your transaction is successful. We will be shipping your order to you soon.";*/
						//order_id will be payment id
						$securitycheck = 'True';
						if($order_id !='' && $amount !='')
						{	
					                $nrr = 0;
							$ResAmount = $amount;
       echo '<script>window.location.href="http://bgis.org/ccavenue/success.php?order_id='.$order_id.'&amount='.$amount.'&payment_mode='.$payment_mode.'&bank_ref_no='.$bank_ref_no.'&tracking_id='.$tracking_id.'&order_status='.$order_status.'&failure_message='.$failure_message.'&card_name='.$card_name.'&status_code='.$status_code.'&status_message='.$status_message.'&currency='.$currency.'"</script>';
			
			}
			}
			else if($order_status==="Aborted")
			{
       echo '<script>window.location.href="http://bgis.org/ccavenue/success.php?order_id='.$order_id.'&amount='.$amount.'&payment_mode='.$payment_mode.'&bank_ref_no='.$bank_ref_no.'&tracking_id='.$tracking_id.'&order_status='.$order_status.'&failure_message='.$failure_message.'&card_name='.$card_name.'&status_code='.$status_code.'&status_message='.$status_message.'&currency='.$currency.'"</script>';
			
			}
			    else if($order_status==="Failure")
                  	{
		                             
      echo '<script>window.location.href="http://bgis.org/ccavenue/success.php?order_id='.$order_id.'&amount='.$amount.'&payment_mode='.$payment_mode.'&bank_ref_no='.$bank_ref_no.'&tracking_id='.$tracking_id.'&order_status='.$order_status.'&failure_message='.$failure_message.'&card_name='.$card_name.'&status_code='.$status_code.'&status_message='.$status_message.'&currency='.$currency.'"</script>';
			
                 	}
                 	else
                	{
                	 echo '<script>window.location.href="http://bgis.org/ccavenue/success.php?order_id='.$order_id.'&amount='.$amount.'&payment_mode='.$payment_mode.'&bank_ref_no='.$bank_ref_no.'&tracking_id='.$tracking_id.'&order_status='.$order_status.'&failure_message='.$failure_message.'&card_name='.$card_name.'&status_code='.$status_code.'&status_message='.$status_message.'&currency='.$currency.'"</script>';				
							
                        }
	
?>