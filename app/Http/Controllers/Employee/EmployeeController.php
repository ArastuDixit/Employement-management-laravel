<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Employee\Employee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Config;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employee.login');
    }
    public function employeeLogin(Request $request)
    {
        $request->validate(['email' => 'required', 'password' => 'required',]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')->withSuccess('Signed in');
        }
        return redirect("login")->withSuccess('Login details are not valid');
    }
    public function registration()
    {
        return view('employee.registration');
    }





    public function editEmployee(Request $request)
    {




        if (Auth::check()) {

            //$request->validate(['name' => 'required', 'email' => 'required|email|unique:users', 'password' => 'required|min:6', ]);

            //$data = $request->all();


            if ($request->image != "") {

                $request->validate([
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
                ]);

                $imageName = time() . '.' . $request->image->extension();
            }



            if ($request->emp_resume != "") {

                $file = $request->file('emp_resume');
                $filename = time() . '.' . $file->extension();
            }


            //            'emp_mobile' => $request->emp_mobile, 

            $data = [
                'emp_first_name' => $request->emp_first_name,
                'emp_last_name' => $request->emp_last_name,
                'emp_role' => $request->emp_role,
                'emp_skill' => implode(",", $request->emp_skill),
                'emp_description' => $request->emp_description,
                'emp_short_description' => $request->emp_short_description,
                'emp_phone' => $request->emp_phone,
                'emp_start_date' => date('Y-m-d', strtotime($request->emp_start_date)),
                'emp_create_date' => $request->emp_create_date,
                'emp_email' => $request->emp_email,
                'emp_facebook' => $request->emp_facebook,
                'emp_twitter' => $request->emp_twitter,
                'emp_linked_in' => $request->emp_linked_in,
                'emp_instagram' => $request->emp_instagram,
                'emp_gender' => $request->emp_gender,
                'emp_resume_text' => $request->emp_resume_text,
                'emp_local_address' => $request->emp_local_address,
                'emp_local_pincode' => $request->emp_local_pincode,
                'emp_local_landmark' => $request->emp_local_landmark,
                'emp_local_city' => $request->emp_local_city,
                'emp_local_state' => $request->emp_local_state,
                'emp_local_country' => $request->emp_local_country,
                'emp_local_phone' => $request->emp_local_phone,
                'emp_parents_address' => $request->emp_parents_address,
                'emp_parents_pincode' => $request->emp_parents_pincode,
                'emp_parents_landmark' => $request->emp_parents_landmark,
                'emp_parents_city' => $request->emp_parents_city,
                'emp_parents_state' => $request->emp_parents_state,
                'emp_parents_country' => $request->emp_parents_country,
                'emp_parents_phone' => $request->emp_parents_phone,
                'emp_friends_guardians_address' => $request->emp_friends_guardians_address,
                'emp_friends_guardians_pincode' => $request->emp_friends_guardians_pincode,
                'emp_friends_guardians_landmark' => $request->emp_friends_guardians_landmark,
                'emp_friends_guardians_city' => $request->emp_friends_guardians_city,
                'emp_friends_guardians_state' => $request->emp_friends_guardians_state,
                'emp_friends_guardians_country' => $request->emp_friends_guardians_country,
                'emp_friends_guardians_friend_phone' => $request->emp_friends_guardians_friend_phone,
                'emp_document_submitted' => implode(",", $request->emp_document_submitted),
                'emp_documnet_other' => $request->emp_documnet_other,
            ];


            if ($request->image != "") {
                $data['emp_image'] = @$imageName;
            }

            if ($request->emp_resume != "") {
                $data['emp_resume'] = @$filename;
            }


            $affectedRows = Employee::where('emp_id', @$request->emp_id)->update($data);




            if ($affectedRows > 0) {

                if ($request->image != "") {

                    $request->image->storeAs('images/employee', $imageName);


                    @unlink(storage_path('app') . '/images/employee/' . $request->emp_image_remove);
                }

                if ($request->emp_resume != "") {

                    $path = $file->storeAs('documents/employee', $filename);

                    @unlink(storage_path('app') . '/documents/employee/' . $request->emp_resume_remove);
                }
            }

            if ($affectedRows > 0) {

                return redirect()->intended('employee/edit/' . @$request->emp_id)->with('employee-success', 'Congratulations! employee successfully updated.');
            } else {

                return redirect()->intended('employee/edit/' . @$request->emp_id)->with('employee-error', 'Employee not updated.');
            }


            //return view('user.employee');
            //ser
            //return redirect("login")->with('Congratulations! employee successfully registered.');
        } else {
            return redirect("login")->withSuccess('You You are not allowed to access this page of website. this page of website.');
        }
        //return view('employee.registration');

    }








    public function addEmployee(Request $request)
    {




        if (Auth::check()) {

            //$request->validate(['name' => 'required', 'email' => 'required|email|unique:users', 'password' => 'required|min:6', ]);

            //$data = $request->all();


            if ($request->image != "") {

                $request->validate([
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
                ]);

                $imageName = time() . '.' . $request->image->extension();
            }



            if ($request->emp_resume != "") {

                $file = $request->file('emp_resume');
                $filename = time() . '.' . $file->extension();
            }


            //            'emp_mobile' => $request->emp_mobile, 

            $data = [
                'emp_first_name' => $request->emp_first_name,
                'emp_last_name' => $request->emp_last_name,
                'emp_role' => $request->emp_role,
                'emp_skill' => implode(",", $request->emp_skill),
                'emp_description' => $request->emp_description,
                'emp_short_description' => $request->emp_short_description,
                'emp_image' => (@$imageName == "") ? "" : $imageName,
                'emp_phone' => $request->emp_phone,
                'emp_start_date' => date('Y-m-d', strtotime($request->emp_start_date)),
                'emp_create_date' => $request->emp_create_date,
                'emp_email' => $request->emp_email,
                'emp_facebook' => $request->emp_facebook,
                'emp_twitter' => $request->emp_twitter,
                'emp_linked_in' => $request->emp_linked_in,
                'emp_instagram' => $request->emp_instagram,
                'emp_gender' => $request->emp_gender,
                'emp_resume' => (@$filename  == "") ? "" : $filename,
                'emp_resume_text' => $request->emp_resume_text,
                'emp_local_address' => $request->emp_local_address,
                'emp_local_pincode' => $request->emp_local_pincode,
                'emp_local_landmark' => $request->emp_local_landmark,
                'emp_local_city' => $request->emp_local_city,
                'emp_local_state' => $request->emp_local_state,
                'emp_local_country' => $request->emp_local_country,
                'emp_local_phone' => $request->emp_local_phone,
                'emp_parents_address' => $request->emp_parents_address,
                'emp_parents_pincode' => $request->emp_parents_pincode,
                'emp_parents_landmark' => $request->emp_parents_landmark,
                'emp_parents_city' => $request->emp_parents_city,
                'emp_parents_state' => $request->emp_parents_state,
                'emp_parents_country' => $request->emp_parents_country,
                'emp_parents_phone' => $request->emp_parents_phone,
                'emp_friends_guardians_address' => $request->emp_friends_guardians_address,
                'emp_friends_guardians_pincode' => $request->emp_friends_guardians_pincode,
                'emp_friends_guardians_landmark' => $request->emp_friends_guardians_landmark,
                'emp_friends_guardians_city' => $request->emp_friends_guardians_city,
                'emp_friends_guardians_state' => $request->emp_friends_guardians_state,
                'emp_friends_guardians_country' => $request->emp_friends_guardians_country,
                'emp_friends_guardians_friend_phone' => $request->emp_friends_guardians_friend_phone,
                'emp_document_submitted' => implode(",", $request->emp_document_submitted),
                'emp_documnet_other' => $request->emp_documnet_other,
            ];


            $insertedEmployee = $this->create($data);

            if ($insertedEmployee) {

                if ($request->image != "") {

                    $request->image->storeAs('images/employee', $imageName);
                }

                if ($request->emp_resume != "") {

                    $path = $file->storeAs('documents/employee', $filename);
                }
            }


            return redirect()->intended('employee')->with('employee-success', 'Congratulations! employee successfully registered.');



            //return view('user.employee');
            //ser
            //return redirect("login")->with('Congratulations! employee successfully registered.');
        } else {
            return redirect("login")->withSuccess('You You are not allowed to access this page of website. this page of website.');
        }
        //return view('employee.registration');

    }
    public function employeeRegistration(Request $request)
    {
        $request->validate(['name' => 'required', 'email' => 'required|email|unique:users', 'password' => 'required|min:6',]);
        $data = $request->all();
        $check = $this->create($data);
        return redirect("login")->with('success-registration', 'Congratulations! you are successfully registered.');
    }
    public function create(array $data)
    {

        $employee = Employee::create($data);

        $insertedEmployee = Employee::find($employee->emp_id);

        return $insertedEmployee;
    }
    public function dashboard()
    {
        if (Auth::check()) {
            return view('employee.dashboard');
        }
        return redirect("login")->withSuccess('You are not allowed to access this page of website.');
    }
    public function employee()
    {
        if (Auth::check()) {
            return view('employee.employee');
        }
        return redirect("login")->withSuccess('You are not allowed to access this page of website.');
    }
    public function forgotPassord()
    {
        return view('employee.registration');
    }
    public function signOut()
    {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
