<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Employee;
use App\Model\Department;
use Illuminate\Support\Facades\View;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Employees = Employee::with('department')
            ->get();
        //->toArray();
        // return $Employees;

      return view('Employee/index', ["employees" => $Employees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        return view('employee/create', ['departments' => $departments]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Employee = new Employee();
        $Employee->name = $request->name;
        $Employee->phone = $request->phone;
        $Employee->address = $request->address;
        $Employee->gender = $request->gender;
        $Employee->department_id = $request->department_id;
        $Employee->save();
        return redirect('employees');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Employee = Employee::find($id);
        return view('Employee/read', ["Employee" => $Employee]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Employee = Employee::with('department')
            ->find($id);
        $departments = Department::all();
        $Employee->departments = $departments;
      
        return view('Employee/edit', ["employee" => $Employee]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Employee = Employee::find($id);
        $Employee->name = $request->name;
        $Employee->phone = $request->phone;
        $Employee->address = $request->address;
        $Employee->gender = $request->gender;
        $Employee->department_id = $request->department_id;
        $Employee->save();
        return redirect('employees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::find($id)->delete();
        return redirect('employees');
    }
}
