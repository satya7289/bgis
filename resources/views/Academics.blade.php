@extends('pages-layout')

{{--@section('page-title', 'Academics')--}}

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

        $i1 =ImageController::findIndex($images,'images/academic1.jpg');
        $i2 =ImageController::findIndex($images, 'images/academic2.jpg');
        $i3 = ImageController::findIndex($images, 'images/academic_bgis1.jpg');
        $i4 = ImageController::findIndex($images, 'images/academic_bgis2.jpg');
        $i5 = ImageController::findIndex($images, 'images/results/gauthameshwar.png');
        $i6 = ImageController::findIndex($images,'images/results/mayank.png');
        $i7 = ImageController::findIndex($images,  'images/results/sarvagya.png');
        $i8 = ImageController::findIndex($images, 'images/results/dilip.png');
        $i9 = ImageController::findIndex($images,'images/results/amargupta.png');
        $i10 = ImageController::findIndex($images,  'images/results/rajkumar.png');
        $i11 = ImageController::findIndex($images, 'images/results/uttamgupta.png');
        $i12 = ImageController::findIndex($images,  'images/results/govindamvats.png');
        $i13= ImageController::findIndex($images, 'images/results/arjunyaduvanshi.png');
        $i14 =ImageController::findIndex($images, 'images/results/devavratwagle.png');
        $i15 =ImageController::findIndex($images, 'images/results/govinddas.png');
        $i16 =ImageController::findIndex($images, 'images/results/kapilmawai.png');
        $i17 =ImageController::findIndex($images, 'images/results/harshgupta.png');
        $i18 =ImageController::findIndex($images,'images/results/akashlohkna.png');
        $i19 =ImageController::findIndex($images, 'images/results/sanchitlakra.png');
        $i20 =ImageController::findIndex($images, 'images/results/krishnamurari.png');
        $i21 =ImageController::findIndex($images, 'images/results/abhishekmishra.png');
        $i22 =ImageController::findIndex($images,'images/results/gauravlakra.png');
        $i23 =ImageController::findIndex($images,'images/results/mayankdubey.png');
        $i24 =ImageController::findIndex($images,'images/results/gautameshwar2.png');
        $i25 =ImageController::findIndex($images,'images/results/divyanshgupta.png');
        $i26 =ImageController::findIndex($images,'images/results/arjungupta.png');
        $i27 =ImageController::findIndex($images, 'images/results/gauthameshwar.png');
        $i28 =ImageController::findIndex($images,'images/results/sanchitlakra.png');
        $i29 =ImageController::findIndex($images,'images/results/milindsingh.png');
        $i30 =ImageController::findIndex($images,'images/results/gurusharan.png');
        $i31 =ImageController::findIndex($images,'images/icons/science.png');
        $i32 =ImageController::findIndex($images,'images/icons/maths.png');
        $i33 =ImageController::findIndex($images,'images/icons/arts.png');
        $i34 =ImageController::findIndex($images,'images/icons/commerce.png');
        $i35 =ImageController::findIndex($images,'images/icons/comps.png');
        $i36 =ImageController::findIndex($images,'images/icons/english.png');
        $i37 =ImageController::findIndex($images,'images/icons/hindi.png');
        $i38 =ImageController::findIndex($images,'images/icons/english.png');

        if($i1==-1 || $i2==-1 || $i3==-1 || $i4==-1 || $i5==-1 || $i6==-1 || $i7==-1 ||
            $i8==-1 ||$i9==-1 || $i10==-1 || $i11==-1 || $i2==-1 || $i13==-1 || $i14==-1||
             $i15==-1 ||$i16==-1 || $i17==-1 || $i18==-1 ||  $i9==-1 ||$i20==-1 || $i21==-1 ||
             $i22==-1 || $i23==-1 ||$i24==-1 || $i25==-1 || $i26==-1 ||  $i27==-1 ||$i28==-1 ||
             $i29==-1 || $i30==-1 ||$i31==-1 || $i32==-1 || $i33==-1 ||  $i34==-1 ||$i35==-1 ||
             $i36==-1 || $i37==-1 ||$i38==-1 )
         dd("You Have make some image path wrong !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!");
       }
@endphp

<div class="w3-content">
    <div class="w3-row">
        <div class="w3-col l3 m3 w3-center">
            <h3 class="w3-border-bottom w3-round w3-hide-small w3-card w3-khaki">Academics</h3>
            <div class="w3-bar-block w3-grey w3-round">
                <button class="w3-bar-item w3-button w3-hover-red tablink w3-red"
                        onclick="openCity(event,'welcome')">Academics
                </button>
                <button class="w3-bar-item w3-button w3-hover-red tablink w3-border-bottom" id="resultsb" onclick="openCity(event,'results')">
                    Results
                </button>
                <button class="w3-bar-item w3-button w3-hover-red tablink w3-border-bottom" id="departmentsb" onclick="openCity(event,'departments')">
                    Departments
                </button>
                <button class="w3-bar-item w3-button w3-hover-red tablink w3-border-bottom" id="curriculumb" onclick="openCity(event,'curriculum')">Curriculum
                </button>
            </div>
        </div>

        <div class="w3-col l9 m9 animatedParent"><br>
            <div id="welcome" class="w3-container tabs animated fadeInUpShort">
                <h3 class="script"><span>Academic <em class="text-color">Excellence</em></span></h3>

                <p class="w3-padding w3-white w3-text-dark-grey">BGIS has students from all over the world and provides a caring, friendly and well-structured
                    educational environment. We value students who are intellectually curious and creative and mentor them towards attaining academic
                    and spiritual excellence. The emphasis is on the overall development of the student. Our academic curriculums are designed for
                    the children by our highly experienced IIT graduates teachers to be responsible 21st-century global citizens, The primary objective
                    of learning in BGIS reflects the teachings of Shrila A.C Bhaktivedant Swami Prabhupad' vision. We see that our young generation is
                    capable of achieving every success  in world, but with the right direction and guidance that’s what we work on at BGIS, training the
                    child with the best academic value as well as the Spiritual learnings of Shrila Prabhupad. <br><br><br>
                    Gurukul is affiliated to the Indian Certificate of Secondary Education (ICSE) English and Sanskrit is the medium of Teaching BGIS has a dedicated faculty of highly qualified and efficient teachers, who use modern techniques of teaching.
                </p>
                <div class="w3-row">
                        <div class="w3-col l3 m3 s6 w3-center w3-padding-small">
{{--                            <img src="{{ asset('images/academic1.jpg') }}" class="w3-image w3-card">--}}
                            <img src="{{ asset($images[$i1]->path) }}" alt="{{ $images[$i1]->alt }}" title="{{ $images[$i1]->title }}" class="w3-image w3-card">

                        </div>
                        <div class="w3-col l3 m3 s6 w3-center w3-padding-small">
{{--                                <img src="{{ asset('images/academic2.jpg') }}" class="w3-image w3-card">--}}
                            <img src="{{ asset($images[$i2]->path) }}" alt="{{ $images[$i2]->alt }}" title="{{ $images[$i2]->title }}" class="w3-image w3-card">

                            </div>
                        <div class="w3-col l3 m3 s6 w3-center w3-padding-small">
{{--                                <img src="{{ asset('images/academic_bgis1.jpg') }}" class="w3-image w3-card">--}}
                            <img src="{{ asset($images[$i3]->path) }}" alt="{{ $images[$i3]->alt }}" title="{{ $images[$i3]->title }}" class="w3-image w3-card">

                            </div>
                            <div class="w3-col l3 m3 s6 w3-center w3-padding-small">
{{--                                    <img src="{{ asset('images/academic_bgis2.jpg') }}" class="w3-image w3-card">--}}
                                <img src="{{ asset($images[$i4]->path) }}" alt="{{ $images[$i4]->alt }}" title="{{ $images[$i4]->title }}" class="w3-image w3-card">

                                </div>
                    </div>

            </div>


            <div id="results" class="w3-container tabs animated fadeInUpShort" style="display:none">
                <h3 class="script"><span>Outstanding <em class="text-color">Results</em></span></h3>
                <div class="animatedParent">
                <h3 class="w3-center animated shake">100% RESULTS FOR CLASS 10th & 12th IN 2018.</h3>
                <div class="w3-light-grey w3-round">
                <h3 class="w3-khaki w3-padding w3-text-black w3-card">2018</h3>
                <h3 class="w3-border-bottom w3-border-red">Class 12th</h3>
                <div class="w3-cell-row w3-mobile  w3-white w3-round w3-card">
                    <div class="w3-cell w3-mobile w3-padding w3-center w3-border">
{{--                        <img src="{{asset('images/results/gauthameshwar.png')}}" class="w3-image"><br>--}}
                        <img src="{{ asset($images[$i5]->path) }}" alt="{{ $images[$i5]->alt }}" title="{{ $images[$i5]->title }}" class="w3-image"><br>
                        <span class="w3-small">GAUTHAMESHWAR<br>(ISC-94%)</span>
                    </div>
                    <div class="w3-cell w3-mobile w3-padding w3-center w3-border">
{{--                        <img src="{{asset('images/results/mayank.png')}}" class="w3-image"><br>--}}
                        <img src="{{ asset($images[$i6]->path) }}" alt="{{ $images[$i6]->alt }}" title="{{ $images[$i6]->title }}" class="w3-image"><br>
                        <span class="w3-small">MAYANK DUBEY<br>(ISC-87.75%)</span>
                    </div>
                    <div class="w3-cell w3-mobile  w3-padding w3-center w3-border">
{{--                        <img src="{{asset('images/results/sarvagya.png')}}" class="w3-image"><br>--}}
                        <img src="{{ asset($images[$i7]->path) }}" alt="{{ $images[$i7]->alt }}" title="{{ $images[$i7]->title }}" class="w3-image"><br>
                        <span class="w3-small">SARVAGYA KAUSHIK<br>(ISC-84.75%)</span>
                    </div>
                    <div class="w3-cell w3-mobile w3-padding w3-center w3-border">
{{--                        <img src="{{asset('images/results/dilip.png')}}" class="w3-image"><br>--}}
                        <img src="{{ asset($images[$i8]->path) }}" alt="{{ $images[$i8]->alt }}" title="{{ $images[$i8]->title }}" class="w3-image"><br>
                        <span class="w3-small">DILIP GOKULAPATI<br>(ISC-84.5%)</span>
                    </div>
                </div><br>

                <h3 class="w3-border-bottom w3-border-red">Class 10th</h3>
                <div class="w3-cell-row w3-mobile  w3-white w3-round w3-card">
                    <div class="w3-cell w3-mobile w3-padding w3-center w3-border">
{{--                        <img src="{{asset('images/results/amargupta.png')}}" class="w3-image"><br>--}}
                        <img src="{{ asset($images[$i9]->path) }}" alt="{{ $images[$i9]->alt }}" title="{{ $images[$i9]->title }}" class="w3-image"><br>
                        <span class="w3-small">AMAR GUPTA<br> (ICSE-94.8%)</span>
                    </div>
                    <div class="w3-cell w3-mobile w3-padding w3-center w3-border">
{{--                        <img src="{{asset('images/results/rajkumar.png')}}" class="w3-image"><br>--}}
                        <img src="{{ asset($images[$i10]->path) }}" alt="{{ $images[$i10]->alt }}" title="{{ $images[$i10]->title }}" class="w3-image"><br>
                        <span class="w3-small">RAJKUMAR SHARMA<br> (ICSE-91.6%)</span>
                    </div>
                    <div class="w3-cell w3-mobile  w3-padding w3-center w3-border">
{{--                        <img src="{{asset('images/results/uttamgupta.png')}}" class="w3-image"><br>--}}
                        <img src="{{ asset($images[$i11]->path) }}" alt="{{ $images[$i11]->alt }}" title="{{ $images[$i11]->title }}" class="w3-image"><br>
                        <span class="w3-small">UTTAMGUPTA<br> (ICSE-89.2%)</span>
                    </div>
                    <div class="w3-cell w3-mobile w3-padding w3-center w3-border">
{{--                        <img src="{{asset('images/results/govindamvats.png')}}" class="w3-image"><br>--}}
                        <img src="{{ asset($images[$i12]->path) }}" alt="{{ $images[$i12]->alt }}" title="{{ $images[$i12]->title }}" class="w3-image"><br>
                        <span class="w3-small">GOVINDAM VATS<br> (ICSE-88.4%)</span>
                    </div>
                </div><br>
                </div><br>
                <div class="w3-light-grey w3-round">
                    <h3 class="w3-khaki w3-padding w3-text-black w3-card">2017</h3>
                    <h3 class="w3-border-bottom w3-border-red">Class 12th</h3>
                    <div class="w3-cell-row w3-mobile  w3-white w3-round w3-card">
                        <div class="w3-cell w3-mobile w3-padding w3-center w3-border">
{{--                            <img src="{{asset('images/results/arjunyaduvanshi.png')}}" class="w3-image"><br>--}}
                            <img src="{{ asset($images[$i13]->path) }}" alt="{{ $images[$i13]->alt }}" title="{{ $images[$i13]->title }}" class="w3-image"><br>
                            <span class="w3-small">ARJUN YADUVANSHI<br>(ISC-94.5%)</span>
                        </div>
                        <div class="w3-cell w3-mobile w3-padding w3-center w3-border">
{{--                            <img src="{{asset('images/results/devavratwagle.png')}}" class="w3-image"><br>--}}
                            <img src="{{ asset($images[$i14]->path) }}" alt="{{ $images[$i14]->alt }}" title="{{ $images[$i14]->title }}" class="w3-image"><br>
                            <span class="w3-small">DEVAVRAT WAGLE<br>(ISC-94.5%)</span>
                        </div>
                        <div class="w3-cell w3-mobile  w3-padding w3-center w3-border">
{{--                            <img src="{{asset('images/results/govinddas.png')}}" class="w3-image"><br>--}}
                            <img src="{{ asset($images[$i15]->path) }}" alt="{{ $images[$i15]->alt }}" title="{{ $images[$i15]->title }}" class="w3-image"><br>
                            <span class="w3-small">GOVIND DAS<br>(ISC-93.25%)</span>
                        </div>

                    </div><br>

                    <h3 class="w3-border-bottom w3-border-red">Class 10th</h3>
                    <div class="w3-cell-row w3-mobile  w3-white w3-round w3-card">
                        <div class="w3-cell w3-mobile w3-padding w3-center w3-border">
{{--                            <img src="{{asset('images/results/kapilmawai.png')}}" class="w3-image"><br>--}}
                            <img src="{{ asset($images[$i16]->path) }}" alt="{{ $images[$i16]->alt }}" title="{{ $images[$i16]->title }}" class="w3-image"><br>
                            <span class="w3-small">KAPIL MAWAI<br> (ICSE-94.8%)</span>
                        </div>
                        <div class="w3-cell w3-mobile w3-padding w3-center w3-border">
{{--                            <img src="{{asset('images/results/harshgupta.png')}}" class="w3-image"><br>--}}
                            <img src="{{ asset($images[$i17]->path) }}" alt="{{ $images[$i17]->alt }}" title="{{ $images[$i17]->title }}" class="w3-image"><br>
                            <span class="w3-small">HARSH GUPTA<br> (ICSE-93.4%)</span>
                        </div>
                        <div class="w3-cell w3-mobile  w3-padding w3-center w3-border">
{{--                            <img src="{{asset('images/results/akashlohkna.png')}}" class="w3-image"><br>--}}
                            <img src="{{ asset($images[$i18]->path) }}" alt="{{ $images[$i18]->alt }}" title="{{ $images[$i18]->title }}" class="w3-image"><br>
                            <span class="w3-small">AKASH LOHKNA<br> (ICSE-92.4%)</span>
                        </div>
                    </div><br>
                    </div>
                <br><br>

                  <div class="w3-light-grey w3-round">
                    <h3 class="w3-khaki w3-padding w3-text-black w3-card">2016</h3>
                    <h3 class="w3-border-bottom w3-border-red">Class 12th</h3>
                    <div class="w3-cell-row w3-mobile  w3-white w3-round w3-card">
                        <div class="w3-cell w3-mobile w3-padding w3-center w3-border">
{{--                            <img src="{{asset('images/results/sanchitlakra.png')}}" class="w3-image"><br>--}}
                            <img src="{{ asset($images[$i19]->path) }}" alt="{{ $images[$i19]->alt }}" title="{{ $images[$i19]->title }}" class="w3-image"><br>
                            <span class="w3-small">SANCHIT LAKRA<br>(ISC: 93.5%)
</span>
                        </div>
                        <div class="w3-cell w3-mobile w3-padding w3-center w3-border">
{{--                            <img src="{{asset('images/results/krishnamurari.png')}}" class="w3-image"><br>--}}
                            <img src="{{ asset($images[$i20]->path) }}" alt="{{ $images[$i20]->alt }}" title="{{ $images[$i20]->title }}" class="w3-image"><br>
                            <span class="w3-small">KRISHNA MURARI <br> (ISC- 90%)
</span>
                        </div>
                        <div class="w3-cell w3-mobile  w3-padding w3-center w3-border">
{{--                            <img src="{{asset('images/results/abhishekmishra.png')}}" class="w3-image"><br>--}}
                            <img src="{{ asset($images[$i21]->path) }}" alt="{{ $images[$i21]->alt }}" title="{{ $images[$i21]->title }}" class="w3-image"><br>
                            <span class="w3-small">ABHISHEK MISHRA<br> (ISC- 90%)
</span>
                        </div>
                      <div class="w3-cell w3-mobile  w3-padding w3-center w3-border">
{{--                            <img src="{{asset('images/results/gauravlakra.png')}}" class="w3-image"><br>--}}
                          <img src="{{ asset($images[$i22]->path) }}" alt="{{ $images[$i22]->alt }}" title="{{ $images[$i22]->title }}" class="w3-image"><br>
                            <span class="w3-small">GAURAV LAKRA<br> (ISC- 90%)
</span>
                        </div>

                    </div><br>

                    <h3 class="w3-border-bottom w3-border-red">Class 10th</h3>
                    <div class="w3-cell-row w3-mobile  w3-white w3-round w3-card">
                        <div class="w3-cell w3-mobile w3-padding w3-center w3-border">
{{--                            <img src="{{asset('images/results/mayankdubey.png')}}" class="w3-image"><br>--}}
                            <img src="{{ asset($images[$i23]->path) }}" alt="{{ $images[$i23]->alt }}" title="{{ $images[$i23]->title }}" class="w3-image"><br>
                            <span class="w3-small">MAYANK DUBEY <br> (ICSE- 93.8%)
</span>
                        </div>
                        <div class="w3-cell w3-mobile w3-padding w3-center w3-border">
{{--                            <img src="{{asset('images/results/gautameshwar2.png')}}" class="w3-image"><br>--}}
                            <img src="{{ asset($images[$i24]->path) }}" alt="{{ $images[$i24]->alt }}" title="{{ $images[$i24]->title }}" class="w3-image"><br>
                            <span class="w3-small">GAUTAMESHWAR <br> (ICSE - 92.8%)
</span>
                        </div>
                        <div class="w3-cell w3-mobile  w3-padding w3-center w3-border">
{{--                            <img src="{{asset('images/results/divyanshgupta.png')}}" class="w3-image"><br>--}}
                            <img src="{{ asset($images[$i25]->path) }}" alt="{{ $images[$i25]->alt }}" title="{{ $images[$i25]->title }}" class="w3-image"><br>
                            <span class="w3-small">DIVYANSH GUPTA <br> (ISC- 92.2%)
</span>
                        </div>
<div class="w3-cell w3-mobile  w3-padding w3-center w3-border">
{{--                            <img src="{{asset('images/results/arjungupta.png')}}" class="w3-image"><br>--}}
                            <img src="{{ asset($images[$i26]->path) }}" alt="{{ $images[$i26]->alt }}" title="{{ $images[$i26]->title }}" class="w3-image"><br>
                            <span class="w3-small">ARJUN GUPTA <br> (ISC- 91.6%)
</span>
                      </div>
                    </div><br>
                    </div><br><br>



                <h3 class="script"><span>Competitive <em class="text-color">Exams</em></span></h3>
                <h6 class="text-color"><em>The students of BGIS have also cleared many prestigious National level competitive exams for entrance into Engineering Colleges (IITs, NITS, BITS Pilani, etc.), Medical Colleges, NDA, CA etc.</em></h6>
                <div class="w3-cell-row w3-mobile w3-white w3-round w3-card-4">
                <div class="w3-cell w3-mobile w3-padding w3-center w3-border">
{{--                        <img src="{{asset('images/results/gauthameshwar.png')}}" class="w3-image"><br>--}}
                    <img src="{{ asset($images[$i27]->path) }}" alt="{{ $images[$i27]->alt }}" title="{{ $images[$i27]->title }}" class="w3-image"><br>
                        <span class="w3-small">GAUTHAMESHWAR<br>NISER, 2018</span>
                    </div>
                    <div class="w3-cell w3-mobile w3-padding w3-center w3-border">
{{--                            <img src="{{asset('images/results/sanchitlakra.png')}}" class="w3-image"><br>--}}
                        <img src="{{ asset($images[$i28]->path) }}" alt="{{ $images[$i28]->alt }}" title="{{ $images[$i28]->title }}" class="w3-image"><br>
                            <span class="w3-small">SANCHIT LAKRA<br>BITS PILANI, 2018</span>
                        </div>
                    <div class="w3-cell w3-mobile w3-padding w3-center w3-border">
{{--                            <img src="{{asset('images/results/milindsingh.png')}}" class="w3-image"><br>--}}
                        <img src="{{ asset($images[$i29]->path) }}" alt="{{ $images[$i29]->alt }}" title="{{ $images[$i29]->title }}" class="w3-image"><br>
                            <span class="w3-small">MILIND SINGH <br>NDA, 2017</span>
                        </div>
                        <div class="w3-cell w3-mobile w3-padding w3-center w3-border">
{{--                                <img src="{{asset('images/results/gurusharan.png')}}" class="w3-image"><br>--}}
                            <img src="{{ asset($images[$i30]->path) }}" alt="{{ $images[$i30]->alt }}" title="{{ $images[$i30]->title }}" class="w3-image"><br>
                                <span class="w3-small">GURU SHARAN AGARWAL <br>IIT KHARAGPUR, 2013</span>
                            </div>

                </div></div></div>


            <div id="departments" class="w3-container tabs animated fadeInUpShort" style="display:none">

                <h3 class="script"><span><em class="text-color">Departments</em> at BGIS</span></h3>
                <p>At BGIS we have a very diverse course curriculum, students can choose to study in any field of their interest,
                </p>


                <div class="w3-container w3-white w3-round w3-card w3-text-dark-grey">
                    <div class="w3-bottombar w3-border-red w3-padding">
                        <div class="w3-cell w3-cell-middle">
{{--                            <img src="{{ asset('images/icons/science.png') }}" class="w3-image">--}}
                            <img src="{{ asset($images[$i31]->path) }}" alt="{{ $images[$i31]->alt }}" title="{{ $images[$i31]->title }}" class="w3-image">
                        </div>
                        <div class="w3-cell w3-cell-middle">
                            <h2>Science</h2>
                        </div>
                    </div>

                    <p class="w3-small w3-text-dark-grey">The goal of Science Department is, first and foremost, to expose our students to the breadth of the subject matter.
                        We firmly believe in having our students study the three traditional disciplines of science: biology, chemistry, and
                        physics, The Science Department offers Subjects like Biology, Chemistry, Physics, and. Now in its. <br><br>
                            In addition to work in the classroom, students take their knowledge into the lab one day per week for practical
                            learning experience. Here students not only learn science; they “do” science. technology is used extensively in
                            both the classrooms and the labs to enhance active learning. Finally, the Department continues to embrace and
                            integrate technology with many teachers using Smart classrooms as their primary text format, grading platform,
                            and assignment interface. BGIS uses the skill based form of teaching and use latest technology standers like smart
                            class rooms, which are powered by Edurite.
                    </p>
                </div><br>



                <div class="w3-container w3-white w3-round w3-card w3-text-dark-grey">
                        <div class="w3-bottombar w3-border-red w3-padding">
                            <div class="w3-cell w3-cell-middle">
{{--                                <img src="{{ asset('images/icons/maths.png') }}" class="w3-image">--}}
                                <img src="{{ asset($images[$i32]->path) }}" alt="{{ $images[$i32]->alt }}" title="{{ $images[$i32]->title }}" class="w3-image">
                            </div>
                            <div class="w3-cell w3-cell-middle">
                                <h2>Mathematics</h2>
                            </div>
                        </div>

                        <p class="w3-small w3-text-dark-grey">Mathematics is necessary for all individuals in the 21st century. Therefore, our Gurukul seeks to develop a broad foundation of core knowledge, an ability to use practical skills, a universal base for further study in mathematics and an appreciation of the beauty of mathematics in its own right, as well as being a useful tool for other disciplines.
                                <br><br>Students new to BGIS are placed in mathematics classes based on previous study and the placement test. While some new students will enrol in Math 1 their first year, the most common class for new students will be Math 2, with some advanced students entering at even higher levels will enter in level 3 of mathematics, this programme helps student to cleat basics of maths and give an upper hand in Studying maths at higher level., teachers at BGIS uses the skill based form of teaching and use latest technology standers like smart class rooms, which are powered by Edurite.

                        </p>
                    </div><br>



                    <div class="w3-container w3-white w3-round w3-card w3-text-dark-grey">
                            <div class="w3-bottombar w3-border-red w3-padding">
                                <div class="w3-cell w3-cell-middle">
{{--                                    <img src="{{ asset('images/icons/arts.png') }}" class="w3-image">--}}
                                    <img src="{{ asset($images[$i33]->path) }}" alt="{{ $images[$i33]->alt }}" title="{{ $images[$i33]->title }}" class="w3-image">
                                </div>
                                <div class="w3-cell w3-cell-middle">
                                    <h2>Arts and Humanities</h2>
                                </div>
                            </div>

                            <p class="w3-small w3-text-dark-grey">The first objective of the Department is to present the panorama of the human past in all its richness and diversity so that the student will appreciate not only the realities of the human experience but also the degree to which the present and future are the products of that past. The second is to practice the intellectual disciplines inherent in historic inquiry, which include the mastery of a defined body of factual and analytic material, as well as developing the capacity to ask the kind of questions about determinism, contingency, evolution, decline, and progress with which historians constantly grapple.
                                    <br><br>Students then learn how to go about seeking answers to such questions through the informed use of the myriad historical sources available for any given historical epoch or topic. The study of history should foster a growing sense of wonder about the human adventure as well as the capacity to read with critical care, listen with respect and attention, speak with clarity and conviction, and finally to write with grace and power. BGIS uses the skill based form of teaching and use latest technology standers like smart class rooms, which are powered by Edurite.

                            </p>
                        </div><br>



                        <div class="w3-container w3-white w3-round w3-card w3-text-dark-grey">
                                <div class="w3-bottombar w3-border-red w3-padding">
                                    <div class="w3-cell w3-cell-middle">
{{--                                        <img src="{{ asset('images/icons/commerce.png') }}" class="w3-image">--}}
                                        <img src="{{ asset($images[$i34]->path) }}" alt="{{ $images[$i34]->alt }}" title="{{ $images[$i34]->title }}" class="w3-image">
                                    </div>
                                    <div class="w3-cell w3-cell-middle">
                                        <h2>Commerce</h2>
                                    </div>
                                </div>

                                <p class="w3-small w3-text-dark-grey">Commerce is one of the three fundamental fields that open wide opportunities for students who wish to acquire the knowledge of business, trade and market, basics of economics, industrial policies etc., and a lot more. Students with calculative mindsets and who have strong interest in Finance and Commerce disciplines can enhance their knowledge in the respective fields of their interest Emphasis is put on imbibing practical skills such as presentation, communication, analytical skills and problem solving. Project work The learning of Commerce is assessed both as a knowledge subject and as a skill subject. Apart from testing the learning outcomes through formal and informal ways we assess the skills of the students by exposing them to frequent brainstorming sessions on important issues and concepts. At BGIS, students are prepared for their future by designing the curriculum that caters to the needs of the corporate world. BGIS uses the skill based form of teaching and use latest technology standers like smart class rooms, which are powered by Edurite.
                                </p>
                            </div><br>



                            <div class="w3-container w3-white w3-round w3-card w3-text-dark-grey">
                                    <div class="w3-bottombar w3-border-red w3-padding">
                                        <div class="w3-cell w3-cell-middle">
{{--                                            <img src="{{ asset('images/icons/comps.png') }}" class="w3-image">--}}
                                            <img src="{{ asset($images[$i35]->path) }}" alt="{{ $images[$i35]->alt }}" title="{{ $images[$i35]->title }}" class="w3-image">
                                        </div>
                                        <div class="w3-cell w3-cell-middle">
                                            <h2>Computer Science</h2>
                                        </div>
                                    </div>

                                    <p class="w3-small w3-text-dark-grey">Computers are a core part of our lives: social networking, media streaming, computer games, office applications and online shopping are all obvious examples of things that computer science has brought us that many people are very familiar with.  Computer science is at the heart of 21st century commerce and industry, with almost every business using computers in some way. Large businesses will often devote a substantial proportion of their operating budget to the development of computer systems that aid in the management of the company; for example, by keeping track of stock levels or managing delivery schedules.

                                            <br><br>But Computer Science is about so much more than this: at its most fundamental level, it is about information and how to represent, store, communicate, manipulate, understand, and make use of it. This can have a far more significant impact than the use of computers to perform comparatively simple housekeeping tasks.
                                            <br><br>School has a state of the art data centre. All class rooms are enabled with computer resources. There are multiple computer labs, a faculty resource centre with and all necessary support equipment for teachers. BGIS uses the skill based form of teaching and use latest technology standers like smart class rooms, which are powered by Edurite.

                                    </p>
                                </div><br>



                                <div class="w3-container w3-white w3-round w3-card w3-text-dark-grey">
                                        <div class="w3-bottombar w3-border-red w3-padding">
                                            <div class="w3-cell w3-cell-middle">
{{--                                                <img src="{{ asset('images/icons/english.png') }}" class="w3-image">--}}
                                                <img src="{{ asset($images[$i36]->path) }}" alt="{{ $images[$i36]->alt }}" title="{{ $images[$i36]->title }}" class="w3-image">
                                            </div>
                                            <div class="w3-cell w3-cell-middle">
                                                <h2>English</h2>
                                            </div>
                                        </div>

                                        <p class="w3-small w3-text-dark-grey">English Department is an internal lab of creativity. Teaching the principles and mechanics of writing is the focus of all English classes and is the foundation of the BGIS. In small classes, guided by our enduring understandings and typically conducted around the Harkness table, teachers and students engage together in rigorous discussion and writing to explore the human experience through literature. English classes at BGIS help students discover the power of language through close, careful reading of fiction, nonfiction, poetry, and plays. All writing assignments completed for English classes help students build critical thinking skills, develop their voices, and deepen their understanding of literature. At all levels, students work both independently and collaboratively, write analytically and creatively, and learn to embrace their role in creating a productive classroom environment. The can expect to engage in increasing intellectual curiosity and risk-taking. BGIS uses the skill based form of teaching and use latest technology standers like smart class rooms, which are powered by Edurite.
                                        </p>
                                    </div><br>

                                    <div class="w3-container w3-white w3-round w3-card w3-text-dark-grey">
                                            <div class="w3-bottombar w3-border-red w3-padding">
                                                <div class="w3-cell w3-cell-middle">
{{--                                                    <img src="{{ asset('images/icons/hindi.png') }}" class="w3-image">--}}
                                                    <img src="{{ asset($images[$i37]->path) }}" alt="{{ $images[$i37]->alt }}" title="{{ $images[$i37]->title }}"class="w3-image">
                                                </div>
                                                <div class="w3-cell w3-cell-middle">
                                                    <h2>Hindi and Sanskrit</h2>
                                                </div>
                                            </div>

                                            <p class="w3-small w3-text-dark-grey">The Department of Hindi and Sanskrit comprises a team of teachers who constantly work to develop and re- energise the learning of Hindi and Sanskrit through various classroom tested and ‘outside the classroom ‘activities that not only teach the language in a learner centred manner but also lead to a systematic development in the use of the language. A number of activities like role plays, creative writing, language games, debates and group discussions are conducted for enhancing the language skills and imagination Boys are trained to use the skills of listening, speaking, reading and writing, in a variety of contexts and are able to adapt language to suit different tasks, audience, and purpose. Boys are imparted with the critical ability to analyse and evaluate diverse texts and are equipped with the language to question ideas and articulate their point of view. Proper technique of recitation of Sanskrit Shlokas, carefully chosen with a secular message, is taught to the students.  BGIS uses the skill based form of teaching and use latest technology standers like smart class rooms, which are powered by Edurite.
                                            </p>
                                        </div><br>

                                        <div class="w3-container w3-white w3-round w3-card w3-text-dark-grey">
                                                <div class="w3-bottombar w3-border-red w3-padding">
                                                    <div class="w3-cell w3-cell-middle">
{{--                                                        <img src="{{ asset('images/icons/english.png') }}" class="w3-image">--}}
                                                        <img src="{{ asset($images[$i38]->path) }}" alt="{{ $images[$i38]->alt }}" title="{{ $images[$i38]->title }}" class="w3-image">
                                                    </div>
                                                    <div class="w3-cell w3-cell-middle">
                                                        <h2>Physical Education</h2>
                                                    </div>
                                                </div>

                                                <p class="w3-small w3-text-dark-grey">Physical development of child is very important in current scenario
                                                    Physical Education is a core element of a balanced education for boys and contributes towards the
                                                    integrated development of the mind and body. It builds self-confidence and self-esteem, enhances
                                                    physical, social and cognitive development and improves academic achievement.<br><br>

                                                        Boys are taught the skills and techniques to play:
                                                        <ul class="w3-small">

                                                        <li>Cricket</li>
                                                        <li>Soccer</li>
                                                        <li>Hockey</li>
                                                        <li>Athletics</li>
                                                        <li>Table tennis</li>
                                                        <li>Basketball</li>
                                                        <li>Swimming</li>
                                                        <li>Badminton</li>
                                                    </p>

                                            </div><br>
            </div>


            <div id="curriculum" class="w3-container tabs animated fadeInUp" style="display:none">
                <h3 class="script"><span>Curriculum at<em class="text-color">BGIS</em></span></h3>

                <h6>BGIS is organised into two levels :</h6>
                   <ol>
                       <li>Gurukula the primary level, classes 3-8 </li>
                       <li>International School The secondary level, classes 9-12</li>
                   </ol>
                <div class="w3-row">
                    <div class="w3-col l5 m5 w3-container"><div class="base-color w3-padding w3-round w3-card w3-text-white">
                        <h5 class="w3-border-bottom w3-border-white">Gurukula:the primary level</h5>
                        <p class="w3-small w3-justify">It consists of classes from 3-8. The primary level focuses not only on core academic subjects
                                like languages, Math, Science, and Social Studies but children are also trained in core value
                                education based on Bhagavad Gita and Bhagavatam. In addition, they learn Music, Art and
                                Computers as well.<br><br>
                        </p>
                    </div>
                </div>

                    <div class="w3-col l7 m7 w3-container">
                        <div class="base-color w3-padding w3-round w3-card w3-text-white">
                            <h5 class="w3-border-bottom w3-border-white">International School, the secondary level</h5>
                            <p class="w3-small w3-justify">The high school students, classes 9-12, take their final exams with the ICSE Board of
                                    Education, an internationally recognized board located in New Delhi, India. High school
                                    students can choose from a wide range of subjects and can specialize in the Science,
                                    Business or Commerce strives to meet the academic goals of each student by offering
                                    extra classes or coaching as needed. The council offers a wide range of subject choices
                                    to include in the core academic, as well as art, music, physical education, and computer
                                    applications.
                            </p>
                        </div>
                    </div>
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

    @if($tab)
        var nm = "{{$tab}}";
        document.getElementById(nm).click();
@endif
</script>

@endsection
