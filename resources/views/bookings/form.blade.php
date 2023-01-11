
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

