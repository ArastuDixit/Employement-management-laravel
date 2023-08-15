@include('layouts_user.header')

<div class="page">
    <div id="page_top" class="section-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="left">
                    <h1 class="page-title">Holidays</h1>
                    <div class="input-icon xs-hide">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-icon-addon"><i class="fe fe-search"></i></span>
                    </div>
                </div>
                <div class="right">
                    <ul class="nav nav-pills">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false">Language</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"><img class="w20 mr-2"
                                        src="https://epic.nsdbytes.com/laravel/public/assets/images/flags/us.svg">English</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><img class="w20 mr-2"
                                        src="https://epic.nsdbytes.com/laravel/public/assets/images/flags/es.svg">Spanish</a>
                                <a class="dropdown-item" href="#"><img class="w20 mr-2"
                                        src="https://epic.nsdbytes.com/laravel/public/assets/images/flags/jp.svg">japanese</a>
                                <a class="dropdown-item" href="#"><img class="w20 mr-2"
                                        src="https://epic.nsdbytes.com/laravel/public/assets/images/flags/bl.svg">France</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false">Reports</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"><i class="dropdown-icon fa fa-file-excel-o"></i>
                                    MS Excel</a>
                                <a class="dropdown-item" href="#"><i class="dropdown-icon fa fa-file-word-o"></i>
                                    MS Word</a>
                                <a class="dropdown-item" href="#"><i class="dropdown-icon fa fa-file-pdf-o"></i>
                                    PDF</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false">Project</a>
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
                            <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1"
                                data-toggle="dropdown"><i class="fa fa-envelope"></i><span
                                    class="badge badge-success nav-unread"></span></a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <ul class="right_chat list-unstyled w250 p-0">
                                    <li class="online">
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object " src="../assets/images/xs/avatar4.jpg"
                                                    alt="">
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
                                                <img class="media-object " src="../assets/images/xs/avatar5.jpg"
                                                    alt="">
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
                                                <img class="media-object " src="../assets/images/xs/avatar2.jpg"
                                                    alt="">
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
                                                <img class="media-object " src="../assets/images/xs/avatar3.jpg"
                                                    alt="">
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
                                <a href="javascript:void(0)"
                                    class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
                            </div>
                        </div>
                        <div class="dropdown d-flex">
                            <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1"
                                data-toggle="dropdown"><i class="fa fa-bell"></i><span
                                    class="badge badge-primary nav-unread"></span></a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <ul class="list-unstyled feeds_widget">
                                    <li>
                                        <div class="feeds-left"><i class="fa fa-check"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title text-danger">Issue Fixed <small
                                                    class="float-right text-muted">11:05</small></h4>
                                            <small>WE have fix all Design bug with Responsive</small>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="feeds-left"><i class="fa fa-user"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title">New User <small
                                                    class="float-right text-muted">10:45</small></h4>
                                            <small>I feel great! Thanks team</small>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="feeds-left"><i class="fa fa-thumbs-o-up"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title">7 New Feedback <small
                                                    class="float-right text-muted">Today</small></h4>
                                            <small>It will give a smart finishing to your site</small>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="feeds-left"><i class="fa fa-question-circle"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title text-warning">Server Warning <small
                                                    class="float-right text-muted">10:50</small></h4>
                                            <small>Your connection is not private</small>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="feeds-left"><i class="fa fa-shopping-cart"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title">7 New Orders <small
                                                    class="float-right text-muted">11:35</small></h4>
                                            <small>You received a new oder from Tina.</small>
                                        </div>
                                    </li>
                                </ul>
                                <div class="dropdown-divider"></div>
                                <a href="javascript:void(0)"
                                    class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
                            </div>
                        </div>
                        <div class="dropdown d-flex">
                            <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1"
                                data-toggle="dropdown"><i class="fa fa-user"></i></a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item" href="page-profile.html"><i
                                        class="dropdown-icon fe fe-user"></i> Profile</a>
                                <a class="dropdown-item" href="app-setting.html"><i
                                        class="dropdown-icon fe fe-settings"></i> Settings</a>
                                <a class="dropdown-item" href="javascript:void(0)"><span class="float-right"><span
                                            class="badge badge-primary">6</span></span><i
                                        class="dropdown-icon fe fe-mail"></i> Inbox</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="dropdown-icon fe fe-send"></i> Message</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="dropdown-icon fe fe-help-circle"></i> Need help?</a>
                                <a class="dropdown-item" href="{{ route('signout') }}"><i
                                        class="dropdown-icon fe fe-log-out"></i> Sign out</a>
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

                @if (session('employee-success'))
                    <div class="alert alert-success" role="alert">

                        {{ session('employee-success') }}

                    </div>

                    {{-- session()->forget('employee-success') --}}
                @endif

            </div>

        </div>

    </div>

    <?php

   

   $request = request();



   if($request->segment(3) != "" && $request->segment(2) == "edit"){

       
    ?>

    <?php
    
    $result = DB::table('holidays')
        ->where('id', $request->segment(3))
        ->first();
    
    //  echo "<pre>";
    
    //  print_r($result);
    
    //  echo "</pre>";
    
    ?>

    <div class="section-body">

        <div class="container-fluid">

            <div class="tab-content">

                <div class="tab-pane fade show active" id="Employee-list" role="tabpanel">

                    <div class="card">

                        <div class="card-header">

                            <h3 class="card-title">Update Holiday Details</h3>

                        </div>

                        <div class="card-body">

                            <form action="{{ route('edit-holidays') }}" method="post" enctype="multipart/form-data">

                                @csrf

                                <div class="">

                                    <div class="row clearfix">

                                        <!------------------------------------------------>

                                        <div class="col-md-12">

                                            <h6 style="background: #edeff3;padding: 10px;">Holiday Information</h6>

                                            <input type="hidden" name="id" value="<?php echo @$result->id; ?>">

                                            <div class="row">

                                                <div class="col-md-3 col-sm-6">

                                                    <div class="form-group">

                                                        <label for="day">Day</label>

                                                        <input type="text" class="form-control" name="day"
                                                            placeholder="Update Day" value="<?php echo @$result->day; ?>"
                                                            required>

                                                    </div>

                                                </div>

                                                <div class="col-md-3 col-sm-6">

                                                    <div class="form-group">

                                                        <label for="date">Date</label>

                                                        <input type="date" class="form-control" name="date"
                                                            placeholder="Update Date" value="<?php echo @$result->date; ?>"
                                                            required>

                                                    </div>

                                                </div>

                                                <div class="col-md-3 col-sm-6">

                                                    <div class="form-group">

                                                        <label for="holiday">Holiday</label>

                                                        <input type="text" class="form-control" name="holiday"
                                                            placeholder="Update Holiday" value="<?php echo @$result->holiday; ?>"
                                                            required>

                                                    </div>

                                                </div>


                                                <?php
                                                
                                                $result = DB::table('holidays')
                                                    ->get()
                                                    ->toArray();
                                                
                                                //   echo "<pre>";
                                                
                                                //   print_r($result);
                                                
                                                //   echo "<pre>";
                                                
                                                ?>

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

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        <button type="submit" class="btn btn-primary">Save changes</button>

                    </div>

                    </form>

                </div>

            </div>

        </div>

        <div class="tab-pane fade" id="Employee-view" role="tabpanel">

            <div class="row">

                <div class="col-lg-4 col-md-12">

                    <div class="card">

                        <div class="card-body">

                            <div class="media mb-4">

                                <img class="avatar avatar-xl mr-3" src="../assets/images/sm/avatar1.jpg"
                                    alt="avatar">

                                <div class="media-body">

                                    <h5 class="m-0">Sara Hopkins</h5>

                                    <p class="text-muted mb-0">Webdeveloper</p>

                                    <ul class="social-links list-inline mb-0 mt-2">

                                        <li class="list-inline-item"><a href="javascript:void(0)" title=""
                                                data-toggle="tooltip" data-original-title="Facebook"><i
                                                    class="fa fa-facebook"></i></a></li>

                                        <li class="list-inline-item"><a href="javascript:void(0)" title=""
                                                data-toggle="tooltip" data-original-title="Twitter"><i
                                                    class="fa fa-twitter"></i></a></li>

                                        <li class="list-inline-item"><a href="javascript:void(0)" title=""
                                                data-toggle="tooltip" data-original-title="1234567890"><i
                                                    class="fa fa-phone"></i></a></li>

                                        <li class="list-inline-item"><a href="javascript:void(0)" title=""
                                                data-toggle="tooltip" data-original-title="@skypename"><i
                                                    class="fa fa-skype"></i></a></li>

                                    </ul>

                                </div>

                            </div>

                            <p class="mb-4">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                                roots in a piece of classical Latin literature from 45 BC, making it over 2000 years
                                old.</p>

                            <button class="btn btn-outline-primary btn-sm"><span class="fa fa-twitter"></span>
                                Follow</button>

                        </div>

                    </div>

                    <div class="card">

                        <div class="card-header">

                            <h3 class="card-title">Statistics</h3>

                            <div class="card-options">

                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                        class="fe fe-chevron-up"></i></a>

                                <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                        class="fe fe-x"></i></a>

                            </div>

                        </div>

                        <div class="card-body">

                            <div class="text-center">

                                <div class="row">

                                    <div class="col-6 pb-3">

                                        <label class="mb-0">Project</label>

                                        <h4 class="font-30 font-weight-bold">45</h4>

                                    </div>

                                    <div class="col-6 pb-3">

                                        <label class="mb-0">Growth</label>

                                        <h4 class="font-30 font-weight-bold">87%</h4>

                                    </div>

                                </div>

                            </div>

                            <div class="form-group">

                                <label class="d-block">Laravel<span class="float-right">77%</span></label>

                                <div class="progress progress-xs">

                                    <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="77"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>

                                </div>

                            </div>

                            <div class="form-group">

                                <label class="d-block">HTML<span class="float-right">50%</span></label>

                                <div class="progress progress-xs">

                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>

                                </div>

                            </div>

                            <div class="form-group mb-0">

                                <label class="d-block">Photoshop <span class="float-right">23%</span></label>

                                <div class="progress progress-xs">

                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="23"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-8 col-md-12">

                    <div class="card">

                        <div class="card-body">

                            <ul class="new_timeline mt-3">

                                <li>

                                    <div class="bullet pink"></div>

                                    <div class="time">11:00am</div>

                                    <div class="desc">

                                        <h3>Attendance</h3>

                                        <h4>Computer Class</h4>

                                    </div>

                                </li>

                                <li>

                                    <div class="bullet pink"></div>

                                    <div class="time">11:30am</div>

                                    <div class="desc">

                                        <h3>Added an interest</h3>

                                        <h4>“Volunteer Activities”</h4>

                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                                            roots in a piece of classical Latin literature from 45 BC, making it over
                                            2000 years old.</p>

                                    </div>

                                </li>

                                <li>

                                    <div class="bullet green"></div>

                                    <div class="time">12:00pm</div>

                                    <div class="desc">

                                        <h3>Developer Team</h3>

                                        <h4>Hangouts</h4>

                                        <ul class="list-unstyled team-info margin-0 p-t-5">

                                            <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>

                                            <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>

                                            <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>

                                            <li><img src="../assets/images/xs/avatar4.jpg" alt="Avatar"></li>

                                        </ul>

                                    </div>

                                </li>

                                <li>

                                    <div class="bullet green"></div>

                                    <div class="time">2:00pm</div>

                                    <div class="desc">

                                        <h3>Responded to need</h3>

                                        <a href="javascript:void(0)">“In-Kind Opportunity”</a>

                                    </div>

                                </li>

                                <li>

                                    <div class="bullet orange"></div>

                                    <div class="time">1:30pm</div>

                                    <div class="desc">

                                        <h3>Lunch Break</h3>

                                    </div>

                                </li>

                                <li>

                                    <div class="bullet green"></div>

                                    <div class="time">2:38pm</div>

                                    <div class="desc">

                                        <h3>Finish</h3>

                                        <h4>Go to Home</h4>

                                    </div>

                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="tab-pane fade" id="Employee-Request" role="tabpanel">

            <div class="card">

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-hover table-striped table-vcenter text-nowrap mb-0">

                            <thead>

                                <tr>

                                    <th>#</th>

                                    <th>Name</th>

                                    <th>Employee ID</th>

                                    <th>Leave Type</th>

                                    <th>Date</th>

                                    <th>Reason</th>

                                    <th>Action</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td class="width45">

                                        <span class="avatar avatar-orange" data-toggle="tooltip"
                                            title="Avatar Name">DB</span>

                                    </td>

                                    <td>

                                        <div class="font-15">Marshall Nichols</div>

                                    </td>

                                    <td><span>LA-8150</span></td>

                                    <td><span>Casual Leave</span></td>

                                    <td>24 July, 2019 to 26 July, 2019</td>

                                    <td>Going to Family Function</td>

                                    <td>

                                        <button type="button" class="btn btn-icon btn-sm" title="Approved"><i
                                                class="fa fa-check text-success"></i></button>

                                        <button type="button" class="btn btn-icon btn-sm js-sweetalert"
                                            title="Delete" data-type="confirm"><i
                                                class="fa fa-trash-o text-danger"></i></button>

                                    </td>

                                </tr>

                                <tr>

                                    <td class="width45">

                                        <span class="avatar avatar-pink" data-toggle="tooltip"
                                            title="Avatar Name">GC</span>

                                    </td>

                                    <td>

                                        <div class="font-15">Gary Camara</div>

                                    </td>

                                    <td><span>LA-8795</span></td>

                                    <td><span>Medical Leave</span></td>

                                    <td>20 July, 2019 to 26 July, 2019</td>

                                    <td>Going to Development</td>

                                    <td>

                                        <button type="button" class="btn btn-icon btn-sm" title="Approved"><i
                                                class="fa fa-check text-success"></i></button>

                                        <button type="button" class="btn btn-icon btn-sm js-sweetalert"
                                            title="Delete" data-type="confirm"><i
                                                class="fa fa-trash-o text-danger"></i></button>

                                    </td>

                                </tr>

                                <tr>

                                    <td class="width45">

                                        <img class="avatar" src="../assets/images/xs/avatar1.jpg"
                                            data-toggle="tooltip" title="Avatar Name" />

                                    </td>

                                    <td>

                                        <div class="font-15">Maryam Amiri</div>

                                    </td>

                                    <td><span>LA-0258</span></td>

                                    <td><span>Casual Leave</span></td>

                                    <td>21 July, 2019 to 26 July, 2019</td>

                                    <td>Attend Birthday party</td>

                                    <td>

                                        <button type="button" class="btn btn-icon btn-sm" title="Approved"><i
                                                class="fa fa-check text-success"></i></button>

                                        <button type="button" class="btn btn-icon btn-sm js-sweetalert"
                                            title="Delete" data-type="confirm"><i
                                                class="fa fa-trash-o text-danger"></i></button>

                                    </td>

                                </tr>

                                <tr>

                                    <td class="width45">

                                        <img class="avatar" src="../assets/images/xs/avatar2.jpg"
                                            data-toggle="tooltip" title="Avatar Name" />

                                    </td>

                                    <td>

                                        <div class="font-15">Frank Camly</div>

                                    </td>

                                    <td><span>LA-1515</span></td>

                                    <td><span>Casual Leave</span></td>

                                    <td>11 Aug, 2019 to 21 Aug, 2019</td>

                                    <td>Going to Holiday</td>

                                    <td>

                                        <button type="button" class="btn btn-icon btn-sm" title="Approved"><i
                                                class="fa fa-check text-success"></i></button>

                                        <button type="button" class="btn btn-icon btn-sm js-sweetalert"
                                            title="Delete" data-type="confirm"><i
                                                class="fa fa-trash-o text-danger"></i></button>

                                    </td>

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

                        <li class="list-inline-item"><a href="javascript:void(0)"
                                class="btn btn-outline-primary btn-sm">Buy Now</a></li>

                    </ul>

                </div>

            </div>

        </div>

    </footer>

</div>

<?php  

   }else{

?>



<div class="section-body">

    <div class="container-fluid">

        <div class="d-flex justify-content-between align-items-center mb-3">

            <!-- <ul class="nav nav-tabs page-header-tab">

               <li class="nav-item"><a class="nav-link active" id="Employee-tab" data-toggle="tab" href="#Employee-list">All</a></li>

               <li class="nav-item"><a class="nav-link" id="Employee-tab" data-toggle="tab" href="#Employee-view">View</a></li>

               <li class="nav-item"><a class="nav-link" id="Employee-tab" data-toggle="tab" href="#Employee-Request">Leave Request</a></li>

            </ul> -->

            <div class="header-action">

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i
                        class="fe fe-plus mr-2"></i>Add</button>

            </div>

        </div>
    </div>
</div>


<div class="section-body">

    <div class="container-fluid">

        <div class="tab-content">

            <div class="tab-pane fade show active" id="Employee-list" role="tabpanel">

                <div class="card">

                    <div class="card-header">

                        <h3 class="card-title">Holiday List</h3>

                        <div class="card-options">

                            <!--<form>-->

                            <!--   <div class="input-group">-->

                            <!--      <input type="text" class="form-control form-control-sm" placeholder="Search something..." name="s">-->

                            <!--      <span class="input-group-btn ml-2"><button class="btn btn-icon btn-sm" type="submit"><span class="fe fe-search"></span></button></span>-->

                            <!--   </div>-->

                            <!--</form>-->

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

                            <table id="myTable"
                                class="table table-hover table-striped table-vcenter text-nowrap mb-0">

                                <thead>

                                    <tr>

                                        <!-- <th>ID</th> -->

                                        <th>Day</th>

                                        <th>Date</th>

                                        <th>Holiday</th>

                                        <th>Action</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    <?php $result = DB::table('holidays')->get()->toArray();

                                $i=1; foreach ($result as $result_in) {

                                 ?>

                                    <tr>







                                        <!--<td class="w40">

                                    <label class="custom-control custom-checkbox">

                                    <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">

                                    <span class="custom-control-label">&nbsp;</span>

                                    </label>

                                 </td>-->






                                        <td><span><?php echo $result_in->day; ?></span></td>



                                        <td><span><?php echo $result_in->date; ?></span></td>



                                        <td><?php echo $result_in->holiday; ?></td>







                                        <td>

                                            <button type="button" class="btn btn-icon btn-sm" title="View"><i
                                                    class="fa fa-eye"></i></button>

                                            <a href="/holidays/edit/<?php echo $result_in->id; ?>" class="btn btn-icon btn-sm"
                                                title="Edit"><i class="fa fa-edit"></i></a>

                                            <!-- <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button> -->

                                            <button onclick="deleteHoliday('{{ $result_in->id }}')"
                                                class="btn delete-t"><i class="fa fa-trash"></i></button>

                                        </td>





                                    </tr>

                                    <?php $i++; } ?>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

            <div class="tab-pane fade" id="Employee-view" role="tabpanel">

                <div class="row">

                    <div class="col-lg-4 col-md-12">

                        <div class="card">

                            <div class="card-body">

                                <div class="media mb-4">

                                    <img class="avatar avatar-xl mr-3"
                                        src="https://laravel.technorizen.com/resources/user-assets/laravel/public/assets/images/sm/avatar1.jpg"
                                        alt="avatar">

                                    <div class="media-body">

                                        <h5 class="m-0">Sara Hopkins</h5>

                                        <p class="text-muted mb-0">Webdeveloper</p>

                                        <ul class="social-links list-inline mb-0 mt-2">

                                            <li class="list-inline-item"><a href="javascript:void(0)" title=""
                                                    data-toggle="tooltip" data-original-title="Facebook"><i
                                                        class="fa fa-facebook"></i></a></li>

                                            <li class="list-inline-item"><a href="javascript:void(0)" title=""
                                                    data-toggle="tooltip" data-original-title="Twitter"><i
                                                        class="fa fa-twitter"></i></a></li>

                                            <li class="list-inline-item"><a href="javascript:void(0)" title=""
                                                    data-toggle="tooltip" data-original-title="1234567890"><i
                                                        class="fa fa-phone"></i></a></li>

                                            <li class="list-inline-item"><a href="javascript:void(0)" title=""
                                                    data-toggle="tooltip" data-original-title="@skypename"><i
                                                        class="fa fa-skype"></i></a></li>

                                        </ul>

                                    </div>

                                </div>

                                <p class="mb-4">Contrary to popular belief, Lorem Ipsum is not simply random text. It
                                    has roots in a piece of classical Latin literature from 45 BC, making it over 2000
                                    years old.</p>

                                <button class="btn btn-outline-primary btn-sm"><span class="fa fa-twitter"></span>
                                    Follow</button>

                            </div>

                        </div>

                        <div class="card">

                            <div class="card-header">

                                <h3 class="card-title">Statistics</h3>

                                <div class="card-options">

                                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                            class="fe fe-chevron-up"></i></a>

                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                            class="fe fe-x"></i></a>

                                </div>

                            </div>

                            <div class="card-body">

                                <div class="text-center">

                                    <div class="row">

                                        <div class="col-6 pb-3">

                                            <label class="mb-0">Project</label>

                                            <h4 class="font-30 font-weight-bold">45</h4>

                                        </div>

                                        <div class="col-6 pb-3">

                                            <label class="mb-0">Growth</label>

                                            <h4 class="font-30 font-weight-bold">87%</h4>

                                        </div>

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="d-block">Laravel<span class="float-right">77%</span></label>

                                    <div class="progress progress-xs">

                                        <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="77"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="d-block">HTML<span class="float-right">50%</span></label>

                                    <div class="progress progress-xs">

                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>

                                    </div>

                                </div>

                                <div class="form-group mb-0">

                                    <label class="d-block">Photoshop <span class="float-right">23%</span></label>

                                    <div class="progress progress-xs">

                                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="23"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 col-md-12">

                        <div class="card">

                            <div class="card-body">

                                <ul class="new_timeline mt-3">

                                    <li>

                                        <div class="bullet pink"></div>

                                        <div class="time">11:00am</div>

                                        <div class="desc">

                                            <h3>Attendance</h3>

                                            <h4>Computer Class</h4>

                                        </div>

                                    </li>

                                    <li>

                                        <div class="bullet pink"></div>

                                        <div class="time">11:30am</div>

                                        <div class="desc">

                                            <h3>Added an interest</h3>

                                            <h4>“Volunteer Activities”</h4>

                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                                                roots in a piece of classical Latin literature from 45 BC, making it
                                                over 2000 years old.</p>

                                        </div>

                                    </li>

                                    <li>

                                        <div class="bullet green"></div>

                                        <div class="time">12:00pm</div>

                                        <div class="desc">

                                            <h3>Developer Team</h3>

                                            <h4>Hangouts</h4>

                                            <ul class="list-unstyled team-info margin-0 p-t-5">

                                                <li><img src="https://laravel.technorizen.com/resources/user-assets/laravel/public/assets/images/xs/avatar1.jpg"
                                                        alt="Avatar"></li>

                                                <li><img src="https://laravel.technorizen.com/resources/user-assets/laravel/public/assets/images/xs/avatar2.jpg"
                                                        alt="Avatar"></li>

                                                <li><img src="https://laravel.technorizen.com/resources/user-assets/laravel/public/assets/images/xs/avatar3.jpg"
                                                        alt="Avatar"></li>

                                                <li><img src="https://laravel.technorizen.com/resources/user-assets/laravel/public/assets/images/xs/avatar4.jpg"
                                                        alt="Avatar"></li>

                                            </ul>

                                        </div>

                                    </li>

                                    <li>

                                        <div class="bullet green"></div>

                                        <div class="time">2:00pm</div>

                                        <div class="desc">

                                            <h3>Responded to need</h3>

                                            <a href="javascript:void(0)">“In-Kind Opportunity”</a>

                                        </div>

                                    </li>

                                    <li>

                                        <div class="bullet orange"></div>

                                        <div class="time">1:30pm</div>

                                        <div class="desc">

                                            <h3>Lunch Break</h3>

                                        </div>

                                    </li>

                                    <li>

                                        <div class="bullet green"></div>

                                        <div class="time">2:38pm</div>

                                        <div class="desc">

                                            <h3>Finish</h3>

                                            <h4>Go to Home</h4>

                                        </div>

                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="tab-pane fade" id="Employee-Request" role="tabpanel">

                <div class="card">

                    <div class="card-body">

                        <div class="table-responsive">

                            @if (session('employee-success'))
                                <div class="alert alert-success" role="alert">

                                    {{ session('employee-success') }}

                                </div>

                                {{-- session()->forget('employee-success') --}}
                            @endif

                            <table class="table table-hover table-striped table-vcenter text-nowrap mb-0">

                                <thead>

                                    <tr>

                                        <th>#</th>

                                        <th>Name</th>

                                        <th>Employee ID</th>

                                        <th>Leave Type</th>

                                        <th>Date</th>

                                        <th>Reason</th>

                                        <th>Action</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    <tr>

                                        <td class="width45">

                                            <span class="avatar avatar-orange" data-toggle="tooltip"
                                                title="Avatar Name">DB</span>

                                        </td>

                                        <td>

                                            <div class="font-15">Marshall Nichols</div>

                                        </td>

                                        <td><span>LA-8150</span></td>

                                        <td><span>Casual Leave</span></td>

                                        <td>24 July, 2019 to 26 July, 2019</td>

                                        <td>Going to Family Function</td>

                                        <td>

                                            <button type="button" class="btn btn-icon btn-sm" title="Approved"><i
                                                    class="fa fa-check text-success"></i></button>

                                            <button type="button" class="btn btn-icon btn-sm js-sweetalert"
                                                title="Delete" data-type="confirm"><i
                                                    class="fa fa-trash-o text-danger"></i></button>

                                        </td>

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

                        <li class="list-inline-item"><a href="javascript:void(0)"
                                class="btn btn-outline-primary btn-sm">Buy Now</a></li>

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

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-xl" role="document">

        <div class="modal-content">

            <!--<form method="post" action="{{ route('add-employee') }}" enctype="multipart/form-data">-->

            <form action="{{ route('add-holiday') }}" method="post" enctype="multipart/form-data">

                @csrf

                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLabel">Add Holiday</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>

                </div>

                <div class="modal-body">

                    <div class="row clearfix">

                        <!------------------------------------------------>

                        <div class="col-md-12">

                            <h6 style="background: #edeff3;padding: 10px;">Holiday Information</h6>

                            <!--<div class="row">

                        <div class="col-md-4 col-sm-6 mx-auto">

                           <div class="form-group mt-2 mb-3">

                              <label for="emp_first_name">Employee Image</label>

                              <input type="file" name="image" class="dropify">

                           </div>

                           <style>

                              .dropify-wrapper.has-preview {

                              height: 100px !important;

                              }

                              .dropify-wrapper {

                              height: 100px !important;

                              }

                           </style>

                        </div>

                     </div>-->

                            <div class="row">

                                <div class="col-md-3 col-sm-6">

                                    <div class="form-group">

                                        <label for="day">Day</label>

                                        <input type="text" class="form-control" name="day" placeholder="Day"
                                            required>

                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-6">

                                    <div class="form-group">

                                        <label for="date">Date</label>

                                        <input type="date" class="form-control" name="date" placeholder="Date"
                                            required>

                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-6">

                                    <div class="form-group">

                                        <label for="holiday">Holiday</label>

                                        <input type="text" class="form-control" name="holiday"
                                            placeholder="Holiday" required>

                                    </div>

                                </div>






                                <style>
                                    .select2-container--default {

                                        width: 100% !important;

                                    }
                                </style>

                            </div>

                        </div>

                        <!------------------------------------------------>

                        <!--<div class="col-md-12">

                     <h6 style="background: #edeff3;padding: 10px;" >Work Information</h6>

                     <div class="row">

                        <div class="col-md-3 col-sm-6">

                           <div class="form-group">

                              <label for="country">Upload Resume</label>

                              <input type="file" name="emp_resume" class="form-control" placeholder="Resume" required>

                           </div>

                        </div>

                        <div class="col-md-12 col-sm-6">

                           <div class="form-group">

                              <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

                              <textarea id="editor" name="emp_resume_text" required></textarea>

                              <script>
                                  CKEDITOR.replace('editor');
                              </script>

                           </div>

                        </div>

                     </div>

                  </div>-->

                        <!------------------------------------------------>



                        <!------------------------------------------------>



                        <!------------------------------------------------>



                        <!------------------------------------------------>



                        <!------------------------------------------------>



                        <!------------------------------------------------>

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


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-MHOMs1c/yafN+2b4ByI4+zeT7WQOuTsjE6ndMf5pY9XK6iB6Lh70+a7oxJtkRJGQc9N7clD0JQPlzUQbTJiHmw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"
    integrity="sha512-GLwtmK0qmv7KMdHIO/bVnG1tCwo6jAzOulGFapIjwU5a5W/uGtX6tmPhL9puX0tawGiSKzJmrYx2XPlQl+LrMw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"
    integrity="sha512-k9Zvn6N+tBqorQDvNYy8EaV5BDgBLU2HCVLqzwWm5cyH/7jvSlrzpdd6+ef+6nZypf+QUChilB1A/lN8BbyiJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script type="text/javascript">
    var rakesh = $.noConflict();

    rakesh(document).ready(function() {

        rakesh('.songs').select2();

    });



    function deleteHoliday(id)

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

                    url: "<?= url('delete_holiday') ?>",

                    data: {
                        'table': 'holidays',
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
