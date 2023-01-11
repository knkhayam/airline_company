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
                <h4 class="mt-5 mb-5">Pilot Ratings</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('pilot_ratings.pilot_rating.create') }}" class="btn btn-success" title="Create New Pilot Rating">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($pilotRatings) == 0)
            <div class="panel-body text-center">
                <h4>No Pilot Ratings Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Pilot  E M P N U M</th>
                            <th>Airplane  Rating  Number</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($pilotRatings as $pilotRating)
                        <tr>
                            <td>{{ optional($pilotRating->Pilot)->Staff_EMPNUM }}</td>
                            <td>{{ optional($pilotRating->AirplaneRating)->Name }}</td>

                            <td>

                                <form method="POST" action="{!! route('pilot_ratings.pilot_rating.destroy', $pilotRating->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('pilot_ratings.pilot_rating.show', $pilotRating->id ) }}" class="btn btn-info" title="Show Pilot Rating">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('pilot_ratings.pilot_rating.edit', $pilotRating->id ) }}" class="btn btn-primary" title="Edit Pilot Rating">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Pilot Rating" onclick="return confirm(&quot;Click Ok to delete Pilot Rating.&quot;)">
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
            {!! $pilotRatings->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection