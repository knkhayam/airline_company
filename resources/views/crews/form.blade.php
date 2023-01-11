
<div class="form-group {{ $errors->has('Staff_EMPNUM') ? 'has-error' : '' }}">
    <label for="Staff_EMPNUM" class="col-md-2 control-label">Staff  E M P N U M</label>
    <div class="col-md-10">
        <select class="form-control" id="Staff_EMPNUM" name="Staff_EMPNUM" required="true">
        	    <option value="" style="display: none;" {{ old('Staff_EMPNUM', optional($crew)->Staff_EMPNUM ?: '') == '' ? 'selected' : '' }} disabled selected>Enter staff  e m p n u m here...</option>
        	@foreach ($Staff as $key => $Staff)
			    <option value="{{ $key }}" {{ old('Staff_EMPNUM', optional($crew)->Staff_EMPNUM) == $key ? 'selected' : '' }}>
			    	{{ $Staff }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('Staff_EMPNUM', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Flight_FLIGHTNUM') ? 'has-error' : '' }}">
    <label for="Flight_FLIGHTNUM" class="col-md-2 control-label">Flight  F L I G H T N U M</label>
    <div class="col-md-10">
        <select class="form-control" id="Flight_FLIGHTNUM" name="Flight_FLIGHTNUM" required="true">
        	    <option value="" style="display: none;" {{ old('Flight_FLIGHTNUM', optional($crew)->Flight_FLIGHTNUM ?: '') == '' ? 'selected' : '' }} disabled selected>Enter flight  f l i g h t n u m here...</option>
        	@foreach ($Schedules as $key => $Schedule)
			    <option value="{{ $key }}" {{ old('Flight_FLIGHTNUM', optional($crew)->Flight_FLIGHTNUM) == $key ? 'selected' : '' }}>
			    	{{ $Schedule }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('Flight_FLIGHTNUM', '<p class="help-block">:message</p>') !!}
    </div>
</div>

