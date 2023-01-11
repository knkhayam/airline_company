
<div class="form-group {{ $errors->has('Passport_No') ? 'has-error' : '' }}">
    <label for="Passport_No" class="col-md-2 control-label">Passport  No</label>
    <div class="col-md-10">
        <input class="form-control" name="Passport_No" type="number" id="Passport_No" value="{{ old('Passport_No', optional($passenger)->Passport_No) }}" min="0" max="4294967295" required="true" placeholder="Enter passport  no here...">
        {!! $errors->first('Passport_No', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('SURNAME') ? 'has-error' : '' }}">
    <label for="SURNAME" class="col-md-2 control-label">S U R N A M E</label>
    <div class="col-md-10">
        <input class="form-control" name="SURNAME" type="text" id="SURNAME" value="{{ old('SURNAME', optional($passenger)->SURNAME) }}" minlength="1" maxlength="30" required="true" placeholder="Enter s u r n a m e here...">
        {!! $errors->first('SURNAME', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('NAME') ? 'has-error' : '' }}">
    <label for="NAME" class="col-md-2 control-label">N A M E</label>
    <div class="col-md-10">
        <input class="form-control" name="NAME" type="text" id="NAME" value="{{ old('NAME', optional($passenger)->NAME) }}" minlength="1" maxlength="30" required="true" placeholder="Enter n a m e here...">
        {!! $errors->first('NAME', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('ADDRESS') ? 'has-error' : '' }}">
    <label for="ADDRESS" class="col-md-2 control-label">A D D R E S S</label>
    <div class="col-md-10">
        <input class="form-control" name="ADDRESS" type="text" id="ADDRESS" value="{{ old('ADDRESS', optional($passenger)->ADDRESS) }}" minlength="1" maxlength="30" required="true" placeholder="Enter a d d r e s s here...">
        {!! $errors->first('ADDRESS', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('PHONE') ? 'has-error' : '' }}">
    <label for="PHONE" class="col-md-2 control-label">P H O N E</label>
    <div class="col-md-10">
        <input class="form-control" name="PHONE" type="text" id="PHONE" value="{{ old('PHONE', optional($passenger)->PHONE) }}" minlength="1" maxlength="30" required="true" placeholder="Enter p h o n e here...">
        {!! $errors->first('PHONE', '<p class="help-block">:message</p>') !!}
    </div>
</div>

