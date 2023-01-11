<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PilotRatingsFormRequest;
use App\Models\AirplaneRating;
use App\Models\Pilot;
use App\Models\PilotRating;
use Exception;

class PilotRatingsController extends Controller
{

    /**
     * Display a listing of the pilot ratings.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $pilotRatings = PilotRating::with('pilot','airplanerating')->paginate(25);

        return view('pilot_ratings.index', compact('pilotRatings'));
    }

    /**
     * Show the form for creating a new pilot rating.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $Pilots = Pilot::pluck('Staff_EMPNUM','Staff_EMPNUM')->all();
$AirplaneRatings = AirplaneRating::pluck('Name','Rating_Number')->all();
        
        return view('pilot_ratings.create', compact('Pilots','AirplaneRatings'));
    }

    /**
     * Store a new pilot rating in the storage.
     *
     * @param App\Http\Requests\PilotRatingsFormRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(PilotRatingsFormRequest $request)
    {
        try {
            
            $data = $request->getData();
            
            PilotRating::create($data);

            return redirect()->route('pilot_ratings.pilot_rating.index')
                ->with('success_message', 'Pilot Rating was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified pilot rating.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $pilotRating = PilotRating::with('pilot','airplanerating')->findOrFail($id);

        return view('pilot_ratings.show', compact('pilotRating'));
    }

    /**
     * Show the form for editing the specified pilot rating.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $pilotRating = PilotRating::findOrFail($id);
        $Pilots = Pilot::pluck('Staff_EMPNUM','Staff_EMPNUM')->all();
$AirplaneRatings = AirplaneRating::pluck('Name','Rating_Number')->all();

        return view('pilot_ratings.edit', compact('pilotRating','Pilots','AirplaneRatings'));
    }

    /**
     * Update the specified pilot rating in the storage.
     *
     * @param int $id
     * @param App\Http\Requests\PilotRatingsFormRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function update($id, PilotRatingsFormRequest $request)
    {
        try {
            
            $data = $request->getData();
            
            $pilotRating = PilotRating::findOrFail($id);
            $pilotRating->update($data);

            return redirect()->route('pilot_ratings.pilot_rating.index')
                ->with('success_message', 'Pilot Rating was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified pilot rating from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $pilotRating = PilotRating::findOrFail($id);
            $pilotRating->delete();

            return redirect()->route('pilot_ratings.pilot_rating.index')
                ->with('success_message', 'Pilot Rating was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }



}
