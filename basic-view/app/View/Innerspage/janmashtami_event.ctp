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
			               <li><a href="/result" class="active">BGIS Students Get Top Exam Results.</a></li>
			               <li><a href="/nirmaan" >Grand Nirmaan Subharambha Ceremony of BGIS New Campus</a></li>
			               <li><a href="/competition6" >Visit of Chief Minister of UP to ISKCON Vrindavan</a></li>
			               <li><a href="/competition5">Gaura Purnima Celebrations at BGIS</a></li>
				       <li><a href="/competition4" >Sport Day: Lets Play</a></li>
				       <li><a href="/competition3" >Mission: Clean Virndavan</a></li>
			               <li><a href="/competition2" class="active" >Gita Jayanti celebrated in BGIS</a></li> 
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
         <h2 style="color:#656567;">BGIS-Vrindavan Janmashtami Festival 2017</h2>
          <br/>
         <div class="imagezoom">
              <p>
<a class="fancybox" href="img/janmashtami/g1.JPG" data-fancybox-group="gallery" ><img src="img/janmashtami/g1.JPG" alt="" style="width: 233px;height: 160px;"/></a>

<a class="fancybox" href="img/janmashtami/g2.JPG" data-fancybox-group="gallery" ><img src="img/janmashtami/g2.JPG" alt="" style="width: 233px;height: 160px;" /></a>
<a class="fancybox" href="img/janmashtami/g3.JPG" data-fancybox-group="gallery" ><img src="img/janmashtami/g3.JPG" alt="" style="width: 233px;height: 160px;"/></a> 

	       </p>
          </div>
        </div>
        <div class="down">&nbsp;</div>
        <p style="margin-left:10px; text-align:justify">


       Sri Krishna Janmashtami was celebrated with utter enthusiasm in full grandeur at Bhaktivedanta Gurukula  and International School in Vrindavan. Students, teachers, staffs, parents, guests and devotees from different parts of the world gathered in school campus ground for this most awaited event. Organizers prepared few months ahead and their efforts finally culminate when the day of Lord Krishna’s appearance finally arrived. To commence the event’s program, the toddlers from Krsna Balaram Preschool performed a dance number and recited some slokas from Bhagavad-Gita. These tiny tots looked adorable with their colorful costumes. Srikant prabhu lead the invocation of mangalacaran prayer and followed by his primary student’s kirtan; they sang the “choti choti ghaiya chote chote gwal” and other cute songs remembering little Krishna’s pastimes. Our school principal Harikesh Prabhu delivered the welcome speech and he reminded us the significance of Sri Krishna Janmashtami.  Gurukula boy’s troupe started the presentations with their oddissa dance performance.  A heartwarming drama on the life of Madhavendra Puri followed; the students of Bhaktivedanta Vaishnavi Gurukula for the girls in Nandgaon performed a beautiful dance presentation. Then the gurukula boys got back on the stage with another drama about how the chanting of the holy name of Lord Krishna spread all over the world, beginning from the era of Lord Chaitanya Mahaprabhu up to Srila Prabhupada.  <br>
		Raghunath Das prabhu introduced the audience about the free gurukula school for the girls in Nandgaon. Then the girls offered another soul-touching drama; the story of Ashishwar Mahadev in Nandgaon during Lord Krishna’s childhood pastimes. After these amazing presentations from gurukul girls the boys gave a dance performance in glorification of Lord Vittal. The Project Manager of New Construction site of Gurukula and ex vice Principal Radhakanta Prabhu enlightened everyone with his short speech on the Advent of Lord Krishna. The night seems endless with numerous acts from the gurukula boys; they presented the story of the” Killing of King Kamsa”, “Krishna Dance”, “Martial Arts Dance” and a special dance by secondary students that amazed and spell-bound the audience with their acrobatic show.<br>
		At around 11 in the evening the grand ceremonial bathing of Radha and Krishna took place on the stage. They were anointed with fragrant oils and were bathed with auspicious items like milk, yogurt, ghee, honey, sweet water and fresh juices. The devotees and guests took part in the abhisek as they line one by one to bathe the Lord. After the bathing ceremony, about 108 preparations were offered to the Lord. <br>
		Laksmi Narayan Chaudhary the U.P. Cabinet Minister gave an inspirational address and he was so appreciative by the activities of ISKCON and he glorifies Srila Prabhupada for his great and wonderful achievements. The minister lead the awarding of certificates of appreciation and recognition for BGIS students who topped the 2017 ISC and ICSE Board Exams.  Before greeting the deities and puja; the boys invaded the stage with another devotional song presentation with amplified acoustic guitar and electric keyboard followed by a drama on the “Life of Kamsa”.  <br>
		The midnight approached, time for the Aarti Puja of the Lord and to conclude this memorable event; non-grain Prasad were distributed to all who came for Lord Krishna’s Feast. It was a wonderful Janmashtami experienced for everyone and we hope to see you all again next year; thank you so much for coming. We would like to express our heart-felt gratitude to all the students, staffs, teachers and volunteers that made this celebration a real success. May Lord Krishna shower his blessings to everyone!





		  
</p>
         <div class="down">&nbsp;</div>
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