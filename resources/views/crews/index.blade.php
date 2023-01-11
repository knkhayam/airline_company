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
                <h4 class="mt-5 mb-5">Crews</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('crews.crew.create') }}" class="btn btn-success" title="Create New Crew">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($crews) == 0)
            <div class="panel-body text-center">
                <h4>No Crews Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Staff  E M P N U M</th>
                            <th>Flight  F L I G H T N U M</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($crews as $crew)
                        <tr>
                            <td>{{ $crew->id }}</td>
                            <td>{{ optional($crew->Staff)->EMPNUM }}</td>
                            <td>{{ optional($crew->Schedule)->Flight_FLIGHTNUM }}</td>

                            <td>

                                <form method="POST" action="{!! route('crews.crew.destroy', $crew->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('crews.crew.show', $crew->id ) }}" class="btn btn-info" title="Show Crew">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('crews.crew.edit', $crew->id ) }}" class="btn btn-primary" title="Edit Crew">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Crew" onclick="return confirm(&quot;Click Ok to delete Crew.&quot;)">
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
            {!! $crews->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection