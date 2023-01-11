@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($staff->NAME) ? $staff->NAME : 'Staff' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('staff.staff.destroy', $staff->EMPNUM) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('staff.staff.index') }}" class="btn btn-primary" title="Show All Staff">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('staff.staff.create') }}" class="btn btn-success" title="Create New Staff">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('staff.staff.edit', $staff->EMPNUM ) }}" class="btn btn-primary" title="Edit Staff">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Staff" onclick="return confirm(&quot;Click Ok to delete Staff.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>SURNAME</dt>
            <dd>{{ $staff->SURNAME }}</dd>
            <dt>NAME</dt>
            <dd>{{ $staff->NAME }}</dd>
            <dt>ADDRESS</dt>
            <dd>{{ $staff->ADDRESS }}</dd>
            <dt>P H O N E</dt>
            <dd>{{ $staff->PHONE }}</dd>
            <dt>S A L A R Y</dt>
            <dd>{{ $staff->SALARY }}</dd>

        </dl>

    </div>
</div>

@endsection