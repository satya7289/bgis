  <style>
 .active_tab
 {
	background-color:#d3000c !important;
 }
 </style>
 <?php  $currentPage = $this->request->params['param']; $currentPage= str_replace('-', ' ', $currentPage);
		$this ->set('currentPage',$currentPage);
	          ?>
   <script language="JavaScript">
		$(document).ready(function() {	
    	        var apiUrl = '/dynamicmenu/';
    	        var currPage = "<?php echo $currentPage; ?>";
	     	$.ajax({
	         url: apiUrl + 'getCampus',
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
						   var newFirmDiv9 = '<li class="" id="'+allData9.Submenu_id[y]+'"><a href="/campusmain/'+catName+'" class="active" title="'+allData9.Submenu[y]+'"> '+allData9.Submenu[y]+'</a></li>';
						   }else{
			 var newFirmDiv9 = '<li class="" id="'+allData9.Submenu_id[y]+'"><a href="/campusmain/'+catName+'" title="'+allData9.Submenu[y]+'"> '+allData9.Submenu[y]+'</a></li>';			   
						   
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

<?php $page_name = basename($_SERVER['REQUEST_URI']);?>
<div class="bannerinner">
  <?php echo $this->Html->image('/img/campus/'.$banner_img,array('title' =>"BGIS about", 'alt' => 'BGIS')); ?>
 </div>
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
<a class="ml3 breadcrum_link" href="http://bgis.org/campus" itemprop="url"><span itemprop="title">Campus</span></a> » 
<div class="ml3" style="display:inline;" itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">
<?php echo $top1;?></span></div></div></div></div> 
        <div class="down">&nbsp;</div>
      <h1 style="font-size: 20px;color: #a0030b;margin: 0px;padding-bottom: 5px;margin-left: 10px;"><?php echo $top1;?> </h1>           
         <?php echo $content;?>
         <div class="donationlink"><span style=" font-style:italic; color:#000000;">You may also Like:</span> <a href="http://www.bgis.org/contributes/donate-&-contribute">Donate to Contribute</a></div> 
          <div class="bottommenu">
           <ul class="cbdb-menu">
 <li><a href="/campusmain/vision-2018" id="red" class="<?php echo ($page_name=='vision-2018')?'active_tab':'';?>">Vision 2018</a> </li>
 <li><a href="/campusmain/what-make-us-special"  id="green" class="<?php echo ($page_name=='What-make-us-special')?'active_tab':'';?>">What makes us special</a></li>
<li><a href="/campusmain/team" id="yellow" class="<?php echo ($page_name=='team')?'active_tab':'';?>">Team</a></li>
<li><a href="/campusmain/road-map-" id="cyan"  class="<?php echo ($page_name=='road-map-')?'active_tab':'';?>">Road map</a> </li>
<li><a href="/campusmain/construction-cost" id="blue"  class="<?php echo ($page_name=='construction-cost')?'active_tab':'';?>">Construction & cost</a></li>
			  </ul>
          </div>     
       </div>
       
      </div>