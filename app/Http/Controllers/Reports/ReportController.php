<?php

namespace App\Http\Controllers\Reports;
use App\Models\Reports\Report;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Config;

class ReportController extends Controller
{
    /**
     * Display a listing of the departments.
     *
     * @return \Illuminate\Http\Response
     */
    public function report()
    
    {
        return view('user.reports');
    }

    public function addReport(Request $request)
{
    $input['item'] = $request->item;
    $input['category'] = $request->category;
    $input['order_by'] = $request->order_by;
    $input['order_from'] = $request->order_from;
    $input['date'] = $request->date;
    $input['paid_by'] = $request->paid_by;
    $input['status'] = $request->status;
    $input['amount'] = $request->amount;

    $result = DB::table('reports')->insert($input);
    if($result){

    return redirect('reports')->with('success', 'Congratulations! Report successfully Added.');

    }else{

    return redirect()->back()->with('success', 'Not Insert .');
    }

}

    public function editReport(Request $request)
    {
        $id = $request->id;
        $input['item'] = $request->item;
        $input['category'] = $request->category;
        $input['order_by'] = $request->order_by;
        $input['order_from'] = $request->order_from;
        $input['date'] = $request->date;
        $input['paid_by'] = $request->paid_by;
        $input['status'] = $request->status;
        $input['amount'] = $request->amount;
        $result = DB::table('reports')->where('id', $id)->update($input);
        if ($result) {
            return redirect('reports')->with('success', 'Report updated successfully.');
        } else {
            return redirect()->back()->with('success', 'Not Insert.');
        }
    }

}