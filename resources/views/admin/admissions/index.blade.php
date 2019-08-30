@extends('admin.layout')

@section('title')
    Admission Test Registrations
@endsection

@section('body')

@if(Session::has('flash_message'))
<div class="alert alert-success" role="alert">
        {{Session::get('flash_message')}}
      </div>
@endif


<h1 class="w3-border-bottom w3-padding w3-text-white"><i class="fa fa-money" aria-hidden="true"></i> Admission Test Registrations</h1>
<br>
<a href="/admin/admissions/export" class="btn btn-info">Export Admission Test Registration</a><br><br>

<div class="table-responsive">
    <table class="table table-bordered table-striped">
    
                <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Tracking ID</th>
                        <th>Registration ID</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Amount</th>
                        <th>More</th>
                    </tr>
                </thead>
    
                <tbody>
                    @foreach ($admissions as $admission)
                    <tr>
    
                        <td>{{ $admission->billing_name }}</td>
                        <td>
                            {{$admission->tracking_id}}
                        </td>
                        <td>
                            {{$admission->order_id}}
                        </td>
                        <td>
                            {{$admission->created_at->toDateString()}}
                        </td>
                        <td>
                            <span style="color: {{ $admission->order_status === 'Success' ? 'green' : ''}}">{{$admission->order_status}}</span>
                        </td>
                        <td>
                            {{$admission->amount}}
                        </td>
                
                        <td>
                            <a href="/admin/admissions/{{$admission->id}}">Details</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
    
            </table>
           
        </div>
        {{ $admissions->links() }}
    
@endsection