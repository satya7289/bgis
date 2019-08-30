<!DOCTYPE html>

<html>

<head>

	<title>Online Admission - BGIS</title>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131405853-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-131405853-1');
    </script>



	<link href="<?= base_url()?>assets/images/favicon.ico" type="image/x-icon" rel="icon" />
	<link href="<?= base_url()?>assets/images/favicon.ico" type="image/x-icon" rel="shortcut icon" />
	
	
	<!-- Google Fonts CSS Stylesheet // More here https://www.google.com/fonts#UsePlace:use/Collection:Open+Sans -->

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400italic,400,600,600italic,700,800,800italic" rel="stylesheet" type="text/css">

	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

	<!-- ***** Boostrap Custom / Addons Stylesheets ***** -->



	<link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.css" type="text/css" media="all"> 

	  

	<link rel="stylesheet" href="<?= base_url();?>assets/css/template.css" type="text/css" media="all">

	<link rel="stylesheet" href="<?= base_url();?>assets/css/responsive.css" type="text/css" media="all">

	<link rel="stylesheet" href="<?= base_url();?>assets/css/base-sizing.css" type="text/css" media="all">

	<link rel="stylesheet" href="<?= base_url();?>assets/css/dp.css" type="text/css" media="all">







	<!-- Modernizr Library -->

	<script type="text/javascript" src="<?= base_url(); ?>assets/js/modernizr.min.js"></script>

	<!-- jQuery Library -->

	<script type="text/javascript" src="<?= base_url();?>assets/js/jquery.js"></script>

</head>


 <script>
	window.onload = function() {
		var d = new Date().getTime();
		document.getElementById("tid").value = d;
	};
</script>

 <script src='<?= base_url()?>assets/js/api.js'></script>

<style type="text/css">
	select {
		padding: 25px 210px 8px 5px; 
		border-radius: 5%;
	}

	select option{
		font-size: 12px;
		border-radius: 10%;
		
		font-family: inherit; 
		
	}
</style>

 <body>

 
 <header id="header" class="site-header cta_button" data-header-style="1">
	<div class="kl-header-bg"></div>
	<!-- <div class="site-header-wrapper">
		<div class="site-header-top-wrapper">
			<div class="siteheader-container container">
			 

					<div class="site-header-top-right d-flex">

						<div class="topnav support--panel align-self-center">
						 	<a class="topnav-item support--panel" href="<?= base_url()?>instance-donation">
								<i class="login-icon fas fa-sign-in-alt visible-xs xs-icon"></i>
								<span class="topnav-item--text">INSTANCE DONATION</span>
							</a>
						</div>
						<div class="topnav support--panel align-self-center">
							<label for="support_p" class="topnav-item spanel-label">
								<i class="fas fa-info-circle support-info closed"></i>
								<i class="far fa-times-circle support-info opened"></i>
								<span class="topnav-item--text">SUPPORT</span>
							</label>
						</div>
						<div class="topnav login--panel align-self-center">
							<a class="topnav-item popup-with-form" href="#">
								<i class="login-icon fas fa-sign-in-alt visible-xs xs-icon"></i>
								<span class="topnav-item--text">LOGIN</span>
							</a>
						</div>


						
 

		 					 
					</div>
				</div>
				
			</div>
		</div>-->


