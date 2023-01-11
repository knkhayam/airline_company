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
                <h4 class="mt-5 mb-5">Schedules</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('schedules.schedule.create') }}" class="btn btn-success" title="Create New Schedule">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($schedules) == 0)
            <div class="panel-body text-center">
                <h4>No Schedules Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Flight  F L I G H T N U M</th>
                            <th>Date</th>
                            <th>D E P  T I M E</th>
                            <th>A R R  T I M E</th>
                            <th>Airplane  N U M S E R</th>
                            <th>Pilot  E M P N U M</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($schedules as $schedule)
                        <tr>
                            <td>{{ optional($schedule->Flight)->FLIGHTNUM }}</td>
                            <td>{{ $schedule->Date }}</td>
                            <td>{{ $schedule->DEP_TIME }}</td>
                            <td>{{ $schedule->ARR_TIME }}</td>
                            <td>{{ optional($schedule->Airplane)->NUMSER }}</td>
                            <td>{{ optional($schedule->Pilot)->Staff_EMPNUM }}</td>

                            <td>

                                <form method="POST" action="{!! route('schedules.schedule.destroy', $schedule->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('schedules.schedule.show', $schedule->id ) }}" class="btn btn-info" title="Show Schedule">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('schedules.schedule.edit', $schedule->id ) }}" class="btn btn-primary" title="Edit Schedule">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Schedule" onclick="return confirm(&quot;Click Ok to delete Schedule.&quot;)">
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
            {!! $schedules->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection