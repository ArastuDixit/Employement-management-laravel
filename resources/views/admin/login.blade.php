@extends('layouts_admin.app')
@section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card" style="margin-top: 50px;">
                    
                    @if(session('success'))
                             <p style="text-align: center; background: #cd3232; font-weight: bold; color: white;">{{session('success')}}</p>
                    @endif

                    @if(session('success-registration'))
                             <p style="text-align: center; background: #32cd37; font-weight: bold; color: white;">{{session('success-registration')}}</p>
                    @endif
                     
                    <h3 class="card-header text-center">Admin Login</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login.admin') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                    autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
 
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
 
                            <div class="form-group mb-3" style=" float: left; ">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
 
 
                            <div class="form-group mb-3" style="float: right;text-align: right;" >
                                
                                <a href="{{ route('register-admin') }}">Create account?</a> <br>
                                <a href="{{ route('forgot-password') }}">Forgot password?</a>
                            </div>
 
                            <div class="d-grid mx-auto" style=" margin-bottom: 10px; ">
                                <button type="submit" class="btn btn-dark btn-block">Signin</button>
                            </div>
                            
                            <div class="form-group mb-3" style=" text-align: center; "> <a href="/">Go to Website</a> </div>
                        </form>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection