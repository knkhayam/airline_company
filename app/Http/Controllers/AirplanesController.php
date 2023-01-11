<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AirplanesFormRequest;
use App\Models\Airplane;
use App\Models\AirplaneRating;
use Exception;

class AirplanesController extends Controller
{

    /**
     * Display a listing of the airplanes.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $airplanes = Airplane::with('airplanerating')->paginate(25);

        return view('airplanes.index', compact('airplanes'));
    }

    /**
     * Show the form for creating a new airplane.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $AirplaneRatings = AirplaneRating::pluck('Name','Rating_Number')->all();
        
        return view('airplanes.create', compact('AirplaneRatings'));
    }

    /**
     * Store a new airplane in the storage.
     *
     * @param App\Http\Requests\AirplanesFormRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(AirplanesFormRequest $request)
    {
        try {
            
            $data = $request->getData();
            
            Airplane::create($data);

            return redirect()->route('airplanes.airplane.index')
                ->with('success_message', 'Airplane was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified airplane.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $airplane = Airplane::with('airplanerating')->findOrFail($id);

        return view('airplanes.show', compact('airplane'));
    }

    /**
     * Show the form for editing the specified airplane.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $airplane = Airplane::findOrFail($id);
        $AirplaneRatings = AirplaneRating::pluck('Name','Rating_Number')->all();

        return view('airplanes.edit', compact('airplane','AirplaneRatings'));
    }

    /**
     * Update the specified airplane in the storage.
     *
     * @param int $id
     * @param App\Http\Requests\AirplanesFormRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function update($id, AirplanesFormRequest $request)
    {
        try {
            
            $data = $request->getData();
            
            $airplane = Airplane::findOrFail($id);
            $airplane->update($data);

            return redirect()->route('airplanes.airplane.index')
                ->with('success_message', 'Airplane was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified airplane from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $airplane = Airplane::findOrFail($id);
            $airplane->delete();

            return redirect()->route('airplanes.airplane.index')
                ->with('success_message', 'Airplane was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }



}
