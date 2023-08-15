<?php

namespace App\Http\Controllers\Accounts;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Config;

class AccountController extends Controller
{
    /**
     * Display a listing of the departments.
     *
     * @return \Illuminate\Http\Response
     */
    public function account()
    
    {
        return view('user.accounts');
    }
    
    public function addAccount(Request $request)
{
    $input['invoice_no'] = $request->invoice_no;
    $input['clients'] = $request->clients;
    $input['date'] = $request->date;
    $input['type'] = $request->type;
    $input['status'] = $request->status;
    $input['amount'] = $request->amount;

    $result = DB::table('accounts')->insert($input);
    if($result){

    return redirect('accounts')->with('employee-success', 'Congratulations! Account successfully Added.');

    }else{

    return redirect()->back()->with('employee-success', 'Not Insert .');
    }

}

public function delete_account(Request $request)
    {
        // $table = $request->table;
        $table = $request->input('table');

        $id = $request->id;
        $account = DB::table($table)->where('id', $id)->delete();

        if (!$account) {
            return redirect()->back()->with('error', 'Account not found.');
        }

        $account->delete();

        return redirect()->back()->with('success', 'Account deleted successfully.');
    }

    public function editAccount(Request $request)
    {
        $id = $request->id;
        $input['invoice_no'] = $request->invoice_no;
        $input['clients'] = $request->clients;
        $input['date'] = $request->date;
        $input['type'] = $request->type;
        $input['status'] = $request->status;
        $input['amount'] = $request->amount;
        $result = DB::table('accounts')->where('id', $id)->update($input);
        if ($result) {
            return redirect('accounts')->with('success', 'Account updated successfully.');
        } else {
            return redirect()->back()->with('success', 'Not Insert.');
        }
    }
    
}