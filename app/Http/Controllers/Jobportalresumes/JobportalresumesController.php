<?php

namespace App\Http\Controllers\Jobportalresumes;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Jobportalresumes\Jobportalresumes;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Config;

class JobportalresumesController extends Controller
{
    /**
     * Display a listing of the departments.
     *
     * @return \Illuminate\Http\Response
     */
    public function jobportalresumes()
    
    {
        return view('user.jobportal-resumes');
    }

    public function addJobportalresumes(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'salary' => 'required',
        'apply_for' => 'required',
        'experience' => 'required',
        'skills' => 'required',
        'address' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
    ]);

    $imageName = time() . '.' . $request->image->extension();

    $request->image->move(storage_path('app/images/jobportal'), $imageName);

    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'salary' => $request->salary,
        'apply_for' => $request->apply_for,
        'experience' => $request->experience,
        'skills' => $request->skills,
        'address' => $request->address,
        'image' => $imageName,
    ];

    $newJobportalresumes = Jobportalresumes::create($data);

    if ($newJobportalresumes) {
        return redirect()->intended('jobportal-resumes')->with('success', 'Job portal resumes added successfully.');
    } else {
        return redirect()->back()->with('error', 'Failed to add job portal resumes.');
    }
}
    
public function editJobportalresumes(Request $request)
{
    // Get the old image filename from the row ID
    $rowId = $request->id;
    $oldImage = Jobportalresumes::where('id', $rowId)->value('image');

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
        'salary' => $request->salary,
        'apply_for' => $request->apply_for,
        'experience' => $request->experience,
        'skills' => $request->skills,
        'address' => $request->address,
        'image' => $imageName,
    ];

    $affectedRows = Jobportalresumes::where('id', $request->id)->update($data);

    if ($affectedRows > 0) {
        return redirect()->intended('jobportal-resumes')->with('success', 'Job portal resumes updated successfully.');
    } else {
        return redirect()->back()->with('error', 'Failed to update job portal resumes.');
    }

        }

        public function delete_jobportalresumes(Request $request)
{
    $id = $request->id;

    // Retrieve the record to be deleted
    $jobportalresumes = Jobportalresumes::find($id);

    if (!$jobportalresumes) {
        return redirect()->back()->with('error', 'Job portal resumes not found.');
    }

    // Delete the associated image
    $imagePath = 'images/jobportal/' . $jobportalresumes->image;
    if ($jobportalresumes->image && Storage::exists($imagePath)) {
        Storage::delete($imagePath);
    }

    // Delete the job portal resumes record
    $deleted = $jobportalresumes->delete();

    if ($deleted) {
        return redirect()->intended('jobportal-resumes')->with('success', 'Job portal resumes deleted successfully.');
    } else {
        return redirect()->back()->with('error', 'Failed to delete job portal resumes.');
    }
}

}