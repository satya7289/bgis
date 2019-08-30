 <style>
 h1{line-height: 15px;}body {line-height: 22px;}li{line-height: 15px;}
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
<div class="bannerinner">
    <div class="bannerinner"><img src="img/contact-banner.jpg" /></div>
  </div>
<div class="down">&nbsp;</div>
<div class="middlecontent">
    <div class="leftsidemenu">
      <ul>
       <h1>Contact Us</h1>
     <li><a href="/admission"> Admissions</a></li>
     <li><a href="/job">Job</a></li>
      </ul>
    </div>
    <div class="rightsidecontent">
    <div class="menutree">
<div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a class="breadcrum_link" href="http://bgis.org/" itemprop="url">
<span itemprop="title">Home</span></a> » <div style="display:inline;" itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
<a class="ml3 breadcrum_link" itemprop="url"><span itemprop="title">Contact Us</span></a> 
</div></div></div>
<div class="down">&nbsp;</div>
      <div class="aboutus">
        <h1>Contact Us</h1>
        <h2>Bhaktivedanta Gurukula and International School</h2>
        <p>  Bhaktivedanta Swami Marg,<br />
    
    
    <!--img/Eligibilityinnerimg.jpg -->
    
    
          Raman Reti, Vrindavan, Mathura<br />
          Uttar Pradesh, 281121<br />
          India<br/>
          <br/>
          <!--<b>For Donation Call Us at +91-8468869001</b><br/>-->
          <b>For Admission Call Us at <span style="color: #9D0000; font-weight:16px; font-size:16px;"></span></b><br />
         +91 7088004339,<br /> +91-7088004342,<br />  E-mail : bgis.admissions@gmail.com<br /> 
         
        <p class="email">Email id : <a href="#" style="color: #a0030b"> bgis.services@gmail.com</a></p>
        </p>
        <p> <b>Information:</b> We are located right next to the ISKCON temple at the entrance to Vrindavan town. Vrindavan is just five minutes off 
          the Delhi/ Agra Highway, 2.5 hours south of New Delhi. The Mathura Junction train station is a twenty-five-minute drive from the school. </p>
      </div>
      <div class="contactform"> 
      <?php echo $this->Form->create('Contact',array('enctype' => 'multipart/form-data','id'=>'contactform','name'=>'contactform'));?>
          <h1>Get In Touch With Us ...</h1>
           <fieldset id="user-details">
             <label for="name">Name:</label>
              <input  name="data[Contact][name]" type="text" placeholder="Your Name" id="name">
              <label for="email">Email:</label>
             <input  name="data[Contact][email]" type="email" placeholder="Your Email ID" id="email">
              <label for="phone">Phone:</label>
             <input  name="data[Contact][mobile]" type="text" placeholder="Phone No" id="phone">
             <label for="website">City:</label>
              <input  name="data[Contact][city]" type="text" placeholder="City" id = "city">
           </fieldset>
          <!--end user-details-->
          <fieldset id="user-message">
              <label for="message">Your Message:</label>
            <textarea name="data[Contact][comment]" rows="0" cols="0" id = "comment"></textarea>
                 <input type="submit" value="Submit Message" name="submit" class="submit" id="submit" />
          </fieldset>
          <!-- end user-message -->
        <?php echo $this->Form->end();?> 
      </div>
       <div class="down">&nbsp;</div>
          <h2 style="position: relative;font-size: 20px;color: #a0030b;margin: 0px;padding-bottom: 0px;margin-left: 10px;">Donate For Complete Education</h2>
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
  <?php 
		echo $this->Html->script('contact.js'); 
		echo $this->Html->script('bootstrap-dialog.js');
		echo $this->Html->css('bootstrap-dialog');
		$this->Html->css('bootstrap.min', null, array('inline' => false));
		
?>

<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
	 $(document).ready(function() {	
     BootstrapDialog.alert = function(message, callback) {
            new BootstrapDialog({
                message: message,
                data: {
                    'callback': callback
                },
                closable: false,
                buttons: [{
                        label: 'OK',
                        action: function(dialog) {
                            typeof dialog.getData('callback') === 'function' && dialog.getData('callback')(true);
                            dialog.close();
                        }
                    }]
            }).open();
			
        };
		});
</script>
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
</style>
 