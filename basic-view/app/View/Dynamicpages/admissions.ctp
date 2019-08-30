<?php  $currentPage = $this->request->params['param']; $currentPage= str_replace('-', ' ', $currentPage);
		$this ->set('currentPage',$currentPage);
	        ?>
<script language="JavaScript">
		$(document).ready(function() {	
    	        var apiUrl = '/dynamicmenu/';
    	          var currPage = "<?php echo $currentPage; ?>";
	     	$.ajax({
	         url: apiUrl + 'getAdmission',
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
            var newFirmDiv9 = '<li id="'+allData9.Submenu_id[y]+'"><a href="/admissions/'+catName+'" class="active" title="'+allData9.Submenu[y]+'">'+allData9.Submenu[y]+'</a></li>';
						   }else{
	 var newFirmDiv9 = '<li  id="'+allData9.Submenu_id[y]+'"><a href="/admissions/'+catName+'" title="'+allData9.Submenu[y]+'">'+allData9.Submenu[y]+'</a></li>';
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
	/*width: 980px;*/
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
<div class="bannerinner"> <?php echo $this->Html->image('/img/admission/'.$banner_img,array('title' =>"BGIS about", 'alt' => 'BGIS')); ?> </div>
<div class="down">&nbsp;</div>
<div class="middlecontent">
  <div class="leftsidemenu">
    <ul id="sidebar">
      <h1>Admissions</h1>
    </ul>
  </div>
  <div class="rightsidecontent">
    <div class="menutree">
      <div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a class="breadcrum_link" href="http://bgis.org/" itemprop="url"> <span itemprop="title">Home</span></a> »
        <div style="display:inline;" itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"> <a class="ml3 breadcrum_link" href="http://bgis.org/admission" itemprop="url"><span itemprop="title">Admission</span></a> »
          <div class="ml3" style="display:inline;" itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title"> <?php echo $top1;?></span></div>
        </div>
      </div>
    </div>
    <div class="down">&nbsp;</div>
    <h1 style="font-size: 20px;color: #a0030b;margin: 0px;padding-bottom: 5px;margin-left: 10px;"><?php echo $top1;?> </h1>
    <?php echo $content;?>
    <div class="down">&nbsp;</div>
    <h2 style="position: relative;font-size: 20px;color: #a0030b;margin: 0px;padding-bottom: 0px;margin-left: 10px;">Donate For Complete Education</h2>
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