@extends('pages-layout')

{{--@section('page-title', 'Donate and Contribute')--}}

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
        $i1 = ImageController::findIndex($images,'images/icons/sponsor.png');
        $i2 = ImageController::findIndex($images,'images/icons/construction.png');
        $i3 = ImageController::findIndex($images,'images/icons/cow.png');
        $i4 = ImageController::findIndex($images,'images/icons/invest.png');
        $i5 = ImageController::findIndex($images,'images/icons/nature.png');
        if($i1==-1 || $i2==-1 || $i3==-1 || $i4==-1 || $i5==-1)
         dd("You Have make some image path wrong !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!");
       }
@endphp

<div class="w3-content">
    <div class="w3-row">
        <div class="w3-col l3 m3 w3-center">
            <h3 class="w3-border-bottom w3-round w3-hide-small w3-card w3-khaki">Donate and Contribute</h3>
            <div class="w3-bar-block w3-grey w3-round">
                <button class="w3-bar-item w3-button w3-hover-red tablink w3-red w3-border-bottom"
                        onclick="openCity(event,'welcome')">Donate
                </button>
                <button class="w3-bar-item w3-button w3-hover-red tablink w3-border-bottom" id="taxb" onclick="openCity(event,'tax')">
                    Tax Benefits
                </button>
                <button class="w3-bar-item w3-button w3-hover-red tablink w3-border-bottom" id="onlineb" onclick="openCity(event,'online')">
                    Pay Online
                </button>
                <button class="w3-bar-item w3-button w3-hover-red tablink w3-border-bottom" id="directb" onclick="openCity(event,'bank')">Direct Bank Transfer
                </button>
                <button class="w3-bar-item w3-button w3-hover-red tablink w3-border-bottom" id="homeb" onclick="openCity(event,'home')">Donate From Home
                </button>
            </div>
        </div>

        <div class="w3-col l9 m9 animatedParent"><br>
            <div id="welcome" class="w3-container tabs animated fadeInUpShort">
                <h3 class="script"><span>Donate & <em class="text-color">Contribute</em></span></h3>
               <p class="w3-leftbar w3-border-red w3-large w3-padding w3-white w3-text-dark-grey w3-center"><em>“We make a living by what we get. We make a life by what we give.”</em><br><br>Help us to build Better People, Better World.
               </p>
               <br>
               <div class="w3-center">
                    <button class="w3-button w3-green tablink" onclick="openCity(event,'online')">Pay Online</button>
                    <button class="w3-button w3-green tablink" onclick="openCity(event,'bank')">Direct Bank Transfer</button>
                    <button class="w3-button w3-green tablink" onclick="openCity(event,'home')">Donate from Home</button>
               </div>
               <br><br> <div class="w3-cell-row">
                    <div class="w3-cell w3-mobile">
                        <div class="base-color w3-padding-small w3-round w3-card w3-text-white">
                            <p class="w3-small w3-center">
                                    Contribute For New BGIS Development.<br><br>
                            </p>
                        </div>
                    </div>

                    <div class="w3-cell w3-mobile">
                        <div class="w3-yellow w3-padding-small w3-round w3-card">
                            <p class="w3-small w3-center">
                                Contribute For New BGIS Construction : Rs 2100 for 10 months.
                            </p>
                        </div>
                    </div>
                    <div class="w3-cell w3-mobile">
                            <div class="base-color w3-padding-small w3-round w3-card w3-text-white">
                                <p class="w3-small w3-center">
                                        Donate to sponsor the education of one child for a year. Rs 1,00,000 including residential charges.
                                </p>
                            </div>
                        </div>

                        <div class="w3-cell w3-mobile">
                            <div class="w3-yellow w3-padding-small w3-round w3-card">
                                <p class="w3-small w3-center">
                                    Contribute for cow-care. Help us maintain the cows for Rs 18,000 a year.
                                </p>
                            </div>
                        </div>
                        <div class="w3-cell w3-mobile">
                                <div class="base-color w3-padding-small w3-round w3-card w3-text-white">
                                    <p class="w3-small w3-center">
                                            Contribute For Nature Care : Support for 15 trees for life for 10,000.
                                    </p>
                                </div>
                            </div>
                </div>


                <br><br>
                    <div class="w3-row-padding">
                        <div class="w3-col l1 w3-hide-small">.</div>
                        <div class="w3-col l2 m3 s6 w3-center w3-padding">
{{--                            <img src="{{ asset('images/icons/sponsor.png') }}" class="w3-image">--}}
                            <img class="w3-image" src="{{ asset($images[$i1]->path) }}" alt="{{ $images[$i1]->alt }}" title="{{ $images[$i1]->title }}">
                            <p>Sponsor the education</p>
                        </div>
                        <div class="w3-col l2 m3 s6 w3-center w3-padding">
{{--                                <img src="{{ asset('images/icons/construction.png') }}" class="w3-image">--}}
                            <img class="w3-image" src="{{ asset($images[$i2]->path) }}" alt="{{ $images[$i2]->alt }}" title="{{ $images[$i2]->title }}">
                                <p>Donate for New BGIS</p>
                            </div>
                        <div class="w3-col l2 m3 s6 w3-center w3-padding">
{{--                                <img src="{{ asset('images/icons/cow.png') }}" class="w3-image">--}}
                            <img class="w3-image" src="{{ asset($images[$i3]->path) }}" alt="{{ $images[$i3]->alt }}" title="{{ $images[$i4]->title }}">
                                <p>Donate for Cow Care</p>
                            </div>
                            <div class="w3-col l2 m3 s6 w3-center w3-padding">
{{--                                    <img src="{{ asset('images/icons/invest.png') }}" class="w3-image">--}}
                                <img class="w3-image" src="{{ asset($images[$i4]->path) }}" alt="{{ $images[$i4]->alt }}" title="{{ $images[$i4]->title }}">
                                    <p>Invest for Future</p>
                                </div>
                                <div class="w3-col l2 m3 s6 w3-center w3-padding">
{{--                                        <img src="{{ asset('images/icons/nature.png') }}" class="w3-image">--}}
                                    <img class="w3-image" src="{{ asset($images[$i5]->path) }}" alt="{{ $images[$i5]->alt }}" title="{{ $images[$i5]->title }}">
                                        <p>Nature Care</p>
                                    </div>
                    </div>

            </div>


            <div id="online" class="w3-container tabs animated fadeInUpShort" style="display:none">
                <h3 class="script"><span>Pay <em class="text-color">Online</em></span></h3>
                <div class="w3-padding-large w3-center">
                <a href="/donate" class="w3-button w3-green">Continue to Donate Online</a><br><br>
                <p class="w3-text-dark-grey w3-small">(Powered by CCAvenue. 100% Secure and Safe)</p>
                </div>
            </div>

            <div id="bank" class="w3-container tabs animated fadeInUpShort" style="display:none">

                <h3 class="script"><span><em class="text-color">Bank</em> Transfer</span></h3>
                <p>To transfer the donation amount directly in the bank account kindly, find below the bank details</p>
                    <p>In favour of <strong>‘Bhaktivedanta Gurukula and International School’</strong></p>


                    <p class="w3-padding w3-leftbar w3-border-red w3-white">
                        AXIS BANK <br>
                        <span class="w3-text-dark-grey">Account Name: ISKCON School Project<br>
                        Account Number 912010056034997.<br>
                        IFSC Code: UTIB0000794<br>
                        swift code: AXISIN B002<br>
                        Bank Address: <br>
                        Khasra No. 1283, Chatikara road, NR Nandan Van Cly<br>
                        Opposite Kripalu Hospital & Kripalu temple <br>
                        Vrindavan 281121</span></p>

                        <p class="w3-padding w3-leftbar w3-border-red w3-white">
                                SBI <br>
                                <span class="w3-text-dark-grey">Account Name : BGIS <br>
                                        Account Number 10684301903,<br>
                                        IFSC Code:SBIN0002502,<br>
                                        Branch Code: 2502.<br>
                                        Swift Code: SBI-NIN-BB-556</span></p>


                    <span class="text-color">Please Note</span>
                    <ol>
                    <li>The donation is non-refundable</li>
                    <li>Donation above Rs.500 is entitled for I-Tax exemption u/s 80-G of the Income tax Act. Bhaktivedanta Academy is registered under Society act with Registration number K/41661</li>

            </div>

            <div id="tax" class="w3-container tabs animated fadeInUpShort" style="display:none">

                <h3 class="script"><span><em class="text-color">Tax</em> Benefits</span></h3>
                <p class="w3-text-dark-grey">On donating for the development of Gurukul or for sponsoring a child, you will get tax exemption. In recognition of your generosity,
                    you will receive an official 80-G tax exempted receipt, regular communications from the school about the child sponsored by you, monthly
                    e-newsletters and transcendental gifts from Sri Vrindavan-dham!
                </p>
                <strong>
                <ul>
                        <li>Exempted from Income Tax U/s 80G of IT Act.</li>
                        <li>Get tax benefits under 35 AC on your donation</li>
                        <li>Charity tax deduction‎</li>
                        <li>Invest for future of great cause.</li>
                </ul>

            </div>


            <div id="home" class="w3-container tabs animated fadeInUp" style="display:none">
                <h3 class="script"><span>Donate from <em class="text-color">Home</em></span></h3>
                <p>Simply call us at the mobile no. below and one of the ISKCON devotee shall contact you soon.</p>
                <p class="w3-padding w3-leftbar w3-border-red w3-white w3-text-dark-grey">Rohit Dasrapuria<br>+91 08979684253</p>

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
