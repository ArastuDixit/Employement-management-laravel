<?php

namespace App\Http\Controllers\Taskboard;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Config;

class TaskboardController extends Controller
{
    /**
     * Display a listing of the departments.
     *
     * @return \Illuminate\Http\Response
     */
    public function taskboard()
    
    {
        return view('user.taskboard');
    }

    public function addTaskboard(Request $request)
{
    $input['task'] = $request->task;
    $input['team'] = $request->team;
    $input['duration_from'] = $request->duration_from;
    $input['duration_to'] = $request->duration_to;
    $input['status'] = $request->status;
    $input['progress'] = $request->progress;

    $result = DB::table('taskboard')->insert($input);
    if($result){

    return redirect('taskboard')->with('success', 'Congratulations! Task successfully Added.');

    }else{

    return redirect()->back()->with('success', 'Not Insert .');
    }

}

    public function editTaskboard(Request $request)
    {
        $id = $request->id;
        $input['task'] = $request->task;
        $input['team'] = $request->team;
        $input['duration_from'] = $request->duration_from;
        $input['duration_to'] = $request->duration_to;
        $input['status'] = $request->status;
        $input['progress'] = $request->progress;

        $result = DB::table('taskboard')->where('id', $id)->update($input);
        if ($result) {
            return redirect('taskboard')->with('success', 'Taskboard updated successfully.');
        } else {
            return redirect()->back()->with('success', 'Not Insert.');
        }
    }
    
}