   <?php  $currentPage = $this->request->params['param']; $currentPage= str_replace('-', ' ', $currentPage);
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


<style>
.alert {
background-color: #ee0000;
border: 1px solid #dc7070;
color: #fcfcfc;
font-size: 20px;
}
</style>
 <script type="text/javascript">
	          $(document).ready(function()
	          {
		  $("#online").validationEngine('attach', {promptPosition : "topRight", autoPositionUpdate : true, scroll:false});
		 });

	</script>
	
<div class="bannerinner">
  <?php  echo $this->Html->image('/img/contributes/'.$banner_img,array('title' =>"BGIS Contributes", 'alt' => 'BGIS')); ?>
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
<a class="ml3 breadcrum_link" href="http://bgis.org/contribute" itemprop="url"><span itemprop="title">Contribute</span></a> » 
<div class="ml3" style="display:inline;" itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">
<?php echo $top1;?></span></div></div></div></div> 
        <div class="down">&nbsp;</div>
        
       <h1 style="font-size: 20px;color: #a0030b;margin: 0px;padding-bottom: 5px;margin-left: 10px;"><?php echo $top1;?></h1> 
        <?php  if($top1=='Online Payment') {?>
        <div class="aboutus">
          <h2>Pay through your credit card directily. Please fill the information below to proceed.</h2>
<div class="down">&nbsp;</div>
<?php echo $this->Session->flash(); ?>
         <div class="onlinecontact">
           <div id="menu3_2_1">
               <script type="text/javascript">
$(document).ready(function(){
               var delay = 0; //Your delay in milliseconds
               setTimeout(function(){ window.location = "http://bgis.org/payment"; }, delay)
});
               </script>
         <?php } else { ?>
                       <?php echo $content;?>            
           <?php } ?>
       </div>
      </div>