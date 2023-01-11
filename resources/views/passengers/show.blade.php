@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($passenger->NAME) ? $passenger->NAME : 'Passenger' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('passengers.passenger.destroy', $passenger->Passport_No) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('passengers.passenger.index') }}" class="btn btn-primary" title="Show All Passenger">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('passengers.passenger.create') }}" class="btn btn-success" title="Create New Passenger">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('passengers.passenger.edit', $passenger->Passport_No ) }}" class="btn btn-primary" title="Edit Passenger">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Passenger" onclick="return confirm(&quot;Click Ok to delete Passenger.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Passport  No</dt>
            <dd>{{ $passenger->Passport_No }}</dd>
            <dt>S U R N A M E</dt>
            <dd>{{ $passenger->SURNAME }}</dd>
            <dt>N A M E</dt>
            <dd>{{ $passenger->NAME }}</dd>
            <dt>A D D R E S S</dt>
            <dd>{{ $passenger->ADDRESS }}</dd>
            <dt>P H O N E</dt>
            <dd>{{ $passenger->PHONE }}</dd>

        </dl>

    </div>
</div>

@endsection