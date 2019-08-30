   <script language="JavaScript">
		$(document).ready(function() {	
    	var apiUrl = '/dynamicmenu/';
	     	$.ajax({
	         url: apiUrl + 'getCampus',
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
						   var newFirmDiv9 = '<li class="" id="'+allData9.Submenu_id[y]+'"><a href="/campusmain/'+catName+'" title="'+allData9.Submenu[y]+'"> '+allData9.Submenu[y]+'</a></li>';
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
    <?php echo $this->Html->image('newbgiscampbanner.jpg',array('title' =>"BGIS about", 'alt' => 'BGIS')); ?></div>
    <div class="down">&nbsp;</div>
      <div class="middlecontent">
      <div class="leftsidemenu">
        <ul id="sidebar">
        <h1>New Bgis Campus </h1>
        </ul>
      </div>
      <div class="rightsidecontent">
       <div class="menutree">
<div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a class="breadcrum_link" href="http://bgis.org/" itemprop="url">
<span itemprop="title">Home</span></a> » <div style="display:inline;" itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
<a class="ml3 breadcrum_link" itemprop="url"><span itemprop="title">Campus</span></a> 
</div></div></div>
<div class="down">&nbsp;</div>
        <div class="vision">
          <h1>Vision 2018</h1>
          <h2>Expanding the education that stays for life.</h2>
          <p style=" color:#656567; font-style:italic;">The bgis modal of education is based on Indian Gurukula style of education adapted to contempoary societal needs. 
            A world-class infrastructure will be developed for more than 600school students and 400 college students knowledge generation initiatives will be taken across disciplines such as science, mathematics, Classical Music, Performing art, Fine arts, Learning methodologies and sanskrit studies</p>
          <div class="down">&nbsp;</div>
          <div class="location">
            <div class="loc1">
              <p style="float:left; padding-right:10px;"><img src="img/bg1.png" /></p>
              <p style="padding-top:1px;">
              <h1 style="color:#393939">Land & Location</h1>
              In the Holy Land at the Perfect Location
              </p>
            </div>
            <div class="loc2">
              <p style="float:left; padding-right:10px;"><img src="img/bg2.png" /></p>
              <p style="padding-top:2px;">
              <h1 style="color:#393939;">Infrastructure Highlights</h1>
              The perfection of best products, design & functionality
              </p>
            </div>
            <div class="read"><a href="/campusmain/vision-2018">Read more</a></div>
          </div>
          <div class="down">&nbsp;</div>
          <h1>What makes us special</h1>
          <h2>Exclusive</h2>
          <p>Strength that makes us special.</p>
          <p>• Temple & Prayer hall<br />
            • Project  Surabhi<br />
            • Project Vrindaranyam<br />
            • Project Prithvi<br />
            • Natural laboratories in Science life, Field Learning & group Activities</p>
          <div class="read"><a href="/campusmain/what-make-us-special">Read more</a></div>
          <div class="down">&nbsp;</div>
          <h1>The team : We are ready</h1>
          <div class="teammain">
            <ul>
              <li><img src="img/mteam1.jpg" />
                <p>HH Gopal Krishna Maharaj</p>
              </li>
              <li><img src="img/mteam2.jpg" />
                <p>Raghav Pandit Das</p>
              </li>
              <li><img src="img/mteam3.jpg" />
                <p>Dr. Lila Purushottam Das</p>
              </li>
              <li><img src="img/mteam4.jpg" />
                <p>Vrindavan Vinod Das</p>
              </li>
            </ul>
          </div>
          <div class="read"><a href="/campusmain/team">Read more</a></div>
          <div class="down">&nbsp;</div>
          <h1>Roadmap of the project</h1>
          <h2>Year 2012-13</h2>
          <p>60 Acres of Land Acquired</p>
          <h2>Year 2013-14</h2>
          <p>Completion of master plan and start of contsruction</p>
          <img src="img/road.jpg" />
          <div class="read"><a href="/campusmain/road-map-">Read more</a></div>
          <div class="down">&nbsp;</div>
          <h1>Construction & Cost</h1>
          <h2>1st Phase construction</h2>
        • Academic building
            • Hostel<br />
            • Guest house<br />
            • Botanical garden<br />
            • Library<br />
            • Cultural centre with Auditorium </p>
          <div class="down">&nbsp;</div>
          <h1>Your Participation</h1>
          <h2>Estimated Cost Of Project</h2>
          <p style="font-size:13px; font-weight:bold;">Shri Jagannath Seva: 1 Crore ( Area 5000 sq-ft)</p>
          <p style="font-size:12px;  margin:0px;">• Help in construction of temple-cum-auditorium hall of a capacity of 800 students and dedicate it to your dear ones.</p>
          <p style="font-size:13px; font-weight:bold;">Nimai Pandit Seva : 50 lac ( Area 2500 sq-ft)</p>
          <p style="font-size:12px;  margin:0px;">• Sponsor the construction of air-conditioned central library and dedicate it to your dear ones.</p>
          <p style="font-size:13px; font-weight:bold;">Aryabhatta Seva : 20 lac ( Area 1100 sq-ft)</p>
          <p style="font-size:12px;  margin:0px;">• Under this seva you will help to establish one of the six Science labs in the school.</p>
          <p style="font-size:13px; font-weight:bold;">Sandipani Muni Seva- 11 lac (Area 750 sq-ft)</p>
          <p style="font-size:12px;  margin:0px;">• Under this seva you will help in construction of one of the 28 classrooms.</p>
          <p style="font-size:13px; font-weight:bold;">Vrindavan Vasi Seva- 8 lac (450 sq-ft)</p>
          <p style="font-size:12px;  margin:0px;">• Under this seva you will help in construction of one of the 60 hostel rooms.</p>
          <div class="read" style="border:none;"><a href="/campusmain/construction-cost">Read more</a></div>
          </div>
       <div class="donationlink"><span style=" font-style:italic; color:#000000;">You may also Like:</span> <a href="http://www.bgis.org/contributes/donate-&-contribute">Donate to Contribute</a></div> 
       </div>  
       
                         
</div> 
</div>
      </div>