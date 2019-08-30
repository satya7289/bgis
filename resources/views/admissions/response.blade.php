@extends('pages-layout')

@section('page-title', $response['order_status'] )

{{---------------------------Title not changing from backand-------------------------------------}}
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
{{--@section('page-title') {{ $title }} @endsection    --}}
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
        <div class="w3-cell w3-padding w3-center w3-border-right w3-red">
                2. Make Payment >>
            </div>
            <div class="w3-cell w3-center w3-padding w3-red">
                    3. Confirmation<br>
                    @if($response['order_status']==="Success") <span class="w3-text-green">Success</span> @else ERROR @endif
                </div>
    </div>

<div class="w3-center">
    @if($response['order_status']==="Success")
                <h3 class="w3-text-green">Your Payment of {{$response['currency'] }} {{ $response['amount'] }} was successfull. Registration is now Complete.</h3>
                <p>Details have been sent to you by email. Please make a note of your registration number.</p>

            @elseif($response['order_status']==="Aborted")

                <h3 class="w3-text-red">Error in Payment. We will keep you updated regarding your contribution through email."</h3>


            @elseif($response['order_status'] === "Failure")

                <h3 class="w3-text-red">Payment Failed. Please try again later.</h3>
            @else

                <h6 class="w3-text-red">Security Error. Illegal access detected</h6>


            @endif

                </div>


    <div class="w3-row-padding">
        <div class="w3-col l8 m8">
                <div class="w3-padding">
                        <label>REGISTRATION NUMBER</label>
                        <input class="w3-input w3-white w3-border w3-hover-light-grey w3-border-grey" type="text" name="reg_num_disabled" value="{{$detail->order_id}}" disabled>

                    </div>
                <p class="w3-small w3-text-red w3-border-bottom">Personal information</p>
                <div class="w3-container">
                    <p><span class="w3-text-dark-grey w3-small">Full Name of Student:</span> <strong>{{$detail->billing_name}}</strong></p>
                </div>
                <div class="w3-container">
                        <p><span class="w3-text-dark-grey w3-small">Parent/ Guardian's Name:</span> <strong>{{$detail->billing_parent}}</strong></p>
                    </div>
                <div class="w3-row-padding">
                    <div class="w3-col l6 m6">
                            <p><span class="w3-text-dark-grey w3-small">Email:</span> <strong>{{$detail->billing_email}}</strong></p>
                    </div>
                    <div class="w3-col l6 m6">
                            <p><span class="w3-text-dark-grey w3-small">Phone:</span> <strong>{{$detail->billing_tel}}</strong></p>
                    </div>
                </div>
                <div class="w3-row-padding">
                        <div class="w3-col l6 m6">
                                <p><span class="w3-text-dark-grey w3-small">Applying For:</span> <strong>{{$detail->class}}</strong></p>
                        </div>
                        <div class="w3-col l6 m6">
                                <p><span class="w3-text-dark-grey w3-small">Admission Test Date:</span> <strong>{{$detail->date}}</strong></p>
                        </div>
                    </div>
                <p class="w3-small w3-text-red w3-border-bottom">Address</p>
                <div class="w3-container">
                        <p><span class="w3-text-dark-grey w3-small">Address:</span> <strong>{{$detail->billing_address}}</strong></p>
                    </div>
                    <div class="w3-row-padding">
                            <div class="w3-col l4 m4">
                                    <p><span class="w3-text-dark-grey w3-small">City:</span> <strong>{{$detail->billing_city}}</strong></p>
                            </div>
                            <div class="w3-col l4 m4">
                                    <p><span class="w3-text-dark-grey w3-small">State:</span> <strong>{{$detail->billing_state}}</strong></p>
                            </div>
                            <div class="w3-col l4 m4">
                                    <p><span class="w3-text-dark-grey w3-small">Zip:</span> <strong>{{$detail->billing_zip}}</strong></p>
                            </div>
                            <div class="w3-col l4 m4">
                                    <p><span class="w3-text-dark-grey w3-small">Country:</span> <strong>{{$detail->billing_country}}</strong></p>
                            </div>
                        </div>
                <br>
        </div>
        <div class="w3-col l4 m4"><br>
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
</div>


@endsection
