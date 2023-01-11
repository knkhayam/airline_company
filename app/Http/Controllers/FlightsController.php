<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\FlightsFormRequest;
use App\Models\Flight;
use Exception;

class FlightsController extends Controller
{

    /**
     * Display a listing of the flights.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $flights = Flight::paginate(25);

        return view('flights.index', compact('flights'));
    }

    /**
     * Show the form for creating a new flight.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('flights.create');
    }

    /**
     * Store a new flight in the storage.
     *
     * @param App\Http\Requests\FlightsFormRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(FlightsFormRequest $request)
    {
        try {
            
            $data = $request->getData();
            
            Flight::create($data);

            return redirect()->route('flights.flight.index')
                ->with('success_message', 'Flight was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified flight.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $flight = Flight::findOrFail($id);

        return view('flights.show', compact('flight'));
    }

    /**
     * Show the form for editing the specified flight.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $flight = Flight::findOrFail($id);
        

        return view('flights.edit', compact('flight'));
    }

    /**
     * Update the specified flight in the storage.
     *
     * @param int $id
     * @param App\Http\Requests\FlightsFormRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function update($id, FlightsFormRequest $request)
    {
        try {
            
            $data = $request->getData();
            
            $flight = Flight::findOrFail($id);
            $flight->update($data);

            return redirect()->route('flights.flight.index')
                ->with('success_message', 'Flight was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified flight from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $flight = Flight::findOrFail($id);
            $flight->delete();

            return redirect()->route('flights.flight.index')
                ->with('success_message', 'Flight was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }



}
