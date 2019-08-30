@extends('pages-layout')

{{--@section('page-title')--}}
{{--    Community Scholarship--}}
{{--@endsection--}}

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
        $i1 = ImageController::findIndex($images,'images/vocational/animation.jpg');
        $i2 = ImageController::findIndex($images,'images/vocational/food.jpg');
        $i3 = ImageController::findIndex($images,  'images/vocational/greenenergy.jpg');
        $i4 = ImageController::findIndex($images,'images/vocational/homescience.jpg');
        $i5 = ImageController::findIndex($images,'images/vocational/hortriculture.jpg');
        $i6 = ImageController::findIndex($images,'images/vocational/itservices.jpg');
        $i7 = ImageController::findIndex($images,'images/vocational/nursing.jpg');
        $i8 = ImageController::findIndex($images,'images/vocational/appliances.jpg');
        $i9 = ImageController::findIndex($images,'images/vocational/salesandmarketing.jpg');
        $i10 = ImageController::findIndex($images,'images/vocational/sewing.jpg');
        $i11= ImageController::findIndex($images, 'images/vocational/tourism.jpg');
        if($i1==-1 || $i2==-1 || $i3==-1 || $i4==-1 || $i5==-1 || $i6==-1 || $i7==-1 ||
            $i8==-1 ||$i9==-1 || $i10==-1 || $i11==-1)
         dd("You Have make some image path wrong !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!");
       }
@endphp

    <br>
<br>
<div class="w3-content">
    <h3 class="script"><span>Community <em class="text-color">Scholarship</em></span></h3>


<p class="w3-card w3-white w3-padding-large w3-text-dark-grey">
        Bhaktivedanta Institute for Vocational Training (BIVT) is an initiative of the Bhaktivedanta Gurukula and International School (BGIS), an educational unit of ISKCON, to empower the youth in rural areas including those from underprivileged section of the society to be endowed with practical skills to enable them to be productive participants in the development of our country. <br><br>

        BGIS is a residential school situated in Vrindavana and is affiliated to ICSE board and provides holistic education to students with a strength of 300 students at present. Upto 30% of students from rural backgrounds in BPL/OBC/SC/ST category are given free education through various scholarship programs. <br><br>

        The project is headed by Dr. Lila Purshottam Das, Prof IIT Kanpur and many professionals are involved in the project.
</p>
<br>

    <div class="w3-row-padding">
        <div class="w3-col l4 m4">
            <div class="w3-card-4 w3-center">
                {{--            <img style="width:100%" src="{{asset('images/vocational/animation.jpg')}}" alt="Norway">--}}
                <img src="{{ asset($images[$i1]->path) }}" alt="{{ $images[$i1]->alt }}" title="{{ $images[$i1]->title }}" >
                <div class="w3-padding w3-center">
                    <p>Animation and Digital Arts</p>
                    <br>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m4">
            <div class="w3-card-4 w3-center">
                {{--                <img style="width:100%" src="{{asset('images/vocational/food.jpg')}}" alt="Norway">--}}
                <img style="width:100%" src="{{ asset($images[$i2]->path) }}" alt="{{ $images[$i2]->alt }}" title="{{ $images[$i2]->title }}">
                <div class="w3-padding w3-center">
                    <p>Food Processing (homemade pickles, spices etcs.</p>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m4">
            <div class="w3-card-4 w3-center">
                {{--                    <img style="width:100%" src="{{asset('images/vocational/greenenergy.jpg')}}" alt="Norway">--}}
                <img style="width:100%" src="{{ asset($images[$i3]->path) }}" alt="{{ $images[$i3]->alt }}" title="{{ $images[$i3]->title }}">
                <div class="w3-container w3-center">
                    <p>Green Energy Technology (maintenance & installation of solar systems, biomass units etc.</p>
                </div>
            </div>
        </div>
    </div><br><div class="w3-row-padding">

        <div class="w3-col l4 m4">
            <div class="w3-card-4 w3-center">
                {{--                        <img style="width:100%" src="{{asset('images/vocational/homescience.jpg')}}" alt="Norway">--}}
                <img style="width:100%" src="{{ asset($images[$i4]->path) }}" alt="{{ $images[$i4]->alt }}" title="{{ $images[$i4]->title }}">
                <div class="w3-padding w3-center">
                    <p>Home Science (cooking, sanitation etc.</p><br>

                </div>
            </div>
        </div>

        <div class="w3-col l4 m4">
            <div class="w3-card-4 w3-center">
                {{--                            <img style="width:100%" src="{{asset('images/vocational/hortriculture.jpg')}}" alt="Norway">--}}
                <img style="width:100%" src="{{ asset($images[$i5]->path) }}" alt="{{ $images[$i5]->alt }}" title="{{ $images[$i5]->title }}">
                <div class="w3-padding w3-center">
                    <p>Horticulture and Natural Farming(including bio-fertilisers)</p>

                </div>
            </div>
        </div>

        <div class="w3-col l4 m4">
            <div class="w3-card-4 w3-center">
                {{--                                <img style="width:100%" src="{{asset('images/vocational/itservices.jpg')}}" alt="Norway">--}}
                <img style="width:100%" src="{{ asset($images[$i6]->path) }}" alt="{{ $images[$i6]->alt }}" title="{{ $images[$i6]->title }}">
                <div class="w3-padding w3-center">
                    <p>IT Services like DTP, e-commerce, e-health etc.</p>

                </div>
            </div>
        </div>
    </div><br>
    <div class="w3-row-padding">

        <div class="w3-col l4 m4">
            <div class="w3-card-4 w3-center">
                {{--                                    <img style="width:100%" src="{{asset('images/vocational/nursing.jpg')}}" alt="Norway">--}}
                <img style="width:100%" src="{{ asset($images[$i7]->path) }}" alt="{{ $images[$i7]->alt }}" title="{{ $images[$i7]->title }}">
                <div class="w3-padding w3-center">
                    <p>Nursing and Healthcare(bio-medicines, phisiotherapy etc.)</p>

                </div>
            </div>
        </div>


        <div class="w3-col l4 m4">
            <div class="w3-card-4 w3-center">
                {{--                                        <img style="width:100%" src="{{asset('images/vocational/appliances.jpg')}}" alt="Norway">--}}
                <img style="width:100%" src="{{ asset($images[$i8]->path) }}" alt="{{ $images[$i8]->alt }}" title="{{ $images[$i8]->title }}">
                <div class="w3-padding w3-center">
                    <p>Repairing of Domestic Appliances</p>
                    <br>
                </div>
            </div>
        </div>

        <div class="w3-col l4 m4">
            <div class="w3-card-4 w3-center">
                {{--                                            <img style="width:100%" src="{{asset('images/vocational/salesandmarketing.jpg')}}" alt="Norway">--}}
                <img style="width:100%" src="{{ asset($images[$i9]->path) }}" alt="{{ $images[$i9]->alt }}" title="{{ $images[$i9]->title }}">
                <div class="w3-padding w3-center">
                    <p>Sales and Marketing</p>
                    <br>
                </div>
            </div>
        </div>
    </div><div class="w3-row-padding"><br>

        <div class="w3-col l4 m4">
            <div class="w3-card-4 w3-center">
                {{--                                                <img style="width:100%" src="{{asset('images/vocational/sewing.jpg')}}" alt="Norway">--}}
                <img style="width:100%" src="{{ asset($images[$i10]->path) }}" alt="{{ $images[$i10]->alt }}" title="{{ $images[$i10]->title }}">
                <div class="w3-padding w3-center">
                    <p>Sewing and Tailoring</p>

                </div>
            </div>
        </div>

        <div class="w3-col l4 m4">
            <div class="w3-card-4 w3-center">
                {{--                                                    <img style="width:100%" src="{{asset('images/vocational/tourism.jpg')}}" alt="Norway">--}}
                <img style="width:100%" src="{{ asset($images[$i11]->path) }}" alt="{{ $images[$i11]->alt }}" title="{{ $images[$i11]->title }}">
                <div class="w3-padding w3-center">
                    <p>Tourism and Hospitality</p>

                </div>
            </div>
        </div>
    </div>

</div>
</div>
@endsection
