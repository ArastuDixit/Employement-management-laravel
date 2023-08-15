@include('layouts_user.header')

<div class="page">
   <div>
      <div id="page_top" class="section-body  ">
         <div class="container-fluid">
            <div class="page-header">
               <div class="left">
                  <h1 class="page-title">Job Applicants</h1>
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
   <div class="section-body  mt-3">
      <div class="container-fluid">
         <div class="row clearfix">
            <div class="col-12">
               <div class="card">
                  <div class="card-body">
                     <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                           <label>Search</label>
                           <div class="input-group"><input type="text" class="form-control" placeholder="Search..."></div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                           <label>Status</label>
                           <div class="multiselect_div">
                              <select class="custom-select">
                                 <option>None Selected</option>
                                 <option value="1">All Status</option>
                                 <option value="2">New</option>
                                 <option value="3">Contacted</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                           <label>Order</label>
                           <div class="form-group">
                              <select class="custom-select">
                                 <option>Newest first</option>
                                 <option value="1">Oldest first</option>
                                 <option value="2">Low salary first</option>
                                 <option value="3">High salary first</option>
                                 <option value="3">Sort by name</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6"><label>&nbsp;</label><a href="fake_url" class="btn btn-sm btn-primary btn-block">Filter</a></div>
                     </div>
                  </div>
               </div>
               <div class="table-responsive">
                  <table class="table table-hover table-vcenter table_custom text-nowrap spacing5 border-style mb-0">
                     <tbody>
                        <tr>
                           <td class="w60">
                              <div class="avatar avatar-pink" data-toggle="tooltip" data-placement="top" data-original-title="Avatar Name"><span>GH</span></div>
                           </td>
                           <td>
                              <div class="font-15">Google Inc.</div>
                              <span class="text-muted">Full-stack developer</span>
                           </td>
                           <td>$60 per hour</td>
                           <td><span class="tag tag-success">Full-time</span></td>
                           <td><span>123 6th St. Melbourne, FL 32904</span></td>
                           <td class="text-right">Applied on: <strong>04 Jan, 2019</strong></td>
                        </tr>
                        <tr>
                           <td class="w60"><img class="avatar" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar1.jpg')}}" alt="fake_url"></td>
                           <td>
                              <div class="font-15">FaceBook Inc.</div>
                              <span class="text-muted">Marketing</span>
                           </td>
                           <td>$57 per hour</td>
                           <td><span class="tag tag-warning">Part-time</span></td>
                           <td><span>44 Shirley Ave. IL 60185</span></td>
                           <td class="text-right">Applied on: <strong>12 Jan, 2019</strong></td>
                        </tr>
                        <tr>
                           <td class="w60"><img class="avatar" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar2.jpg')}}" alt="fake_url"></td>
                           <td>
                              <div class="font-15">FaceBook Inc.</div>
                              <span class="text-muted">Full-stack developer</span>
                           </td>
                           <td>$43 per hour</td>
                           <td><span class="tag tag-success">Full-time</span></td>
                           <td><span>44 Shirley Ave. IL 60185</span></td>
                           <td class="text-right">Applied on: <strong>15 Jan, 2019</strong></td>
                        </tr>
                        <tr>
                           <td class="w60"><img class="avatar" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar3.jpg')}}" alt="fake_url"></td>
                           <td>
                              <div class="font-15">FaceBook Inc.</div>
                              <span class="text-muted">Web Application Developer</span>
                           </td>
                           <td>$55 per hour</td>
                           <td><span class="tag tag-success">Full-time</span></td>
                           <td><span>514 S. Magnolia St. Orlando</span></td>
                           <td class="text-right">Applied on: <strong>18 Jan, 2019</strong></td>
                        </tr>
                        <tr>
                           <td class="w60">
                              <div class="avatar avatar-blue" data-toggle="tooltip" data-placement="top" data-original-title="Avatar Name"><span>KT</span></div>
                           </td>
                           <td>
                              <div class="font-15">FaceBook Inc.</div>
                              <span class="text-muted">Designer</span>
                           </td>
                           <td>$43 per hour</td>
                           <td><span class="tag tag-warning">Part-time</span></td>
                           <td><span>44 Shirley Ave. IL 60185</span></td>
                           <td class="text-right">Applied on: <strong>24 Jan, 2019</strong></td>
                        </tr>
                        <tr>
                           <td class="w60"><img class="avatar" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar5.jpg')}}" alt="fake_url"></td>
                           <td>
                              <div class="font-15">iQuar Inc.</div>
                              <span class="text-muted">Sr. SQL Server Developer</span>
                           </td>
                           <td>$33 per hour</td>
                           <td><span class="tag tag-success">Full-time</span></td>
                           <td><span>44 Shirley Ave. IL 60185</span></td>
                           <td class="text-right">Applied on: <strong>05 Feb, 2019</strong></td>
                        </tr>
                        <tr>
                           <td class="w60"><img class="avatar" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar6.jpg')}}" alt="fake_url"></td>
                           <td>
                              <div class="font-15">Linkdin Inc.</div>
                              <span class="text-muted">Full-stack developer</span>
                           </td>
                           <td>$39 per hour</td>
                           <td><span class="tag tag-success">Full-time</span></td>
                           <td><span>44 Shirley Ave. IL 60185</span></td>
                           <td class="text-right">Applied on: <strong>11 March, 2019</strong></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <ul class="pagination mt-2">
                  <li class="page-item"><a class="page-link" href="fake_url;">Previous</a></li>
                  <li class="page-item active"><a class="page-link" href="fake_url;">1</a></li>
                  <li class="page-item"><a class="page-link" href="fake_url;">2</a></li>
                  <li class="page-item"><a class="page-link" href="fake_url;">3</a></li>
                  <li class="page-item"><a class="page-link" href="fake_url;">Next</a></li>
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