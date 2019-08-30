<!DOCTYPE html>
<html>
<title>@yield('pageTitle', $pageTitle) | Admin-BGIS</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/style.css') }}"/>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  
<style>
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
</style>
<body class="w3-grey">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right  w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="/admin" class="w3-bar-item w3-button w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>BGIS Admin Section</a>
  <a href="/admin/events" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><i class="fa fa-globe"> News & Events</i></a>
  <a href="/admin/contact" class="w3-bar-item w3-button w3-hide-small  w3-hover-white {{ $name === 'adminContact' ? 'w3-light-grey' : '' }}"><i class="fa fa-envelope"> Contact Form  </i><span class="w3-badge w3-right w3-small w3-red">{{ $contactsCount ? $contactsCount : ''}}</span></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><i class="fa fa-plus"> Admission Form</i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small  w3-hover-white" ><i class="fa fa-money"> Donations</i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><i class="fa fa-user"> Faculty</i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small  w3-hover-white"><i class="fa fa-user"> Tickets and Complaints</i></a>
  <a class="w3-bar-item w3-button w3-hover-white w3-right" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="w3-right w3-bar-item w3-button">
      @csrf
  </form>
  <div class="w3-dropdown-hover w3-hide-small">
  </div>
 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>



<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1080;margin-top:80px">
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    
    
    <!-- End Left Column -->

    
    <!-- Middle Column -->
    <div class="w3-col m9 w3-container">
        @yield('body')
    </div>

    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">Your Account</h4>
         <hr>
         <p><strong>Department</strong>:  Designer, UI</p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> London, UK</p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> April 1, 1988</p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
          <button  class="w3-button w3-block w3-theme-l1 w3-left-align"><a href="/admin/events/create">New Event/News</a></button>
        </div>
          </div>     
      <br>
      
      <!-- Interests --> 
      <div class="w3-card w3-round w3-white w3-hide-small">
        <div class="w3-container">
          <p>Interests</p>
          <p>
            <span class="w3-tag w3-small w3-theme-d5">News</span>
            <span class="w3-tag w3-small w3-theme-d4">W3Schools</span>
            <span class="w3-tag w3-small w3-theme-d3">Labels</span>
            <span class="w3-tag w3-small w3-theme-d2">Games</span>
            <span class="w3-tag w3-small w3-theme-d1">Friends</span>
            <span class="w3-tag w3-small w3-theme">Games</span>
            <span class="w3-tag w3-small w3-theme-l1">Friends</span>
            <span class="w3-tag w3-small w3-theme-l2">Food</span>
            <span class="w3-tag w3-small w3-theme-l3">Design</span>
            <span class="w3-tag w3-small w3-theme-l4">Art</span>
            <span class="w3-tag w3-small w3-theme-l5">Photos</span>
          </p>
        </div>
      </div>
      <br>
      
      <!-- Alert Box -->
      <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
        <p><strong>Hey!</strong></p>
        <p>People are looking at your profile. Find out who.</p>
      </div></div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<!-- Footer -->

<script>
tinymce.init({ 
        mode : "specific_textareas",
        editor_selector : "myTextEditor",
   });
</script>


<script>
// Accordion
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-theme-d1";
  } else { 
    x.className = x.className.replace("w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-theme-d1", "");
  }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html> 

