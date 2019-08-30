@extends('admin.layout')

@section('title')
    Admissions
@endsection

@section('body')

@if(Session::has('flash_message'))
<div class="alert alert-success" role="alert">
        {{Session::get('flash_message')}}
      </div>
@endif


<h1 class="w3-border-bottom w3-padding w3-text-white"><i class="fa fa-money" aria-hidden="true"></i> Registration Details</h1>
<br>
<span style="font-size:150%" class="badge @if($admission->order_status === 'Success')
                                                                badge-success
                                                              @elseif($admission->order_status === 'Failure')
                                                                badge-danger
                                                                @elseif($admission->order_status === 'Aborted')
                                                                badge-danger
                                                                @elseif($admission->order_status === 'Invalid')
                                                                badge-danger
                                                              @else
                                                                badge-primary
                                                                @endif
                                                              ">{{$admission->order_status}}</span>
<span style="font-size:150%" class="badge badge-warning">Reg. No:  <ins> {{$admission->order_id}}</ins></span>
<br><br>
<div class="table-responsive">
    <table class="table table-bordered table-striped">    
                <thead>
                    <tr>
                        <th>Field</th>
                        <th>Value</th>
                    </tr>
                </thead>
    
                <tbody>
                    <tr>
                        <th scope='row'>Name:</th>
                        <td>{{$admission->billing_name}}</td>
                    </tr>
                    <tr>
                        <th scope='row'>Guardian/ Parent Name:</th>
                        <td>{{$admission->billing_parent}}</td>
                    </tr>
                    <tr>
                        <th scope='row'>Class:</th>
                        <td>{{$admission->class}}</td>
                    </tr>
                    <tr>
                        <th scope='row'>Date:</th>
                        <td>{{$admission->date}}</td>
                    </tr>
                    <tr>
                            <th scope='row'>Amount:</th>
                            <td>{{$admission->amount}}</td>
                        </tr>
                        <tr>
                                <th scope='row'>Tracking ID:</th>
                                <td>{{$admission->tracking_id}}</td>
                        </tr>
                        <tr>
                            <th scope='row'>Order Number:</th>
                            <td>{{$admission->order_id}}</td>
                        </tr>
                        <tr>
                            <th scope='row'>Phone:</th>
                            <td>{{$admission->billing_tel}}</td>
                        </tr>

                        <tr>
                                <th scope='row'>Email:</th>
                                <td>{{$admission->billing_email}}</td>
                            </tr>

                            <tr>
                                    <th scope='row'>Address:</th>
                                    <td>{{$admission->billing_address}}</td>
                                </tr>
                                <tr>
                                        <th scope='row'>City:</th>
                                        <td>{{$admission->billing_city}}</td>
                                    </tr>

                                    <tr>
                                            <th scope='row'>State:</th>
                                            <td>{{$admission->billing_state}}</td>
                                        </tr>

                                        <tr>
                                                <th scope='row'>Country:</th>
                                                <td>{{$admission->billing_country}}</td>
                                            </tr>

                                            <tr>
                                                    <th scope='row'>Zip:</th>
                                                    <td>{{$admission->billing_zip}}</td>
                                                </tr>

                                                <tr>
                                                        <th scope='row'>Status:</th>
                                                        <td>{{$admission->order_status}}</td>
                                                    </tr>

                </tbody>
    
            </table>
        </div>
    
@endsection