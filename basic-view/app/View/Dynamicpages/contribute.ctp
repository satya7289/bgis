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

<style type="text/css">
.donate_main_links {
 float: left;
width: 100%;
margin-left: 10px;
margin-top: 11px;
}
.donate_in {
	float:left;
	border:1px solid #ccc;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
}
.donate_in ul {
	float: left;
	margin:0px;
	padding:0px;
}
.donate_in ul li img {
	float: left;
	margin: 0px;
	padding: 0px;
	margin-right: 10px;
}
.donate_in ul li {
	float:left;
	margin:0px;
	padding:10px;
	list-style:none;
}
.donate_in ul li h1 {
width: 245px;
float: left;
font-size: 20px;
margin: 0px;
font-weight: normal;
padding: 0px;
list-style: none;
margin-top: 5px;
}
.donate_in ul li p {
	font-size:16px;
	color:#b00000;
	margin: 0px;
	padding: 0px;
}
.donate_in ul li a {
	color:#000;
	text-decoration:none;
	font-family:Calibri, Helvetica, sans-serif;
	font-size:16px;
 -webkit-transition: color .25s linear;
}
.donate_in ul li a:hover {
	color:#999;
}
</style>
  <div class="bannerinner">
  <?php echo $this->Html->image('/img/contributes/1394778645.jpg',array('title' =>"BGIS about", 'alt' => 'BGIS')); ?>
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
<a class="ml3 breadcrum_link" itemprop="url"><span itemprop="title">Contribute</span></a> 
</div></div></div>
      <div class="down">&nbsp;</div>
        <div class="vision">
          <h1>Donate & Contribute</h1>
        <h2>“We make a living by what we get. We make a life by what we give.” Help us to build Better People, Better World.</h2>
        <div class="down">&nbsp;</div>
          <ul style="list-style:none;line-height: 21px;">
          <li style="color:#656567; font-weight:bold; font-style:italic;">Contribute For New BGIS  Development.</li>
          <li style="color:#656567; font-weight:bold; font-style:italic;">Contribute For  New BGIS Construction : Rs 2100 for 10 months.</li>
          <li style="color:#656567; font-weight:bold; font-style:italic;">Contribute For Sponsor the Education of One Child for a year . Rs 100000 including residential charges.</li>
          <li style="color:#656567; font-weight:bold; font-style:italic;">Contribute For Cow Care to Help us for maintain the cows for Rs 18,000 for a year.</li>
          <li style="color:#656567; font-weight:bold; font-style:italic;">Contribute For Nature Care : Support for 15 trees for life for 10,000.</li>
          </ul>
          <div class="down">&nbsp;</div>
          <div class="location">
            <div class="loc1">
          <p style="float:left; padding-right:10px;"><img src="img/sponser.png" width="95px" height="95px" /></p>
              <p style="padding-top:1px;">
              <h1 style="color:#393939">Sponsor the Education</h1>
              Your support is important.donate for complete education
              </p>
            </div>
            <div class="loc2">
              <p style="float:left; padding-right:10px;"><img src="img/campus.png" width="95px" height="95px" /></p>
              <p style="padding-top:2px;">
              <h1 style="color:#393939;">New BGIS Construction</h1>
              The perfection of best products, design & functionality
              </p>
            </div>
            <div class="loc1">
              <p style="float:left; padding-right:10px;"><img src="img/invest.png" width="95px" height="95px" /></p>
              <p style="padding-top:2px;">
              <h1 style="color:#393939;">Invest for future </h1>
              Investment Forever.
              </p>
            </div>
            <div class="loc2">
              <p style="float:left; padding-right:10px;"><img src="img/cow.png" width="95px" height="95px" /></p>
              <p style="padding-top:2px;">
              <h1 style="color:#393939;">Cow Care</h1>
                Project Surabhi
              </p>
            </div>
            <div class="loc1">
              <p style="float:left; padding-right:10px;"><img src="img/nature.png" width="95px" height="95px" /></p>
              <p style="padding-top:2px;">
              <h1 style="color:#393939;">Nature Care</h1>
             <span style=" font-style:italic; font-size:12px; color:#656567;">•Project Vrindaaranyam<br>
                  • Project Prithvi </span>
              </p>
            </div>
            <div class="read"><a href="/contributes/donate-&-contribute">Know more</a></div>
          </div>
          <div class="down">&nbsp;</div>
          <h1>Tax Benefits</h1>
          <h2>Tax exemption</h2>
          <p>• Exempted from Income Tax U/s 80G of IT Act.<br />
            • Get tax benefits under 35 AC on your donation<br />
            • Charity tax deduction‎<br />
            • Invest for future of great cause <br />
            </p>
          <div class="read"><a href="/contributes/tax-benefits">Know more</a></div>
          <div class="down">&nbsp;</div>
          <h1>Online Payment</h1>
          <h2>Pay through your credit card directily</h2>
          <div class="down">&nbsp;</div>
        <div class="icosnliabrary">
            <p style="padding-top:10px;"><a href="http://www.bgis.org/contributes/online-payment"><img src="img/payonline.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/contributes/direct-bank-transfer"><img src="img/Direct-Bank-Transfer.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.bgis.org/contributes/donate-from-home-"><img src="img/Collect-from-Home.png"></a></p>
          </div>
          <div class="read"><a href="/contributes/online-payment">Know more</a></div>
          <div class="down">&nbsp;</div>
            </div>
            <div class="down">&nbsp;</div>
            <h2 style="position: relative;font-size: 20px;color: #a0030b;margin: 0px;padding-bottom: 0px;margin-left: 10px;">Donate For </h2>
      <div class="donate_main_links">
       <div class="donate_in">
    <ul>
      <li><a href="/contributes/online-payment"><img src="../img/campus.png" />
        <h1>New BGIS  Development</h1>
        <p>Donate for complete education</p>
        </a> </li>
      <li><a href="/onlinepayments/c92b26f68689c7af56b0b08721897732"><img src="../img/cow.png" />
        <h1>Cow Care</h1>
        <p>  Maintain a cow for a year</p>
        </a> </li>
      <li><a href="/onlinepayments/2cad8fa47bbef282badbb8de5374b894"><img src="../img/invest.png" />
        <h1>New BGIS Construction</h1>
        <p>Invest for Your Future </p>
        </a> </li>
      <li><a href="/onlinepayments/b7a782741f667201b54880c925faec4b"><img src="../img/nature.png" />
        <h1>Nature Care</h1>
        <p>Support 15 trees for life.</p>
        </a> </li>
      <li><a href="/onlinepayments/14ee22eaba297944c96afdbe5b16c65b"><img src="../img/sponser.png" />
        <h1>Child Education, Sponsor the Education</h1>
        <p>  Of One Child for a year Rs 100000</p>
        </a> </li>
    </ul>
  </div>
</div>
        
        </div>
      </div>
      <!--        <div class="aboutmiddlecontent">   
        </div>-->
    </div>
      
    