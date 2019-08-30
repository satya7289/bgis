@extends('pages-layout')

{{--@section('page-title', 'Student Life | Top Boarding Schools in India')--}}


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
        $i1 =ImageController::findIndex($images,'images/bgis_peace_day.jpg');
        $i2 =ImageController::findIndex($images, 'images/bgis_student_life.jpg');
        $i3 = ImageController::findIndex($images, 'images/bgis_honey_pot.jpg');
        $i4 = ImageController::findIndex($images,  'images/bgis_yoga.jpg');
        $i5 = ImageController::findIndex($images, 'images/sl/spiritual.jpg');
        $i6 = ImageController::findIndex($images,'images/sl/Narsimgh-Yagya-2.jpg');
        $i7 = ImageController::findIndex($images,  'images/sl/smusic.jpg');
        $i8 = ImageController::findIndex($images, 'images/sl/sports.jpg');
        $i9 = ImageController::findIndex($images,'images/sl/bgis_student_football.jpg');
        $i10 = ImageController::findIndex($images,  'images/icons/yoga.png');
        $i11 = ImageController::findIndex($images, 'images/sl/yoga_bgis.jpg');
        $i12 = ImageController::findIndex($images,  'images/sl/yoga.jpg');
        $i13= ImageController::findIndex($images, 'images/sl/yoga_retreats_bgis.jpg');
        $i14 =ImageController::findIndex($images,  'images/icons/yoga.png');
        $i15 =ImageController::findIndex($images, 'images/sl/bgis_camps.JPG');
        $i16 =ImageController::findIndex($images, 'images/sl/bgis_retreat.JPG');
        $i17 =ImageController::findIndex($images,  'images/sl/bgis_retreat-1.jpg');
        $i18 =ImageController::findIndex($images,'images/sl/bgis_retreat-2.jpg');
        $i19 =ImageController::findIndex($images, 'images/sl/bgis_trip_chitrakoot.jpg');
        $i20 =ImageController::findIndex($images, 'images/icons/music.png');
        $i21 =ImageController::findIndex($images, 'images/sl/bgis_celebration.jpg');
        $i22 =ImageController::findIndex($images,'images/icons/quiz.png');
        $i23 =ImageController::findIndex($images, 'images/sl/lit.jpg');
        $i24 =ImageController::findIndex($images,'images/icons/drama.png');
        $i25 =ImageController::findIndex($images,'images/sl/dramatics_bgis.jpg');
        $i26 =ImageController::findIndex($images, 'images/icons/art.png');
        $i27 =ImageController::findIndex($images, 'images/sl/dramatics_bgis.jpg');
        $i28 =ImageController::findIndex($images,'images/timetable.png');

        if($i1==-1 || $i2==-1 || $i3==-1 || $i4==-1 || $i5==-1 || $i6==-1 || $i7==-1 ||
            $i8==-1 ||$i9==-1 || $i10==-1 || $i11==-1 || $i2==-1 || $i13==-1 || $i14==-1||
             $i15==-1 ||$i16==-1 || $i17==-1 || $i18==-1 ||  $i9==-1 ||$i20==-1 || $i21==-1 ||
             $i22==-1 || $i23==-1 ||$i24==-1 || $i25==-1 || $i26==-1 ||  $i27==-1 ||$i28==-1)
         dd("You Have make some image path wrong !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!");
       }
@endphp


    <div class="w3-content">
    <div class="w3-row">
        <div class="w3-col l3 m3 w3-center">
            <h3 class="w3-border-bottom w3-round w3-hide-small w3-card w3-khaki">Student Life</h3>
            <div class="w3-bar-block w3-grey w3-round">
                <button class="w3-bar-item w3-button w3-hover-red tablink w3-red w3-border-bottom"
                        onclick="openCity(event,'welcome')">Student Life
                </button>
                <button class="w3-bar-item w3-button w3-hover-red tablink w3-border-bottom" id="sportsb" onclick="openCity(event,'sports')">
                        Sports
                    </button>
                <button class="w3-bar-item w3-button w3-hover-red tablink w3-border-bottom" id="yogab" onclick="openCity(event,'yoga')">Yoga and Meditation
                    </button>
                    <button class="w3-bar-item w3-button w3-hover-red tablink w3-border-bottom" id="campb" onclick="openCity(event,'camp')">Retreat and Camps
                        </button>
                    <button class="w3-bar-item w3-button w3-hover-red tablink w3-border-bottom" id="careb" onclick="openCity(event,'care')">Our Care
                        </button>
                <button class="w3-bar-item w3-button w3-hover-red tablink w3-border-bottom" id="spiritualb" onclick="openCity(event,'spiritual')">
                    Our Spiritual Practice
                </button>

                <button class="w3-bar-item w3-button w3-hover-red tablink w3-border-bottom" id="cocurricularb" onclick="openCity(event,'cocurricular')">Co-Curricular Activites
                </button>

                <button class="w3-bar-item w3-button w3-hover-red tablink w3-border-bottom" id="timetableb" onclick="openCity(event,'timetable')">Life at BGIS
                </button>

            </div>
        </div>

        <div class="w3-col l9 m9 animatedParent"><br>
            <div id="welcome" class="w3-container tabs animated fadeInUpShort">
                <h3 class="script"><span>Student <em class="text-color">Life</em></span></h3>

                <h2 class="w3-center">‘TOUCHING THE BODY, MIND AND SOUL' </h2>

                <p class="w3-padding w3-white w3-text-dark-grey">
                        Students at BGIS actively participate in many sporting
                         and co-curricular activities. They are provided
                          sporting facilities They also learn musical
                          instruments, art and craft, dance and drama,
                           singing bhajans and kirtans. Students also compete
                           and perform in local, state and national sporting
                           and cultural events.
                </p>
                <div class="w3-row">
                        <div class="w3-col l3 m3 s6 w3-center w3-padding-small">
{{--                            <img src="{{ asset('images/bgis_peace_day.jpg') }}" class="w3-image w3-card" alt="BGIS">--}}
                            <img src="{{ asset($images[$i1]->path) }}" alt="{{ $images[$i1]->alt }}" title="{{ $images[$i1]->title }}" class="w3-image w3-card" >

                        </div>
                        <div class="w3-col l3 m3 s6 w3-center w3-padding-small">
{{--                                <img src="{{ asset('images/bgis_student_life.jpg') }}" class="w3-image w3-card" alt="BGIS">--}}
                            <img src="{{ asset($images[$i2]->path) }}" alt="{{ $images[$i2]->alt }}" title="{{ $images[$i2]->title }}" class="w3-image w3-card" >

                            </div>
                        <div class="w3-col l3 m3 s6 w3-center w3-padding-small">
{{--                                <img src="{{ asset('images/bgis_honey_pot.jpg') }}" class="w3-image w3-card" alt="BGIS">--}}
                            <img src="{{ asset($images[$i3]->path) }}" alt="{{ $images[$i3]->alt }}" title="{{ $images[$i3]->title }}" class="w3-image w3-card">

                            </div>
                            <div class="w3-col l3 m3 s6 w3-center w3-padding-small">
{{--                                    <img src="{{ asset('images/bgis_yoga.jpg') }}" class="w3-image w3-card" alt="BGIS">--}}
                                <img src="{{ asset($images[$i4]->path) }}" alt="{{ $images[$i4]->alt }}" title="{{ $images[$i4]->title }}" class="w3-image w3-card">

                                </div>
                    </div>

            </div>


            <div id="spiritual" class="w3-container tabs animated fadeInUpShort" style="display:none">
                <h3 class="script"><span>Spiritual <em class="text-color">Practice</em></span></h3>
                <p class="w3-padding w3-white w3-text-dark-grey w3-small w3-justify">
                        A fundamental and unique aspect of the BGIS experience is regular spiritual
                        practice like rising early, mantra meditation, bhajans, kirtans and Shastra
                        studies. Both teachers and students strictly follow four basic tenets of spiritual
                         values austerity, compassion, cleanliness and truthfulness. Students learn these
                          values by following the devotional practices, through exposure to cow protection
                           and organic farm communities.<br><br> Here, the students imbibe in their hearts a devotion
                            to Lord Krishna based on the teachings of the Bhagvad-Gita. Teachings are delivered
                            not sentimentally or dogmatically but in a philosophical and cultural way, using both
                             contemporary and traditional educational methods. This is why we call ourselves
                              a Gurukula.<br><br> Students are privileged to attend many retreats in places such as
                              Mayapur, Jagannatha Puri, Udupi, Gangotri, Jamunautri, and Simla during their stay in BGIS.
                </p>

                <div class="w3-row-padding">
                    <div class="w3-col l6 m6">
                <div class="base-color w3-round w3-container w3-card">
                    <p class="w3-text-white w3-border-bottom w3-border-white"><strong>VAISHNAVA CULTURE</strong></p>
                    <p style="text-align:justify;font-size: 13px" class="w3-text-light-grey">
                        Ancient Vaishnava culture, is a tradition of mutual respect ,integrity,
                        compassion, cleanliness (internal and external), mercy and tolerance. Students
                        are taught to manage their emotions and channelize their energies positively
                        and constructively.
                    </p></div>
                </div>

                <div class="w3-col l6 m6">
                        <div class="base-color w3-round w3-container w3-card">
                            <p class="w3-text-white w3-border-bottom w3-border-white"><strong>MANGAL ARATICKS</strong></p>
                            <p style="text-align:justify;font-size: 13px" class="w3-text-light-grey">
                                    Mangal Artik according to Vaishnava tradition is a very important part of the day. Students get up at 4 a.m. to worship Lord Krishna in the temple. They do every day in spite of the weather, except Sunday <br><br>
                            </p></div>
                        </div>
                </div><br>

                <div class="w3-row-padding">
                    <div class="w3-col l4 m4">
{{--                        <img src="{{asset('images/sl/spiritual.jpg')}}" class="w3-image w3-round">--}}
                        <img src="{{ asset($images[$i5]->path) }}" alt="{{ $images[$i5]->alt }}" title="{{ $images[$i5]->title }}" class="w3-image w3-round">
                    </div>
                    <div class="w3-col l4 m4">
{{--                        <img src="{{asset('images/sl/Narsimgh-Yagya-2.jpg')}}" class="w3-image w3-round">--}}
                        <img src="{{ asset($images[$i6]->path) }}" alt="{{ $images[$i6]->alt }}" title="{{ $images[$i6]->title }}" class="w3-image w3-round">
                    </div>
                    <div class="w3-col l4 m4">
{{--                        <img src="{{asset('images/sl/smusic.jpg')}}" class="w3-image w3-round">--}}
                        <img src="{{ asset($images[$i7]->path) }}" alt="{{ $images[$i7]->alt }}" title="{{ $images[$i7]->title }}" class="w3-image w3-round">
                    </div>
                </div>
                <br>


                    <div class="w3-white w3-round w3-container w3-card">
                            <div class="w3-row">
                                <div class="w3-col l4 m8 s8">
                                    <p><span class="text-color">JAPA MEDITATION
                                        </span><br></p>
                                </div>
                                <div class="w3-rest" style="padding-top:25px;">
                                    <div class="w3-bottombar w3-border-red" style="width:100%"></div>
                                </div>
                            </div>
                            <p style="text-align:justify;font-size: 13px" class="w3-text-dark-grey">
                                The top most yoga system in all traditions is the chanting of the Lord’s Holy Name. Students chant a minimum of four rounds on beads every day. This gives them a strong spiritual foundation for the battles that lie ahead.
                            </p>
                        </div><br>

                        <div class="w3-white w3-round w3-container w3-card">
                                <div class="w3-row">
                                    <div class="w3-col l4 m8 s8">
                                        <p><span class="text-color">DEITY WORSHIP
                                            </span><br></p>
                                    </div>
                                    <div class="w3-rest" style="padding-top:25px;">
                                        <div class="w3-bottombar w3-border-red" style="width:100%"></div>
                                    </div>
                                </div>
                                <p style="text-align:justify;font-size: 13px" class="w3-text-dark-grey">
                                        Each ashram worships Lord Krishna in His Deity form. Students after chanting japa, wake up the Lord, bathes, dresses and perform puja and arati. This is a daily service which gives the students an early start in understanding a deeper aspect of Vaishnava culture where the realization of The Lord being a person is imbibed.
                                </p>
                            </div><br>

                            <div class="w3-white w3-round w3-container w3-card">
                                    <div class="w3-row">
                                        <div class="w3-col l4 m8 s8">
                                            <p><span class="text-color">HONOURING PRASAD

                                                </span><br></p>
                                        </div>
                                        <div class="w3-rest" style="padding-top:25px;">
                                            <div class="w3-bottombar w3-border-red" style="width:100%"></div>
                                        </div>
                                    </div>
                                    <p style="text-align:justify;font-size: 13px" class="w3-text-dark-grey">
                                            This one of the most important aspect of Vaishnava tradition, the honouring of food offered to Lord Krishna. Students enjoy a healthy diet of milk, grains, fruit and vegetables. Food prepared in the mode of good-ness is not only good for the body but also for the soul.
                                    </p>
                                </div><br>
            </div>

            <div id="sports" class="w3-container tabs animated fadeInUpShort" style="display:none">
                <h3 class="script"><span><em class="text-color">Sports</em> at BGIS</span></h3>
                <p class="w3-white w3-padding w3-text-dark-grey w3-justify">
                Sports serve as a healthy outlet for the boy’s youthful energy. Besides providing excellent physical exercise, it helps develop quick thinking, the ability to work in teams, and the capacity to acknowledge the skills and capabilities of others. Students are trained in games like volleyball, basketball, badminton, table tennis, kabaddi and kho-kho. The school holds an annual Sports Day and also participates in various inter school sports competitions.
                </p>
                <div class="w3-row-padding">
                    <div class="w3-col l6 m6">
{{--                <img src="{{asset('images/sl/sports.jpg')}}" class="w3-image w3-card w3-round" alt="">--}}
                        <img src="{{ asset($images[$i8]->path) }}" alt="{{ $images[$i8]->alt }}" title="{{ $images[$i8]->title }}" class="w3-image w3-card w3-round" >
                    </div><div class="w3-col l6 m6">
{{--                <img src="{{asset('images/sl/bgis_student_football.jpg')}}" class="w3-image w3-card w3-round" alt="">--}}
                        <img src="{{ asset($images[$i9]->path) }}" alt="{{ $images[$i9]->alt }}" title="{{ $images[$i9]->title }}" class="w3-image w3-card w3-round" >
                        </div></div>

            </div>

            <div id="yoga" class="w3-container tabs animated fadeInUpShort" style="display:none">
                <h3 class="script"><span><em class="text-color">Yoga &</em>Meditation</span></h3>
                <br><br>
                <div class="w3-container w3-white w3-round w3-card w3-text-dark-grey">
                    <div class="w3-bottombar w3-border-red w3-padding">
                        <div class="w3-cell w3-cell-middle w3-padding">
{{--                            <img src="{{ asset('images/icons/yoga.png') }}" class="w3-image">--}}
                            <img src="{{ asset($images[$i10]->path) }}" alt="{{ $images[$i10]->alt }}" title="{{ $images[$i10]->title }}" class="w3-image">
                        </div>
                        <div class="w3-cell w3-cell-middle">
                            <h4>Yoga</h4>
                        </div>
                    </div>
                    <p class="w3-small w3-text-dark-grey">
                            Yoga and meditation activities are arranged for the students. Living a natural and austere life are
                            some of the challenges the young men face in the wilderness which
                            moulds their character to become the leaders of tomorrow.

                    </p>
                </div><br>
                <div class="w3-row-padding">
                    <div class="w3-col l6 m6">
{{--                        <img src="{{asset('images/sl/yoga_bgis.jpg')}}" class="w3-image w3-card w3-round" alt="">--}}
                        <img src="{{ asset($images[$i11]->path) }}" alt="{{ $images[$i11]->alt }}" title="{{ $images[$i11]->title }}" class="w3-image w3-card w3-round" >
                    </div>
                    <div class="w3-col l6 m6">
{{--                        <img src="{{asset('images/sl/yoga.jpg')}}" class="w3-image w3-card w3-round" alt="">--}}
                        <img src="{{ asset($images[$i12]->path) }}" alt="{{ $images[$i12]->alt }}" title="{{ $images[$i12]->title }}" class="w3-image w3-card w3-round">
                    </div>
                </div>
                <br>
{{--                <img src="{{asset('images/sl/yoga_retreats_bgis.jpg')}}" class="w3-image w3-card" alt="BGIS">--}}
                <img src="{{ asset($images[$i13]->path) }}" alt="{{ $images[$i13]->alt }}" title="{{ $images[$i13]->title }}" class="w3-image w3-card" >



            </div>


            <div id="camp" class="w3-container tabs animated fadeInUpShort" style="display:none">
                    <h3 class="script"><span><em class="text-color">Retreat </em>and Camps</span></h3>
                    <br><br>
                    <div class="w3-container w3-white w3-round w3-card w3-text-dark-grey">
                        <div class="w3-bottombar w3-border-red w3-padding">
                            <div class="w3-cell w3-cell-middle w3-padding">
{{--                                <img src="{{ asset('images/icons/yoga.png') }}" class="w3-image">--}}
                                <img src="{{ asset($images[$i14]->path) }}" alt="{{ $images[$i14]->alt }}" title="{{ $images[$i14]->title }}" class="w3-image">
                            </div>
                            <div class="w3-cell w3-cell-middle">
                                <h4>Retreat & Camps</h4>
                            </div>
                        </div>
                        <p class="w3-small w3-text-dark-grey">
                                Excursion and camps are arranged for students. Living a natural and austere life are
                                some of the challenges the young men face in the wilderness which
                                moulds their character to become the leaders of tomorrow.

                        </p>
                    </div><br>
                    <div class="w3-row-padding">
                        <div class="w3-col l6 m6">
{{--                            <img src="{{asset('images/sl/bgis_camps.JPG')}}" class="w3-image w3-card w3-round" alt="ISKCON Boarding Schools">--}}
                            <img src="{{ asset($images[$i15]->path) }}" alt="{{ $images[$i15]->alt }}" title="{{ $images[$i15]->title }}" class="w3-image w3-card w3-round" >
                        </div>
                        <div class="w3-col l6 m6">
{{--                            <img src="{{asset('images/sl/bgis_retreat.JPG')}}" class="w3-image w3-card w3-round" alt="">--}}
                            <img src="{{ asset($images[$i16]->path) }}" alt="{{ $images[$i16]->alt }}" title="{{ $images[$i16]->title }}" class="w3-image w3-card w3-round" >
                        </div>
                    </div>
 <br>
                     <div class="w3-row-padding">
                        <div class="w3-col l6 m6">
{{--                            <img src="{{asset('images/sl/bgis_retreat-1.jpg')}}" class="w3-image w3-card w3-round" alt="">--}}
                            <img src="{{ asset($images[$i17]->path) }}" alt="{{ $images[$i17]->alt }}" title="{{ $images[$i17]->title }}" class="w3-image w3-card w3-round" >
                        </div>
                        <div class="w3-col l6 m6">
{{--                            <img src="{{asset('images/sl/bgis_retreat-2.jpg')}}" class="w3-image w3-card w3-round" alt="">--}}
                            <img src="{{ asset($images[$i18]->path) }}" alt="{{ $images[$i18]->alt }}" title="{{ $images[$i18]->title }}" class="w3-image w3-card w3-round" >
                        </div>
                    </div>


                    <br>
{{--                    <img src="{{asset('images/sl/bgis_trip_chitrakoot.jpg')}}" class="w3-image w3-card" alt="BGIS">--}}
                <img src="{{ asset($images[$i19]->path) }}" alt="{{ $images[$i19]->alt }}" title="{{ $images[$i19]->title }}" class="w3-image w3-card" >



                </div>


            <div id="cocurricular" class="w3-container tabs animated fadeInUp" style="display:none">
                <h3 class="script"><span>Co-Curricular<em class="text-color"> Activities</em></span></h3>


                <div class="w3-container w3-white w3-round w3-card w3-text-dark-grey">
                        <div class="w3-bottombar w3-border-red w3-padding">
                            <div class="w3-cell w3-cell-middle w3-padding">
{{--                                <img src="{{ asset('images/icons/music.png') }}" class="w3-image">--}}
                                <img src="{{ asset($images[$i20]->path) }}" alt="{{ $images[$i20]->alt }}" title="{{ $images[$i20]->title }}" class="w3-image">
                            </div>
                            <div class="w3-cell w3-cell-middle">
                                <h2>Music & Dance</h2>
                            </div>
                        </div>
                        <div class="w3-row">
                            <div class="w3-col l8 m8">
                        <p class="w3-small w3-text-dark-grey">
                                The Music Department of our school gives training to students in Indian
                                traditional instruments such as the Mridanga and Harmonium. We also train them in vocal Hindustani classical music as well as bhajans. Students also have the opportunity to learn ‘Gotipua’, a traditional Odissi dance for boys that is a traditional dance form of Odisha. Traditional Indian music is a powerful and devotional art form and we encourage all students to actively engage in any one of them.
                        </p></div>
                        <div class="w3-col l4 m4 w3-padding">
{{--                                <img src="{{asset('images/sl/bgis_celebration.jpg')}}" class="w3-image w3-card w3-circle">--}}
                            <img src="{{ asset($images[$i21]->path) }}" alt="{{ $images[$i21]->alt }}" title="{{ $images[$i21]->title }}" class="w3-image w3-card w3-circle">
                        </div>
            </div>
                    </div><br>


                    <div class="w3-container w3-white w3-round w3-card w3-text-dark-grey">
                            <div class="w3-bottombar w3-border-red w3-padding">
                                <div class="w3-cell w3-cell-middle w3-padding">
{{--                                    <img src="{{ asset('images/icons/quiz.png') }}" class="w3-image">--}}
                                    <img src="{{ asset($images[$i22]->path) }}" alt="{{ $images[$i22]->alt }}" title="{{ $images[$i22]->title }}"class="w3-image">

                                </div>
                                <div class="w3-cell w3-cell-middle">
                                    <h2>Quiz and Literary Events</h2>
                                </div>
                            </div>
                            <div class="w3-row">
                                <div class="w3-col l9 m9">
                            <p class="w3-small w3-text-dark-grey">
                                    For every major festival, students participate in a literary quiz. Questions are from ancient scriptures, i.e. Bhagavad Gita, Srimad Bhagavatam and the Ramayana. The prize giving ceremonies are a spectacular event.
                            </p>
                                </div>
                            <div class="w3-col l3 m3 w3-padding">
{{--                                    <img src="{{asset('images/sl/lit.jpg')}}" class="w3-image w3-card w3-circle">--}}
                                <img src="{{ asset($images[$i23]->path) }}" alt="{{ $images[$i23]->alt }}" title="{{ $images[$i23]->title }}" class="w3-image w3-card w3-circle">
                            </div>
                </div>

                        </div><br>


                        <div class="w3-container w3-white w3-round w3-card w3-text-dark-grey">
                                <div class="w3-bottombar w3-border-red w3-padding">
                                    <div class="w3-cell w3-cell-middle w3-padding">
{{--                                        <img src="{{ asset('images/icons/drama.png') }}" class="w3-image">--}}
                                        <img src="{{ asset($images[$i24]->path) }}" alt="{{ $images[$i24]->alt }}" title="{{ $images[$i24]->title }}" class="w3-image">
                                    </div>
                                    <div class="w3-cell w3-cell-middle">
                                        <h2>Dramatics</h2>
                                    </div>
                                </div>
                                <div class="w3-row">
                                    <div class="w3-col l8 m8">
                                <p class="w3-small w3-text-dark-grey">
                                        With classroom plays and productions performed before
                                        thousands, the drama de-partment brings life, color and energy to the school. Learning through drama has always been effective - voice, movement, teamwork and memorization are some of the skills learned, not to mention handling the excite-ment of the performance. Our drama troupe is regularly invited to perform in major Indian cities.
                                </p></div>
                                <div class="w3-col l4 m4 w3-padding">
{{--                                        <img src="{{asset('images/sl/dramatics_bgis.jpg')}}" class="w3-image w3-card w3-circle">--}}
                                    <img src="{{ asset($images[$i25]->path) }}" alt="{{ $images[$i25]->alt }}" title="{{ $images[$i25]->title }}" class="w3-image w3-card w3-circle">
                                </div>
                    </div>

                            </div><br>


                            <div class="w3-container w3-white w3-round w3-card w3-text-dark-grey">
                                    <div class="w3-bottombar w3-border-red w3-padding">
                                        <div class="w3-cell w3-cell-middle w3-padding">
{{--                                            <img src="{{ asset('images/icons/art.png') }}" class="w3-image">--}}
                                            <img src="{{ asset($images[$i26]->path) }}" alt="{{ $images[$i26]->alt }}" title="{{ $images[$i26]->title }}" class="w3-image">
                                        </div>
                                        <div class="w3-cell w3-cell-middle">
                                            <h2>Art</h2>
                                        </div>
                                    </div>
                                    <div class="w3-row">
                                    <div class="w3-col l8 m8">
                                    <p class="w3-small w3-text-dark-grey">
                                            Art is an integral part of learning at BGIS where students are encouraged to express themselves through a variety of art activities such as sketching, modelling, paper mache, painting and mask making. Students participate in inter school art competitions and also engage in the aesthetic decoration of their school campus.
                                    </p>
                                </div>
                                <div class="w3-col l4 m4 w3-padding">
{{--                                        <img src="{{asset('images/sl/dramatics_bgis.jpg')}}" class="w3-image w3-card w3-circle">--}}
                                    <img src="{{ asset($images[$i27]->path) }}" alt="{{ $images[$i27]->alt }}" title="{{ $images[$i27]->title }}" class="w3-image w3-card w3-circle">
                                </div>
                                </div>
                            </div><br>








            </div>


                <div id="care" class="w3-container tabs animated fadeInUp" style="display:none">
                    <h3 class="script"><span>Our<em class="w3-text-green"> Care</em></span></h3>
                    <br>
                    <h3 style="margin-bottom:0" class="w3-padding-large w3-light-green w3-text-white">
                        OUR CARE
                    </h3>
                    <div class="w3-lime w3-padding">
                        <p class="w3-border-bottom w3-border-green"><strong>HEALTHY FOOD</strong>: <span class="w3-text-dark-grey">Students of BGIS enjoy fresh organic
                            food that is grown on campus. They also drink fresh and pure cow’s milk from in-house Goshala.</span><br><br>
                        </p>
                        <p class="w3-border-bottom w3-border-green"><strong>HEALTHY SLEEPING HABITS</strong>:<span class="w3-text-dark-grey">
                                Our primary grade students sleep as early as 7:30 pm and high school students by 9:30pm. They also rise as early as 4 am.
                            <br><br>
                            </span>
                        </p>
                        <p class="w3-border-bottom w3-border-green"><strong>HEALTHY CARE FACILITIES</strong>:
                            <span class="w3-text-dark-grey">
                                    BGIS provides round the clock medical facilities for our students with a well- equipped Health Center and a 24 hour nurse available. We also have doctors on campus during the day.
                                    <br><br>
                            </span>
                        </p>
                        <p><strong>CHILD PROTECTION TEAM</strong>:
                            <span class="w3-text-dark-grey">
                            BGIS follows a zero tolerance to all forms of child abuse including corporal punishment to students. We have a Child Protection team within our campus that provides health and safety training to our students and staff at regular intervals.
                            </span><br><br>
                        </p>


                    </div>

                </div>

                <div id="timetable" class="w3-container tabs animated fadeInUp" style="display:none">
                    <h3 class="script"><span>A Day at<em class="text-color"> Campus</em></span></h3>
                    <br>
                    <h3 style="margin-bottom:0" class="w3-padding-large w3-khaki w3-text-black">
                        Life At BGIS
                    </h3>
                    <div class="w3-white" style="height:10px"></div>


{{--                    <img class="w3-image" src="{{asset('/images/timetable.png')}}">--}}
                    <img src="{{ asset($images[$i28]->path) }}" alt="{{ $images[$i28]->alt }}" title="{{ $images[$i28]->title }}">
                    <br><br>

                    <div class="videoWrapper">
                        <!-- Copy & Pasted from YouTube -->
                        <iframe width="560" height="349" src="https://www.youtube.com/embed/9QCl2F3fvIE" frameborder="0" allowfullscreen></iframe>


                       <!--  <iframe width="560" height="349" src="https://youtu.be/iykaCjLqceY" frameborder="0" allowfullscreen></iframe> -->
                    </div>

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

    var nm = "{{$tab}}";
    document.getElementById(nm).click();
</script>



@endsection
