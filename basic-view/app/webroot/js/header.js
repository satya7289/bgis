<!--Ajax call for menu of about us -->

	 $(document).ready(function()
	 {
	  var apiUrl = '/dynamicmenu/';
	  $.ajax({
		url: apiUrl + 'getAbout',
		method: 'GET',
		type:'application/json',
		success: function(data)
		{
			var allData5 = JSON.parse(data);
			var myhtml2="";
			for(var i=0; i< allData5.Submenu.length;i++)
			{
			var catname = allData5.Submenu[i];
			var catName = catname.toLowerCase();
				if(catName.indexOf(' ') > -1){
			         catName = catName.replace(/\s+/g,"-");
						       
  				}
                myhtml2 +='<li id="'+allData5.Submenu_id[i]+'"><a href="/aboutus/'+catName+'" title="'+allData5.Submenu[i]+'">  '+allData5.Submenu[i]+'</a></li>';
	            $("ul#sub4").html(myhtml2);
			}
		},
		failure: function()
		{
			
		}
	});
	});
	<!--Ajax call for menu of about us end-->
	
	
	<!--Ajax call for menu of BGIS CAMPUS -->
	<!--Ajax call for menu of campus-->
	$(document).ready(function() {
	  var apiUrl = '/dynamicmenu/';
	  $.ajax({
		url: apiUrl + 'getCampus',
		method: 'GET',
		type:'application/json',
		success: function(data)
         {
			var allData9 = JSON.parse(data);
			var myhtml5="";
			for(var i=0; i< allData9.Submenu.length; i++)
			{
			  var catname = allData9.Submenu[i];
			  var catName = catname.toLowerCase();
				if(catName.indexOf(' ') > -1){
					catName = catName.replace(/\s+/g,"-");
  				}
  myhtml5 +='<li id="'+allData9.Submenu_id[i]+'"><a href="/campusmain/'+catName+'" title="'+allData9.Submenu[i]+'">  '+allData9.Submenu[i]+'</a></li>';
	             $("ul#sub5").html(myhtml5);
			}
		},
		failure: function()
		{
			
		}
	});
	});
	
	<!--Ajax call for menu of BGIS CAMPUS  end-->
	<!--Ajax call for menu of Admissions-->
	$(document).ready(function() {
	  var apiUrl = '/dynamicmenu/';
	  $.ajax({
		url: apiUrl + 'getAdmission',
		method: 'GET',
		type:'application/json',
		success: function(data)
         {
			var allData9 = JSON.parse(data);
			var myhtml5="";
			for(var i=0; i< allData9.Submenu.length; i++)
			{
			  var catname = allData9.Submenu[i];
			  var catName = catname.toLowerCase();
				if(catName.indexOf(' ') > -1){
					catName = catName.replace(/\s+/g,"-");
  				}
  myhtml5 +='<li id="'+allData9.Submenu_id[i]+'"><a href="/admissions/'+catName+'" title="'+allData9.Submenu[i]+'">  '+allData9.Submenu[i]+'</a></li>';
	             $("ul#sub2").html(myhtml5);
			}
		},
		failure: function()
		{
			
		}
	});
	});
	<!--Ajax call for menu of Contribute-->
	$(document).ready(function() {
	  var apiUrl = '/dynamicmenu/';
	  $.ajax({
		url: apiUrl + 'getContribute',
		method: 'GET',
		type:'application/json',
		success: function(data)
         {
			var allData13 = JSON.parse(data);
			var myhtml13="";
			for(var v=0; v< allData13.Submenu.length ;v++)
			{
			    var catname = allData13.Submenu[v];
			    var catName = catname.toLowerCase();
				if(catName.indexOf(' ') > -1){
					catName = catName.replace(/\s+/g,"-");
  				}
               myhtml13 += '<li id="'+allData13.Submenu_id[v]+'"><a href="/contributes/'+catName+'">'+allData13.Submenu[v]+'</a></li>';
	             $("ul#sub3").html(myhtml13);
			}
		},
		failure: function()
		{
			
		}
	});
	});
	//Window Main Initialization
window.Main = {  
  // ----------
  init: function() {
    var self = this;
    
    if (typeof(Storage)== "undefined") {
      alert("This browser does not support local storage.");
      return;
    }
    
    if (!window.JSON) {
      alert("This browser does not support JSON.");
      return;
    }
	
    $(window).bind("storage", function() {
        setTimeout(function() { // this slight delay is necessary on IE
          self.loadAll();
        }, 1);
      });

    this.loadAll();
  },
  
  loadAll: function() {
    var ids = [];
    for (var i = 0; i < localStorage.length; i++) {
      var key = localStorage.key(i);
      if (key.indexOf("input") !== 0)
        continue;
        
      var data = localStorage[key];
      var box = JSON.parse(data);
	  console.log(box);
      var id = "#" + key;
      ids.push(id);
    }
  }
  
};