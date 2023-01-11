
<div class="form-group {{ $errors->has('SURNAME') ? 'has-error' : '' }}">
    <label for="SURNAME" class="col-md-2 control-label">SURNAME</label>
    <div class="col-md-10">
        <input class="form-control" name="SURNAME" type="text" id="SURNAME" value="{{ old('SURNAME', optional($staff)->SURNAME) }}" minlength="1" maxlength="60" required="true" placeholder="Enter SURNAME here...">
        {!! $errors->first('SURNAME', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('NAME') ? 'has-error' : '' }}">
    <label for="NAME" class="col-md-2 control-label">NAME</label>
    <div class="col-md-10">
        <input class="form-control" name="NAME" type="text" id="NAME" value="{{ old('NAME', optional($staff)->NAME) }}" minlength="1" maxlength="60" required="true" placeholder="Enter NAME here...">
        {!! $errors->first('NAME', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('ADDRESS') ? 'has-error' : '' }}">
    <label for="ADDRESS" class="col-md-2 control-label">ADDRESS</label>
    <div class="col-md-10">
        <input class="form-control" name="ADDRESS" type="text" id="ADDRESS" value="{{ old('ADDRESS', optional($staff)->ADDRESS) }}" minlength="1" maxlength="150" required="true" placeholder="Enter ADDRESS here...">
        {!! $errors->first('ADDRESS', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('PHONE') ? 'has-error' : '' }}">
    <label for="PHONE" class="col-md-2 control-label">P H O N E</label>
    <div class="col-md-10">
        <input class="form-control" name="PHONE" type="text" id="PHONE" value="{{ old('PHONE', optional($staff)->PHONE) }}" minlength="1" maxlength="21" required="true" placeholder="Enter p h o n e here...">
        {!! $errors->first('PHONE', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('SALARY') ? 'has-error' : '' }}">
    <label for="SALARY" class="col-md-2 control-label">S A L A R Y</label>
    <div class="col-md-10">
        <input class="form-control" name="SALARY" type="number" id="SALARY" value="{{ old('SALARY', optional($staff)->SALARY) }}" min="0" max="99999" required="true" placeholder="Enter s a l a r y here..." step="any">
        {!! $errors->first('SALARY', '<p class="help-block">:message</p>') !!}
    </div>
</div>

