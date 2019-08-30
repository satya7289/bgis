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
			               <li><a href="/nityananda-trayodashi-2018" class="active">Nityananda Trayodashi - 2018</a></li>
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
         <h2 style="color:#656567;">Nityananda Trayodashi 2018 at BGIS Vrindavan</h2>
          <br/>
         <div class="imagezoom">
              <p>
<a class="fancybox" href="img/nityananda-trayodashi/nt_01.jpg" data-fancybox-group="gallery" ><img src="img/nityananda-trayodashi/nt_01.jpg" alt="" style="width: 233px;height: 160px;"/></a>
<a class="fancybox" href="img/nityananda-trayodashi/nt_02.jpg" data-fancybox-group="gallery" ><img src="img/nityananda-trayodashi/nt_02.jpg" alt="" style="width: 233px;height: 160px;" /></a>
<a class="fancybox" href="img/nityananda-trayodashi/nt_03.jpg" data-fancybox-group="gallery" ><img src="img/nityananda-trayodashi/nt_03.jpg" alt="" style="width: 233px;height: 160px;"/></a>
<a class="fancybox" href="img/nityananda-trayodashi/nt_04.jpg" data-fancybox-group="gallery" ><img src="img/nityananda-trayodashi/nt_04.jpg" alt="" style="width: 233px;height: 160px;"/></a>
<a class="fancybox" href="img/nityananda-trayodashi/nt_05.jpg" data-fancybox-group="gallery" ><img src="img/nityananda-trayodashi/nt_05.jpg" alt="" style="width: 233px;height: 160px;" /></a>
<a class="fancybox" href="img/nityananda-trayodashi/nt_06.jpg" data-fancybox-group="gallery" ><img src="img/nityananda-trayodashi/nt_06.jpg" alt="" style="width: 233px;height: 160px;"/></a>

	       </p>
          </div>
        </div>
        <div class="down">&nbsp;</div>
        <p style="margin-left:10px;"> 
            
The BGIS celebrated yesterday the most auspicious appearance day of Lord Nityananda, also known as Nityananda Trayodashi. Lord Nityananda is an eternal associate of Lord Chaitanya Mahaprabhu. Lord Nityanada is the most magnanimous expansion of Lord Sri Krishna, and who is none different from Lord Balaram. Lord Nityananda is the adi guru, the first guru, and He is worshiped as the most merciful incarnation of Godhead. <br><br>

The celebration began with the invocation (Mangala-charan prayers) headed by Srikanta Prabhu and his group, followed by the recitation of Sri Nityanandastakam and bhajans from Middle Schools. The Gurukula boys offered a wonderful song for the pleasure of Lord Nityananda, they sang the “Akrodha Paramananda Nityananda Raya”.  In this song Srila Locana Das Thakur writes, “The noble Lord Nityananda is never angry, for He is the personification of supreme transcendental bliss. Devoid of any concept of false ego, Nitai wanders about the town. Going from door to door in the residences of the most fallen and wretched souls, He freely distributes the gift of the Hari-nama mahamantra.” <br><br>

The program continued with a drama offering from Primary Schools. They performed the most famous pastime of Lord Nityananda, “The Deliverance of Jagai and Madhai”. This drama showed us the magnanimous nature of Nityananda Mahajan. He appeared on Earth primarily to deliver the most fallen souls by inducing them to chant the holy name of Krishna. The Lord is known for being merciful, benevolent and kind towards all living entities. He does not discriminate between pious, impious, black or white, rich or poor, male or female, animal or human. No matter who we are, what we did in the past, The Lord freely gives the Holy Name. The BGIS matajis (teachers and staffs) graced the stage by a beautiful rendition of a vaisnava song glorifying Lord Nityananda and Lord Gauranga; they sang the, “Amar Nitai Mile Na”. <br><br>

Harikesh prabhuji our school principal gave an excellent class about the birth and pastime of Lord Nityananda.  He narrated the first meeting of Lord Nityananda and Lord Chaitanya Mahaprabhu.  Harikesh prabhu explained, “Lord Nityananda appeared about twenty years before the appearance of Caitanya Mahaprabhu. Without the mercy of Lord Nityananda one cannot get the mercy of Lord Sri Caitanya Mahaprabhu. One must take  shelter of the lotus feet of Lord Nityananda Prabhu, for He is the original spiritual master. It is by the mercy of Nitai that we can obtain love of Krishna.” He also inspired everyone to be an instrument to propagate the Sankirtan mission of the Lord and take part in spreading Krishna consciousness all over the world. <br><br>

A grand ceremonial bath was performed for Sri Sri Gaura-Nitai.  Several sets of Gaura-Nitai deities were placed in the altar for the abhisekam. Raghunath prabhu headed the bathing ceremony and was assisted by Gurukula students. The Deities were given a sandal oil massage. After the massage the Deities were bathed with panchagavya, which is a combination of milk, yogurt, sweetened water, ghee and honey. Their Lordship were then bathed with herbal extracts, scented water, exotic fruit juices, flowers, etc.  The students from 3rd, 4th and 5th class recited the Brahma Samhita prayers during the abhisekam.<br><br>

During the Raj-Bhoga offering, we had witnessed an amazing performance from the 9th grade students under the direction of Sanjay Prabhu. The drama is about how Lord Nityananda showered his causeless mercy to liberate the worshipers of Kali Mata. The highlight of the story is when one of the students dressed like the goddess Kali. Everyone was struck with awe and applauded the group’s presentation. After this astonishing drama the Maha-arati followed. The Gaura-Nitai deities were gorgeously decorated with flowers and ornaments. It brought joy into the hearts of the assembled devotees, causing an ecstatic and enthusiastic kirtan to ensue, thus inspiring everyone to dance in bliss. The Gurukula boys jubilantly jumped and chanted Nitai, Nitai, Nitai Gauranga!<br><br>

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