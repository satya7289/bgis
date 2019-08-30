@extends('pages-layout')

{{--@section('page-title','News and Events')--}}

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
    @foreach ($news as $event)
    <div class="w3-white w3-round w3-padding w3-row">
            <div class="w3-col l2 m3">
                <img  class="w3-image" src="/storage/app/{{ $event->image }}">
            </div>
            <div class="w3-col l10 m9 w3-container">
                <h3 class="text-color"><a href="/news/{{$event->slug}}">{{ $event->title }}</a></h3>
                <span class="w3-text-grey w3-small">Published On : <strong>{{ $event->created_at->toDateString()}}</strong></span>
                <p>{!! $event->exp !!}</p>
                <p class="w3-small text-color"><a href="/news/{{$event->slug}}">Read More >></a> </p>
            </div>
    </div>
            <hr>

    @endforeach
    <div class="w3-center">
    <a href="{{ $news->hasMorePages() ? $news->nextPageUrl() : '' }}" class="w3-blue w3-button {{ $news->hasMorePages() ? '' : 'w3-disabled'}} "> << Load Previous</a>
    <a href="{{ $news->previousPageUrl() }}" class="w3-blue w3-button {{ $news->onFirstPage() ? 'w3-disabled' : ''}}">Newer >> </a>
    </div>

</div>


@endsection
