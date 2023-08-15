@include('layouts_user.header')
         <div class="page">
            <div id="page_top" class="section-body">
               <div class="container-fluid">
                  <div class="page-header">
                     <div class="left">
                        <h1 class="page-title">Dashboard</h1>
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
                                 <a class="dropdown-item" href="#"><img class="w20 mr-2" src="https://laravel.technorizen.com/resources/user-assets/laravel/public/assets/images/flags/us.svg">English</a>
                                 <div class="dropdown-divider"></div>
                                 <a class="dropdown-item" href="#"><img class="w20 mr-2" src="https://laravel.technorizen.com/resources/user-assets/laravel/public/assets/images/flags/es.svg">Spanish</a>
                                 <a class="dropdown-item" href="#"><img class="w20 mr-2" src="https://laravel.technorizen.com/resources/user-assets/laravel/public/assets/images/flags/jp.svg">japanese</a>
                                 <a class="dropdown-item" href="#"><img class="w20 mr-2" src="https://laravel.technorizen.com/resources/user-assets/laravel/public/assets/images/flags/bl.svg">France</a>
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
                                             <img class="media-object " src="https://laravel.technorizen.com/resources/user-assets/laravel/public/assets/images/xs/avatar4.jpg" alt="">
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
                                             <img class="media-object " src="https://laravel.technorizen.com/resources/user-assets/laravel/public/assets/images/xs/avatar5.jpg" alt="">
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
                                             <img class="media-object " src="https://laravel.technorizen.com/resources/user-assets/laravel/public/assets/images/xs/avatar2.jpg" alt="">
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
                                             <img class="media-object " src="https://laravel.technorizen.com/resources/user-assets/laravel/public/assets/images/xs/avatar3.jpg" alt="">
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
                                 <a class="dropdown-item" href="<?php echo url('profile'); ?>"><i class="dropdown-icon fe fe-user"></i> Profile</a>
                                 <a class="dropdown-item" href="app-setting.html"><i class="dropdown-icon fe fe-settings"></i> Settings</a>
                                 <a class="dropdown-item" href="javascript:void(0)"><span class="float-right"><span class="badge badge-primary">6</span></span><i class="dropdown-icon fe fe-mail"></i> Inbox</a>
                                 <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon fe fe-send"></i> Message</a>
                                 <div class="dropdown-divider"></div>
                                 <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon fe fe-help-circle"></i> Need help?</a>
                                 <a class="dropdown-item" href="{{ route('signout') }}"><i class="dropdown-icon fe fe-log-out"></i> Sign out</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="section-body mt-3">
               <div class="container-fluid">
                   
                  <div class="col-md-12">
                      
                            @if (session('login-success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('login-success') }}
                                </div>
                                {{--session()->forget('login-success')--}}

                            @endif   
                            
                  </div>   
                  
                  <?php

    $request = request();

    if ($request->segment(3) != "" && $request->segment(2) == "edit") {

    ?>

        <?php

        $result = DB::table('departments')
            ->where('id', $request->segment(3))
            ->first();

        // echo "<pre>";

        // print_r($result);

        // echo "</pre>";

        ?>

        <!-- edit logic code here -->

                   
        <?php

    } else {

      $user = DB::table('users')->first();
      $userCount = DB::table('users')->count();
    ?>
                  <div class="row clearfix">
                     <div class="col-lg-12">
                        <div class="mb-4">
                           <h4>Welcome <?php echo @$user->username; ?>!</h4>
                           <small>Measure How Fast You’re Growing Monthly Recurring Revenue. <a href="#">Learn More</a></small>
                        </div>
                     </div>
                  </div>
                  <div class="row clearfix">
                     <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                           <div class="card-body ribbon">
                              <div class="ribbon-box green"><?php echo $userCount; ?></div>
                              <a href="<?php echo url('hr-users'); ?>" class="my_sort_cut text-muted">
                              <i class="icon-users"></i>
                              <span>Users</span>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                           <div class="card-body">
                              <a href="<?php echo url('holidays'); ?>" class="my_sort_cut text-muted">
                              <i class="icon-like"></i>
                              <span>Holidays</span>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                           <div class="card-body ribbon">
                              <div class="ribbon-box orange">8</div>
                              <a href="<?php echo url('events'); ?>" class="my_sort_cut text-muted">
                              <i class="icon-calendar"></i>
                              <span>Events</span>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                           <div class="card-body">
                              <a href="<?php echo url('payroll'); ?>" class="my_sort_cut text-muted">
                              <i class="icon-credit-card"></i>
                              <span>Payroll</span>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                           <div class="card-body">
                              <a href="<?php echo url('accounts'); ?>" class="my_sort_cut text-muted">
                              <i class="icon-calculator"></i>
                              <span>Accounts</span>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                           <div class="card-body">
                              <a href="<?php echo url('reports'); ?>" class="my_sort_cut text-muted">
                              <i class="icon-pie-chart"></i>
                              <span>Report</span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="section-body">
               <div class="container-fluid">
                  <div class="row clearfix row-deck">
                     <div class="col-xl-6 col-lg-12 col-md-12">
                        <div class="card">
                           <div class="card-header">
                              <h3 class="card-title">Salary Statistics</h3>
                              <div class="card-options">
                                 <label class="custom-switch m-0">
                                 <input type="checkbox" value="1" class="custom-switch-input" checked="">
                                 <span class="custom-switch-indicator"></span>
                                 </label>
                              </div>
                           </div>
                           <div class="card-body">
                              <div id="apex-basic-column"></div>
                           </div>
                           <div class="card-footer">
                              <div class="d-flex justify-content-between align-items-center">
                                 <a href="javascript:void(0)" class="btn btn-info btn-sm w200 mr-3">Generate Report</a>
                                 <small>Measure How Fast You’re Growing Monthly Recurring Revenue. <a href="#">Learn More</a></small>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="card">
                           <div class="card-header">
                              <h3 class="card-title">Revenue</h3>
                           </div>
                           <div class="card-body text-center">
                              <div class="mt-4">
                                 <input type="text" class="knob" value="82" data-width="147" data-height="147" data-thickness="0.07" data-bgColor="#3f454a" data-fgColor="#E21E32">
                              </div>
                              <h3 class="mb-0 mt-3 font300"><span class="counter">1,24,301</span> <span class="text-green font-15">+3.7%</span></h3>
                              <small>Lorem Ipsum is simply dummy text <br> <a href="#">Read more</a> </small>
                              <div class="mt-4">
                                 <span class="chart_3">2,5,8,3,6,9,4,5,6,3</span>
                              </div>
                           </div>
                           <div class="card-footer">
                              <a href="javascript:void(0)" class="btn btn-block btn-success btn-sm">Send Report</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="card">
                           <div class="card-header">
                              <h3 class="card-title">My Balance</h3>
                           </div>
                           <div class="card-body">
                              <span>Balance</span>
                              <h4>$<span class="counter">20,508</span></h4>
                              <div id="apexspark1" class="mb-4"></div>
                              <div class="form-group">
                                 <label class="d-block">Bank of America <span class="float-right">$<span class="counter">15,025</span></span></label>
                                 <div class="progress progress-xs">
                                    <div class="progress-bar bg-azure" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="d-block">RBC Bank <span class="float-right">$<span class="counter">1,843</span></span></label>
                                 <div class="progress progress-xs">
                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="d-block">Frost Bank <span class="float-right">$<span class="counter">3,641</span></span></label>
                                 <div class="progress progress-xs">
                                    <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="card-footer">
                              <a href="javascript:void(0)" class="btn btn-block btn-info btn-sm">View More</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row clearfix row-deck">
                     <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="card">
                           <div class="card-header">
                              <h3 class="card-title">Employee Structure</h3>
                           </div>
                           <div class="card-body text-center">
                              <div id="apex-basic-bar" style="height: 220px"></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="card">
                           <div class="card-header">
                              <h3 class="card-title">Employee Satisfaction</h3>
                           </div>
                           <div class="card-body text-center">
                              <div id="apex-radar-multiple-series" style="height: 220px"></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-12 col-md-12">
                        <div class="card">
                           <div class="card-header">
                              <h3 class="card-title">Performance</h3>
                           </div>
                           <div class="card-body">
                              <span>Measure How Fast You’re Growing Monthly Recurring Revenue. <a href="#">Learn More</a></span>
                              <ul class="list-group mt-3 mb-0">
                                 <li class="list-group-item">
                                    <div class="clearfix">
                                       <div class="float-left"><strong>35%</strong></div>
                                       <div class="float-right"><small class="text-muted">Design Team</small></div>
                                    </div>
                                    <div class="progress progress-xs">
                                       <div class="progress-bar bg-azure" role="progressbar" style="width: 35%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                 </li>
                                 <li class="list-group-item">
                                    <div class="clearfix">
                                       <div class="float-left"><strong>25%</strong></div>
                                       <div class="float-right"><small class="text-muted">Developer Team</small></div>
                                    </div>
                                    <div class="progress progress-xs">
                                       <div class="progress-bar bg-green" role="progressbar" style="width: 25%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                 </li>
                                 <li class="list-group-item">
                                    <div class="clearfix">
                                       <div class="float-left"><strong>15%</strong></div>
                                       <div class="float-right"><small class="text-muted">Marketing</small></div>
                                    </div>
                                    <div class="progress progress-xs">
                                       <div class="progress-bar bg-orange" role="progressbar" style="width: 15%" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                 </li>
                                 <li class="list-group-item">
                                    <div class="clearfix">
                                       <div class="float-left"><strong>20%</strong></div>
                                       <div class="float-right"><small class="text-muted">Management</small></div>
                                    </div>
                                    <div class="progress progress-xs">
                                       <div class="progress-bar bg-indigo" role="progressbar" style="width: 20%" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                 </li>
                                 <li class="list-group-item">
                                    <div class="clearfix">
                                       <div class="float-left"><strong>11%</strong></div>
                                       <div class="float-right"><small class="text-muted">Other</small></div>
                                    </div>
                                    <div class="progress progress-xs">
                                       <div class="progress-bar bg-pink" role="progressbar" style="width: 11%" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row clearfix">
                     <div class="col-12 col-sm-12">
                        <div class="card">
                           <div class="card-header">
                              <h3 class="card-title">Project Summary</h3>
                           </div>
                           <div class="card-body">
                              <div class="table-responsive">
                                 <table class="table table-hover table-striped text-nowrap table-vcenter mb-0">
                                    <thead>
                                       <tr>
                                          <th>#</th>
                                          <th>Client Name</th>
                                          <th>Team</th>
                                          <th>Project</th>
                                          <th>Project Cost</th>
                                          <th>Payment</th>
                                          <th>Status</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>#AD1245</td>
                                          <td>Sean Black</td>
                                          <td>
                                             <ul class="list-unstyled team-info sm margin-0 w150">
                                                <li><img src="https://laravel.technorizen.com/resources/user-assets/laravel/public/assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                                <li><img src="https://laravel.technorizen.com/resources/user-assets/laravel/public/assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                                <li><img src="https://laravel.technorizen.com/resources/user-assets/laravel/public/assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                                <li><img src="https://laravel.technorizen.com/resources/user-assets/laravel/public/assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                                                <li class="ml-2"><span>2+</span></li>
                                             </ul>
                                          </td>
                                          <td>Angular Admin</td>
                                          <td>$14,500</td>
                                          <td>Done</td>
                                          <td><span class="tag tag-success">Delivered</span></td>
                                       </tr>
                                       <tr>
                                          <td>#DF1937</td>
                                          <td>Sean Black</td>
                                          <td>
                                             <ul class="list-unstyled team-info sm margin-0 w150">
                                                <li><img src="https://laravel.technorizen.com/resources/user-assets/laravel/public/assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                                <li><img src="https://laravel.technorizen.com/resources/user-assets/laravel/public/assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                                <li><img src="https://laravel.technorizen.com/resources/user-assets/laravel/public/assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                                <li><img src="https://laravel.technorizen.com/resources/user-assets/laravel/public/assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                                                <li class="ml-2"><span>2+</span></li>
                                             </ul>
                                          </td>
                                          <td>Angular Admin</td>
                                          <td>$14,500</td>
                                          <td>Pending</td>
                                          <td><span class="tag tag-success">Delivered</span></td>
                                       </tr>
                                       <tr>
                                          <td>#YU8585</td>
                                          <td>Merri Diamond</td>
                                          <td>
                                             <ul class="list-unstyled team-info sm margin-0 w150">
                                                <li><img src="https://laravel.technorizen.com/resources/user-assets/laravel/public/assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                                <li><img src="https://laravel.technorizen.com/resources/user-assets/laravel/public/assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                             </ul>
                                          </td>
                                          <td>One page html Admin</td>
                                          <td>$500</td>
                                          <td>Done</td>
                                          <td><span class="tag tag-orange">Submit</span></td>
                                       </tr>
                                       <tr>
                                          <td>#AD1245</td>
                                          <td>Sean Black</td>
                                          <td>
                                             <ul class="list-unstyled team-info sm margin-0 w150">
                                                <li><img src="https://laravel.technorizen.com/resources/user-assets/laravel/public/assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                                <li><img src="https://laravel.technorizen.com/resources/user-assets/laravel/public/assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                                <li><img src="https://laravel.technorizen.com/resources/user-assets/laravel/public/assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                                <li><img src="https://laravel.technorizen.com/resources/user-assets/laravel/public/assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                                             </ul>
                                          </td>
                                          <td>Wordpress One page</td>
                                          <td>$1,500</td>
                                          <td>Done</td>
                                          <td><span class="tag tag-success">Delivered</span></td>
                                       </tr>
                                       <tr>
                                          <td>#GH8596</td>
                                          <td>Allen Collins</td>
                                          <td>
                                             <ul class="list-unstyled team-info sm margin-0 w150">
                                                <li><img src="https://laravel.technorizen.com/resources/user-assets/laravel/public/assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                                <li><img src="https://laravel.technorizen.com/resources/user-assets/laravel/public/assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                                <li><img src="https://laravel.technorizen.com/resources/user-assets/laravel/public/assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                                <li><img src="https://laravel.technorizen.com/resources/user-assets/laravel/public/assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                                                <li class="ml-2"><span>2+</span></li>
                                             </ul>
                                          </td>
                                          <td>VueJs Application</td>
                                          <td>$9,500</td>
                                          <td>Done</td>
                                          <td><span class="tag tag-success">Delivered</span></td>
                                       </tr>
                                    </tbody>
                                 </table>
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

<?php

   }

?>

            </div>
         </div>
@include('layouts_user.footer')
