<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AirplaneRatingsFormRequest;
use App\Models\AirplaneRating;
use Exception;

class AirplaneRatingsController extends Controller
{

    /**
     * Display a listing of the airplane ratings.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $airplaneRatings = AirplaneRating::paginate(25);

        return view('airplane_ratings.index', compact('airplaneRatings'));
    }

    /**
     * Show the form for creating a new airplane rating.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('airplane_ratings.create');
    }

    /**
     * Store a new airplane rating in the storage.
     *
     * @param App\Http\Requests\AirplaneRatingsFormRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(AirplaneRatingsFormRequest $request)
    {
        try {
            
            $data = $request->getData();
            
            AirplaneRating::create($data);

            return redirect()->route('airplane_ratings.airplane_rating.index')
                ->with('success_message', 'Airplane Rating was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified airplane rating.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $airplaneRating = AirplaneRating::findOrFail($id);

        return view('airplane_ratings.show', compact('airplaneRating'));
    }

    /**
     * Show the form for editing the specified airplane rating.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $airplaneRating = AirplaneRating::findOrFail($id);
        

        return view('airplane_ratings.edit', compact('airplaneRating'));
    }

    /**
     * Update the specified airplane rating in the storage.
     *
     * @param int $id
     * @param App\Http\Requests\AirplaneRatingsFormRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function update($id, AirplaneRatingsFormRequest $request)
    {
        try {
            
            $data = $request->getData();
            
            $airplaneRating = AirplaneRating::findOrFail($id);
            $airplaneRating->update($data);

            return redirect()->route('airplane_ratings.airplane_rating.index')
                ->with('success_message', 'Airplane Rating was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified airplane rating from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $airplaneRating = AirplaneRating::findOrFail($id);
            $airplaneRating->delete();

            return redirect()->route('airplane_ratings.airplane_rating.index')
                ->with('success_message', 'Airplane Rating was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }



}
