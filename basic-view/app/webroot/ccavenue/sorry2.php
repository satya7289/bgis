<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sorry</title>
<?php   $ResAmount =   $_GET['amount']; ?>
<?php   $order_id  = $_GET['order_id'];?>
<?php            include("login.php");
                 $rs=mysql_query($sql="select * from transaction_detail where order_id  = '$order_id' and amount = $ResAmount")or die(mysql_error());
				          $nrr=mysql_num_rows($rs);
				        if($nrr > 0)
			          {
			          
			            $db_hostname = 'localhost';
			$db_database = 'wwwbgis_admin';
			$db_username = 'wwwbgis_admin';
			$db_password = '_?_I}tgRUv9{';
			
			// Connect to server.
			$db_server = mysql_connect($db_hostname, $db_username, $db_password)
			    or die("Unable to connect to MySQL: " . mysql_error());
				
			// Select the database.
			mysql_select_db($db_database)
			    or die("Unable to select database: " . mysql_error());
			          
			          
			          
				      $pmtarr = mysql_fetch_array($rs);
				      $pmt_orderId = $pmtarr['order_id'];   
				      $tracking_id = $pmtarr['tracking_id'];  
				      $order_status = $pmtarr['order_status'];  
          $rs1=mysql_query($sql="UPDATE donation SET payment_status = 'FAILURE' WHERE id = '".$pmt_orderId."' ");				                  		      
					  $to = 'mansi@maatti.com' ;
					$EmailSubject = 'BGIS | Transaction Detail Of Donor '; 
					$mailheader = "From: info@bgis.org \r\n"; 
					$mailheader .= "CC: newbgis@gmail.com \r\n";
					$mailheader .= "Reply-To: info@bgis.org \r\n";
					$mailheader .= 'MIME-Version: 1.0' . "\r\n"; 
					$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
      $MESSAGE =' <html><head><title>Transaction Detail </title></head><body><div class="main_enhance" style="width:614px;border:10px; solid #f8f8f8;"><div class="container" style="background:#f8f8f8; padding:10px;"><h1 style="font-family: Arial, Helvetica, sans-serif;font-size:20px;color:#000;">Transaction Detail of Order Id '.$pmt_orderId.'</h1><br/><label style="margin: auto; position:relative; font-size:14px;"><b>Order Id : </b></label>'.$pmt_orderId.'<br/><br/><label style="margin: auto; position:relative; font-size:14px;"><b>Tracking Id :</b></label>'.$tracking_id.'<br/><br/><label style="margin: auto; position:relative; font-size:14px;"><b>Status : </b></label>'.$order_status.'<br/><br/><label style="margin: auto; position:relative; font-size:14px;"><b>Amount:</b></label>'.$ResAmount.'<br/> </div><div class="regard" style="font-family:Arial, Helvetica, sans-serif; color: #000; font-size:14px; line-height:160%; margin-left:10px; margin-top:15px;"> Warm Regards<br />BGIS Team <br /></div></body></html>';
        	             @mail( $to, $EmailSubject, $MESSAGE, $mailheader);			      		           
		                   
		                    }			          
				          ?>
</head>
<div class="wrapper" style="background:#fff; width:510px; margin:auto; background:#F3F3F3;">
<div class=" pro_main" style="font-size:18px;  color:#C00 ; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; padding-top:20px; padding-bottom:20px;" >
  <div class="hd7"  style=" background:#CC0000; font-size:28px; font-family: Geneva, Arial, Helvetica, sans-serif; color:#FFFFFF; width:130px; border: 2px solid #FFFFFF ; margin-left:170px; " >&nbsp;&nbsp;FAILURE</div> 
<div class="pro_left">
  <p style="text-align:center;">"Dear Customer, Thank you for Donating ISCKON School Project.We will keep you posted regarding the status of your Donation through e-mail";<br/> <strong style="color: #000"> Your Tracking ID is :</strong> <?php echo $tracking_id; ?></p>
  
</div>
 
          <div class="clr"></div>
<!--pro_main end here-->          
</div></div>
<!--pro_main end here-->

<div class="spacer35"></div>
<div class="clr"></div>
<!--wrapper end here-->
</div>
<!--wrapper end here-->
</body>
</html>