@extends('pages-layout')

{{--@section('page-title', 'Contact Us')--}}

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
        @if(Session::has('flash_message'))
        <div class="alert alert-info" role="alert">
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

</div>



    <div class="w3-row w3-content">
        <div class="w3-col l4 m4">
            <br><br>
            <div class="w3-center w3-large w3-card">
                <div class="w3-round w3-yellow text-color w3-padding">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="w3-white w3-padding">
                    +91 70880 16910<br><hr>+91 70880 04339
                </div>
            </div>
<br>

            <div class="w3-center w3-large w3-card">
                <div class="w3-round w3-yellow text-color w3-padding">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="w3-white w3-padding">
                    bgis.services@gmail.com
                </div>
            </div>
<br>
            <div class="w3-center w3-large w3-card">
                <div class="w3-round w3-yellow text-color w3-padding">
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
            <h3 class="script w3-container"><span>Get in <i class="text-color">Touch</i> </span></h3>
            <div class="w3-padding">
                <div class="w3-round w3-red">

                    <form class="w3-padding" action="/contact" method="POST">
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

                        <label>Your Message</label>
                        <textarea name="message" class="w3-input w3-border w3-hover-light-grey w3-round w3-card" rows="3" required></textarea>
                        <br>
                        @captcha
                                        <input class="w3-input" type="text" id="captcha" name="captcha" placeholder="Enter the text shown in the image" required>
                        <div class="w3-center w3-text-white">
                            <br>
                            <button type="submit" class="w3-button w3-black w3-round">Submit Your Message</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
<br><br>
    <div class="w3-content">
        <div class="w3-padding w3-white w3-round w3-leftbar w3-border-red w3-center" style="max-width: 700px;margin-left: auto;margin-right: auto">
            <b>Information</b>: We are located right next to the ISKCON temple at the entrance to Vrindavan town.
            Vrindavan is just five minutes off the Delhi/ Agra Highway, 2.5 hours south of New Delhi. The Mathura
            Junction train station is a twenty-five-minute drive from the school.
        </div>
    </div>



@endsection
