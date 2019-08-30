@extends('admin.layout')

@section('title')
 Create New Faculty    
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

<h1 class="w3-border-bottom w3-padding w3-text-white"><i class="fa fa-user" aria-hidden="true"></i> Create New Faculty</h1>
<br>

<form method="POST" action="/admin/faculty" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input class="form-control" name="name" id="name" type="text" placeholder="Name of Faculty" required>
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input class="form-control" name="image" id="image" type="file" required>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="myTextEditor form-control" rows="8" name="description" id="description"></textarea>
        <br>
    </div>
    <div class="form-group">
        <label for="position">Position:</label>
        <input class="form-control" name="position" id="position" type="text" placeholder="Position of Faculty" required>
    </div>
    <button type="submit" class="btn btn-success">Create</button>
</form>






    
@endsection