@extends('admin.layout')
@section('title', 'Add Images to the Page')

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
<h1 class="w3-border-bottom w3-padding w3-text-white"><i class="fa fa-upload" aria-hidden="true"></i> Add New</h1>
<br>

<form method="POST" action="/admin/pages/{{ $page_id }}/image" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="path">Path:</label>
        <input class="form-control" name="path" id="path" type="text" placeholder="Url of the Image i.e images/hom-hero.png" required>
    </div>
    <div class="form-group">
        <label for="title">Title</label>
        <input class="form-control" name="title" id="title" type="text" placeholder="Title of the image" required>
    </div>
    <div class="form-group">
        <label for="alt">Alt</label>
        <input class="form-control" name="alt" id="alt" type="text" placeholder="Alt attribute of the image" required>
    </div>
    <button type="submit" class="btn btn-success">Add Image</button>
</form>

@endsection
