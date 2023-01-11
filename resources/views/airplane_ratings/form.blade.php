
<div class="form-group {{ $errors->has('Name') ? 'has-error' : '' }}">
    <label for="Name" class="col-md-2 control-label">Name</label>
    <div class="col-md-10">
        <input class="form-control" name="Name" type="text" id="Name" value="{{ old('Name', optional($airplaneRating)->Name) }}" minlength="1" maxlength="30" required="true" placeholder="Enter name here...">
        {!! $errors->first('Name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Description') ? 'has-error' : '' }}">
    <label for="Description" class="col-md-2 control-label">Description</label>
    <div class="col-md-10">
        <input class="form-control" name="Description" type="text" id="Description" value="{{ old('Description', optional($airplaneRating)->Description) }}" minlength="1" maxlength="80" required="true">
        {!! $errors->first('Description', '<p class="help-block">:message</p>') !!}
    </div>
</div>

