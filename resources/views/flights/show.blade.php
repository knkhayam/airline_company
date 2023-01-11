@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Flight' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('flights.flight.destroy', $flight->FLIGHTNUM) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('flights.flight.index') }}" class="btn btn-primary" title="Show All Flight">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('flights.flight.create') }}" class="btn btn-success" title="Create New Flight">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('flights.flight.edit', $flight->FLIGHTNUM ) }}" class="btn btn-primary" title="Edit Flight">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Flight" onclick="return confirm(&quot;Click Ok to delete Flight.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>F L I G H T N U M</dt>
            <dd>{{ $flight->FLIGHTNUM }}</dd>
            <dt>O R I G I N</dt>
            <dd>{{ $flight->ORIGIN }}</dd>
            <dt>D E S T</dt>
            <dd>{{ $flight->DEST }}</dd>

        </dl>

    </div>
</div>

@endsection