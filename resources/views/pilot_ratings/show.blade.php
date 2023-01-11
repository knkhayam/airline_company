@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Pilot Rating' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('pilot_ratings.pilot_rating.destroy', $pilotRating->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('pilot_ratings.pilot_rating.index') }}" class="btn btn-primary" title="Show All Pilot Rating">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('pilot_ratings.pilot_rating.create') }}" class="btn btn-success" title="Create New Pilot Rating">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('pilot_ratings.pilot_rating.edit', $pilotRating->id ) }}" class="btn btn-primary" title="Edit Pilot Rating">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Pilot Rating" onclick="return confirm(&quot;Click Ok to delete Pilot Rating.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Pilot  E M P N U M</dt>
            <dd>{{ optional($pilotRating->Pilot)->Staff_EMPNUM }}</dd>
            <dt>Airplane  Rating  Number</dt>
            <dd>{{ optional($pilotRating->AirplaneRating)->Name }}</dd>

        </dl>

    </div>
</div>

@endsection