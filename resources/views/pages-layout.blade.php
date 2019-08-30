<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
{{--    <title>@yield('page-title', "BGIS") | BGIS</title>--}}
    <title>@yield('page-title', "BGIS")</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/w3.css') }}"/>
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/style.css') }}"/>
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/animations.css') }}"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,400,300,600" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/tinycarousel.css') }}" type="text/css" media="screen"/>

    <script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="{{ asset('js/jquery.tinycarousel.js') }}"></script>

{{--    comment for previous code start here --}}
{{--    <meta name="keywords" content="Largest Residential School in India, BGIS, ISKCON, best boarding school for boy, best boarding schools in ICSE, schools in Vrindavan, gurukul schools in india,  gurukul school">--}}

{{--    @if($name === 'home')--}}
{{--    <meta name="description" content="BGIS is India’s best boarding school which is situated in vrindavan BGIS is geared to bring out each student best BGIS is only Boarding School in India to impart both Values and academics. Here, the students imbibe in their hearts a devotion to Lord Krishna based on the teachings of the Bhagvad-Gita. Teachings are delivered not sentimentally or dogmatically but in a philosophical and cultural way, using both contemporary and traditional educational methods. This is why we call ourselves a Gurukul --}}
{{--    ">--}}
{{--    @endif--}}
{{--    end of comments --}}

{{--    New changes for meta tags --}}

    <meta name="keywords" content="@yield('meta-keywords',"default-keywords")">
    <meta name="description" content="@yield('meta-description',"default-description")">


{{-- end new changes for meta tags--}}




    <script class="rs-file" src="{{ asset('assets/js/jquery.royalslider.min.js') }}"></script>
    <link class="rs-file" href="{{ asset('assets/css/royalslider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/reset.css') }}" rel="stylesheet">
    <link class="rs-file" href="{{ asset('assets/css/rs-default.css') }}" rel="stylesheet">


    <!-- Meta Tag Description from google  -->
    <meta name="google-site-verification" content="7s-v2lN-yGE0aYrn3hajpD-B-BrF8CZA-Sjgewe9cho" />


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134628363-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-134628363-1');
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KM4BTWX');</script>
    <!-- End Google Tag Manager -->


    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '309131706451783');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=309131706451783&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->






</head>
<body>

<div class="w3-sidebar w3-right w3-light-grey w3-animate-right"
     style="width:80%; display: none; margin-left: 20%;z-index:1000" id="mobile-sidebar">
    <a style="width: 100%" href="javascript:void(0)" class="w3-bar-item w3-button w3-center w3-black"
       onclick="w3_close()">Close &#10005;</a><br><br>
    <div class="w3-bar-block w3-light-grey w3-center">
        <a href="/about" class="w3-bar-item w3-button">About Us</a>
        <a href="/admissions" class="w3-bar-item w3-button">Admission</a>
        <a href="/academics" class="w3-button w3-bar-item ">Academics</a>
        <a href="/studentlife" class="w3-button w3-bar-item ">Student Life</a>
        <a href="/campus-facilities" class="w3-button w3-bar-item">Campus Facilities</a>
        <a href="/contribute" class="w3-button w3-bar-item ">Contribute</a>
        <a href="/news" class="w3-button w3-bar-item ">News & Events</a>
        <a href="https://www.flickr.com/photos/iskcon_bgis/albums" target="_blank" class="w3-button w3-bar-item">Gallery</a>
    </div>
    <br><br><br><br>

    <div class="w3-center w3-container">
        <span class="w3-text-dark-grey"><a href="/faculty">Faculty</a> | <a href="/publications">Publications</a> | <a href="/contact">Contact</a> | <a href="/vocational">Vocational Courses</a></span>
    </div>
</div>

<div class="top-bar w3-content" style="height:70px;">
    <img width="200px" style="position:absolute;z-index:10" src="{{ asset('images/logo.png') }}">
    <div class="top-navigation w3-padding w3-hide-small">
        <div class="w3-bar w3-small">
            <a href="https://www.flickr.com/photos/iskcon_bgis/albums" target="_blank" class=" w3-bar-item w3-hide-medium w3-hide-small">Gallery</a>

            <a href="/contact" class="w3-bar-item w3-right">Contact Us</a>
            <a href="/faculty" class="w3-bar-item w3-right">Faculty</a>
            <a href="/publications" class="w3-bar-item w3-right">Publications</a>



        </div>
    </div>
</div>

<div class="w3-bar primary-navigation">
    <div class="w3-content">
        <div class="w3-right">
            <a href="/" class="w3-bar-item w3-button {{ $name === 'home' ? 'w3-grey': ''}}"><i class="fas fa-home"></i></a>

            <div class="w3-dropdown-hover">
                <a href="/about" class="w3-button w3-hide-medium w3-hide-small {{ $name === 'about' ? 'w3-grey': ''}}">About Us</a>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="about?tab=founderb" class="w3-bar-item w3-button">Founder and Vision</a>
                    <a href="about?tab=directorb" class="w3-bar-item w3-button">From Director's Desk</a>
                    <a href="about?tab=whybgisb" class="w3-bar-item w3-button">Why BGIS?</a>
                    <a href="about?tab=newcampusb" class="w3-bar-item w3-button">Campus Facilities</a>
                    <a href="about?tab=achievementsb" class="w3-bar-item w3-button">Achivements</a>
                </div>
            </div>

            <div class="w3-dropdown-hover">
                <a href="/admissions" class="w3-button w3-hide-medium w3-hide-small {{ $name === 'admissions' ? 'w3-grey': ''}}">Admission</a>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="/admissions" class="w3-bar-item w3-button">Admission Procedure</a>
                    <a href="/admissions?tab=helpb" class="w3-bar-item w3-button">Admission Help</a>
                    <a href="/admissions?tab=applyb" class="w3-bar-item w3-button">Apply Now</a>
                    <a href="/admissions?tab=feeb" class="w3-bar-item w3-button">FEES</a>
                </div>
            </div>


            <div class="w3-dropdown-hover">

                <a href="/academics" class="w3-button w3-hide-medium w3-hide-small {{ $name === 'academics' ? 'w3-grey' : '' }}">Academics</a>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="/academics?tab=resultsb" class="w3-bar-item w3-button">Results</a>
                    <a href="/academics?tab=departmentsb" class="w3-bar-item w3-button">Departments</a>
                    <a href="/academics?tab=curriculumb" class="w3-bar-item w3-button">Curriculum</a>
                </div>
            </div>



            <div class="w3-dropdown-hover">

                <a href="/studentlife" class="w3-button w3-hide-medium w3-hide-small {{ $name === 'Student Life' ? 'w3-grey' : '' }}">Student Life</a>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="/studentlife?tab=sportsb" class="w3-bar-item w3-button">Sports</a>
                    <a href="/studentlife?tab=yogab" class="w3-bar-item w3-button">Yoga & Meditation</a>
                    <a href="/studentlife?tab=campb" class="w3-bar-item w3-button">Retreat & Camps</a>
                    <a href="/studentlife?tab=careb" class="w3-bar-item w3-button">Our Care</a>
                    <a href="/studentlife?tab=spiritualb" class="w3-bar-item w3-button">Our Spiritual Practice</a>
                    <a href="/studentlife?tab=cocurricularb" class="w3-bar-item w3-button">Co-Curricular Activites</a>
                    <a href="/studentlife?tab=timetableb" class="w3-bar-item w3-button">Life at BGIS</a>


                </div>
            </div>

            <div class="w3-dropdown-hover">

                <a href="/campus-facilities" class="w3-button w3-hide-medium w3-hide-small {{ $name === 'Campus Facilities' ? 'w3-grey' : '' }}">Campus Facilities</a>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="/campus-facilities?tab=academicb" class="w3-bar-item w3-button">Academic</a>
                    <a href="/campus-facilities?tab=sportb" class="w3-bar-item w3-button">Sport & Fitness</a>
                    <a href="/campus-facilities?tab=artb" class="w3-bar-item w3-button">Art Music & Dance</a>
                    <a href="/campus-facilities?tab=campusb" class="w3-bar-item w3-button">Eco friendly campus</a>
                    <a href="/campus-facilities?tab=laboratoryb" class="w3-bar-item w3-button">Laboratory & Hands-on</a>
                    <a href="/campus-facilities?tab=hostelb" class="w3-bar-item w3-button">Hostel/Ashram</a>
                    <a href="/campus-facilities?tab=timetableb" class="w3-bar-item w3-button">Temple</a>
                </div>
            </div>



            <div class="w3-dropdown-hover">

                <a href="/contribute" class="w3-button w3-hide-medium w3-hide-small {{ $name === 'contribute' ? 'w3-grey' : '' }}">Contribute</a>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="/contribute?tab=taxb" class="w3-bar-item w3-button">Tax Benefits</a>
                    <a href="/contribute?tab=onlineb" class="w3-bar-item w3-button">Pay Online</a>
                    <a href="/contribute?tab=directb" class="w3-bar-item w3-button">Direct Bank Transfer</a>
                    <a href="/contribute?tab=homeb" class="w3-bar-item w3-button">Donate From Home</a>
                </div>
            </div>



            <a href="/news" class="w3-button w3-bar-item w3-hide-medium w3-hide-small">News & Events</a>




        <!-- <a href="/contact" class="w3-bar-item w3-button w3-hide-medium w3-hide-small {{ $name === 'contact' ? 'w3-grey' : '' }}">Contact Us</a> -->

            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large" onclick="w3_open()">Menu
                &#9776;</a>
        </div>
    </div>
</div>

@if($showPagesHero)

    <div class="w3-display-container pages-hero animatedParent">
        <img style="width:100%" class="w3-image" src="{{ asset('images/'.$imageName) }}">
        <img class="w3-display-right w3-image w3-opacity header-style" src="{{ asset('images/header-style.png') }}">
        <div class="w3-display-right" style="right:11.5%">
            <div class="animated fadeInRightShort">
                <h1>{{$pageName}}</h1>
            </div></div></div>

    <div class="breadcrumbs w3-white">
        <div class="w3-content"><div class="bgis-width w3-container"><p><a href="/">HOME</a> >
                    {{$pageName}}
                </p></div></div></div>

@endif

@yield('body')

<div class="base-color {{ $name === 'home' ? '': 'footer'}}">
    <div class="w3-row w3-content footerlinks">
        <div class="w3-col l3 m3 s6 footersec">
            <div class=" w3-border-right w3-border-white"><span class="w3-tiny w3-text-white">
                    <a href="/about"><ins>About</ins></a><br>
                    <a href="/about?tab=founderb">Founder and Vision</a><br>
                    <a href="/about?tab=directorb">From Director's Desk</a><br>
                    <a href="/about?tab=whybgisb">Why BGIS?</a><br>
                    <a href="/about?tab=newcampusb">Campus Facilities</a><br>
                    <a href="/about?tab=achievementsb">Achivements</a><br>
                </span></div>
        </div>

        <div class="w3-col l3 m3 s6 footersec">
            <div class="w3-border-right w3-border-white"><span class="w3-tiny w3-text-white">
                    <a href="/admissions"><ins>Admission</ins></a><br>
                    <a href="/admissions">Admission Procedure</a><br>
                    <a href="/admissions?tab=helpb">Admission Help</a><br>
                    <a href="/admissions?tab=applyb">Apply Now</a><br>
                    <a href="/admissions?tab=feeb">Fee</a><br>
                    <br>
                </span></div>
        </div>

        <div class="w3-col l3 m3 s6 footersec">
            <div class="w3-border-right w3-border-white"><span class="w3-tiny w3-text-white">
                    <a href="/academics"><ins>Academics</ins></a><br>
                    <a href="/academics?tab=resultsb">Results</a><br>
                    <a href="/academics?tab=departmentsb">Departments</a><br>
                    <a href="/academics?tab=curriculumb">Curriculum</a><br>
                    <br>
                </span></div>
        </div>


        <div class="w3-col l3 m3 s6 footersec">
            <div class="w3-border-right w3-border-white"><span class="w3-tiny w3-text-white">
                    <a href="#"><ins>Important Links</ins></a><br>
                    <a href="/skill-development-courses">Skill Development Courses</a> <br>
                    <!--   <a href="/community-scholarship">Community Scholarship</a>  <br> -->
                    <a href="#">Community Scholarship</a>  <br>
                    <a href="http://199.79.62.227:2095">Webmail</a>  <br>


                </span></div>
        </div>
    </div>
</div>

<div style="background-color:#6E6E6E" class="w3-text-white">
    <div class="w3-row w3-content">
        <div class="w3-col l3 m3 footersec">
            <img class="w3-image" src="{{ asset('images/logof.png') }}">
        </div>

        <div class="w3-col l5 m5 footersec">
            <p><strong>Bhaktivedanta Gurukula and International School</strong><br>
                <span style="font-weight:400"> Swami Marg,<br>
                                Raman Reti, Vrindavan, Mathura<br>
                                Uttar Pradesh, 281121<br>
                                India</span></p>


        </div>

        <div class="w3-col l4 m4 footersec">
            <p><strong>For Admission Call Us at</strong><br>

                <span style="font-weight:400"> +91 7088016910, +91-7088004339,<br>
                                        E-mail : info@bgis.org , <br>
                                        E-mail : bgis.admissions@gmail.com
                                    </span></p>

            <div class="w3-bar w3-text-white w3-xlarge">
                <a href="https://www.facebook.com/bgisupdates" class="w3-bar-item"><i class="fab fa-facebook"></i></a>
                <a href="https://www.youtube.com/channel/UCX9KAuZ2WVx4_vQ-3FA4C3w" class="w3-bar-item"><i class="fab fa-youtube"></i></a>
                <a href="https://www.flickr.com/photos/iskcon_bgis/albums" class="w3-bar-item"><i class="fab fa-flickr"></i></a>

            </div>
        </div>

        <div class="w3-center w3-padding-large">
            <img src="{{asset('images/iskcon.jpg')}}" style="max-width:150px" class="w3-image w3-card-4">
            <p class="w3-text-white">An Educational Activity by ISKCON</p>
        </div>
    </div>


    <div class="w3-black w3-padding w3-center w3-shadow">
            <span class="w3-center w3-text-grey">Website designed and managed by <a class="w3-text-red" href="https://www.digiinfy.com" target="__blank"> DiGi Infy </a>
            </span>
    </div>




    <script type="text/javascript">
        $(document).ready(function () {
            $('#slider1').tinycarousel();
        });
    </script>

    <script>
        function w3_open() {
            document.getElementById("mobile-sidebar").style.display = "block";
        }

        function w3_close() {
            document.getElementById("mobile-sidebar").style.display = "none";
        }
    </script>



    <script src="{{ asset('js/css3-animate-it.js') }}"></script>


    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KM4BTWX"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</div>

</body>
</html>

