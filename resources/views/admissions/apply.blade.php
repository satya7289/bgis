@extends('pages-layout')

{{--@section('page-title', 'Apply Now for Admission Test')--}}

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
        <h3 class="w3-text-dark-grey w3-border-bottom">BGIS Admission Test Registration</h3>
    </div>
    <div class="w3-cell-row w3-xlarge w3-card-4 w3-round">
        <div class="w3-cell w3-padding w3-center w3-border-right w3-red">
            1. Fill Details >>
        </div>
        <div class="w3-cell w3-padding w3-center w3-border-right w3-khaki">
                2. Make Payment >>
            </div>
            <div class="w3-cell w3-center w3-padding w3-khaki">
                    3. Confirmation
                </div>
    </div>

    <div class="w3-row-padding">
        <div class="w3-col l8 m8">
            <h3 class="">Fill Details</h3>
            <form class="w3-padding w3-card w3-round" method="POST" action="/admissions/paynow">
                @csrf
                <p class="w3-small w3-text-red w3-border-bottom">Personal information</p>
                <div class="w3-padding">
                    <label for="billing_name">Full Name of Student*</label>
                    <input class="w3-input w3-white w3-border w3-hover-light-grey w3-border-grey" type="text" name="billing_name" placeholder="Full Name of Student*" required>
                </div>
                <div class="w3-padding">
                        <label for="billing_name">Parent/ Guardian's Name*</label>
                    <input class="w3-input w3-white w3-border w3-hover-light-grey w3-border-grey" type="text" name="billing_parent" placeholder="Parent/ Guardian Name*" required>
                </div>
                <div class="w3-row-padding">
                    <div class="w3-col l6 m6" style="padding-top:8px;padding-bottom:8px">
                            <label for="billing_name">Email*</label>
                        <input type="email" class="w3-input w3-white w3-border w3-hover-light-grey w3-border-grey" placeholder="Email*" name="billing_email" required>
                    </div>
                    <div class="w3-col l6 m6" style="padding-top:8px;padding-bottom:8px">
                            <label for="billing_name">Contact Number*</label>
                        <input type="number" class="w3-input w3-white w3-border w3-hover-light-grey w3-border-grey" placeholder="Phone*" name="billing_tel" required>
                    </div>
                </div>
                <div class="w3-row-padding">
                        <div class="w3-col l6 m6" style="padding-top:8px">
                            <label for="billing_name">Apply For:*</label>
                            <select class="w3-select w3-white w3-border w3-hover-light-grey w3-border-grey" name="class" required>
                                    <option value="" disabled selected>SELECT CLASS</option>
                                    <option value="3rd Grade">3rd Grade</option>
                                    <option value="4th Grade">4th Grade</option>
                                    <option value="5th Grade">5th Grade</option>
                                    <option value="6th Grade">6th Grade</option>
                                    <option value="7th Grade">7th Grade</option>
                                    <option value="8th Grade">8th Grade</option>
                                    <option value="9th Grade">9th Grade</option>
                                    <option value="11th Grade">11th Grade</option>
                                </select>
                        </div>
                        <div class="w3-col l6 m6" style="padding-top:8px">
                            <label for="billing_name">Admission Date*</label>
                            <select class="w3-select w3-white w3-border w3-hover-light-grey w3-border-grey" name="date" required>
                                <option value="" disabled selected>SELECT DATE</option>
                               <!--  <option value="SUNDAY, 10 MARCH 2019">SUNDAY, 10 MARCH 2019</option> -->
                                @foreach($dates as $date)
                                <option value="{{$date->date}}">{{$date->date}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                <p class="w3-small w3-text-red w3-border-bottom">Address</p>
                <div class="w3-container">
                    <input type="text" class="w3-input w3-white w3-border w3-hover-light-grey w3-border-grey" placeholder="Street/ Flat No./ Building Number*" name="billing_address" required>
                </div>


                <div class="w3-row-padding">
                    <div class="w3-col l4 m4" style="padding-top:8px">
                        <input type="text" class="w3-input w3-white w3-border w3-hover-light-grey w3-border-grey" placeholder="City*" name="billing_city" required>
                    </div>
                    <div class="w3-col l4 m4" style="padding-top:8px">
                        <input type="text" class="w3-input w3-white w3-border w3-hover-light-grey w3-border-grey" placeholder="State*" name="billing_state" required>
                    </div>
                    <div class="w3-col l4 m4" style="padding-top:8px">
                        <input type="number" class="w3-input w3-white w3-border w3-hover-light-grey w3-border-grey" placeholder="Zip*" name="billing_zip" required>
                    </div>
                    <div class="w3-col l4 m4" style="padding-top:8px">
                        <input type="text" class="w3-input w3-white w3-border w3-hover-light-grey w3-border-grey" placeholder="Country*" name="billing_country" required>
                    </div>
                </div>
                <p class="w3-small w3-text-red w3-border-bottom">Any Query? (optional)</p>
                <div class="w3-container">
                <textarea class="w3-input w3-white w3-border w3-hover-light-grey w3-border-grey" placeholder="Query (Optional)" name="query"></textarea>
                </div>
                <br><button type="submit" class="w3-button w3-green">Continue</button>
                <span class="w3-tiny">Save Your Details and proceed to payment</span>
            </form>
        </div>
        <div class="w3-col l4 m4">
            <div class="w3-padding-large w3-center">
                {{--                <img src="{{ asset('images/ccavenue.png')}}" style="max-width:250px" class="w3-image">--}}
                <img src="{{ asset($images[$i1]->path) }}" alt="{{ $images[$i1]->alt }}" title="{{ $images[$i1]->title }}" style="max-width:250px" class="w3-image">
            </div>
            <br>
            <br>
            <div class="w3-center">
            <h3 class="w3-text-dark-grey w3-border-bottom"> Facing an Issue?</h3>
            <p>Feel free to <a href="/contact">contact us</a>.</p>
            </div>
            <hr>

            <h4 class="w3-center w3-text-red"><em>"Building Better People, Better World."</em></h4>

        </div>
    </div>



@endsection
