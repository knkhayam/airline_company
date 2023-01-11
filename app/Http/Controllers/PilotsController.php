<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PilotsFormRequest;
use App\Models\Pilot;
use App\Models\Staff;
use Exception;

class PilotsController extends Controller
{

    /**
     * Display a listing of the pilots.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $pilots = Pilot::with('staff')->paginate(25);

        return view('pilots.index', compact('pilots'));
    }

    /**
     * Show the form for creating a new pilot.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $Staff = Staff::pluck('EMPNUM','EMPNUM')->all();
        
        return view('pilots.create', compact('Staff'));
    }

    /**
     * Store a new pilot in the storage.
     *
     * @param App\Http\Requests\PilotsFormRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(PilotsFormRequest $request)
    {
        try {
            
            $data = $request->getData();
            
            Pilot::create($data);

            return redirect()->route('pilots.pilot.index')
                ->with('success_message', 'Pilot was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified pilot.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $pilot = Pilot::with('staff')->findOrFail($id);

        return view('pilots.show', compact('pilot'));
    }

    /**
     * Show the form for editing the specified pilot.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $pilot = Pilot::findOrFail($id);
        $Staff = Staff::pluck('EMPNUM','EMPNUM')->all();

        return view('pilots.edit', compact('pilot','Staff'));
    }

    /**
     * Update the specified pilot in the storage.
     *
     * @param int $id
     * @param App\Http\Requests\PilotsFormRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function update($id, PilotsFormRequest $request)
    {
        try {
            
            $data = $request->getData();
            
            $pilot = Pilot::findOrFail($id);
            $pilot->update($data);

            return redirect()->route('pilots.pilot.index')
                ->with('success_message', 'Pilot was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified pilot from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $pilot = Pilot::findOrFail($id);
            $pilot->delete();

            return redirect()->route('pilots.pilot.index')
                ->with('success_message', 'Pilot was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }



}
