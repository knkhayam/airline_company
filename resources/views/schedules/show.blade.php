@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Schedule' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('schedules.schedule.destroy', $schedule->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('schedules.schedule.index') }}" class="btn btn-primary" title="Show All Schedule">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('schedules.schedule.create') }}" class="btn btn-success" title="Create New Schedule">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('schedules.schedule.edit', $schedule->id ) }}" class="btn btn-primary" title="Edit Schedule">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Schedule" onclick="return confirm(&quot;Click Ok to delete Schedule.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Flight  F L I G H T N U M</dt>
            <dd>{{ optional($schedule->Flight)->FLIGHTNUM }}</dd>
            <dt>Date</dt>
            <dd>{{ $schedule->Date }}</dd>
            <dt>D E P  T I M E</dt>
            <dd>{{ $schedule->DEP_TIME }}</dd>
            <dt>A R R  T I M E</dt>
            <dd>{{ $schedule->ARR_TIME }}</dd>
            <dt>Airplane  N U M S E R</dt>
            <dd>{{ optional($schedule->Airplane)->NUMSER }}</dd>
            <dt>Pilot  E M P N U M</dt>
            <dd>{{ optional($schedule->Pilot)->Staff_EMPNUM }}</dd>

        </dl>

    </div>
</div>

@endsection