@include('layouts_user.header')

<div class="page">
   <div>
      <div id="page_top" class="section-body  ">
         <div class="container-fluid">
            <div class="page-header">
               <div class="left">
                  <h1 class="page-title">Project</h1>
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

                                <form action="{{ route('edit-project-list') }}" method="post" enctype="multipart/form-data">

                                    @csrf

                                    <div class="">

                                        <div class="row clearfix">

                                            <!------------------------------------------------>

                                            <div class="col-md-12">

                                                <h6 style="background: #edeff3;padding: 10px;">Project Information</h6>

                                                <input type="hidden" name="id" value="<?php echo @$result->id; ?>">


                                                <div class="row">


                                                   <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                            <label for="invoice_no">Invoice No.</label>
                                                            <input type="text" class="form-control" name="invoice_no" value="<?php echo @$result->invoice_no; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                                        <div class="form-group">

                                                            <label for="client_name">Client Name</label>

                                                            <input type="text" class="form-control" name="client_name" value="<?php echo @$result->client_name; ?>">

                                                        </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-sm-12">

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
                                                    
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label for="technology">Technology</label>
                                                            <input type="text" class="form-control" name="technology" value="<?php echo @$result->technology; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 col-md-12 col-sm-12">

                                                        <div class="form-group">

                                                            <label for="short_description">Short Description</label>

                                                            <input type="text" class="form-control" name="short_description" value="<?php echo @$result->short_description; ?>">

                                                        </div>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12">

                                                        <div class="form-group">

                                                            <label for="created">Created At</label>

                                                            <input type="datetime-local" class="form-control" name="created" value="<?php echo @$result->created; ?>">

                                                        </div>
                                                  </div>
                                                    
                                                    <div class="col-lg-12 col-md-12 col-sm-12">

                                                        <div class="form-group">

                                                            <label for="milestone">Milestone</label>

                                                            <input type="text" class="form-control" name="milestone" value="<?php echo @$result->milestone; ?>">

                                                        </div>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12">

                                                        <div class="form-group">

                                                            <label for="work">Work</label>

                                                            <input type="text" class="form-control" name="work" value="<?php echo @$result->work; ?>">

                                                        </div>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12">

                                                        <div class="form-group">

                                                            <label for="duration">Duration</label>

                                                            <input type="text" class="form-control" name="duration" value="<?php echo @$result->duration; ?>">

                                                        </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-sm-12">

                                                        <div class="form-group">

                                                            <label for="progress">Progress</label>

                                                            <input type="text" class="form-control" name="progress" value="<?php echo @$result->progress; ?>">

                                                        </div>

                                                    </div>

                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label for="status">Priority</label>
                                                    <select class="form-control show-tick" name="priority">
                                                        <option>Priority</option>
                                                        <option value="medium" {{ $result->priority == 'Medium' ? 'selected' : '' }}>Medium</option>
                                                        <option value="high" {{ $result->priority == 'High' ? 'selected' : '' }}>High</option>
                                                        <option value="none" {{ $result->priority == 'None' ? 'selected' : '' }}>None</option>
                                                    </select>
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

                                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href='/project-list'">Close</button>

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

   <div class="section-body  ">
      <div class="container-fluid">
         <div class="d-flex justify-content-between align-items-center">
            <ul class="nav nav-tabs page-header-tab">
               <li class="nav-item"><a class="nav-link active" id="Project-tab" data-toggle="tab" href="#Project-OnGoing">OnGoing</a></li>
               <li class="nav-item"><a class="nav-link" id="Project-tab" data-toggle="tab" href="#Project-UpComing">UpComing</a></li>
            </ul>
            <div class="header-action d-md-flex">
               <div class="input-group mr-2"><input type="text" class="form-control" placeholder="Search..."></div>
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fe fe-plus mr-2"></i>Add</button>
            </div>
         </div>
      </div>
   </div>
   <div class="section-body mt-3">
      <div class="container-fluid">
         <div class="tab-content">
            <div class="tab-pane fade show active" id="Project-OnGoing" role="tabpanel">
               <div class="row">
               
               <?php
               $result = DB::table('projectdashboard')->get()->toArray();
               $i = 1;

               foreach ($result as $result_in) {
                  $project = [
                     'project_name' => $result_in->project_name,
                     'status' => $result_in->status,
                     'technology' => $result_in->technology,
                     'short_description' => $result_in->short_description,
                     'created' => $result_in->created,
                     'team' => $result_in->team,
                     'progress' => $result_in->progress
                  ];
                  ?>
               
                  <div class="col-lg-4 col-md-12">
                     <div class="card ">
                        <div class="card-header">
                           <h3 class="card-title"><?php echo $project['project_name']; ?></h3>
                           <div class="card-options"><label class="custom-switch m-0"><input type="checkbox" class="custom-switch-input" value="1" checked=""><span class="custom-switch-indicator"></span></label><span class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></span></div>
                        </div>
                        <div class="card-body">
                           <span class="tag tag-blue mb-3"><?php echo $project['technology']; ?></span>
                           <p><?php echo $project['short_description']; ?></p>
                           <div class="row">
                              <div class="col-5 py-1"><strong>Created:</strong></div>
                              <div class="col-7 py-1"><?php echo $project['created']; ?></div>
                              <div class="col-5 py-1"><strong>Creator:</strong></div>
                              <div class="col-7 py-1"><?php echo $project['team']; ?></div>
                              <div class="col-5 py-1"><strong>Question:</strong></div>
                              <div class="col-7 py-1"><strong>23</strong></div>
                              <div class="col-5 py-1"><strong>Comments:</strong></div>
                              <div class="col-7 py-1"><strong>32</strong></div>
                              <div class="col-5 py-1"><strong>Bug:</strong></div>
                              <div class="col-7 py-1"><strong>5</strong></div>
                              <div class="col-5 py-1"><strong>Team:</strong></div>
                              <div class="col-7 py-1">
                                 <div class="avatar-list avatar-list-stacked"><img class="avatar avatar-sm" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar1.jpg')}}" data-toggle="tooltip" data-original-title="Avatar Name" alt="fake_url"><img class="avatar avatar-sm" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar2.jpg')}}" data-toggle="tooltip" data-original-title="Avatar Name" alt="fake_url"><img class="avatar avatar-sm" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar3.jpg')}}" data-toggle="tooltip" data-original-title="Avatar Name" alt="fake_url"><img class="avatar avatar-sm" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar4.jpg')}}" data-toggle="tooltip" data-original-title="Avatar Name" alt="fake_url"><img class="avatar avatar-sm" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar5.jpg')}}" data-toggle="tooltip" data-original-title="Avatar Name" alt="fake_url"><span class="avatar avatar-sm">+8</span></div>
                              </div>
                           </div>
                        </div>
                        <div class="card-footer">
                           <div class="clearfix">
                              <div class="float-left"><strong><?php echo $project['progress']; ?></strong></div>
                              <div class="float-right"><small class="text-muted">Progress</small></div>
                           </div>
                           <div class="progress progress-xs">
                              <div class="progress-bar bg-red" role="progressbar" aria-valuenow="<?php echo $project['progress']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $project['progress']; ?>%;"></div>
                           </div>
                           <a href="/project-list/edit/<?php echo $result_in->id; ?>" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
                        <button type="button" class="btn btn-icon btn-sm btn-sm" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                        <button type="button" class="btn btn-icon btn-sm" title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                        <button onclick="deleteProjectlist('{{$result_in->id}}')" type="button" class="btn btn-icon btn-sm" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                        </div>
                        
                     </div>
                  </div>
                  <?php
                     $i++;
                     }
                  ?>
                  
               </div>
            </div>
            <div class="tab-pane fade" id="Project-UpComing" role="tabpanel">
               <div class="card">
                  <div class="card-body">
                     <div class="table-responsive">
                        <table class="table table-hover table-striped table-vcenter mb-0">
                           <thead>
                              <tr>
                                 <th>Owner</th>
                                 <th>Milestone</th>
                                 <th class="w100">Work</th>
                                 <th class="w100">Duration</th>
                                 <th>Priority</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                           <?php $result = DB::table('projectdashboard')->get()->toArray();

                                            $i = 1;

                                            foreach ($result as $result_in) {

                                            ?>
                              <tr>
                                 <td><img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar1.jpg')}}" alt="Avatar" class="w30 rounded-circle mr-2"> <span><?php echo $result_in->client_name; ?></span></td>
                                 <td><?php echo $result_in->milestone; ?></td>
                                 <td><span><?php echo $result_in->work; ?></span></td>
                                 <td><?php echo $result_in->duration; ?></td>
                                 <td><span class="text-warning"><?php echo $result_in->priority; ?></span></td>
                                  <td>
                                                <a href="/project-list/edit/<?php echo $result_in->id; ?>" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
                                                <button type="button" class="btn btn-icon btn-sm btn-sm" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                                <button type="button" class="btn btn-icon btn-sm" title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                                <button onclick="deleteProjectlist('{{$result_in->id}}')" type="button" class="btn btn-icon btn-sm" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
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

            <form action="{{route('add-project-list')}}" method="post" enctype="multipart/form-data">

                @csrf

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Project List</h5>
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
                       
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="technology" placeholder="Enter Technology">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="short_description" placeholder="Enter Short Description">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="datetime-local" class="form-control" name="created" placeholder="Enter Created At">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="progress" placeholder="Enter Progress">
                            </div>
                        </div>
                      <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="milestone" placeholder="Enter Milestone">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="work" placeholder="Enter Work">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="duration" placeholder="Enter Duration">
                            </div>
                        </div>
                       
                        
                        <div class="col-md-4 col-sm-12">
                              <div class="form-group">
                                 <select class="form-control show-tick" name="priority">
                                    <option>Priority</option>
                                    <option>Medium</option>
                                    <option>High</option>
                                    <option>None</option>
                                </select>
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

    function deleteProjectlist(id)

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

                    url: "<?= url('delete_projectlist') ?>",

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