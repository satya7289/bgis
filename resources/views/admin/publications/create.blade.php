@extends('admin.layout')

@section('title')
 Create New Publication    
@endsection

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


<h1 class="w3-border-bottom w3-padding w3-text-white"><i class="fa fa-user" aria-hidden="true"></i> Create New Publication</h1>
<br>

<form method="POST" action="/admin/publications" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Title:</label>
        <input class="form-control" name="title" id="title" type="text" placeholder="Title" required>
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input class="form-control" name="image" id="image" type="file" required>
    </div>
    <div class="form-group">
            <label for="image">File</label>
            <input class="form-control" name="file" id="file" type="file" required>
        </div>

        <label class="radio-inline"><input type="radio" name="category" value="Publication" checked>Publication</label>
<label class="radio-inline"><input type="radio" name="category" value="Book">Book</label>
<br>
<br>
    <div class="form-group">
        <label for="position">Year:</label>
        <input class="form-control" name="year" id="year" type="number" placeholder="year" required>
    </div>
    <button type="submit" class="btn btn-success">Create</button>
</form>






    
@endsection