<?php

namespace App\Http\Controllers\Holidays;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Holidays\Holidays;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Config;

class HolidaysController extends Controller
{

    public function holidays()
    {
        $holidays = Holidays::all();
        return view('user.holidays', ['holidays' => $holidays]);
    }

    public function addHoliday(Request $request)
{
    $input['day'] = $request->day;
    $input['date'] = $request->date;
    $input['holiday'] = $request->holiday;

    $result = DB::table('holidays')->insert($input);
    if($result){

    return redirect('holidays')->with('employee-success', 'Congratulations! Holiday successfully added.');

    }else{

    return redirect()->back()->with('employee-success', 'Not Insert .');
    }

}

    public function delete_holiday(Request $request)
    {
        // $table = $request->table;
        $table = $request->input('table');

        $id = $request->id;
        $holiday = DB::table($table)->where('id', $id)->delete();

        if (!$holiday) {
            return redirect()->back()->with('error', 'Holiday not found.');
        }

        $holiday->delete();

        return redirect()->back()->with('success', 'Holiday deleted successfully.');
    }

    public function editHoliday(Request $request)
    {
        $id = $request->id;
        $input['day'] = $request->day;
        $input['date'] = $request->date;
        $input['holiday'] = $request->holiday;
        $result = DB::table('holidays')->where('id', $id)->update($input);
        if ($result) {
            return redirect('holidays')->with('success', 'Holiday updated successfully.');
        } else {
            return redirect()->back()->with('success', 'Not Insert.');
        }
    }
}
