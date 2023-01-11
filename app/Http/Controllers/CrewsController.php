<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CrewsFormRequest;
use App\Models\Crew;
use App\Models\Schedule;
use App\Models\Staff;
use Exception;

class CrewsController extends Controller
{

    /**
     * Display a listing of the crews.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $crews = Crew::with('staff','schedule')->paginate(25);

        return view('crews.index', compact('crews'));
    }

    /**
     * Show the form for creating a new crew.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $Staff = Staff::pluck('EMPNUM','EMPNUM')->all();
$Schedules = Schedule::pluck('Flight_FLIGHTNUM','Flight_FLIGHTNUM')->all();
        
        return view('crews.create', compact('Staff','Schedules'));
    }

    /**
     * Store a new crew in the storage.
     *
     * @param App\Http\Requests\CrewsFormRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(CrewsFormRequest $request)
    {
        try {
            
            $data = $request->getData();
            $is_pilot = Staff::findOrFail($data['Staff_EMPNUM'])->Type == 'Pilot';
            if ($is_pilot)
                throw new \Exception('Pilot cannot be added as a separate crew member');
            Crew::create($data);

            return redirect()->route('crews.crew.index')
                ->with('success_message', 'Crew was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.'. $exception->getMessage()]);
        }
    }

    /**
     * Display the specified crew.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $crew = Crew::with('staff','schedule')->findOrFail($id);

        return view('crews.show', compact('crew'));
    }

    /**
     * Show the form for editing the specified crew.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $crew = Crew::findOrFail($id);
        $Staff = Staff::pluck('EMPNUM','EMPNUM')->all();
$Schedules = Schedule::pluck('Flight_FLIGHTNUM','Flight_FLIGHTNUM')->all();

        return view('crews.edit', compact('crew','Staff','Schedules'));
    }

    /**
     * Update the specified crew in the storage.
     *
     * @param int $id
     * @param App\Http\Requests\CrewsFormRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function update($id, CrewsFormRequest $request)
    {
        try {
            
            $data = $request->getData();
            
            $crew = Crew::findOrFail($id);
            $crew->update($data);

            return redirect()->route('crews.crew.index')
                ->with('success_message', 'Crew was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified crew from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $crew = Crew::findOrFail($id);
            $crew->delete();

            return redirect()->route('crews.crew.index')
                ->with('success_message', 'Crew was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }



}
