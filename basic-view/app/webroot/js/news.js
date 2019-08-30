$(document).ready(function() 
{
      	    var apiUrl = '/homepages/';
	     	  $.ajax({
	           url: apiUrl + 'getlatest',
		       method: 'GET',
			   type:'application/json',
		       success: function(data)
		 		{
						   var allData9 = JSON.parse(data);		 
			   	    	  for (var y = 0; y < allData9.Event_id.length ; y++) 
		   	         {                                        
      var newFirmDiv9 = '<li><div><img width="150" height="80" src="img/news/'+allData9.Event_image[y]+'" class="attachment-home-tab wp-post-image">             </div><h3><a href="/latest">'+allData9.Event_heading[y]+'</a></h3><b style="color:#656562";>'+allData9.Event_date[y]+'</b><a href="/latest"><p>More Info Click here </p></a></li>'
                   $("ul#latest").append(newFirmDiv9);
				      }

		},
		failure: function()
		{			
    	
		}	
});

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
        var newFirmDiv9 = '<li><div><img width="150" height="80" src="img/news/'+allData9.Event_image[y]+'" class="attachment-home-tab wp-post-image">             </div><h3><a href="/latest">'+allData9.Event_heading[y]+'</a></h3><b style="color:#656562";>'+allData9.Event_date[y]+'</b><a href="/latest"><p>More Info Click here </p></a></li>';
                   $("ul#daily").append(newFirmDiv9);
				      }

		},
		failure: function()
		{			
    	
		}	
});
         var apiUrl = '/homepages/';
	     	  $.ajax({
	           url: apiUrl + 'getMedia',
		       method: 'GET',
			   type:'application/json',
		       success: function(data)
		 		{
						   var allData9 = JSON.parse(data);		 
			   	    	  for (var y = 0; y < allData9.Event_id.length ; y++) 
		   	         {                                        
    var newFirmDiv9 = '<li><div><img width="150" height="80" src="img/news/'+allData9.Event_image[y]+'" class="attachment-home-tab wp-post-image">             </div><h3><a href="/latest">'+allData9.Event_heading[y]+'</a></h3><b style="color:#656562";>'+allData9.Event_date[y]+'</b><a href="/latest"><p>More Info Click here </p></a></li>';
                   $("ul#media").append(newFirmDiv9);
				      }

		},
		failure: function()
		{			
    	
		}	
});
});