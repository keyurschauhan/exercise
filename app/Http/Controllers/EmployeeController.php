<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Company;
use App\Http\Requests\EmployeeRequest;
use Auth;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with('company')->where('user_id', Auth::user()->id)->paginate(10);
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        $companies = Company::where('user_id', Auth::user()->id)->get();
        return view('employees.create', compact('companies'));
    }

    public function store(EmployeeRequest $request)
    {
        Employee::create($request->validated());
        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        $companies = Company::all();
        return view('employees.edit', compact('employee', 'companies'));
    }

    public function update(EmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->validated());
        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}
