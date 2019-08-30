@extends('pages-layout')

{{--@section('page-title')--}}
{{--    Transaction Cancelled--}}
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
<div class="w3-content w3-center"><br><br>

        <h2 class="w3-text-red">The Transaction was cancelled.</h2>
        <p>You did not complete the transaction.</p>

</div>

@endsection

