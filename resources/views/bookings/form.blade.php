
<div class="form-group {{ $errors->has('Passenger_Passport_No') ? 'has-error' : '' }}">
    <label for="Passenger_Passport_No" class="col-md-2 control-label">Passenger  Passport  No</label>
    <div class="col-md-10">
        <select class="form-control" id="Passenger_Passport_No" name="Passenger_Passport_No" required="true">
        	    <option value="" style="display: none;" {{ old('Passenger_Passport_No', optional($booking)->Passenger_Passport_No ?: '') == '' ? 'selected' : '' }} disabled selected>Enter passenger  passport  no here...</option>
        	@foreach ($Passengers as $key => $Passenger)
			    <option value="{{ $key }}" {{ old('Passenger_Passport_No', optional($booking)->Passenger_Passport_No) == $key ? 'selected' : '' }}>
			    	{{ $Passenger }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('Passenger_Passport_No', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Schedule_Flight_FLIGHTNUM') ? 'has-error' : '' }}">
    <label for="Schedule_Flight_FLIGHTNUM" class="col-md-2 control-label">Schedule  Flight  F L I G H T N U M</label>
    <div class="col-md-10">
        <select class="form-control" id="Schedule_Flight_FLIGHTNUM" name="Schedule_Flight_FLIGHTNUM" required="true">
        	    <option value="" style="display: none;" {{ old('Schedule_Flight_FLIGHTNUM', optional($booking)->Schedule_Flight_FLIGHTNUM ?: '') == '' ? 'selected' : '' }} disabled selected>Enter schedule  flight  f l i g h t n u m here...</option>
        	@foreach ($Schedules as $key => $Schedule)
			    <option value="{{ $key }}" {{ old('Schedule_Flight_FLIGHTNUM', optional($booking)->Schedule_Flight_FLIGHTNUM) == $key ? 'selected' : '' }}>
			    	{{ $Schedule }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('Schedule_Flight_FLIGHTNUM', '<p class="help-block">:message</p>') !!}
    </div>
</div>

