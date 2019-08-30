@extends('admin.layout')

@section('title')
    Faculty
@endsection

@section('body')

@if(Session::has('flash_message'))
<div class="alert alert-success" role="alert">
        {{Session::get('flash_message')}}
      </div>
@endif


<h1 class="w3-border-bottom w3-padding w3-text-white"><i class="fa fa-user" aria-hidden="true"></i> Faculty</h1>
<br>

<a href="/admin/faculty/create" class="btn btn-success">Create New</a><br><br>
<div class="table-responsive">
    <table class="table table-bordered table-striped">
    
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Active/ Inactive</th>
                        <th>Actions</th>
                        <th>Order</th>
                    </tr>
                </thead>
    
                <tbody>
                    @foreach ($faculties as $faculty)
                    <tr>
    
                        <td>@if ($faculty->active)
                                {{ $faculty->name }}
                        @else <del>{{ $faculty->name }}</del> @endif</td>
                        <td>{{ $faculty->position }}</td>
                        <td>
                                <form method="POST" action="/admin/faculty/updateOne/{{$faculty->id}}">
                                    @method('PATCH')
                                    @csrf
                                    <div class="form-check">
                                    <label class="form-check-label" for="active">Active</label>
                                    <input class="form-check-input" type="checkbox" name="active" onchange="this.form.submit()" {{ $faculty->active ? 'checked' : ''}}>
                                    </div>
                                </form>




                        </td>
                        <td>
                        <a href="/admin/faculty/{{ $faculty->id }}/edit" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
                        <form method="POST" action="/admin/faculty/{{ $faculty->id }}">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Are you sure you want to delete this?')" type="submit" class="btn btn-danger pull-left">Delete</button>
                        </form>
    
                        </td>
                        <td>
                                <form method="POST" action="/admin/faculty/orderUp/{{$faculty->id}}">
                                    
                                    @csrf
                                    <button type="submit" class="btn pull-left"><i class="fa fa-arrow-circle-up"></i></button>
                                </form>
                                <form method="POST" action="/admin/faculty/orderDown/{{$faculty->id}}">
                                    @csrf
                                    <button type="submit" class="btn pull-right"><i class="fa fa-arrow-circle-down"></i></button>
                                </form>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
    
            </table>
        </div>
    
@endsection