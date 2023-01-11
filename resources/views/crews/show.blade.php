@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Crew' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('crews.crew.destroy', $crew->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('crews.crew.index') }}" class="btn btn-primary" title="Show All Crew">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('crews.crew.create') }}" class="btn btn-success" title="Create New Crew">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('crews.crew.edit', $crew->id ) }}" class="btn btn-primary" title="Edit Crew">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Crew" onclick="return confirm(&quot;Click Ok to delete Crew.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Staff  E M P N U M</dt>
            <dd>{{ optional($crew->Staff)->EMPNUM }}</dd>
            <dt>Flight  F L I G H T N U M</dt>
            <dd>{{ optional($crew->Schedule)->Flight_FLIGHTNUM }}</dd>

        </dl>

    </div>
</div>

@endsection