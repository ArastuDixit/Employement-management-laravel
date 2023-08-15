<?php

namespace App\Http\Controllers\Jobportalsettings;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Jobportalsettings\Jobportalsettings;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Config;

class JobportalsettingsController extends Controller
{
    /**
     * Display a listing of the departments.
     *
     * @return \Illuminate\Http\Response
     */
    public function jobportalsettings()
    
    {
        return view('user.jobportal-settings');
    }
    
    public function editJobportalsettings(Request $request)
{
    // Get the old image filename from the row ID
    $rowId = $request->id;
    $oldImage = Jobportalsettings::where('id', $rowId)->value('image');

    if ($request->image != "") {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(storage_path('app/images/jobportal'), $imageName);

        // Delete the old image if it exists
        $oldImagePath = 'images/jobportal/' . $oldImage;
        if ($oldImage && Storage::exists($oldImagePath)) {
            Storage::delete($oldImagePath);
        }
    } else {
        $imageName = $oldImage;
    }

    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'date' => $request->date,
        'apply_for' => $request->apply_for,
        'gander' => $request->gander,
        'country' => $request->country,
        'state' => $request->state,
        'city' => $request->city,
        'address' => $request->address,
        'contact_number' => $request->contact_number,
        'image' => $imageName,
    ];

    $affectedRows = Jobportalsettings::where('id', $request->id)->update($data);

    if ($affectedRows > 0) {
        return redirect()->intended('jobportal-settings')->with('success', 'Job portal settings updated successfully.');
    } else {
        return redirect()->back()->with('error', 'Failed to update job portal settings.');
    }

        }
}