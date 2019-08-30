@extends('admin.layout')

@section('title')
Create Ticket    
@endsection

@section('body')

<h1 class="w3-border-bottom w3-padding w3-text-white"><i class="fa fa-upload" aria-hidden="true"></i>Open New Ticket</h1>
<br>

<form method="POST" action="/admin/tickets" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="against">Create Against</label>
        <select class="form-control" id="against" name="against">
            <option>...Select...</option>
          @foreach ($users as $user)
            <option value="{{$user->id}}">{{ $user->name }}</option>
          @endforeach
            
        </select>
      </div>
    <div class="form-group">
        <label for="title">Subject of Ticket:</label>
        <input class="form-control" name="title" id="title" type="text" placeholder="Title of News" required>
    </div>
    <div class="form-group">
        <label for="body">Description</label>
        <textarea class="myTextEditor form-control" rows="12" name="body" id="body"></textarea>
        <br>
    </div>
    <button type="submit" class="btn btn-success">Submit Now</button>
</form>
    
@endsection