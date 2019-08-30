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
                <li><a href="/latest">Latest News</a></li> 
                		   <li><a href="/kirtan-mela-2018" class="active" >Kirtan Mela -2018</a></li> 
                           <li><a href="/chinmaya-bhagavatgita-competition" >Gita Recitation and Debate Competition.</a></li>  
			               <li><a href="/independence-day-2018">Independence Day 2018 at BGIS Vrindavan.</a></li>
			               <li><a href="/bgis-vrindavan-organized"  >organized an 8-day retreat program last.</a></li>
			               <li><a href="/farewell-ceremony">BGIS Vrindavan Graduation Day 2018</a></li>	
					       <li><a href="/nityananda-trayodashi-2018">Nityananda Trayodashi 2018 at BGIS Vrindavan.</a></li> 
              </ul>
        </div>
        <div class="rightsidecontent">  
         <div class="aboutus">
         <h1>Events</h1>
         <h2 style="color:#656567;">Kirtan Mela and Grand Inauguration Festival at New BGIS Campus</h2>
          <br/>
         <div class="imagezoom">
         
         <p><a class="fancybox" href="img/kirtan-mela/01.jpg" data-fancybox-group="gallery" ><img src="img/kirtan-mela/01.jpg" alt="" height="150px" width="200px" /></a>
		<a class="fancybox" href="img/kirtan-mela/02.jpg" data-fancybox-group="gallery" ><img src="img/kirtan-mela/02.jpg" alt="" height="150px" width="200px"/></a>
		<a class="fancybox" href="img/kirtan-mela/03.jpg" data-fancybox-group="gallery" ><img src="img/kirtan-mela/03.jpg" alt="" height="150px" width="200px"/></a> </p>

		<p><a class="fancybox" href="img/kirtan-mela/04.jpg" data-fancybox-group="gallery" ><img src="img/kirtan-mela/04.jpg" alt="" height="150px" width="200px" /></a>
		<a class="fancybox" href="img/kirtan-mela/05.jpg" data-fancybox-group="gallery" ><img src="img/kirtan-mela/05.jpg" alt="" height="150px" width="200px"/></a>
		<a class="fancybox" href="img/kirtan-mela/06.jpg" data-fancybox-group="gallery" ><img src="img/kirtan-mela/06.jpg" alt="" height="150px" width="200px"/></a> </p>


          </div>
        </div>
        <div class="down">&nbsp;</div>
        <p style="margin-left:10px;">

The Bhaktivedanta Gurukula and International School (BGIS) on Monday, 12th of November inaugurated its new Campus at Ajai Village in Vrindavan.

Hundreds of devotees from different parts of the world participated in this wonderful event in honor of the Gurukula’s founder, His Divine Grace A.C. Bhaktivedanta Swami Prabhupada. Honorable guests, dignitaries, Prabhupada disciples, sanyasis, and senior leaders of ISKCON witnessed the splendid campus that unbelievably took in just few years to get it established. The celebration was held at the newly completed academic building. The ceremony was presided by His Holiness Gopal Krishna Goswami. In his inaugural speech, he emphasized the importance of giving Krishna consciousness to the children at the early stage of life. He mentioned that “This Gurukula will provide a safe learning atmosphere that will allow the students to develop a love for learning, with exemplary character, a profound understanding of Krishna consciousness, and the skills to become responsible leaders of the society". Maharaj greatly appreciated the unparalleled efforts of the New Gurukul Project Team and Staffs, headed by BGIS Director, His Grace Lila Purusottam Das and Radhakanta Das.<br><br>

A Kirtan Mela proceeded after the presentation of special gifts to the guests of honor. His Grace Panchagauda Das Prabhu started the ecstatic reverberation of the Holy Name followed by different lovers of kirtan. Among them were, HH Bhakti Anugraha Janardan Swami, HH Vedavyas Priya Maharaj, HH Sachinandana Swami, HH Lokanath Maharaj and among others. The chanting was really ecstatic and everyone was dancing and jumping calling out loud the Holy Name. it was a wonderful transcendental experience and everyone felt spiritually surcharged. The night was concluded with the offering of lamps to Lord Damodar.<br><br>

Unlimited and splendid Krishna Prasadam was served to everyone throughout the whole day. Other senior devotees present were HH Janananda Goswami, HH Bhakti Madhurya Govinda Goswami, HG Basu Gosh Das, and HH Bhakti Ashraya Vaishnava Swami.
to see images gallery <a href='https://www.flickr.com/photos/iskcon_bgis/albums/72157704422680185' target='_new'>click here</a>
			 </p>
            
          <h2 style="position: relative;font-size: 20px;color: #a0030b;margin: 0px;padding-bottom: 0px;margin-left: 10px;">Donate For Complete Education</h2>
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