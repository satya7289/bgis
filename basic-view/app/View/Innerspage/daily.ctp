<script>
$(document).ready(function() 
{
      	    var apiUrl = '/homepages/';
	     	  $.ajax({
	           url: apiUrl + 'getDaily',
		       method: 'GET',
			   type:'application/json',
		       success: function(data)
		 		{
						   var allData9 = JSON.parse(data);		 
			   	    	  for (var y = 0; y < allData9.Event_id.length ; y++) 
		   	         {                                        
      var newFirmDiv9 = '<h2>'+allData9.Event_heading[y]+'</h2><p>Posted <span style="font-weight:bold; font-size:12px; color:#333">'+allData9.Event_date[y]+'</span> Latest News</p><p>'+allData9.Event_description[y]+'</p>'
                   $("#dailynews").append(newFirmDiv9);
				      }

		},
		failure: function()
		{			
    	
		}	
});
});
</script>



<div class="bannerinner">
    <?php echo $this->Html->image('dailybulletin.jpg',array('title' =>"BGIS latest", 'alt' => 'BGIS')); ?>
 </div>
        <div class="down">&nbsp;</div>
       <div class="middlecontent">
      <div class="leftsidemenu">
               <ul>
               <h1>News & evetns</h1>
               <li><a href="/latest">Latest News</a></li>
               <li><a href="/daily">Daily Bulletin</a></li>
               <li><a href="/media">Events</a></li>
              </ul>
        </div>
        <div class="rightsidecontent">  
         <div class="aboutus">
         <h1>Daily Bulletin</h1>
         <div id="dailynews">
         </div>
        </div>
       </div>
      </div>