<script>
$(document).ready(function() 
{
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
      var newFirmDiv9 = '<h2>'+allData9.Event_heading[y]+'</h2><p>Posted <span style="font-weight:bold; font-size:12px; color:#333">'+allData9.Event_date[y]+'</span> Latest News</p><p>'+allData9.Event_description[y]+'</p>'
                   $("#events").append(newFirmDiv9);
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
.imagezoom {
	width:735px;
	margin:auto;
	float:left;
}
.imagezoom p {
	float:left;
	padding-left:5px;
}
.cricketgallery {
	width:735px;
	margin:auto;
	float:left;
}
.hairpagemain {
	width:735px;
	margin:auto;
	float:left;
}
.hairpagemain p {
	font-size:12px;
	color:#656567;
	line-height:22px;
}
.after_before {
	width:735px;
	margin:auto;
	float:left;
	border-top:1px #CCC dotted;
	margin-top:15px;
	padding-top:10px;
}
.after_before ul {
	margin:0px;
	float:left;
}
.after_before li {
	padding:0px;
	float:left;
}
.after_before ul li {
	margin:0px;
	padding:0px;
	float:left;
	padding-left:10px;
	padding-top:8px;
}
.after_before h2 {
	font-size:16px;
	font-weight:bold;
	color:#656567;
	padding-top:5px;
	padding-bottom:5px;
}
</style>
<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<script type="text/javascript">
		$(document).ready(function() {
		

			$('.fancybox').fancybox();

		
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>


<div class="bannerinner">
    <?php echo $this->Html->image('events.jpg',array('title' =>"BGIS latest", 'alt' => 'BGIS')); ?>
 </div>
   <div class="down">&nbsp;</div>
       <div class="middlecontent">
      <div class="leftsidemenu">
               <ul>
                <h1>News & events</h1>
		           <ul>
		             <li><a href="/latest">Latest News</a></li>
		             <li><a href="/mayapuri" >Mayapur Spiritual Retreat </a></li>
		             <li><a href="/result">BGIS Students Get Top Exam Results.</a></li>
		             <li><a href="/bgis-vrindavan-organized" class="active">BGIS Vrindavan organized an 8-day retreat program last.</a></li>
		             <li><a href="/nirmaan">Grand Nirmaan Subharambha Ceremony of BGIS New Campus</a></li>
		             <li><a href="/competition6" >Visit of Chief Minister of UP to ISKCON Vrindavan</a></li>
		             <li><a href="/competition5">Gaura Purnima Celebrations at BGIS</a></li>
			         <li><a href="/competition4">Sport Day: Lets Play</a></li>
			         <li><a href="/competition3">Mission: Clean Virndavan</a></li>
		             <li><a href="/competition2">Gita Jayanti celebrated in BGIS</a></li> 
		             <li><a href="/competition">1st Prize in Drawing Competition</a></li>  
		             <li><a href="/mphemamalini" >MP Hemamalini visits Bhaktivedanta Gurukul</a></li>
		             <li><a href="/championship">Swimming Champions 2014</a></li>
		             <li><a href="/plantedtree">Enthusiastic students planted trees</a></li>	
				     <li><a href="/mansiganga" >Mansi Ganga Innaguration</a></li>
				     <li><a href="/media"  >Shilanyas ceremony</a></li>	
		           </ul>
        </div>
        <div class="rightsidecontent">  
         <div class="aboutus">
         <h1>News & Events</h1>
         <h2 style="color:#656567;">BGIS Vrindavan organized an 8-day retreat program last</h2>
          <br/>
         <div class="imagezoom">
              <p>
              	
				<a class="fancybox" href="img/new12/01.jpg" data-fancybox-group="gallery" >
				<img src="img/new12/01.jpg" alt="" style="width: 233px;height: 160px;" /></a>

				<a class="fancybox" href="img/new12/02.jpg" data-fancybox-group="gallery" >
			    <img src="img/new12/02.jpg" alt="" style="width: 233px;height: 160px;" /></a>  

	         </p>
          </div>
        </div>
        <div class="down">&nbsp;</div>
        <p style="margin-left:10px;">BGIS Vrindavan organized an 8-day retreat program last June 29-July 6, 2018 at BGIS New Campus. The retreat was conducted and facilitated by BGIS Director, His Grace Lila Purusottam prabhu ji. The main theme for the seminar is to live on the principle of “Simple Living and High Thinking”. <br/><br/>
        The event was participated by all the Gurukula teachers and staffs.  Each day of the seminar was started by mantra meditation and ecstatic kirtan. The participants were served daily by delicious Prasad.  Lila Purusottam prabhu discussed about developing an ecological consciousness and realizing and honoring the interconnectedness of sacred web of life in the universe.  He envisioned on establishing a green campus to live in balance and harmony with mother earth and for ecological restoration in urban areas.<br/> 
        Lila Purusottam prabhu divided the participants into six groups to represent six different aspects for research and development. The 1st group was in charge to develop study on Natural Farming. The 2nd group was given the task to research on Waste Management System.  The 3rd group spent their time to work on Water Filtration System using natural resources. To build natural Green Houses / Mud Houses was assigned to the 4th group while the 5th and 6th group had to make a research on Cow Dung Fuel / Gas Plant and Making Robots respectively.<br/><br/>
        The six groups worked hard for seven days with whatever limited resources they could get around the new campus premises. At the last day of the seminar, each group made a presentation about their research. They had displayed and exhibited their works and made an elaborate explanations and conclusion on their findings.<br/><br/>
        It was an invigorating, encouraging and transformative gathering to drawn the participants to simply take advantage of natural resources. Lila Purusottam prabhu motivates everyone to depend more on nature and to pursue a self-sustainable community.  He told the teachers how BGIS and other schools hold a particular unique influence on society and that they train and educate people and because they participate in governance at the national and regional level, they can implement practical change in navigation towards a more sustainable future.<br/><br/>
        The highlight of the event is the planting of more than 500 trees around the new BGIS Campus. The Principal, Admin Staff and Senior Teachers participated in tree planting.  They dug the ground and worked with their bare hands while the school staffs brought the trees to be planted on bullock cart.<br/><br/>

        We are hoping to establish an ideal ecological campus in Vrindavan for the benefit of our children and for the future generation. 
        <br/>
    </p>
         <div class="down">&nbsp;</div>
          <h2 style="position: relative;font-size: 20px;color: #a0030b;margin: 0px;padding-bottom: 0px;margin-left: 10px;">
          		Donate For Complete Education
          </h2>
  
 <div class="down">&nbsp;</div>

	  <div class="donate_main_links">
	  <div class="donate_in">
	    <ul>
	      <li><a href="/contributes/online-payment"><img src="../img/campus.png" class="masterTooltip" title="New BGIS  Development" /></a> </li>
	      <li><a href="/onlinepayments/c92b26f68689c7af56b0b08721897732"><img src="../img/cow.png" class="masterTooltip" title="Cow Care : Help us maintain the cows for a year." /></a> </li>
	      <li><a href="/onlinepayments/2cad8fa47bbef282badbb8de5374b894"><img src="../img/invest.png" class="masterTooltip" title="Invest For Future " /></a> </li>
	      <li><a href="/onlinepayments/b7a782741f667201b54880c925faec4b"><img src="../img/nature.png" class="masterTooltip" title="Nature Care  : Support 15 trees for life." /></a> </li>
	      <li><a href="/onlinepayments/14ee22eaba297944c96afdbe5b16c65b"><img src="../img/sponser.png" class="masterTooltip" title="Child Education, Sponsor the Education of One Child for a year  including residential charges ." /></a> </li>
	    </ul>
	  </div>
	 </div>

       </div>
      </div>