@extends('pages-layout')

@section('page-title', $news->title)
{{---------------------------------------- Title Not changing from Backand-----------------------------------------------}}

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
{{--@section('page-title') {{ $title}} @endsection--}}
@section('meta-keywords'){{ $keyword }} @endsection
@section('meta-description') {{ $description }} @endsection
@endif
{{-- end changes --}}

@section('body')

<div class="w3-content" style="max-width:900px">
        <br><br>
    <div class="w3-container w3-white w3-round">
        <h1>{{$news->title}}</h1>
        <span class="w3-text-grey w3-small">Published On: <strong>{{$news->created_at->toDateString()}}</strong></span>
        <hr>
        <div class="w3-center">
            <img src="/storage/app/{{ $news->image }}" class="w3-image w3-card w3-round">
        </div>
        <hr>
        {!! $news->description !!}
    </div>
</div>

@endsection
