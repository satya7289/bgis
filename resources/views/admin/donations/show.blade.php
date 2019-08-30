@extends('admin.layout')

@section('title')
    Donations
@endsection

@section('body')

@if(Session::has('flash_message'))
<div class="alert alert-success" role="alert">
        {{Session::get('flash_message')}}
      </div>
@endif


<h1 class="w3-border-bottom w3-padding w3-text-white"><i class="fa fa-money" aria-hidden="true"></i> Donation Details</h1>
<br>
<span style="font-size:150%" class="badge @if($donation->order_status === 'Success')
                                                                badge-success
                                                              @elseif($donation->order_status === 'Failure')
                                                                badge-danger
                                                                @elseif($donation->order_status === 'Aborted')
                                                                badge-danger
                                                                @elseif($donation->order_status === 'Invalid')
                                                                badge-danger
                                                              @else
                                                                badge-primary
                                                                @endif
                                                              ">{{$donation->order_status}}</span>
<span style="font-size:150%" class="badge badge-warning">INR: {{$donation->amount}}</span>
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
                        <td>{{$donation->billing_name}}</td>
                    </tr>
                    <tr>
                            <th scope='row'>Amount:</th>
                            <td>{{$donation->amount}}</td>
                        </tr>
                        <tr>
                                <th scope='row'>Tracking ID:</th>
                                <td>{{$donation->tracking_id}}</td>
                        </tr>
                        <tr>
                            <th scope='row'>Order Number:</th>
                            <td>{{$donation->order_id}}</td>
                        </tr>
                        <tr>
                            <th scope='row'>Phone:</th>
                            <td>{{$donation->billing_tel}}</td>
                        </tr>

                        <tr>
                                <th scope='row'>Email:</th>
                                <td>{{$donation->billing_email}}</td>
                            </tr>

                            <tr>
                                    <th scope='row'>Address:</th>
                                    <td>{{$donation->billing_address}}</td>
                                </tr>
                                <tr>
                                        <th scope='row'>City:</th>
                                        <td>{{$donation->billing_city}}</td>
                                    </tr>

                                    <tr>
                                            <th scope='row'>State:</th>
                                            <td>{{$donation->billing_state}}</td>
                                        </tr>

                                        <tr>
                                                <th scope='row'>Country:</th>
                                                <td>{{$donation->billing_country}}</td>
                                            </tr>

                                            <tr>
                                                    <th scope='row'>Zip:</th>
                                                    <td>{{$donation->billing_zip}}</td>
                                                </tr>

                                                <tr>
                                                        <th scope='row'>Status:</th>
                                                        <td>{{$donation->order_status}}</td>
                                                    </tr>

                </tbody>
    
            </table>
        </div>
    
@endsection