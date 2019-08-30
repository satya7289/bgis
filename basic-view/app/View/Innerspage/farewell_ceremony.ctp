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
			               <li><a href="/farewell-ceremony" class="active">Farewell Ceremony - 2018</a></li>
			               <li><a href="/nityananda-trayodashi-2018" >Nityananda Trayodashi - 2018</a></li>
			               <li><a href="/mayapuri"  >Mayapur Spiritual Retreat </a></li>
			               <li><a href="/result" >BGIS Students Get Top Exam Results.</a></li>
			               <li><a href="/nirmaan" >Grand Nirmaan Subharambha Ceremony of BGIS New Campus</a></li>
			               <li><a href="/competition6" >Visit of Chief Minister of UP to ISKCON Vrindavan</a></li>
			               <li><a href="/competition5">Gaura Purnima Celebrations at BGIS</a></li>
				       <li><a href="/competition4" >Sport Day: Lets Play</a></li>
				       <li><a href="/competition3" >Mission: Clean Virndavan</a></li>
			               <li><a href="/competition2"  >Gita Jayanti celebrated in BGIS</a></li> 
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
         <h2 style="color:#656567;">BGIS Vrindavan Graduation Day 2018</h2>
          <br/>
         <div class="imagezoom">
              <p>
<a class="fancybox" href="img/farewell-ceremony/fc-18_01.jpg" data-fancybox-group="gallery" ><img src="img/farewell-ceremony/fc-18_01.jpg" alt="BGIS-FAREWELL_2018" style="width: 233px;height: 160px;"/></a>
<a class="fancybox" href="img/farewell-ceremony/fc-18_02.jpg" data-fancybox-group="gallery" ><img src="img/farewell-ceremony/fc-18_02.jpg" alt="BGIS-FAREWELL_2018" style="width: 233px;height: 160px;" /></a>
<a class="fancybox" href="img/farewell-ceremony/fc-18_03.jpg" data-fancybox-group="gallery" ><img src="img/farewell-ceremony/fc-18_03.jpg" alt="BGIS-FAREWELL_2018" style="width: 233px;height: 160px;"/></a>
<a class="fancybox" href="img/farewell-ceremony/fc-18_04.jpg" data-fancybox-group="gallery" ><img src="img/farewell-ceremony/fc-18_04.jpg" alt="BGIS-FAREWELL_2018" style="width: 233px;height: 160px;"/></a>
<a class="fancybox" href="img/farewell-ceremony/fc-18_05.jpg" data-fancybox-group="gallery" ><img src="img/farewell-ceremony/fc-18_05.jpg" alt="BGIS-FAREWELL_2018" style="width: 233px;height: 160px;" /></a>
<a class="fancybox" href="img/farewell-ceremony/fc-18_06.jpg" data-fancybox-group="gallery" ><img src="img/farewell-ceremony/fc-18_06.jpg" alt="BGIS-FAREWELL_2018" style="width: 233px;height: 160px;"/></a>

	       </p>
          </div>
        </div>
        <div class="down">&nbsp;</div>
        <p style="margin-left:10px;"> 


        	Once again ‘Bhaktivedanta Gurukul & International School (BGIS)’ Vrindavan marked the end of the academic year by celebrating its 41stannual graduation ceremony with 20 students from the 12thclass receiving their graduation certificate on Monday 5th March.BGIS organized agrand ceremony for students who have given their best to come out in flying colours.<br> 
			Following the footsteps and learnings from AC Bhakitivedanta Swami Srila Prabhupada, the program started with a wonderful kirtan and invocation prayers from the group lead by Sanjay Prabhu.<br>
			Senior class students arrived soon after and welcomed their parents and teachers with garlands thanking them for their constant effortand motivation. Welcoming all,Principal Harikesh Prabhu congratulated all the students and encouraged them to recollect their learnings, experiences and memories in Gurukula which will keep them motivated for a better future ahead.
			HG Pancha Gauda Prabhu (President of Iskcon Temple, Vrindavan)thanked everyone to keep him engaged in the services of Gurukula. He further thanked all for the efforts in providing an opportunity to studentsto sing andchant the Holy Names of the Lordand read ‘Bhagavad Gita’. He wished the newly graduates with all the best in their lives.
			HH Bhakti Anugraha Janardan Maharaj humbly appealed new graduates to remember Vrindavan forever in their hearts and to carry the same energy wherever they go. He mentioned about the famous quote in Philippines, "A person who does not remember where he came from will never reach his destination."<br>
			Later during the ceremony, 11th class students gave memento to their12th class seniors. The senior students too awarded white uniforms to the new 9th class students, a symbol of seniority and responsibility. There after new graduates shared their memories one by one and expressed their honour andgratitude towards Srila Prabhupada, faculties and friends at BGIS. One of the fresh graduates, Rishi Parashar wrote an amazing poem about his life in Gurukula:</p>
			<h2 style="color:#656567;" align="center">School Life</h2>
			<p style="margin-left:10px;" align="center"> 

			<i >School is a daily routine for us <br>
			In the morning, we're sure to make a fuss <br>
			Even when the sun is still not up, <br>
			Here we are, awake at 6am sharp. <br> <br>
			We feel that school is such a bore <br>
			We feel that school is such a chore <br>
			Parents say. "School is great! Now, go!" <br>
			We say, "Well. What do you know?" <br> <br>
			Late a minute we have to run <br>
			Eyes half open, shoelaces undone <br>
			We reach school and we see our friends, <br>
			Immediately, the torture ends <br> <br>
			We have a chat and go with the flow <br>
			Then the bell rings, it is time to go <br>
			We may at times find school stressful <br>
			To have some fun, we have to bend some rules <br> <br>
			Talk back to teachers, and detention we serve <br>
			No doubt, it is sometimes what we deserve <br>
			Sometimes they are as cold as ice <br>
			And other times they are actually really nice <br> <br>
			They teach us and give us a helping hand <br>
			They're forever ready to listen and be a friend <br>
			They have built much confidence in us <br>
			Just not when they are being really harsh <br> <br>
			Over the years of education <br>
			Never have we had so much learning with action <br>
			Such as camps, experiments, concerts and activities <br>
			We've learnt so much and even saved the trees <br> <br>
			A wise teacher once said aloud- <br>
			Success is failure turned inside out <br>
			So stick to the fight when you're hardest hit <br>
			Rest if you must, but don't you quit <br> <br>
			Some may see school as a torture chamber <br>
			Some cannot wait for the holidays in December <br>
			But it depends on how we look at school <br>
			Honestly, positively, school is cool! <br> </i> </p>

			<p style="margin-left:10px;">
			BGISfaculty members tooappreciated their students for their hard work and dedication. Raghunath Prabhu motivated them to always possess positive attitude in life. He also asked the students to never forget the love and affection they have received from their seniors because they will never get that same environment outside Grukula.Jaya Dayini Mataji too shared some of her experiences with the students, requesting them to keep in touch regarding their progress in life.<br><br>
			This was concluded by magnificent song and other performances by the 12th class students. This was followed by pleasant exchanges between teachers and students and some were quite emotional.There were fixed feelings in the air of moving on to a new life and leaving behind the Gurukul family.<br>
			BGIS congratulates all the new graduates and wishing them every success for their future endeavours. May Krishna's graces be with you all as you move onto the next stage in your life.

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