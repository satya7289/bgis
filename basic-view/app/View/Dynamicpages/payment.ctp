   <script language="JavaScript">
		$(document).ready(function() {	
    	var apiUrl = '/dynamicmenu/';
	     	$.ajax({
	         url: apiUrl + 'getContribute',
		       method: 'GET',
		   		success: function(data)
		 		{
						   var allData9 = JSON.parse(data);
			   	    	  for (var y = 0; y < allData9.Submenu.length ; y++) 
			              {
                                var catname = allData9.Submenu[y];
			                    var catName = catname.toLowerCase();
				                     if(catName.indexOf(' ') > -1){
					               catName = catName.replace(/\s+/g,"-");
  				           }                                                    
						   var newFirmDiv9 = '<li class="" id="'+allData9.Submenu_id[y]+'"><a href="/contributes/'+catName+'" title="'+allData9.Submenu[y]+'">'+allData9.Submenu[y]+'</a></li>';
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


  <div class="bannerinner">
  <?php echo $this->Html->image('onlinepament.jpg',array('title' =>"BGIS about", 'alt' => 'BGIS')); ?>
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
<a class="ml3 breadcrum_link" itemprop="url"><span itemprop="title">Pay Online</span></a> 
</div></div></div>
<div class="down">&nbsp;</div>


         <div class="aboutus">
            <table style="width: 100%">
              <tr>
                <td style="width: 50%">
                    <img src="images/img/bgis_foreign_banner.jpg">
                    <h3> Account Name :  ISKCON FCRA  <br>
                     Account number : 910010014565239<br>
                     Swift Code : AXISINBB310<br>
                     Bank : AXIS BANK <br>
                     Branch Name : Chatikara Road - Vrindavan<br>
                     IFSC code: UTIB0000794<br><br> 
                     <img src="images/img/bgis_fcra.jpg">
                </td>
              </tr>
              <tr>
                <td style="width: 50%">
                    <img src="images/img/bgis_indian_banner.jpg">
                    <h3> Account Name :  Bhaktivedanta Gurukula and International School <br>
                     Account number : 910010021205638<br>
                     Bank : Axis bank, Vrindavan <br>
                     IFSC code: UTIB0000794<br>
                     Swift code: AXISIN B002</h3>
                      <a href="http://newbgis.org/pay-now/index.php"><img src="images/img/payOnline.jpg" height="70px" width="175px"></a>
                      <img src="images/img/secure.jpg">
                </td>
              </tr>
            </table> 
           


           <!-- 
          <h1>Pay Online</h1>
          <h2>Please proceed to donate.</h2>
         <p style="padding-top:10px;"><img src="../img/ccavenue.png" /></p>
 <p><a href="https://newbgis.org/pay-now/index.php" target="_blank"><img src="img/indiaicon.png" style="padding-top:20px;" /></a>
    <a href="https://newbgis.org/pay-now/index.php" target="_blank"><img src="img/outsideicon.png" style="padding-left:35px; padding-top:20px;"/></a></p>

  -->



        </div>



         
      <!--        <div class="aboutmiddlecontent">   
        </div>-->
    </div>
    </div>