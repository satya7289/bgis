<?php   $ResAmount =   $_GET['amount']; ?>
<?php   $order_id  = $_GET['order_id'];?>
<?php   $tracking_id =  $_GET['tracking_id'];?>
<?php   $bank_ref_no =   $_GET['bank_ref_no']; ?>
<?php   $order_status = $_GET['order_status'];?>
<?php   $failure_message =  $_GET['failure_message'];?>
<?php   $payment_mode =  $_GET['payment_mode'];?>
<?php   $card_name =   $_GET['card_name']; ?>
<?php   $status_code = $_GET['status_code'];?>
<?php   $status_message =  $_GET['status_message'];?>
<?php   $currency =  $_GET['currency'];?>
<?php   $merchant_param1 = 'ccavenue' ?>


<?php
                                           include("login.php");
                      $rs=mysql_query($sql="select * from  donation where id  = '$order_id' and amount = $ResAmount")or die(mysql_error());
				          $nrr=mysql_num_rows($rs);			  
			                         if($order_status==="Success")
	                                         {
								       	$pmtarr = mysql_fetch_array($rs);
									$pmt_orderId = $pmtarr['id'];
									 $securitycheck = 'True';
													
										///////////////////// Update The payment confirm/////////////////////////////////													 
           $rs=mysql_query($sql="insert into transaction_detail(order_id,paymentstatus,date,tracking_id,bank_ref_no,order_status,failure_message,payment_mode,card_name,status_code,status_message, currency,amount,merchant_param1) values('$pmt_orderId','Success',now(),'$tracking_id','$bank_ref_no','$order_status','$failure_message',
'$payment_mode','$card_name','$status_code','$status_message','$currency','$ResAmount','$merchant_param1')");
										///////////////////// Update The payment confirm////////////////////////////////////
        echo '<script>window.location.href="http://bgis.org/ccavenue/successful.php?order_id='.$order_id.'&amount='.$ResAmount.'&transaction_id='.$tracking_id.'"</script>';												
		                                   } 
							              else
									{
							            $securitycheck = 'Failed';
									}
	                                  	////////////////////////////////////////
	                       if($order_status==="Aborted")
	                     {
		// echo "<br>Thank you for shopping with us.We will keep you posted regarding the status of your order through e-mail";
           $rs=mysql_query($sql="insert into transaction_detail(order_id,paymentstatus,date,tracking_id,bank_ref_no,order_status,failure_message,payment_mode,card_name,status_code,status_message, currency,amount,merchant_param1) values('$order_id','Aborted',now(),'$tracking_id','$bank_ref_no','$order_status','$failure_message',
'$payment_mode','$card_name','$status_code','$status_message','$currency','$ResAmount','$merchant_param1') ")or die(mysql_error());
		   
            echo '<script>window.location.href="http://bgis.org/ccavenue/sorry.php?order_id='.$order_id.'&amount='.$ResAmount.'"</script>';
	
	}
	           else if($order_status==="Failure")
	{
		//echo "<br>Thank you for shopping with us.However,the transaction has been declined.";
		
		$rs=mysql_query($sql="insert into transaction_detail(order_id,paymentstatus,date,tracking_id,bank_ref_no,order_status,failure_message,payment_mode,card_name,status_code,status_message, currency,amount,merchant_param1) values('$order_id','Failure',now(),'$tracking_id','$bank_ref_no','$order_status','$failure_message',
'$payment_mode','$card_name','$status_code','$status_message','$currency','$ResAmount','$merchant_param1') ")or die(mysql_error());
		
        echo '<script>window.location.href="http://bgis.org/ccavenue/sorry2.php?order_id='.$order_id.'&amount='.$ResAmount.'"</script>';
	}
	else
	{
		//echo "<br>Security Error. Illegal access detected";
		
       $rs=mysql_query($sql="insert into transaction_detail(order_id,paymentstatus,date,tracking_id,bank_ref_no,order_status,failure_message,payment_mode,card_name,status_code,status_message, currency,amount,merchant_param1) values('$order_id','Security Error. Illegal access detected',now(),'$tracking_id','$bank_ref_no','$order_status','$failure_message',
'$payment_mode','$card_name','$status_code','$status_message','$currency','$ResAmount','$merchant_param1') ")or die(mysql_error());
		
	     echo '<script>window.location.href="http://bgis.org/ccavenue/sorry3.php?order_id='.$order_id.'&amount='.$ResAmount.'"</script>';
	}







?>