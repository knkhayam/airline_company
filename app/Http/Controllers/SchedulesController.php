<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SchedulesFormRequest;
use App\Models\Airplane;
use App\Models\Flight;
use App\Models\Pilot;
use App\Models\Schedule;
use Exception;

class SchedulesController extends Controller
{

    /**
     * Display a listing of the schedules.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $schedules = Schedule::with('flight','airplane','pilot')->paginate(25);

        return view('schedules.index', compact('schedules'));
    }

    /**
     * Show the form for creating a new schedule.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $Flights = Flight::pluck('FLIGHTNUM','FLIGHTNUM')->all();
$Airplanes = Airplane::pluck('NUMSER','NUMSER')->all();
$Pilots = Pilot::pluck('Staff_EMPNUM','Staff_EMPNUM')->all();
        
        return view('schedules.create', compact('Flights','Airplanes','Pilots'));
    }

    /**
     * Store a new schedule in the storage.
     *
     * @param App\Http\Requests\SchedulesFormRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(SchedulesFormRequest $request)
    {
        try {
            
            $data = $request->getData();
            
            Schedule::create($data);

            return redirect()->route('schedules.schedule.index')
                ->with('success_message', 'Schedule was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request. ' . $exception->getMessage()]);
        }
    }

    /**
     * Display the specified schedule.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $schedule = Schedule::with('flight','airplane','pilot')->findOrFail($id);

        return view('schedules.show', compact('schedule'));
    }

    /**
     * Show the form for editing the specified schedule.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $schedule = Schedule::findOrFail($id);
        $Flights = Flight::pluck('FLIGHTNUM','FLIGHTNUM')->all();
$Airplanes = Airplane::pluck('NUMSER','NUMSER')->all();
$Pilots = Pilot::pluck('Staff_EMPNUM','Staff_EMPNUM')->all();

        return view('schedules.edit', compact('schedule','Flights','Airplanes','Pilots'));
    }

    /**
     * Update the specified schedule in the storage.
     *
     * @param int $id
     * @param App\Http\Requests\SchedulesFormRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function update($id, SchedulesFormRequest $request)
    {
        try {
            
            $data = $request->getData();
            
            $schedule = Schedule::findOrFail($id);
            $schedule->update($data);

            return redirect()->route('schedules.schedule.index')
                ->with('success_message', 'Schedule was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified schedule from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $schedule = Schedule::findOrFail($id);
            $schedule->delete();

            return redirect()->route('schedules.schedule.index')
                ->with('success_message', 'Schedule was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }



}
