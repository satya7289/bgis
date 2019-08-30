@extends('admin.layout')

@section('body')

    <h1><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Page</h1>

    @if (session('message'))
        <div class="w3-panel w3-green">
            <p>Your Changes have been successfully submitted!</p>
        </div>
    @endif
    <h5 class="w3-border-bottom w3-padding w3-admin w3-text-white">Page Title</h5>

    <form method="POST" action="/admin/pages/{{ $page->id }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="title"><h5>Title:</h5></label>
            <p style="font-size:13px;color:red">This is a Title of the page. Keep it short( do not include more than 60 words)</p>
            <input style="width:100%" class="form-control" name="title" id="title" type="text" value="{{ $page->title }}" required>
        </div>

        <div class="form-group">
            <label for="keyword"><h5>Keywords:</h5></label>
            <p style="font-size:13px;color:red">This is a meta Keywords which google look when searching about the pages . Keep it short( do not include more than 1 words)</p>
            <textarea class="form-control" rows="4" name="keyword" id="keyword" required>{{ $page->keyword }}</textarea>
        </div>

        <div class="form-group">
            <label for="description"><h5>Description:</h5></label>
            <p style="font-size:13px;color:red">This is a small meta description which google checks summary about the pages . Keep it short( do not include more than 150 words)</p>
            <textarea class="form-control" rows="4" name="description" id="description" required>{{ $page->description }}</textarea>
        </div>
        <br>
        <br>

        <button type="submit" class="btn btn-info pull-left">Update</button>

    </form>
@endsection
