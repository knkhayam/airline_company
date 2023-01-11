@extends('layouts.app')
@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">Welcome to Airline Company Dashboard</h4>
            </div>

           

        </div>
        
       
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <div class="panel">
                    <div class="panel-body text-center">
                    This is an empty dashboard ! <br />
                    You can visit other Tabs like staff to check system's features !

                    <br />
                    <img style="width:90%" src="{{asset('images/airline.png')}}">
                    </div>
                </div>

            </div>
        </div>

    
    </div>
@endsection