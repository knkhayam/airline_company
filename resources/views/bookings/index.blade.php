@extends('layouts.app')

@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">Bookings</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('bookings.booking.create') }}" class="btn btn-success" title="Create New Booking">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($bookings) == 0)
            <div class="panel-body text-center">
                <h4>No Bookings Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Passenger  Passport  No</th>
                            <th>Schedule  Flight  F L I G H T N U M</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($bookings as $booking)
                        <tr>
                            <td>{{ $booking->id }}</td>
                            <td>{{ optional($booking->Passenger)->Passport_No }}</td>
                            <td>{{ optional($booking->Schedule)->Flight_FLIGHTNUM }}</td>

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

        <div class="panel-footer">
            {!! $bookings->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection