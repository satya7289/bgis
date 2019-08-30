// Web Fonts

  WebFontConfig = {
    google: { families: [ 'Copse:latin', 'Lato:100,300,400,700:latin', 'Josefin+Slab:400:latin' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })();


// Tabs

$(function(){
	$(".tab-content").hide();
	$("ul.tabs li:first").addClass("active").show(); 
	$(".tab-content:first").show();
	
	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active");
		$(this).addClass("active"); 
		$(".tab-content").hide(); 
		var activeTab = $(this).find("a").attr("href"); 
		$(activeTab).fadeIn(); 
		return false;
	});

});

