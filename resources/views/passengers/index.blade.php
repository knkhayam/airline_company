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
                <h4 class="mt-5 mb-5">Passengers</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('passengers.passenger.create') }}" class="btn btn-success" title="Create New Passenger">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($passengers) == 0)
            <div class="panel-body text-center">
                <h4>No Passengers Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Passport  No</th>
                            <th>S U R N A M E</th>
                            <th>N A M E</th>
                            <th>A D D R E S S</th>
                            <th>P H O N E</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($passengers as $passenger)
                        <tr>
                            <td>{{ $passenger->Passport_No }}</td>
                            <td>{{ $passenger->SURNAME }}</td>
                            <td>{{ $passenger->NAME }}</td>
                            <td>{{ $passenger->ADDRESS }}</td>
                            <td>{{ $passenger->PHONE }}</td>

                            <td>

                                <form method="POST" action="{!! route('passengers.passenger.destroy', $passenger->Passport_No) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('passengers.passenger.show', $passenger->Passport_No ) }}" class="btn btn-info" title="Show Passenger">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('passengers.passenger.edit', $passenger->Passport_No ) }}" class="btn btn-primary" title="Edit Passenger">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Passenger" onclick="return confirm(&quot;Click Ok to delete Passenger.&quot;)">
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
            {!! $passengers->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection