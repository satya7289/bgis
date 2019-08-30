@extends('admin.layout')

@section('title')
 New Date  
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


<h1 class="w3-border-bottom w3-padding w3-text-white"><i class="fa fa-calendar" aria-hidden="true"></i> New Date</h1>
<br>

<form method="POST" action="/admin/dates" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Date:</label>
        <p>Enter date as a string, this is done to give flexibility</p>
        <input class="form-control" name="date" id="date" type="text" placeholder="Date" required>
    </div>
    <div class="form-group">
        <label for="position">Venue:</label>
        <input class="form-control" name="venue" id="venue" type="text" placeholder="Venue" required>
    </div>
    <button type="submit" class="btn btn-success">Create</button>
</form>






    
@endsection