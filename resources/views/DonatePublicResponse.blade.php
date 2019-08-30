@extends('pages-layout')

@section('page-title')
    {{ $response['order_status'] }}
@endsection
{{-----------------------------------Title not Change From Backand -------------------------------------------}}
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
<div class="w3-content w3-center"><br><br>
@if($response['order_status']==="Success")
        <h2 class="w3-text-green">Thank you. Your donation of {{$response['currency'] }} {{$response['amount']}} for contributing towards BGIS.</h1>
        <p>Details have been sent to you by email.</p>

	@elseif($response['order_status']==="Aborted")

		<h1>Thank you for contribution. We will keep you updated regarding your contribution through email"</h1>


	@elseif($response['order_status'] === "Failure")

		<h1 class="w3-text-red">The contribution could not be made successfully. The transaction was declined. We thank you for the efforts.</h1>
	@else

	    <h6 class="w3-text-red">Security Error. Illegal access detected</h6>


    @endif

</div>

@endsection

