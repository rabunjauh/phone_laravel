<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Group;
use App\Models\Office;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('department/index', [
            "title" => "Department",
            "menu" => "department",
            "offices" => Office::all(),
            "departments" => Department::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('department/create', [
            "title" => "Add Deparment",
            "menu" => "addDepartment",
            "offices" => Office::all(),
            "groups" => Group::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:departments',
            'isActive' => 'required',
            'group_id' => 'required'
        ]);
        // return $validatedData;

        $validatedData['name'] = strtoupper($validatedData['name']);
        // $validatedData['isActive'] = $request->boolean();

        // return $validatedData;

        Department::create($validatedData);

        return redirect('/department')->with('success', 'Department data successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        return $department;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        return $department;
        return view('department/edit', [
            "title" => "Edit Deparment",
            "menu" => "editDepartment",
            "offices" => Office::all(),
            "department" => $department,
            "groups" => Group::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        $rules = [
            'isActive' => 'required',
            'group_id' => 'required'
        ];

        if($request->name != $department->name) {
            $rules['name'] = 'required|max:255|unique:departments';
        }

        // dd($rules);

        $validatedData = $request->validate($rules);

        Department::where('id', $department->id)->update($validatedData);

        return redirect('/department')->with('success', 'Department data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        Department::destroy($department->id);

        return redirect('/department')->with('success', 'Department data successfully deleted');
    }
}
