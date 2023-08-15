<?php include( app_path() . "/MyConstant/" . "MyConstant.php" );?>
@extends('layouts_admin.header')
@section('content')
@include('layouts_admin.navi')
@include('layouts_admin.header_part')
<?php $breadcrumbs = array("heading"=> "", "links" => array( array("Home","dashboard") , array("Account","account")));  ?>
@include('layouts_admin.breadcrumbs',$breadcrumbs)
<div class="row justify-content-center">
   <div class="col-lg-6">
      <div class="white_card card_height_100 mb_30">
         <div class="white_card_header">
            <div class="box_header m-0">
               <div class="main-title">
                  <h3 class="m-0">Edit Profile</h3>
               </div>
            </div>
         </div>
         <?php $admin_value = DB::table('admins')->where('id', Auth::guard('admin')->id())->get()->first(); ?>
         <div class="white_card_body">
            <form method="POST" action="{{route('admin.account')}}"  enctype="multipart/form-data">
                

                            
               @csrf
                            @if (session('profile-update'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('profile-update') }}
                                </div>
                            @endif               
               
               <label class="form-label" for="basic-url">Profile Image</label>
               <div class="input-group mb-3">
                  <input type="file" name="image"  class="form-control" placeholder="Profile Image" aria-label="Profile Image" aria-describedby="basic-addon1">
               </div>
               <?php if($admin_value->image !=""){ ?>
               <img src="<?php echo $image_path_profile_admin . $admin_value->image; ?>" style="width: 100%;"/>
               <?php } ?>
               @error('username')
               <span class="text-danger">{{$message}}</span>
               @enderror
               <label class="form-label" for="basic-url">Username</label>
               <div class="input-group mb-3">
                  <input type="text"  value="<?php echo @$admin_value->username; ?>" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
               </div>
               @error('first_name')
               <span class="text-danger">{{$message}}</span>
               @enderror
               <label class="form-label" for="basic-url">First Name</label>
               <div class="input-group mb-3">
                  <input type="text" name="first_name" value="<?php echo @$admin_value->first_name; ?>" class="form-control" placeholder="First Name" aria-label="First Name" aria-describedby="basic-addon1">
               </div>
               @error('middle_name')
               <span class="text-danger">{{$message}}</span>
               @enderror
               <label class="form-label" for="basic-url">Middle Name</label>
               <div class="input-group mb-3">
                  <input type="text" name="middle_name" value="<?php echo @$admin_value->middle_name; ?>"  class="form-control" placeholder="Middle Name" aria-label="Middle Name" aria-describedby="basic-addon1">
               </div>
               @error('last_name')
               <span class="text-danger">{{$message}}</span>
               @enderror
               <label class="form-label" for="basic-url">Last Name</label>
               <div class="input-group mb-3">
                  <input type="text" name="last_name" value="<?php echo @$admin_value->last_name; ?>"  class="form-control" placeholder="Last Name" aria-label="Last Name" aria-describedby="basic-addon1">
               </div>
               @error('email')
               <span class="text-danger">{{$message}}</span>
               @enderror
               <label class="form-label" for="basic-url">Email</label>
               <div class="input-group mb-3">
                  <input type="text" name="email" value="<?php echo @$admin_value->email; ?>"  class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
               </div>
               @error('country')
               <span class="text-danger">{{$message}}</span>
               @enderror
               <label class="form-label" for="basic-url">Country</label>
               <div class="input-group mb-3">
                  <select name="country" class="form-control" aria-label="Country" id="inputState" >
                  <?php       
                     $countrys =  DB::table('countrys')->get();
                     
                     foreach ($countrys as $country) {
                         
                         if($country->country_id == $admin_value->country){ 
                         echo '<option selected value='.$country->country_id.'>'.$country->country_name.'</option>';
                         }else{
                         echo '<option value='.$country->country_id.'>'.$country->country_name.'</option>';
                         }
                     }
                     
                     ?>
                  </select>
               </div>
               @error('country_code')
               <span class="text-danger">{{$message}}</span>
               @enderror
               @error('phone_number')
               <span class="text-danger">{{$message}}</span>
               @enderror
               <label class="form-label" for="basic-url">Phone number</label>
               <div class="input-group mb-3">
                  <div class="input-group-text">
                     <select  style='width: 57px;' name="country_code" class="form-control" aria-label="Country Code" id="inputState" >
                     <?php       
                        foreach ($countrys as $country) {
                            
                            if($country->country_phonecode == $admin_value->country_code){ 
                            echo '<option selected value='.$country->country_phonecode.'>'.$country->country_name.'</option>';
                            }else{
                            echo '<option value='.$country->country_phonecode.'>'.$country->country_name.'</option>';
                            }
                            
                        }
                        
                        ?>
                     </select>
                  </div>
                  <input type="text" name="phone_number" value="<?php echo @$admin_value->phone_number; ?>" class="form-control" placeholder="Phone number" aria-label="Phone number" aria-describedby="basic-addon1">
               </div>
               @error('active_status_self')
               <span class="text-danger">{{$message}}</span>
               @enderror
               <label class="form-label" for="basic-url">Self  Status</label>
               <div class="input-group mb-3">
                  <select name="active_status_self" class="form-control" aria-label="Self Staus" id="inputState" >
                     <option <?php   if($admin_value->active_status_self == "ACTIVE"){ echo "selected"; }  ?> >ACTIVE</option>
                     <option <?php   if($admin_value->active_status_self == "DEACTIVE"){  echo "selected"; }  ?> >DEACTIVE</option>
                  </select>
               </div>
               <input type="hidden" name="update_profile" value="update_profile">
               <div class="input-group mb-3">
                  <input type="submit" class="form-control" placeholder= aria-label="submit" value="Submit" aria-describedby="basic-addon1">
               </div>
            </form>
         </div>
      </div>
   </div>
   <div class="col-lg-6">
      <div class="white_card card_height_100 mb_30">
         <div class="white_card_header">
            <div class="box_header m-0">
               <div class="main-title">
                  <h3 class="m-0">Change Password</h3>
               </div>
            </div>
         </div>
         <div class="white_card_body">
            <form method="POST" action="{{route('admin.account')}}"  enctype="multipart/form-data">
               @csrf
               
                            @if (session('password-change'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('password-change') }}
                                </div>
                            @elseif (session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif

               @error('old_password')
               <span class="text-danger">{{$message}}</span>
               @enderror
             
               <label class="form-label" for="basic-url">Old Password</label>
               <div class="input-group mb-3">
                  <input type="password"  value="" name="old_password" class="form-control" placeholder="Old Password" aria-label="Old Password" aria-describedby="basic-addon1">
               </div>

               @error('password')
               <span class="text-danger">{{$message}}</span>
               @enderror
               
               <label class="form-label" for="basic-url">Password</label>
               <div class="input-group mb-3">
                  <input type="password"  value="" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
               </div>
               
               @error('password_confirmation')
               <span class="text-danger">{{$message}}</span>
               @enderror                 
               
               <label class="form-label" for="basic-url">Confirm Password</label>
               <div class="input-group mb-3">
                  <input type="password"  value="" name="password_confirmation" class="form-control" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="basic-addon1">
               </div>               
               <input type="hidden" name="update_password" value="update_password">
               <div class="input-group mb-3">
                  <input type="submit" class="form-control" placeholder= aria-label="submit" value="Submit" aria-describedby="basic-addon1">
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@include('layouts_admin.footer_part')
@include('layouts_admin.footer')
@endsection