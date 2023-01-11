
<div class="form-group {{ $errors->has('Staff_EMPNUM') ? 'has-error' : '' }}">
    <label for="Staff_EMPNUM" class="col-md-2 control-label">Staff  E M P N U M</label>
    <div class="col-md-10">
        <select class="form-control" id="Staff_EMPNUM" name="Staff_EMPNUM" required="true">
        	    <option value="" style="display: none;" {{ old('Staff_EMPNUM', optional($pilot)->Staff_EMPNUM ?: '') == '' ? 'selected' : '' }} disabled selected>Enter staff  e m p n u m here...</option>
        	@foreach ($Staff as $key => $Staff)
			    <option value="{{ $key }}" {{ old('Staff_EMPNUM', optional($pilot)->Staff_EMPNUM) == $key ? 'selected' : '' }}>
			    	{{ $Staff }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('Staff_EMPNUM', '<p class="help-block">:message</p>') !!}
    </div>
</div>

