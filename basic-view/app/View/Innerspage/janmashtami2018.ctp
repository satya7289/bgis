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
                		   <li><a href="shobha-yatra-2018" class="active" >Janmashtami-2018</a></li> 
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
         <h2 style="color:#656567;">First Janmashtami Celebration At BGIS NEW CAMPUS</h2>
          <br/>
         <div class="imagezoom">
              <p>
		<a class="fancybox" href="img/janmashtami_2018/01.jpg" data-fancybox-group="gallery" ><img src="img/janmashtami_2018/01.jpg" alt="" height="150px" width="200px" /></a>
		<a class="fancybox" href="img/janmashtami_2018/02.jpg" data-fancybox-group="gallery" ><img src="img/janmashtami_2018/02.jpg" alt="" height="150px" width="200px"/></a>
		<a class="fancybox" href="img/janmashtami_2018/03.jpg" data-fancybox-group="gallery" ><img src="img/janmashtami_2018/03.jpg" alt="" height="150px" width="200px"/></a> 
		 
	       </p>
          </div>
        </div>
        <div class="down">&nbsp;</div>
        <p style="margin-left:10px;">Over the years, the BGIS has been celebrating Sri Krishna Janmashtami in Vrindavan campus with innate ardor on a grand scale. This year, the Janmashtami festival was organized at new Gurukula campus land in Ajai, Vrindavan with much fanfare and added fervor.<br><br>

In our new campus, the arrangements for the festival started well ahead. The entire newly constructed building was cleaned and decorated with flowers and colorful festoons. The students made a replica of the sacred Goverdhan hill as the backdrop for the stage. This year's celebration was on 3th of September, hundreds of students along with their parents and a great number of devotees came together in true festive spirit.<br><br>

The program started with the incantation of sacred prayers by the team of Srikant prabhu ji; Ekalavya prabhu ji lead the welcome kirtan and Govind prabhu ji offered a Krishna bhajan. Then the grade 8 students prepared a Sanskrit speech followed by a dance from primary class in glorification of Yamuna. The middle school came next on stage exhibiting their ability to play mrdanga drum under the direction of Akash prabhu ji. This was followed by an exquisite Gotipua dance presentation from primary students. It was a deafening applause for the six young boys on the stage totally immersed in this ancient Orissan dance. Their charming steps and perfect acrobatics held the audience in rapt attention. After this wonderful performance, Chaitanya prabhuji from Grade 6 performed a heart-warming bhajan<br><br><br>

 

Shedding further light on the celebrations, His Grace Lila Purushottam prabhu ji, BGIS Vrindavan Director, delivered an inspiring speech which was well appreciated and applauded by everyone. More performances proceeded;  drama skit of Bal Lila by primary graders, group song by 7th graders and Dandia Dance by primary school. Then a group of 9th-grade students performed a Bengali song which was composed by HH Jayapataka Swami, entitled “Yadi Prabhupada Na Hoito”. It was a beautiful rendition with acoustic guitar and African drum. The next group was an astounding dance performance to the groovy beat of “Adharam Madhuram” from primary and middle school. The grade 9 students presented a Musical Krishna song before an intermission quiz on Krishna Book. The BGIS teachers invaded the stage with their fantastic “Nandotsav” performance.<br><br><br> 

 

Days of preparation finally culminated into the majestic ceremonial bathing of the Lord. The small Deities of Sri Sri Radha Shyamasundar and Goverdhan shila were anointed with fragrant oils and were bathed with auspicious items like milk, yogurt, ghee, honey, sweet water, and fresh juices. Then they were smeared with turmeric paste and bathed in holy water. Varieties of flowers were showered until the Deities are submerged in the soft bed of flowers. The maha-abhisek ceremony was spearheaded by Lav and Kush prabhu jis with the guidance of Navadwip prabhu ji. While the bathing of the Lord is going on, the students recited the Brahma Samhita prayers and did an ecstatic harinam sankirtan. The atmosphere was surcharged with the vibration of the Holy Name of Krishna.<br><br>

One of the highlights of the Janmashtami festival was the offerings made to Lord Krishna. The Lord was offered more than 108 different food items. The devotees prepared these food items with great care and devotion. While the pujaris are preparing for the grand darshan of the Deities, the 11th and 12th class group, headed by Sanjay prabhu ji performed an amazing drama, the “Jarasandh Vadh”. Midnight worship was performed to the Deities, and everyone started to dance in jubilation. An excellent and luscious feast prasadam was served and distributed to all.<br><br>

The BGIS community has always been making painstaking endeavors to uphold the devotional legacy of inspirations to the students and to their families. Offering the Lord blissful cultural festivities such as Janmashtami. We would like to thank everyone for making this year’s Janmasthami celebration another success.<br>
to see images gallery <a href='https://www.flickr.com/photos/iskcon_bgis/albums/72157699542075331' target='_new'>click here</a>
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