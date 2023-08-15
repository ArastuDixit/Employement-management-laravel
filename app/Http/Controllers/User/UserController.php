<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\DB;
use Session;
use App\Models\User\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {
        return view('user.login');
    }


    public function userLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');


        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->with('login-success', 'Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }



    public function registration()
    {
        return view('user.registration');
    }


    public function userRegistration(Request $request)
    {
        $request->validate([
            'employee_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'mobile_no' => 'required',
            'role_type' => 'required',
            'confirm_password' => 'required|same:password',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("login")->with('success-registration', 'Congratulations! you are successfully registered.');
    }


    public function create(array $data)
    {
        return User::create([
            'employee_id' => $data['employee_id'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'mobile_no' => $data['mobile_no'],
            'role_type' => $data['role_type'],

        ]);
    }


    public function dashboard()
    {
        if (Auth::check()) {
            return view('user.dashboard');
        }

        return redirect("login")->withSuccess('are not allowed to access');
    }


    public function employee()
    {
        if (Auth::check()) {
            return view('user.employee');
        }

        return redirect("login")->withSuccess('are not allowed to access');
    }



    public function forgotPassord()
    {
        return view('user.registration');
    }

    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }

    public function users()
    {
        $users = User::all(); // Fetch all users from the users table
        
        return view('user.users', ['users' => $users]);
        // return view('user.users')->with('users', $users);

    }



    public function delete_users(Request $request)
    {
        $id = $request->id;

        $user = User::find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        $user->delete();

        return redirect()->back()->with('success', 'User deleted successfully.');
    }

    public function editUsers(Request $request)
    {
        $id = $request->id;
        $employee_id = $request->employee_id;
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $username = $request->username;
        $email = $request->email;
        $password = $request->password;
        $mobile_no = $request->mobile_no;
        $role_type = $request->role_type;
        $status = $request->status;

        $user = User::find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        $user->employee_id = $employee_id;
        $user->first_name = $first_name;
        $user->last_name = $last_name;
        $user->username = $username;
        $user->email = $email;
        $user->password = Hash::make($password);
        $user->mobile_no = $mobile_no;
        $user->role_type = $role_type;
        $user->status = $status;
        $user->save();

        return redirect('hr-users')->with('success', 'User updated successfully.');
    }

    public function addUser(Request $request)
{
    $input['employee_id'] = $request->employee_id;
    $input['first_name'] = $request->first_name;
    $input['last_name'] = $request->last_name;
    $input['email'] = $request->email;
    $input['role_type'] = $request->role_type;
    $input['mobile_no'] = $request->mobile_no;
    $input['username'] = $request->username;
    $input['password'] = Hash::make($request->password);    
    

    $result = DB::table('users')->insert($input);
    if($result){

    return redirect('hr-users')->with('employee-success', 'Congratulations! User successfully registered.');

    }else{

    return redirect()->back()->with('employee-success', 'Not Insert .');
    }

}
}
