@extends('admin.layout')
@section('title','Arjun')

@section('body')

<h1><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Story</h1>

        @if (session('message'))
        <div class="w3-panel w3-green">
            <p>Your Changes have been successfully submitted!</p>
        </div> 
        @endif
        <h5 class="w3-border-bottom w3-padding w3-admin w3-text-white">Edit Event</h5>

        <form method="POST" action="/admin/events/{{ $event->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="title"><h5>Title:</h5></label>
                <input style="width:100%" class="form-control" name="title" id="title" type="text" value="{{ $event->title }}" required>
            </div>
            <div class="form-group">
                <p style="color:red">If you do not want to change the image, leave this blank.</p>
                <label for="image"><h5>Featured Image</h5></label>
                <input class="form-control" name="image" id="image" type="file">
            </div>
            <div class="form-group">
                <label for="exp"><h5>Excerpt:</h5></label>
                <p style="font-size:13px;color:red">This is a small summary which appears on homepage and events page. Keep it short( do not include more than 30 words)</p>
                <textarea class="form-control" rows="4" name="exp" id="exp" required>{{ $event->exp }}</textarea>
            </div>
        
            <div class="form-group">
                <label for="description"><h5>Detailed Description</h5></label>
                <textarea class="myTextEditor form-control" rows="12" name="description" id="description" required>{{ $event->description }}</textarea>
                <br>
            </div>
            <br>
            <br>
            
    <button type="submit" class="btn btn-info pull-left">Update</button>
</form>
<form method="POST" action="/admin/events/{{ $event->id }}">
    @csrf
    @method('DELETE')
    <button onclick="return confirm('Are you sure you want to delete this?')" type="submit" class="btn btn-danger pull-right">Delete</button>
</form>

@endsection