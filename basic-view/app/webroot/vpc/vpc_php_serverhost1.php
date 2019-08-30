<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<!-- Version 2.0 -->

<!-- ------------ Disclaimer ---------------------------------------------------

Copyright © 2004 Dialect Solutions Holdings.  All rights reserved.

This document is provided by Dialect Solutions Holdings on the basis that you
will treat it as confidential.

No part of this document may be reproduced or copied in any form by any means
without the written permission of Dialect Solutions Holdings.  Unless otherwise
expressly agreed in writing, the information contained in this document is
subject to change without notice and Dialect Solutions Holdings assumes no
responsibility for any alteration to, or any error or other deficiency, in this
document.

All intellectual property rights in the Document and in all extracts and things
derived from any part of the Document are owned by Dialect and will be assigned
to Dialect on their creation. You will protect all the intellectual property
rights relating to the Document in a manner that is equal to the protection you
provide your own intellectual property.  You will notify Dialect immediately,
and in writing where you become aware of a breach of Dialect's intellectual
property rights in relation to the Document.

The names "Dialect", "QSI Payments" and all similar words are trademarks of
Dialect Solutions Holdings and you must not use that name or any similar name.

Dialect may at its sole discretion terminate the rights granted in this document
with immediate effect by notifying you in writing and you will thereupon return
(or destroy and certify that destruction to Dialect) all copies and extracts of
the Document in its possession or control.

Dialect does not warrant the accuracy or completeness of the Document or its
content or its usefulness to you or your merchant customers. To the extent
permitted by law, all conditions and warranties implied by law (whether as to
fitness for any particular purpose or otherwise) are excluded.  Where the
exclusion is not effective, Dialect limits its liability to AU$100 or the
resupply of the Document (at Dialect's option).

Data used in examples and sample data files are intended to be fictional and any
resemblance to real persons or companies is entirely coincidental.

Dialect does not indemnify you or any third party in relation to the content or
any use of the content as contemplated in these terms and conditions.

Mention of any product not owned by Dialect does not constitute an endorsement
of that product.

This document is governed by the laws of New South Wales, Australia and is
intended to be legally binding.

-------------------------------------------------------------------------------- 

Following is a copy of the disclaimer / license agreement provided by RSA:

Copyright (C) 1991-2, RSA Data Security, Inc. Created 1991. All rights
reserved.

License to copy and use this software is granted provided that it is 
identified as the "RSA Data Security, Inc. MD5 Message-Digest Algorithm" in 
all material mentioning or referencing this software or this function.

License is also granted to make and use derivative works provided that such 
works are identified as "derived from the RSA Data Security, Inc. MD5 
Message-Digest Algorithm" in all material mentioning or referencing the 
derived work.

RSA Data Security, Inc. makes no representations concerning either the 
merchantability of this software or the suitability of this software for any 
particular purpose. It is provided "as is" without express or implied warranty 
of any kind.

These notices must be retained in any copies of any part of this documentation 
and/or software.

-------------------------------------------------------------------------------- 

@author Dialect Payment Solutions Pty Ltd Group 

------------------------------------------------------------------------------->

<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252"><title>Virtual Payment Client Request Details</title>

<style type='text/css'>
    <!--
    h1       { font-family:Arial,sans-serif; font-size:24pt; color:#08185A; font-weight:100}
    h2.co    { font-family:Arial,sans-serif; font-size:24pt; color:#08185A; margin-top:0.1em; margin-bottom:0.1em; font-weight:100}
    h3.co    { font-family:Arial,sans-serif; font-size:16pt; color:#000000; margin-top:0.1em; margin-bottom:0.1em; font-weight:100}
    body     { font-family:Verdana,Arial,sans-serif; font-size:10pt; color:#08185A background-color:#FFFFFF }
    p        { font-family:Verdana,Arial,sans-serif; font-size:10pt; color:#FFFFFF }
    p.bl     { font-family:Verdana,Arial,sans-serif; font-size:8pt; color:#08185A }
    a:link   { font-family:Verdana,Arial,sans-serif; font-size:8pt; color:#08185A }
    a:visited{ font-family:Verdana,Arial,sans-serif; font-size:8pt; color:#08185A }
    a:hover  { font-family:Verdana,Arial,sans-serif; font-size:8pt; color:#FF0000 }
    a:active { font-family:Verdana,Arial,sans-serif; font-size:8pt; color:#FF0000 }
    td       { font-family:Verdana,Arial,sans-serif; font-size:8pt; color:#08185A }
    th       { font-family:Verdana,Arial,sans-serif; font-size:10pt; color:#08185A; font-weight:bold; background-color:#E1E1E1; padding-top:0.5em; padding-bottom:0.5em}
    input    { font-family:Verdana,Arial,sans-serif; font-size:8pt; color:#08185A; background-color:#E1E1E1; font-weight:bold }
    select   { font-family:Verdana,Arial,sans-serif; font-size:8pt; color:#08185A; background-color:#E1E1E1; font-weight:bold }
    textarea { font-family:Verdana,Arial,sans-serif; font-size:8pt; color:#08185A; background-color:#E1E1E1; font-weight:normal; scrollbar-arrow-color:#08185A; scrollbar-base-color:#E1E1E1 }
    -->
	<!--
	
	currency format
	-->
	
</style>


	<SCRIPT LANGUAGE="JavaScript">
<!-- Original:  Cyanide_7 (leo7278@hotmail.com) -->
<!-- Web Site:  http://www7.ewebcity.com/cyanide7 -->

<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->

<!-- Begin
function formatCurrency(num) {
num = num.toString().replace(/\$|\,/g,'');
if(isNaN(num))
num = "0";
sign = (num == (num = Math.abs(num)));
num = Math.floor(num*100+0.50000000001);
cents = num%100;
num = Math.floor(num/100).toString();
if(cents<10)
cents = "0" + cents;
for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
num = num.substring(0,num.length-(4*i+3))+''+
num.substring(num.length-(4*i+3));
return (((sign)?'':'-') + '' + num + '' + cents);
}
//  End -->
</script>

<?php   $amount =   $_GET['amount']; ?>
<?php   $username = $_GET['user_name'];?>
<?php   $user_id =  $_GET['id'];?>
</head>
<body>
<!-- branding table -->
<center>
  <h1>&nbsp;</H1>
</center>
<?php
$from   = 'USD'; /*change it to your required currencies */
$to     = 'INR';
$url = 'http://finance.yahoo.com/d/quotes.csv?e=.csv&f=sl1d1t1&s='. $from . $to .'=X';
$handle = @fopen($url, 'r');
 
if ($handle) {
    $result = fgets($handle, 4096);
    fclose($handle);
}
$allData = explode(',',$result); /* Get all the contents to an array */
$dollarValue = $allData[1];
$amount_dollar = $amount * 61 ;
?>

<!-- The "Pay Now!" button submits the form, transferring control to the page detailed below -->
<form action="./vpc_php_serverhost_do1.php" method="post">
<input type="hidden" name="Title" value="PHP VPC 3-Party">

    <!-- get user input -->
    
  <table width="80%" align="center" border="0" cellpadding='0' cellspacing='0'>
    <!--DWLayoutTable-->
    <tr bgcolor="#E1E1E1"> 
      <td width="7"></td>
      <td width="315" rowspan="2" align="right"><b><i>&nbsp;</i></b></td>
      <td width="467"></td>
    </tr>
    <tr bgcolor="#E1E1E1"> 
      <td></td>
      <td valign="top"><input type="hidden" name="virtualPaymentClientURL" size="63" value="https://migs.mastercard.com.au/vpcpay" maxlength="250"></td>
    </tr>
    <tr> 
      <td colspan="3">&nbsp; &nbsp;</td>
    </tr>
    <tr bgcolor="#C1C1C1"> 
      <td colspan="3">
<p><b>&nbsp;Thank you for choosing International  
          Payment Gateway</b></p></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td align="right"><b><i> </i></b></td>
      <td><input type="Hidden" name="vpc_Version" value="1" size="20" maxlength="8"></td>
    </tr>
    <tr bgcolor="#E1E1E1"> 
      <td>&nbsp;</td>
      <td align="right"><b></b></td>
      <td><input type="Hidden" name="vpc_Command" value="pay" size="20" maxlength="16"></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td align="right"><b></b></td>
      <td><input type="Hidden" name="vpc_AccessCode" value="64792CB5" size="20" maxlength="8"></td>
    </tr>
    <tr bgcolor="#E1E1E1"> 
      <td>&nbsp;</td>
      <td align="right"><b></b></td>
      <td><input type="Hidden" name="vpc_MerchTxnRef" value="DOMRAMA" size="20" maxlength="40"></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td align="right"><b><i></i></b></td>
      <td><input type="Hidden" name="vpc_Merchant" value="ISKCONVRIND" size="20" maxlength="16"></td>
    </tr>
    <tr bgcolor="#E1E1E1"> 
      <td>&nbsp;</td>
      <td align="right"><b></b></td>
      <td><input type="Hidden" name="vpc_OrderInfo" value="VPC Example" size="20" maxlength="34"></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td align="right"><b><i>Please confirm the amount ($) </i></b></td>
        <td><input type="text" readonly="readonly"  value="<?php echo $amount; ?>" size="20" maxlength="10" ></td>
        <td><input type="hidden" name="vpc_Amount" value="<?php echo $amount_dollar; ?>" size="20" maxlength="10" ></td>
      
    </tr>
    <tr bgcolor="#E1E1E1"> 
      <td>&nbsp;</td>
      <td align="right"><b></b></td>
      <td><input type="Hidden" name="vpc_Locale" value="en" size="20" maxlength="5"></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td align="right"><b></b></td>
         <td><input type="Hidden" name="vpc_ReturnURL" size="63" value="http://bgis.org/vpc/vpc_php_serverhost_dr1.php?user_name=<?php echo "$username";?>&id_user=<?php echo "$user_id";?>" maxlength="250"></td>
    </tr>
    <tr> 
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2">&nbsp;</td>
      <td><input type="submit" name="SubButL" value="Pay Now!" onclick="this.form.vpc_Amount.value=formatCurrency(this.form.vpc_Amount.value);"></td>
    </tr>
    <tr> 
      <td colspan="3">&nbsp; &nbsp;
        <div align="center">&nbsp; (When you click on Pay Now! button, the amount 
          is converted to Indian Rupee(<img src="http://i.stack.imgur.com/vJZ9m.png">) ) </div>
        &nbsp;</td>
    </tr>
    <tr bgcolor="#C1C1C1"> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <br/>
  </form>
</body>
</html>