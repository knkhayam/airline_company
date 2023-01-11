<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StaffFormRequest;
use App\Models\Staff;
use Exception;

class StaffController extends Controller
{

    /**
     * Display a listing of the staff.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $staffObjects = Staff::paginate(25);

        return view('staff.index', compact('staffObjects'));
    }

    /**
     * Show the form for creating a new staff.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('staff.create');
    }

    /**
     * Store a new staff in the storage.
     *
     * @param App\Http\Requests\StaffFormRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(StaffFormRequest $request)
    {
        try {
            
            $data = $request->getData();
            
            Staff::create($data);

            return redirect()->route('staff.staff.index')
                ->with('success_message', 'Staff was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request. ']);
        }
    }

    /**
     * Display the specified staff.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $staff = Staff::findOrFail($id);

        return view('staff.show', compact('staff'));
    }

    /**
     * Show the form for editing the specified staff.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $staff = Staff::findOrFail($id);
        

        return view('staff.edit', compact('staff'));
    }

    /**
     * Update the specified staff in the storage.
     *
     * @param int $id
     * @param App\Http\Requests\StaffFormRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function update($id, StaffFormRequest $request)
    {
        try {
            
            $data = $request->getData();
            
            $staff = Staff::findOrFail($id);
            $staff->update($data);

            return redirect()->route('staff.staff.index')
                ->with('success_message', 'Staff was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified staff from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $staff = Staff::findOrFail($id);
            $staff->delete();

            return redirect()->route('staff.staff.index')
                ->with('success_message', 'Staff was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }



}
