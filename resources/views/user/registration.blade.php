@extends('layouts_user.app')

@section('content')

<main class="signup-form">

   <div class="cotainer">

      <div class="row justify-content-center">

         <div class="col-md-4">

            <div class="card" style="margin-top: 50px;">

               <h3 class="card-header text-center">Register User</h3>

               <div class="card-body">

                  <form action="{{ route('register.user') }}" method="POST">
                     @csrf

                     <div class="form-group mb-3">
                        <input type="text" placeholder="Employee ID" id="employee_id" class="form-control" name="employee_id" required>
                        @if ($errors->has('employee_id'))
                        <span class="text-danger">{{ $errors->first('employee_id') }}</span>
                        @endif
                     </div>

                     <div class="form-group mb-3">
                        <input type="text" placeholder="First Name" id="first_name" class="form-control" name="first_name" required>
                        @if ($errors->has('first_name'))
                        <span class="text-danger">{{ $errors->first('first_name') }}</span>
                        @endif
                     </div>

                     <div class="form-group mb-3">
                        <input type="text" placeholder="Last Name" id="last_name" class="form-control" name="last_name" required>
                        @if ($errors->has('last_name'))
                        <span class="text-danger">{{ $errors->first('last_name') }}</span>
                        @endif
                     </div>

                     <div class="form-group mb-3">
                        <input type="text" placeholder="Username" id="username" class="form-control" name="username" required>
                        @if ($errors->has('username'))
                        <span class="text-danger">{{ $errors->first('username') }}</span>
                        @endif
                     </div>

                     <div class="form-group mb-3">
                        <input type="email" placeholder="Email ID" id="email" class="form-control" name="email" required>
                        @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                     </div>

                     <div class="form-group mb-3">
                        <input type="text" placeholder="Mobile No" id="mobile_no" class="form-control" name="mobile_no" required>
                        @if ($errors->has('mobile_no'))
                        <span class="text-danger">{{ $errors->first('mobile_no') }}</span>
                        @endif
                     </div>

                     <div class="form-group mb-3">
                        <select id="role_type" class="form-control" name="role_type" required>
                           <option>Select Role Type</option>
                           <option value="super_admin">Super Admin</option>
                           <option value="admin">Admin</option>
                           <option value="employee">Employee</option>
                        </select>
                        @if ($errors->has('role_type'))
                        <span class="text-danger">{{ $errors->first('role_type') }}</span>
                        @endif
                     </div>

                     <div class="form-group mb-3">
                        <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                        @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                     </div>

                     <div class="form-group mb-3">
                        <input type="password" placeholder="Confirm Password" id="confirm_password" class="form-control" name="confirm_password" required>
                        @if ($errors->has('confirm_password'))
                        <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                        @endif
                     </div>

                     <!-- Add form fields for other additional fields -->

                     <div class="form-group mb-3" style=" float: right; "><a href="{{ route('login') }}">Already have account?</a></div>


                     <div class="form-group mb-3">
                        <button type="submit" class="btn btn-primary">Register</button>
                     </div>
                  </form>


               </div>

            </div>

         </div>

      </div>

   </div>

</main>

@endsection