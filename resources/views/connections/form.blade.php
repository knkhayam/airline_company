
<div class="form-group {{ $errors->has('booking_id') ? 'has-error' : '' }}">
    <label for="booking_id" class="col-md-2 control-label">Booking</label>
    <div class="col-md-10">
        <select class="form-control" id="booking_id" name="booking_id" required="true">
        	    <option value="" style="display: none;" {{ old('booking_id', optional($connection)->booking_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select booking</option>
        	@foreach ($Bookings as $key => $Booking)
			    <option value="{{ $key }}" {{ old('booking_id', optional($connection)->booking_id) == $key ? 'selected' : '' }}>
			    	{{ $Booking }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('booking_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Schedule_Flight_FLIGHTNUM') ? 'has-error' : '' }}">
    <label for="Schedule_Flight_FLIGHTNUM" class="col-md-2 control-label">Schedule  Flight  F L I G H T N U M</label>
    <div class="col-md-10">
        <select class="form-control" id="Schedule_Flight_FLIGHTNUM" name="Schedule_Flight_FLIGHTNUM" required="true">
        	    <option value="" style="display: none;" {{ old('Schedule_Flight_FLIGHTNUM', optional($connection)->Schedule_Flight_FLIGHTNUM ?: '') == '' ? 'selected' : '' }} disabled selected>Enter schedule  flight  f l i g h t n u m here...</option>
        	@foreach ($Schedules as $key => $Schedule)
			    <option value="{{ $Schedule }}" {{ old('Schedule_Flight_FLIGHTNUM', optional($connection)->Schedule_Flight_FLIGHTNUM) == $key ? 'selected' : '' }}>
			    	{{ $Schedule }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('Schedule_Flight_FLIGHTNUM', '<p class="help-block">:message</p>') !!}
    </div>
</div>

