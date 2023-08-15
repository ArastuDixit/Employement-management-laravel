<?php

namespace App\Http\Controllers\Departments;

use App\Models\Departments\Department;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Config;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the departments.
     *
     * @return \Illuminate\Http\Response
     */
    public function department()
    {
        $departments = Department::all();
        return view('user.departments', ['departments' => $departments]);
    }

    public function addDepartment(Request $request)
{
    $input['department_name'] = $request->department_name;
    $input['department_head'] = $request->department_head;
    $input['total_employee'] = $request->total_employee;

    $result = DB::table('departments')->insert($input);
    if($result){

    return redirect('departments')->with('employee-success', 'Congratulations! Department successfully Added.');

    }else{

    return redirect()->back()->with('employee-success', 'Not Insert .');
    }

}

    public function delete_department(Request $request)
    {
        // $table = $request->table;
        $table = $request->input('table');

        $id = $request->id;
        $department = DB::table($table)->where('id', $id)->delete();

        if (!$department) {
            return redirect()->back()->with('error', 'Department not found.');
        }

        $department->delete();

        return redirect()->back()->with('success', 'Department deleted successfully.');
    }

    public function editDepartment(Request $request)
    {
        $id = $request->id;
        $input['department_name'] = $request->department_name;
        $input['department_head'] = $request->department_head;
        $input['total_employee'] = $request->total_employee;
        $result = DB::table('departments')->where('id', $id)->update($input);
        if ($result) {
            return redirect('departments')->with('success', 'Department updated successfully.');
        } else {
            return redirect()->back()->with('success', 'Not Insert.');
        }
    }
}
