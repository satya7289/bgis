@extends('pages-layout')

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
        $i1 =ImageController::findIndex($images,'images/about-w.jpg');
        $i2 = ImageController::findIndex($images,'images/faculty/laxmidhar-behera.jpg');
        $i3 = ImageController::findIndex($images,'images/founder-bgis.jpg');
        $i4 = ImageController::findIndex($images,'images/hhgopalkrishna.jpg');
        $i5 = ImageController::findIndex($images,'images/facilities/bgis_new_campus1.jpg');
        $i6 = ImageController::findIndex($images,'images/facilities/bgis_new_campus2.jpg');
        $i7 = ImageController::findIndex($images,'images/facilities/bgis_new_campus3.jpg');
        $i8 = ImageController::findIndex($images,'images/facilities/bgis_new_campus4.jpg');
        $i9 = ImageController::findIndex($images,'images/facilities/bgis_new_campus5.jpg');
        $i10 = ImageController::findIndex($images,'images/facilities/lab.jpg');
        $i11 = ImageController::findIndex($images,'images/facilities/computerlab.jpg');
        $i12= ImageController::findIndex($images,'images/facilities/bgis_medical_care.png');
        $i13 =ImageController::findIndex($images,'images/facilities/sky.jpg');
        $i14 =ImageController::findIndex($images,'images/facilities/project.jpg');
        $i15 =ImageController::findIndex($images,'images/facilities/solarpower.jpg');
        $i16 =ImageController::findIndex($images,'images/facilities/library.jpg');
        $i17 =ImageController::findIndex($images,'images/facilities/chemlab.jpg');
        $i18 =ImageController::findIndex($images,'images/facilities/ashram.jpg');
        $i19 =ImageController::findIndex($images,'images/facilities/goshala.jpg');
        $i20 =ImageController::findIndex($images,'images/facilities/prasadam.jpg');
        $i21 =ImageController::findIndex($images,'images/facilities/sports.jpg');
        $i22 =ImageController::findIndex($images,'images/facilities/bgis_digital_classrooms.jpg');

        if($i1==-1 || $i2==-1 || $i3==-1 || $i4==-1 || $i5==-1 || $i6==-1 || $i7==-1 ||
            $i8==-1 ||$i9==-1 || $i10==-1 || $i11==-1 || $i2==-1 || $i13==-1 || $i14==-1||
             $i15==-1 ||$i16==-1 || $i17==-1 || $i18==-1 ||  $i9==-1 ||$i20==-1 || $i21==-1 || $i22==-1)
         dd("You Have make some image path wrong !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!");
       }
@endphp

    <div class="w3-content">
        <div class="w3-row">
            <div class="w3-col l3 m3 w3-center">
                <h3 class="w3-border-bottom w3-round w3-hide-small w3-card w3-khaki">ABOUT US</h3>
                <div class="w3-bar-block w3-grey w3-round">
                    <button class="w3-bar-item w3-button w3-hover-red tablink w3-red"
                            onclick="openCity(event,'welcome')">Welcome to BGIS
                    </button>
                    <button class="w3-bar-item w3-button w3-hover-red tablink w3-border-bottom" id="founderb" onclick="openCity(event,'founder')">
                        Founder and Vision
                    </button>
                    <button class="w3-bar-item w3-button w3-hover-red tablink w3-border-bottom" id="directorb" onclick="openCity(event,'director')">From
                        Director's Desk
                    </button>
                    <button class="w3-bar-item w3-button w3-hover-red tablink w3-border-bottom" id="whybgisb" onclick="openCity(event,'whybgis')">Why
                        BGIS?
                    </button>
                    <button class="w3-bar-item w3-button w3-hover-red tablink w3-border-bottom" id="newcampusb" onclick="openCity(event,'newCampus')">Campus Facilities
                    </button>
                    <button class="w3-bar-item w3-button w3-hover-red tablink w3-border-bottom" id="achievementsb" onclick="openCity(event,'achievements')">
                        Our Achievements
                    </button>

                </div>
            </div>

            <div class="w3-col l9 m9 animatedParent"><br>


                <div id="welcome" class="w3-container tabs animated fadeInUpShort">
                    <h3 class="script"><span>Welcome to <em class="text-color">BGIS</em></span></h3>
                    <div class="w3-row">
                        <div class="w3-col l5"><br>
                            <img class="w3-image w3-card w3-round"
{{--                                 src="{{ asset('images/about-w.jpg') }}">--}}
                                    src="{{ asset($images[$i1]->path) }}" alt="{{ $images[$i1]->alt }}" title="{{ $images[$i1]->title }}">
                        </div>
                        <div class="w3-col l7 w3-padding">
                            <p style="text-align:justify">
                                The Bhaktivedanta Gurukula and International School (BGIS), located
                                in the beautiful holy land of Sri Vrindavan dham, the abode of Lord Krishna,
                                offers the best of both worlds - the traditional and the modern education the
                                founder acharya of ISKCON Shri A.C Bhaktivedanta Srila Prabhupada; laid the
                                cornerstone of BGIS in 1976, dham. </p>

                        </div>
                        <div class="w3-col">
                                <p style="text-align:justify">
                                He established BGIS with a need to inculcate
                                real education among youth which comprises of meditation, ‘simple living, high
                                thinking’ motto, along with modern education running in parallel with value-based
                                development, every year Gurukul accepts students from all over the India and from
                                abroad, BGIS is a boarding school for Boys, the campus is spread over 100 acers,
                                and is equipped with all modern amenities.
                                </p>
                        </div>
                    </div>
                </div>


                <div id="director" class="w3-container tabs animated fadeInUpShort" style="display:none">
                    <h3 class="script"><span>From <em class="text-color">Director's Desk</em></span></h3>
                            <div class="w3-row">
                                <div class="w3-col l8 m8">
                                        <p style="text-align:justify">
                                                Dear parents and well-wishers<br><br>
                                                HARE KRISHNA,<br>
                                                I am extremely pleased to let you know that the first phase of our new campus
                                                in Vrindaranyam campus near Ajhai has been completed. In this year 2018,
                                                we have celebrated Janmashtami in this new campus. We conducted an
                                                academic cum spiritual camp in November 2018. Our students are very inspired
                                                and enlivened to enjoy the most modern facilities along with the mode of
                                                goodness ambience.
                                        </p>
                                </div>
                                <div class="w3-col l4 m4" style="padding-top:48px;padding-left:8px">
                                    <img class="w3-image w3-round w3-card"
{{--                                         src="{{ asset('images/faculty/laxmidhar-behera.jpg') }}">--}}
                                             src="{{ asset($images[$i2]->path) }}" alt="{{ $images[$i2]->alt }}" title="{{ $images[$i2]->title }}">
                                </div>
                            </div>
                            <p style="text-align:justify"> The large space along with sporting facilities made them feel
                                    liberated. During these camps, students were engaged in project based learning like
                                    sky gazing, organic farming, Robot based puppet dance, physics and chemistry labs,
                                    waste management, eco-friendly housing and water filtering. They also learn and practice
                                    yoga during these camps under expert guidance. The special emphasis on learning English
                                    and Mathematics in an innovative way is another feature of this camp. Students are
                                    looking
                                    forward to the complete shifting of the school in March 2019. These camps are just a
                                    sample
                                    glimpse of what is in store for our kids.</p>
                            <p style="text-align:justify">
                                Thank you very much for keeping your trust in us which enabled us to set up this world
                                class facility for the kids. We are striving hard to make sure that BGIS students become
                                future role models as leaders, administrators, scientists and entrepreneurs. I look
                                forward
                                to hosting you in this new campus- the spiritual ambience will surely touch your soul.</p>
                                <br>
                                <span class="text-color">-- Lila Purushottam Das</span>
                            <div class="w3-white w3-round w3-padding w3-leftbar w3-border-red">
                                                <p class="w3-small w3-center w3-red w3-text-white">Dr. Lila Purushottam Das</p>
                                            <p class="w3-small ">
                                                    Dr. Lila Purushottam Das is serving as Director of BGIS. He has worked as a faculty member in IIT, Kanpur, Univer-sity of Ulster, UK, BITS Pilani, BI Mumbai, and ETH, Zurich. He has published more than 120 papers in various inter-national and national journals as well as conference proceedings. He is determined to strive hard to bring this school to a level of international repute in terms of academic performance and real-life skills.
                                            </p>
                                    </div>


                        </div>

                <div id="founder" class="w3-container tabs animated fadeInUpShort" style="display:none">

                    <h3 class="script"><span><em class="text-color">Founder</em> & Vision</span></h3>
                    <p class="text-color"><i>Meet the Founder</i></p>

                    <img style="width:100%"
{{--                         src="{{ asset('images/founder-bgis.jpg') }}">--}}
                             src="{{ asset($images[$i3]->path) }}" alt="{{ $images[$i3]->alt }}" title="{{ $images[$i3]->title }}">
                    <p style="text-align:justify" class="">
                        The cornerstone of Bhaktivedanta Gurukula and International School (BGIS) was laid by
                        ISKCON Founder Acharya A.C. Bhaktivedanta Swami Srila Prabhupada, the Founder Acharya of
                        International Society for Krishna Consciousness (ISKCON). He laid the corner-stone in 1975
                        with a vision of imparting complete education in a spiritual setting.<br><br>
                        The basis of knowledge is to “Question our Experience”. Knowledge brings in freedom and
                        fearlessness. The meaning of complete education is that the students who get complete knowledge
                        are capable of giving direction to society. They can bring in revolution within the society in
                        a more meaningful manner.<br><br>
                        The Bhaktivedanta model of education is based on Indian Gurukula style of education adapted
                        to contemporary societal needs. BGIS offers the best of both worlds - traditional and modern,
                        Vedic and contemporary, spiritual and temporal. As an International School, we offer the
                        students
                        the world class quality education. Simultaneously students inculcate spiritual values based on
                        teaching given in Bhagavad-Gita. Thus, the BGIS experience gives a student the opportunity to
                        excel in his studies while holding on to spiritual values. The outcome is a well balanced
                        individual ready to take on life’s challenges. Each feature of BGIS is geared to bring out
                        the best in every student. To offer them not just classroom lessons but a few lessons in life
                        as well. To help them rise above just being good students and let them out into the world as
                        good people.
                        <span class="text-color">- Srila Prabhupada</span>
                    </p>

                    <br>
                    <br>

                    <div class="w3-white w3-round w3-padding w3-leftbar w3-border-red">
                        <div class="w3-row">
                                <p class="w3-red w3-text-white w3-padding">HH GOPAL KRISHNA GOSWAMI MAHARAJ</p>
                            <div class="w3-col l4 m4">
                                <br>
                                <img class="w3-image w3-round w3-card"
{{--                                     src="{{ asset('images/hhgopalkrishna.jpg') }}">--}}
                                        src="{{ asset($images[$i4]->path) }}" alt="{{ $images[$i4]->alt }}" title="{{ $images[$i4]->title }}">

                                <i class="w3-small w3-text-dark-grey"> GBC & CHAIRMAN ISKCON</i>
                            </div>
                            <div class="w3-col l8 m8 w3-container">
                                <p>
                                        Bhaktivedanta Gurukul and International School is a school with a difference.
                                        The children are going to get the best education in a very conducive, eco-friendly environment.
                                        This is a project with a difference and this project will produce children with good spiritual
                                        education, good character and will be a great help to the society and humanity at large.</p>
                                         Hare krishna.

                                        <br><br><span class="w3-tiny">- Your well wisher in service of Srila Prabhupada, Gopal Krishna Goswami</span>
                            </div>
                        </div>

                    </div>

                </div>


                <div id="whybgis" class="w3-container tabs animated fadeInUp" style="display:none">
                    <h2 class="script"><span>Why <em class="text-color">BGIS?</em></span></h2>
                    <p style="text-align:justify">
                        Each feature of BGIS is geared to bring out each students best. To offer
                        them not just classroom lessons but a few lessons in life as well. To help
                        them rise above just being good students and let them out into the world as
                        good people. Which is why we call ourselves a Gurukula. Here, the students imbibe
                        in their hearts a devotion to Lord Krishna based on the teachings of the Bhagvad-Gita.
                        Teachings that are delivered not sentimentally or dogmatically but in a philosophical
                        and cultural way, using both contemporary and traditional educational methods. BGIS is
                        only Boarding School in India to impart both Values and academics.
                    </p>
                    <div class="w3-white w3-round w3-container">
                        <div class="w3-row">
                            <div class="w3-col l4 m8 s8">
                                <div class="w3-row">
                                    <div class="w3-col l4 m4 s4 w3-center">
                                        <h1 class="w3-red letters animated shake">B</h1>
                                    </div>
                                    <div class="w3-col l8 m8 s8 w3-container">
                                        <p><span class="text-color">BHAKTIVEDANTA</span><br>
                                            <span class="w3-small">Way of Life</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="w3-col l8 m4 s4" style="padding-top:25px;">
                                <div class="w3-bottombar w3-border-red" style="width:100%"></div>
                            </div>
                        </div>
                        <p style="text-align:justify;font-size: 13px" class="w3-text-dark-grey">Bhaktivedanta Gurukula
                            and International School (BGIS) was founded by HDG A. C
                            Bhaktivedanta Swami Srila Prabhupada, the founder Acharya of ISKCON, in 1975.
                            	He envisioned to create men
                            	Of character and competence who can lead and inspire others.
                            	The ICSE / ISC affiliated school ranks 16th
                            	Best boarding school in India provides a unique experience of education – both spiritual and
                            academic – That can evolve the children into becoming the next league of scientists, social activists,
                            entrepreurs, Professionals, Olympic winners etc – but with a compassionate heart to serve the society.
                            	"The old system of gurukula should be revived as the perfect example of a system designed to
                            produce great men, sober and responsible leaders




                        </p>
                    </div>
                    <br>
                    <div class="w3-white w3-round w3-container">
                        <div class="w3-row">
                            <div class="w3-col l4 m8 s8">
                                <div class="w3-row">
                                    <div class="w3-col l4 m4 s4 w3-center">
                                        <h1 class="w3-red letters animated shake">G</h1>
                                    </div>
                                    <div class="w3-col l8 m8 s8 w3-container">
                                        <p><span class="text-color">GURUKULA</span><br>
                                            <span class="w3-small">Lifestyle</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="w3-col l8 m4 s4" style="padding-top:25px;">
                                <div class="w3-bottombar w3-border-red" style="width:100%"></div>
                            </div>
                        </div>
                        <p style="text-align:justify;font-size: 13px" class="w3-text-dark-grey">
                        	    <ul>
                        	    <li>A rejuvenating morning program that starts as early as 5 am</li>
                               	<li>Daily meditation and yoga exercise</li>
                            	<li> Sloka recitation and lectures about vedic heritage</li>
                            	<li>Disciplined lifestyle away from mobiles with moderated use of technology </li>
                            	<li>Chemical free food and milk from our own farm and Gaushala</li>
                            	<li>Extensive cultural programs in traditional arts, music and dance </li>
                            	<li>Enlivening Trips to Holy Places</li>
                            	<li>Daily engagement in serving community</li>
                            </ul>
                        </p>
                    </div>

                    <br>
                    <div class="w3-white w3-round w3-container">
                        <div class="w3-row">
                            <div class="w3-col l4 m8 s8">
                                <div class="w3-row">
                                    <div class="w3-col l4 m4 s4 w3-center">
                                        <h1 class="w3-red letters animated shake">I</h1>
                                    </div>
                                    <div class="w3-col l8 m8 s8 w3-container">
                                        <p><span class="text-color">INTERNATIONAL</span><br>
                                            <span class="w3-small">Standards</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="w3-col l8 m4 s4" style="padding-top:25px;">
                                <div class="w3-bottombar w3-border-red" style="width:100%"></div>
                            </div>
                        </div>
                        <p style="text-align:justify;font-size: 13px" class="w3-text-dark-grey">
                        	<ul>
                        	<li>India’s Largest Gurukula spread over 60 acres, affiliated with ICSE board
                            <li> 100% digital Classrooms</li>
                            <li>Round the clock medical facilities</li>
                            <li>Exceptionally spacious hostel and class rooms</li>
                            <li>Sports facilities – basketball, volleyball, football ground among others</li>
                            <li>Zero tolerance on corporal punishment</li>
                        </ul>
                        </p>
                    </div>

                    <br>
                    <div class="w3-white w3-round w3-container">
                        <div class="w3-row">
                            <div class="w3-col l4 m8 s8">
                                <div class="w3-row">
                                    <div class="w3-col l4 m4 s4 w3-center">
                                        <h1 class="w3-red letters animated shake">S</h1>
                                    </div>
                                    <div class="w3-col l8 m8 s8 w3-container">
                                        <p><span class="text-color">SCHOOL</span><br>
                                            <span class="w3-small">Led by a Team of Pioneers</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="w3-col l8 m4 s4" style="padding-top:25px;">
                                <div class="w3-bottombar w3-border-red" style="width:100%"></div>
                            </div>
                        </div>
                        <p style="text-align:justify;font-size: 13px" class="w3-text-dark-grey">
                               <ul>
                            	<li>Guided By HH Gopal Krishna Goswami Maharaj, Chairman, ISKCON Inida</li>
                            	<li>Director, Dr.Lila Purshottam Das, senior professor, IIT Kanpur</li>
                            	<li>Team of academicians from IIT's / Global MBA / best teaching backgrounds</li>
                            	<li>Selfless leaders acting as selfless teachers </li>
                            </ul>

                        </p>
                    </div>


                <!--     <div class="w3-round"
                         style="background-color: #ec3136;
                                background-image: url('{{ asset('images/black-orchid.png') }}');">
                    <div class="w3-center w3-white"><h5>SPECIAL FEATURES</h5></div>
                        <ul class="w3-ul w3-text-white">
                            <li><i class="fas fa-dot-circle"></i> BGIS gives you an opportunity to live in Shri dham Vrindavan </li>
                            <li><i class="fas fa-dot-circle"></i> BGIS is the only Boarding school in India which provides both Spiritual Knowledge as well as the best academic knowledge. </li>
                            <li><i class="fas fa-dot-circle"></i> BGIS has the best academic faculty which includes graduates from IIT KANPUR </li>
                            <li><i class="fas fa-dot-circle"></i> It has the most beautiful campus which includes all the facilities, and also which keeps students near to nature. </li>
                            <li><i class="fas fa-dot-circle"></i> The school offers a choice of the ICSE or the ISC and has a recent track record of excellent examination results and first class university and college placements at home and abroad.</li>
                            <li><i class="fas fa-dot-circle"></i> Teaches students to not only in academics but also the teachings of Bhagvad-Gita </li>
                            <li><i class="fas fa-dot-circle"></i> BGIS provides the best academic education among all the boarding schools in India </li>
                        </ul>
                    </div>

                -->


                </div>


                <div id="newCampus" class="w3-container tabs animated fadeInUpShort" style="display: none;">
                    <h3 class="script"><span>Campus <em class="text-color">Facilities</em></span></h3>
                    <div class="w3-padding-large">

                            <div class="qSlides">
                                    <img style="max-width: 100%;"
{{--                                         src="{{ asset('images/facilities/bgis_new_campus1.jpg') }}">--}}
                                            src="{{ asset($images[$i5]->path) }}" alt="{{ $images[$i5]->alt }}" title="{{ $images[$i5]->title }}">
                            </div>
                            <div class="qSlides">
                                    <img style="max-width: 100%;"
{{--                                         src="{{ asset('images/facilities/bgis_new_campus2.jpg') }}">--}}
                                            src="{{ asset($images[$i6]->path) }}" alt="{{ $images[$i6]->alt }}" title="{{ $images[$i6]->title }}">
                            </div>
                            <div class="qSlides">
                                    <img style="max-width: 100%;"
{{--                                         src="{{ asset('images/facilities/bgis_new_campus3.jpg') }}">--}}
                                            src="{{ asset($images[$i7]->path) }}" alt="{{ $images[$i7]->alt }}" title="{{ $images[$i7]->title }}">
                            </div>
                            <div class="qSlides">
                                    <img style="max-width: 100%;"
{{--                                         src="{{ asset('images/facilities/bgis_new_campus4.jpg') }}">--}}
                                            src="{{ asset($images[$i8]->path) }}" alt="{{ $images[$i8]->alt }}" title="{{ $images[$i8]->title }}">
                            </div>
                            <div class="qSlides">
                                    <img style="max-width: 100%;"
{{--                                         src="{{ asset('images/facilities/bgis_new_campus5.jpg') }}">--}}
                                            src="{{ asset($images[$i9]->path) }}" alt="{{ $images[$i9]->alt }}" title="{{ $images[$i9]->title }}">
                            </div>






                    </div>
                    <br>
                                <h3 class="w3-border-bottom w3-border-black w3-center">VRINDARANYAM</h3>
                                <p class="w3-justify w3-small w3-text-dark-grey">BGIS, Vrindaranyam is located in Ajhai,
                                    Mathura, nearly 12 KM from Sri Sri Krishna Balaram temple,
                                    Vrindavan. Imagine a place in the lap of Mother Nature, full of trees imbued with
                                    divinity, free from
                                    city traffic and commotion, where one can get fresh air, pure water, organic food and
                                    pure milk! This
                                    is Vrindaranyam, the new campus of BGIS spread over an area of 60 acres, comprising of
                                    an academic building,
                                    the hostel building and huge play ground that are up and ready for occupation. Away from
                                    the hustle and bustle
                                    of the city, Vrindaranyam is an ideal place for learning.<br><br></p>


                            <div class="base-color w3-padding">
                                <h3 style="font-weight: 600;" class="w3-text-white w3-border-bottom w3-border-white">
                                    FACILITIES AT VRINDARANYAM</h3>
                                <p class="w3-small w3-text-white">The beautiful eco- friendly campus of Vrindaranyam has
                                    many special features such as</p>
                                <div class="w3-row">
                                    <div class="w3-col l6 m6 w3-text-white w3-border-right w3-border-white w3-padding">
                                    <div class="w3-center w3-padding-large w3-border-bottom w3-border-white"><p>Robotics and Tinkering Labs<br><br></p>
                                        <img style="max-width:200px" class="w3-image w3-circle"
{{--                                             src="{{asset('images/facilities/lab.jpg')}}">--}}
src="{{                                          asset($images[$i10]->path) }}" alt="{{ $images[$i10]->alt }}" title="{{ $images[$i10]->title }}">
                                    </div>
                                    <div class="w3-center w3-padding-large w3-border-bottom w3-border-white"><p>Computer Lab</p>
                                        <img style="max-width:200px" class="w3-image w3-circle"
{{--                                             src="{{asset('images/facilities/computerlab.jpg')}}">--}}
                                                src="{{ asset($images[$i11]->path) }}" alt="{{ $images[$i11]->alt }}" title="{{ $images[$i11]->title }}">
                                    </div>
                                    <div class="w3-center w3-padding-large w3-border-bottom w3-border-white"><p>24x7 Medical Facilities</p>
                                        <img style="max-width:200px" class="w3-image w3-circle"
{{--                                             src="{{asset('images/facilities/bgis_medical_care.png')}}">--}}
                                                src="{{ asset($images[$i12]->path) }}" alt="{{ $images[$i12]->alt }}" title="{{ $images[$i12]->title }}">
                                    </div>

                                    <div class="w3-center w3-padding-large w3-border-bottom w3-border-white"><p>Sky Gazing Facility</p>
                                        <img style="max-width:200px" class="w3-image w3-circle"
{{--                                             src="{{asset('images/facilities/sky.jpg')}}">--}}
                                                src="{{ asset($images[$i13]->path) }}" alt="{{ $images[$i13]->alt }}" title="{{ $images[$i13]->title }}">
                                    </div>

                                    <div class="w3-center w3-padding-large w3-border-bottom w3-border-white"><p>Hands-on project based learning</p>
                                        <img style="max-width:200px" class="w3-image w3-circle"
{{--                                             src="{{asset('images/facilities/project.jpg')}}">--}}
                                                src="{{ asset($images[$i14]->path) }}" alt="{{ $images[$i14]->alt }}" title="{{ $images[$i14]->title }}">
                                    </div>

                                    <div class="w3-center w3-padding-large w3-border-bottom w3-border-white"><p>Solar Power Generation</p>
                                        <img style="max-width:200px" class="w3-image w3-circle"
{{--                                             src="{{asset('images/facilities/solarpower.jpg')}}">--}}
                                                src="{{ asset($images[$i15]->path) }}" alt="{{ $images[$i15]->alt }}" title="{{ $images[$i15]->title }}">
                                    </div>
                                    <div class="w3-center w3-padding-large w3-border-bottom w3-border-white"><p>Library with Audio Visual Labs</p>
                                        <img style="max-width:200px" class="w3-image w3-circle"
{{--                                             src="{{asset('images/facilities/library.jpg')}}">--}}
                                                src="{{ asset($images[$i16]->path) }}" alt="{{ $images[$i16]->alt }}" title="{{ $images[$i16]->title }}">
                                    </div>


                                    </div>
                                    <div class="w3-col l6 m6 w3-text-white w3-padding">
                                            <div class="w3-center w3-padding-large w3-border-bottom w3-border-white"><p>Well-Equipped Physics & Chemistry Lab</p>
                                                <img style="max-width:200px" class="w3-image w3-circle"
{{--                                                     src="{{asset('images/facilities/chemlab.jpg')}}">--}}
                                                        src="{{ asset($images[$i17]->path) }}" alt="{{ $images[$i17]->alt }}" title="{{ $images[$i17]->title }}">
                                            </div>
                                            <div class="w3-center w3-padding w3-border-bottom w3-border-white"><p>Residential Ashrams</p>
                                                <img style="max-width:200px" class="w3-image w3-circle"
{{--                                                     src="{{asset('images/facilities/ashram.jpg')}}">--}}
                                                        src="{{ asset($images[$i18]->path) }}" alt="{{ $images[$i18]->alt }}" title="{{ $images[$i18]->title }}">
                                            </div>
                                            <div class="w3-center w3-padding-large w3-border-bottom w3-border-white"><p>Goshala</p>
                                                <img style="max-width:200px" class="w3-image w3-circle"
{{--                                                     src="{{asset('images/facilities/goshala.jpg')}}">--}}
                                                        src="{{ asset($images[$i19]->path) }}" alt="{{ $images[$i19]->alt }}" title="{{ $images[$i19]->title }}">
                                            </div>
                                            <div class="w3-center w3-padding-large w3-border-bottom w3-border-white"><p>Healthy Prasadam</p>
                                                <img style="max-width:200px" class="w3-image w3-circle"
{{--                                                     src="{{asset('images/facilities/prasadam.jpg')}}">--}}
                                                        src="{{ asset($images[$i20]->path) }}" alt="{{ $images[$i20]->alt }}" title="{{ $images[$i20]->title }}">
                                            </div>
                                            <div class="w3-center w3-padding w3-border-bottom w3-border-white"><p>Football, Basketball, Badminton, Volleyball, Handball, Table Tennis, Swimming Pool</p>
                                                <img style="max-width:200px" class="w3-image w3-circle"
{{--                                                     src="{{asset('images/facilities/sports.jpg')}}">--}}
                                                        src="{{ asset($images[$i21]->path) }}" alt="{{ $images[$i21]->alt }}" title="{{ $images[$i21]->title }}">
                                            </div>

                                            <div class="w3-center w3-padding-large w3-border-bottom w3-border-white"><p>Digital Classrooms</p>
                                                <img style="max-width:200px" class="w3-image w3-circle"
{{--                                                     src="{{asset('images/facilities/bgis_digital_classrooms.jpg')}}">--}}
                                                        src="{{ asset($images[$i22]->path) }}" alt="{{ $images[$i22]->alt }}" title="{{ $images[$i22]->title }}">
                                            </div>




                                    </div>
                                </div>
                            </div>


                    </div>



                <div id="achievements" class="w3-container tabs animated fadeInUpShort" style="display: none;">
                    <h3 class="script"><span>Our <em class="text-color">Achievements</em></span></h3><br>

                    <div class="w3-white w3-round w3-container w3-card">
                        <div class="w3-row-padding">
                            <div class="w3-col l2 m3 s5">
                                <h3 class="w3-red letters animated shake w3-padding-small w3-center">2017</h3>
                            </div>

                           <!-- <div class="w3-rest" style="padding-top:20px;">
                                <div class="w3-bottombar w3-border-red" style="width:100%"></div><br>
                                <div class="w3-bottombar w3-border-black" style="width:100%"></div><br>

                            </div> -->
                        </div>
                        <p style="text-align:justify;font-size: 13px" class="w3-text-dark-grey"><ul>
                            <li>Students got selected in prestigious institutes such as BITS Pilani, NISER and
                                NITs
                            </li>
                            <li>BGIS won the ‘Green School Award</li>
                            <li>Won the Freedom Cup Inter School Debate competition</li>
                        </ul>
                        </p>
                    </div><br>

                    <div class="w3-white w3-round w3-container w3-card">
                        <div class="w3-row-padding">
                            <div class="w3-col l2 m3 s5">
                                <h3 class="w3-red letters animated shake w3-padding-small w3-center">2016</h3>
                            </div>

                           <!-- <div class="w3-rest" style="padding-top:20px;">
                                <div class="w3-bottombar w3-border-red" style="width:100%"></div><br>
                                <div class="w3-bottombar w3-border-black" style="width:100%"></div><br>

                            </div> -->
                        </div>
                        <p style="text-align:justify;font-size: 13px" class="w3-text-dark-grey"><ul>
                            <li>Ranked as the 16th best boys residential school by Education World.</li>
                            <li>Milind Singh, BGIS student qualified and selected in NDA, Pune.</li>

                        </ul>
                        </p>
                    </div><br>

                    <div class="w3-white w3-round w3-container w3-card">
                        <div class="w3-row-padding">
                            <div class="w3-col l2 m3 s5">
                                <h3 class="w3-red letters animated shake w3-padding-small w3-center">2015</h3>
                            </div>

                           <!-- <div class="w3-rest" style="padding-top:20px;">
                                <div class="w3-bottombar w3-border-red" style="width:100%"></div><br>
                                <div class="w3-bottombar w3-border-black" style="width:100%"></div><br>

                            </div> -->
                        </div>
                        <p style="text-align:justify;font-size: 13px" class="w3-text-dark-grey"><ul>
                            <li>Ranked Number 1 Boys Boarding School in U.P. By Education World • Mathura District
                                Swimming Champions.
                            </li>
                            <li>Excellent performance by students in ICSE & ISC Board Exam 2015 • 100% in Commerce
                                in ICSE Board Exam 2015.
                            </li>
                        </ul>
                        </p>
                    </div><br>

                    <div class="w3-white w3-round w3-container w3-card">
                        <div class="w3-row-padding">
                            <div class="w3-col l2 m3 s5">
                                <h3 class="w3-red letters animated shake w3-padding-small w3-center">2014</h3>
                            </div>

                           <!-- <div class="w3-rest" style="padding-top:20px;">
                                <div class="w3-bottombar w3-border-red" style="width:100%"></div><br>
                                <div class="w3-bottombar w3-border-black" style="width:100%"></div><br>

                            </div> -->
                        </div>
                        <p style="text-align:justify;font-size: 13px" class="w3-text-dark-grey"><ul>
                            <li>Topped Mathura District in ISC board, Krishna Mittal Scored 100% in Mathematics.
                            </li>
                        </ul>
                        </p>
                    </div><br>


                    <div class="w3-white w3-round w3-container w3-card">
                        <div class="w3-row-padding">
                            <div class="w3-col l2 m3 s5">
                                <h3 class="w3-red letters animated shake w3-padding-small w3-center">2013</h3>
                            </div>

                           <!-- <div class="w3-rest" style="padding-top:20px;">
                                <div class="w3-bottombar w3-border-red" style="width:100%"></div><br>
                                <div class="w3-bottombar w3-border-black" style="width:100%"></div><br>

                            </div> -->
                        </div>
                        <p style="text-align:justify;font-size: 13px" class="w3-text-dark-grey"><ul>
                            <li>Guru Sharan Agarwal, BGIS student got admission in IIT Kharagpur</li>
                            <li>Best Swimmer Award, District Swimming Championship, Mathura</li>

                        </ul>
                        </p>
                    </div><br>

                    <div class="w3-white w3-round w3-container w3-card">
                        <div class="w3-row-padding">
                            <div class="w3-col l2 m3 s5">
                                <h3 class="w3-red letters animated shake w3-padding-small w3-center">2012</h3>
                            </div>

                           <!-- <div class="w3-rest" style="padding-top:20px;">
                                <div class="w3-bottombar w3-border-red" style="width:100%"></div><br>
                                <div class="w3-bottombar w3-border-black" style="width:100%"></div><br>

                            </div> -->
                        </div>
                        <p style="text-align:justify;font-size: 13px" class="w3-text-dark-grey"> <ul>
                            <li>Top scoring student, ISE Board exams, Mathura District.</li>
                            <li>Best Swimmer Award for the third time, District Swimming Championship, Mathura • Won
                                Interschool District Volleyball Championship 2012
                            </li>
                            <li>Second Prize, National Creativity Olympiad, 2012, IIT Delhi</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>


    <script>
        function openCity(evt, tabName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("tabs");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " w3-red";
        }

@if($tab)
        var nm = "{{$tab}}";
        document.getElementById(nm).click();
@endif
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
        setTimeout(carouselQ, 3000); // Change image every 2 seconds
        }
    </script>

@endsection('body')
