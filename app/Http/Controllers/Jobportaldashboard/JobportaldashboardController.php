<?php

namespace App\Http\Controllers\Jobportaldashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Jobportaldashboard\Jobportaldashboard;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Config;

class JobportaldashboardController extends Controller
{
    /**
     * Display a listing of the departments.
     *
     * @return \Illuminate\Http\Response
     */
    public function jobportaldashboard()
    
    {
        return view('user.jobportal-dashboard');
    }
       

    public function addJobportaldashboard(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'apply_for' => 'required',
        'date' => 'required|date',
        'status' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
    ]);

    $imageName = time() . '.' . $request->image->extension();

    $request->image->move(storage_path('app/images/jobportal'), $imageName);

    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'apply_for' => $request->apply_for,
        'date' => $request->date,
        'status' => $request->status,
        'image' => $imageName,
    ];

    $newJobportaldashboard = Jobportaldashboard::create($data);

    if ($newJobportaldashboard) {
        return redirect()->intended('jobportal-dashboard')->with('success', 'Job portal dashboard added successfully.');
    } else {
        return redirect()->back()->with('error', 'Failed to add job portal dashboard.');
    }
}
        
    
public function editJobportaldashboard(Request $request)
{
    // Get the old image filename from the row ID
    $rowId = $request->id;
    $oldImage = Jobportaldashboard::where('id', $rowId)->value('image');

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
        'apply_for' => $request->apply_for,
        'date' => $request->date,
        'status' => $request->status,
        'image' => $imageName,
    ];

    $affectedRows = Jobportaldashboard::where('id', $request->id)->update($data);

    if ($affectedRows > 0) {
        return redirect()->intended('jobportal-dashboard')->with('success', 'Job portal dashboard updated successfully.');
    } else {
        return redirect()->back()->with('error', 'Failed to update job portal dashboard.');
    }

        }


public function delete_jobportaldashboard(Request $request)
{
    $id = $request->id;

    // Retrieve the record to be deleted
    $jobportaldashboard = Jobportaldashboard::find($id);

    if (!$jobportaldashboard) {
        return redirect()->back()->with('error', 'Job portal dashboard not found.');
    }

    // Delete the associated image
    $imagePath = 'images/jobportal/' . $jobportaldashboard->image;
    if ($jobportaldashboard->image && Storage::exists($imagePath)) {
        Storage::delete($imagePath);
    }

    // Delete the job portal dashboard record
    $deleted = $jobportaldashboard->delete();

    if ($deleted) {
        return redirect()->intended('jobportal-dashboard')->with('success', 'Job portal dashboard deleted successfully.');
    } else {
        return redirect()->back()->with('error', 'Failed to delete job portal dashboard.');
    }
}

}