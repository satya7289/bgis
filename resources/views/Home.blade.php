@extends('pages-layout')
{{--@section('page-title', 'One of the Top Boarding Schools in India')--}}

{{-- new changes --}}
{{--@section('page-title', 'About Us')--}}

{{-- new changes --}}
@php
    if(isset($page))
     {
      $images = $page->image;
      $title = $page->title;
      $keyword = $page->keyword;
      $description = $page->description;
     }
    else
      $images = '';
@endphp
@if(isset($page))
@section('page-title') {{ $title}} @endsection
@section('meta-keywords'){{ $keyword }} @endsection
@section('meta-description') {{ $description }} @endsection
@endif
{{-- end changes --}}

@section('body')

@php
    use App\Http\Controllers\ImageController;
       if ($images)
       {
        $i1 = ImageController::findIndex($images,'images/hom-hero.png');
        $i2 = ImageController::findIndex($images,'images/slider3.jpg');
        $i3 = ImageController::findIndex($images,'images/slider4.png');
        $i4 = ImageController::findIndex($images,'images/slider1.jpg');
        $i5 = ImageController::findIndex($images,'images/slider2.jpg');
        $i6 = ImageController::findIndex($images,'images/bgis_home.jpg');
        $i7 = ImageController::findIndex($images,'images/pslides/pslide1.jpg');
        $i8 = ImageController::findIndex($images,'images/pslides/pslide2.jpg');
        $i9 = ImageController::findIndex($images,'images/pslides/pslide3.jpg');
        $i10 = ImageController::findIndex($images,'images/logon.png');
        $i11= ImageController::findIndex($images,'images/s1.png');
        $i12 =ImageController::findIndex($images,'images/s2.png');
        $i13 =ImageController::findIndex($images,'images/s3.png');

        if($i1==-1 || $i2==-1 || $i3==-1 || $i4==-1 || $i5==-1 || $i6==-1 || $i7==-1 ||
            $i8==-1 ||$i9==-1 || $i10==-1 || $i11==-1 || $i2==-1 || $i13==-1
             )
         dd("You Have make some image path wrong !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!");
       }
@endphp

    <div class="hero animatedParent">
        <div class="w3-content">
            <div class="w3-row">
                <div class="w3-col l5">
                    <div class="w3-hide-medium w3-hide-small"><br><br><br></div>
                    <div class="qSlides">
                    <p class="home-q w3-hide-small w3-hide-medium animated fadeInLeftShort">
                        <i style="margin-bottom:4px" class="fas fa-quote-left"></i> To prepare fine citizens of the
                        world,<br>
                        men of character and competence,<br>
                        who can lead and inspire others. <i class="fas fa-quote-right"></i>
                        <br><br>
                        <span style="font-size:15px">Srila Prabhupada</span>
                    </p></div>
                    <div class="qSlides">
                    <p class="home-q w3-hide-small w3-hide-medium animated fadeInLeftShort">
                        <i style="margin-bottom:4px" class="fas fa-quote-left"></i> If the children are given a Krishna Conscious
                         education from early childhood, then there is
                          great hope for the future of the world. <i class="fas fa-quote-right"></i>
                        <br><br>
                        <span style="font-size:15px">Srila Prabhupada</span>
                    </p></div>

                    <div class="qSlides">
                        <p class="home-q w3-hide-small w3-hide-medium animated fadeInLeftShort">
                            <i style="margin-bottom:4px" class="fas fa-quote-left"></i>
                            The old system of Gurukula should be revived as the perfect example of a system designed to produce great men, sober and responsible leaders.
                            <i class="fas fa-quote-right"></i>
                            <br><br>
                            <span style="font-size:15px">Srila Prabhupada</span>
                        </p></div>


                </div>

                <div class="w3-col l7">
                    <div class="w3-display-container">
                        <img class=" mySlides w3-image home-slider" style="border-radius: 0 0 0 120px;z-index:9;"
{{--                             src="{{ asset('images/hom-hero.png') }}" title="" alt="">--}}
                        src="{{ asset($images[$i1]->path) }}" alt="{{ $images[$i1]->alt }}" title="{{ $images[$i1]->title }}">

                        <img class=" mySlides w3-image home-slider" style="border-radius: 0 0 0 120px;z-index:9"
{{--                             src="{{ asset('images/slider3.jpg') }}" title="" alt="">--}}
                        src="{{ asset($images[$i2]->path) }}" alt="{{ $images[$i2]->alt }}" title="{{ $images[$i2]->title }}">
                             <img class=" mySlides w3-image home-slider" style="border-radius: 0 0 0 120px;z-index:9"
{{--                             src="{{ asset('images/slider4.png') }}">--}}
                        src="{{ asset($images[$i3]->path) }}" alt="{{ $images[$i3]->alt }}" title="{{ $images[$i3]->title }}">
                             <img class=" mySlides w3-image home-slider" style="border-radius: 0 0 0 120px;z-index:9"
{{--                             src="{{ asset('images/slider1.jpg') }}">--}}
                        src="{{ asset($images[$i4]->path) }}" alt="{{ $images[$i4]->alt }}" title="{{ $images[$i4]->title }}">
                        <img class=" mySlides w3-image home-slider" style="border-radius: 0 0 0 120px;z-index:9"
{{--                             src="{{ asset('images/slider2.jpg') }}">--}}
                        src="{{ asset($images[$i5]->path) }}" alt="{{ $images[$i5]->alt }}" title="{{ $images[$i5]->title }}">

                        <button class="w3-button w3-white w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                        <button class="w3-button w3-white w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
                    </div>
                </div>


            </div>
        </div>
    </div>


<!--===============  Welcome to iskcon part ===========================-->
    <div class="w3-content">
        <div class="w3-row animatedParent"><br><br>
            <h3 class="script animated fadeInUpShort">
                <span>Welcome to <em class="text-color">ISKCON's</em> Largest Residential School</span>
            </h3>
            <div class="w3-container w3-col l7 m7 admissions-home-text">
                <p class="animated fadeInRightShort w3-small">
                    Bhaktivedanta Gurukula and International School (BGIS) was founded by HDG A. C
                    Bhaktivedanta Swami Srila Prabhupada, the founder Acharya of ISKCON, in 1975. He envisioned
                    to create men of character and competence who can lead and inspire others. The ICSE / ISC affiliated
                    school ranks 16th best boarding school in India, provides a unique experience of education - both spiritiual and
                    academic - that can evolve the children into becoming the next league of scientists, social activists, entrepreneurs,
                    professionals, Olympic winners etc. - but with a compassionate heart to serve the society.<br><br>


                    BGIS is celebrating the inauguration of its new campus with world-class
                    facilities for the holistic development of its students. Located in a serene
                    environment away from the hustle bustle of a city, the new campus of BGIS
                    provides the latest facilities, adopting the latest technology and yet
                    maintains a firm connection with nature and natural way of living.<br><br>

                </p>
            </div>

            <div class="home-about-pic w3-col l5 m5 animatedParent w3-center">
                <img class="w3-image animated fadeInLeftShort"
                     src="{{ asset($images[$i6]->path) }}" alt="{{ $images[$i6]->alt }}" title="{{ $images[$i6]->title }}">
                <br><br>
                <a href="/admissions?tab=applyb" class="w3-button w3-green animated rollIn">Apply Now For Admissions</a>
            </div>
        </div>
    </div>

<!--===============  Welcome to iskcon end  part ===========================-->

<!--===============  WHAT MAKES US SPECIAL part ===========================-->

<br><br><br><br><br>

    <div class="w3-light-grey w3-padding">
        <div class="w3-row-padding w3-content">
            <div class="w3-col l2 w3-hide-small w3-hide-medium">
                <img class="w3-image"
                     src="{{ asset($images[$i10]->path) }}" alt="{{ $images[$i10]->alt }}" title="{{ $images[$i10]->title }}">
            </div>
            <div class="w3-col l10 animatedParent">
                <h2 class="w3-red animated fadeInUpShort" style="font-weight:600; padding-left:10px">WHAT MAKES US
                    SPECIAL</h2>
                <p class="text-align:justify" style="font-size:110%;color:#ec3136;font-weight:600;">“A sound mind in a
                    sound body, is a short, but full description of a happy state in this world.”
                    <br>
                    <span style="font-size:100%;color:black">BGIS believes in holistic development of your child, which incorporates:</span>
                </p>
            </div>
        </div>

        <div class="w3-content home-special">
            <div class="w3-row-padding animatedParent">
                <div class="w3-col l4 m4 w3-center animated fadeIn w3-hover-sepia"><a href="/studentlife" style="text-decoration:none">
                    <div class="base-color w3-card w3-round">
                        <div class="w3-display-container">
                            <img class="w3-image w3-round"
                                 src="{{ asset($images[$i11]->path) }}" alt="{{ $images[$i11]->alt }}" title="{{ $images[$i11]->title }}">
                            <div class="w3-display-bottommiddle w3-container w3-text-white base-color"><p>Student
                                    Life</p>
                            </div>
                        </div>
                        <ul class="base-color">
                            <li>Academics Education</li>
                            <li>Spiritual Education</li>
                            <li>Personal and Social Skills</li>
                            <li>Co-Curricular and Sports</li>
                          <br><br>
                        </ul>
                    </div></a>
                </div>
                <div class="w3-col l4 m4 w3-center animated fadeIn w3-hover-sepia"><a href="/about?tab=newcampusb" style="text-decoration:none">
                    <div class="base-color w3-card w3-round">
                        <div class="w3-display-container">
                            <img class="w3-image w3-round"
                                 src="{{ asset($images[$i12]->path) }}" alt="{{ $images[$i12]->alt }}" title="{{ $images[$i12]->title }}">
                            <div class="w3-display-bottommiddle w3-container w3-text-white base-color"><p>Facilities</p>
                            </div>
                        </div>
                        <ul class="base-color">
                            <li>Eco Friendly Campus Features</li>
                            <li>Indoor and Outdoor Sports</li>
                            <li>24x7 Security and Medical Care</li>
                            <li>Well Equipped Science and IT Lab</li>
                            <br><br>
                        </ul>
                    </div></a>
                </div>
                <div class="w3-col l4 m4 w3-center animated fadeIn w3-hover-sepia"><a href="/faculty" style="text-decoration:none">
                    <div class="base-color w3-card w3-round">
                        <div class="w3-display-container">
                            <img class="w3-image w3-round"
                                 src="{{ asset($images[$i13]->path) }}" alt="{{ $images[$i13]->alt }}" title="{{ $images[$i13]->title }}">
                            <div class="w3-display-bottommiddle w3-container w3-text-white base-color"><p>Faculty</p>
                            </div>
                        </div>
                        <ul class="base-color">
                            <li> Dr. Lila Purusottama Das</li>
                            <li> Harikeshwar Khushwaha</li>
                            <li>V Lokeshwar Kumar</li>
                            <li>Dr. Madhumati Pushkarni Devi</li>
                            <br>
                        </ul>
                    </div></a>
                </div>
            </div>
        </div>
    </div>

<!--===============  WHAT MAKES US SPECIAL END PART ===========================-->

{{----------------------------------------  Video Gallery-----------------------------------------------------------}}
<div class="w3-light-grey w3-padding">
    <div class="w3-row-padding w3-content">
        <div class="w3-col l2 w3-hide-small w3-hide-medium">
            <img class="w3-image"
                 src="{{ asset($images[$i10]->path) }}" alt="{{ $images[$i10]->alt }}" title="{{ $images[$i10]->title }}">
        </div>
        <div class="w3-col l10 animatedParent">
            <h2 class="w3-red animated fadeInUpShort" style="font-weight:600; padding-left:10px">BGIS VIDEO GALLERY</h2>
            <p class="text-align:justify" style="font-size:110%;color:#ec3136;font-weight:600;">“Hear from our advocates.”
                <br>
            </p>
        </div>
    </div>

    <div  class="page wrapper">
        <div class="row clearfix">
            <div class="col span_6 fwImage">
                <div id="video-gallery" class="royalSlider videoGallery rsDefault">
{{--                    <a class="rsImg" data-rsw="843" data-rsh="473" data-rsVideo="{{ $yvlink->link }}" href="{{ asset('images/youtube/prabhu.jpg') }}">--}}
                    <a class="rsImg" data-rsw="843" data-rsh="473" data-rsVideo="{{ $yvlink->link }}" href="{{ asset('images/youtube/prabhu.jpg') }}">
                        <div class="rsTmb">
                            <h5>Importance of Saatvik Food </h5>
                            <span>by Amogh lila prabhu</span>
                        </div>
                    </a>

                    <div class="rsContent">
{{--                        <a class="rsImg" data-rsVideo="https://youtu.be/wKr0gI95Tg4" href="{{ asset('images/youtube/nakul.jpg')}}">--}}
                        <a class="rsImg" data-rsVideo="https://youtu.be/wKr0gI95Tg4" href="{{ asset('images/youtube/nakul.jpg')}}">
                            <div class="rsTmb">
                                <h5>BGIS Changing lives</h5>
                                <span>by Nakul - EX-STUDENT</span>
                            </div>
                        </a>
                    </div>
{{--                    <a class="rsImg" data-rsVideo="https://youtu.be/E01oJ0stdCY" href="{{ asset('images/youtube/saran.jpg')}}">--}}
                    <a class="rsImg" data-rsVideo="https://youtu.be/E01oJ0stdCY" href="{{ asset('images/youtube/saran.jpg')}}">
                        <div class="rsTmb">
                            <h5>BGIS Changing lives</h5>
                            <span>by Saran - EX-STUDENT</span>
                        </div>
                    </a>
                    <a class="rsImg" data-rsVideo="https://youtu.be/7l4yY47v9LM" href="{{ asset('images/youtube/narayani.jpg')}}">
                        <div class="rsTmb">
                            <h5>A New Perspective Of Education</h5>
                            <span>by CA Sonu Gupta</span>
                        </div>
                    </a>

{{--                    <a class="rsImg" data-rsVideo="https://youtu.be/9QCl2F3fvIE" href="{{ asset('images/youtube/bgis.jpg')}}">--}}
                    <a class="rsImg" data-rsVideo="https://youtu.be/9QCl2F3fvIE" href="{{ asset('images/youtube/bgis.jpg')}}">
                        <div class="rsTmb">
                            <h5>Vocational Training</h5>
                            <span>Skill development </span>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>


</div>

{{------------------------------------ END Video Gallry ------------------------------------------------------------}}


<br>
<!--=============== NEWS AND EVENT PART ===========================-->

<div class="w3-row w3-grey ">
    <h1 class="script">
        <span><em class="text-color">EVENTS</em> & NEWS</span>
    </h1>
    <div id="slider1">
        <a class="buttons prev" href="#">&#60;</a>
        <div class="viewport">
            <ul class="overview">

                    @foreach ($news as $event)

                    <?php
                    $dateString = $event->created_at->toDateString();
                    $dateArray = explode('-', $dateString);
                    $monthString = $dateArray[1];
                    if ($monthString < 10) {
                        $monthStringArray = str_split($monthString);
                        $monthNumber = $monthStringArray[1];
                    } else {
                        $monthNumber = $monthString;
                    }

                    $monthArray = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                     ?>



                        <li>
                            <div style="height:99%" class="w3-card w3-container w3-light-grey w3-round">
                                <div class="base-color w3-text-white w3-center w3-round w3-card">
                                    <h5>{{ $dateArray[2] }} {{ $monthArray[$monthNumber -1] }}<br>
                                        <span style="font-size: 70%">{{$dateArray[0]}}</span></h5>
                                </div>
                                <p class="text-color">
                                        <a href="/news/{{ $event->slug }}"> {{$event->title}}</a>
                                </p>
                                <p style="max-height:120px" class="w3-small">
                                    {!! $event->exp !!}
                                </p>
                                <p class="text-color">
                                    <a href="/news/{{ $event->slug }}">Read More >></a>
                                </p>
                            </div>
                        </li>
                    @endforeach
            </ul>
        </div>
        <a class="buttons next" href="#">&#62;</a>

</div>
</div>

<!--=============== NEWS AND EVENT END PART ===========================-->



<script>
            var slideIndexp = 0;
            showDivsp(slideIndexp);

            function plusDivsp(np) {
                showDivsp(slideIndexp += np);
            }

            function showDivsp(np) {
                var ip;
                var xp = document.getElementsByClassName("pSlides");
                if (np > xp.length) {
                    slideIndexp = 1
                }
                if (np < 1) {
                    slideIndexp = xp.length
                }
                ;
                for (ip = 0; ip < xp.length; ip++) {
                    xp[ip].style.display = "none";
                }
                xp[slideIndexp - 1].style.display = "block";
            }


            carouselp();

            function carouselp() {
                var ip;
                var xp = document.getElementsByClassName("pSlides");
                for (ip = 0; ip < xp.length; ip++) {
                    xp[ip].style.display = "none";
                }
                slideIndexp++;
                if (slideIndexp > xp.length) {
                    slideIndexp = 1
                }
                xp[slideIndexp - 1].style.display = "block";
                setTimeout(carouselp, 5000);
            }


        </script>

<script>
    var slideI = 0;
carouselQ();
    function carouselQ() {
    var iq;
    var xq = document.getElementsByClassName("qSlides");
    for (iq = 0; iq < xq.length; iq++) {
        xq[iq].style.display = "none";
    }
    slideI++;
    if (slideI > xq.length) {slideI = 1}
    xq[slideI-1].style.display = "block";
    setTimeout(carouselQ, 5000); // Change image every 2 seconds
    }
</script>

<script>
    var slideIndex = 0;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = x.length
        }
        ;
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex - 1].style.display = "block";
    }


    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > x.length) {
            slideIndex = 1
        }
        x[slideIndex - 1].style.display = "block";
        setTimeout(carousel, 5000); // Change image every 2 seconds
    }


</script>


<script id="addJS">
    jQuery(document).ready(function($) {
        $('#video-gallery').royalSlider({
            arrowsNav: false,
            fadeinLoadedSlide: true,
            controlNavigationSpacing: 0,
            controlNavigation: 'thumbnails',

            thumbs: {
                autoCenter: false,
                fitInViewport: true,
                orientation: 'vertical',
                spacing: 0,
                paddingBottom: 0
            },
            keyboardNavEnabled: true,
            imageScaleMode: 'fill',
            imageAlignCenter:true,
            slidesSpacing: 0,
            loop: false,
            loopRewind: true,
            numImagesToPreload: 3,
            video: {
                autoHideArrows:true,
                autoHideControlNav:false,
                autoHideBlocks: true
            },
            autoScaleSlider: true,
            autoScaleSliderWidth: 960,
            autoScaleSliderHeight: 450,

            /* size of all images http://help.dimsemenov.com/kb/royalslider-jquery-plugin-faq/adding-width-and-height-properties-to-images */
            imgWidth: 640,
            imgHeight: 360

        });
    });
</script>
@endsection
