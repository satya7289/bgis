 <script language="JavaScript">
		$(document).ready(function() {	
    	var apiUrl = '/dynamicmenu/';
	     	$.ajax({
	         url: apiUrl + 'getAbout',
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
						   var newFirmDiv9 = '<li class="" id="'+allData9.Submenu_id[y]+'"><a href="/aboutus/'+catName+'" title="'+allData9.Submenu[y]+'">'+allData9.Submenu[y]+'</a></li>';
                   $("ul#sidebar").append(newFirmDiv9);
				}

		},
		failure: function()
		{			
    	
		}	
});
});
</script>
<style type="text/css">
.donate_main_links {
	font-family:Calibri, Helvetica, sans-serif;
	float:left;
	width:76%;
margin-left: 8px;
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
	padding:20px;
	list-style:none;
}
.tooltip {
	display:none;
	width:300px;
	line-height:160%;
	margin-left:-70px;
	position:absolute;
	border:1px solid #ccc;
	background-color:#f8f8f8;
	border-radius:5px;
	padding:10px;
	color:#000;
	font-size:16px;
	font-family:calibri;
}
</style>
<script type="text/javascript">
$(document).ready(function() {
        // Tooltip only Text
        $('.masterTooltip').hover(function(){
                // Hover over code
                var title = $(this).attr('title');
                $(this).data('tipText', title).removeAttr('title');
                $('<p class="tooltip"></p>')
                .text(title)
                .appendTo('body')
                .fadeIn('slow');
        }, function() {
                // Hover out code
                $(this).attr('title', $(this).data('tipText'));
                $('.tooltip').remove();
        }).mousemove(function(e) {
                var mousex = e.pageX + 20; //Get X coordinates
                var mousey = e.pageY + 10; //Get Y coordinates
                $('.tooltip')
                .css({ top: mousey, left: mousex })
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
  <?php echo $this->Html->image('aboutbanner.jpg',array('title' =>"BGIS about", 'alt' => 'BGIS')); ?>
 </div>
  <div class="down">&nbsp;</div>
      <div class="middlecontent">
      <div class="leftsidemenu">
        <ul id="sidebar">
         <h1>Welcome to BGIS</h1>
        </ul>
      </div>
      <div class="rightsidecontent">
      <div class="menutree">
<div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a class="breadcrum_link" href="http://bgis.org/" itemprop="url">
<span itemprop="title">Home</span></a> » <div style="display:inline;" itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
<a class="ml3 breadcrum_link" itemprop="url"><span itemprop="title">About</span></a> 
</div></div></div>
<div class="down">&nbsp;</div>
        <div class="aboutus">
          <h1>Welcome to BGIS </h1>
       <p><?php echo $this->Html->image('aboutinnermg.jpg',array('title' =>"BGIS about", 'alt' => 'BGIS','style'=>"float:right; padding: 5px; padding-left:10px;")); ?>The Bhaktivedanta Gurukula and International School (BGIS), located in the beautiful holy land of Sri Vrindavan dham, the abode of Lord Krishna, offers the best of both worlds - the traditional and the modern, the Vedic and the contemporary, the spiritual and the temporal. Teaching includes aesthetics in art, literature and science with emphasis on practical training methodologies
            
            A.C Bhaktivedanta Srila Prabhupada, the founder acharya of ISKCON; laid the cornerstone of BGIS in 1976 in the spiritual setting of Vrindavan dham. He established it with a need to inculcate real education among youth which comprises of meditation, ‘simple living, high thinking’ motto, along with modern education running in parallel with value-based development. </p>
          <h2>Why Gurukula ? </h2>
          <p>Each feature of BGIS is geared to bring out each students best. To offer them not just classroom lessons but a few lessons in life as well. To help them rise above just being good students and let them out into the world as good people.
            
            Which is why we call ourselves a Gurukula. Here, the students imbibe in their hearts a devotion to Lord Krishna based on the teachings of the Bhagvad-Gita. Teachings that are delivered not sentimentally or dogmatically but in a philosophical and cultural way, using both contemporary and traditional educational methods. </p>
          <h2>A unique balance</h2>
          <p>The school offers a unique balance of the best of both worlds - the traditional and the modern, the Vedic and the contemporary , the spirittual and the temporal. Athorough academic programme with small classes. Enthusiastic teachers with the time to help each student. A well equipped campus in the rich cultural and spiritual town of Vrindavan. The youthful energy of an international student body student and playing together. Yearly adventures that include visiting South Indian holy places, mountain climbing, hiking and swimming. </p>
          <h2>We are GLOBAL </h2>
          <p>We are also an International School. We use the Indian Certificate of Secondary Education (ICSE) exam in the 10th standard and the Indian Certificate of Education (ICE) exam in 12th.
            
            
            
            Bearing witness to the well-rounded nature of BGIS is the fact that our teachers and students come from around the globe, providing a rich, natural forum for cultural exchange and appreciation.
            
            
            
            Thus, the BGIS experience gives a student the opportunity to excel in his studies while holding a spiritual worldview. The outcome is a well-balanced individual ready to take on lifes challenges.</p>
          <h2>BGIS Expansion</h2>
          <p>We take privilege to announce the construction of our new campus in 100 acres of plot near Ajhai Village which is 3KM from national highway opposite to GLA University, where Gurukul and Goshala will be relocated.</p>
          <div class="downloadpdfnew">
            <div class="dowloadpdf" style="float:left;"><a href="../pdf/donations.pdf" target="_blank"><img src="img/downlaodpdf.png" style="padding-top:10px;" /> </a> </div>
                <div class="exploretext"><a href="/campus">Explore The New BGIS Campus</a></div>
          </div>
          <div class="down">&nbsp;</div>
            <h2 style="position: relative; font-size: 20px;color: #a0030b;margin: 0px;padding-bottom: 0px;margin-left: 10px;">Donate For Complete Education</h2>
           <div class="down">&nbsp;</div>
  <div class="donate_main_links">
  <div class="donate_in">
    <ul>
      <li><a href="/contributes/online-payment"><img src="../img/campus.png" class="masterTooltip" title="New BGIS  Development" /></a> </li>
      <li><a href="/onlinepayments/c92b26f68689c7af56b0b08721897732"><img src="../img/cow.png" class="masterTooltip" title="Cow Care : Help us maintain the cows for a year." /></a> </li>
      <li><a href="/onlinepayments/2cad8fa47bbef282badbb8de5374b894"><img src="../img/invest.png" class="masterTooltip" title="Invest for your future" /></a> </li>
      <li><a href="/onlinepayments/b7a782741f667201b54880c925faec4b"><img src="../img/nature.png" class="masterTooltip" title="Nature Care  : Support 15 trees for life." /></a> </li>
      <li><a href="/onlinepayments/14ee22eaba297944c96afdbe5b16c65b"><img src="../img/sponser.png" class="masterTooltip" title="Child Education, Sponsor the Education of One Child for a year  including residential charges ." /></a> </li>
    </ul>
  </div>
</div>
        </div>
      </div>
      <!--        <div class="aboutmiddlecontent">   
        </div>-->
    </div>
    