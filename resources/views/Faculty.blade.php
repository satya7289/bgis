@extends('pages-layout')

{{--@section('page-title')--}}
{{--    Faculty--}}
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
<div class="w3-content" style="max-width:900px">
    <br>
    <div class="w3-white w3-content w3-card w3-padding w3-leftbar w3-border-red">
        The Bhaktivedanta Gurukula and International School(BGIS),
        located in the beautiful holy land of Sri Vrindavan dham, the
        abode of Lord Krishna, offers the best of both worlds- the traditional
         and the modern, the Vedic and the contemporary, the spiritual and the
         temporal. Teaching includes aesthetics in art, literature and science with emphasis on
        practical training methodologies.
    </div><br>

@foreach($faculties as $faculty)
    <div class="w3-card-4 animatedParent">
        <header class="w3-container w3-khaki">
            <h3>{{$faculty->name}}</h3>
        </header>
        <div class="w3-container w3-white">
            <div class="w3-row">
                <div class="w3-col l4 m4 w3-padding w3-center">
                    <br>
                    <img class="w3-image w3-round w3-card animated fadeInLeftShort" src="/storage/app/{{ $faculty->image }}" style="max-width:100%">
                </div>
                <div class="w3-col l7 m7 w3-padding">
                    <p class="w3-justify animated fadeInRightShort">
                       {{$faculty->description}}
                    </p>
                </div>
            </div>
         </div>

    </div>
    <br>
    @endforeach
</div>
@endsection
