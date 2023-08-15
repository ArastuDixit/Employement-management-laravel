<?php

namespace App\Http\Controllers\Projecttodo;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Employee\Employee;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Config;

class ProjecttodoController extends Controller
{
    /**
     * Display a listing of the departments.
     *
     * @return \Illuminate\Http\Response
     */
    public function projecttodo()
    
    {
        $employees = Employee::all(); // Retrieve all employees from the "employees" table
        // return view('user.project-todo');
        return view('user.project-todo', ['employees' => $employees]);
    }
    
    public function addProjecttodo(Request $request)
{
    $input['short_description'] = $request->short_description;
    $input['due'] = $request->due;
    $input['priority'] = $request->priority;

    $selectedUser = $request->user;
    $selectedEmployee = Employee::find($selectedUser);

    if ($selectedEmployee) {
        $user = $selectedEmployee->emp_first_name . ' ' . $selectedEmployee->emp_last_name;
        $input['user'] = $user;
    }

    $result = DB::table('projecttodo')->insert($input);

    if ($result) {
        return redirect('project-todo')->with('success', 'Congratulations! Project To Do successfully added.');
    } else {
        return redirect()->back()->with('success', 'Not Inserted.');
    }
}

    public function editProjecttodo(Request $request)
    {
        $id = $request->id;
        $input['short_description'] = $request->short_description;
        $input['due'] = $request->due;
        $input['priority'] = $request->priority;
        $input['user'] = $request->user;
       
        $result = DB::table('projecttodo')->where('id', $id)->update($input);
        if ($result) {
            return redirect('project-todo')->with('success', 'Project To Do updated successfully.');
        } else {
            return redirect()->back()->with('success', 'Not Insert.');
        }
    }
}