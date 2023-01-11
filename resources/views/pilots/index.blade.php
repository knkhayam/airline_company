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
                <h4 class="mt-5 mb-5">Pilots</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('pilots.pilot.create') }}" class="btn btn-success" title="Create New Pilot">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($pilots) == 0)
            <div class="panel-body text-center">
                <h4>No Pilots Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Staff  E M P N U M</th>
                            <th>SURNAME</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($pilots as $pilot)
                        <tr>
                            <td>{{ optional($pilot->Staff)->EMPNUM }}</td>
                            <td>{{ optional($pilot->Staff)->SURNAME }}</td>
                            

                            <td>

                                <form method="POST" action="{!! route('pilots.pilot.destroy', $pilot->Staff_EMPNUM) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('pilots.pilot.show', $pilot->Staff_EMPNUM ) }}" class="btn btn-info" title="Show Pilot">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('pilots.pilot.edit', $pilot->Staff_EMPNUM ) }}" class="btn btn-primary" title="Edit Pilot">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Pilot" onclick="return confirm(&quot;Click Ok to delete Pilot.&quot;)">
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
            {!! $pilots->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection