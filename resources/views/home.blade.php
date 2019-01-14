@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
                @if(\Session::has('success'))
        <div class="alert alert-success">
            {{\Session::get('success')}}
        </div>
    @endif
            </div>
        </div>
    </div>
    <div class="row">
       <a href="{{url('/create/ticket')}}" class="btn btn-success">Create Ticket</a>
       <a href="{{url('/tickets')}}" class="btn btn-default">All Tickets</a>
    </div>
</div>
@endsection
