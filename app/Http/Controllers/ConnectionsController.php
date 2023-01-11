<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConnectionsFormRequest;
use App\Models\Booking;
use App\Models\Connection;
use App\Models\Schedule;
use Exception;

class ConnectionsController extends Controller
{

    /**
     * Display a listing of the connections.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $connections = Connection::with('booking','schedule')->paginate(25);

        return view('connections.index', compact('connections'));
    }

    /**
     * Show the form for creating a new connection.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $Bookings = Booking::pluck('id','id')->all();
$Schedules = Schedule::pluck('Flight_FLIGHTNUM','id')->all();
        
        return view('connections.create', compact('Bookings','Schedules'));
    }

    /**
     * Store a new connection in the storage.
     *
     * @param App\Http\Requests\ConnectionsFormRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(ConnectionsFormRequest $request)
    {
        try {
            
            $data = $request->getData();
            
            Connection::create($data);

            return redirect()->route('connections.connection.index')
                ->with('success_message', 'Connection was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.'. $exception->getMessage()]);
        }
    }

    /**
     * Display the specified connection.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $connection = Connection::with('booking','schedule')->findOrFail($id);

        return view('connections.show', compact('connection'));
    }

    /**
     * Show the form for editing the specified connection.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $connection = Connection::findOrFail($id);
        $Bookings = Booking::pluck('id','id')->all();
$Schedules = Schedule::pluck('Flight_FLIGHTNUM','id')->all();

        return view('connections.edit', compact('connection','Bookings','Schedules'));
    }

    /**
     * Update the specified connection in the storage.
     *
     * @param int $id
     * @param App\Http\Requests\ConnectionsFormRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function update($id, ConnectionsFormRequest $request)
    {
        try {
            
            $data = $request->getData();
            
            $connection = Connection::findOrFail($id);
            $connection->update($data);

            return redirect()->route('connections.connection.index')
                ->with('success_message', 'Connection was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified connection from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $connection = Connection::findOrFail($id);
            $connection->delete();

            return redirect()->route('connections.connection.index')
                ->with('success_message', 'Connection was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }



}
