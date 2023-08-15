<?php

namespace App\Http\Controllers\Projectdashboard;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Config;

class ProjectdashboardController extends Controller
{
    /**
     * Display a listing of the departments.
     *
     * @return \Illuminate\Http\Response
     */
    public function projectdashboard()
    
    {
        return view('user.project-dashboard');
    }
    
    public function addProjectdashboard(Request $request)
{

    $request->validate([
        'invoice_no' => 'required',
        'client_name' => 'required',
        'team' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        'project_name' => 'required',
        'project_cost' => 'required',
        'payment' => 'required',
        'status' => 'required',
    ]);

    $imageName = time() . '.' . $request->image->extension();

    $request->image->move(storage_path('app/images/jobportal'), $imageName);

    $data = [
        'invoice_no' => $request->invoice_no,
        'client_name' => $request->client_name,
        'team' => $imageName,
        'project_name' => $request->project_name,
        'project_cost' => $request->status,
        'paymet' => $request->paymet,
        'status' => $request->status,
    ];

    $newJobportaldashboard = Jobportaldashboard::create($data);

    if ($newJobportaldashboard) {
        return redirect()->intended('jobportal-dashboard')->with('success', 'Job portal dashboard added successfully.');
    } else {
        return redirect()->back()->with('error', 'Failed to add job portal dashboard.');
    }

    

}

public function editProjectdashboard(Request $request)
    {
        $id = $request->id;
        $input['invoice_no'] = $request->invoice_no;
        $input['client_name'] = $request->client_name;
        $input['team'] = $request->team;
        $input['project_name'] = $request->project_name;
        $input['project_cost'] = $request->project_cost;
        $input['payment'] = $request->payment;
        $input['status'] = $request->status;
         $result = DB::table('projectdashboard')->where('id', $id)->update($input);
        if ($result) {
            return redirect('project-dashboard')->with('success', 'Project updated successfully.');
        } else {
            return redirect()->back()->with('success', 'Not Updated.');
        }
    }

    public function delete_projectdashboard(Request $request)
    {
        // $table = $request->table;
        $table = $request->input('table');

        $id = $request->id;
        $projectdashboard = DB::table($table)->where('id', $id)->delete();

        if (!$projectdashboard) {
            return redirect()->back()->with('error', 'Project not found.');
        }

        $projectdashboard->delete();

        return redirect()->back()->with('success', 'Project deleted successfully.');
    }
}