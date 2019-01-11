<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller {

    public function index() {

        $employees = Employee::all();

        return response()->json($employees);
    }

    public function createEmployee(Request $request) {

        $employee = Employee::create($request->all());

        return response()->json($employee, 201);
    }

    public function showEmployee($id) {

        $employee = Employee::find($id);

        return response()->json($employee);
    }

    public function updateEmployee(Request $request, $id) {

        $employee = Employee::find($id);
        $employee->name = $request->input('name');
        $employee->salary = $request->input('salary');
        $employee->save();

        return response()->json($employee);
    }

    public function deleteEmployee($id) {
        $employee = Employee::find($id);
        $employee->delete();

        return response()->json('Deleted Successfully!');
    }

}
