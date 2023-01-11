<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookingsFormRequest;
use App\Models\Booking;
use App\Models\Passenger;
use Exception;

class BookingsController extends Controller
{

    /**
     * Display a listing of the bookings.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $bookings = Booking::with('passenger')->paginate(25);

        return view('bookings.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new booking.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $Passengers = Passenger::pluck('Passport_No','Passport_No')->all();
        
        return view('bookings.create', compact('Passengers'));
    }

    /**
     * Store a new booking in the storage.
     *
     * @param App\Http\Requests\BookingsFormRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(BookingsFormRequest $request)
    {
        try {
            
            $data = $request->getData();
            
            Booking::create($data);

            return redirect()->route('bookings.booking.index')
                ->with('success_message', 'Booking was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified booking.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $booking = Booking::with('passenger')->findOrFail($id);

        return view('bookings.show', compact('booking'));
    }

    /**
     * Show the form for editing the specified booking.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $booking = Booking::findOrFail($id);
        $Passengers = Passenger::pluck('Passport_No','Passport_No')->all();

        return view('bookings.edit', compact('booking','Passengers'));
    }

    /**
     * Update the specified booking in the storage.
     *
     * @param int $id
     * @param App\Http\Requests\BookingsFormRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function update($id, BookingsFormRequest $request)
    {
        try {
            
            $data = $request->getData();
            
            $booking = Booking::findOrFail($id);
            $booking->update($data);

            return redirect()->route('bookings.booking.index')
                ->with('success_message', 'Booking was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified booking from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $booking = Booking::findOrFail($id);
            $booking->delete();

            return redirect()->route('bookings.booking.index')
                ->with('success_message', 'Booking was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }



}
