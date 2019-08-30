<?php include('Crypto.php') ?>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

<?php
	error_reporting(0);
	$workingKey='E4E53D604EC6DEFF278476C4D2EDF5CC';		//Working Key should be provided here.
	$encResponse=$_POST["encResp"];			//This is the response sent by the CCAvenue Server
	$rcvdString=decrypt($encResponse,$workingKey);		//Crypto Decryption used as per the specified working key.
	$order_status="";
	$decryptValues=explode('&', $rcvdString);
	$dataSize=sizeof($decryptValues);

	for($i = 0; $i < $dataSize; $i++) {
		$information=explode('=',$decryptValues[$i]);
		if($i==0)  $order_id		=	$information[1] ;
		if($i==1)  $tracking_id		=	$information[1] ;
		if($i==3)  $order_status	=	$information[1] ;
		if($i==5)  $payment_mode	=	$information[1] ;
		if($i==10) $amount			=	$information[1] ;
		if($i==11) $billing_name	=	$information[1] ;
		if($i==12) $billing_address	=	$information[1] ;
		if($i==17) $billing_tel		=	$information[1] ;
		if($i==27) $applyingGrade	=	$information[1] ;
		if($i==28) $parentname		=	$information[1] ;
		if($i==30) $parentsQuery	=	$information[1] ;
		if($i==29) $admission_date	=	$information[1] ;
		if($i==18) $billing_email	=	$information[1] ;
		if($i==40) $trans_date		=	$information[1] ;

	}







//echo $billing_address14."<br>".$billing_address15."<br>".$billing_address12;



	$to = "bgis.admissions@gmail.com";
	$subject = "NEW ADMISSION CONFIRMATION - STUDENT NAME : ".$billing_name;
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From:'.$billing_email. "\r\n";
	$headers .= 'Cc: bgisreport@gmail.com' . "\r\n";
	$headers .= 'Cc: mailtoakhil15@gmail.com' . "\r\n";
	$headers .= 'Cc:'.$billing_email. "\r\n";




	$messages = "<table width='750' border='0' align='center' cellpadding='0' cellspacing='0' style='border:solid 1px #bcc2cf''> <tbody> <tr> <td align='left' valign='middle' style='padding:15px 0px'> <a href='https://newbgis.org' target='_blank' data-saferedirecturl='https://www.google.com/url?hl=en&amp;q=https://newbgis.org&amp;source=gmail&amp;ust=1520745983793000&amp;usg=AFQjCNEjZrlcAirJOrAe_LDyITQR0zZ_xA'><img alt='LOGO' src='https://ci6.googleusercontent.com/proxy/yYoAcFnxccSJ2jUQrxQTZwRafKwXd3px5H32BjN_esypKR53uAl8ve3mGF8QcM0D0ZHtmryxX_Th8vhrAXoUSCD63Wk4ArYhdNslIaQ_8Cd6huem3Ip3YRDQwDT6h8j2rwIjwQFtmQ=s0-d-e1-ft#https://dashboard.ccavenue.com/ImgStore/Image/50225_GtwSetlogo_1516705188477.png' border='0' class='CToWUd'></a> </td><td><h1 style='color: #b31111'>Bhaktivedanta Gurukula & International School</h1> </td></tr><tr> <td colspan='2' align='left' valign='top' class='m_2109585722555529806maincontainer' style='font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#373737;background-color:#fff;padding:20px'>Dear <strong><?php echo $billing_name ?></strong>,<br><br>Thank you for the online fee towords Bhaktivedanta Gurukula and International School <br><br>Attached below is the receipt of your transaction :<br><br><table width='100%' border='0' cellspacing='0' cellpadding='0'> <tbody> <tr> <td align='left' valign='top' class='m_2109585722555529806innercontainer' style='background-color:#fff;padding:15px 20px;border:solid 1px #dbdfe6'> <table width='100%' border='0' cellspacing='0' cellpadding='6' class='m_2109585722555529806innerborder'> <tbody> <tr class='m_2109585722555529806tableinner'> <td width='30%' height='18' align='left' valign='middle' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737;background-color:#f7f7f7'><strong>Receipt #</strong> </td><td width='20%' height='18' align='left' valign='middle' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737;background-color:#f7f7f7'><strong>Applying Grade #</strong> </td><td width='30%' height='18' align='left' valign='middle' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737;background-color:#f7f7f7;border-left:solid 1px #e4e6eb'><strong>Tracking #</strong> </td><td width='25%' height='18' align='left' valign='middle' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737;background-color:#f7f7f7;border-left:solid 1px #e4e6eb'><strong>Payment Date</strong> </td></tr><tr> <td colspan='3' align='left' valign='middle' class='m_2109585722555529806divider' height='1'> <img src='https://ci6.googleusercontent.com/proxy/Kqk_m_z9N-awTI-YYNBkynZxsDUaLUm7fDOTl1tIrXUTL26CWioJ3zIOrDM2UcQ8Oytloc6VuyvxhSLoc-QMZAg8mRPSk35YBQ=s0-d-e1-ft#https://secure.ccavenue.com/images/blank_spacer.gif' width='1' height='1' class='CToWUd'> </td></tr><tr> <td width='30%' height='18' align='left' valign='middle' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737;background-color:#f7f7f7'><?php echo $order_id ?></td> <td width='20%' height='18' align='left' valign='middle' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737;background-color:#f7f7f7'><?php echo $applyingGrade ?></td><td width='30%' height='18' align='left' valign='middle' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737;background-color:#f7f7f7;border-left:solid 1px #e4e6eb'><?php echo $tracking_id ?></td><td width='25%' height='18' align='left' valign='middle' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737;background-color:#f7f7f7;border-left:solid 1px #e4e6eb'> <span class='aBn' data-term='goog_1965848113' tabindex='0'> <span class='aQJ'><?php echo $trans_date ?></span> </span> </td></tr></tbody> </table> <br><br><table width='100%' border='0' cellspacing='0' cellpadding='0'> <tbody> <tr> <td height='25' colspan='3' align='left' valign='top' class='m_2109585722555529806title' style='font-family:Arial,Helvetica,sans-serif;font-size:15px;color:#0072c6;border-bottom:solid 1px #dbdfe6'>Payment Details</td></tr><tr> <td colspan='3' align='left' valign='top'>&nbsp;</td></tr><tr> <td width='412' align='left' valign='top'> <table width='100%' border='0' cellspacing='0' cellpadding='4'> <tbody> <tr> <td width='23%' align='right' valign='top' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737'><strong>Name: </strong> </td><td width='77%' align='left' valign='top' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737'> &nbsp;<?php echo $billing_name ?></td></tr><tr> <td align='right' valign='top' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737'><strong>Address : </strong></td><td align='left' valign='top' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737'> &nbsp; <?php echo $billing_address ?></td></tr><tr> <td align='right' valign='top' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737'><strong>Mobile Number : </strong></td><td align='left' valign='top' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737'> &nbsp;<?php echo $billing_tel ?></td></tr><tr> <td align='right' valign='top' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737'><strong>Email Address : </strong></td><td align='left' valign='top' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737'> &nbsp; <?php echo $billing_email ?></td></tr><tr> <td align='right' valign='top' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737'><strong>Payment Method: </strong></td><td align='left' valign='top' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737'> &nbsp;<?php echo $payment_mode ?></td></tr><tr> <td align='right' valign='top' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737'><strong>Status : </strong></td><td align='left' valign='top' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737'> &nbsp; <?php echo $order_status ?></td></tr><tr> </tbody> </table> </td><td width='20' align='left' valign='top'> <img src='https://ci6.googleusercontent.com/proxy/Kqk_m_z9N-awTI-YYNBkynZxsDUaLUm7fDOTl1tIrXUTL26CWioJ3zIOrDM2UcQ8Oytloc6VuyvxhSLoc-QMZAg8mRPSk35YBQ=s0-d-e1-ft#https://secure.ccavenue.com/images/blank_spacer.gif' width='20' height='1' class='CToWUd'> </td><td width='244' align='right' valign='top'> <table width='244' border='0' cellspacing='0' cellpadding='10'> <tbody> <tr> <td align='left' valign='top' class='m_2109585722555529806innerborder m_2109585722555529806tableinner'> <table width='244' border='0' cellspacing='0' cellpadding='0'> <tbody> <tr> <td width='51%' height='19' align='right' valign='top' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737'>Contribution made:&nbsp;</td><td width='16%' height='19' align='center' valign='top' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737'>INR</td><td width='33%' height='19' align='right' valign='top' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737'><?php echo $amount ?> </td></tr><tr> <td colspan='3' class='m_2109585722555529806divider'> <img src='https://ci6.googleusercontent.com/proxy/Kqk_m_z9N-awTI-YYNBkynZxsDUaLUm7fDOTl1tIrXUTL26CWioJ3zIOrDM2UcQ8Oytloc6VuyvxhSLoc-QMZAg8mRPSk35YBQ=s0-d-e1-ft#https://secure.ccavenue.com/images/blank_spacer.gif' width='1' height='1' class='CToWUd'></td></tr></tbody> </table> </td></tr></tbody> </table> </td></tr></tbody> </table> <br><br><br><br><table width='100%' border='0' cellspacing='0' cellpadding='0'> <tbody> <tr> <td height='1' align='left' valign='top' style='background-color:#e4e6eb;padding:0px' colspan='2'> <img src='https://ci4.googleusercontent.com/proxy/3m4fuKryR2DKVz-QnhwAJoHBVn0yy-Ep13-epgev0yHAbMyalNJKj_a8XgJvlmzEYcJXTc60wgx3K8VUR4ycuqjWghVh_vN9MvRRoPO4KC8=s0-d-e1-ft#https://180.179.175.17/transaction/images/blank_spacer.gif' width='1' height='1' class='CToWUd'></td><td width='74%' align='left' valign='top' style='font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#373737'><strong>Bhaktivedanta Gurukula & International School </strong><br> Bhaktivedanta Swami Marg, Raman Reti,<br> Vrindavan - 281121, U.P. India<br>Email: <a href='mailto:info@newbgis.org' class='m_2109585722555529806hylink2' style='font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#373737;text-decoration:underline' target='_blank'>info@newbgis.org</a> <br>Website: <a href='http://www.newbgis.org/' class='m_2109585722555529806hylink2' style='font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#373737;text-decoration:underline' target='_blank' data-saferedirecturl='https://www.google.com/url?hl=en&amp;q=http://www.ccavenue.com/&amp;source=gmail&amp;ust=1520745983794000&amp;usg=AFQjCNE8rf71lXG7alhQFCr9wUXO9ptPtA'>www.newbgis.org</a><br> Phone : +91-7088004339</td><td width='26%' align='right' valign='bottom'><img src='https://ci6.googleusercontent.com/proxy/yYoAcFnxccSJ2jUQrxQTZwRafKwXd3px5H32BjN_esypKR53uAl8ve3mGF8QcM0D0ZHtmryxX_Th8vhrAXoUSCD63Wk4ArYhdNslIaQ_8Cd6huem3Ip3YRDQwDT6h8j2rwIjwQFtmQ=s0-d-e1-ft#https://dashboard.ccavenue.com/ImgStore/Image/50225_GtwSetlogo_1516705188477.png' width='109' height='85px' border='0' class='CToWUd'> </td></tr></tbody> </table> </td></tr></tbody> </table> </td></tr></tbody></table>";





	//$messages = "<div class='container' style='margin: 5%'><div class='row'><div class='well col-xs-10 col-sm-10 col-md-10 col-xs-offset-1 col-sm-offset-1 col-md-offset-3'><div class='row'><table class='table'><tr><th><img src='http://bgis.org/img/logo.png'> </th><td> <h5> Receipt No #  $order_id </h5> <p> <em>Date:  $trans_date </em></p><address><p><b>Bhaktivedanta Gurukula and International School</b><br>Bhaktivedanta Swami Marg,<br>Raman Reti, Vrindavan, Mathura<br>Uttar Pradesh, 281121<br>India<br></p></address> </td></tr><tr><td colspan='2'><div><h3>Transaction No # : $tracking_id <br>Contribute Status :  $order_status  </h3></div></td></tr><tr><td colspan='2'><div><h3> $message  </h3></div> </td></tr><tr> <td colspan='2'> <h4>Dear $billing_name ,</h4><ul><li>Receipt No : $order_id</li><li>Transaction No : $tracking_id</li><li>Status : $order_status</li><li>Payment Type : $payment_mode</li><li>Name : $billing_name</li><li>Mobile No : $billing_tel</li><li>Email ID : $billing_email</li><li><b>Amount : $amount</b></li></ul></td></tr> </table> </div></div></div>";



		$servername = "localhost";
		$username = "newbgis_user";
		$password = "initiatetransaction";
		$dbname = "newbgis_initiatetransaction";

		$conn = mysqli_connect($servername, $username, $password, $dbname);

		$sql = "INSERT INTO adminssion_payment(
		id, 
		billing_name, 
		order_id, 
		tracking_id, 
		order_status,
		applyingGrade,
		admission_date, 
		parentname,
		payment_mode, 
		amount, 
		billing_tel, 
		billing_email, 
		billing_address,
		parentsQuery,
		trans_date
		) 
		VALUES (
		NULL, 
		'".str_replace(' ','_', $billing_name)."',
		'$order_id', 
		'$tracking_id', 
		'$order_status', 
		'$applyingGrade',
		'$admission_date',
		'".str_replace(' ','_', $parentname)."', 
		'".str_replace(' ','_', $payment_mode)."',  
		'$amount', 
		'$billing_tel', 
		'".str_replace('@','(a)', $billing_email)."',
		'".str_replace(' ','_', $billing_address)."',
		'".str_replace(' ','_', $parentsQuery)."',
		'$trans_date')";



	if($order_status==="Success")	{
		$descriptionInfromation = "<span style='color:green'>Thank you for contribute with us. Your credit card has been charged and your transaction is successful. We will be shipping your order to you soon</span><br>";

		mail($to, $subject, $messages, $headers);
		mysqli_query($conn, $sql);
		header('Refresh: 40; url=http://bgis.org');

	}

	else if($order_status==="Aborted")	{

		$descriptionInfromation = "<span style='color:orang'>Thank you for contribute with us.We will keep you posted regarding the status of your order through e-mail</span><br>";
		mail($to, $subject, $messages, $headers);
		mysqli_query($conn, $sql);
		header('Refresh: 40; url=http://bgis.org');
	}

	else if($order_status==="Failure")	{

		$descriptionInfromation = "<span style='color:red'>Thank you for contribute with us.However,the transaction has been declined</span><br>";
		mail($to, $subject, $messages, $headers);
		mysqli_query($conn, $sql);
		header('Refresh: 40; url=http://bgis.org');
	}

	else {

		$descriptionInfromation = "<span style='color:blue'>Security Error. Illegal access detected</span><br>";
	}
	echo "<br><br>";

?>

 <table width='750' border='0' align='center' cellpadding='0' cellspacing='0' style='border:solid 1px #bcc2cf''> <tbody> <tr> <td align='left' valign='middle' style='padding:15px 0px'> <a href='https://newbgis.org' target='_blank' data-saferedirecturl='https://www.google.com/url?hl=en&amp;q=https://newbgis.org&amp;source=gmail&amp;ust=1520745983793000&amp;usg=AFQjCNEjZrlcAirJOrAe_LDyITQR0zZ_xA'><img alt='LOGO' src='https://ci6.googleusercontent.com/proxy/yYoAcFnxccSJ2jUQrxQTZwRafKwXd3px5H32BjN_esypKR53uAl8ve3mGF8QcM0D0ZHtmryxX_Th8vhrAXoUSCD63Wk4ArYhdNslIaQ_8Cd6huem3Ip3YRDQwDT6h8j2rwIjwQFtmQ=s0-d-e1-ft#https://dashboard.ccavenue.com/ImgStore/Images/50225_GtwSetlogo_1516705188477.png' border='0' class='CToWUd'></a> </td><td><h1 style='color: #b31111'>Bhaktivedanta Gurukula & International School</h1> </td></tr><tr> <td colspan='2' align='left' valign='top' class='m_2109585722555529806maincontainer' style='font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#373737;background-color:#fff;padding:20px'>Dear <strong><?php echo $billing_name ?></strong>,<br><br>Thank you for the online fee towords Bhaktivedanta Gurukula and International School <br><br>Attached below is the receipt of your transaction :<br><br><table width='100%' border='0' cellspacing='0' cellpadding='0'> <tbody> <tr> <td align='left' valign='top' class='m_2109585722555529806innercontainer' style='background-color:#fff;padding:15px 20px;border:solid 1px #dbdfe6'> <table width='100%' border='0' cellspacing='0' cellpadding='6' class='m_2109585722555529806innerborder'> <tbody> <tr class='m_2109585722555529806tableinner'> <td width='30%' height='18' align='left' valign='middle' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737;background-color:#f7f7f7'><strong>Receipt #</strong> </td><td width='20%' height='18' align='left' valign='middle' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737;background-color:#f7f7f7'><strong>Applying Grade #</strong> </td><td width='30%' height='18' align='left' valign='middle' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737;background-color:#f7f7f7;border-left:solid 1px #e4e6eb'><strong>Tracking #</strong> </td><td width='25%' height='18' align='left' valign='middle' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737;background-color:#f7f7f7;border-left:solid 1px #e4e6eb'><strong>Payment Date</strong> </td></tr><tr> <td colspan='3' align='left' valign='middle' class='m_2109585722555529806divider' height='1'> <img src='https://ci6.googleusercontent.com/proxy/Kqk_m_z9N-awTI-YYNBkynZxsDUaLUm7fDOTl1tIrXUTL26CWioJ3zIOrDM2UcQ8Oytloc6VuyvxhSLoc-QMZAg8mRPSk35YBQ=s0-d-e1-ft#https://secure.ccavenue.com/images/blank_spacer.gif' width='1' height='1' class='CToWUd'> </td></tr><tr> <td width='30%' height='18' align='left' valign='middle' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737;background-color:#f7f7f7'><?php echo $order_id ?></td> <td width='20%' height='18' align='left' valign='middle' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737;background-color:#f7f7f7'><?php echo $applyingGrade ?></td><td width='30%' height='18' align='left' valign='middle' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737;background-color:#f7f7f7;border-left:solid 1px #e4e6eb'><?php echo $tracking_id ?></td><td width='25%' height='18' align='left' valign='middle' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737;background-color:#f7f7f7;border-left:solid 1px #e4e6eb'> <span class='aBn' data-term='goog_1965848113' tabindex='0'> <span class='aQJ'><?php echo $trans_date ?></span> </span> </td></tr></tbody> </table> <br><br><table width='100%' border='0' cellspacing='0' cellpadding='0'> <tbody> <tr> <td height='25' colspan='3' align='left' valign='top' class='m_2109585722555529806title' style='font-family:Arial,Helvetica,sans-serif;font-size:15px;color:#0072c6;border-bottom:solid 1px #dbdfe6'>Payment Details</td></tr><tr> <td colspan='3' align='left' valign='top'>&nbsp;</td></tr><tr> <td width='412' align='left' valign='top'> <table width='100%' border='0' cellspacing='0' cellpadding='4'> <tbody> <tr> <td width='23%' align='right' valign='top' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737'><strong>Name: </strong> </td><td width='77%' align='left' valign='top' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737'> &nbsp;<?php echo $billing_name ?></td></tr><tr> <td align='right' valign='top' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737'><strong>Address : </strong></td><td align='left' valign='top' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737'> &nbsp; <?php echo $billing_address ?></td></tr><tr> <td align='right' valign='top' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737'><strong>Mobile Number : </strong></td><td align='left' valign='top' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737'> &nbsp;<?php echo $billing_tel ?></td></tr><tr> <td align='right' valign='top' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737'><strong>Email Address : </strong></td><td align='left' valign='top' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737'> &nbsp; <?php echo $billing_email ?></td></tr><tr> <td align='right' valign='top' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737'><strong>Payment Method: </strong></td><td align='left' valign='top' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737'> &nbsp;<?php echo $payment_mode ?></td></tr><tr> <td align='right' valign='top' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737'><strong>Status : </strong></td><td align='left' valign='top' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737'> &nbsp; <?php echo $order_status ?></td></tr><tr> </tbody> </table> </td><td width='20' align='left' valign='top'> <img src='https://ci6.googleusercontent.com/proxy/Kqk_m_z9N-awTI-YYNBkynZxsDUaLUm7fDOTl1tIrXUTL26CWioJ3zIOrDM2UcQ8Oytloc6VuyvxhSLoc-QMZAg8mRPSk35YBQ=s0-d-e1-ft#https://secure.ccavenue.com/images/blank_spacer.gif' width='20' height='1' class='CToWUd'> </td><td width='244' align='right' valign='top'> <table width='244' border='0' cellspacing='0' cellpadding='10'> <tbody> <tr> <td align='left' valign='top' class='m_2109585722555529806innerborder m_2109585722555529806tableinner'> <table width='244' border='0' cellspacing='0' cellpadding='0'> <tbody> <tr> <td width='51%' height='19' align='right' valign='top' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737'>Contribution made:&nbsp;</td><td width='16%' height='19' align='center' valign='top' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737'>INR</td><td width='33%' height='19' align='right' valign='top' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#373737'><?php echo $amount ?> </td></tr><tr> <td colspan='3' class='m_2109585722555529806divider'> <img src='https://ci6.googleusercontent.com/proxy/Kqk_m_z9N-awTI-YYNBkynZxsDUaLUm7fDOTl1tIrXUTL26CWioJ3zIOrDM2UcQ8Oytloc6VuyvxhSLoc-QMZAg8mRPSk35YBQ=s0-d-e1-ft#https://secure.ccavenue.com/images/blank_spacer.gif' width='1' height='1' class='CToWUd'></td></tr></tbody> </table> </td></tr></tbody> </table> </td></tr></tbody> </table> <br><br><br><br><table width='100%' border='0' cellspacing='0' cellpadding='0'> <tbody> <tr> <td height='1' align='left' valign='top' style='background-color:#e4e6eb;padding:0px' colspan='2'> <img src='https://ci4.googleusercontent.com/proxy/3m4fuKryR2DKVz-QnhwAJoHBVn0yy-Ep13-epgev0yHAbMyalNJKj_a8XgJvlmzEYcJXTc60wgx3K8VUR4ycuqjWghVh_vN9MvRRoPO4KC8=s0-d-e1-ft#https://180.179.175.17/transaction/images/blank_spacer.gif' width='1' height='1' class='CToWUd'></td><td width='74%' align='left' valign='top' style='font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#373737'><strong>Bhaktivedanta Gurukula & International School </strong><br> Bhaktivedanta Swami Marg, Raman Reti,<br> Vrindavan - 281121, U.P. India<br>Email: <a href='mailto:info@newbgis.org' class='m_2109585722555529806hylink2' style='font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#373737;text-decoration:underline' target='_blank'>info@newbgis.org</a> <br>Website: <a href='http://www.newbgis.org/' class='m_2109585722555529806hylink2' style='font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#373737;text-decoration:underline' target='_blank' data-saferedirecturl='https://www.google.com/url?hl=en&amp;q=http://www.ccavenue.com/&amp;source=gmail&amp;ust=1520745983794000&amp;usg=AFQjCNE8rf71lXG7alhQFCr9wUXO9ptPtA'>www.newbgis.org</a><br> Phone : +91-7088004339</td><td width='26%' align='right' valign='bottom'><img src='https://ci6.googleusercontent.com/proxy/yYoAcFnxccSJ2jUQrxQTZwRafKwXd3px5H32BjN_esypKR53uAl8ve3mGF8QcM0D0ZHtmryxX_Th8vhrAXoUSCD63Wk4ArYhdNslIaQ_8Cd6huem3Ip3YRDQwDT6h8j2rwIjwQFtmQ=s0-d-e1-ft#https://dashboard.ccavenue.com/ImgStore/Images/50225_GtwSetlogo_1516705188477.png' width='109' height='85px' border='0' class='CToWUd'> </td></tr></tbody> </table> </td></tr></tbody> </table> </td></tr>
 <tr><td> <button onclick="window.print();" class="btn btn-primary"> PRINT PAGE</button></td>
<td> <a class="btn btn-primary" href="https://newbgis.org/initiatetransfer">BACK</a></td>
 </tr>

  </tbody></table>

