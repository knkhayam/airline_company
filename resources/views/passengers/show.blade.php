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

        <hr />
        <h4>Bookings</h4>
        <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Passenger  Passport  No</th>
                            <th>Type</th>
                            <th>Origin</th>
                            <th>Destination</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($passenger->bookings as $booking)
                        <tr>
                            <td>{{ $booking->id }}</td>
                            <td>{{ optional($booking->Passenger)->Passport_No }}</td>
                            <td>{{ $booking->Type }}</td>
                            <td>{{ $booking->ORIGIN }}</td>
                            <td>{{ $booking->DEST }}</td>

                            <td>

                                <form method="POST" action="{!! route('bookings.booking.destroy', $booking->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('bookings.booking.show', $booking->id ) }}" class="btn btn-info" title="Show Booking">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('bookings.booking.edit', $booking->id ) }}" class="btn btn-primary" title="Edit Booking">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Booking" onclick="return confirm(&quot;Click Ok to delete Booking.&quot;)">
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

@endsection