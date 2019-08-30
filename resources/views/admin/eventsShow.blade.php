@extends('admin.layout')

@section('body')

<div class="w3-white w3-round">
    <div class="w3-container">
        <h5><span class="w3-text-grey">Title:</span> {{$event->title}}</h5>
        <hr>
        <h5 class="w3-text-grey">Featured Image</h5>
        <img style="max-width: 60%" class="w3-image" src="{{ Storage::url($event->image) }}">
        <hr>
        <h5 class="w3-text-grey w3-border-bottom w3-border-grey">Excerpt:</h5>
        {!! $event->exp !!}
        <hr>
        <h5 class="w3-text-grey w3-border-bottom w3-border-grey">Description:</h5>
        {!! $event->description !!}
    </div>
    {{$event->slug}}
    <br><br>
    <div class="w3-padding w3-center">
    <a href="/admin/events/{{$event->id}}/edit" class="w3-button w3-center">Edit</a>
    <form method="POST" action="/admin/events/{{ $event->id }}" class="">
        @csrf
        @method('DELETE')
        <button onclick="return confirm('Are you sure you want to delete this?')" type="submit" class="w3-red w3-button">Delete Story</button>
    </form>
    </div>
</div>
@endsection