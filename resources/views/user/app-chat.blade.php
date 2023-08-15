@include('layouts_user.header')

<div class="page">
   <div>
      <div id="page_top" class="section-body  ">
         <div class="container-fluid">
            <div class="page-header">
               <div class="left">
                  <h1 class="page-title">Friends Group</h1>
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
                           <a class="dropdown-item"><i class="dropdown-icon fe fe-help-circle"></i> Need help?</a><a class="dropdown-item" href="/login"><i class="dropdown-icon fe fe-log-out"></i> Sign out</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="section-light py-3 chat_app">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-8 col-md-12">
               <div class="card bg-none b-none">
                  <div class="card-header bline pt-1">
                     <h3 class="card-title">Friends Group <small>Last seen: 2 hours ago</small></h3>
                     <div class="card-options"><a href="/#" class="p-1 chat_list_btn"><i class="fa fa-align-right"></i></a><a href="/#" class="p-1"><i class="fa fa-plus"></i></a><a href="/#" class="p-1"><i class="fa fa-cog"></i></a><a href="/#" class="p-1"><i class="fa fa-refresh"></i></a></div>
                  </div>
                  <div class="chat_windows">
                     <ul class="mb-0">
                        <li class="other-message">
                           <img class="avatar mr-3" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar2.jpg')}}" alt="avatar">
                           <div class="message">
                              <p class="bg-light-blue">Are we meeting today?</p>
                              <span class="time">10:10 AM, Today</span>
                           </div>
                        </li>
                        <li class="other-message">
                           <img class="avatar mr-3" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar3.jpg')}}" alt="avatar">
                           <div class="message">
                              <p class="bg-light-cyan">Hi Aiden, how are you? How is the project coming along?</p>
                              <p class="bg-light-cyan">Are we meeting today?</p>
                              <span class="time">10:15 AM, Today</span>
                           </div>
                        </li>
                        <li class="my-message">
                           <div class="message">
                              <p class="bg-light-gray">Project has been already finished and I have results to show you.</p>
                              <div class="file_folder">
                                 <a href="/#;">
                                    <div class="icon"><i class="fa fa-file-excel-o text-success"></i></div>
                                    <div class="file-name">
                                       <p class="mb-0 text-muted">Report2017.xls</p>
                                       <small>Size: 68KB</small>
                                    </div>
                                 </a>
                                 <a href="/#;">
                                    <div class="icon"><i class="fa fa-file-word-o text-primary"></i></div>
                                    <div class="file-name">
                                       <p class="mb-0 text-muted">Report2017.doc</p>
                                       <small>Size: 68KB</small>
                                    </div>
                                 </a>
                              </div>
                              <span class="time">10:17 AM, Today</span>
                           </div>
                        </li>
                        <li class="other-message">
                           <img class="avatar mr-3" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar4.jpg')}}" alt="avatar">
                           <div class="message">
                              <div class="media_img"><img src="{{ asset('resources/user-assets/laravel/public/assets/images/gallery/1.jpg')}}" class="w150 img-thumbnail" alt="avatar"><img src="{{ asset('resources/user-assets/laravel/public/assets/images/gallery/2.jpg')}}" class="w150 img-thumbnail" alt="avatar"></div>
                              <span class="time">10:15 AM, Today</span>
                           </div>
                        </li>
                        <li class="other-message">
                           <span class="avatar avatar-blue mr-3">NG</span>
                           <div class="message">
                              <p class="bg-light-pink">Are we meeting today I have results?</p>
                              <p class="bg-light-pink">Project has been already finished and to show you.</p>
                              <span class="time">10:18 AM, Today</span>
                           </div>
                        </li>
                        <li class="my-message">
                           <div class="message">
                              <p class="bg-light-gray">Well we have good budget for the project</p>
                              <span class="time">10:25 AM, Today</span>
                           </div>
                        </li>
                        <li class="my-message">
                           <div class="message">
                              <div class="media_img"><img src="{{ asset('resources/user-assets/laravel/public/assets/images/gallery/3.jpg')}}" class="w100 img-thumbnail" alt="avatar"><img src="{{ asset('resources/user-assets/laravel/public/assets/images/gallery/4.jpg')}}" class="w100 img-thumbnail" alt="avatar"><img src="{{ asset('resources/user-assets/laravel/public/assets/images/gallery/5.jpg')}}" class="w100 img-thumbnail" alt="avatar"><img src="{{ asset('resources/user-assets/laravel/public/assets/images/gallery/6.jpg')}}" class="w100 img-thumbnail" alt="avatar"></div>
                              <span class="time">10:25 AM, Today</span>
                           </div>
                        </li>
                     </ul>
                     <div class="chat-message clearfix">
                        <a href="/#;"><i class="icon-camera"></i></a><a href="/#;"><i class="icon-camcorder"></i></a><a href="/#;"><i class="icon-paper-plane"></i></a>
                        <div class="input-group mb-0"><input type="text" class="form-control" placeholder="Enter text here..."></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="chat_list section-white" id="users">
         <a href="/#" class="chat_list_btn float-right"><i class="fa fa-align-right"></i></a>
         <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"><a class="nav-link active" id="users-tab" data-toggle="tab" href="#users-list" role="tab" aria-controls="users-list" aria-selected="true">Users</a></li>
            <li class="nav-item"><a class="nav-link" id="groups-tab" data-toggle="tab" href="#groups" role="tab" aria-controls="groups" aria-selected="false">Groups</a></li>
         </ul>
         <div class="input-group mt-2 mb-2"><input type="text" class="form-control search" placeholder="Search..."></div>
         <div class="tab-content">
            <div class="tab-pane fade show active" id="users-list" role="tabpanel" aria-labelledby="users-tab">
               <ul class="right_chat list-unstyled list">
                  <li class="online">
                     <a href="/#;">
                        <div class="media">
                           <img class="media-object" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar4.jpg')}}" alt="fake_url">
                           <div class="media-body"><span class="name">Ava Phillip Smith</span><span class="message">Are we meeting today?</span><span class="badge badge-outline status"></span></div>
                        </div>
                     </a>
                  </li>
                  <li class="online">
                     <a href="/#;">
                        <div class="media">
                           <img class="media-object" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar5.jpg')}}" alt="fake_url">
                           <div class="media-body"><span class="name">Debra Stewart</span><span class="message">Project has been already</span><span class="badge badge-outline status"></span></div>
                        </div>
                     </a>
                  </li>
                  <li class="offline">
                     <a href="/#;">
                        <div class="media">
                           <img class="media-object" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar2.jpg')}}" alt="fake_url">
                           <div class="media-body"><span class="name">Harry McCall</span><span class="message">Well we have good budget</span><span class="badge badge-outline status"></span></div>
                        </div>
                     </a>
                  </li>
                  <li class="offline">
                     <a href="/#;">
                        <div class="media">
                           <img class="media-object" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar1.jpg')}}" alt="fake_url">
                           <div class="media-body"><span class="name">Nancy Flanary</span><span class="message">i'm meeting today</span><span class="badge badge-outline status"></span></div>
                        </div>
                     </a>
                  </li>
                  <li class="online">
                     <a href="/#;">
                        <div class="media">
                           <img class="media-object" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar3.jpg')}}" alt="fake_url">
                           <div class="media-body"><span class="name">Marshall Nichols</span><span class="message">I have results to show you</span><span class="badge badge-outline status"></span></div>
                        </div>
                     </a>
                  </li>
                  <li class="online">
                     <a href="/#;">
                        <div class="media">
                           <img class="media-object" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar5.jpg')}}" alt="fake_url">
                           <div class="media-body"><span class="name">Debra Stewart</span><span class="message">How is the project coming</span><span class="badge badge-outline status"></span></div>
                        </div>
                     </a>
                  </li>
                  <li class="offline">
                     <a href="/#;">
                        <div class="media">
                           <img class="media-object" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar2.jpg')}}" alt="fake_url">
                           <div class="media-body"><span class="name">Harry McCall</span><span class="message">Well we have good budget</span><span class="badge badge-outline status"></span></div>
                        </div>
                     </a>
                  </li>
                  <li class="offline">
                     <a href="/#;">
                        <div class="media">
                           <img class="media-object" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar2.jpg')}}" alt="fake_url">
                           <div class="media-body"><span class="name">Harry McCall</span><span class="message">Are we meeting today?</span><span class="badge badge-outline status"></span></div>
                        </div>
                     </a>
                  </li>
                  <li class="offline">
                     <a href="/#;">
                        <div class="media">
                           <img class="media-object" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar1.jpg')}}" alt="fake_url">
                           <div class="media-body"><span class="name">Nancy Flanary</span><span class="message">Hi Suse, how are you?</span><span class="badge badge-outline status"></span></div>
                        </div>
                     </a>
                  </li>
                  <li class="online">
                     <a href="/#;">
                        <div class="media">
                           <img class="media-object" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar5.jpg')}}" alt="fake_url">
                           <div class="media-body"><span class="name">Debra Stewart</span><span class="message">Hi Aiden, how are you?</span><span class="badge badge-outline status"></span></div>
                        </div>
                     </a>
                  </li>
                  <li class="offline">
                     <a href="/#;">
                        <div class="media">
                           <img class="media-object" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar1.jpg')}}" alt="fake_url">
                           <div class="media-body"><span class="name">Nancy Flanary</span><span class="message">I have results to show you</span><span class="badge badge-outline status"></span></div>
                        </div>
                     </a>
                  </li>
                  <li class="online">
                     <a href="/#;">
                        <div class="media">
                           <img class="media-object" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar3.jpg')}}" alt="fake_url">
                           <div class="media-body"><span class="name">Marshall Nichols</span><span class="message">Well we have good budget</span><span class="badge badge-outline status"></span></div>
                        </div>
                     </a>
                  </li>
                  <li class="online">
                     <a href="/#;">
                        <div class="media">
                           <img class="media-object" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar5.jpg')}}" alt="fake_url">
                           <div class="media-body"><span class="name">Debra Stewart</span><span class="message">Hi Aiden, how are you?</span><span class="badge badge-outline status"></span></div>
                        </div>
                     </a>
                  </li>
                  <li class="offline">
                     <a href="/#;">
                        <div class="media">
                           <img class="media-object" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar2.jpg')}}" alt="fake_url">
                           <div class="media-body"><span class="name">Harry McCall</span><span class="message">I have results to show you</span><span class="badge badge-outline status"></span></div>
                        </div>
                     </a>
                  </li>
               </ul>
            </div>
            <div class="tab-pane fade" id="groups" role="tabpanel" aria-labelledby="groups-tab">
               <ul class="right_chat list-unstyled list">
                  <li class="online">
                     <a href="/#;">
                        <div class="media">
                           <img class="media-object" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar1.jpg')}}" alt="fake_url">
                           <div class="media-body"><span class="name">PHP Groups</span><span class="message">How is the project coming</span><span class="badge badge-outline status"></span></div>
                        </div>
                     </a>
                  </li>
                  <li class="online">
                     <a href="/#;">
                        <div class="media">
                           <img class="media-object" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar2.jpg')}}" alt="fake_url">
                           <div class="media-body"><span class="name">Family Groups</span><span class="message">Update Code</span><span class="badge badge-outline status"></span></div>
                        </div>
                     </a>
                  </li>
                  <li class="offline">
                     <a href="/#;">
                        <div class="media">
                           <img class="media-object" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar3.jpg')}}" alt="fake_url">
                           <div class="media-body"><span class="name">Harry McCall</span><span class="message">3 New design bug</span><span class="badge badge-outline status"></span></div>
                        </div>
                     </a>
                  </li>
                  <li class="offline">
                     <a href="/#;">
                        <div class="media">
                           <img class="media-object" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar4.jpg')}}" alt="fake_url">
                           <div class="media-body"><span class="name">Friends holic</span><span class="message">Hello All!</span><span class="badge badge-outline status"></span></div>
                        </div>
                     </a>
                  </li>
                  <li class="online">
                     <a href="/#;">
                        <div class="media">
                           <img class="media-object" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar5.jpg')}}" alt="fake_url">
                           <div class="media-body"><span class="name">CL City 2</span><span class="message">Add new contact</span><span class="badge badge-outline status"></span></div>
                        </div>
                     </a>
                  </li>
               </ul>
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
      </div>
   </div>
</div>

@include('layouts_user.footer')