
<div class="form-group {{ $errors->has('Flight_FLIGHTNUM') ? 'has-error' : '' }}">
    <label for="Flight_FLIGHTNUM" class="col-md-2 control-label">Flight  F L I G H T N U M</label>
    <div class="col-md-10">
        <select class="form-control" id="Flight_FLIGHTNUM" name="Flight_FLIGHTNUM" required="true">
        	    <option value="" style="display: none;" {{ old('Flight_FLIGHTNUM', optional($schedule)->Flight_FLIGHTNUM ?: '') == '' ? 'selected' : '' }} disabled selected>Enter flight  f l i g h t n u m here...</option>
        	@foreach ($Flights as $key => $Flight)
			    <option value="{{ $key }}" {{ old('Flight_FLIGHTNUM', optional($schedule)->Flight_FLIGHTNUM) == $key ? 'selected' : '' }}>
			    	{{ $Flight }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('Flight_FLIGHTNUM', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Date') ? 'has-error' : '' }}">
    <label for="Date" class="col-md-2 control-label">Date</label>
    <div class="col-md-10">
        <input class="form-control" name="Date" type="date" id="Date" value="{{ old('Date', optional($schedule)->Date) }}" required="true" placeholder="Enter date here...">
        {!! $errors->first('Date', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('DEP_TIME') ? 'has-error' : '' }}">
    <label for="DEP_TIME" class="col-md-2 control-label">D E P  T I M E</label>
    <div class="col-md-10">
        <input class="form-control" name="DEP_TIME" type="time" id="DEP_TIME" value="{{ old('DEP_TIME', optional($schedule)->DEP_TIME) }}" minlength="1" required="true" placeholder="Enter d e p  t i m e here...">
        {!! $errors->first('DEP_TIME', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('ARR_TIME') ? 'has-error' : '' }}">
    <label for="ARR_TIME" class="col-md-2 control-label">A R R  T I M E</label>
    <div class="col-md-10">
        <input class="form-control" name="ARR_TIME" type="time" id="ARR_TIME" value="{{ old('ARR_TIME', optional($schedule)->ARR_TIME) }}" minlength="1" required="true" placeholder="Enter a r r  t i m e here...">
        {!! $errors->first('ARR_TIME', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Airplane_NUMSER') ? 'has-error' : '' }}">
    <label for="Airplane_NUMSER" class="col-md-2 control-label">Airplane  N U M S E R</label>
    <div class="col-md-10">
        <select class="form-control" id="Airplane_NUMSER" name="Airplane_NUMSER" required="true">
        	    <option value="" style="display: none;" {{ old('Airplane_NUMSER', optional($schedule)->Airplane_NUMSER ?: '') == '' ? 'selected' : '' }} disabled selected>Enter airplane  n u m s e r here...</option>
        	@foreach ($Airplanes as $key => $Airplane)
			    <option value="{{ $key }}" {{ old('Airplane_NUMSER', optional($schedule)->Airplane_NUMSER) == $key ? 'selected' : '' }}>
			    	{{ $Airplane }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('Airplane_NUMSER', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Pilot_EMPNUM') ? 'has-error' : '' }}">
    <label for="Pilot_EMPNUM" class="col-md-2 control-label">Pilot  E M P N U M</label>
    <div class="col-md-10">
        <select class="form-control" id="Pilot_EMPNUM" name="Pilot_EMPNUM" required="true">
        	    <option value="" style="display: none;" {{ old('Pilot_EMPNUM', optional($schedule)->Pilot_EMPNUM ?: '') == '' ? 'selected' : '' }} disabled selected>Enter pilot  e m p n u m here...</option>
        	@foreach ($Pilots as $key => $Pilot)
			    <option value="{{ $key }}" {{ old('Pilot_EMPNUM', optional($schedule)->Pilot_EMPNUM) == $key ? 'selected' : '' }}>
			    	{{ $Pilot }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('Pilot_EMPNUM', '<p class="help-block">:message</p>') !!}
    </div>
</div>

