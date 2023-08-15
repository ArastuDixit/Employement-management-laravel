@include('layouts_user.header')

<div class="page">
   <div>
      <div id="page_top" class="section-body  ">
         <div class="container-fluid">
            <div class="page-header">
               <div class="left">
                  <h1 class="page-title">Project Dashboard</h1>
                  <select class="custom-select">
                     <option>Year</option>
                     <option>Month</option>
                     <option>Week</option>
                  </select>
                  <div class="input-group xs-hide"><input type="text" class="form-control" placeholder="Search..."></div>
               </div>
               <div class="right">
                  <ul class="nav nav-pills">
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Language</a>
                        <div class="dropdown-menu">
                           <a class="dropdown-item"><img class="w20 mr-2" src="../assets/images/flags/us.svg" alt="fake_url">English</a>
                           <div class="dropdown-divider"></div>
                           <a class="dropdown-item"><img class="w20 mr-2" src="../assets/images/flags/es.svg" alt="fake_url">Spanish</a><a class="dropdown-item"><img class="w20 mr-2" src="../assets/images/flags/jp.svg" alt="fake_url">japanese</a><a class="dropdown-item"><img class="w20 mr-2" src="../assets/images/flags/bl.svg" alt="fake_url">France</a>
                        </div>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reports</a>
                        <div class="dropdown-menu"><a class="dropdown-item"><i class="dropdown-icon fa fa-file-excel-o"></i> MS Excel</a><a class="dropdown-item"><i class="dropdown-icon fa fa-file-word-o"></i> MS Word</a><a class="dropdown-item"><i class="dropdown-icon fa fa-file-pdf-o"></i> PDF</a></div>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Project</a>
                        <div class="dropdown-menu">
                           <a class="dropdown-item">Graphics Design</a><a class="dropdown-item">Angular Admin</a><a class="dropdown-item">PSD to HTML</a><a class="dropdown-item">iOs App Development</a>
                           <div class="dropdown-divider"></div>
                           <a class="dropdown-item">Home Development</a><a class="dropdown-item">New Blog post</a>
                        </div>
                     </li>
                  </ul>
                  <div class="notification d-flex">
                     <div class="dropdown d-flex">
                        <a href="/#" class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-success nav-unread"></span></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                           <ul class="right_chat list-unstyled w250 p-0">
                              <li class="online">
                                 <a href="fake_url">
                                    <div class="media">
                                       <img class="media-object " src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar4.jpg')}}" alt="fake_url">
                                       <div class="media-body"><span class="name">Donald Gardner</span><span class="message">Designer, Blogger</span><span class="badge badge-outline status"></span></div>
                                    </div>
                                 </a>
                              </li>
                              <li class="online">
                                 <a href="fake_url">
                                    <div class="media">
                                       <img class="media-object " src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar5.jpg')}}" alt="fake_url">
                                       <div class="media-body"><span class="name">Wendy Keen</span><span class="message">Java Developer</span><span class="badge badge-outline status"></span></div>
                                    </div>
                                 </a>
                              </li>
                              <li class="offline">
                                 <a href="fake_url">
                                    <div class="media">
                                       <img class="media-object " src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar2.jpg')}}" alt="fake_url">
                                       <div class="media-body"><span class="name">Matt Rosales</span><span class="message">CEO, Epic Theme</span><span class="badge badge-outline status"></span></div>
                                    </div>
                                 </a>
                              </li>
                              <li class="online">
                                 <a href="fake_url">
                                    <div class="media">
                                       <img class="media-object " src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar3.jpg')}}" alt="fake_url">
                                       <div class="media-body"><span class="name">Phillip Smith</span><span class="message">Writter, Mag Editor</span><span class="badge badge-outline status"></span></div>
                                    </div>
                                 </a>
                              </li>
                           </ul>
                           <div class="dropdown-divider"></div>
                           <a class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
                        </div>
                     </div>
                     <div class="dropdown d-flex">
                        <a href="/#" class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="badge badge-primary nav-unread"></span></a>
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
                           <a href="fake_url" class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
                        </div>
                     </div>
                     <div class="dropdown d-flex">
                        <a href="/#" class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-user"></i></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                           <a class="dropdown-item" href="/profile"><i class="dropdown-icon fe fe-user"></i> Profile</a><a class="dropdown-item"><i class="dropdown-icon fe fe-settings"></i> Settings</a><a class="dropdown-item"><span class="float-right"><span class="badge badge-primary">6</span></span><i class="dropdown-icon fe fe-mail"></i> Inbox</a><a class="dropdown-item"><i class="dropdown-icon fe fe-send"></i> Message</a>
                           <div class="dropdown-divider"></div>
                           <a class="dropdown-item"><i class="dropdown-icon fe fe-help-circle"></i> Need help?</a><a class="dropdown-item" href="{{asset('signout')}}"><i class="dropdown-icon fe fe-log-out"></i> Sign out</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


<?php

    $request = request();

    if ($request->segment(3) != "" && $request->segment(2) == "edit") {

    ?>

        <?php

        $result = DB::table('projectdashboard')
            ->where('id', $request->segment(3))
            ->first();

        // echo "<pre>";

        // print_r($result);

        // echo "</pre>";

        ?>

<div class="section-body">

            <div class="container-fluid">

                <div class="tab-content">

                    <div class="tab-pane fade show active" id="Employee-list" role="tabpanel">

                        <div class="card">

                            <div class="card-header">

                                <h3 class="card-title">Update Project Detail</h3>

                            </div>

                            <div class="card-body">

                                <form action="{{ route('edit-project-dashboard') }}" method="post" enctype="multipart/form-data">

                                    @csrf

                                    <div class="">

                                        <div class="row clearfix">

                                            <!------------------------------------------------>

                                            <div class="col-md-12">

                                                <h6 style="background: #edeff3;padding: 10px;">Project Information</h6>

                                                <input type="hidden" name="id" value="<?php echo @$result->id; ?>">


                                                <div class="row">

                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label for="invoice_no">Invoice No.</label>
                                                            <input type="text" class="form-control" name="invoice_no" value="<?php echo @$result->invoice_no; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 col-md-12 col-sm-12">

                                                        <div class="form-group">

                                                            <label for="client_name">Client Name</label>

                                                            <input type="text" class="form-control" name="client_name" value="<?php echo @$result->client_name; ?>">

                                                        </div>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12">

                                                        <div class="form-group">

                                                            <label for="team">Team</label>

                                                            <input type="text" class="form-control" name="team" value="<?php echo @$result->team; ?>">

                                                        </div>
                                                  </div>
                                                    
                                                        <div class="col-lg-6 col-md-6 col-sm-12">

                                                        <div class="form-group">

                                                            <label for="project_name">Project Name</label>

                                                            <input type="text" class="form-control" name="project_name" value="<?php echo @$result->project_name; ?>">

                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                            <label for="project_cost">Project Cost</label>
                                                            <input type="text" class="form-control" name="project_cost" value="<?php echo @$result->project_cost; ?>">
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label for="status">Payment</label>
                                                    <select class="form-control show-tick" name="payment">
                                                        <option>Payment</option>
                                                        <option value="done" {{ $result->payment == 'Done' ? 'selected' : '' }}>Done</option>
                                                        <option value="pending" {{ $result->payment == 'Pending' ? 'selected' : '' }}>Pending</option>
                                                    </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label for="status">Status</label>
                                                    <select class="form-control show-tick" name="status">
                                                        <option>Status</option>
                                                        <option value="delivered" {{ $result->status == 'Delivered' ? 'selected' : '' }}>Delivered</option>
                                                        <option value="submit" {{ $result->status == 'Submit' ? 'selected' : '' }}>Submit</option>
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

                            <div class="">

                                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href='/project-dashboard'">Close</button>

                                <button type="submit" class="btn btn-primary">Save changes</button>

                            </div>

                            </form>

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

    } else {

    ?>

   <div class="section-body  mt-3">
      <div class="container-fluid">
         <div class="row clearfix">
            <div class="col-lg-12">
               <div class="section-body mb-4">
                  <h4>Welcome Jason Porter!</h4>
                  <small>Measure How Fast You’re Growing Monthly Recurring Revenue. <a href="/#">Learn More</a></small>
               </div>
            </div>
         </div>
         <div class="row clearfix">
            <div class="col-6 col-md-4 col-xl-2">
               <div class="card">
                  <div class="card-body ribbon">
                     <div class="ribbon-box green">5</div>
                     <a class="my_sort_cut text-muted" href="/project-taskboard"><i class="icon-list"></i><span>TaskBoard</span></a>
                  </div>
               </div>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
               <div class="card">
                  <div class="card-body ribbon">
                     <div class="ribbon-box pink">8</div>
                     <a class="my_sort_cut text-muted" href="/hr-holidays"><i class="icon-like"></i><span>Todo</span></a>
                  </div>
               </div>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
               <div class="card">
                  <div class="card-body"><a class="my_sort_cut text-muted" href="/hr-payroll"><i class="icon-credit-card"></i><span>Payroll</span></a></div>
               </div>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
               <div class="card">
                  <div class="card-body ribbon">
                     <div class="ribbon-box orange">8</div>
                     <a class="my_sort_cut text-muted" href="/hr-events"><i class="icon-doc"></i><span>New Ticket</span></a>
                  </div>
               </div>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
               <div class="card">
                  <div class="card-body"><a class="my_sort_cut text-muted" href="/hr-accounts"><i class="icon-calculator"></i><span>Accounts</span></a></div>
               </div>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
               <div class="card">
                  <div class="card-body"><a class="my_sort_cut text-muted" href="/hr-report"><i class="icon-pie-chart"></i><span>Report</span></a></div>
               </div>
            </div>
         </div>
         <div class="row clearfix row-deck">
            <div class="col-xl-4 col-lg-12">
               <div class="card">
                  <div class="card-header">
                     <h3 class="card-title">Project Statistics</h3>
                  </div>
                  <div class="card-body">
                     <div class="row text-center">
                        <div class="col-sm-4 border-right pb-4 pt-4">
                           <label class="mb-0">Total Project</label>
                           <h4 class="font-30 font-weight-bold text-col-blue counter"><span>42</span></h4>
                        </div>
                        <div class="col-sm-4 border-right pb-4 pt-4">
                           <label class="mb-0">On Going</label>
                           <h4 class="font-30 font-weight-bold text-col-blue counter"><span>23</span></h4>
                        </div>
                        <div class="col-sm-4 pb-4 pt-4">
                           <label class="mb-0">Pending</label>
                           <h4 class="font-30 font-weight-bold text-col-blue counter"><span>8</span></h4>
                        </div>
                     </div>
                  </div>
                  <div class="table-responsive">
                     <table class="table table-striped table-vcenter mb-0">
                        <tbody>
                           <tr>
                              <td>
                                 <div class="clearfix">
                                    <div class="float-left"><strong>35%</strong></div>
                                    <div class="float-right"><small class="text-muted">Design Team</small></div>
                                 </div>
                                 <div class="progress progress-xs">
                                    <div class="progress-bar bg-azure" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" style="width: 35%;"></div>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <div class="clearfix">
                                    <div class="float-left"><strong>25%</strong></div>
                                    <div class="float-right"><small class="text-muted">Developer Team</small></div>
                                 </div>
                                 <div class="progress progress-xs">
                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <div class="clearfix">
                                    <div class="float-left"><strong>15%</strong></div>
                                    <div class="float-right"><small class="text-muted">Marketing</small></div>
                                 </div>
                                 <div class="progress progress-xs">
                                    <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100" style="width: 15%;"></div>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <div class="clearfix">
                                    <div class="float-left"><strong>20%</strong></div>
                                    <div class="float-right"><small class="text-muted">Management</small></div>
                                 </div>
                                 <div class="progress progress-xs">
                                    <div class="progress-bar bg-indigo" role="progressbar" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <div class="clearfix">
                                    <div class="float-left"><strong>11%</strong></div>
                                    <div class="float-right"><small class="text-muted">Other</small></div>
                                 </div>
                                 <div class="progress progress-xs">
                                    <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100" style="width: 11%;"></div>
                                 </div>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            <div class="col-xl-8 col-lg-12">
               <div class="card">
                  <div class="card-header">
                     <h3 class="card-title">Current Ticket Status</h3>
                  </div>
                  <div class="card-body">
                     <div style="position: relative;">
                        <div options="[object Object]" series="[object Object]" type="bar" width="100%" height="250px" style="min-height: 265px;">
                           <div id="apexchartsixgkd4g1" class="apexcharts-canvas apexchartsixgkd4g1 apexcharts-theme-light" style="width: 564px; height: 250px;">
                              <svg id="SvgjsSvg1403" width="564" height="250" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                 <g id="SvgjsG1405" class="apexcharts-inner apexcharts-graphical" transform="translate(45.359375, 30)">
                                    <defs id="SvgjsDefs1404">
                                       <linearGradient id="SvgjsLinearGradient1409" x1="0" y1="0" x2="0" y2="1">
                                          <stop id="SvgjsStop1410" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                          <stop id="SvgjsStop1411" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                          <stop id="SvgjsStop1412" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                       </linearGradient>
                                       <clipPath id="gridRectMaskixgkd4g1">
                                          <rect id="SvgjsRect1414" width="512.640625" height="182.348" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                       </clipPath>
                                       <clipPath id="gridRectMarkerMaskixgkd4g1">
                                          <rect id="SvgjsRect1415" width="512.640625" height="186.348" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                       </clipPath>
                                    </defs>
                                    <rect id="SvgjsRect1413" width="44.5060546875" height="182.348" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1409)" class="apexcharts-xcrosshairs" y2="182.348" filter="none" fill-opacity="0.9"></rect>
                                    <g id="SvgjsG1460" class="apexcharts-xaxis" transform="translate(0, 0)">
                                       <g id="SvgjsG1461" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                          <text id="SvgjsText1463" font-family="Helvetica, Arial, sans-serif" x="28.2578125" y="211.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                             <tspan id="SvgjsTspan1464">1991</tspan>
                                             <title>1991</title>
                                          </text>
                                          <text id="SvgjsText1466" font-family="Helvetica, Arial, sans-serif" x="84.7734375" y="211.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                             <tspan id="SvgjsTspan1467">1992</tspan>
                                             <title>1992</title>
                                          </text>
                                          <text id="SvgjsText1469" font-family="Helvetica, Arial, sans-serif" x="141.2890625" y="211.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                             <tspan id="SvgjsTspan1470">1993</tspan>
                                             <title>1993</title>
                                          </text>
                                          <text id="SvgjsText1472" font-family="Helvetica, Arial, sans-serif" x="197.8046875" y="211.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                             <tspan id="SvgjsTspan1473">1994</tspan>
                                             <title>1994</title>
                                          </text>
                                          <text id="SvgjsText1475" font-family="Helvetica, Arial, sans-serif" x="254.3203125" y="211.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                             <tspan id="SvgjsTspan1476">1995</tspan>
                                             <title>1995</title>
                                          </text>
                                          <text id="SvgjsText1478" font-family="Helvetica, Arial, sans-serif" x="310.8359375" y="211.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                             <tspan id="SvgjsTspan1479">1996</tspan>
                                             <title>1996</title>
                                          </text>
                                          <text id="SvgjsText1481" font-family="Helvetica, Arial, sans-serif" x="367.3515625" y="211.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                             <tspan id="SvgjsTspan1482">1997</tspan>
                                             <title>1997</title>
                                          </text>
                                          <text id="SvgjsText1484" font-family="Helvetica, Arial, sans-serif" x="423.8671875" y="211.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                             <tspan id="SvgjsTspan1485">1998</tspan>
                                             <title>1998</title>
                                          </text>
                                          <text id="SvgjsText1487" font-family="Helvetica, Arial, sans-serif" x="480.3828125" y="211.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                             <tspan id="SvgjsTspan1488">1999</tspan>
                                             <title>1999</title>
                                          </text>
                                       </g>
                                       <line id="SvgjsLine1489" x1="0" y1="183.348" x2="508.640625" y2="183.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"></line>
                                    </g>
                                    <g id="SvgjsG1504" class="apexcharts-grid">
                                       <g id="SvgjsG1505" class="apexcharts-gridlines-horizontal">
                                          <line id="SvgjsLine1517" x1="0" y1="0" x2="508.640625" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                          <line id="SvgjsLine1518" x1="0" y1="36.4696" x2="508.640625" y2="36.4696" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                          <line id="SvgjsLine1519" x1="0" y1="72.9392" x2="508.640625" y2="72.9392" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                          <line id="SvgjsLine1520" x1="0" y1="109.4088" x2="508.640625" y2="109.4088" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                          <line id="SvgjsLine1521" x1="0" y1="145.8784" x2="508.640625" y2="145.8784" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                          <line id="SvgjsLine1522" x1="0" y1="182.348" x2="508.640625" y2="182.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       </g>
                                       <g id="SvgjsG1506" class="apexcharts-gridlines-vertical"></g>
                                       <line id="SvgjsLine1507" x1="0" y1="183.348" x2="0" y2="189.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                       <line id="SvgjsLine1508" x1="56.515625" y1="183.348" x2="56.515625" y2="189.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                       <line id="SvgjsLine1509" x1="113.03125" y1="183.348" x2="113.03125" y2="189.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                       <line id="SvgjsLine1510" x1="169.546875" y1="183.348" x2="169.546875" y2="189.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                       <line id="SvgjsLine1511" x1="226.0625" y1="183.348" x2="226.0625" y2="189.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                       <line id="SvgjsLine1512" x1="282.578125" y1="183.348" x2="282.578125" y2="189.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                       <line id="SvgjsLine1513" x1="339.09375" y1="183.348" x2="339.09375" y2="189.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                       <line id="SvgjsLine1514" x1="395.609375" y1="183.348" x2="395.609375" y2="189.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                       <line id="SvgjsLine1515" x1="452.125" y1="183.348" x2="452.125" y2="189.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                       <line id="SvgjsLine1516" x1="508.640625" y1="183.348" x2="508.640625" y2="189.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                       <line id="SvgjsLine1524" x1="0" y1="182.348" x2="508.640625" y2="182.348" stroke="transparent" stroke-dasharray="0"></line>
                                       <line id="SvgjsLine1523" x1="0" y1="1" x2="0" y2="182.348" stroke="transparent" stroke-dasharray="0"></line>
                                    </g>
                                    <g id="SvgjsG1417" class="apexcharts-bar-series apexcharts-plot-series">
                                       <g id="SvgjsG1418" class="apexcharts-series" rel="1" seriesName="seriesx1" data:realIndex="0">
                                          <path id="SvgjsPath1420" d="M 9.537011718750001 182.348L 9.537011718750001 127.64360000000002L 54.04306640625 127.64360000000002L 54.04306640625 127.64360000000002L 54.04306640625 182.348L 54.04306640625 182.348z" fill="rgba(90,82,120,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskixgkd4g1)" pathTo="M 9.537011718750001 182.348L 9.537011718750001 127.64360000000002L 54.04306640625 127.64360000000002L 54.04306640625 127.64360000000002L 54.04306640625 182.348L 54.04306640625 182.348z" pathFrom="M 9.537011718750001 182.348L 9.537011718750001 182.348L 54.04306640625 182.348L 54.04306640625 182.348L 54.04306640625 182.348L 9.537011718750001 182.348" cy="127.64360000000002" cx="73.11708984375" j="0" val="30" barHeight="54.7044" barWidth="44.5060546875"></path>
                                          <path id="SvgjsPath1425" d="M 73.11708984375 182.348L 73.11708984375 109.40880000000001L 117.62314453124999 109.40880000000001L 117.62314453124999 109.40880000000001L 117.62314453124999 182.348L 117.62314453124999 182.348z" fill="rgba(90,82,120,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskixgkd4g1)" pathTo="M 73.11708984375 182.348L 73.11708984375 109.40880000000001L 117.62314453124999 109.40880000000001L 117.62314453124999 109.40880000000001L 117.62314453124999 182.348L 117.62314453124999 182.348z" pathFrom="M 73.11708984375 182.348L 73.11708984375 182.348L 117.62314453124999 182.348L 117.62314453124999 182.348L 117.62314453124999 182.348L 73.11708984375 182.348" cy="109.40880000000001" cx="136.69716796875" j="1" val="40" barHeight="72.9392" barWidth="44.5060546875"></path>
                                          <path id="SvgjsPath1430" d="M 136.69716796875 182.348L 136.69716796875 100.29140000000001L 181.20322265624998 100.29140000000001L 181.20322265624998 100.29140000000001L 181.20322265624998 182.348L 181.20322265624998 182.348z" fill="rgba(90,82,120,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskixgkd4g1)" pathTo="M 136.69716796875 182.348L 136.69716796875 100.29140000000001L 181.20322265624998 100.29140000000001L 181.20322265624998 100.29140000000001L 181.20322265624998 182.348L 181.20322265624998 182.348z" pathFrom="M 136.69716796875 182.348L 136.69716796875 182.348L 181.20322265624998 182.348L 181.20322265624998 182.348L 181.20322265624998 182.348L 136.69716796875 182.348" cy="100.29140000000001" cx="200.27724609375" j="2" val="45" barHeight="82.0566" barWidth="44.5060546875"></path>
                                          <path id="SvgjsPath1435" d="M 200.27724609375 182.348L 200.27724609375 91.174L 244.78330078124998 91.174L 244.78330078124998 91.174L 244.78330078124998 182.348L 244.78330078124998 182.348z" fill="rgba(90,82,120,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskixgkd4g1)" pathTo="M 200.27724609375 182.348L 200.27724609375 91.174L 244.78330078124998 91.174L 244.78330078124998 91.174L 244.78330078124998 182.348L 244.78330078124998 182.348z" pathFrom="M 200.27724609375 182.348L 200.27724609375 182.348L 244.78330078124998 182.348L 244.78330078124998 182.348L 244.78330078124998 182.348L 200.27724609375 182.348" cy="91.174" cx="263.85732421875" j="3" val="50" barHeight="91.174" barWidth="44.5060546875"></path>
                                          <path id="SvgjsPath1440" d="M 263.85732421875 182.348L 263.85732421875 92.99748000000001L 308.36337890625003 92.99748000000001L 308.36337890625003 92.99748000000001L 308.36337890625003 182.348L 308.36337890625003 182.348z" fill="rgba(90,82,120,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskixgkd4g1)" pathTo="M 263.85732421875 182.348L 263.85732421875 92.99748000000001L 308.36337890625003 92.99748000000001L 308.36337890625003 92.99748000000001L 308.36337890625003 182.348L 308.36337890625003 182.348z" pathFrom="M 263.85732421875 182.348L 263.85732421875 182.348L 308.36337890625003 182.348L 308.36337890625003 182.348L 308.36337890625003 182.348L 263.85732421875 182.348" cy="92.99748000000001" cx="327.43740234375" j="4" val="49" barHeight="89.35052" barWidth="44.5060546875"></path>
                                          <path id="SvgjsPath1445" d="M 327.43740234375 182.348L 327.43740234375 72.93920000000001L 371.94345703125003 72.93920000000001L 371.94345703125003 72.93920000000001L 371.94345703125003 182.348L 371.94345703125003 182.348z" fill="rgba(90,82,120,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskixgkd4g1)" pathTo="M 327.43740234375 182.348L 327.43740234375 72.93920000000001L 371.94345703125003 72.93920000000001L 371.94345703125003 72.93920000000001L 371.94345703125003 182.348L 371.94345703125003 182.348z" pathFrom="M 327.43740234375 182.348L 327.43740234375 182.348L 371.94345703125003 182.348L 371.94345703125003 182.348L 371.94345703125003 182.348L 327.43740234375 182.348" cy="72.93920000000001" cx="391.01748046875" j="5" val="60" barHeight="109.4088" barWidth="44.5060546875"></path>
                                          <path id="SvgjsPath1450" d="M 391.01748046875 182.348L 391.01748046875 54.70440000000001L 435.52353515625003 54.70440000000001L 435.52353515625003 54.70440000000001L 435.52353515625003 182.348L 435.52353515625003 182.348z" fill="rgba(90,82,120,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskixgkd4g1)" pathTo="M 391.01748046875 182.348L 391.01748046875 54.70440000000001L 435.52353515625003 54.70440000000001L 435.52353515625003 54.70440000000001L 435.52353515625003 182.348L 435.52353515625003 182.348z" pathFrom="M 391.01748046875 182.348L 391.01748046875 182.348L 435.52353515625003 182.348L 435.52353515625003 182.348L 435.52353515625003 182.348L 391.01748046875 182.348" cy="54.70440000000001" cx="454.59755859375" j="6" val="70" barHeight="127.6436" barWidth="44.5060546875"></path>
                                          <path id="SvgjsPath1455" d="M 454.59755859375 182.348L 454.59755859375 16.411320000000018L 499.10361328125003 16.411320000000018L 499.10361328125003 16.411320000000018L 499.10361328125003 182.348L 499.10361328125003 182.348z" fill="rgba(90,82,120,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskixgkd4g1)" pathTo="M 454.59755859375 182.348L 454.59755859375 16.411320000000018L 499.10361328125003 16.411320000000018L 499.10361328125003 16.411320000000018L 499.10361328125003 182.348L 499.10361328125003 182.348z" pathFrom="M 454.59755859375 182.348L 454.59755859375 182.348L 499.10361328125003 182.348L 499.10361328125003 182.348L 499.10361328125003 182.348L 454.59755859375 182.348" cy="16.411320000000018" cx="518.17763671875" j="7" val="91" barHeight="165.93668" barWidth="44.5060546875"></path>
                                       </g>
                                       <g id="SvgjsG1419" class="apexcharts-datalabels" data:realIndex="0">
                                          <g id="SvgjsG1422" class="apexcharts-data-labels" transform="rotate(0)">
                                             <text id="SvgjsText1424" font-family="Helvetica, Arial, sans-serif" x="31.790039062499993" y="161.99580000000003" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="31.790039062499993" cy="161.99580000000003" style="font-family: Helvetica, Arial, sans-serif;">30</text>
                                          </g>
                                          <g id="SvgjsG1427" class="apexcharts-data-labels" transform="rotate(0)">
                                             <text id="SvgjsText1429" font-family="Helvetica, Arial, sans-serif" x="95.3701171875" y="152.8784" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="95.3701171875" cy="152.8784" style="font-family: Helvetica, Arial, sans-serif;">40</text>
                                          </g>
                                          <g id="SvgjsG1432" class="apexcharts-data-labels" transform="rotate(0)">
                                             <text id="SvgjsText1434" font-family="Helvetica, Arial, sans-serif" x="158.9501953125" y="148.3197" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="158.9501953125" cy="148.3197" style="font-family: Helvetica, Arial, sans-serif;">45</text>
                                          </g>
                                          <g id="SvgjsG1437" class="apexcharts-data-labels" transform="rotate(0)">
                                             <text id="SvgjsText1439" font-family="Helvetica, Arial, sans-serif" x="222.53027343750003" y="143.76100000000002" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="222.53027343750003" cy="143.76100000000002" style="font-family: Helvetica, Arial, sans-serif;">50</text>
                                          </g>
                                          <g id="SvgjsG1442" class="apexcharts-data-labels" transform="rotate(0)">
                                             <text id="SvgjsText1444" font-family="Helvetica, Arial, sans-serif" x="286.1103515625" y="144.67274" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="286.1103515625" cy="144.67274" style="font-family: Helvetica, Arial, sans-serif;">49</text>
                                          </g>
                                          <g id="SvgjsG1447" class="apexcharts-data-labels" transform="rotate(0)">
                                             <text id="SvgjsText1449" font-family="Helvetica, Arial, sans-serif" x="349.6904296875" y="134.64360000000002" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="349.6904296875" cy="134.64360000000002" style="font-family: Helvetica, Arial, sans-serif;">60</text>
                                          </g>
                                          <g id="SvgjsG1452" class="apexcharts-data-labels" transform="rotate(0)">
                                             <text id="SvgjsText1454" font-family="Helvetica, Arial, sans-serif" x="413.2705078125" y="125.52620000000002" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="413.2705078125" cy="125.52620000000002" style="font-family: Helvetica, Arial, sans-serif;">70</text>
                                          </g>
                                          <g id="SvgjsG1457" class="apexcharts-data-labels" transform="rotate(0)">
                                             <text id="SvgjsText1459" font-family="Helvetica, Arial, sans-serif" x="476.8505859375" y="106.37966000000002" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-datalabel" cx="476.8505859375" cy="106.37966000000002" style="font-family: Helvetica, Arial, sans-serif;">91</text>
                                          </g>
                                       </g>
                                    </g>
                                    <line id="SvgjsLine1525" x1="0" y1="0" x2="508.640625" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine1526" x1="0" y1="0" x2="508.640625" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG1527" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG1528" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG1529" class="apexcharts-point-annotations"></g>
                                 </g>
                                 <g id="SvgjsG1490" class="apexcharts-yaxis" rel="0" transform="translate(15.359375, 0)">
                                    <g id="SvgjsG1491" class="apexcharts-yaxis-texts-g">
                                       <text id="SvgjsText1492" font-family="Helvetica, Arial, sans-serif" x="20" y="31.5" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan1493">100</tspan>
                                       </text>
                                       <text id="SvgjsText1494" font-family="Helvetica, Arial, sans-serif" x="20" y="67.9696" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan1495">80</tspan>
                                       </text>
                                       <text id="SvgjsText1496" font-family="Helvetica, Arial, sans-serif" x="20" y="104.4392" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan1497">60</tspan>
                                       </text>
                                       <text id="SvgjsText1498" font-family="Helvetica, Arial, sans-serif" x="20" y="140.90879999999999" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan1499">40</tspan>
                                       </text>
                                       <text id="SvgjsText1500" font-family="Helvetica, Arial, sans-serif" x="20" y="177.3784" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan1501">20</tspan>
                                       </text>
                                       <text id="SvgjsText1502" font-family="Helvetica, Arial, sans-serif" x="20" y="213.848" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                          <tspan id="SvgjsTspan1503">0</tspan>
                                       </text>
                                    </g>
                                 </g>
                                 <g id="SvgjsG1406" class="apexcharts-annotations"></g>
                              </svg>
                              <div class="apexcharts-legend"></div>
                              <div class="apexcharts-tooltip apexcharts-theme-light">
                                 <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                 <div class="apexcharts-tooltip-series-group">
                                    <span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 143, 251);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                       <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                       <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                 </div>
                              </div>
                              <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                 <div class="apexcharts-yaxistooltip-text"></div>
                              </div>
                              <div class="apexcharts-toolbar" style="top: 0px; right: 3px;">
                                 <div class="apexcharts-menu-icon" title="Menu">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                       <path fill="none" d="M0 0h24v24H0V0z"></path>
                                       <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                                    </svg>
                                 </div>
                                 <div class="apexcharts-menu">
                                    <div class="apexcharts-menu-item exportSVG" title="Download SVG">Download SVG</div>
                                    <div class="apexcharts-menu-item exportPNG" title="Download PNG">Download PNG</div>
                                    <div class="apexcharts-menu-item exportCSV" title="Download CSV">Download CSV</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="resize-triggers">
                           <div class="expand-trigger">
                              <div style="width: 565px; height: 266px;"></div>
                           </div>
                           <div class="contract-trigger"></div>
                        </div>
                     </div>
                  </div>
                  <div class="card-footer">
                     <div class="row">
                        <div class="col-6 col-xl-3 col-md-6">
                           <h5>05</h5>
                           <div class="clearfix">
                              <div class="float-left"><strong>35%</strong></div>
                              <div class="float-right"><small class="text-muted">Yesterday</small></div>
                           </div>
                           <div class="progress progress-xs">
                              <div class="progress-bar bg-gray" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" style="width: 35%;"></div>
                           </div>
                           <span class="text-uppercase font-10">New Tickets</span>
                        </div>
                        <div class="col-6 col-xl-3 col-md-6">
                           <h5>18</h5>
                           <div class="clearfix">
                              <div class="float-left"><strong>61%</strong></div>
                              <div class="float-right"><small class="text-muted">Yesterday</small></div>
                           </div>
                           <div class="progress progress-xs">
                              <div class="progress-bar bg-gray" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" style="width: 61%;"></div>
                           </div>
                           <span class="text-uppercase font-10">Open Tickets</span>
                        </div>
                        <div class="col-6 col-xl-3 col-md-6">
                           <h5>06</h5>
                           <div class="clearfix">
                              <div class="float-left"><strong>100%</strong></div>
                              <div class="float-right"><small class="text-muted">Yesterday</small></div>
                           </div>
                           <div class="progress progress-xs">
                              <div class="progress-bar bg-gray" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                           </div>
                           <span class="text-uppercase font-10">Solved Tickets</span>
                        </div>
                        <div class="col-6 col-xl-3 col-md-6">
                           <h5>11</h5>
                           <div class="clearfix">
                              <div class="float-left"><strong>87%</strong></div>
                              <div class="float-right"><small class="text-muted">Yesterday</small></div>
                           </div>
                           <div class="progress progress-xs">
                              <div class="progress-bar bg-gray" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" style="width: 87%;"></div>
                           </div>
                           <span class="text-uppercase font-10">Unresolved</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="section-body">
      <div class="container-fluid">
         <div class="row clearfix row-deck">
            <div class="col-xl-4 col-lg-6 col-md-6">
               <div class="card">
                  <div class="card-header">
                     <h3 class="card-title">Customer Satisfaction</h3>
                  </div>
                  <div class="card-body">
                     <div class="d-flex align-items-baseline">
                        <h1 class="mb-0 mr-2">9.8</h1>
                        <p class="mb-0"><span class="text-success">1.6% <i class="fa fa-arrow-up"></i></span></p>
                     </div>
                     <h6 class="text-uppercase font-10">Performance Score</h6>
                     <div class="progress progress-xs">
                        <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;"></div>
                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
                        <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 5%;"></div>
                        <div class="progress-bar bg-indigo" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 13%;"></div>
                     </div>
                  </div>
                  <div class="table-responsive">
                     <table class="table table-striped table-vcenter mb-0">
                        <tbody>
                           <tr>
                              <td><i class="fa fa-circle text-blue"></i></td>
                              <td class="tx-medium">Excellent</td>
                              <td class="text-right">3,007</td>
                              <td class="text-right">50%</td>
                           </tr>
                           <tr>
                              <td><i class="fa fa-circle text-success"></i></td>
                              <td class="tx-medium">Very Good</td>
                              <td class="text-right">1,674</td>
                              <td class="text-right">25%</td>
                           </tr>
                           <tr>
                              <td><i class="fa fa-circle text-info"></i></td>
                              <td class="tx-medium">Good</td>
                              <td class="text-right">125</td>
                              <td class="text-right">6%</td>
                           </tr>
                           <tr>
                              <td><i class="fa fa-circle text-orange"></i></td>
                              <td class="tx-medium">Fair</td>
                              <td class="text-right">98</td>
                              <td class="text-right">5%</td>
                           </tr>
                           <tr>
                              <td><i class="fa fa-circle text-indigo"></i></td>
                              <td class="tx-medium">Poor</td>
                              <td class="text-right">512</td>
                              <td class="text-right">10%</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
               <div class="card">
                  <div class="card-header">
                     <h3 class="card-title">Overall Rating</h3>
                  </div>
                  <div class="card-body">
                     <div class="d-flex align-items-baseline">
                        <h2 class="font-28 mr-2">4.2</h2>
                        <div class="font-14"><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star"></i></div>
                     </div>
                     <p class="mb-0 font-12">Overall the quality or your support team’s efforts Rating.</p>
                  </div>
                  <div class="table-responsive">
                     <table class="table table-striped table-vcenter mb-0">
                        <tbody>
                           <tr>
                              <td><strong>5.0</strong></td>
                              <td><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></td>
                              <td class="text-right">432</td>
                              <td class="text-right">58%</td>
                           </tr>
                           <tr>
                              <td><strong>4.0</strong></td>
                              <td><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></td>
                              <td class="text-right">189</td>
                              <td class="text-right">42%</td>
                           </tr>
                           <tr>
                              <td><strong>3.0</strong></td>
                              <td><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></td>
                              <td class="text-right">125</td>
                              <td class="text-right">23%</td>
                           </tr>
                           <tr>
                              <td><strong>2.0</strong></td>
                              <td><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></td>
                              <td class="text-right">89</td>
                              <td class="text-right">18%</td>
                           </tr>
                           <tr>
                              <td><strong>1.0</strong></td>
                              <td><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></td>
                              <td class="text-right">18</td>
                              <td class="text-right">11%</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-12 col-md-12">
               <div class="card">
                  <div class="card-header">
                     <h3 class="card-title">Transaction History</h3>
                     <div class="card-options">
                        <a href="/#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                        <div class="item-action dropdown ml-2">
                           <a href="fake_url" data-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                           <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(-174px, 25px, 0px); top: 0px; left: 0px; will-change: transform;">
                              <a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                              <div class="dropdown-divider"></div>
                              <a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <table class="table card-table mt-2">
                     <tbody>
                        <tr>
                           <td class="width45"><span class="avatar avatar-green"><i class="fa fa-check"></i></span></td>
                           <td>
                              <p class="mb-0">Payment from #1598</p>
                              <span class="text-muted font-13">Feb 21, 2019, 3:30pm</span>
                           </td>
                           <td class="text-right">
                              <p class="mb-0">$300</p>
                              <span class="text-success font-13">Done</span>
                           </td>
                        </tr>
                        <tr>
                           <td class="width45"><span class="avatar avatar-green"><i class="fa fa-truck"></i></span></td>
                           <td>
                              <p class="mb-0">Process delivery to #85236</p>
                              <span class="text-muted font-13">March 14, 2019, 2:30pm</span>
                           </td>
                           <td class="text-right">
                              <p class="mb-0">$300</p>
                              <span class="text-success font-13">For pickup</span>
                           </td>
                        </tr>
                        <tr>
                           <td class="width45"><span class="avatar avatar-orange"><i class="fa fa-angle-left"></i></span></td>
                           <td>
                              <p class="mb-0">Process refund #4568</p>
                              <span class="text-muted font-13">March 18, 2019, 6:30pm</span>
                           </td>
                           <td class="text-right">
                              <p class="mb-0">$300</p>
                              <span class="text-success font-13">Done</span>
                           </td>
                        </tr>
                        <tr>
                           <td class="width45"><span class="avatar avatar-red"><i class="fa fa-cc-visa"></i></span></td>
                           <td>
                              <p class="mb-0">Payment failed from #32658</p>
                              <span class="text-muted font-13">April 27, 2019, 3:48pm</span>
                           </td>
                           <td class="text-right">
                              <p class="mb-0">$300</p>
                              <span class="text-danger font-13">Declined</span>
                           </td>
                        </tr>
                        <tr>
                           <td class="width45"><span class="avatar avatar-orange"><i class="fa fa-angle-left"></i></span></td>
                           <td>
                              <p class="mb-0">Process refund #4568</p>
                              <span class="text-muted font-13">March 18, 2019, 6:30pm</span>
                           </td>
                           <td class="text-right">
                              <p class="mb-0">$300</p>
                              <span class="text-success font-13">Done</span>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>



       <div class="d-flex justify-content-between align-items-center mb-3">

            <div class="header-action">

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i
                        class="fe fe-plus mr-2"></i>Add</button>

            </div>

        </div>

         <div class="row clearfix">
            <div class="col-12 col-sm-12">

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

    $(document).ready( function () {

    $('#myTable').DataTable({

        "order": [[ 0, "desc" ]] // order the first column by descending order

    });

} );

</script>

               <div class="card">
                  <div class="card-header">
                     <h3 class="card-title">Project Summary</h3>
                  </div>
                  <div class="card-body">
                     <div class="table-responsive">
                        <table id="myTable" class="table table-hover table-striped text-nowrap table-vcenter mb-0">
                           <thead>
                              <tr>
                                 <th>#</th>
                                 <th>Client Name</th>
                                 <th>Team</th>
                                 <th>Project</th>
                                 <th>Project Cost</th>
                                 <th>Payment</th>
                                 <th>Status</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                           <?php $result = DB::table('projectdashboard')->get()->toArray();

                                            $i = 1;

                                            foreach ($result as $result_in) {

                                            ?>
                                        <tr>
                                            <td><?php echo $result_in->invoice_no; ?></td>
                                            <td><?php echo $result_in->client_name; ?></td>
                                            <td><?php echo $result_in->team; ?></td>
                                            <td><?php echo $result_in->project_name; ?></td>
                                            <td><?php echo $result_in->project_cost; ?></td>
                                            <td><span class="tag tag-success"><?php echo $result_in->payment; ?></span></td>
                                            <td><span class="badge badge-warning"><?php echo $result_in->status; ?></span></td>
                                            
                                        <td>
                                                <a href="/project-dashboard/edit/<?php echo $result_in->id; ?>" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
                                                <button type="button" class="btn btn-icon btn-sm btn-sm" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                                <button type="button" class="btn btn-icon btn-sm" title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                                <button onclick="deleteProjectdashboard('{{$result_in->id}}')" type="button" class="btn btn-icon btn-sm" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
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
         </div>
         
      </div>
   </div>
   <div>
      <div class="section-body">
         <footer class="footer">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-6 col-sm-12">Copyright © 2020 <a href="https://themeforest.net/user/puffintheme/portfolio">PuffinTheme</a>.</div>
                  <div class="col-md-6 col-sm-12 text-md-right">
                     <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="fake_url">Documentation</a></li>
                        <li class="list-inline-item"><a href="fake_url">FAQ</a></li>
                        <li class="list-inline-item"><a href="fake_url" class="btn btn-outline-primary btn-sm">Buy Now</a></li>
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
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <form action="{{route('add-project-dashboard')}}" method="post" enctype="multipart/form-data">

                @csrf

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="invoice_no" placeholder="Enter Invoice No.">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="client_name" placeholder="Enter Client Name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="team" placeholder="Enter Team">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="project_name" placeholder="Enter Project Name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="project_cost" placeholder="Enter Project Cost">
                            </div>
                        </div>
                       
                        <div class="col-md-4 col-sm-12">
                              <div class="form-group">
                                 <select class="form-control show-tick" name="payment">
                                    <option>Payment</option>
                                    <option>Done</option>
                                    <option>Pending</option>
                                </select>
                              </div>
                           </div>
                        <div class="col-md-4 col-sm-12">
                              <div class="form-group">
                                 <select class="form-control show-tick" name="status">
                                    <option>Status</option>
                                    <option>Delivered</option>
                                    <option>Submit</option>
                                </select>
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
        window.location.href = "{{ route('project-dashboard') }}";
    }
</script>

<script type="text/javascript">
    var rakesh = $.noConflict();

    rakesh(document).ready(function() {

        rakesh('.songs').select2();

    });

    function deleteProjectdashboard(id)

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

                    url: "<?= url('delete_projectdashboard') ?>",

                    data: {
                        'table': 'projectdashboard',
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