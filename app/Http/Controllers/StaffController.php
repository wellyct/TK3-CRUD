<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Staff::latest()->paginate(5);
        return view ('staffs.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('staffs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'staff_name' => 'required',
            'staff_username' => 'required',
            'staff_password' => 'required',
            'staff_gender' => 'required',
        ]);

        $staff = new staff;

        $staff->staff_name = $request->staff_name;
        $staff->staff_username = $request->staff_username;
        $staff->staff_password = $request->staff_password;
        $staff->staff_gender = $request->staff_gender;
        $staff->save();

        return redirect()->route('staffs.index')->with('success', 'Selected data staff has been successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        return view('staffs.show', compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        return view('staffs.edit', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        $request->validate([
            'staff_name' => 'required',
            'staff_username' => 'required',
            'staff_password' => 'required',
            'staff_gender' => 'required',
        ]);

        
        $staff = Staff::find($request->hidden_id);

        $staff->staff_name = $request->staff_name;
        $staff->staff_username = $request->staff_username;
        $staff->staff_password = $request->staff_password;
        $staff->staff_gender = $request->staff_gender;
        $staff->save();

        $staff->save();

        return redirect()->route('staffs.index')->with('success', 'Selected data staff has been successfully updated.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        $staff->delete();
        return redirect()->route('staffs.index')->with('success', 'Selected data staff has been successfully deleted');
    }
}
