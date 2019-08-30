@extends('pages-layout')

{{--@section('page-title', 'Campus Facilities | Top Boarding Schools in India')--}}

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
        $i1 =ImageController::findIndex($images, 'images/facilities/bgis_new_campus1.jpg');
        $i2 =ImageController::findIndex($images, 'images/campus/academic.png');
        $i3 = ImageController::findIndex($images, 'images/academic2.jpg');
        $i4 = ImageController::findIndex($images, 'images/academic_bgis1.jpg');
        $i5 = ImageController::findIndex($images, 'images/academic1.jpg');
        $i6 = ImageController::findIndex($images,'images/campus/60-acre-campus.jpg');
        $i7 = ImageController::findIndex($images,  'images/campus/naturopathy-1.jpg');
        $i8 = ImageController::findIndex($images, 'images/campus/naturopathy-2.jpg');
        $i9 = ImageController::findIndex($images,'images/sl/sports.jpg');
        $i10 = ImageController::findIndex($images,  'images/campus/football.jpg');
        $i11 = ImageController::findIndex($images, 'images/campus/basketball.jpg');
        $i12 = ImageController::findIndex($images, 'images/campus/kabaddi.jpg');
        $i13= ImageController::findIndex($images,  'images/campus/running.jpg');
        $i14 =ImageController::findIndex($images, 'images/campus/Volleyball.jpg');
        $i15 =ImageController::findIndex($images, 'images/campus/art-music-dance.png');
        $i16 =ImageController::findIndex($images,  'images/campus/art-music-dance.png');
        $i17 =ImageController::findIndex($images, 'images/campus/art-music-dance-1.jpg');
        $i18 =ImageController::findIndex($images, 'images/campus/art-music-dance-2.jpg');
        $i19 =ImageController::findIndex($images, 'images/campus/orissa-dance.jpg');
        $i20 =ImageController::findIndex($images, 'images/campus/art-music-dance-3.jpg');
        $i21 =ImageController::findIndex($images, 'images/campus/eco-friendly.png');
        $i22 =ImageController::findIndex($images,'images/campus/solar-panel.jpg');
        $i23 =ImageController::findIndex($images,'images/campus/gosala-unit.jpg');
        $i24 =ImageController::findIndex($images,'images/campus/bio-gas-plant.jpg');
        $i25 =ImageController::findIndex($images,'images/campus/cctv.jpg');
        $i26 =ImageController::findIndex($images,'images/campus/60-acre-campus.jpg');
        $i27 =ImageController::findIndex($images, 'images/campus/leboroty.png');
        $i28 =ImageController::findIndex($images,'images/campus/laboratory-6.jpg');
        $i29 =ImageController::findIndex($images,'images/campus/laboratory-2.jpg');
        $i30 =ImageController::findIndex($images,'images/campus/laboratory-3.jpg');
        $i31 =ImageController::findIndex($images, 'images/campus/laboratory-4.jpg');
        $i32 =ImageController::findIndex($images, 'images/campus/laboratory-5.jpg');
        $i33 =ImageController::findIndex($images,'images/campus/laboratory-1.jpg');
        $i34 =ImageController::findIndex($images,'images/campus/academic.png');
        $i35 =ImageController::findIndex($images,'images/campus/medical-room.jpg');
        $i36 =ImageController::findIndex($images,'images/campus/Prasadam.jpg');
        $i37 =ImageController::findIndex($images,'images/campus/beautifull-temple.jpg');

        if($i1==-1 || $i2==-1 || $i3==-1 || $i4==-1 || $i5==-1 || $i6==-1 || $i7==-1 ||
            $i8==-1 ||$i9==-1 || $i10==-1 || $i11==-1 || $i2==-1 || $i13==-1 || $i14==-1||
             $i15==-1 ||$i16==-1 || $i17==-1 || $i18==-1 ||  $i9==-1 ||$i20==-1 || $i21==-1 ||
             $i22==-1 || $i23==-1 ||$i24==-1 || $i25==-1 || $i26==-1 ||  $i27==-1 ||$i28==-1 ||
             $i29==-1 || $i30==-1 ||$i31==-1 || $i32==-1 || $i33==-1 ||  $i34==-1 ||$i35==-1 ||
             $i36==-1 || $i37==-1)
         dd("You Have make some image path wrong !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!");
       }
@endphp

<div class="w3-content">
    <div class="w3-row">
        <div class="w3-col l3 m3 w3-center">
            <h3 class="w3-border-bottom w3-round w3-hide-small w3-card w3-khaki">Campus Facilities</h3>
            <div class="w3-bar-block w3-grey w3-round">
                <button class="w3-bar-item w3-button w3-hover-red tablink w3-red w3-border-bottom"
                        onclick="openCity(event,'welcome')">Campus Facilities
                </button>

                <button class="w3-bar-item w3-button w3-hover-red tablink w3-border-bottom" id="academicb" onclick="openCity(event,'academic')">Academic
                </button>

                <button class="w3-bar-item w3-button w3-hover-red tablink w3-border-bottom" id="sportb" onclick="openCity(event,'sport')">Sport & Fitness
                </button>

                <button class="w3-bar-item w3-button w3-hover-red tablink w3-border-bottom" id="artb" onclick="openCity(event,'art')">Art Music & Dance
                </button>


                <button class="w3-bar-item w3-button w3-hover-red tablink w3-border-bottom" id="campusb" onclick="openCity(event,'campus')">
                        Eco friendly word class campus
                    </button>

                    <button class="w3-bar-item w3-button w3-hover-red tablink w3-border-bottom" id="laboratoryb" onclick="openCity(event,'laboratory')">Laboratory for Hands-on Learning
                        </button>
                    <button class="w3-bar-item w3-button w3-hover-red tablink w3-border-bottom" id="hostelb" onclick="openCity(event,'hostel')">International Standard Hostel/Ashram
                        </button>




                <button class="w3-bar-item w3-button w3-hover-red tablink w3-border-bottom" id="timetableb" onclick="openCity(event,'timetable')">Beautiful Inhouse Temple
                </button>

            </div>
        </div>

        <div class="w3-col l9 m9 animatedParent"><br>
            <div id="welcome" class="w3-container tabs animated fadeInUpShort">
                <h3 class="script"><span>Campus  <em class="text-color">Facilities</em></span></h3>

                <h2 class="w3-center">‘FACILITIES AT VRINDARANYAM' </h2>

                <p class="w3-padding w3-white w3-text-dark-grey">
                        BGIS, Vrindaranyam is located in Ajhai, Mathura, nearly 12 KM from Sri Sri Krishna Balaram temple, Vrindavan. Imagine a place in the lap of Mother Nature, full of trees imbued with divinity, free from city traffic and commotion, where one can get fresh air, pure water, organic food and pure milk! This is Vrindaranyam, the new campus of BGIS spread over an area of 60 acres, comprising of an academic building, the hostel building and huge play ground that are up and ready for occupation. Away from the hustle and bustle of the city, Vrindaranyam is an ideal place for learning.
                </p>

                <div class="w3-padding-large">

                            <div class="qSlides" style="display: block;">
{{--                                    <img style="max-width: 100%;" src="{{asset('images/facilities/bgis_new_campus1.jpg')}}">--}}
                                <img style="max-width: 100%;" src="{{ asset($images[$i1]->path) }}" alt="{{ $images[$i1]->alt }}" title="{{ $images[$i1]->title }}">
                            </div>


                    </div>



            </div>

            <div id="academic" class="w3-container tabs animated fadeInUpShort" style="display:none">


                <br><br>
                <div class="w3-container w3-white w3-round w3-card w3-text-dark-grey">
                    <div class="w3-bottombar w3-border-red w3-padding">
                        <div class="w3-cell w3-cell-middle w3-padding">
{{--                            <img src="{{ asset('images/campus/academic.png') }}" class="w3-image">--}}
                            <img src="{{ asset($images[$i2]->path) }}" alt="{{ $images[$i2]->alt }}" title="{{ $images[$i2]->title }}" class="w3-image">
                        </div>
                        <div class="w3-cell w3-cell-middle">
                            <h4>Academic </h4>
                        </div>
                    </div>
                    <p class="w3-small w3-text-dark-grey">
                           BGIS has students from all over the world and provides a caring, friendly and well-structured educational environment. We value students who are intellectually curious and creative and mentor them towards attaining academic and spiritual excellence. The emphasis is on the overall development of the student. Our academic curriculums are designed for the children by our highly experienced IIT graduates teachers to be responsible 21st-century global citizens, The primary objective of learning in BGIS reflects the teachings of Shrila A.C Bhaktivedant Swami Prabhupad' vision. We see that our young generation is capable of achieving every success in world, but with the right direction and guidance that’s what we work on at BGIS, training the child with the best academic value as well as the Spiritual learnings of Shrila Prabhupad.

                    </p>
                </div><br>
                <div class="w3-row-padding">
                    <div class="w3-col l6 m6">
{{--                        <img src="{{asset('images/academic2.jpg')}}" class="w3-image w3-card w3-round" alt="">--}}
                        <img src="{{ asset($images[$i3]->path) }}" alt="{{ $images[$i3]->alt }}" title="{{ $images[$i3]->title }}" class="w3-image w3-card w3-round" >
                    </div>
                    <div class="w3-col l6 m6">
{{--                        <img src="{{asset('images/academic_bgis1.jpg')}}" class="w3-image w3-card w3-round" alt="">--}}
                        <img src="{{ asset($images[$i4]->path) }}" alt="{{ $images[$i4]->alt }}" title="{{ $images[$i4]->title }}" class="w3-image w3-card w3-round">
                    </div>
                </div>
                <br>

                <div class="w3-row-padding">
                    <div class="w3-col l6 m6">
{{--                        <img src="{{asset('images/academic1.jpg')}}" class="w3-image w3-card w3-round" >--}}
                        <img src="{{ asset($images[$i5]->path) }}" alt="{{ $images[$i5]->alt }}" title="{{ $images[$i5]->title }}" class="w3-image w3-card w3-round" >
                    </div>
                    <div class="w3-col l6 m6">
{{--                        <img src="{{asset('images/campus/60-acre-campus.jpg')}}" class="w3-image w3-card w3-round">--}}
                        <img src="{{ asset($images[$i6]->path) }}" alt="{{ $images[$i6]->alt }}" title="{{ $images[$i6]->title }}" class="w3-image w3-card w3-round">
                    </div>
                </div>
                <br>
            </div>

            <div id="sport" class="w3-container tabs animated fadeInUpShort" style="display:none">
                <h3 class="script"><span>Sport  <em class="text-color">& Fitness</em></span></h3>
                <p class="w3-padding w3-white w3-text-dark-grey w3-small w3-justify">
                       Sports serve as a healthy outlet for the boy’s youthful energy. Besides providing excellent physical exercise, it helps develop quick thinking, the ability to work in teams, and the capacity to acknowledge the skills and capabilities of others. Students are trained in games like volleyball, basketball, badminton, table tennis, kabaddi and kho-kho. The school holds an annual Sports Day and also participates in various inter school sports competitions.
                </p>

                <br>
                <div class="w3-white w3-round w3-container w3-card">
                        <div class="w3-row">
                            <div class="w3-col l4 m8 s8">
                                <p><span class="text-color">YOGA & NATUROPATHY TRAINER

                                    </span><br></p>
                            </div>
                            <div class="w3-rest" style="padding-top:25px;">
                                <div class="w3-bottombar w3-border-red" style="width:100%"></div>
                            </div>
                        </div>
                 </div>
                 <br>
                <div class="w3-row-padding">
                    <div class="w3-col l6 m6">
{{--                        <img src="{{asset('images/campus/naturopathy-1.jpg')}}" class="w3-image w3-round">--}}
                        <img src="{{ asset($images[$i7]->path) }}" alt="{{ $images[$i7]->alt }}" title="{{ $images[$i7]->title }}" class="w3-image w3-round">
                    </div>
                    <div class="w3-col l6 m6">
{{--                        <img src="{{asset('images/campus/naturopathy-2.jpg')}}" class="w3-image w3-round">--}}
                        <img src="{{ asset($images[$i8]->path) }}" alt="{{ $images[$i8]->alt }}" title="{{ $images[$i8]->title }}" class="w3-image w3-round">
                    </div>

                </div>
                <br>
                 <div class="w3-white w3-round w3-container w3-card">
                        <div class="w3-row">
                            <div class="w3-col l4 m8 s8">
                                <p><span class="text-color">OLYMPIC SIZE FOOTBALL FIELD

                                    </span><br></p>
                            </div>
                            <div class="w3-rest" style="padding-top:25px;">
                                <div class="w3-bottombar w3-border-red" style="width:100%"></div>
                            </div>
                        </div>
                 </div>
                 <br>
                      <div class="w3-row-padding">
                    <div class="w3-col l6 m6">
{{--                        <img src="{{asset('images/sl/sports.jpg')}}" class="w3-image w3-round">--}}
                        <img src="{{ asset($images[$i9]->path) }}" alt="{{ $images[$i9]->alt }}" title="{{ $images[$i9]->title }}" class="w3-image w3-round">
                    </div>
                    <div class="w3-col l6 m6">
{{--                        <img src="{{asset('images/campus/football.jpg')}}" class="w3-image w3-round">--}}
                        <img src="{{ asset($images[$i10]->path) }}" alt="{{ $images[$i10]->alt }}" title="{{ $images[$i10]->title }}" class="w3-image w3-round">
                    </div>

                </div>
                <br>

                <div class="w3-white w3-round w3-container w3-card">
                        <div class="w3-row">
                            <div class="w3-col l4 m8 s8">
                                <p><span class="text-color">BASKET-BALL COURT
                                    </span><br></p>
                            </div>
                            <div class="w3-rest" style="padding-top:25px;">
                                <div class="w3-bottombar w3-border-red" style="width:100%"></div>
                            </div>
                        </div>
                 </div>
                 <br>
                      <div class="w3-row-padding">
                    <div class="w3-col l6 m6">
{{--                        <img src="{{asset('images/campus/basketball.jpg')}}" class="w3-image w3-round">--}}
                        <img src="{{ asset($images[$i11]->path) }}" alt="{{ $images[$i11]->alt }}" title="{{ $images[$i11]->title }}" class="w3-image w3-round">
                    </div>
                    <div class="w3-col l6 m6">
{{--                        <img src="{{asset('images/sl/bgis_student_football.jpg')}}" class="w3-image w3-round">--}}
                        <img src="{{ asset($images[$i12]->path) }}" alt="{{ $images[$i12]->alt }}" title="{{ $images[$i12]->title }}" class="w3-image w3-round">
                    </div>

                </div>
                <br>




                <div class="w3-white w3-round w3-container w3-card">
                        <div class="w3-row">
                            <div class="w3-col l4 m8 s8">
                                <p><span class="text-color">KHO KHO & KABADDI

                                    </span><br></p>
                            </div>
                            <div class="w3-rest" style="padding-top:25px;">
                                <div class="w3-bottombar w3-border-red" style="width:100%"></div>
                            </div>
                        </div>
                 </div>
                 <br>
                      <div class="w3-row-padding">

                    <div class="w3-col l6 m6">
{{--                        <img src="{{asset('images/campus/kabaddi.jpg')}}" class="w3-image w3-round">--}}
                        <img src="{{ asset($images[$i13]->path) }}" alt="{{ $images[$i13]->alt }}" title="{{ $images[$i13]->title }}" class="w3-image w3-round">
                    </div>

                    <div class="w3-col l6 m6">
{{--                        <img src="{{asset('images/campus/running.jpg')}}" class="w3-image w3-round">--}}
                        <img src="{{ asset($images[$i14]->path) }}" alt="{{ $images[$i14]->alt }}" title="{{ $images[$i14]->title }}" class="w3-image w3-round">
                    </div>


                </div>
                <br>

                <div class="w3-white w3-round w3-container w3-card">
                        <div class="w3-row">
                            <div class="w3-col l4 m8 s8">
                                <p><span class="text-color">VOLLEYBALL COURT

                                    </span><br></p>
                            </div>
                            <div class="w3-rest" style="padding-top:25px;">
                                <div class="w3-bottombar w3-border-red" style="width:100%"></div>
                            </div>
                        </div>
                 </div>
                 <br>
                      <div class="w3-row-padding">

                    <div class="w3-col l12 m12">
{{--                        <img src="{{asset('images/campus/Volleyball.jpg')}}" class="w3-image w3-round">--}}
                        <img src="{{ asset($images[$i15]->path) }}" alt="{{ $images[$i15]->alt }}" title="{{ $images[$i15]->title }}" class="w3-image w3-round">
                    </div>
                </div>
                <br>
             </div>

            <div id="art" class="w3-container tabs animated fadeInUpShort" style="display:none">
                <div class="w3-container w3-white w3-round w3-card w3-text-dark-grey">
                    <div class="w3-bottombar w3-border-red w3-padding">
                        <div class="w3-cell w3-cell-middle w3-padding">
{{--                            <img src="{{ asset('images/campus/art-music-dance.png') }}" class="w3-image">--}}
                            <img src="{{ asset($images[$i16]->path) }}" alt="{{ $images[$i16]->alt }}" title="{{ $images[$i16]->title }}"class="w3-image">
                        </div>
                        <div class="w3-cell w3-cell-middle">
                         <h4>Art Music & Dance </h4>
                        </div>
                    </div>
                    <p class="w3-small w3-text-dark-grey">
                           Performing arts, music and dance are a form of art in which artists use their voices, bodies or inanimate objects to convey artistic expression. It is different from visual arts, which is when artists use paint, canvas or various materials to create physical or static art objects. Performing arts include a range of disciplines which are performed in front of a live audience.

                    </p>
                </div><br>
                <div class="w3-row-padding">
                    <div class="w3-col l6 m6">
{{--                        <img src="{{asset('images/campus/art-music-dance-1.jpg')}}" class="w3-image w3-card w3-round" >--}}
                        <img src="{{ asset($images[$i17]->path) }}" alt="{{ $images[$i17]->alt }}" title="{{ $images[$i17]->title }}" class="w3-image w3-card w3-round" >
                    </div>
                    <div class="w3-col l6 m6">
{{--                        <img src="{{asset('images/campus/art-music-dance-2.jpg')}}" class="w3-image w3-card w3-round">--}}
                        <img src="{{ asset($images[$i18]->path) }}" alt="{{ $images[$i18]->alt }}" title="{{ $images[$i18]->title }}" class="w3-image w3-card w3-round">
                    </div>
                </div>
                <br>
                <div class="w3-row-padding">
                    <div class="w3-col l6 m6">
{{--                        <img src="{{asset('images/campus/orissa-dance.jpg')}}" class="w3-image w3-card w3-round" >--}}
                        <img src="{{ asset($images[$i19]->path) }}" alt="{{ $images[$i19]->alt }}" title="{{ $images[$i19]->title }}" class="w3-image w3-card w3-round" >
                    </div>
                    <div class="w3-col l6 m6">
{{--                        <img src="{{asset('images/campus/art-music-dance-3.jpg')}}" class="w3-image w3-card w3-round" >--}}
                        <img src="{{ asset($images[$i20]->path) }}" alt="{{ $images[$i20]->alt }}" title="{{ $images[$i20]->title }}" class="w3-image w3-card w3-round" >
                    </div>
                </div>
                <br>
            </div>

            <div id="campus" class="w3-container tabs animated fadeInUpShort" style="display:none">
                <br><br>
                <div class="w3-container w3-white w3-round w3-card w3-text-dark-grey">
                    <div class="w3-bottombar w3-border-red w3-padding">
                        <div class="w3-cell w3-cell-middle w3-padding">
{{--                            <img src="{{ asset('images/campus/eco-friendly.png') }}" class="w3-image">--}}
                            <img src="{{ asset($images[$i21]->path) }}" alt="{{ $images[$i21]->alt }}" title="{{ $images[$i21]->title }}" class="w3-image">
                        </div>
                        <div class="w3-cell w3-cell-middle">
                            <h4>Eco friendly </h4>
                        </div>
                    </div>
                    <p class="w3-small w3-text-dark-grey">
                            The beautiful eco- friendly campus of Vrindaranyam has many special features such as

                    </p>
                </div><br>
                <div class="w3-row-padding">
                    <div class="w3-col l6 m6">
{{--                        <img src="{{asset('images/campus/solar-panel.jpg')}}" class="w3-image w3-card w3-round" alt="">--}}
                        <img src="{{ asset($images[$i22]->path) }}" alt="{{ $images[$i22]->alt }}" title="{{ $images[$i22]->title }}" class="w3-image w3-card w3-round" >
                    </div>
                    <div class="w3-col l6 m6">
{{--                        <img src="{{asset('images/campus/gosala-unit.jpg')}}" class="w3-image w3-card w3-round" >--}}
                        <img src="{{ asset($images[$i23]->path) }}" alt="{{ $images[$i23]->alt }}" title="{{ $images[$i23]->title }}" class="w3-image w3-card w3-round" >
                    </div>
                </div>
                <br>

                <div class="w3-row-padding">
                    <div class="w3-col l6 m6">
{{--                        <img src="{{asset('images/campus/bio-gas-plant.jpg')}}" class="w3-image w3-card w3-round" >--}}
                        <img src="{{ asset($images[$i24]->path) }}" alt="{{ $images[$i24]->alt }}" title="{{ $images[$i24]->title }}" class="w3-image w3-card w3-round" >
                    </div>
                    <div class="w3-col l6 m6">
{{--                        <img src="{{asset('images/campus/cctv.jpg')}}" class="w3-image w3-card w3-round" >--}}
                        <img src="{{ asset($images[$i25]->path) }}" alt="{{ $images[$i25]->alt }}" title="{{ $images[$i25]->title }}" class="w3-image w3-card w3-round" >
                    </div>
                </div>
                <br>
{{--                <img src="{{asset('images/campus/60-acre-campus.jpg')}}" class="w3-image w3-card">--}}
                <img src="{{ asset($images[$i26]->path) }}" alt="{{ $images[$i26]->alt }}" title="{{ $images[$i26]->title }}" class="w3-image w3-card">
            </div>

            <div id="laboratory" class="w3-container tabs animated fadeInUpShort" style="display:none">
                <h3 class="script"><span><em class="text-color">Laboratory for  </em> Hands-on Learning</span></h3>
                <br><br>
                <div class="w3-container w3-white w3-round w3-card w3-text-dark-grey">
                    <div class="w3-bottombar w3-border-red w3-padding">
                        <div class="w3-cell w3-cell-middle w3-padding">
{{--                            <img src="{{ asset('images/campus/leboroty.png') }}" class="w3-image">--}}
                            <img src="{{ asset($images[$i27]->path) }}" alt="{{ $images[$i27]->alt }}" title="{{ $images[$i27]->title }}" class="w3-image">
                        </div>
                        <div class="w3-cell w3-cell-middle">
                            <h4>Laboratory</h4>
                        </div>
                    </div>
                    <p class="w3-small w3-text-dark-grey">
                            --

                    </p>
                </div><br>
                <div class="w3-row-padding">
                    <div class="w3-col l6 m6">
{{--                        <img src="{{asset('images/campus/laboratory-6.jpg')}}" class="w3-image w3-card w3-round" >--}}
                        <img src="{{ asset($images[$i28]->path) }}" alt="{{ $images[$i28]->alt }}" title="{{ $images[$i28]->title }}" class="w3-image w3-card w3-round" >
                    </div>
                    <div class="w3-col l6 m6">
{{--                        <img src="{{asset('images/campus/laboratory-2.jpg')}}" class="w3-image w3-card w3-round" >--}}
                        <img src="{{ asset($images[$i29]->path) }}" alt="{{ $images[$i29]->alt }}" title="{{ $images[$i29]->title }}" class="w3-image w3-card w3-round" >
                    </div>
                </div>
                <br>
{{--                <img src="{{asset('images/campus/laboratory-3.jpg')}}" class="w3-image w3-card" >--}}
                <img src="{{ asset($images[$i30]->path) }}" alt="{{ $images[$i30]->alt }}" title="{{ $images[$i30]->title }}" class="w3-image w3-card" >
                <br><br>
                <div class="w3-row-padding">
                    <div class="w3-col l6 m6">
{{--                        <img src="{{asset('images/campus/laboratory-4.jpg')}}" class="w3-image w3-card w3-round" alt="">--}}
                        <img src="{{ asset($images[$i31]->path) }}" alt="{{ $images[$i31]->alt }}" title="{{ $images[$i31]->title }}" class="w3-image w3-card w3-round">
                    </div>
                    <div class="w3-col l6 m6">
{{--                        <img src="{{asset('images/campus/laboratory-5.jpg')}}" class="w3-image w3-card w3-round" >--}}
                        <img src="{{ asset($images[$i32]->path) }}" alt="{{ $images[$i32]->alt }}" title="{{ $images[$i32]->title }}" class="w3-image w3-card w3-round" >
                    </div>
                </div>
                <br>
{{--                <img src="{{asset('images/campus/laboratory-1.jpg')}}" class="w3-image w3-card" >--}}
                <img src="{{ asset($images[$i33]->path) }}" alt="{{ $images[$i33]->alt }}" title="{{ $images[$i33]->title }}" class="w3-image w3-card" >

            </div>






            <div id="hostel" class="w3-container tabs animated fadeInUp" style="display:none">
                <br><br>
                <div class="w3-container w3-white w3-round w3-card w3-text-dark-grey">
                    <div class="w3-bottombar w3-border-red w3-padding">
                        <div class="w3-cell w3-cell-middle w3-padding">
{{--                            <img src="{{ asset('images/campus/academic.png') }}" class="w3-image">--}}
                            <img src="{{ asset($images[$i34]->path) }}" alt="{{ $images[$i34]->alt }}" title="{{ $images[$i34]->title }}" class="w3-image">
                        </div>
                        <div class="w3-cell w3-cell-middle">
                            <h4>International Standard Hostel/Ashram</h4>
                        </div>
                    </div>
                    <p class="w3-small w3-text-dark-grey">
                            --

                    </p>
                </div><br>
                <div class="w3-row-padding">
                    <div class="w3-col l6 m6">
{{--                        <img src="{{asset('images/campus/medical-room.jpg')}}" class="w3-image w3-card w3-round" alt="">--}}
                        <img src="{{ asset($images[$i35]->path) }}" alt="{{ $images[$i35]->alt }}" title="{{ $images[$i35]->title }}" class="w3-image w3-card w3-round" >
                    </div>
                    <div class="w3-col l6 m6">
                        <!--   Does not put in the Database because It is already commented       <img src="{{asset('images/campus/hh.jpg')}}" class="w3-image w3-card w3-round" alt=""> -->
                    </div>
                </div>
                <br>
{{--                <img src="{{asset('images/campus/Prasadam.jpg')}}" class="w3-image w3-card w3-round" alt="">--}}
                <img src="{{ asset($images[$i36]->path) }}" alt="{{ $images[$i36]->alt }}" title="{{ $images[$i36]->title }}" class="w3-image w3-card w3-round" alt="">
                <br> <br> <br>
                <iframe width="777" height="415" src="https://www.youtube.com/embed/6dxfgPFPejc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            </div>

            <div id="timetable" class="w3-container tabs animated fadeInUp" style="display:none">
                <h3 class="script"><span>Beautiful Inhouse <em class="text-color"> Temple</em></span></h3>

                <div class="w3-white" style="height:10px"></div>


{{--                <img class="w3-image" src="{{asset('/images/campus/beautifull-temple.jpg')}}">--}}
                <img class="w3-image" src="{{ asset($images[$i37]->path) }}" alt="{{ $images[$i37]->alt }}" title="{{ $images[$i37]->title }}">
                <br><br>

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
