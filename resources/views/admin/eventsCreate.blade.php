@extends('admin.layout')
@section('title', 'Create New News/Event')

@section('body')
@if($errors->any())
<div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </ul>
</div>
@endif
<h1 class="w3-border-bottom w3-padding w3-text-white"><i class="fa fa-upload" aria-hidden="true"></i> Create New</h1>
<br>

<form method="POST" action="/admin/events" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Title:</label>
        <input class="form-control" name="title" id="title" type="text" placeholder="Title of News" required>
    </div>
    <div class="form-group">
        <label for="image">Featured Image</label>
        <input class="form-control" name="image" id="image" type="file" required>
    </div>
    <div class="form-group">
        <label for="exp">Excerpt:</label>
        <p style="font-size:13px;color:red">This is a small summary which appears on homepage and events page. Keep it short( do not include more than 30 words)</p>
        <textarea class="form-control" rows="4" name="exp" id="exp" maxlength="200" required></textarea>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="myTextEditor form-control" rows="12" name="description" id="description"></textarea>
        <br>
    </div>
    <button type="submit" class="btn btn-success">Publish New Story</button>
</form>

@endsection