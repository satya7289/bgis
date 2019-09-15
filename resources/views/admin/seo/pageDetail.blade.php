@extends('admin.layout')


@section('script')
    @if(Session::has('flash_message'))
        @if(Session::get('flash_message')=="Update image path Successfully")
           alert(" {{Session::get('flash_message')}}")
        @endif
    @endif
@endsection


@section('body')
<h1><i class="fa fa-info-circle" aria-hidden="true"></i> Page Detail</h1>
    @if(Session::has('flash_message'))
        <div class="w3-panel w3-green">
            {{Session::get('flash_message')}}
        </div>
    @endif

<div class="row">
    <h3> <i class="fa fa-key" aria-hidden="true"></i> Meta Tags:</h3>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <tbody>

{{--                <tr>--}}
{{--                    <td>Directory</td>--}}
{{--                    <td>{{ $page->directory }}</td>--}}
{{--                </tr>--}}
                <tr>
                    <td>Name</td>
                    <td>{{ $page->name }}</td>
                </tr>
{{--                <tr>--}}
{{--                    <td>Url</td>--}}
{{--                    <td>{{ $page->url }}</td>--}}
{{--                </tr>--}}
                <tr>
                    <td>Title</td>
                    <td>{{ $page->title }}</td>
                </tr>
                <tr>
                    <td>Keyword</td>
                    <td>{{ $page->keyword }}</td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td>{{ $page->description }}</td>
                </tr>

            </tbody>

        </table>
    </div>
    <a href="/admin/pages/{{ $page->id }}/edit" class=" btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
</div>

<div class="row">
    <h3 ><i class="fa fa-picture-o" aria-hidden="true"></i> Image Tags:</h3>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Path</th>
                    <th>Alt</th>
                    <th>Title</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
            @foreach ($images as $image)
            <tr>
                <td>  <a href="/{{ $image->path }}" style="margin-right: 3px;">{{ $image->path }}</a></td>
                <td>{{ $image->alt }}</td>
                <td>{{ $image->title }}</td>
                <td>
                    <a href="/admin/pages/{{ $page->id }}/image/{{ $image->id }}/edit" class="btn btn-info " style="margin-right: 3px;">Edit</a>
                </td>
            </tr>
            @endforeach
            </tbody>

        </table>
    </div>
    <a href="/admin/pages/{{$page->id}}/image/create" class=" btn btn-success pull-right" style="margin-right: 3px;">Add Image</a>
</div>

@endsection

