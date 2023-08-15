<?php

namespace App\Http\Controllers\Projectlist;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Config;

class ProjectlistController extends Controller
{
    /**
     * Display a listing of the departments.
     *
     * @return \Illuminate\Http\Response
     */
    public function projectlist()
    
    {
        return view('user.project-list');
    }
    
    public function addProjectlist(Request $request)
{
    $input['invoice_no'] = $request->invoice_no;
        $input['client_name'] = $request->client_name;
        $input['team'] = $request->team;
        $input['project_name'] = $request->project_name;
        $input['project_cost'] = $request->project_cost;
        $input['technology'] = $request->technology;
        $input['short_description'] = $request->short_description;
        $input['created'] = $request->created;
        $input['milestone'] = $request->milestone;
        $input['work'] = $request->work;
        $input['duration'] = $request->duration;
        $input['priority'] = $request->priority;
        $input['progress'] = $request->progress;
        $input['payment'] = $request->payment;
        $input['status'] = $request->status;
    

    $result = DB::table('projectdashboard')->insert($input);
    if($result){

    return redirect('project-list')->with('success', 'Congratulations! Project list successfully Added.');

    }else{

    return redirect()->back()->with('success', 'Not Insert .');
    }

}

public function editProjectlist(Request $request)
    {
        $id = $request->id;
        $input['invoice_no'] = $request->invoice_no;
        $input['client_name'] = $request->client_name;
        $input['team'] = $request->team;
        $input['project_name'] = $request->project_name;
        $input['project_cost'] = $request->project_cost;
        $input['technology'] = $request->technology;
        $input['short_description'] = $request->short_description;
        $input['created'] = $request->created;
        $input['milestone'] = $request->milestone;
        $input['work'] = $request->work;
        $input['duration'] = $request->duration;
        $input['priority'] = $request->priority;
        $input['progress'] = $request->progress;
        $input['payment'] = $request->payment;
        $input['status'] = $request->status;
         $result = DB::table('projectdashboard')->where('id', $id)->update($input);
        if ($result) {
            return redirect('project-list')->with('success', 'Project list updated successfully.');
        } else {
            return redirect()->back()->with('success', 'Not Updated.');
        }
    }

    public function delete_projectlist(Request $request)
    {
        // $table = $request->table;
        $table = $request->input('table');

        $id = $request->id;
        $projectlist = DB::table($table)->where('id', $id)->delete();

        if (!$projectlist) {
            return redirect()->back()->with('error', 'Project not found.');
        }

        $projectlist->delete();

        return redirect()->back()->with('success', 'Project list deleted successfully.');
    }
}