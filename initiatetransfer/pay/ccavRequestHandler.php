 <html>
<head>
<title> Processing..</title>

<style type="text/css">
	body { font-family: Arial, Helvetica, sans-serif; font-weight:normal; color:#474747; font-size: 14px; margin:5% auto 0 auto; }
	#intermediatepage {  background-position:center top; background-repeat:no-repeat; padding:10px 20px 0 20px;}
	.intermediatepage div.process { background-image:url('images/loading.gif'); background-position:center 35px; background-repeat:no-repeat;}
</style>


</head>
<body>
<center>

<?php include('Crypto.php')?>
<?php 

	error_reporting(0);
	
	$merchant_data='';
	$working_key='E4E53D604EC6DEFF278476C4D2EDF5CC';//Shared by CCAVENUES
	$access_code='AVLE03BK07AO67ELOA';//Shared by CCAVENUES
	
	foreach ($_POST as $key => $value){
		$merchant_data.=$key.'='.$value.'&';
 

	} 
	$encrypted_data=encrypt($merchant_data,$working_key); // Method for encrypting the data.


?>

<form method="post" name="redirect" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction"> 
<?php
echo "<input type=hidden name=encRequest  value=$encrypted_data>";
echo "<input type=hidden name=access_code value=$access_code>";
?>
</form>
</center>

		<div id="intermediatepage" class="intermediatepage" align="center" style="padding:0 20px;">	
			<div class="process">
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<br><br><br><br>
			<span class="content-text" style="font-size:24px; font-weight:bold;">Please be patient while your transaction is being processed.</span>
			<br style="line-height:35px;">
			<span>Do not "close the window" or press "refresh" or "browser back/forward button".</span>
			<br><br>
			</div>			 
		</div>

<script language='javascript'>document.redirect.submit();</script>
</body>
</html>

	 		
 







