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
			                <li><a href="/mayapuri" class="active" >Mayapur Spiritual Retreat </a></li>
			               <li><a href="/result" >BGIS Students Get Top Exam Results.</a></li>
			               <li><a href="/nirmaan" >Grand Nirmaan Subharambha Ceremony of BGIS New Campus</a></li>
			               <li><a href="/competition6" >Visit of Chief Minister of UP to ISKCON Vrindavan</a></li>
			               <li><a href="/competition5">Gaura Purnima Celebrations at BGIS</a></li>
				       <li><a href="/competition4" >Sport Day: Lets Play</a></li>
				       <li><a href="/competition3" >Mission: Clean Virndavan</a></li>
			               <li><a href="/competition2" >Gita Jayanti celebrated in BGIS</a></li> 
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
         <h2 style="color:#656567;">Mayapur Spiritual Retreat </h2>
          <br/>
         <div class="imagezoom">
              <p>
<a class="fancybox" href="demo/dc1.jpg" data-fancybox-group="gallery" ><img src="demo/dc1.jpg" alt="" style="width: 233px;height: 160px;"  /></a>
<a class="fancybox" href="demo/dc2.jpg" data-fancybox-group="gallery" ><img src="demo/dc2.jpg" alt="" style="width: 233px;height: 160px;"  /></a>
<a class="fancybox" href="demo/dc3.jpg" data-fancybox-group="gallery" ><img src="demo/dc3.jpg" alt=""  style="width: 233px;height: 160px;" /></a>
<a class="fancybox" href="demo/dc4.jpg" data-fancybox-group="gallery" ><img src="demo/dc4.jpg" alt=""  style="width: 233px;height: 160px;" /></a>
<a class="fancybox" href="demo/dc5.jpg" data-fancybox-group="gallery" ><img src="demo/dc5.jpg" alt="" style="width: 233px;height: 160px;"  /></a>
<a class="fancybox" href="demo/dc6.jpg" data-fancybox-group="gallery" ><img src="demo/dc6.jpg" alt="" style="width: 233px;height: 160px;"  /></a>


	       </p>
          </div>
        </div>
        <div class="down">&nbsp;</div>
        <p style="margin-left:10px;">Bhaktivedanta Gurukula & International School had its annual spiritual retreat this May 2015 in Sridham Mayapur.  The retreat was from 19th May till 26th May 2015. This year the retreat was planned for classes 7-12. However, in the coming years we are planning to take the junior classes as well.
The journey began from the very early hours of 18th May at around 2 am. Students, staff and families of staff boarded the buses early in the morning to catch our train at 4:30am.  Everything went well with the helping hand of our sports teachers Yogesh prabhu, Gaur Prabhu and other staff. <br/><br/>
Although the journey was formidably a long one, of more than 30 hours and the weather was unpleasantly sultry, it became transcendental with delicious prasadam from Jhansi and Allahabad ISKCON temples combined with ecstatic kirtans. Students joyfully participated in singing and we had a little ‘train sankirtan’ that helped beat the heat!<br/><br/>
The 8 day retreat was filled with extraordinary transcendental delights.  Students and teachers were up as early as 3am every day to chant and attend mangal aratik darshan of the beautiful Sri Sri Radha Madhava, Sri Panchatatva and Sri Sri Narasimha Dev at the beautiful Mayapur Chandrodaya mandir. This was followed by memorizing the Bhagavat Gita shlokas. One would assume that verses were to be memorized by students alone but that was not to be. Teachers were also assigned with verses to memorize and it was such fun to see teachers raking their brains to memorize verses! 
After this came the most interesting part of the day, the “Hare Krishna Therapy”, designed by our director HG Lila Purushotham Prabhuji.  It is a specialized therapy for relaxation of the body and mind for all students and teachers.  It was full of fun.  Prabhuji was strict on both attendance and participation but the results were awesome.  Everyone enjoyed the session.<br/><br/>
Soon after the session everyone rushed to the lecture hall to listen to some nectarean pastimes of Chaitanya Bhagavata given by HG Krishnananda Prabhuji. With his unique humorous style he would transfer us to the era of Mahaprabhu and mentally take us around all those places of Navadwip, Mayapur and other places where the sweet pastimes of Gauranga took place.  This journey continued everyday for almost 2 hours for 8 days without break.  <br/><br/>
There would be a nourishing, sattvik breakfast after class followed by rest. It was time then for the English camp to begin at 11am where the goal was to improve students’ writing skills, vocabulary and grammar.  Students were segregated into groups class wise and had their sessions till 1:30pm.  After this they had sumptuous lunch prasadam and a relaxing nap and rest till 5pm.  <br/><br/>
However, there was no time for the teachers and other support staff to relax as there was a philosophical Chaitanya Caritamrita class by HG Lila Purushotham prabhuji at 3:30 pm for them. This was far from being taxing. The classes were highly informative, thought provoking and nourishing through which our understanding of Gaudiya siddhanta  as explained in the Caitanya Caritamrta by Krishna Das Kaviraj Gosvami became much clearer.<br/><br/>
At 5 pm we had the much awaited climax of the day, the Ganga Snan! All students and staff had a joyful dip in the holy Ganges, which was not only purifying but highly relaxing.  Ganga matha is so merciful that by just remembering her we have the benefit of getting purified, what to speak of taking a dip in her that too in the most sacred of all places, Mayapur dham.<br/><br/>
Dinner prasadm was served between 7 pm – 8 pm and after dinner all of us retired for the much deserved good night’s sleep forgetting the humidity and the mosquitoes, immersed in thoughts of Panchatatva and Their beautiful past times.
On 26th of May, the last day of the retreat, there was a written exam for both students and staff to assess how much each of us had learnt and assimilated during those 8 days. It sent us teachers back to our student days and taking such a unique exam was a unique experience indeed! In the evening there was a grand finale of our retreat in the auspicious presence of HH Purushotham Swami Maharaj.  Maharaj gave a lecture on the magnanimity of the dham and some past times of Mahaprabhu.  Students and teachers chanted the Gita shlokas which they had memorized during the retreat and the kids performed a nice drama for the pleasure of Sri Sri Radha Madhava.  <br/><br/>
On 27th May after mangala aratik and quick breakfast all of us boarded buses heading to Kolkatta for the return trip to Vrindavan Dham. Many students expressed their desire to prolong the retreat at least for a couple of days despite all the discomfort of the heat and sweat! Dham to Dham we sailed with joyous memories to hold and to cherish, looking forward to the next retreat in the beautiful place called Mayapur.  

		  
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