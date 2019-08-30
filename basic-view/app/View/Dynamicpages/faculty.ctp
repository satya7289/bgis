  <script language="JavaScript">
		$(document).ready(function() {	
    	var apiUrl = '/dynamicmenu/';
	     	$.ajax({
	         url: apiUrl + 'getFaculty',
		       method: 'GET',
		   		success: function(data)
		 		{
						   var allData9 = JSON.parse(data);
			   	    	  for (var y = 0; y < allData9.Faculty.length ; y++) 
			              {
			                    var catname = allData9.Faculty[y];
			                    var catName = catname.toLowerCase();
				                     if(catName.indexOf(' ') > -1){
					              catName = catName.replace(/\s+/g,"-");
  				           }                                                    
                                                                     var newFirmDiv9 = '<div id="'+allData9.Faculty_postion[y]+'" class="menuSection"><h2><a href="#'+allData9.Faculty_postion[y]+'">'+allData9.Faculty[y]+'</a></h2><p><img src="img/faculty/'+allData9.Faculty_image[y]+'" style="Padding-right:10px; float:left;" /><span style="font-size:13px; color:#000;">'+allData9.Faculty[y]+'</span><br /> '+allData9.Faculty_detail[y]+'</p></div>';
                   $("#faculty_detail").append(newFirmDiv9);
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
      <?php echo $this->Html->image('facultymemberbanner.jpg',array('title' =>"BGIS about", 'alt' => 'BGIS')); ?>
 </div>
  <div class="down">&nbsp;</div>
      <div class="middlecontent">
        <div class="menutree">
<div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a class="breadcrum_link" href="http://bgis.org/" itemprop="url">
<span itemprop="title">Home</span></a> » <div style="display:inline;" itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
<a class="ml3 breadcrum_link" itemprop="url"><span itemprop="title">Faculty</span></a> 
</div></div></div>
<div class="down">&nbsp;</div>
      <div class="facultymember">
        <h1>Faculty members </h1>
        <p>The Bhaktivedanta Gurukula and International School (BGIS), located in the beautiful holy land of Sri Vrindavan dham, the abode of Lord Krishna, offers the best of both worlds - the traditional and the modern, the Vedic and the contemporary, the spiritual and the temporal. Teaching includes aesthetics in art, literature and science with emphasis on practical training methodologies</p>
           <div class="down">&nbsp;</div>
         <div class="accordionMenu" id="faculty_detail">
         </div>
        </div>
      </div>
    </div>
      
    