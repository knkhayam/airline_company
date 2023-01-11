@extends('layouts.app')

@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">Staff</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('staff.staff.create') }}" class="btn btn-success" title="Create New Staff">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($staffObjects) == 0)
            <div class="panel-body text-center">
                <h4>No Staff Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>EMPNUM</th>
                            <th>SURNAME</th>
                            <th>NAME</th>
                            <th>ADDRESS</th>
                            <th>P H O N E</th>
                            <th>S A L A R Y</th>
                            <th>Type</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($staffObjects as $staff)
                        <tr>
                            <td>{{ $staff->EMPNUM }}</td>
                            <td>{{ $staff->SURNAME }}</td>
                            <td>{{ $staff->NAME }}</td>
                            <td>{{ $staff->ADDRESS }}</td>
                            <td>{{ $staff->PHONE }}</td>
                            <td>{{ $staff->SALARY }}</td>
                            <td>{{ $staff->Type }}</td>
                            
                            <td>

                                <form method="POST" action="{!! route('staff.staff.destroy', $staff->EMPNUM) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('staff.staff.show', $staff->EMPNUM ) }}" class="btn btn-info" title="Show Staff">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('staff.staff.edit', $staff->EMPNUM ) }}" class="btn btn-primary" title="Edit Staff">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Staff" onclick="return confirm(&quot;Click Ok to delete Staff.&quot;)">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                        </button>
                                    </div>

                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="panel-footer">
            {!! $staffObjects->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection