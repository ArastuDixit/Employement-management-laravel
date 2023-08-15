@include('layouts_user.header')

<div class="page">
   <div>
      <div id="page_top" class="section-body  ">
         <div class="container-fluid">
            <div class="page-header">
               <div class="left">
                  <h1 class="page-title">Taskboard</h1>
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

        $result = DB::table('taskboard')
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

                                <h3 class="card-title">Update Taskboard Detail</h3>

                            </div>

                            <div class="card-body">

                                <form action="{{ route('edit-taskboard') }}" method="post" enctype="multipart/form-data">

                                    @csrf

                                    <div class="">

                                        <div class="row clearfix">

                                            <!------------------------------------------------>

                                            <div class="col-md-12">

                                                <h6 style="background: #edeff3;padding: 10px;">Taskboard Information</h6>

                                                <input type="hidden" name="id" value="<?php echo @$result->id; ?>">


                                                <div class="row">


                                                   <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                            <label for="task">TASK</label>
                                                            <input type="text" class="form-control" name="task" value="<?php echo @$result->task; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                                        <div class="form-group">

                                                            <label for="team">TEAM</label>

                                                            <input type="text" class="form-control" name="team" value="<?php echo @$result->team; ?>">

                                                        </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-sm-12">

                                                        <div class="form-group">

                                                            <label for="duration">DURATION From</label>

                                                            <input type="datetime-local" class="form-control" name="duration_from" value="<?php echo @$result->duration_from; ?>">

                                                        </div>
                                                  </div>

                                                  <div class="col-lg-6 col-md-6 col-sm-12">

                                                        <div class="form-group">

                                                            <label for="duration">DURATION TO</label>

                                                            <input type="datetime-local" class="form-control" name="duration_to" value="<?php echo @$result->duration_to; ?>">

                                                        </div>
                                                  </div>
                                                    
                                                       <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label for="status">STATUS</label>
                                                    <select class="form-control show-tick" name="status">
                                                        <option>STATUS</option>
                                                        <option value="planned" {{ $result->status == 'Planned' ? 'selected' : '' }}>Planned</option>
                                                        <option value="completed" {{ $result->status == 'Completed' ? 'selected' : '' }}>Completed</option>
                                                        <option value="in progress" {{ $result->status == 'In progress' ? 'selected' : '' }}>In progress</option>
                                                        <option value="in completed" {{ $result->status == 'In completed' ? 'selected' : '' }}>In completed</option>
                                                    </select>
                                                    </div>
                                                </div>
                                                    
                                                <div class="col-lg-6 col-md-6 col-sm-12">

                                                        <div class="form-group">

                                                            <label for="duration">PROGRESS</label>

                                                            <input type="text" class="form-control" name="progress" value="<?php echo @$result->progress; ?>">

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

                                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href='/taskboard'">Close</button>

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


   <div class="section-body ">
      <div class="container-fluid">
         <div class="d-md-flex justify-content-between align-items-center">
            <ul class="nav nav-tabs page-header-tab">
               <li class="nav-item"><a class="nav-link active" id="TaskBoard-tab" data-toggle="tab" href="#TaskBoard-list">List View</a></li>
               <li class="nav-item"><a class="nav-link" id="TaskBoard-tab" data-toggle="tab" href="#TaskBoard-grid">Grid View</a></li>
            </ul>
            <div class="header-action d-flex">
               <div class="input-group mr-2"><input type="text" class="form-control" placeholder="Search..."></div>
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fe fe-plus mr-2"></i>Add</button>
               </div>
         </div>
         <div class="row clearfix mt-2">
            <div class="col-lg-3 col-md-6">
               <div class="card">
                  <div class="card-body text-center">
                     <h6>Planned</h6>
                     <div style="width: 50%; margin: auto;">
                        <svg class="CircularProgressbar " viewBox="0 0 100 100" data-test-id="CircularProgressbar">
                           <path class="CircularProgressbar-trail" d="
                              M 50,50
                              m 0,-47.5
                              a 47.5,47.5 0 1 1 0,95
                              a 47.5,47.5 0 1 1 0,-95
                              " stroke-width="5" fill-opacity="0" style="stroke-dasharray: 298.451px, 298.451px; stroke-dashoffset: 0px;"></path>
                           <path class="CircularProgressbar-path" d="
                              M 50,50
                              m 0,-47.5
                              a 47.5,47.5 0 1 1 0,95
                              a 47.5,47.5 0 1 1 0,-95
                              " stroke-width="5" fill-opacity="0" style="stroke: rgb(110, 118, 135); stroke-dasharray: 298.451px, 298.451px; stroke-dashoffset: 238.761px;"></path>
                           <text class="CircularProgressbar-text" x="50" y="50">20</text>
                        </svg>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6">
               <div class="card">
                  <div class="card-body text-center">
                     <h6>In progress</h6>
                     <div style="width: 50%; margin: auto;">
                        <svg class="CircularProgressbar " viewBox="0 0 100 100" data-test-id="CircularProgressbar">
                           <path class="CircularProgressbar-trail" d="
                              M 50,50
                              m 0,-47.5
                              a 47.5,47.5 0 1 1 0,95
                              a 47.5,47.5 0 1 1 0,-95
                              " stroke-width="5" fill-opacity="0" style="stroke-dasharray: 298.451px, 298.451px; stroke-dashoffset: 0px;"></path>
                           <path class="CircularProgressbar-path" d="
                              M 50,50
                              m 0,-47.5
                              a 47.5,47.5 0 1 1 0,95
                              a 47.5,47.5 0 1 1 0,-95
                              " stroke-width="5" fill-opacity="0" style="stroke: rgb(110, 118, 135); stroke-dasharray: 298.451px, 298.451px; stroke-dashoffset: 170.117px;"></path>
                           <text class="CircularProgressbar-text" x="50" y="50">43</text>
                        </svg>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6">
               <div class="card">
                  <div class="card-body text-center">
                     <h6>Completed</h6>
                     <div style="width: 50%; margin: auto;">
                        <svg class="CircularProgressbar " viewBox="0 0 100 100" data-test-id="CircularProgressbar">
                           <path class="CircularProgressbar-trail" d="
                              M 50,50
                              m 0,-47.5
                              a 47.5,47.5 0 1 1 0,95
                              a 47.5,47.5 0 1 1 0,-95
                              " stroke-width="5" fill-opacity="0" style="stroke-dasharray: 298.451px, 298.451px; stroke-dashoffset: 0px;"></path>
                           <path class="CircularProgressbar-path" d="
                              M 50,50
                              m 0,-47.5
                              a 47.5,47.5 0 1 1 0,95
                              a 47.5,47.5 0 1 1 0,-95
                              " stroke-width="5" fill-opacity="0" style="stroke: rgb(110, 118, 135); stroke-dasharray: 298.451px, 298.451px; stroke-dashoffset: 50.7367px;"></path>
                           <text class="CircularProgressbar-text" x="50" y="50">83</text>
                        </svg>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6">
               <div class="card">
                  <div class="card-body text-center">
                     <h6>In Completed</h6>
                     <div style="width: 50%; margin: auto;">
                        <svg class="CircularProgressbar " viewBox="0 0 100 100" data-test-id="CircularProgressbar">
                           <path class="CircularProgressbar-trail" d="
                              M 50,50
                              m 0,-47.5
                              a 47.5,47.5 0 1 1 0,95
                              a 47.5,47.5 0 1 1 0,-95
                              " stroke-width="5" fill-opacity="0" style="stroke-dasharray: 298.451px, 298.451px; stroke-dashoffset: 0px;"></path>
                           <path class="CircularProgressbar-path" d="
                              M 50,50
                              m 0,-47.5
                              a 47.5,47.5 0 1 1 0,95
                              a 47.5,47.5 0 1 1 0,-95
                              " stroke-width="5" fill-opacity="0" style="stroke: rgb(110, 118, 135); stroke-dasharray: 298.451px, 298.451px; stroke-dashoffset: 262.637px;"></path>
                           <text class="CircularProgressbar-text" x="50" y="50">12</text>
                        </svg>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="section-body">
      <div class="container-fluid">
         <div class="tab-content taskboard">
            <div class="tab-pane fade show active" id="TaskBoard-list" role="tabpanel">
               <div class="table-responsive">
                  <table class="table table-hover table-vcenter mb-0 table_custom spacing8 text-nowrap">
                     <thead>
                        <tr>
                           <th>#</th>
                           <th>Task</th>
                           <th>Team</th>
                           <th>Duration</th>
                           <th>Status</th>
                           <th class="w200">Progress</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                      <?php $result = DB::table('taskboard')->get()->toArray();

                                            $i = 1;

                                            foreach ($result as $result_in) {

                                            ?>
                        <tr>
                           <td><?php echo $result_in->id; ?></td>
                           <td>
                              <h6 class="mb-0"><?php echo $result_in->task; ?></h6>
                              
                           </td>
                           <td>
                              <ul class="list-unstyled team-info mb-0">
                                 <li><?php echo $result_in->team; ?></li>
                                 
                              </ul>
                           </td>
                           <td>
                              <div class="text-info"><?php echo $result_in->duration_from; ?></div>
                              <div class="text-pink"><?php echo $result_in->duration_to; ?></div>
                           </td>
                           <td><span class="tag tag-blue"><?php echo $result_in->status; ?></span></td>
                           <td>
                              <div class="clearfix">
                                 <div class="float-left"><strong><?php echo $result_in->progress; ?></strong></div>
                                 <div class="float-right"><small class="text-muted">Progress</small></div>
                              </div>
                              <div class="progress progress-xs">
                                 <div class="progress-bar bg-azure" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                              </div>
                           </td>
                           <td>
                                                <a href="/taskboard/edit/<?php echo $result_in->id; ?>" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
                                                 <button onclick="deleteTaskboard('{{$result_in->id}}')" type="button" class="btn btn-icon btn-sm" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                            </td>
                        </tr>
                         <?php $i++;
                                            } ?> 
                                                      
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="tab-pane fade" id="TaskBoard-grid" role="tabpanel">
               <div class="row clearfix">
                  <div class="col-lg-4 col-md-12">
                     <div class="card  planned_task ">
                        <div class="card-header">
                           <h3 class="card-title">Planned</h3>
                           <div class="card-options">
                              <span class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></span><span class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></span>
                              <div class="item-action dropdown ml-2">
                                 <a href="fake_url" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                 <div class="dropdown-menu dropdown-menu-right">
                                    <a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="card-body">
                           <div class="dd" data-plugin="nestable">
                              <ol class="dd-list">
                                 <li class="dd-item" data-id="1">
                                    <div class="dd-handle">
                                       <h6>Dashbaord</h6>
                                       <span class="time"><span class="text-primary">Start: 5 Aug</span> to <span class="text-danger">Complete: 15 Aug</span></span>
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                       <ul class="list-unstyled team-info">
                                          <li><img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar1.jpg')}}" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                          <li><img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar2.jpg')}}" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                          <li><img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar5.jpg')}}" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                       </ul>
                                    </div>
                                 </li>
                                 <li class="dd-item" data-id="2">
                                    <div class="dd-handle">
                                       <h6>New project</h6>
                                       <span class="time"><span class="text-primary">Start: 6 Aug</span> to <span class="text-danger">Complete: 28 Aug</span></span>
                                       <p>It is a long established fact that a reader will be distracted.</p>
                                    </div>
                                 </li>
                                 <li class="dd-item" data-id="3">
                                    <div class="dd-handle">
                                       <h6>Feed Details</h6>
                                       <p>here are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
                                    </div>
                                 </li>
                              </ol>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-12">
                     <div class="card  progress_task ">
                        <div class="card-header">
                           <h3 class="card-title">In progress</h3>
                           <div class="card-options">
                              <span class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></span><span class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></span>
                              <div class="item-action dropdown ml-2">
                                 <a href="fake_url" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                 <div class="dropdown-menu dropdown-menu-right">
                                    <a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="card-body">
                           <div class="dd" data-plugin="nestable">
                              <ol class="dd-list">
                                 <li class="dd-item" data-id="1">
                                    <div class="dd-handle">
                                       <h6>New Code Update</h6>
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                 </li>
                                 <li class="dd-item" data-id="2">
                                    <div class="dd-handle">
                                       <h6>Meeting</h6>
                                       <span class="time"><span class="text-primary">Start: 5 Aug</span> to <span class="text-danger">Complete: 11 Aug</span></span>
                                       <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero</p>
                                       <ul class="list-unstyled team-info">
                                          <li><img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar7.jpg')}}" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                          <li><img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar8.jpg')}}" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                       </ul>
                                    </div>
                                 </li>
                                 <li class="dd-item" data-id="2">
                                    <div class="dd-handle">
                                       <h6>New project</h6>
                                       <p>It is a long established fact that a reader will be distracted.</p>
                                    </div>
                                 </li>
                                 <li class="dd-item" data-id="3">
                                    <div class="dd-handle">
                                       <h6>Feed Details</h6>
                                       <p>here are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
                                    </div>
                                 </li>
                              </ol>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-12">
                     <div class="card  completed_task ">
                        <div class="card-header">
                           <h3 class="card-title">Completed</h3>
                           <div class="card-options">
                              <span class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></span><span class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></span>
                              <div class="item-action dropdown ml-2">
                                 <a href="fake_url" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                 <div class="dropdown-menu dropdown-menu-right">
                                    <a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="card-body">
                           <div class="dd" data-plugin="nestable">
                              <ol class="dd-list">
                                 <li class="dd-item" data-id="1">
                                    <div class="dd-handle">
                                       <h6>Job title</h6>
                                       <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                       <ul class="list-unstyled team-info">
                                          <li><img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar4.jpg')}}" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                          <li><img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar5.jpg')}}" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                          <li><img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar6.jpg')}}" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                          <li><img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar8.jpg')}}" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                       </ul>
                                    </div>
                                 </li>
                                 <li class="dd-item" data-id="2">
                                    <div class="dd-handle">
                                       <h6>Event Done</h6>
                                       <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical</p>
                                    </div>
                                 </li>
                                 <li class="dd-item" data-id="1">
                                    <div class="dd-handle">
                                       <h6>New Code Update</h6>
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                 </li>
                              </ol>
                           </div>
                        </div>
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

            <form action="{{route('add-taskboard')}}" method="post" enctype="multipart/form-data">

                @csrf

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Taskboard</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row clearfix">
                    <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="task" placeholder="Enter Task">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="team" placeholder="Enter Team">
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="datetime-local" class="form-control" name="duration_from" placeholder="Enter Duration From">
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="datetime-local" class="form-control" name="duration_to" placeholder="Enter Duration To">
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                              <div class="form-group">
                                 <select class="form-control show-tick" name="status">
                                    <option>Status</option>
                                    <option>Planned</option>
                                    <option>Completed</option>
                                    <option>In progress</option>
                                    <option>In completed</option>
                                </select>
                              </div>
                           </div>  

                           <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="progress" placeholder="Enter Progress">
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
        window.location.href = "{{ route('taskboard') }}";
    }
</script>

<script type="text/javascript">
    var rakesh = $.noConflict();

    rakesh(document).ready(function() {

        rakesh('.songs').select2();

    });

    function deleteTaskboard(id)

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

                    url: "<?= url('delete_taskboard') ?>",

                    data: {
                        'table': 'taskboard',
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
