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
                <h4 class="mt-5 mb-5">Airplane Ratings</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('airplane_ratings.airplane_rating.create') }}" class="btn btn-success" title="Create New Airplane Rating">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($airplaneRatings) == 0)
            <div class="panel-body text-center">
                <h4>No Airplane Ratings Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Rating  Number</th>
                            <th>Name</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($airplaneRatings as $airplaneRating)
                        <tr>
                            <td>{{ $airplaneRating->Rating_Number }}</td>
                            <td>{{ $airplaneRating->Name }}</td>

                            <td>

                                <form method="POST" action="{!! route('airplane_ratings.airplane_rating.destroy', $airplaneRating->Rating_Number) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('airplane_ratings.airplane_rating.show', $airplaneRating->Rating_Number ) }}" class="btn btn-info" title="Show Airplane Rating">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('airplane_ratings.airplane_rating.edit', $airplaneRating->Rating_Number ) }}" class="btn btn-primary" title="Edit Airplane Rating">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Airplane Rating" onclick="return confirm(&quot;Click Ok to delete Airplane Rating.&quot;)">
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
            {!! $airplaneRatings->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection