@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($airplaneRating->Name) ? $airplaneRating->Name : 'Airplane Rating' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('airplane_ratings.airplane_rating.destroy', $airplaneRating->Rating_Number) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('airplane_ratings.airplane_rating.index') }}" class="btn btn-primary" title="Show All Airplane Rating">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('airplane_ratings.airplane_rating.create') }}" class="btn btn-success" title="Create New Airplane Rating">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('airplane_ratings.airplane_rating.edit', $airplaneRating->Rating_Number ) }}" class="btn btn-primary" title="Edit Airplane Rating">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Airplane Rating" onclick="return confirm(&quot;Click Ok to delete Airplane Rating.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Name</dt>
            <dd>{{ $airplaneRating->Name }}</dd>
            <dt>Description</dt>
            <dd>{{ $airplaneRating->Description }}</dd>

        </dl>

    </div>
</div>

@endsection