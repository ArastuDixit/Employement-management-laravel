@include('layouts_user.header')

<div class="page">
   <div>
      <div id="page_top" class="section-body  ">
         <div class="container-fluid">
            <div class="page-header">
               <div class="left">
                  <h1 class="page-title">Job Resumes</h1>
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
   <div class="section-body  ">
      <div class="container-fluid">
         <div class="d-flex justify-content-between align-items-center">
            <ul class="nav nav-tabs page-header-tab">
               <li class="nav-item"><a class="nav-link active" id="Resumes-tab" data-toggle="tab" href="#Resumes-list">List View</a></li>
               <li class="nav-item"><a class="nav-link" id="Resumes-tab" data-toggle="tab" href="#Resumes-grid">Grid View</a></li>
            </ul>
            <div class="header-action d-md-flex">
               <div class="input-group mr-2"><input type="text" class="form-control" placeholder="Search..."></div>
               <button type="button" class="btn btn-primary"><i class="fe fe-plus mr-2"></i>Add</button>
            </div>
         </div>
         <div class="row clearfix">
            <div class="col-12">
               <div class="card">
                  <div class="card-body">
                     <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                           <label>Search</label>
                           <div class="input-group"><input type="text" class="form-control" placeholder="Search..."></div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                           <label>Hourly Rate</label>
                           <div class="multiselect_div">
                              <select class="custom-select">
                                 <option>All rates</option>
                                 <option value="1">$0 - $50</option>
                                 <option value="2">$50 - $100</option>
                                 <option value="3">$100 - $200</option>
                                 <option value="4">$200 - $500</option>
                                 <option value="5">$500 +</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                           <label>Academic Degree</label>
                           <div class="form-group">
                              <select class="custom-select">
                                 <option>All degrees</option>
                                 <option value="1">Associate degree</option>
                                 <option value="2">Bachelor's degree</option>
                                 <option value="3">Master's degree</option>
                                 <option value="4">Doctoral degree</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                           <label>Order</label>
                           <div class="form-group">
                              <select class="custom-select">
                                 <option>Relevance</option>
                                 <option value="1">Highest rate first</option>
                                 <option value="2">Lowest rate first</option>
                                 <option value="3">Highest degree first</option>
                                 <option value="4">Lowest degree first</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6"><label>&nbsp;</label><a href="fake_url;" class="btn btn-sm btn-primary btn-block">Filter</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="section-body">
      <div class="container-fluid">
         <div class="tab-content">
            <div class="tab-pane fade show active" id="Resumes-list" role="tabpanel">
               <div class="table-responsive">
                  <table class="table table-vcenter table_custom spacing5 border-style mb-0">
                     <thead>
                        <tr>
                           <th class="w40">#</th>
                           <th>Name</th>
                           <th>Designation</th>
                           <th>Address</th>
                           <th>Rate</th>
                           <th>Experience</th>
                           <th>Review</th>
                           <th class="w40"></th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td><span class="avatar avatar-pink" data-toggle="tooltip" data-placement="top" data-original-title="Avatar Name">GH</span></td>
                           <td>Michelle Green</td>
                           <td>Web Developer</td>
                           <td><span>123 6th St. Melbourne, FL 32904</span></td>
                           <td>$34 per hour</td>
                           <td>2+ Year</td>
                           <td><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></td>
                           <td>
                              <div class="item-action dropdown">
                                 <a href="fake_url" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                 <div class="dropdown-menu dropdown-menu-right" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(11px, -1px, 0px);"><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a></div>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td><img class="avatar" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar1.jpg')}}" data-toggle="tooltip" data-placement="top" data-original-title="Avatar Name" alt="fake_url"></td>
                           <td>Jason Porter</td>
                           <td>UI UX Designer</td>
                           <td><span>123 6th St. Melbourne, FL 32904</span></td>
                           <td>$61 per hour</td>
                           <td>5+ Year</td>
                           <td><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star"></i></td>
                           <td>
                              <div class="item-action dropdown">
                                 <a href="fake_url" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                 <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(18px, 25px, 0px);"><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a></div>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td><span class="avatar avatar-indigo" data-toggle="tooltip" data-placement="top" data-original-title="Avatar Name">KL</span></td>
                           <td>David Wallace</td>
                           <td>Java Developer</td>
                           <td><span>123 6th St. Melbourne, FL 32904</span></td>
                           <td>$76 per hour</td>
                           <td>7+ Year</td>
                           <td><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star"></i></td>
                           <td>
                              <div class="item-action dropdown">
                                 <a href="fake_url" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                 <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(18px, 25px, 0px);"><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a></div>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td><span class="avatar avatar-orange" data-toggle="tooltip" data-placement="top" data-original-title="Avatar Name">KL</span></td>
                           <td>David Wallace</td>
                           <td>Java Developer</td>
                           <td><span>123 6th St. Melbourne, FL 32904</span></td>
                           <td>$76 per hour</td>
                           <td>7+ Year</td>
                           <td><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i></td>
                           <td>
                              <div class="item-action dropdown">
                                 <a href="fake_url" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                 <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(18px, 25px, 0px);"><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a></div>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td><img class="avatar" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar3.jpg')}}" data-toggle="tooltip" data-placement="top" data-original-title="Avatar Name" alt="fake_url"></td>
                           <td>Michelle Green</td>
                           <td>PHP</td>
                           <td><span>123 6th St. Melbourne, FL 32904</span></td>
                           <td>$29 per hour</td>
                           <td>4+ Year</td>
                           <td><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star"></i></td>
                           <td>
                              <div class="item-action dropdown">
                                 <a href="fake_url" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                 <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(18px, 25px, 0px);"><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a></div>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td><img class="avatar" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar4.jpg')}}" data-toggle="tooltip" data-placement="top" data-original-title="Avatar Name" alt="fake_url"></td>
                           <td>Michelle Green</td>
                           <td>PHP</td>
                           <td><span>123 6th St. Melbourne, FL 32904</span></td>
                           <td>$29 per hour</td>
                           <td>4+ Year</td>
                           <td><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star"></i></td>
                           <td>
                              <div class="item-action dropdown">
                                 <a href="fake_url" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                 <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(18px, 25px, 0px);"><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a></div>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td><span class="avatar avatar-blue" data-toggle="tooltip" data-placement="top" data-original-title="Avatar Name">KL</span></td>
                           <td>David Wallace</td>
                           <td>Java Developer</td>
                           <td><span>123 6th St. Melbourne, FL 32904</span></td>
                           <td>$76 per hour</td>
                           <td>7+ Year</td>
                           <td><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></td>
                           <td>
                              <div class="item-action dropdown">
                                 <a href="fake_url" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                 <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(18px, 25px, 0px);"><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a></div>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td><img class="avatar" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar5.jpg')}}" data-toggle="tooltip" data-placement="top" data-original-title="Avatar Name" alt="fake_url"></td>
                           <td>Michelle Green</td>
                           <td>PHP</td>
                           <td><span>123 6th St. Melbourne, FL 32904</span></td>
                           <td>$29 per hour</td>
                           <td>4+ Year</td>
                           <td><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star"></i></td>
                           <td>
                              <div class="item-action dropdown">
                                 <a href="fake_url" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                 <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(18px, 25px, 0px);"><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a></div>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td><img class="avatar" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar2.jpg')}}" data-toggle="tooltip" data-placement="top" data-original-title="Avatar Name" alt="fake_url"></td>
                           <td>Michelle Green</td>
                           <td>PHP</td>
                           <td><span>123 6th St. Melbourne, FL 32904</span></td>
                           <td>$29 per hour</td>
                           <td>4+ Year</td>
                           <td><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star"></i></td>
                           <td>
                              <div class="item-action dropdown">
                                 <a href="fake_url" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                 <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(18px, 25px, 0px);"><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a></div>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td><span class="avatar avatar-green" data-toggle="tooltip" data-placement="top" data-original-title="Avatar Name">KL</span></td>
                           <td>David Wallace</td>
                           <td>Java Developer</td>
                           <td><span>123 6th St. Melbourne, FL 32904</span></td>
                           <td>$76 per hour</td>
                           <td>7+ Year</td>
                           <td><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i></td>
                           <td>
                              <div class="item-action dropdown">
                                 <a href="fake_url" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                 <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(18px, 25px, 0px);"><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a></div>
                              </div>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="tab-pane fade" id="Resumes-grid" role="tabpanel">
               <div class="row clearfix">
                  <div class="col-xl-3 col-lg-4 col-md-6">
                     <div class="card">
                        <div class="body text-center p-4">
                           <img class="rounded-circle w100 img-thumbnail" src="{{ asset('resources/user-assets/laravel/public/assets/images/sm/avatar1.jpg')}}" alt="fake_url">
                           <h6 class="mt-3 mb-0">Michelle Green</h6>
                           <span>Web Developer</span>
                           <ul class="mt-3 mb-4 list-unstyled d-flex justify-content-center">
                              <li><a class="p-3" target="_blank" href="/#">Java</a></li>
                              <li><a class="p-3" target="_blank" href="/#">CSS</a></li>
                              <li><a class="p-3" target="_blank" href="/#">HTML</a></li>
                           </ul>
                           <hr>
                           <div class="d-flex justify-content-between">
                              <div><i class="fa fa-dollar"></i> 55 / hour</div>
                              <div><i class="fa fa-map-marker"></i> Akron, OH</div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6">
                     <div class="card">
                        <div class="body text-center p-4">
                           <img class="rounded-circle w100 img-thumbnail" src="{{ asset('resources/user-assets/laravel/public/assets/images/sm/avatar2.jpg')}}" alt="fake_url">
                           <h6 class="mt-3 mb-0">Jason Porter</h6>
                           <span>Carol@info.com</span>
                           <ul class="mt-3 mb-4 list-unstyled d-flex justify-content-center">
                              <li><a class="p-3" target="_blank" href="/#">Creativity</a></li>
                              <li><a class="p-3" target="_blank" href="/#">UIUX</a></li>
                           </ul>
                           <hr>
                           <div class="d-flex justify-content-between">
                              <div><i class="fa fa-dollar"></i> 55 / hour</div>
                              <div><i class="fa fa-map-marker"></i> Akron, OH</div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6">
                     <div class="card">
                        <div class="body text-center p-4">
                           <img class="rounded-circle w100 img-thumbnail" src="{{ asset('resources/user-assets/laravel/public/assets/images/sm/avatar3.jpg')}}" alt="fake_url">
                           <h6 class="mt-3 mb-0">David Wallace</h6>
                           <span>Michelle@info.com</span>
                           <ul class="mt-3 mb-4 list-unstyled d-flex justify-content-center">
                              <li><a class="p-3" target="_blank" href="/#">Swift</a></li>
                              <li><a class="p-3" target="_blank" href="/#">Xcode</a></li>
                              <li><a class="p-3" target="_blank" href="/#">C#</a></li>
                           </ul>
                           <hr>
                           <div class="d-flex justify-content-between">
                              <div><i class="fa fa-dollar"></i> 55 / hour</div>
                              <div><i class="fa fa-map-marker"></i> Akron, OH</div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6">
                     <div class="card">
                        <div class="body text-center p-4">
                           <img class="rounded-circle w100 img-thumbnail" src="{{ asset('resources/user-assets/laravel/public/assets/images/sm/avatar4.jpg')}}" alt="fake_url">
                           <h6 class="mt-3 mb-0">Michelle Green</h6>
                           <span>jason-porter@info.com</span>
                           <ul class="mt-3 mb-4 list-unstyled d-flex justify-content-center">
                              <li><a class="p-3" target="_blank" href="/#">Android</a></li>
                              <li><a class="p-3" target="_blank" href="/#">Playstor</a></li>
                              <li><a class="p-3" target="_blank" href="/#">Perl</a></li>
                           </ul>
                           <hr>
                           <div class="d-flex justify-content-between">
                              <div><i class="fa fa-dollar"></i> 55 / hour</div>
                              <div><i class="fa fa-map-marker"></i> Akron, OH</div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6">
                     <div class="card">
                        <div class="body text-center p-4">
                           <img class="rounded-circle w100 img-thumbnail" src="{{ asset('resources/user-assets/laravel/public/assets/images/sm/avatar5.jpg')}}" alt="fake_url">
                           <h6 class="mt-3 mb-0">Michelle Green</h6>
                           <span>jason-porter@info.com</span>
                           <ul class="mt-3 mb-4 list-unstyled d-flex justify-content-center">
                              <li><a class="p-3" target="_blank" href="/#">Negotiation</a></li>
                              <li><a class="p-3" target="_blank" href="/#">Writing</a></li>
                           </ul>
                           <hr>
                           <div class="d-flex justify-content-between">
                              <div><i class="fa fa-dollar"></i> 55 / hour</div>
                              <div><i class="fa fa-map-marker"></i> Akron, OH</div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6">
                     <div class="card">
                        <div class="body text-center p-4">
                           <img class="rounded-circle w100 img-thumbnail" src="{{ asset('resources/user-assets/laravel/public/assets/images/sm/avatar6.jpg')}}" alt="fake_url">
                           <h6 class="mt-3 mb-0">Michelle Green</h6>
                           <span>jason-porter@info.com</span>
                           <ul class="mt-3 mb-4 list-unstyled d-flex justify-content-center">
                              <li><a class="p-3" target="_blank" href="/#">HTML</a></li>
                              <li><a class="p-3" target="_blank" href="/#">CSS</a></li>
                              <li><a class="p-3" target="_blank" href="/#">SCSS</a></li>
                           </ul>
                           <hr>
                           <div class="d-flex justify-content-between">
                              <div><i class="fa fa-dollar"></i> 55 / hour</div>
                              <div><i class="fa fa-map-marker"></i> Akron, OH</div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6">
                     <div class="card">
                        <div class="body text-center p-4">
                           <img class="rounded-circle w100 img-thumbnail" src="{{ asset('resources/user-assets/laravel/public/assets/images/sm/avatar1.jpg')}}" alt="fake_url">
                           <h6 class="mt-3 mb-0">Sean Black</h6>
                           <span>jason-porter@info.com</span>
                           <ul class="mt-3 mb-4 list-unstyled d-flex justify-content-center">
                              <li><a class="p-3" target="_blank" href="/#">PHP</a></li>
                              <li><a class="p-3" target="_blank" href="/#">Wordpress</a></li>
                           </ul>
                           <hr>
                           <div class="d-flex justify-content-between">
                              <div><i class="fa fa-dollar"></i> 55 / hour</div>
                              <div><i class="fa fa-map-marker"></i> Akron, OH</div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6">
                     <div class="card">
                        <div class="body text-center p-4">
                           <img class="rounded-circle w100 img-thumbnail" src="{{ asset('resources/user-assets/laravel/public/assets/images/sm/avatar2.jpg')}}" alt="fake_url">
                           <h6 class="mt-3 mb-0">David Wallace</h6>
                           <span>jason-porter@info.com</span>
                           <ul class="mt-3 mb-4 list-unstyled d-flex justify-content-center">
                              <li><a class="p-3" target="_blank" href="/#">C#</a></li>
                              <li><a class="p-3" target="_blank" href="/#">SQL Server</a></li>
                              <li><a class="p-3" target="_blank" href="/#">HTML</a></li>
                           </ul>
                           <hr>
                           <div class="d-flex justify-content-between">
                              <div><i class="fa fa-dollar"></i> 55 / hour</div>
                              <div><i class="fa fa-map-marker"></i> Akron, OH</div>
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
      </div>
   </div>
</div>

@include('layouts_user.footer')