@extends('pages-layout')

{{--@section('page-title', 'Admission | Top Boarding Schools in Uttar Pradesh')--}}

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


<div class="w3-content">
    <div class="w3-row">
        <div class="w3-col l3 m3 w3-center">
            <h3 class="w3-border-bottom w3-round w3-hide-small w3-card w3-khaki">ADMISSIONS</h3>
            <div class="w3-bar-block w3-grey w3-round">
                <button class="w3-bar-item w3-button w3-hover-red tablink w3-red w3-border-bottom" id="procedureb" onclick="openCity(event,'procedure')">
                    Admission Procedure
                </button>
                <button class="w3-bar-item w3-button w3-hover-red tablink w3-border-bottom" id="helpb" onclick="openCity(event,'help')">Admission Help
                </button>
                <button class="w3-bar-item w3-button w3-hover-red tablink w3-border-bottom" id="applyb" onclick="openCity(event,'apply')">Apply Now
                </button>
                <button id="feeb" class="w3-bar-item w3-button w3-hover-red tablink w3-border-bottom" onclick="openCity(event,'fee')">FEES
                </button>

            </div>
        </div>

        <div class="w3-col l9 m9 animatedParent"><br>


            <div id="procedure" class="w3-container tabs animated fadeInUpShort">
                <h3 class="script"><span>Admission <em class="text-color">Procedure</em></span></h3>
                <p>Thank you for showing your interest in Bhaktivedanta Gurukul and International School (BGIS), largest Gurukul in India with the
                        holistic learning environment, which nurtures the academic, emotional & spiritual need of the students. <strong>BGIS is Ranked the
                        16th best boys residential school by Education World.</strong><br><br>
                <p class="w3-justify">
                        The Academic session of the school begins in April every year. The admission process for standards 3rd to 9th and standard
                        11th starts in December. The admissions are taken on merit basis. An admission test is conducted to test the candidate according
                        to his current grade level in English, Mathematics, and Science. The boys Qualifying the written test are called for an interview
                        in which their habits, social interactions, and aptitude are assessed.
                </p>
                <div class="w3-white w3-padding w3-round">
                <h5>The Process</h5>
                    <ol>
                        <li>The Admission Process for BGIS starts with the admission test, students register to write the admission test for BGIS, which is conducted in December in ISCKON centres around the World.</li>
                        <br><li>Students who are Shortlisted in Written Examination, are then called for Personal Interview at BGIS Campus in Vrindavan, which gives the opportunity to experience the life of a BGIS Student and interact with faculties.</li>
                        <br><li>The final result of Admission test is declared within 15 days of examination</li>
                    </ol>
                </div>

                    <br>
                <div class="w3-white w3-padding w3-round">
                        <h5>How to Register</h5>

                            <ol>
                                <br><li>. A non- refundable fee of ₹1000/- is to be deposited with the registration form, with all the academic transcripts of the student. </li>
                            </ol>
                            <div class="w3-center">
                                    <a href="https://bgis.org/admissions/apply/" class="w3-button w3-green">Click Here to Register For Admission Test</a>
                                </div><br><br>
                                <h4>Upcoming Admission Test Dates:</h4>
                                <table class="w3-table w3-border w3-striped">
                                    <tr class="w3-khaki">
                                      <th>Date</th>
                                      <th>Venue</th>
                                      <th>Apply Now</th>
                                    </tr>
                                    @foreach ($dates as $date)


                                    <tr>
                                      <td>{{$date->date}}</td>
                                      <td>{{$date->venue}}</td>
                                      <td><a href="https://bgis.org/admissions/apply/">Apply Now</a></td>
                                    </tr>
                                    @endforeach
                                    </table>
                                    <br><br>
                        </div>


                        <div class="w3-content" style="padding:32px">
                            <h1 class="script">
                                <span><em class="text-color">EVENTS</em> & NEWS</span>
                            </h1>
                        </div>

                        <div class="w3-content">
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








            </div>

            <div id="help" class="w3-container tabs animated fadeInUpShort" style="display:none">

                <h3 class="script"><span><em class="text-color">Admission</em> Help</span></h3>



                        @if(Session::has('flash_message'))
                        <div class="w3-panel w3-green">
                                {{Session::get('flash_message')}}
                              </div>
                        @endif


                @if ($errors->any())

                <div class="w3-panel w3-red">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                  </div>
                @endif

                <h4>Upcoming Admission Test Dates:</h4>
                                <table class="w3-table w3-border w3-striped">
                                    <tr class="w3-khaki">
                                      <th>Date</th>
                                      <th>Venue</th>
                                      <th>Apply Now</th>
                                    </tr>
                                    @foreach ($dates as $date)


                                    <tr>
                                      <td>{{$date->date}}</td>
                                      <td>{{$date->venue}}</td>
                                      <td><a href="https://bgis.org/admissions/apply/">Apply Now</a></td>
                                    </tr>
                                    @endforeach
                                    </table>
                                    <br><br>





                    <div class="w3-row w3-content">
                        <div class="w3-col l4 m4">
                            <div class="w3-center w3-large w3-card">
                                <div class="w3-round w3-khaki text-color w3-padding">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="w3-white w3-padding">
                                    +91 70880 16910<br><hr>+91 70880 04339
                                </div>
                            </div>
                <br>

                            <div class="w3-center w3-large w3-card">
                                <div class="w3-round w3-khaki text-color w3-padding">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="w3-white w3-padding-small w3-small">
                                    bgis.admissions@gmail.com
                                </div>
                            </div>
                <br>
                            <div class="w3-center w3-large w3-card">
                                <div class="w3-round w3-khaki text-color w3-padding">
                                    <i class="fas fa-home"></i>
                                </div>
                                <div class="w3-white w3-padding w3-small">
                                    <b>Bhaktivedanta Gurukula and International School<br>
                                    Swami Marg,<br>
                                    Raman Reti, Vrindavan, Mathura<br>
                                    Uttar Pradesh, 281121<br>
                                        India</b>
                                </div>

                            </div>
                        </div>

                        <div class="w3-col l8 m8">
                            <div class="w3-padding">
                                <div class="w3-round w3-red">

                                    <form class="w3-padding" action="/admissions" method="POST">
                                        @csrf

                                        <label>Name</label>
                                        <input class="w3-input w3-border w3-round w3-hover-light-grey w3-card" type="text" placeholder="Your Name" name="name" required>


                                        <div class="w3-row">
                                            <div class="w3-col l6 m6" style="padding-right: 10px;">
                                                <label>Email Address</label>
                                                <input name="email" class="w3-input w3-border w3-round w3-hover-light-grey w3-card" type="email" placeholder="email@example.com" required>
                                            </div>

                                            <div class="w3-col l6 m6">
                                                <label>Phone Number</label>
                                                <input name="phone" class="w3-input w3-border w3-round w3-hover-light-grey w3-card" type="number" placeholder="+91" required>
                                            </div>
                                        </div>



                                        <label>Subject</label>
                                        <input name="subject" class="w3-input w3-border w3-round w3-hover-light-grey w3-card" type="text" placeholder="Subject" required>

                                        <label>Your Query</label>
                                        <textarea name="query" class="w3-input w3-border w3-hover-light-grey w3-round w3-card" rows="3" value="Your Query" required></textarea>
                                        <br>

                                        @captcha
                                        <input class="w3-input" type="text" id="captcha" name="captcha" placeholder="Enter the text shown in the image" required>
                                        <div class="w3-center w3-text-white">
                                            <br>

                                            <br>
                                            <button type="submit" class="w3-button w3-black w3-round">Submit Query</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>


            <div id="apply" class="w3-container tabs animated fadeInUp" style="display:none">
                <h2 class="script"><span>Apply <em class="text-color">Now?</em></span></h2><br><br>
                <div class="w3-center">
                    <a href="https://bgis.org/admissions/apply" class="w3-button w3-green">Click Here to Register For Admission Test</a><br>
                    <h5 class="w3-text-dark-grey">Registration fees Rs: 1000/- (Non-refundable)</h5>
                </div>
            </div>

            <div id="fee" class="w3-container tabs animated fadeInUpShort" style="display: none;">
                <h3 class="script"><span>FEES at <em class="text-color">BGIS</em></span></h3>

                <p class="w3-white w3-padding w3-leftbar w3-border-red w3-text-dark-grey">
                        The school is a non-profit organization.
                        Thus the fee is charged only to meet
                        the operating expenses of the school.
                        The teacher-student ratio is very low
                        and we provide international facilities
                        like swimming pool, large play
                        ground etc. The fee includes all the
                        expenses of the childlike a uniform,
                        books, stationery, yoga retreats etc.
                        Compared to other International
                        residential schools in India, the
                        the fee is quite reasonable.
                </p>
                <div class="w3-center">
                    <a href="/contact" class="w3-button w3-green">CONTACT US FOR QUERIES</a>
                </div>

            </div>


    </div>
</div>
</div></div>

<script>

</script>


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
        if (evt !== undefined){
        evt.currentTarget.className += " w3-red";
        } else {
            document.getElementsByClassName(tabName).className += "w3-red";
        }
    }

    @if($tab)
        var nm = "{{$tab}}";
        document.getElementById(nm).click();
@endif

</script>


@endsection
