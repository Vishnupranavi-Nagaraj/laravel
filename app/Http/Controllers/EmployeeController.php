<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Http\Requests\EmployeeRequest;
use Illuminate\Http\Request;
use App\Events\EmployeeMail;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Employee::latest()->paginate(5);
        return view('users.index',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {     
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeRequest $request)
    {
        $users = Employee::create($request->all());
        event(new EmployeeMail($users));
        return redirect()->route('users.index')
                        ->with('success','User created successfully.');
    }

   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $crud
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $store = Employee::find($id);
        event(new EmployeeMail($store));
        return view('users.edit',compact('store'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $crud
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeRequest $request, $id)
    {
        $updateData = $request->except('_token','_method');
        Employee::whereId($id)->update($updateData);
        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crud = Employee::find($id);
        $crud->delete();
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }
}
