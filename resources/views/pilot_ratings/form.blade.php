
<div class="form-group {{ $errors->has('Pilot_EMPNUM') ? 'has-error' : '' }}">
    <label for="Pilot_EMPNUM" class="col-md-2 control-label">Pilot  E M P N U M</label>
    <div class="col-md-10">
        <select class="form-control" id="Pilot_EMPNUM" name="Pilot_EMPNUM" required="true">
        	    <option value="" style="display: none;" {{ old('Pilot_EMPNUM', optional($pilotRating)->Pilot_EMPNUM ?: '') == '' ? 'selected' : '' }} disabled selected>Enter pilot  e m p n u m here...</option>
        	@foreach ($Pilots as $key => $Pilot)
			    <option value="{{ $key }}" {{ old('Pilot_EMPNUM', optional($pilotRating)->Pilot_EMPNUM) == $key ? 'selected' : '' }}>
			    	{{ $Pilot }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('Pilot_EMPNUM', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Airplane_Rating_Number') ? 'has-error' : '' }}">
    <label for="Airplane_Rating_Number" class="col-md-2 control-label">Airplane  Rating  Number</label>
    <div class="col-md-10">
        <select class="form-control" id="Airplane_Rating_Number" name="Airplane_Rating_Number" required="true">
        	    <option value="" style="display: none;" {{ old('Airplane_Rating_Number', optional($pilotRating)->Airplane_Rating_Number ?: '') == '' ? 'selected' : '' }} disabled selected>Enter airplane  rating  number here...</option>
        	@foreach ($AirplaneRatings as $key => $AirplaneRating)
			    <option value="{{ $key }}" {{ old('Airplane_Rating_Number', optional($pilotRating)->Airplane_Rating_Number) == $key ? 'selected' : '' }}>
			    	{{ $AirplaneRating }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('Airplane_Rating_Number', '<p class="help-block">:message</p>') !!}
    </div>
</div>

