@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Booking' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('bookings.booking.destroy', $booking->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('bookings.booking.index') }}" class="btn btn-primary" title="Show All Booking">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('bookings.booking.create') }}" class="btn btn-success" title="Create New Booking">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('bookings.booking.edit', $booking->id ) }}" class="btn btn-primary" title="Edit Booking">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Booking" onclick="return confirm(&quot;Click Ok to delete Booking.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Passenger  Passport  No</dt>
            <dd>{{ optional($booking->Passenger)->Passport_No }}</dd>
            <dt>Schedule  Flight  F L I G H T N U M</dt>
            <dd>{{ optional($booking->Schedule)->Flight_FLIGHTNUM }}</dd>

        </dl>

    </div>
</div>

@endsection