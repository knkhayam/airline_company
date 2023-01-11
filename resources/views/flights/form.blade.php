
<div class="form-group {{ $errors->has('FLIGHTNUM') ? 'has-error' : '' }}">
    <label for="FLIGHTNUM" class="col-md-2 control-label">F L I G H T N U M</label>
    <div class="col-md-10">
        <input class="form-control" name="FLIGHTNUM" type="text" id="FLIGHTNUM" value="{{ old('FLIGHTNUM', optional($flight)->FLIGHTNUM) }}" minlength="1" maxlength="15" required="true" placeholder="Enter f l i g h t n u m here...">
        {!! $errors->first('FLIGHTNUM', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('ORIGIN') ? 'has-error' : '' }}">
    <label for="ORIGIN" class="col-md-2 control-label">O R I G I N</label>
    <div class="col-md-10">
        <input class="form-control" name="ORIGIN" type="text" id="ORIGIN" value="{{ old('ORIGIN', optional($flight)->ORIGIN) }}" minlength="1" maxlength="80" required="true" placeholder="Enter o r i g i n here...">
        {!! $errors->first('ORIGIN', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('DEST') ? 'has-error' : '' }}">
    <label for="DEST" class="col-md-2 control-label">D E S T</label>
    <div class="col-md-10">
        <input class="form-control" name="DEST" type="text" id="DEST" value="{{ old('DEST', optional($flight)->DEST) }}" minlength="1" maxlength="80" required="true" placeholder="Enter d e s t here...">
        {!! $errors->first('DEST', '<p class="help-block">:message</p>') !!}
    </div>
</div>

