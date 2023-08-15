<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Admin\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Config;
class AdminController extends Controller {
    
    public function view($page = "dashboard") {
        return view('admin.'.$page);
    }    
    
    public function admin() {
        return view('admin.login');
    }
    public function index() {
        return view('admin.login');
    }
    public function adminLogin(Request $request) {
        $request->validate(['email' => 'required', 'password' => 'required', ]);
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('admin/dashboard')->with('login-success','Login Successfully!');
        }

        return redirect("admin/login")->withSuccess('Login details are not valid');
    }
    public function registration() {
        return view('admin.registration');
    }
    public function account(Request $request) {
        
        $admin_data = Admin::where('id', Auth::guard('admin')->id())->get()->first();

        if (isset($_POST['update_password'])) {



            
            $request->validate([
            'password' => 'required|confirmed',
            'old_password' => 'required',
            'password_confirmation' => 'required',
            ]);
            
 

            #Match The Old Password
            if(!Hash::check($request->old_password, $admin_data->password)){
            return back()->with("error", "Old Password Doesn't match!");
            }


            #Update the new Password
            Admin::whereId(Auth::guard('admin')->id())->update([
            'password' => Hash::make($request->password)
            ]);
        
        
             return back()->with("password-change", "Change Password Successfully!");


        }
        
        if (isset($_POST['update_profile'])) {
            $old_image = $admin_data->image;
            $update_array = ['first_name' => $request->first_name, 'middle_name' => $request->middle_name, 'last_name' => $request->last_name, 'username' => $request->username, 'email' => $request->email, 'country' => $request->country, 'country_code' => $request->country_code, 'phone_number' => $request->phone_number, 'active_status_self' => $request->active_status_self, ];
            $validate_array = ['first_name' => 'required|max:255', 'middle_name' => 'required|max:255', 'last_name' => 'required|max:255', 'country' => 'required|max:255', 'country_code' => 'required|max:255', 'active_status_self' => 'required|max:255', ];
            if ($admin_data['username'] != $request->username) {
                $validate_array['username'] = 'required|max:255|unique:admins';
            }
            if ($admin_data['email'] != $request->email) {
                $validate_array['email'] = 'required|email|unique:admins|max:255';
            }
            if ($admin_data['phone_number'] != $request->phone_number) {
                $validate_array['phone_number'] = 'required|unique:admins|max:255';
            }
            $request->validate($validate_array);
            if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != "") {
                $request->validate(['image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', ]);
                $imageName = time() . "_" . rand(1, 100000) . "_ADMIN_PROFILE_IMAGE" . '.' . $request->image->extension();
                $request->image->move(public_path('images/admin/profile'), $imageName);
                $image_path_profile_admin = Config::get('constants.image_path_profile_admin');
                $old_image_remove = rtrim(app_path(), "app") . $image_path_profile_admin . $old_image;
                @unlink($old_image_remove);
                $update_array['image'] = $imageName;
            }
            Admin::where('id', Auth::guard('admin')->id())->update($update_array);
            
             return back()->with("profile-update", "Profile Update Successfully!");

        }
        
        return view('admin.account');
    }
    public function adminRegistration(Request $request) {
        echo "<pre>";
        print_r($_POST);
        die;
        $request->validate(['first_name' => 'required', 'email' => 'required', //'required|email|unique:admins',
        'password' => 'required', //'required|min:6',
        /*
            'first_name' => 'required', 
            'middel_name' => 'required',
            'last_name' => 'required', 
            'phone_number' => 'required', 
            'country' => 'required',
            'country_code' => 'required',
            'active_status' => 'required', 
            'delete_status' => 'required',
            'image' => 'required',
            'username' => 'required',
        */
        ]);
        die;
        $data = $request->all();
        $check = $this->create($data);
        return redirect("admin/login")->with('success-registration', 'Congratulations! you are successfully registered.');
    }
    public function create(array $data) {
        return admin::create(['first_name' => $data['first_name'], 'email' => $data['email'], 'password' => Hash::make($data['password']) ]);
    }
    public function dashboard() {
        //if(Auth::guard('admin')->check()){
        
        return view('admin.dashboard');
        //}
        return redirect("admin/login")->withSuccess('are not allowed to access');
    }
    public function signOut() {
        Session::flush();
        Auth::guard('admin')->logout();
        return Redirect('admin/login');
    }
}
