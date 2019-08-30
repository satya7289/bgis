@extends('pages-layout')

{{--@section('page-title')--}}
{{--    Publications--}}
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
<br>
<br>
<div class="w3-content">
    <h3 class="script"><span>Publications | <em class="text-color">BGIS</em></span></h3><br><br>

    <div style="padding: 1px 6px 1px 6px" class="w3-khaki w3-center">
        <p>Books</p>
    </div><br><br>
    <div class="w3-row">
    @foreach ($books as $book)
    <div class="w3-col l4 m4 w3-padding w3-center">
        <a href="/storage/app/{{ $book->file }}">  <img class="w3-image w3-round w3-card" src="/storage/app/{{ ($book->image) }}" style="max-height:300px;max-width:200px"></a>
            <p>{{$book->title}}</p>
    </div>
    @endforeach
    </div>
    <br><br>

    <div style="padding: 1px 6px 1px 6px" class="w3-khaki w3-center">
            <p>Publications</p>
    </div><br><br>
    <div class="w3-row">
        @foreach ($publications as $publication)
        <div class="w3-col l4 m4 w3-padding w3-center">
               <a href="/storage/app/{{ $publication->file }}"> <img style="max-width:200px;max-height:300px" class="w3-image w3-round w3-card" src="/storage/app/{{ $publication->image }}"></a>
                <p>{{$publication->title}}</p>
        </div>

        @endforeach
    </div>




</div>
@endsection
