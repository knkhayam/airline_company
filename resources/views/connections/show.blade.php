@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Connection' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('connections.connection.destroy', $connection->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('connections.connection.index') }}" class="btn btn-primary" title="Show All Connection">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('connections.connection.create') }}" class="btn btn-success" title="Create New Connection">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('connections.connection.edit', $connection->id ) }}" class="btn btn-primary" title="Edit Connection">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Connection" onclick="return confirm(&quot;Click Ok to delete Connection.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Booking</dt>
            <dd>{{ optional($connection->Booking)->id }}</dd>
            <dt>Schedule  Flight  F L I G H T N U M</dt>
            <dd>{{ optional($connection->Schedule)->Flight_FLIGHTNUM }}</dd>

        </dl>

    </div>
</div>

@endsection