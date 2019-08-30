<link href="css/noJS.css" rel="stylesheet" type="text/css" />
<link href="css/model.css" rel="stylesheet" type="text/css" />
<script type="text/javascript"  src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript"   src="js/superslide.2.1.js"></script>
<script type="text/javascript"  src="js/plugins.js"></script>
<script type="text/javascript"  src="js/scripts.js"></script>
<script type="text/javascript"  src="js/jquery.fancybox.js"></script>
<link href="css/events.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" charset="utf-8">
    var $ = jQuery.noConflict();
    $(window).load(function() {
    $('.flexslider').flexslider({
          animation: "fade"
    });
	
	$(function() {
		$('.show_menu').click(function(){
				$('.menu').fadeIn();
				$('.show_menu').fadeOut();
				$('.hide_menu').fadeIn();
		});
		$('.hide_menu').click(function(){
				$('.menu').fadeOut();
				$('.show_menu').fadeIn();
				$('.hide_menu').fadeOut();
		});
	});
  });
</script>
<script type="text/javascript"  src="js/jquery.leanModal.min.js"></script>
<script type="text/javascript">
			$(function() {
    			$('a[rel*=leanModal]').leanModal({ top : 230 , closeButton: ".modal_close" });
				 		
			});
		
		</script>
<script type="text/javascript"  src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-526f51d97a51ad23"></script>
<link rel="stylesheet" href="css/language-selector.css" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" media="all" href="css/initcarousel.css" />
<script type='text/javascript'  src='js/amazingcarousel.js'></script>
<script type='text/javascript'   src="js/initcarousel.js"></script>
<style>
.slider {
	width:100%;
	min-width:990px;
	height:350px;
	position:relative;
	overflow:hidden;
	background:#fff;
	text-align:center;
}
.slider .bd {
	width:980px;
	position:absolute;
	left:50%;
	margin-left:-490px
}
.slider .bd li {
	width:980px;
	overflow:hidden;
}
.slider .bd li img {
	width:980px;
	height:350px;
}
.slider .tempWrap {
	overflow:visible !important
}
.slider .tempWrap ul {
	margin-left:-980px !important;
}
.slider .hd {
	position:absolute;
	width:100%;
	left:0;
	z-index:1;
	height:8px;
	bottom:20px;
	text-align:center;
}
.slider .hd li {
	display:inline-block;
 *display:inline;
	zoom:1;
	width:8px;
	height:8px;
	line-height:99px;
	overflow:hidden;
	background:url(images/slider-btn.png) 0 -10px no-repeat;
	margin:0 5px;
	cursor:pointer;
	filter:alpha(opacity=60);
	opacity:0.6;
}
.slider .hd li.on {
	background-position:0 0;
	filter:alpha(opacity=100);
	opacity:1;
}
.slider .pnBtn {
	position:absolute;
	z-index:1;
	top:0;
	width:100%;
	height:335px;
	cursor:pointer;
}
.slider .prev {
	left:-50%;
	margin-left:-490px;
}
.slider .next {
	left:50%;
	margin-left:490px;
}
.slider .pnBtn .blackBg {
	display:block;
	position:absolute;
	left:0;
	top:0;
	width:100%;
	height:350px;
	background:#000;
	filter:alpha(opacity=50);
	opacity:0.9;
}
.slider .pnBtn .arrow {
	display:none;
	position:absolute;
	top:0;
	z-index:1;
	width:60px;
	height:335px;
}
.slider .pnBtn .arrow:hover {
	filter:alpha(opacity=60);
	opacity:0.6;
}
.slider .prev .arrow {
	right:0;
	background:url(images/slider-arrow.png) -120px 0 no-repeat;
}
.slider .next .arrow {
	left:0;
	background:url(images/slider-arrow.png) 0 0 no-repeat;}
	
	
 
#fvpp-blackout {
  display: none;
  z-index: 499;
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: #000;
  opacity: 0.5;
}

#my-welcome-message {
  display: none;
  z-index: 500;
  position: fixed;
  width: 36%;
  left: 30%;
  top: 20%;
  padding: 20px 2%;
  font-family: Calibri, Arial, sans-serif; 
}
 
#fvpp-close {
  position: absolute;
  top: 10px;
  right: 20px;
  cursor: pointer;
}

#fvpp-dialog h2 {
  font-size: 2em;
  margin: 0;
}

#fvpp-dialog p { margin: 0; }
#container {
  max-width: 1000px;
  margin: 0 auto;
  background: #EEE;
}
 
</style>
<script>
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
			   	    	  for (var y = 0; y < 6 ; y++) 
		   	         {                                        
     var newFirmDiv9 = '<li id="hero-lacrosse-success-for-queen-annes-students"><div> <img width="150" height="80" src="img/news/'+allData9.Event_image[y]+'" class="attachment-home-tab wp-post-image" alt="Lacrosse"></div>  <h3><a href="'+allData9.Event_url[y]+'">'+allData9.Event_heading[y]+'.</a></h3><p id="news-desc" style="font-size:13px; color:#000;">'+allData9.Event_description[y]+'</p></li><br/><br/><br/>';
                   $("ul#news-event").append(newFirmDiv9);
				      }

		},
		failure: function()
		{			
    	
		}	
});
var myDiv = $('#news-desc');
myDiv.text(myDiv.text().substring(0,300))
});
</script>

 
	

             
             
<div class="middlecontent" style="-webkit-box-shadow: 0px 1px 3px 0px rgba(50, 50, 50, 0.46);
-moz-box-shadow: 0px 1px 3px 0px rgba(50, 50, 50, 0.46);
box-shadow: 0px 1px 3px 0px rgba(50, 50, 50, 0.46);
padding: 20px 10px 20px 3px;">
    
   <!-- Please Cheeck  "my-welcome-message" scribe files -->
   <!--  <div id="my-welcome-message">

	          <img src="http://bgis.org/img/news/admission-1.jpg" width="537px">
	 </div> --> 
	 
	 
  <div class="indexleft">
    <section>
      <ul id="da-thumbs" class="da-thumbs">
        <li> <a href="aboutus/what-makes-us-special"> <img src="images/1.jpg"  width="220" height="220"/>
          <div><span  style="margin:10px; font-size:25px; text-align:left;">What makes 
            us special</span>
            <p style="padding-left:10px; color:#FFF; margin:0px;">• Global Environment.<br />
              • Digital class rooms.<br />
              • Teacher-student ratio.</p>
            <p style="padding-left:15px; color:#F00;">read more...</p>
          </div>
          </a> </li>
          
        <li> <a href="https://newbgis.org" target="_new"><img src="images/2.jpg" width="220" height="220" />
          <div><span style="margin:10px; font-size:25px; text-align:left;">New BGIS Campus</span>
            <p style="padding-left:10px; color:#FFF; margin:0px; font-size:13px; font-family:sansation; line-height:18px;">• Towards an University with a <br />
              difference.<br />
              • Spread over 60 acres<br />
              • 3 km from national highway<br />
            </p>
            <p style="padding-left:15px; color:#F00;">read more... </p>
          </div>
          </a> </li>
      </ul>
    </section>
    
  
        
        
    <div class="newsevents">
      <h1 style="font-size:24px; font-weight:900; color:#bf040d;margin-left: 16px;margin-bottom: -6px;">Latest Events</h1>
      <section id="home-tabs" style="background: none;">
        <div class="tab-container">
          <div id="tab1" class="tab-content" style="display: none;">
            <ul id="news-event">

            </ul>
            <!--<a href="http://www.bgis.org/latest" style="float: left; color:#000">View All Latest News</a> <a href="http://www.bgis.org/pdf/News Letter.pdf" style="float:right; color:#000">Download Newsletter</a> -->
 
 
           <!-- <a href="http://learngita.com/" target="_blank" style="float: left; color: #fff; background: #14366c;">Learn Gita</a> <a href="http://newbgis.org/" target="_blank" style="float: right; color: #fff; background: #950d31;">New BGIS</a>  -->
            
             </div>
          <div id="tab2" class="tab-content" style="display: block;">
            <ul>
            </ul>
            <a href="#" >View All Daily Bulletins</a> </div>
          <div id="tab3" class="tab-content" style="display: none;"> <a href="#" >View All Media News</a> </div>
        </div>
      </section>
    </div>
    <div class="down">&nbsp;</div>
  </div>
  <div class="indexright">
     <div class="welcome_index">
      <h1><span style="color:#cf0000">WELCOME TO BGIS</span></h1>
      <p><span style="color:#bf030d">The Bhaktivedanta Gurukula and International School (BGIS) </span>,<br/><span style="color:#000; font-size:13px;">Located in the beautiful holy land of Sri Vrindavan
                Dham, abode of Lord Krishna, BGIS offers the best of both worlds -  the traditional & the modern, the
                Vedic and the contemporary, the spiritual and the temporal.   As an International School, we offer the
                students the world class quality education.     Simultaneously students inculcate spiritual values
                based on teaching given in Bhagavad Gita. Thus,    the BGIS experience makes the student a well  
                balanced individual ready to take on life’s chanllenges
</span> <span style="font-size:12px; color:#a0030b; padding-left:10px;"><a href="http://bgis.org/pdf/BGIS_Intro_opt.pdf" target="_blank">read more...</a></span> </p>
    </div>
    <div class="downloadbgisbtn"><a href="http://bgis.org/admission#contactform"><img src="img/bgisdownloadbtn.jpg" width="486" height="60" /></a></div>
    <div class="rightindexbox">
      <section>
        <ul id="da-thumbs" class="da-thumbs">
          <li> <a href="/student"> <img src="images/3.jpg" width="220" height="220" />
            <div><span  style="margin:10px; font-size:25px; text-align:left;">Student LIfe</span>
              <p style="padding-left:10px; color:#FFF; margin:0px;">• Academics Education.<br />
                • Spiritual Education.<br />
                • Personal and Social Skills.<br />
                • Co-curriculum & Sports.<br />
                • Health and Safety.<br />
                • Sketching,modeling,painting</p>
              <p style="padding-left:15px; color:#F00;">read more...</p>
            </div>
            </a> </li>
          <li> <a href="/aboutus/campus-facilities"> <img src="images/4.jpg" width="220" height="220" />
            <div><span  style="padding-top:15px; padding-left:10px; margin:0px; font-size:25px; text-align:left;">Campus Facilities </span>
              <p style="padding-left:10px; color:#FFF; margin:0px;">• Eco Friendly Campus.
                Features.<br /> 
                • Indoor Outdoor sports .<br />
                • 24x7 security & medical care<br />
                • Well equipment science lab & IT lab<br />                 
              <p style="padding-left:15px; margin-top: 3px;color:#F00;">read more...</p>
            </div>
            </a> </li>
          <li> <a href="/faculty"> <img src="images/5.jpg" width="220" height="220" />
            <div><span  style="margin:10px; font-size:25px; text-align:left;">Faculty</span>
              <p style="padding-left:10px; color:#FFF; margin:0px;">
              
              <p style="padding-left:10px; color:#FFF; margin:0px;">• Dr. Lila Purusottama Das .<br />
                • Dr. Nirmal Krishna Das.<br />
                • V Lokeshwar Kumar.<br />
                • Dr. Madhumati Pushkarni Devi.<br />
                • Prashant Sinha.<br /> 
              <p style="padding-left:15px; color:#F00;margin-top: 4px;">read more...</p>
            </div>
            </a> </li>
          <li> <a href="/admissions/how-to-apply"> <img src="images/6.jpg" width="220" height="220" />
            <div><span  style="margin:5px; font-size:20px; text-align:left;">Parents
              Connection </span>
              <p style="padding-left:10px; color:#FFF; margin:0px;">
              
              <p style="padding-left:10px; color:#FFF; margin:0px;">• Admissions .<br />
                • How to apply.<br />
                • Eligibility.<br />
                • Tuition Fee.<br />
                • Financial Aid.<br />
                • Online Form.<br />
                • Parents login. </p>
              <p style="padding-left:15px; color:#F00;">read more...</p>
            </div>
            </a> </li>
        </ul>
      </section>


      <!-- Notice Board  -->
      <div class="down">&nbsp;</div>
      <div class="rightindexbox">
        <img src="images/bgis_what_new.jpg"  alt="Bgis" />
        <div class="amazingcarousel-item-container" style="margin-left: 5%; width: 95%; height: 200px;"> 
            <marquee onMouseOver="this.stop()" onMouseOut="this.start()" direction="up" scrollamount="2" style="height: 200px;"> 

              <div style="background: #FFF; padding: 1%"> 

                <p style="color: red; font-size: 20px"> For Admission Call Us at </p>
                <p style="font-size:18px; color:#000;">
                    Hare Krishna, <br> New Admissions selection started.<br><br>
                    <strong>Upcomming next admission dates will be :</strong>
                     <br>Saturday, 26  January 2019 | BGIS New Campus - Vrindavan<br> 
                         Sunday, 27  January 2019 | ISKCON mumbai<br>
                         Sunday, 03  february 2019 | East of Kailash - ISKCON delhi <br>
                         Sunday, 10  February 2019 | BGIS New Campus - Vrindavan <br>
                         Sunday, 24  February 2019 | BGIS New Campus - Vrindavan <br><br>
                       
                  For more information call us<br>
                  +91-7088004339<br>
                  +91-7088004342<br> 
                  E-mail : bgis.admissions@gmail.com<br>


                   <br>
                    <a href="https://newbgis.org/initiatetransfer"><img src="../img/online-admission-button.png"  height="80px" width="150px"/></a>
   

                 <!--  <p style="color: red; font-size: 20px">
                    Admissions open for classes 3-9 only <br>[ Next Admission Test ]
                  </p>
                  <p style="font-size:18px; color:#000;">
                  	18th March 2018<br>
                    25th March 2018 <br>  
                   <a href="http://bgis.org/admission#contactform"  style="text-decoration: underline;">15th April 2018 <img src="images/bgis-new.gif"></a></p> -->


              </div>

              <!--  <div style="background: #FFF; padding: 1%"> 
                  <p style="color: red; font-size: 20px">We are seeking applications from qualified teachers for the following subjects:</p>
                  <p style="font-size:18px; color:#000;">
                    <a href="http://bgis.org/latest">Maths   | Science | English <br> Music  | Hostel Warden  | Sports & Yoga</a><br> 

              </div> -->



              </marquee>
        </div>
      </div> 
        <!-- Notice Board  End -->






<div class="down">&nbsp;</div>
      <div class="eventsvideo">
    <div class="videogallery">
      <h1>Video Gallery</h1>
      <div id="amazingcarousel-container-7">
        <div id="amazingcarousel-7" style="display:block;position:relative;width:100%;max-width:420px;margin:0px auto 0px;">
          <div class="amazingcarousel-list-container" style="overflow:hidden;">
            <ul class="amazingcarousel-list">
            
            
            <li class="amazingcarousel-item">
                <div class="amazingcarousel-item-container">
                  <div class="amazingcarousel-image"><a href="https://www.youtube.com/watch?v=iykaCjLqceY" onClick="javascript:_gaq.push(['_trackEvent','outbound-article','http://www.youtube.com']);"   class="html5lightbox" data-group="amazingcarousel-1"><img src="images/bgis-new-campus.jpg"  alt="Bgis" /></a></div>
                  <div class="amazingcarousel-title">BGIS NEW CAMPUS</div>
                  <div class="amazingcarousel-description">New Campus Walk through of Bhaktivedanta Gurukula & Intertnational School, Vrindavan</div>
                </div>
             </li>



            <li class="amazingcarousel-item">
                <div class="amazingcarousel-item-container">
                  <div class="amazingcarousel-image"><a href="https://www.youtube.com/watch?v=t-IxLDlph80" onClick="javascript:_gaq.push(['_trackEvent','outbound-article','http://www.youtube.com']);"   class="html5lightbox" data-group="amazingcarousel-1"><img src="img/bgis_new_campus.jpg"  alt="Bgis" /></a></div>
                  <div class="amazingcarousel-title">NEW CAMPUS</div>
                  <div class="amazingcarousel-description">New Campus Walk through of Bhaktivedanta Gurukula & Intertnational School, Vrindavan</div>
                </div>
              </li>

              <li class="amazingcarousel-item">
                <div class="amazingcarousel-item-container">
                  <div class="amazingcarousel-image"><a href="https://www.youtube.com/watch?v=wKr0gI95Tg4" onClick="javascript:_gaq.push(['_trackEvent','outbound-article','http://www.youtube.com']);"   class="html5lightbox" data-group="amazingcarousel-1"><img src="img/bgisvideo6.jpg"  alt="Bgis" /></a></div>
                  <div class="amazingcarousel-title">Meet Guru Sharan@BGIS / BGIS Changing Lives</div>
                  <div class="amazingcarousel-description">Guru Sharan Aggarwal is an ex student of Gurukula, Vrindavan. who has recently completed his B-Tech & M Tech(Chemical). Here, he is sharing his experiences with BGIS. The values and discipline he has learnt in Gurukula.</div>
                </div>
              </li>

            <li class="amazingcarousel-item">
                <div class="amazingcarousel-item-container">
                  <div class="amazingcarousel-image"><a href="https://www.youtube.com/watch?v=wKr0gI95Tg4" onClick="javascript:_gaq.push(['_trackEvent','outbound-article','http://www.youtube.com']);"   class="html5lightbox" data-group="amazingcarousel-1"><img src="img/bgisvideo5.jpg"  alt="Bgis" /></a></div>
                  <div class="amazingcarousel-title">Nakul Neupane an Ex Gurukuli</div>
                  <div class="amazingcarousel-description">He did his commercial pilot training in United States from Pilot training academy, Miami. His message is for all the parents who are hoping a bright future for their kids.</div>
                </div>
              </li>





             <li class="amazingcarousel-item">
                <div class="amazingcarousel-item-container">
                  <div class="amazingcarousel-image"><a href="https://www.youtube.com/watch?v=_V9sdY2jfgE&feature=youtu.be" onClick="javascript:_gaq.push(['_trackEvent','outbound-article','http://www.youtube.com']);"   class="html5lightbox" data-group="amazingcarousel-1"><img src="http://bgis.org/img/news/admission-1.jpg"  alt="Bgis" /></a></div>
                  <div class="amazingcarousel-title">BGIS - NEW ADMISSIONS OPEN</div>
                  <div class="amazingcarousel-description">The Bhaktivedanta Gurukula and International School New Admissions 2018</div>
                </div>
              </li>
              
            
             <li class="amazingcarousel-item">
                <div class="amazingcarousel-item-container">
                  <div class="amazingcarousel-image"><a href="https://www.youtube.com/watch?v=9QCl2F3fvIE" onClick="javascript:_gaq.push(['_trackEvent','outbound-article','http://www.youtube.com']);"   class="html5lightbox" data-group="amazingcarousel-1"><img src="img/bgis-video.jpg"  alt="Bgis" /></a></div>
                  <div class="amazingcarousel-title">BGIS</div>
                  <div class="amazingcarousel-description">The Bhaktivedanta Gurukula and International School Patron of Education 3 </div>
                </div>
              </li>
                
              
            <li class="amazingcarousel-item">
                <div class="amazingcarousel-item-container">
                  <div class="amazingcarousel-image"><a href="https://www.youtube.com/watch?v=qd1JJNf68B4" onClick="javascript:_gaq.push(['_trackEvent','outbound-article','http://www.youtube.com']);"   class="html5lightbox" data-group="amazingcarousel-1"><img src="img/bgisvideonewcampus.jpg"  alt="Bgis" /></a></div>
                  <div class="amazingcarousel-title">New Campus</div>
                  <div class="amazingcarousel-description">New Campus Walk through of Bhaktivedanta Gurukula & Intertnational School, Vrindavan</div>
                </div>
              </li> 
              
              
              <li class="amazingcarousel-item">
                <div class="amazingcarousel-item-container">
                  <div class="amazingcarousel-image"><a href="https://www.youtube.com/watch?v=L_bOuyzc_es" onClick="javascript:_gaq.push(['_trackEvent','outbound-article','http://www.youtube.com']);"   class="html5lightbox" data-group="amazingcarousel-1"><img src="img/bgisvideo2.jpg"  alt="Bgis" /></a></div>
                  <div class="amazingcarousel-title">BGIS</div>
                  <div class="amazingcarousel-description">BGIS Krishna Balaram Ditey Visite</div>
                </div>
              </li>
              
              <li class="amazingcarousel-item">
                <div class="amazingcarousel-item-container">
                  <div class="amazingcarousel-image" ><a href="https://www.youtube.com/watch?v=PcsCCmV41Iw#t=276" onClick="javascript:_gaq.push(['_trackEvent','outbound-article','http://www.youtube.com']);"  class="html5lightbox" data-group="amazingcarousel-1"><img src="img/bgisvideo4.jpg"  alt="Bgis" /></a></div>
                  <div class="amazingcarousel-title">Bhaktivedanta Gurukul</div>
                  <div class="amazingcarousel-description">Dance Performed by Gurukul Children.</div>
                </div>
              </li>
              <li class="amazingcarousel-item">
                <div class="amazingcarousel-item-container">
                  <div class="amazingcarousel-image" ><a href="https://www.youtube.com/watch?v=iYd3tzyNFas" onClick="javascript:_gaq.push(['_trackEvent','outbound-article','http://www.youtube.com']);"  class="html5lightbox" data-group="amazingcarousel-1"><img src="img/bgisvideo3.jpg"  alt="Bgis" /></a></div>
                  <div class="amazingcarousel-title">Bhaktivedanta Gurukul</div>
                  <div class="amazingcarousel-description">The Need of the Hour - "COMPLETE EDUCATION"</div>
                </div>
              </li>
              <li class="amazingcarousel-item">
                <div class="amazingcarousel-item-container">
                  <div class="amazingcarousel-image" ><a href="https://www.youtube.com/watch?v=rdlfH3lrIUQ" onClick="javascript:_gaq.push(['_trackEvent','outbound-article','http://www.youtube.com']);"  class="html5lightbox" data-group="amazingcarousel-1"><img src="img/bgisvideo.jpg"  alt="Bgis" /></a></div>
                  <div class="amazingcarousel-title">BGIS documentary</div>
                  <div class="amazingcarousel-description">best of both worlds - the traditional and the modern</div>
                </div>
              </li>
              <li class="amazingcarousel-item">
                <div class="amazingcarousel-item-container">
                  <div class="amazingcarousel-image"><a href="https://www.youtube.com/watch?v=YqfTVIDBWdc" onClick="javascript:_gaq.push(['_trackEvent','outbound-article','http://www.youtube.com']);"   class="html5lightbox" data-group="amazingcarousel-1"><img src="img/bgisvideo2.jpg"  alt="Bgis" /></a></div>
                  <div class="amazingcarousel-title">BGIS documentary</div>
                  <div class="amazingcarousel-description">best of both worlds - the traditional and the modern</div>
                </div>
              </li>
              
            </ul>
          </div>
          <div class="amazingcarousel-prev"></div>
          <div class="amazingcarousel-next"></div>
          <div class="amazingcarousel-nav"></div>
          <div class="amazingcarousel-engine" style="display:none;"><a href="#" >JavaScript Image Scroller</a></div>
          <div class="amazingcarousel-engine" style="display:none;"><a href="#" >WordPress Scroller</a></div>
        </div>
      </div>
    </div>
    
  </div>
      
    </div>
  </div>
  
</div>
</div>

<script src="js/jquery.firstVisitPopup.js"></script>

<script type="text/javascript">
jQuery(".slider .bd li").first().before( jQuery(".slider .bd li").last() );
jQuery(".slider").hover(function(){
	 jQuery(this).find(".arrow").stop(true,true).fadeIn(300) 
	 },function(){ 
	 	jQuery(this).find(".arrow").fadeOut(500) });				
	 jQuery(".slider").slide(
	 	{ titCell:".hd ul", mainCell:".bd ul", effect:"leftLoop",autoPlay:true, vis:3,autoPage:true, trigger:"click"}
	);
</script> 

<a id="go" rel="leanModal" name="signup" style="display:none" href="#signup"  >With Close Button</a>
<div id="signup" style="height:368px !important;">
  <div id="signup-ct"> <a href="http://www.bgis.org/pdf/Invitation.pdf">
  <img src="img/invitation.jpeg" width="410" height="370" /></a> <a class="modal_close" href="#"></a> </div>
</div>

<script>
	// $(function () {
	// 	$('#my-welcome-message').firstVisitPopup({
	// 		cookieName : 'homepage',
	// 		showAgainSelector: '#show-message'
	// 	});
	// });
</script>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>