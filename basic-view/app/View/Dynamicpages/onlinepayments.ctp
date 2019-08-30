   <?php  $currentPage = 'online-payment'; $currentPage= str_replace('-', ' ', $currentPage);
		$this ->set('currentPage',$currentPage);
     ?>
  
           <script language="JavaScript">
		$(document).ready(function() {	
    	        var apiUrl = '/dynamicmenu/';
    	         var currPage = "<?php echo $currentPage; ?>";
	     	$.ajax({
	         url: apiUrl + 'getContribute',
		       method: 'GET',
		   		success: function(data)
		 		{
						   var allData9 = JSON.parse(data);
			   	    	  for (var y = 0; y < allData9.Submenu.length ; y++) 
			              {
                                             var catname = allData9.Submenu[y];
                                             var catName1 = catname.toLowerCase();
			                      var catName = catname.toLowerCase();
				                     if(catName.indexOf(' ') > -1){
					               catName = catName.replace(/\s+/g,"-");
  				           }   
  				             if(currPage == catName1)
			          	{                                                               
						   var newFirmDiv9 = '<li class="" id="'+allData9.Submenu_id[y]+'"><a href="/contributes/'+catName+'" class="active"  title="'+allData9.Submenu[y]+'">'+allData9.Submenu[y]+'</a></li>';
						    }else{
	  var newFirmDiv9 = '<li class="" id="'+allData9.Submenu_id[y]+'"><a href="/contributes/'+catName+'" title="'+allData9.Submenu[y]+'">'+allData9.Submenu[y]+'</a></li>';
						    
						     }
                   $("ul#sidebar").append(newFirmDiv9);
				}

		},
		failure: function()
		{			
    	
		}	
});
});
</script>
<style>
.menutree {
width: 980px;
margin: auto;
float: left;
text-align: left;
color: #656567;
font-size: 12px;
font-family: Arial;
margin-top: 10px;
margin-left: 10px;
}
</style>
    <script type="text/javascript">
	       $(document).ready(function()
	       {
		$("#online").validationEngine('attach', {promptPosition : "topRight", autoPositionUpdate : true});
		 
		 });

	</script>
<?php  $amount =  $this->request->params['param']; ?>

 <script type="text/javascript">
$(document).ready(function(){
               var delay = 0; //Your delay in milliseconds
               setTimeout(function(){ window.location = "http://bgis.org/payment"; }, delay)
});
               </script>
<div class="bannerinner">
  <?php echo $this->Html->image('/img/contributes/1398148008.jpg',array('title' =>"BGIS Contributes", 'alt' => 'BGIS')); ?>
 </div>
  <div class="down">&nbsp;</div>
       <div class="middlecontent">
      <div class="leftsidemenu">
        <ul id="sidebar">
         <h1>Contribute</h1>
        </ul>
      </div>
        <div class="rightsidecontent">  
        <div class="menutree">
<div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a class="breadcrum_link" href="http://bgis.org/" itemprop="url">
<span itemprop="title">Home</span></a> » <div style="display:inline;" itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
<a class="ml3 breadcrum_link" itemprop="url"><span itemprop="title">Online Payment</span></a> 
</div></div></div>
<div class="down">&nbsp;</div>
  <h1 style="font-size: 20px;color: #a0030b;margin: 0px;padding-bottom: 5px;margin-left: 10px;">Online Payment </h1>           
         <div class="aboutus">
          <h2>Pay through your credit card directily. Please fill the information below to proceed.</h2>
          
<div class="down">&nbsp;</div>
<?php echo $this->Session->flash(); ?>
         <div class="onlinecontact">
<div id="menu3_2_1">
                       <!--<form name="myform"  id="online"  method="POST" enctype="multipart/form-data"  action="http://www.bgis.org/payment" >
                        	<table style="line-height:30px">
                                <tr>
                                        <td ><div style="width:120px;" ><label   style="font-weight:bold; ">First name: </label>
                                	</div></td>
                                    <td><div style="width:230px; padding:0px;"><input type="text"  size="25"  name = "name"  class= "validate[required,custom[onlyLetterSp]] text-input" style="font-family:Verdana, Arial, Helvetica, sans-serif; border-style:ridge;" /></div></td>
                                </tr>
                	
                                <tr>
                             <td ><div style="width:120px;" ><label style="font-weight:bold; ">Payment for: </label>
                            		</div></td>
                       <?php    if ($amount == "a9b7ba70783b617e9998dc4dd82eb3c5") { ?>
	        <td><div style="width:230px; padding:0px;"><input type="text" readonly  size="28"  value= "<?php echo $payment; ?> " name= "payment"  class="validate[required]"  style="font-family:Verdana, Arial, Helvetica, sans-serif; border-style:ridge;" /></div></td>
                                    <td ><div  style="width:120px;" ><label style="font-weight:bold; ">Amount:</label></div></td>
<td><div  style="width:230px; padding:0px;"><input type="text" readonly  size="10"  value= "<?php echo $amount_donation; ?> "   name= "amount"  class="validate[required]"  style="font-family:Verdana, Arial, Helvetica, sans-serif; border-style:ridge;" /></div></td>
         <?php  } else { ?> 		
             <td><div style="width:230px; padding:0px;"><input type="text"   size="28"  value= "<?php echo $payment; ?> " name= "payment"  class="validate[required]"  style="font-family:Verdana, Arial, Helvetica, sans-serif; border-style:ridge;" /></div></td>
                                    <td ><div  style="width:120px;" ><label style="font-weight:bold; ">Amount:</label></div></td>
<td><div  style="width:230px; padding:0px;"><input type="text"   size="10"  value= "<?php echo $amount_donation; ?> "   name= "amount"  class="validate[required]"  style="font-family:Verdana, Arial, Helvetica, sans-serif; border-style:ridge;" /></div></td>
           <?php } ?>
              <td><div style="width:130px; padding:0px;margin-left: -100px;"><select  name= "currency" class= "validate[required]"  style="font-family:Verdana, Arial, Helvetica, sans-serif; border-style:ridge; color:#110C4D; ">
                                                          <option value="INR" selected="selected">INR</option>
                                   
                                  		</select>
                                        </div></td>
                                     
                                </tr> 
                                 <tr>
                               	  <td ><div style="width:120px;" ><label style="font-weight:bold; ">Contact number:  </label>
                                	</div></td>
                                    <td><div  style="width:230px; padding:0px;"><input type="text"  size="25"   name="mobile"   class= "validate[required]"   style="font-family:Verdana, Arial, Helvetica, sans-serif; border-style:ridge;" /></div></td>
                                    <td ><div style="width:120px;" ><label  style="font-weight:bold; ">e-mail:</label>
                                	</div></td>
                                    
                                    <td><div style=" padding:0px;"><input type="text"  size="25" name="email"  class= "validate[required]"  style="font-family:Verdana, Arial, Helvetica, sans-serif; border-style:ridge;" /></div></td>
                                </tr>
                                <tr> 
                                	<td ><div  style="width:120px;" ><label style="font-weight:bold; ">Comments:</label></div></td> 
                                	<td colspan="4"><div  style="width:230px; padding:0px;"><textarea name="comment" rows="5" cols="50"  style="font-family:Verdana, Arial, Helvetica, sans-serif; border-style:ridge; font-size:12px; padding:5px; " onFocus="this.value=''" /></textarea></div></td> 
                                </tr> 
                                  <div class="down">&nbsp;</div>
                                <tr>  
                                  <td><div  style="width:120px;" ><label style="font-weight:bold;">Captcha:</label></div></td> 
                                 <td>
                               <div style=" padding:3px;">
                                    <?php  echo $this->Recaptcha->show(array('theme' => 'white')); ?>
                                    <?php echo $this->Recaptcha->error(); ?>
                              </div>
                              </td>
                              </tr> 
                                <tr>
                                	<td></td>
                                    <td><div id='myform_errorloc' class='error_strings'></div></td>
                                </tr>
                                <tr> 
                      <td height="118" colspan="4" ><div style="width:120px;" > 
                          <label  style="font-weight:bold; "></label>
                        </div>
                        <div  > 
                          <label  style="font-weight:bold; "></label>
                        </div>
                        <div style=" font-size:11px;"  > 
                        <p></p>
     
                          <p>    
                       <label>a. The donation is non-refundable<br />
                           b.  Donation above Rs.500 is entitled for I-Tax exemption u/s 80-G of the Income tax Act. <a href="Bhaktivedanta-Academy.jpg"  color="blue">ISCKON is registered under Society act with Reg. No. BOM 225/70 GBBSD. PTR no. 2179 (BOM).</a> <br />
                            c. In case of dispute reagrding payment, the terms 
                            and conditions of Axis Payment Gateway shall apply.</label>
                            <label ><br />
                            d. For payment of fees through credit card, 3% transition 
                            cost have to paid over the actual fee amount.</label>
                          </p>
                        </div></td>
                      <td>&nbsp;</td>
                    </tr>
                                	<td ><div  style="width:120px;" ></div></td>
                                	<td><div  style="width:230px; padding:0px;"><input type="submit" name="Submit" value="I accept and Submit" style="font-family:Verdana, Arial, Helvetica, sans-serif; border-style:ridge; font-size:12px;"><input type="reset" name="Reset" value="Reset" style="font-family:Verdana, Arial, Helvetica, sans-serif; border-style:ridge; font-size:12px;"></div></td>
                                </tr>
                           </table>        
                      </form>
              </div>
</div>-->
     <div class="icosnliabrary">
            <p style="padding-left:10px;"><a href="http://www.bgis.org/contributes/direct-bank-transfer"><img src="../img/Direct-Bank-Transfer.png" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.bgis.org/contributes/donate-from-home-"><img src="../img/Collect-from-Home.png" /></a></p>
          </div>      
        </div>
       </div>
      </div>
     