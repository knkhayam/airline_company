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
                <h4 class="mt-5 mb-5">Flights</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('flights.flight.create') }}" class="btn btn-success" title="Create New Flight">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($flights) == 0)
            <div class="panel-body text-center">
                <h4>No Flights Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>F L I G H T N U M</th>
                            <th>O R I G I N</th>
                            <th>D E S T</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($flights as $flight)
                        <tr>
                            <td>{{ $flight->FLIGHTNUM }}</td>
                            <td>{{ $flight->ORIGIN }}</td>
                            <td>{{ $flight->DEST }}</td>

                            <td>

                                <form method="POST" action="{!! route('flights.flight.destroy', $flight->FLIGHTNUM) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('flights.flight.show', $flight->FLIGHTNUM ) }}" class="btn btn-info" title="Show Flight">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('flights.flight.edit', $flight->FLIGHTNUM ) }}" class="btn btn-primary" title="Edit Flight">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Flight" onclick="return confirm(&quot;Click Ok to delete Flight.&quot;)">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                        </button>
                                    </div>

                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="panel-footer">
            {!! $flights->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection