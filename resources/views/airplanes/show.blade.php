@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Airplane' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('airplanes.airplane.destroy', $airplane->NUMSER) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('airplanes.airplane.index') }}" class="btn btn-primary" title="Show All Airplane">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('airplanes.airplane.create') }}" class="btn btn-success" title="Create New Airplane">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('airplanes.airplane.edit', $airplane->NUMSER ) }}" class="btn btn-primary" title="Edit Airplane">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Airplane" onclick="return confirm(&quot;Click Ok to delete Airplane.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>N U M S E R</dt>
            <dd>{{ $airplane->NUMSER }}</dd>
            <dt>Manufacturer  Model</dt>
            <dd>{{ $airplane->Manufacturer_Model }}</dd>
            <dt>Airplane  Rating  Number</dt>
            <dd>{{ optional($airplane->AirplaneRating)->Name }}</dd>

            <dt>Pilots Eligible to Fly:</dt>
            @foreach($airplane->eligible_pilots as $ep)
            <dd>{{ $ep }}</dd>
            @endforeach
        </dl>

    </div>
</div>

@endsection