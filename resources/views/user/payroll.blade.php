@include('layouts_user.header')
<div class="page">
   <div id="page_top" class="section-body">
      <div class="container-fluid">
         <div class="page-header">
            <div class="left">
               <h1 class="page-title">Payroll</h1>
               <div class="input-icon xs-hide">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-icon-addon"><i class="fe fe-search"></i></span>
               </div>
            </div>
            <div class="right">
               <ul class="nav nav-pills">
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Language</a>
                     <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"><img class="w20 mr-2" src="https://epic.nsdbytes.com/laravel/public/assets/images/flags/us.svg">English</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><img class="w20 mr-2" src="https://epic.nsdbytes.com/laravel/public/assets/images/flags/es.svg">Spanish</a>
                        <a class="dropdown-item" href="#"><img class="w20 mr-2" src="https://epic.nsdbytes.com/laravel/public/assets/images/flags/jp.svg">japanese</a>
                        <a class="dropdown-item" href="#"><img class="w20 mr-2" src="https://epic.nsdbytes.com/laravel/public/assets/images/flags/bl.svg">France</a>
                     </div>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Reports</a>
                     <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"><i class="dropdown-icon fa fa-file-excel-o"></i> MS Excel</a>
                        <a class="dropdown-item" href="#"><i class="dropdown-icon fa fa-file-word-o"></i> MS Word</a>
                        <a class="dropdown-item" href="#"><i class="dropdown-icon fa fa-file-pdf-o"></i> PDF</a>
                     </div>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Project</a>
                     <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Graphics Design</a>
                        <a class="dropdown-item" href="#">Angular Admin</a>
                        <a class="dropdown-item" href="#">PSD to HTML</a>
                        <a class="dropdown-item" href="#">iOs App Development</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Home Development</a>
                        <a class="dropdown-item" href="#">New Blog post</a>
                     </div>
                  </li>
               </ul>
               <div class="notification d-flex">
                  <div class="dropdown d-flex">
                     <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-success nav-unread"></span></a>
                     <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <ul class="right_chat list-unstyled w250 p-0">
                           <li class="online">
                              <a href="javascript:void(0);">
                                 <div class="media">
                                    <img class="media-object " src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar4.jpg')}}" alt="">
                                    <div class="media-body">
                                       <span class="name">Donald Gardner</span>
                                       <span class="message">Designer, Blogger</span>
                                       <span class="badge badge-outline status"></span>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="online">
                              <a href="javascript:void(0);">
                                 <div class="media">
                                    <img class="media-object " src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar5.jpg')}}" alt="">
                                    <div class="media-body">
                                       <span class="name">Wendy Keen</span>
                                       <span class="message">Java Developer</span>
                                       <span class="badge badge-outline status"></span>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="offline">
                              <a href="javascript:void(0);">
                                 <div class="media">
                                    <img class="media-object " src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar2.jpg')}}" alt="">
                                    <div class="media-body">
                                       <span class="name">Matt Rosales</span>
                                       <span class="message">CEO, Epic Theme</span>
                                       <span class="badge badge-outline status"></span>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="online">
                              <a href="javascript:void(0);">
                                 <div class="media">
                                    <img class="media-object " src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar3.jpg')}}" alt="">
                                    <div class="media-body">
                                       <span class="name">Phillip Smith</span>
                                       <span class="message">Writter, Mag Editor</span>
                                       <span class="badge badge-outline status"></span>
                                    </div>
                                 </div>
                              </a>
                           </li>
                        </ul>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0)" class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
                     </div>
                  </div>
                  <div class="dropdown d-flex">
                     <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="badge badge-primary nav-unread"></span></a>
                     <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <ul class="list-unstyled feeds_widget">
                           <li>
                              <div class="feeds-left"><i class="fa fa-check"></i></div>
                              <div class="feeds-body">
                                 <h4 class="title text-danger">Issue Fixed <small class="float-right text-muted">11:05</small></h4>
                                 <small>WE have fix all Design bug with Responsive</small>
                              </div>
                           </li>
                           <li>
                              <div class="feeds-left"><i class="fa fa-user"></i></div>
                              <div class="feeds-body">
                                 <h4 class="title">New User <small class="float-right text-muted">10:45</small></h4>
                                 <small>I feel great! Thanks team</small>
                              </div>
                           </li>
                           <li>
                              <div class="feeds-left"><i class="fa fa-thumbs-o-up"></i></div>
                              <div class="feeds-body">
                                 <h4 class="title">7 New Feedback <small class="float-right text-muted">Today</small></h4>
                                 <small>It will give a smart finishing to your site</small>
                              </div>
                           </li>
                           <li>
                              <div class="feeds-left"><i class="fa fa-question-circle"></i></div>
                              <div class="feeds-body">
                                 <h4 class="title text-warning">Server Warning <small class="float-right text-muted">10:50</small></h4>
                                 <small>Your connection is not private</small>
                              </div>
                           </li>
                           <li>
                              <div class="feeds-left"><i class="fa fa-shopping-cart"></i></div>
                              <div class="feeds-body">
                                 <h4 class="title">7 New Orders <small class="float-right text-muted">11:35</small></h4>
                                 <small>You received a new oder from Tina.</small>
                              </div>
                           </li>
                        </ul>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0)" class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
                     </div>
                  </div>
                  <div class="dropdown d-flex">
                     <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-user"></i></a>
                     <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="page-profile.html"><i class="dropdown-icon fe fe-user"></i> Profile</a>
                        <a class="dropdown-item" href="app-setting.html"><i class="dropdown-icon fe fe-settings"></i> Settings</a>
                        <a class="dropdown-item" href="javascript:void(0)"><span class="float-right"><span class="badge badge-primary">6</span></span><i class="dropdown-icon fe fe-mail"></i> Inbox</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon fe fe-send"></i> Message</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon fe fe-help-circle"></i> Need help?</a>
                        <a class="dropdown-item" href="login.html"><i class="dropdown-icon fe fe-log-out"></i> Sign out</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
<?php
$request = request();

if ($request->segment(3) != "" && $request->segment(2) == "edit") {
    $payrollId = $request->segment(3);

    // Retrieve the payroll record based on the ID
    $payroll = DB::table('payroll')
        ->where('id', $payrollId)
        ->first();

    // Check if the payroll record exists
    if (!$payroll) {
        return redirect()->back()->with('employee-success', 'Payroll not found.');
    }

    // Retrieve the associated employee record
    $employee = DB::table('employees')
        ->where('emp_id', $payroll->emp_id)
        ->first();

    // Check if the employee record exists
    if (!$employee) {
        return redirect()->back()->with('employee-success', 'Employee not found.');
    }


?>
<div class="section-body">
    <div class="container-fluid">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="Employee-list" role="tabpanel">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Update Payroll Detail</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('edit-payroll') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="">
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <h6 style="background: #edeff3;padding: 10px;">Employee Payroll Information</h6>
                                        <input type="hidden" name="id" value="{{ $payroll->id ?? '' }}">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label for="emp_id">Employee ID</label>
                                                    <select class="form-control" name="emp_id">
                                                        <option>Select Employee ID</option>
                                                        @foreach ($employees as $emp)
                                                        <option value="{{ $emp->emp_id }}" {{ ($employee && $employee->emp_id == $emp->emp_id) ? 'selected' : '' }}>
                                                            {{ $emp->emp_id }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Display employee-related fields -->
                                            @if ($employee)
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label for="emp_first_name">First Name</label>
                                                    <input type="text" class="form-control" name="emp_first_name" value="{{ $employee->emp_first_name }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label for="emp_last_name">Last Name</label>
                                                    <input type="text" class="form-control" name="emp_last_name" value="{{ $employee->emp_last_name }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label for="emp_role">Role</label>
                                                    <input type="text" class="form-control" name="emp_role" value="{{ $employee->emp_role }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label for="emp_image">Image</label>
                                                    <input type="text" class="form-control" name="emp_image" value="{{ $employee->emp_image }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label for="emp_email">Email</label>
                                                    <input type="text" class="form-control" name="emp_email" value="{{ $employee->emp_email }}" readonly>
                                                </div>
                                            </div>
                                            @endif
                                            <!-- End of employee-related fields -->

                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="basic_salary">Basic Salary</label>
                                                    <input type="number" step="0.01" class="form-control" name="basic_salary" placeholder="Basic Salary" value="{{ $payroll->basic_salary ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="hra">House Rent Allowance</label>
                                                    <input type="number" step="0.01" class="form-control" name="hra" placeholder="Enter HRA" value="{{ $payroll->hra ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="tds">Tax Deducted at Source</label>
                                                    <input type="number" step="0.01" class="form-control" name="tds" placeholder="Enter TDS" value="{{ $payroll->tds ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="pf">Provident Fund</label>
                                                    <input type="number" step="0.01" class="form-control" name="pf" placeholder="Enter PF" value="{{ $payroll->pf ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="esic">ESIC</label>
                                                    <input type="number" step="0.01" class="form-control" name="esic" placeholder="Enter ESIC" value="{{ $payroll->esic ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="bank_loan">Bank Loan</label>
                                                    <input type="number" step="0.01" class="form-control" name="bank_loan" placeholder="Enter Bank Loan" value="{{ $payroll->bank_loan ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="allowance">Other Allowance</label>
                                                    <input type="number" step="0.01" class="form-control" name="allowance" placeholder="Enter Allowance" value="{{ $payroll->allowance ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="total_salary">Total Salary</label>
                                                    <input type="number" step="0.01" class="form-control" name="total_salary" placeholder="Enter Total Salary" value="{{ $payroll->total_salary ?? '' }}">
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <select class="form-control show-tick" name="status">
                                                        <option>Status</option>
                                                        <option value="done" {{ $payroll->status == 'Done' ? 'selected' : '' }}>Done</option>
                                                        <option value="pending" {{ $payroll->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <style>
                                            .select2-container--default {
                                                width: 100% !important;
                                            }
                                        </style>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href='/payroll'">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 
    
      <div class="section-body">
      <footer class="footer">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6 col-sm-12">
                  Copyright © 2019 <a href="https://themeforest.net/user/puffintheme/portfolio">PuffinTheme</a>.
               </div>
               <div class="col-md-6 col-sm-12 text-md-right">
                  <ul class="list-inline mb-0">
                     <li class="list-inline-item"><a href="javascript:void(0)">Documentation</a></li>
                     <li class="list-inline-item"><a href="javascript:void(0)">FAQ</a></li>
                     <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-outline-primary btn-sm">Buy Now</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </footer>
   </div>
   <?php
      } else {
      
      ?>
   <br>
   <div class="section-body">
      <div class="container-fluid">
         <div class="d-flex justify-content-between align-items-center">
            <ul class="nav nav-tabs page-header-tab">
               <li class="nav-item"><a class="nav-link active" id="Payroll-tab" data-toggle="tab" href="#Payroll-Salary">Employee Salary</a></li>
               <li class="nav-item"><a class="nav-link" id="Payroll-tab" data-toggle="tab" href="#Payroll-Payslip">Payslip</a></li>
            </ul>
            <div class="header-action">
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fe fe-plus mr-2"></i>Add</button>
            </div>
         </div>
      </div>
   </div>
   
   <div class="section-body mt-3">
      <div class="container-fluid">
         <div class="tab-content mt-3">
            <div class="tab-pane fade show active" id="Payroll-Salary" role="tabpanel">
               <div class="row clearfix">
               <?php
               $result = DB::table('payroll')->get()->toArray();
               $roleCounts = []; // Store the role counts
               foreach ($result as $result_in) {
                  $empRole = $result_in->emp_role;
                  $salary = $result_in->total_salary;

                  // Increment the role count
                  if (isset($roleCounts[$empRole])) {
                     $roleCounts[$empRole]++;
                  } else {
                     $roleCounts[$empRole] = 1;
                  }
               ?>
                  <div class="col-lg-3 col-md-6">
                     <div class="card">
                        <div class="card-body">
                        <h6><?php echo $empRole; ?></h6>
                        <h3 class="pt-3">$<span class="counter"><?php echo $salary; ?></span></h3>
                        <span>
                           <?php if (isset($roleCounts[$empRole])) { ?>
                              <span class="text-success mr-2"><i class="fa fa-long-arrow-up"></i> <?php echo $roleCounts[$empRole]; ?> employees</span>
                           <?php } ?>
                           </span>
                        </div>
                     </div>
                  </div>
                  
                  <?php } ?>
               </div>
               <div class="card">
                  <div class="card-header">
                     <h3 class="card-title">Employee</h3>
                     <div class="card-options">
                        <form>
                           <div class="input-group">
                              <input type="text" class="form-control form-control-sm" placeholder="Search something..." name="s">
                              <span class="input-group-btn ml-2"><button class="btn btn-icon" type="submit"><span class="fe fe-search"></span></button></span>
                           </div>
                        </form>
                     </div>
                  </div>

                  <style>
                     .paginate_button {
                     padding: 5px;
                     }
                     div#myTable_paginate {
                     margin-top: 10px;
                     }
                  </style>
                  <link href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.css">
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                  <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.js"></script>
                  <script>
                     $(document).ready(function() {
                     
                        $('#myTable').DataTable({
                     
                           "order": [
                              [0, "desc"]
                           ] // order the first column by descending order
                     
                        });
                     
                     });
                  </script>
                  <div class="card-body">
                     <div class="table-responsive">
                        <table id="myTable" class="table table-hover table-striped table-vcenter text-nowrap">
                           <thead>
                              <tr>
                                 <th style="width: 20px;">#</th>
                                 <th>Employee</th>
                                 <th class="w200">Role</th>
                                 <th class="w60">Salary</th>
                                 <th class="w60">Status</th>
                                 <th class="w200">Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php 
                                 $result = DB::table('payroll')->get()->toArray();
                                  $i = 1;
                                 foreach ($result as $result_in) {
                                 
                                    $firstName = ucfirst($result_in->emp_first_name);
                                    $lastName = ucfirst($result_in->emp_last_name);
                                 ?>
                                 <tr>
                                 <td>
                                    <span><?php echo $result_in->id; ?></span>
                                 </td>
                                 <td>
                                    <div class="d-flex align-items-center">
                                       <span class="avatar avatar-pink" data-toggle="tooltip" data-placement="top" title="Avatar Name"><?php echo substr($firstName, 0, 1) . substr($lastName, 0, 1); ?></span>
                                       <div class="ml-3">
                                          <a href="javascript:void(0);" title=""><?php echo $result_in->emp_first_name; ?></a>
                                          <p class="mb-0"><a href="https://epic.nsdbytes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="85f6eaf0f1edabf6edfce4ebebe0c5e0fde4e8f5e9e0abe6eae8"><?php echo $result_in->emp_email; ?></a></p>
                                       </div>
                                    </div>
                                 </td>
                                 <td><?php echo $result_in->emp_role; ?></td>
                                 <td><?php echo $result_in->total_salary; ?></td>
                                 <td><span class="tag tag-success ml-0 mr-0"><?php echo $result_in->status; ?></span></td>
                                 <td>
                                    <a href="/payroll/edit/<?php echo $result_in->id; ?>" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
                                    <button type="button" class="btn btn-icon" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                    <button type="button" class="btn btn-icon " title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                    <button type="button" class="btn btn-icon" title="Delete" data-toggle="tooltip" data-placement="top" onclick="deleteUser('{{$result_in->id}}')"><i class="icon-trash text-danger"></i></button>
                                 </td>
                              </tr>
                              <?php $i++;
                                 } ?>
                           </tbody>
                        </table>
                     </div>
                     
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="Payroll-Payslip" role="tabpanel">
               <div class="card">
                  <div class="card-body">
                     <div class="media mb-4">
                        <div class="mr-3">
                           <img class="rounded" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar4.jpg')}}" alt="">
                        </div>
                        <div class="media-body">
                           <div class="content">
                              <span><strong>Order ID: </strong> C09</span>
                              <p class="h5">John Smith <small class="float-right badge badge-primary">Jun 15, 2019</small></p>
                              <p>795 Folsom Ave, Suite 546 San Francisco, CA 54656</p>
                           </div>
                           <nav class="d-flex text-muted">
                              <a href="javascript:void(0);" class="icon mr-3"><i class="icon-envelope text-info"></i></a>
                              <a href="javascript:void(0);" class="icon mr-3"><i class="icon-printer"></i></a>
                           </nav>
                        </div>
                     </div>
                     <div class="table-responsive">
                        <table class="table table-hover table-striped table-vcenter text-nowrap">
                           <thead class="dark-mode">
                              <tr>
                                 <th class="w60">#</th>
                                 <th></th>
                                 <th class="w100">Earnings</th>
                                 <th class="w100">Deductions</th>
                                 <th class="w100 text-right">Total</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>01</td>
                                 <td>
                                    <span>Basic Salary</span>
                                 </td>
                                 <td>$1,500</td>
                                 <td>-</td>
                                 <td class="text-right">$380</td>
                              </tr>
                              <tr>
                                 <td>02</td>
                                 <td>
                                    <span>House Rent Allowance (H.R.A.)</span>
                                 </td>
                                 <td>$62</td>
                                 <td>-</td>
                                 <td class="text-right">$250</td>
                              </tr>
                              <tr>
                                 <td>03</td>
                                 <td>
                                    <span>Tax Deducted at Source (T.D.S.)</span>
                                 </td>
                                 <td>-</td>
                                 <td>$80</td>
                                 <td class="text-right">$120</td>
                              </tr>
                              <tr>
                                 <td>04</td>
                                 <td>
                                    <span>C/Bank Loan</span>
                                 </td>
                                 <td>-</td>
                                 <td>$120</td>
                                 <td class="text-right">$120</td>
                              </tr>
                              <tr>
                                 <td>05</td>
                                 <td>
                                    <span>Other Allowance</span>
                                 </td>
                                 <td>$121</td>
                                 <td>-</td>
                                 <td class="text-right">$120</td>
                              </tr>
                           </tbody>
                           <tfoot>
                              <tr>
                                 <td colspan="2"><span><strong>Note:</strong> Ipsum is simply dummy text of the printing and typesetting industry.</span></td>
                                 <td>$1683</td>
                                 <td>$200</td>
                                 <td class="text-right">
                                    <strong class="text-success">$1483.00</strong>
                                 </td>
                              </tr>
                           </tfoot>
                        </table>
                        <button class="btn btn-info float-right"><i class="icon-printer"></i> Print</button>
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>
   <div class="section-body">
      <footer class="footer">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6 col-sm-12">
                  Copyright © 2019 <a href="https://themeforest.net/user/puffintheme/portfolio">PuffinTheme</a>.
               </div>
               <div class="col-md-6 col-sm-12 text-md-right">
                  <ul class="list-inline mb-0">
                     <li class="list-inline-item"><a href="javascript:void(0)">Documentation</a></li>
                     <li class="list-inline-item"><a href="javascript:void(0)">FAQ</a></li>
                     <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-outline-primary btn-sm">Buy Now</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </footer>
   </div>
   <?php
      }
      
      ?>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
         <form id="payrollForm" action="{{route('add-payroll')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Add Employee Payroll</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
               <div class="row clearfix">
                  <!------------------------------------------------>
                  <div class="col-md-12">
                     <h6 style="background: #edeff3;padding: 10px;">Employee Payroll Information</h6>
                     <div class="row">
                        <div class="row clearfix">
                           <div class="col-lg-12 col-md-12 col-sm-12">
                              <div class="form-group">
                                 <select class="form-control" name="emp_id" id="emp_id">
                                    <option value="">Select Employee ID</option>
                                    @foreach ($employees as $employee)
                                       <option value="{{ $employee->emp_id }}">{{ $employee->emp_id }}</option>
                                    @endforeach
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="form-group">
                                 <input type="text" class="form-control" name="emp_first_name" placeholder="First Name" readonly>
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="form-group">
                                 <input type="text" class="form-control" name="emp_last_name" placeholder="Last Name" readonly>
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="form-group">
                                 <input type="text" class="form-control" name="emp_role" placeholder="Employee Role" readonly>
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="form-group">
                                 <input type="text" class="form-control" name="emp_image" placeholder="Employee Image" readonly>
                              </div>
                           </div>
                           <div class="col-md-4 col-sm-12">
                              <div class="form-group">
                                 <input type="text" class="form-control" name="emp_email" placeholder="Email ID" readonly>
                              </div>
                           </div>
                           <div class="col-md-4 col-sm-12">
                              <div class="form-group">
                                 <input type="number" step="0.01" class="form-control" name="basic_salary" placeholder="Enter Basic Salary">
                              </div>
                           </div>
                           <div class="col-md-4 col-sm-12">
                              <div class="form-group">
                                 <input type="number" step="0.01" class="form-control" name="hra" placeholder="Enter HRA">
                              </div>
                           </div>
                           <div class="col-md-4 col-sm-12">
                              <div class="form-group">
                                 <input type="number" step="0.01" class="form-control" name="tds" placeholder="Enter TDS">
                              </div>
                           </div>
                           <div class="col-md-4 col-sm-12">
                              <div class="form-group">
                                 <input type="number" step="0.01" class="form-control" name="pf" placeholder="Enter PF">
                              </div>
                           </div>
                           <div class="col-md-4 col-sm-12">
                              <div class="form-group">
                                 <input type="number" step="0.01" class="form-control" name="bank_loan" placeholder="Enter Bank Loan">
                              </div>
                           </div>
                           <div class="col-md-4 col-sm-12">
                              <div class="form-group">
                                 <input type="number" step="0.01" class="form-control" name="allowance" placeholder="Enter Allowance">
                              </div>
                           </div>
                           <div class="col-md-4 col-sm-12">
                              <div class="form-group">
                                 <input type="number" step="0.01" class="form-control" name="total_salary" placeholder="Enter Total Salary">
                              </div>
                           </div>
                           
                           <div class="col-md-4 col-sm-12">
                              <div class="form-group">
                                 <select class="form-control show-tick" name="status">
                                    <option>Status</option>
                                    <option>Done</option>
                                    <option>Pending</option>
                                </select>
                              </div>
                           </div>
                           
                           <div class="col-12">
                              <hr class="mt-4">
                              
                              <style>
                                 .select2-container--default {
                                 width: 100% !important;
                                 }
                              </style>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
         </form>
         </div>
         </div>
      </div>
      <input type="hidden" name="csrf_token" value="<?php echo csrf_token(); ?>">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-MHOMs1c/yafN+2b4ByI4+zeT7WQOuTsjE6ndMf5pY9XK6iB6Lh70+a7oxJtkRJGQc9N7clD0JQPlzUQbTJiHmw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js" integrity="sha512-GLwtmK0qmv7KMdHIO/bVnG1tCwo6jAzOulGFapIjwU5a5W/uGtX6tmPhL9puX0tawGiSKzJmrYx2XPlQl+LrMw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js" integrity="sha512-k9Zvn6N+tBqorQDvNYy8EaV5BDgBLU2HCVLqzwWm5cyH/7jvSlrzpdd6+ef+6nZypf+QUChilB1A/lN8BbyiJg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
      <script>
         function redirectToHrUsers() {
            window.location.href = "{{ route('payroll') }}";
         }
      </script>
      <script type="text/javascript">
         var rakesh = $.noConflict();
         
         rakesh(document).ready(function() {
         
            rakesh('.songs').select2();
         
         });
         
         function deleteUser(id)
         
         {
         
            swal({
         
                  title: "Are you sure?",
         
                  text: "You want to permanently remove this item!",
         
                  type: "warning",
         
                  showCancelButton: true,
         
                  confirmButtonColor: "#DD6B55",
         
                  confirmButtonText: "Yes, delete it!",
         
                  closeOnConfirm: false
         
               },
         
               function() {
         
                  $.ajaxSetup({
         
                     headers: {
         
                        'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content'),
         
                     }
         
                  });
         
                  var token = $('input[name="csrf_token"]').val();
         
                  $.ajax({
         
                     url: "<?= url('delete_payroll') ?>",
         
                     data: {
                        'table': 'payroll',
                        'id': id,
                        '_token': token
                     }, // change this to send js object
         
                     type: "POST",
         
                     success: function(result) {
         
                        //alert(result);
         
                        swal("Deleted!", "Your selected item has been deleted.", "success");
         
                        $('.confirm').click(function() {
         
                           location.reload();
         
                        });
                     }
         
                  });
         
               });
         
         }
      </script>
   </div>
   
@include('layouts_user.footer')