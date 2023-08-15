<?php

namespace App\Http\Controllers\Payroll;

use Illuminate\Http\Request;
use App\Models\Employee\Employee;
use App\Models\Payroll\Payroll;
use App\Http\Controllers\Controller;

use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Config;

class PayrollController extends Controller
{
    /**
     * Display a listing of the departments.
     *
     * @return \Illuminate\Http\Response
     */
    // public function payroll()
    
    // {
    //     return view('user.payroll');
    // }

    public function payroll()
    {
        $payroll = Payroll::all();
        $employees = Employee::all(); // Fetch all employees
        return view('user.payroll', ['payroll' => $payroll, 'employees' => $employees]);
    }

    public function addPayroll(Request $request)
{
    // Get the employee details from the employees table
    $employee = Employee::where('emp_id', $request->input('emp_id'))->first();

    // Create a new payroll instance and set the employee details
    $payroll = new Payroll;
    $payroll->emp_id = $employee->emp_id;
    $payroll->emp_first_name = $employee->emp_first_name;
    $payroll->emp_last_name = $employee->emp_last_name;
    $payroll->emp_role = $employee->emp_role;
    $payroll->emp_image = $employee->emp_image;
    $payroll->emp_email = $employee->emp_email;

    // Set the remaining fields from the request
    $payroll->basic_salary = $request->input('basic_salary');
    $payroll->hra = $request->input('hra');
    $payroll->tds = $request->input('tds');
    $payroll->pf = $request->input('pf');
    $payroll->bank_loan = $request->input('bank_loan');
    $payroll->allowance = $request->input('allowance');
    $payroll->total_salary = $request->input('total_salary');
    $payroll->status = $request->input('status');

    if ($payroll->save()) {
        return redirect('payroll')->with('employee-success', 'Congratulations! Payroll successfully added.');
    } else {
        return redirect()->back()->with('employee-error', 'Failed to add Payroll. Please try again.');
    }
}

public function editPayroll(Request $request)
{
    $id = $request->input('id');

    // Fetch employee-related fields from the employees table
    $employee = DB::table('employees')
        ->where('emp_id', $request->input('emp_id'))
        ->select('emp_first_name', 'emp_last_name', 'emp_role', 'emp_image', 'emp_email')
        ->first();

    $data = [
        'emp_id' => $request->input('emp_id'),
        'emp_first_name' => $employee->emp_first_name,
        'emp_last_name' => $employee->emp_last_name,
        'emp_role' => $employee->emp_role,
        'emp_image' => $employee->emp_image,
        'emp_email' => $employee->emp_email,
        'basic_salary' => $request->input('basic_salary'),
        'hra' => $request->input('hra'),
        'tds' => $request->input('tds'),
        'pf' => $request->input('pf'),
        'esic' => $request->input('esic'),
        'bank_loan' => $request->input('bank_loan'),
        'allowance' => $request->input('allowance'),
        'total_salary' => $request->input('total_salary'),
        'status' => $request->input('status'),
    ];

    $result = DB::table('payroll')
        ->where('id', $id)
        ->update($data);

    if ($result) {
        return redirect('payroll')->with('employee-success', 'Payroll updated successfully.');
    } else {
        return redirect()->back()->with('employee-success', 'Failed to update payroll.');
    }
}

}