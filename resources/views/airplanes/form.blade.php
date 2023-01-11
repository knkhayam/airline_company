
<div class="form-group {{ $errors->has('NUMSER') ? 'has-error' : '' }}">
    <label for="NUMSER" class="col-md-2 control-label">N U M S E R</label>
    <div class="col-md-10">
        <input class="form-control" name="NUMSER" type="number" id="NUMSER" value="{{ old('NUMSER', optional($airplane)->NUMSER) }}" min="0" max="4294967295" required="true" placeholder="Enter n u m s e r here...">
        {!! $errors->first('NUMSER', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Manufacturer_Model') ? 'has-error' : '' }}">
    <label for="Manufacturer_Model" class="col-md-2 control-label">Manufacturer  Model</label>
    <div class="col-md-10">
        <input class="form-control" name="Manufacturer_Model" type="text" id="Manufacturer_Model" value="{{ old('Manufacturer_Model', optional($airplane)->Manufacturer_Model) }}" minlength="1" maxlength="20" required="true" placeholder="Enter manufacturer  model here...">
        {!! $errors->first('Manufacturer_Model', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Airplane_Rating_Number') ? 'has-error' : '' }}">
    <label for="Airplane_Rating_Number" class="col-md-2 control-label">Airplane  Rating  Number</label>
    <div class="col-md-10">
        <select class="form-control" id="Airplane_Rating_Number" name="Airplane_Rating_Number" required="true">
        	    <option value="" style="display: none;" {{ old('Airplane_Rating_Number', optional($airplane)->Airplane_Rating_Number ?: '') == '' ? 'selected' : '' }} disabled selected>Enter airplane  rating  number here...</option>
        	@foreach ($AirplaneRatings as $key => $AirplaneRating)
			    <option value="{{ $key }}" {{ old('Airplane_Rating_Number', optional($airplane)->Airplane_Rating_Number) == $key ? 'selected' : '' }}>
			    	{{ $AirplaneRating }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('Airplane_Rating_Number', '<p class="help-block">:message</p>') !!}
    </div>
</div>

