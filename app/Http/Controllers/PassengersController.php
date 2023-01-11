<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PassengersFormRequest;
use App\Models\Passenger;
use Exception;

class PassengersController extends Controller
{

    /**
     * Display a listing of the passengers.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $passengers = Passenger::paginate(25);

        return view('passengers.index', compact('passengers'));
    }

    /**
     * Show the form for creating a new passenger.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('passengers.create');
    }

    /**
     * Store a new passenger in the storage.
     *
     * @param App\Http\Requests\PassengersFormRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(PassengersFormRequest $request)
    {
        try {
            
            $data = $request->getData();
            
            Passenger::create($data);

            return redirect()->route('passengers.passenger.index')
                ->with('success_message', 'Passenger was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified passenger.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $passenger = Passenger::findOrFail($id);

        return view('passengers.show', compact('passenger'));
    }

    /**
     * Show the form for editing the specified passenger.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $passenger = Passenger::findOrFail($id);
        

        return view('passengers.edit', compact('passenger'));
    }

    /**
     * Update the specified passenger in the storage.
     *
     * @param int $id
     * @param App\Http\Requests\PassengersFormRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function update($id, PassengersFormRequest $request)
    {
        try {
            
            $data = $request->getData();
            
            $passenger = Passenger::findOrFail($id);
            $passenger->update($data);

            return redirect()->route('passengers.passenger.index')
                ->with('success_message', 'Passenger was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified passenger from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $passenger = Passenger::findOrFail($id);
            $passenger->delete();

            return redirect()->route('passengers.passenger.index')
                ->with('success_message', 'Passenger was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }



}
