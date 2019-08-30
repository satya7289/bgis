@extends('admin.layout')

@section('body')
    @if(Session::has('flash_message'))
        <div class="alert alert-info" role="alert">
            {{Session::get('flash_message')}}
        </div>
    @endif




    <h1><i class='fa fa-book'></i> Pages</h1>
    <br>

    <br><br>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
            <tr>
                <th>Page</th>
                <th>Title</th>
                <th>Url</th>
                <th>Keyword</th>
                <th>Action</th>

            </tr>
            </thead>

            <tbody>
            @foreach ($pages as $page)
                <tr>

                    <td>{{ $page->name }}</td>
                    <td>{{ $page->title }}</td>
                    <td>{{ $page->url }}</td>
                    <td>{{ $page->keyword }}</td>
                    <td>
                        <a href="/admin/pages/{{ $page->id }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                    </td>


                </tr>
            @endforeach
            </tbody>

        </table>
</div>


@endsection
