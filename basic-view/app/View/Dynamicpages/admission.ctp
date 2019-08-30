
   <script language="JavaScript">
		$(document).ready(function() {	
    	var apiUrl = '/dynamicmenu/';
	     	$.ajax({
	         url: apiUrl + 'getAdmission',
		       method: 'GET',
		   		success: function(data)
		 		{
						   var allData9 = JSON.parse(data);
			   	    	  for (var y = 0; y < allData9.Submenu.length ; y++) 
			              {
                                var catname = allData9.Submenu[y];
			                    var catName = catname.toLowerCase();
				                     if(catName.indexOf(' ') > -1){
					               catName = catName.replace(/\s+/g,"-");
  				           }                                                    
						   var newFirmDiv9 = '<li class="" id="'+allData9.Submenu_id[y]+'"><a href="/admissions/'+catName+'" title="'+allData9.Submenu[y]+'">'+allData9.Submenu[y]+'</a></li>';
                   $("ul#sidebar").append(newFirmDiv9);
				}

		},
		failure: function()
		{			
    	
		}	
});
});
</script>

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

<style type="text/css">
.contactform h1 {
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
	height: 175px;
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
select{
    padding: 11px;
    margin: 4px 0 20px 0;
    width: 240px;
    font-size: 12px;
    color: #555;
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
  <?php echo $this->Html->image('admissionsnbanner.jpg',array('title' =>"BGIS about", 'alt' => 'BGIS')); ?>
 </div>
  <div class="down">&nbsp;</div>
    <div class="middlecontent">
      <div class="leftsidemenu">
         <ul id="sidebar">
         <h1>Admissions</h1>
        </ul>
      </div>
      <div class="rightsidecontent">
      <div class="menutree">
<div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a class="breadcrum_link" href="http://bgis.org/" itemprop="url">
<span itemprop="title">Home</span></a> » <div style="display:inline;" itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
<a class="ml3 breadcrum_link" itemprop="url"><span itemprop="title">Admission</span></a> 
</div></div></div>
<div class="down">&nbsp;</div>
      
        <div class="aboutus">
          <h1>Admissions</h1>
          <p> <img src="img/admissioninner.jpg" style="float:right; padding:5px;" />
Thank you for showing your interest in Bhaktivedanta Gurukula and International School (BGIS), largest Gurukul in India with holistic learning
environment, which nurtures the academic, emotional & spiritual need of the students.<br><br>
The Candidate has to appear in an admission test in which he will determine the current grade level of English, Mathematics and Science. <br>This will
be followed by an interview in which your son`s habits, social interactions and aptitude will be assessed.</p>
        <br/>
         <div class="aboutus" style="margin-top: -20px;
text-align: justify;">
<h2>Please call Admission Office to fix your Admission Date.</h2>
          </b>
         <h3>Next Admission Test are follows</h3> 
           

           
         <h4>Saturday, 26  January 2019 |  BGIS New Campus - Vrindavan</h4> 
         <h4>Sunday, 27  January 2019 |  ISKCON Mumbai</h4>
         <h4>Sunday, 03  february 2019 | East of Kailash - ISKCON DELHI </h4>
         <h4>Sunday, 10  February 2019 |  BGIS New Campus - Vrindavan </h4>
         <h4>Sunday, 24  February 2019 |  BGIS New Campus - Vrindavan </h4>

         <!-- 
         <h4>16th December 2018</h4> 
         <h4>16th December 2018</h4> 
         <h4>16th December 2018</h4>
           -->


        

        <!--b style="font-size:16px; color:#000;">
Kindly fill the e-form below and send for registration for admission test or you may take a print out and send it by post or give in person at our admission office in Vrindavan.</b>
       <h2><a href="http://bgis.org/onlineregister" target="_blank"><span style="color:#94020a;font-size:20px;">Click here for e-form</a></h2--></span>
          </p>
             <h2>For more information please contact:-</h2>
         <span style="font-size:16px; padding-top:5px; color: #9D0000; font-weight:bold;">+91-7088004339,<br /> +91-7088004342</span><br /><br/>
      
     
     
    
  <a name="contactform">  <h1>  Register Online</h1></a>
    <?php 
        if(isset($_POST['submit'])) {
            
           $name = $_POST['applicant_name'];
           $fatherName = $_POST['father_name'];
           $dateOfBirth = $_POST['dob'];
           $email = $_POST['email'];
           $mobileNo = $_POST['phone'];
           $class = $_POST['class'];
           $adminssionDate = $_POST['admission_date'];
           
$to = "nimalan@bk.ru";
$subject = "Admission Query : New Email From website!! ";

$message ="
<html>
<head> 
</head>
    <body>  
        <table width=80%>
            <tr style='background-color:#d3d8ec;font-size: 16px;'>
                <th>Name of applicant</th>
                <th>Father's name</th>
                <th>Date of Birth</th>
                <th>contact e-mail</th>
                <th>Mobile Number</th>
                <th>Applied Class</th>
                <th>Preferred admission date</th>
            </tr>
            <tr style='font-size:14px; margin-top:10px'>
                <td>$name</td>
                <td>$fatherName</td>
                <td>$dateOfBirth</td>
                <td>$email</td>
                <td>$mobileNo</td>
                <td>$class</td>
                <td>$adminssionDate</td>
            </tr>
        </table>
    </body>
</html>";

$message_users ="
<h1 style='box-sizing:border-box;font-size:40px; padding-left:0.25em; margin:0px 0px 16px;color:rgb(160, 1, 58);;line-height:44px;text-transform:uppercase;font-family:proxima-nova,sans-serif; text-transform: uppercase;'>THANK YOU FOR REGISTERING MASTER <u> $name </u>!</h1><div style='box-sizing:border-box;min-height:1px;margin-bottom:20px;width:782.313px;float:left;padding-right:1.25em;padding-left:1.25em'><div style='box-sizing:border-box;margin-bottom:20px'><div style='box-sizing:border-box; color: rgb(68,68,68);font-family: proxima-nova,sans-serif; font-size: 16px;'><p style='box-sizing:border-box;margin:0px 0px 20px'>Thank you for registering for the admission test for the academic year 2018-19.</p><p style='box-sizing:border-box;margin:0px 0px 20px'>Your registration is confirmed for the admission test on <b style='color: rgb(160, 1, 58);'> $adminssionDate </b>.Upon arriving BGIS, please proceed to the Reception and the team will assist your child for admission test.</p><p style='box-sizing:border-box;margin:0px 0px 20px'> If you have any questions, please don’t hesitate to contact us at + 917088004339. Meanwhile, you can get the glimpse of how BGIS students spend their day in the campus,&nbsp;<strong style='background-color:transparent;color:rgb(160, 1, 58);;box-sizing:border-box;outline:0px;text-decoration-line:none'><a href='https://www.youtube.com/watch?v=9QCl2F3fvIE' style='background-color:transparent;color:rgb(160, 1, 58);;box-sizing:border-box;outline:0px;text-decoration-line:none' target='_blank' data-saferedirecturl='https://www.google.com/url?hl=en&amp;q=https://www.youtube.com/watch?v%3D9QCl2F3fvIE&amp;source=gmail&amp;ust=1517050838784000&amp;usg=AFQjCNFAgD1r5FuFKr8HHQOwyDKaBuNBNQ'>click here</a>&nbsp;</strong></p><p style='box-sizing:border-box;margin:0px 0px 20px'>For more details about our new campus updates please&nbsp;
<a href='http://bgis.org/pdf/BGIS_magazine-2.pdf' style='background-color:transparent;color:rgb(160, 1, 58);;box-sizing:border-box;outline:0px;text-decoration-line:none' target='_blank'><strong style='box-sizing:border-box'>click here</strong></a>.</p><p style='box-sizing:border-box;margin:0px 0px 20px'>Regards,</p><p style='box-sizing:border-box;margin:0px 0px 20px'>BGIS Admission Team<br></p><p style='box-sizing:border-box;margin:0px 0px 20px'><br></p></div></div></div>";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    // More headers
    $headers .= 'From:'. $email. "\r\n";
    $headers .= 'Cc: shanti_pp10@yahoo.co.in' . "\r\n";
    $headers .= 'Cc: satish.pamho@gmail.com' . "\r\n";
    $headers .= 'Cc: info@bgis.org' . "\r\n";
    
    
   if(mail($to,$subject,$message,$headers)) {
      mail($email,"BGIS - ADMISSION CONFIRMATION ",$message_users,$headers);
      header("location: http://newbgis.org/pay-now/index.php" );
    }
 }
?> 

 <a href="https://newbgis.org/initiatetransfer"><img src="../img/online-admission-button.png" height="100px" width="180px"/></a>
   

   
    <!--div class="contactform" style="text-align: left"> 
      <form action="" enctype="multipart/form-data" id="contactform" name="contactform" method="post" accept-charset="utf-8">
          <div style="display:none;">
              <input type="hidden" name="_method" value="POST"></div> 
           <fieldset id="user-details">
             <label for="name">Name of applicant:</label>
              <input name="applicant_name" type="text" placeholder="Name of Applicant" id="name" required>
             
              <label for="father">Parent's Name:</label>
              <input name="father_name" type="text" placeholder="Father's Name" id="city" required>
              
              <label for="phone">Date Of Birth:</label>
              <input name="dob" type="date" placeholder="Phone No" id="phone" required>
              
              <label for="phone">Class Applied For :</label>
              <input name="class" type="text" placeholder="Class Applied For" id="phone" required> 

           </fieldset> 
            <fieldset id="user-details" style="margin-left:20px">
              <label for="email">Email:</label>
              <input name="email" type="email" placeholder="Your Email ID" id="email" required>
             
              <label for="phone">Phone:</label>
              <input name="phone" type="text" placeholder="Phone No" id="phone" required>
              
              <label for="date">Preferred admission date:</label>
              <select  id="select" name="admission_date" required disabled>
                  <option>Select Preferred admission date</option>
                  <option value="25-02-2018">25-02-2018</option>
                   <option value="18-03-2018">18-03-2018</option>
                   <option value="25-03-2018">25-03-2018</option>
              </select> 

              <br><br>
              <input type="submit" value="Submit Online" name="submit" class="submit" id="submit>
              
           </fieldset>
           
          <fieldset id="user-message">
              <p style="margin-left:-100%"><strong style="color:#9D0000"> Note - </strong> Pay Registration amount Rs: 1000/- ( Non-Refundable ) after clicking </p>
                 
          </fieldset>
        </form> 
      </div>
      
      
      
      
      
      
          
          
          <b><h1>Note:</h1></b>
          <p style="font-size:16px; color:#000">1. We have limited seats and all admissions will be considered on a First come First served basis.<br />
          2. The enrollment fees will be non refundable.</p>
        </div>
        </div-->
    </div> </div>
       
        <div class="down">&nbsp;</div>
          <h2 style="position: relative;font-size: 15px;color: #a0030b;margin: 0px;padding-bottom: 0px;margin-left: 10px;">Donate For Complete Education</h2>
           <div class="down">&nbsp;</div>
  <div class="donate_main_links">
  <div class="donate_in">
  <ul>
      <li><a href="/contributes/online-payment"><img src="../img/campus.png" class="masterTooltip" title="New BGIS  Development" /></a> </li>
      <li><a href="/onlinepayments/c92b26f68689c7af56b0b08721897732"><img src="../img/cow.png" class="masterTooltip" title="Cow Care : Help us maintain the cows for a year." /></a> </li>
      <li><a href="/onlinepayments/2cad8fa47bbef282badbb8de5374b894"><img src="../img/invest.png" class="masterTooltip" title="Invest for your future" /></a> </li>
      <li><a href="/onlinepayments/b7a782741f667201b54880c925faec4b"><img src="../img/nature.png" class="masterTooltip" title="Nature Care  : Support 15 trees for life." /></a> </li>
      <li><a href="/onlinepayments/14ee22eaba297944c96afdbe5b16c65b"><img src="../img/sponser.png" class="masterTooltip" title="Child Education, Sponsor the Education of One Child for a year  including residential charges ." /></a> </li>
    </ul>
  </div>
</div>
  
        
      </div>
    </div>
    