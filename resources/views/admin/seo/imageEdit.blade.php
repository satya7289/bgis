@extends('admin.layout')

@section('body')

    <h1><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Image Tags</h1>

    @if (session('message'))
        <div class="w3-panel w3-green">
            <p>Your Changes have been successfully submitted!</p>
        </div>
    @endif

    <form method="POST" action="/admin/pages/{{ $page }}/image/{{ $image->id }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="path"><h5>Path:</h5></label>
            <p style="font-size:13px;color:red">Do not Make Changes here, until you needed Necessary.</p>
            <input style="width:100%" class="form-control" name="path" id="path" type="text" value="{{ $image->path }}" required>
        </div>

        <div class="form-group">
            <label for="title"><h5>Title:</h5></label>
            <p style="font-size:13px;color:red">This is a Title of the image. Keep it short</p>
            <textarea class="form-control" rows="4" name="title" id="title" required>{{ $image->title }}</textarea>
        </div>

        <div class="form-group">
            <label for="alt"><h5>Alt:</h5></label>
            <p style="font-size:13px;color:red">This is a image attribute ,which is used by google to optimise image. Keep it short</p>
            <textarea class="form-control" rows="4" name="alt" id="alt" required>{{ $image->alt }}</textarea>
        </div>
        <br>
        <br>

        <button type="submit" class="btn btn-info pull-left">Update</button>

    </form>
@endsection

