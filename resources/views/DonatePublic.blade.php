@extends('pages-layout')

{{--@section('page-title', 'Make A Donation')--}}

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
        $i1 = ImageController::findIndex($images,'images/ccavenue.png');
        if($i1==-1 )
         dd("You Have make some image path wrong !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!");
       }
@endphp

    <div class="w3-content" style="padding-top:16px;">
    <div class="w3-center">
        <h3 class="w3-text-dark-grey w3-border-bottom">BGIS Donation System</h3>
    </div>

    <div class="w3-row-padding">
        <div class="w3-col l8 m8">
            <h3 class="">Make A New Donation</h3>
            <form class="w3-padding w3-card w3-round" method="POST" action="/donate">
                @csrf
                <p class="w3-small w3-text-red w3-border-bottom">Personal information</p>
                <div class="w3-container">
                    <input class="w3-input w3-white w3-border w3-hover-light-grey w3-border-grey" type="text" name="don_name" placeholder="Your Full Name*" required>
                </div>
                <div class="w3-row-padding">
                    <div class="w3-col l6 m6" style="padding-top:8px">
                        <input type="email" class="w3-input w3-white w3-border w3-hover-light-grey w3-border-grey" placeholder="Email*" name="don_email" required>
                    </div>
                    <div class="w3-col l6 m6" style="padding-top:8px">
                        <input type="number" class="w3-input w3-white w3-border w3-hover-light-grey w3-border-grey" placeholder="Phone*" name="don_phone" required>
                    </div>
                </div>
                <p class="w3-small w3-text-red w3-border-bottom">Billing Address</p>
                <div class="w3-container">
                    <input type="text" class="w3-input w3-white w3-border w3-hover-light-grey w3-border-grey" placeholder="Street/ Flat No./ Building Number*" name="don_address" required>
                </div>


                <div class="w3-row-padding">
                    <div class="w3-col l4 m4" style="padding-top:8px">
                        <input type="text" class="w3-input w3-white w3-border w3-hover-light-grey w3-border-grey" placeholder="City*" name="don_city" required>
                    </div>
                    <div class="w3-col l4 m4" style="padding-top:8px">
                        <input type="text" class="w3-input w3-white w3-border w3-hover-light-grey w3-border-grey" placeholder="State*" name="don_state" required>
                    </div>
                    <div class="w3-col l4 m4" style="padding-top:8px">
                        <input type="number" class="w3-input w3-white w3-border w3-hover-light-grey w3-border-grey" placeholder="Zip*" name="don_zip" required>
                    </div>
                    <div class="w3-col l4 m4" style="padding-top:8px">
                        <input type="text" class="w3-input w3-white w3-border w3-hover-light-grey w3-border-grey" placeholder="Country*" name="don_country" required>
                    </div>
                </div>
                <p class="w3-small w3-text-red w3-border-bottom">Donation Details</p>
                <div class="w3-padding">
                <input type="number" class="w3-input w3-white w3-border w3-hover-light-grey w3-border-grey" placeholder="Amount of Donation*" name="don_amount" required>
                </div>
                <div class="w3-container">
                <textarea class="w3-input w3-white w3-border w3-hover-light-grey w3-border-grey" placeholder="Message (Optional)" name="don_notes"></textarea>
                </div>
                <br><button type="submit" class="w3-button w3-green">Proceed</button>
                <span class="w3-tiny">You will be redirected to CCavenue</span>
            </form>
        </div>
        <div class="w3-col l4 m4">
            <div class="w3-padding-large w3-center">
                {{--                <img src="{{ asset('images/ccavenue.png')}}" style="max-width:250px" class="w3-image">--}}
                <img src="{{ asset($images[$i1]->path) }}" alt="{{ $images[$i1]->alt }}" title="{{ $images[$i1]->title }}" style="max-width:250px" class="w3-image">
            </div>
            <br>
            <div class="w3-container w3-center w3-khaki w3-round w3-card">
                <h4>Other Donation Methods</h4>
            </div>
            <div class="w3-padding w3-border-left w3-border-bottom w3-border-right w3-border-black w3-round w3-center">
                <a href="/contribute" class="w3-button w3-red w3-center w3-round" style="width:80%">Direct Bank Transfer</a><br><br>
                <a href="/contribute" class="w3-button w3-red w3-center w3-round" style="width:80%">Donate From Home</a>
            </div>
            <br>
            <div class="w3-center">
            <h3 class="w3-text-dark-grey w3-border-bottom"> Facing an Issue?</h3>
            <p>Feel free to <a href="/contact">contact us</a>.</p>
            </div>
            <hr>

            <h4 class="w3-center w3-text-red"><em>"Help us to build Better People, Better World."</em></h4>

        </div>
    </div>
</div>


@endsection
