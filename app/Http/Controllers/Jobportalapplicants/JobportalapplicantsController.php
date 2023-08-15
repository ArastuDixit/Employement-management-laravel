<?php

namespace App\Http\Controllers\Jobportalapplicants;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Jobportalapplicants\Jobportalapplicants;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Config;

class JobportalapplicantsController extends Controller
{
    /**
     * Display a listing of the departments.
     *
     * @return \Illuminate\Http\Response
     */
    public function jobportalapplicants()
    
    {
        return view('user.jobportal-applicants');
    }
    
    public function addJobportalapplicants(Request $request)
{
    $request->validate([
        'name' => 'required',
        'salary' => 'required',
        'apply_for' => 'required',
        'date' => 'required|date',
        'job_type' => 'required',
        'address' => 'address',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
    ]);

    $imageName = time() . '.' . $request->image->extension();

    $request->image->move(storage_path('app/images/jobportal'), $imageName);

    $data = [
        'name' => $request->name,
        'salary' => $request->salary,
        'apply_for' => $request->apply_for,
        'date' => $request->date,
        'job_type' => $request->job_type,
        'address' => $request->address,
        'image' => $imageName,
    ];

    $newJobportalapplicant = Jobportalapplicants::create($data);

    if ($newJobportalapplicant) {
        return redirect()->intended('jobportal-applicants')->with('success', 'Job portal applicants added successfully.');
    } else {
        return redirect()->back()->with('error', 'Failed to add job portal applicants.');
    }
}

public function editJobportalapplicants(Request $request)
{
    // Get the old image filename from the row ID
    $rowId = $request->id;
    $oldImage = Jobportalapplicants::where('id', $rowId)->value('image');

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
        'salary' => $request->salary,
        'apply_for' => $request->apply_for,
        'date' => $request->date,
        'job_type' => $request->job_type,
        'address' => $request->address,
        'image' => $imageName,
    ];

    $affectedRows = Jobportalapplicants::where('id', $request->id)->update($data);

    if ($affectedRows > 0) {
        return redirect()->intended('jobportal-applicants')->with('success', 'Job portal applicants updated successfully.');
    } else {
        return redirect()->back()->with('error', 'Failed to update job portal applicants.');
    }

        }

        public function delete_jobportalapplicants(Request $request)
{
    $id = $request->id;

    // Retrieve the record to be deleted
    $jobportalapplicants = Jobportalapplicants::find($id);

    if (!$jobportalapplicants) {
        return redirect()->back()->with('error', 'Job portal applicants not found.');
    }

    // Delete the associated image
    $imagePath = 'images/jobportal/' . $jobportalapplicants->image;
    if ($jobportalapplicants->image && Storage::exists($imagePath)) {
        Storage::delete($imagePath);
    }

    // Delete the job portal applicants record
    $deleted = $jobportalapplicants->delete();

    if ($deleted) {
        return redirect()->intended('jobportal-applicants')->with('success', 'Job portal applicants deleted successfully.');
    } else {
        return redirect()->back()->with('error', 'Failed to delete job portal applicants.');
    }
}


}