<?php 
$message = "";

if(isset($_POST['btn'])) {
   $name = $_POST['name'];
   $mobile = $_POST['mobile'];
   $email = $_POST['email'];

   $to = "ms@emazingideas.com";
   $subject = "New Registration Query - BGIS";
    
    
     
$txt = "Dear Sir/Madam, \n  New Registration Query :
    \n Name : $name \n Mobile Number : $mobile \n Email ID : $email"; 
     


$headers = "From:".$email . "\r\n" .
"CC: bgisreport@gmail.com";

 
$servername = "localhost";
$username = "bgisoclu_leds";
$password = "~&P2t*#p2!6g";
$dbname = "bgisoclu_online_leds";
		

 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO admission_camping (name, mobile, email)
VALUES ('$name', '$mobile', '$email')";

 if ($conn->query($sql) === TRUE) {
  mail($to,$subject,$txt,$headers);
  $message ="Thank You for your Information.<br>
  Our Team will contact you soon.<br>
  Thanks & Regards<br>
  Team<br>
  BGIS<br><br> 
  You will be redirected after 5 seconds.";
   header('Refresh: 5; url=http://bgis.org'); 
} else {
    $message =  "Please Enter Valid Information Maybe your mobile Number already Registed ";
}

$conn->close();


}
?>






<!DOCTYPE html>
<html lang="zxx">
<head>
<title>BGIS</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="bgis, school" />
<link rel="stylesheet" href="css/bootstrap.css">
<!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!-- Style-CSS -->
<link rel="stylesheet" href="css/font-awesome.css">
<!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="css/swipebox.css">
<link rel="stylesheet" href="css/jquery-ui.css" />
<!-- //css files -->
<!-- online-fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/demo.css" />

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KM4BTWX');</script>
<!-- End Google Tag Manager -->



<style>
table {
	border-collapse: collapse;
	border-spacing: 0;
}
fieldset, img {
	border: 0;
}
input {
	border: 1px solid #b0b0b0;
	padding: 3px 5px 4px;
	color: #979797;
	width: 190px;
}
address, caption, cite, code, dfn, th, var {
	font-style: normal;
	font-weight: normal;
}
ol, ul {
	list-style: none;
}
caption, th {
	text-align: left;
}
h1, h2, h3, h4, h5, h6 {
	font-size: 100%;
	font-weight: normal;
}
q:before, q:after {
	content: '';
}
abbr, acronym {
	border: 0;
}
/* Flexible Slide-to-top Accordion Style*/
.wrapper {
	width: 90%;
	max-width: 800px;
	margin: 0px auto;
}
.st-accordion {
	width: 100%;
	min-width: 270px;
	margin: 0 auto;
}
.st-accordion ul li {
	height: 100px;
	border-bottom:1px solid #dcdcdc;
	border-top: 1px solid #fff;
	overflow: hidden;
}
.st-accordion ul li:first-child {
	border-top: none;
}
.st-accordion ul li > a {
	text-shadow: 1px 1px 1px #fff;
	font-size: 46px;
	display: block;
	position: relative;
	line-height: 100px;
	outline: none;
	-webkit-transition: color 0.2s ease-in-out;
	-moz-transition: color 0.2s ease-in-out;
	-o-transition: color 0.2s ease-in-out;
	-ms-transition: color 0.2s ease-in-out;
	transition: color 0.2s ease-in-out;
	color: #6e6e6e;
	font-weight:200;
}
.st-accordion ul li > a span {
	background: transparent url(img/down.png) no-repeat center center;
	text-indent: -9000px;
	width: 26px;
	height: 14px;
	position: absolute;
	top: 50%;
	right: -26px;
	margin-top: -7px;
	opacity: 0;
	-webkit-transition: all 0.2s ease-in-out;
	-moz-transition: all 0.2s ease-in-out;
	-o-transition: all 0.2s ease-in-out;
	-ms-transition: all 0.2s ease-in-out;
	transition: all 0.2s ease-in-out;
}
.st-accordion ul li > a:hover {
	color: #ec3136;
}
.st-accordion ul li > a:hover span {
	opacity: 1;
	right: 10px;
}
.st-accordion ul li.st-open > a {
	color: #ec3237;
}
.st-accordion ul li.st-open > a span {
	-webkit-transform: rotate(180deg);
	-moz-transform: rotate(180deg);
	transform: rotate(180deg);
	right: 10px;
	opacity: 1;
}
.st-content {
	padding: 5px 0px 30px 0px;
}
.st-content p {
	font-size: 15px;
	line-height: 28px;
	padding: 0px 4px 15px 4px;
	font-style:italic;
}
.st-content p:before {
    content: "•";
    margin: 0 1rem 0 0;
    color: #b1b1b1;
    font-size: 25px;
}
.st-content img {
	width: 125px;
	border-right: 1px solid #fff;
	border-bottom: 1px solid #fff;
}
.accord-1{font-size: 24px;
    text-transform: uppercase;
    font-weight: 900;}
	
@media screen and (max-width: 320px) {
.st-accordion ul li > a {
	font-size: 36px;
}
.flex-direction-nav {
    display: none;
}

}
</style>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" charset="utf-8">
    var $ = jQuery.noConflict();
    $(window).load(function() {
    $('.flexslider').flexslider({
          animation: "slide"
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
</head>


<body>
    

    <!-- Start of LiveChat (www.livechatinc.com) code 
<script type="text/javascript">
window.__lc = window.__lc || {};
window.__lc.license = 10596492;
(function() {
  var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
  lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
})();
</script>
<noscript>
<a href="https://www.livechatinc.com/chat-with/10596492/" rel="nofollow">Chat with us</a>,
powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a>
</noscript>
<!-- End of LiveChat code -->



    
<!-- banner -->
<div class="main_section_agile" id="home">
  <h1><a class="navbar-brand" href="index.html"><img src="img/bgis-logo.png"></a></h1>
</div>
<!-- banner -->
<div class="about-bottom">
  <div class="col-md-6-0 w3l_about_bottom_left">
    <div class="video-grid-single-page-agileits">
      <div id="video"><div class="slider_container">
		<div class="flexslider">
	      <ul class="slides">
	    	<li>
	    		<a href="#"><img src="img/banner1.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>ADMISSION OPEN
</h2><p>INDIA’S LARGEST GURUKULA</p></div>
                </div>
	    	</li>
	    	<li>
	    		<a href="#"><img src="img/banner2.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>ADMISSION OPEN
</h2><p>PHYSICALLY FIT, MENTALLY ALERT, SPIRITUALLY CONNECTED</p></div>
                </div>
	    	</li>
	    	<li>
	    		<a href="#"><img src="img/banner3.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>ADMISSION OPEN
</h2><p>ISKCON’S ONLY RESIDENTIAL SCHOOL IN INDIA</p></div>
                </div>
	    	</li>
	    	<li>
	    		<a href="#"><img src="img/banner4.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>ADMISSION OPEN
</h2><p>LED BY TEAM OF PIONEERS</p></div>
                </div>
	    	</li>
            <li>
	    		<a href="#"><img src="img/banner5.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>ADMISSION OPEN
</h2><p>GET WORLD CLASS EDUCATION IN SPIRITUAL AMBIENCE</p></div>
                </div>
	    	</li>
	    </ul>
	  </div>
   </div></div>
    </div>
  </div>
  <div class="col-md-6 w3l_about_bottom_right one">
    <div class="abt-w3l">
      <div class="header-w3l">
        <h2>Admission Form</h2>
        <h4>Enter the Following Details</h4>
        <h5 style="font-weight:900; color:yellow"><?php if(isset($message)){
            echo $message;
        } ?>
          


        </h5>
        <form action="" method="post" class="mod2">
          <div class="col-md-6 col-xs-6 w3l-left-mk">
            <ul>
              <li class="text">Name: </li>
              <li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true"></i>
                <input name="name" type="text" required>
              </li>
              <li class="text">Your Phone no  : </li>
              <li class="agileits-main"><i class="fa fa-phone" aria-hidden="true"></i>
                <input name="mobile" type="text" required>
              </li>
              <li class="text">Email:</li>
              <li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true"></i>
                <input name="email" type="email"  id="email">
              </li>
            </ul>
          </div>
          <div class="clearfix"></div>
          <div class="agile-submit">
            <input type="submit" value="submit" name="btn" id="btnRedirect"> 
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- //banner --> 
<!-- Modal1 -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
  <div class="modal-dialog"> 
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="signin-form profile">
          <h3 class="agileinfo_sign">Sign In</h3>
          <div class="login-form">
            <form action="#" method="post">
              <input type="email" name="email" placeholder="E-mail" required>
              <input type="password" name="password" placeholder="Password" required>
              <div class="tp">
                <input type="submit" value="Sign In">
              </div>
            </form>
          </div>
          <div class="login-social-grids">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-rss"></i></a></li>
            </ul>
          </div>
          <p><a href="#" data-toggle="modal" data-target="#myModal3" > Don't have an account?</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- //Modal1 --> 
<!-- Modal2 -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
  <div class="modal-dialog"> 
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="signin-form profile">
          <h3 class="agileinfo_sign">Sign Up</h3>
          <div class="login-form">
            <form action="#" method="post">
              <input type="text" name="name" placeholder="Username" required>
              <input type="email" name="email" placeholder="Email" required>
              <input type="password" name="password" placeholder="Password" required>
              <input type="password" name="password" placeholder="Confirm Password" required>
              <input type="submit" value="Sign Up">
            </form>
          </div>
          <p><a href="#"> By clicking Sign Up, I agree to your terms</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="clearfix"> </div>
<!-- //Modal2 --> 
<!---728x90---> 

<!-- about -->
<div class="about-top" id="about">
  <div class="container">
    <h3 class="w3l-title">About Us</h3>
    <div class="w3layouts_header">
      <p><img src="img/isckon-iocn.png"></p>
    </div>
    <div class="col-md-7 wthree-services-bottom-grids">
      <div class="wthree-services-left"> <img src="img/ab1.jpg" alt=""> </div>
      <div class="clearfix"> </div>
    </div>
    <div class="col-md-5 wthree-about-grids">
      <div class="wrapper">
        <div id="st-accordion" class="st-accordion">
          <ul>
            <li> <a href="#">Bhaktivedanta <span class="st-arrow">Open or Close</span></a>
              <div class="st-content">
                <p>Bhaktivedanta Gurukula and International School (BGIS) was founded by HFG A.C. 
                  Bhaktivedanta Swami Prabhupada, THE FOUNDER Acharya of ISKCON, in 1975. </p>
                <p>He envisioned to 
                  creat men of character and competence who can lead and inspire others. </p>
                <p>The ICSE/ISC affiliated
                  school ranks 16th best boarding school
                  in india provides a unique experience of education- both spiritual and academic - that can evolve
                  the children into becoming the next league of scientists, social activists, entrepreurs, professionals,
                  Olympic winners etc - but eith a compassionate heart to serve the society.</p>
                <p>”The old system of gurukula should be revived as the perfect example of system designed to produce
                  great men, sober and responsible leaders” </p>
              </div>
            </li>
            <li> <a href="#">Gurukula<span class="st-arrow">Open or Close</span></a>
              <div class="st-content">
                <p>A rejuvenating morning program that as early as 5am</p>
                <p>Daily meditation and yoga exercise</p>
                <p>Sloka recitation and lectures about vedic heritage</p>
                <p>Disciplined lifestyle away from mobiles with moderated use of technology</p>
                <p>Chemical free food and milk from our own farm and Gaushala</p>
                <p>Exrensive cultural programs in traditional arts, music and dance</p>
                <p>Enlivening Trips to Holy Places Daily engafement in serving community</p>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
              </div>
            </li>
            <li> <a href="#">International<span class="st-arrow">Open or Close</span></a>
              <div class="st-content">
                <p>India’s Largest Gurukula spread over 60 acres, affiliated with ICSE BOARD</p>
                <p>100% digital Classrooms</p>
                <p>Round the clock medical facilites</p>
                <p>Exceptionally spacious hostel and class rooms</p>
                <p>Sports facilities-basketball, volleyball, football ground among others </p>
                <p>Zero tolerance on corporal punishment</p>
              </div>
            </li>
            <li> <a href="#">School<span class="st-arrow">Open or Close</span></a>
              <div class="st-content">
                <p>Guided by HH Gopal Krishna Goswami Maharaj, Chairman, ISKCON India</p>
                <p>Director, Dr. Lila Purshottam Das, senios professor, IIT Kanpur</p>
                <p>Team of academicians from IITs/Global MBA/best teaching background</p>
                <p>Selfless leaders acting as slefless teachers</p>
                <p>Ex-professionals fro Indian Navy, Goldman Sachs, Emst & Young. Bell Canada</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
</div>
</div>
<!-- modal -->


<!-- footer -->

<div class="w3layouts_copy_right">
  <div class="container">
    <p>Copyright © 2005 - 2009 BGIS - One of the Top Boarding & Residential Schools in India.</p>
  </div>
</div>

 
<script type="text/javascript" src="js/jquery.accordion.js"></script> 
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
<script type="text/javascript">
            $(function() {
			
				$('#st-accordion').accordion({
					oneOpenedItem	: true
				});
				
            });
        </script>
        
   
 <script>
// When the user clicks on div, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>




        
 <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KM4BTWX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->



</body>
</html>