 <script language="JavaScript">
		$(document).ready(function() {	
    	        var apiUrl = '/dynamicmenu/';
    	          var currPage = "online form";
	     	$.ajax({
	         url: apiUrl + 'getAdmission',
		       method: 'GET',
		   		success: function(data)
		 		{
						   var allData9 = JSON.parse(data);
			   	    	  for (var y = 0; y < allData9.Submenu.length ; y++) 
			              {
                                                  var catname = allData9.Submenu[y];
                                                  var catName1 = catname.toLowerCase();
			                          var catName = catname.toLowerCase();
				                     if(catName.indexOf(' ') > -1){
					              catName = catName.replace(/\s+/g,"-");
  				           }   
  				            if(currPage == catName1)
			          	{                                                              
            var newFirmDiv9 = '<li id="'+allData9.Submenu_id[y]+'"><a href="/admissions/'+catName+'" class="active" title="'+allData9.Submenu[y]+'">'+allData9.Submenu[y]+'</a></li>';
						   }else{
	 var newFirmDiv9 = '<li  id="'+allData9.Submenu_id[y]+'"><a href="/admissions/'+catName+'" title="'+allData9.Submenu[y]+'">'+allData9.Submenu[y]+'</a></li>';
	 }
                   $("ul#sidebar").append(newFirmDiv9);
				}

		},
		failure: function()
		{			
    	
		}	
});
});
</script>
<?php 
		   echo $this->Html->script('registration.js'); 
		   echo $this->Html->script('jquery.leanModal.min.js');
		   echo $this->Html->css('model');
		   echo $this->Html->css('bootstrap.min');
		
?>
 <script type="text/javascript">
 
				 $(document).ready(function() {	
					$(function() {
		    			$('a[rel*=leanModal]').leanModal({ top : 200 , closeButton: ".modal_close" });		
					});
					});
		</script> 
    <script type="text/javascript">
	       $(document).ready(function()
	       {
		$("#Registrationform").validationEngine('attach', {promptPosition : "topRight", autoPositionUpdate : true ,scroll: false });
		 
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
<style>
.menutree {
width: 980px;
margin: auto;
float: left;
text-align: left;
color: #656567;
font-size: 12px;
font-family: Arial;
margin-top: 10px;
margin-left: 10px;
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
<div class="bannerinner">
  <?php echo $this->Html->image('/img/admission/1394876257.jpg',array('title' =>"BGIS Online Form", 'alt' => 'BGIS')); ?>
 </div>
   <div class="down">&nbsp;</div>
       <div class="middlecontent">
      <div class="leftsidemenu">
              <ul id="sidebar">
                     <h1>Contribute</h1>
        </ul>
        </div>
         <div class="rightsidecontent">  
         <div class="menutree">
<div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a class="breadcrum_link" href="http://bgis.org/" itemprop="url">
<span itemprop="title">Home</span></a> » <div style="display:inline;" itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
<a class="ml3 breadcrum_link" itemprop="url"><span itemprop="title">Online Registration</span></a> 
</div></div></div>
<div class="down">&nbsp;</div>
  <h1 style="font-size: 20px;color: #a0030b;margin: 0px;padding-bottom: 5px;margin-left: 10px;">Online Registration </h1>           
         <div class="aboutus">
         <h1>Dear Parent,</h1>
         <span style="font-size: 15px;line-height: 15px;">Hare Krishna.</span>
<h2 style="line-height: 18px;">Thank you for choosing Bhaktivedanta Gurukula & International School, Vrindavan for your son’s education. You may fill the online registration form for admission exam. Please contact our admission office on +91 - 7088004339 , +91 - 7088004342 or write to us on info@bgis.org  for any clarification.</h2>
<br/>
<ul style="list-style:none;font-size: 18px;color: #a0030b;margin-left: 1px;">
<li>Department of Admissions</li>
<li>BGIS, Vrindavan.</li>
</ul>
<br/>
<div class="about">
<ul style="list-style: none; margin:0px; font-size:14px;">
<h2 style="font-size: 17px;">The Admission Date has been Scheduled on 19th - March - 2017</h2>
<li> Admissions open for classes 2-9 <sup>th</sup>.</li>
<li> Registration Fee – Rs.1000. </li> 
<li> You may pay the registration fee online </li>
<li style="font-weight: bold;margin-top: 5px;margin-left: 10px;"> Modes of Payment</li>
<ul>
	<li><a href="/onlinepayments/a9b7ba70783b617e9998dc4dd82eb3c5"> Pay Online</a></li>
	<li><a href="/onlinepayments/a9b7ba70783b617e9998dc4dd82eb3c5"> AXIS Banks</a></li>
	<li><a href="">Reception of BGIS</a></li>
</ul>
<li></li>
<li></li>
<li></li>
<li> Venue – BGIS Campus, Vrindavan.</li>
<li>Time: 10 am</li>
</ul>

</div>
</div>
                    <div class="down">&nbsp;</div>
                   <?php echo $this->Session->flash(); ?>
                       <div class="down">&nbsp;</div>
                      <div class="Registrationform"> 
<form class="contact-form" id="Registrationform" name="Registrationform" method="POST" enctype="multipart/form-data" action="#">
          <h1>Application for Registration</h1>
              <fieldset id="user-details">
               <label for="name">Students Name <span style="color:red;">*</span></label>
            <input  name="data[Registration][name]" type="text" placeholder="Students Name" id="name" class="validate[required,custom[onlyLetterSp]] text-input" pattern="[A-Za-z]+">
                <label for="phone">Date of Birth <span style="color:red;">* (mm/dd/yy)</span></label>
             <input  name="data[Registration][dob]" type="date" placeholder="Date of Birth" id="dob" class="validate[required,custom[date]]">
              <label for="phone">Prefered date for Test <span style="color:red;">* (mm/dd/yy)</span></label>
             <?php
	  $class = array('2014-14-12' => '12-14-2014', '2014-12-25' => '12-25-2014', '2015-01-25' => '01-25-2015','2015-02-08' =>'02-08-2015', '02-22-2015' => '02-22-2015','2015-03-27' => '03-27-2015','2017-03-19' => '03-19-2017');
                  echo $this->Form->input('prefered_date', array('label' => false, 'type' => 'select', 'id'=>'date_test','options' => $class ,'class' => 'validate[required]' , 'style'=>'margin-top: 10px' ));
              ?> 
              <label for="email"> Applying Grade <span style="color:red;">*</span></label>
            <?php
	           $class = array('1' => '2nd', '2' => '3nd', '3' => '4th','4' =>'5th', '5' => '6th','6' => '7th','7' => '8th','8' => '9th');
                  echo $this->Form->input('grade', array('label' => false, 'type' => 'select', 'id'=>'grade','options' => $class ,'class' => 'validate[required]' , 'style'=>'margin-top: 10px' ));
              ?>   
             <h2 style="font-size: 16px;line-height: 35px;">Parents Registration Information:</h2>
             <label for="name">Name of the Father <span style="color:red;">*</span></label>
              <input  name="data[Registration][parents_name]" type="text" placeholder="Name of the Father" id="parent_name" class="validate[required]">
               <label for="message">Contact Address </label>
            <textarea name="data[Registration][address]" rows="0" cols="0" id = "address"></textarea>
              <label for="phone">Contact Number <span style="color:red;">*</span></label>
   <input  name="data[Registration][mobile]" type="text" placeholder="Phone No" id="phone" class="validate[required,custom[onlyNumber],minSize[10],maxSize[13]] text-input">
              <label for="email"> Contact Email <span style="color:red;">*</span></label>
         <input  name="data[Registration][email]" type="email" placeholder="Your Email ID" id="email" class="validate[required,custom[email]] text-input">
         
             
           </fieldset>
                     
          <!--end user-details-->
          <fieldset id="user-message">
                 <input type="submit" value="Submit Message" name="submit" class="submit" id="registration" />
          </fieldset>
                                            <span class="success" id="loading-image"  style="display:none">
			                    <img src="../img/loading.gif" title="Subscribe Icons" alt="bgis" /> 
			                         </span>
          <!-- end user-message -->
        <?php echo $this->Form->end();?> 
      </div>
       <div class="down">&nbsp;</div>
          
<div class="down">&nbsp;</div>

          <h2 style="position: relative;font-size: 20px;color: #a0030b;margin: 0px;padding-bottom: 0px;margin-left: 10px;">Donate For Complete Education</h2>
           <div class="down">&nbsp;</div>
  <div class="donate_main_links">
  <div class="donate_in">
    <ul>
      <li><a href="/contributes/online-payment"><img src="../img/campus.png" class="masterTooltip" title="New BGIS  Development" /></a> </li>
      <li><a href="/onlinepayments/c92b26f68689c7af56b0b08721897732"><img src="../img/cow.png" class="masterTooltip" title="Cow Care : Help us maintain the cows for a year." /></a> </li>
      <li><a href="/onlinepayments/2cad8fa47bbef282badbb8de5374b894"><img src="../img/invest.png" class="masterTooltip" title="Just invest for your future " /></a> </li>
      <li><a href="/onlinepayments/b7a782741f667201b54880c925faec4b"><img src="../img/nature.png" class="masterTooltip" title="Nature Care  : Support 15 trees for life " /></a> </li>
      <li><a href="/onlinepayments/14ee22eaba297944c96afdbe5b16c65b"><img src="../img/sponser.png" class="masterTooltip" title="Child Education, Sponsor the Education of One Child for a year ." /></a> </li>
    </ul>
  </div>
</div>

       </div>
      </div>
                                              <div id="signup"> 
			                     <div id="signup-ct">
				            <div id="signup-header">
                                  <h2 style="font-size: 1.5em;line-height: 150%;">Registration for Session 2015-2016
					</h2> 
					<a class="modal_close" href="#"></a>
				</div>
		     <p style="font-size: 20px;line-height: 30px;margin-top: 10px;margin-left: 8px;">
		     Thank You for Registering.<br/>
		     We shall Contact you soon.<br/>
		     Department of Admission <br/>
                     BGIS.
		     </p>
			</div>
		</div>
<a id="go1" rel="leanModal" name="signup" style="display:none" href="#signup"  >With Close Button</a> 		

<style type="text/css">
.Registrationform h1 {
	color: #555;
	padding-bottom:25px;

	font-size:20px;
}
label {
	font-size: 15px;
	color: #666;
}
form {
	float: left;
	padding: 18px 40px 20px 9px;

	width: 680px;
}
fieldset {
	border: none;
}
#user-details {
	float: left;
	width: 230px;
}
#user-message {
	float: right;
	width: 405px;
}
input, textarea {
	padding: 8px;
	margin: 4px 0 20px 0;
	width: 220px;
	font-size: 12px;
	color: #555;
}
textarea {
	width: 390px;
	height: 55px;
}
input:hover, textarea:hover {
	background: #eee;
}
input.submit {
	width: 150px;
	color: #eee;
	text-transform: uppercase;
	margin-top: 10px;
	background-color: #18a5cc;
	border: none;
	/* -- CSS3 Transition - define which property to animate (i.e. the shadow)  -- */
		-webkit-transition: -webkit-box-shadow 0.3s linear;
	/* -- CSS3 - Rounded Corners -- */
		-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;
	/* -- CSS3 Shadow - create a shadow around each input element -- */ 
		background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#94020a), to(#ca000b));
	background: -moz-linear-gradient(25% 75% 90deg, #ca000b, #94020a);
}
input.submit:hover {
	-webkit-box-shadow: 0px 0px 20px #555;
	-moz-box-shadow: 0px 0px 20px #aaa;
	box-shadow: 0px 0px 20px #555;
	cursor:  pointer;
}
</style>      