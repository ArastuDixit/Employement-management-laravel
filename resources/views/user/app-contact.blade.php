@include('layouts_user.header')

<div class="page">
   <div>
      <div id="page_top" class="section-body  ">
         <div class="container-fluid">
            <div class="page-header">
               <div class="left">
                  <h1 class="page-title">Contact</h1>
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
                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 36px, 0px);">
                           <a class="dropdown-item"><img class="w20 mr-2" src="../assets/images/flags/us.svg" alt="fake_url">English</a>
                           <div class="dropdown-divider"></div>
                           <a class="dropdown-item"><img class="w20 mr-2" src="../assets/images/flags/es.svg" alt="fake_url">Spanish</a><a class="dropdown-item"><img class="w20 mr-2" src="../assets/images/flags/jp.svg" alt="fake_url">japanese</a><a class="dropdown-item"><img class="w20 mr-2" src="../assets/images/flags/bl.svg" alt="fake_url">France</a>
                        </div>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reports</a>
                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 36px, 0px);"><a class="dropdown-item"><i class="dropdown-icon fa fa-file-excel-o"></i> MS Excel</a><a class="dropdown-item"><i class="dropdown-icon fa fa-file-word-o"></i> MS Word</a><a class="dropdown-item"><i class="dropdown-icon fa fa-file-pdf-o"></i> PDF</a></div>
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
   <div>
      <div class="section-body  mt-3">
         <div class="container-fluid">
            <div class="row clearfix">
               <div class="col-lg-12">
                  <div class="card">
                     <div class="card-body">
                        <div class="d-md-flex justify-content-between">
                           <ul class="nav nav-tabs b-none">
                              <li class="nav-item"><a class="nav-link active" id="list-tab" data-toggle="tab" href="#list"><i class="fa fa-list-ul"></i> List</a></li>
                              <li class="nav-item"><a class="nav-link" id="grid-tab" data-toggle="tab" href="#grid"><i class="fa fa-th"></i> Grid</a></li>
                              <li class="nav-item"><a class="nav-link" id="addnew-tab" data-toggle="tab" href="#addnew"><i class="fa fa-plus"></i> Add New</a></li>
                           </ul>
                           <div class="d-flex align-items-center sort_stat">
                              <div class="d-flex">
                                 <div class="ml-2">
                                    <p class="mb-0 font-11">MY INCOME</p>
                                    <h5 class="font-16 mb-0">$5,510</h5>
                                 </div>
                              </div>
                              <div class="d-flex ml-3">
                                 <div class="ml-2">
                                    <p class="mb-0 font-11">SITE TRAFFIC</p>
                                    <h5 class="font-16 mb-0">53% Up</h5>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="input-group mt-2"><input type="text" class="form-control search" placeholder="Search..."></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="section-body">
         <div class="container-fluid">
            <div class="tab-content">
               <div class="tab-pane fade active show" id="list" role="tabpanel">
                  <div class="table-responsive" id="users">
                     <table class="table table-hover table-vcenter text-nowrap table_custom border-style list">
                        <tbody>
                           <tr>
                              <td class="width35 hidden-xs"><a href="/#;" class="mail-star"><i class="fa fa-star"></i></a></td>
                              <td class="text-center width40">
                                 <div class="avatar d-block"><img class="avatar" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar4.jpg')}}" alt="avatar"></div>
                              </td>
                              <td>
                                 <div><a href="/#;">John Smith</a></div>
                                 <div class="text-muted">+264-625-2583</div>
                              </td>
                              <td class="hidden-xs">
                                 <div class="text-muted">johnsmith@info.com</div>
                              </td>
                              <td class="hidden-sm">
                                 <div class="text-muted">455 S. Airport St. Moncks Corner, SC 29461</div>
                              </td>
                              <td class="text-right"><a class="btn btn-sm btn-link" href="/#" data-toggle="tooltip" title="Phone"><i class="fa fa-phone"></i></a><a class="btn btn-sm btn-link" href="/#" data-toggle="tooltip" title="Mail"><i class="fa fa-envelope"></i></a><a class="btn btn-sm btn-link hidden-xs js-sweetalert" data-type="confirm" href="/#" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a></td>
                           </tr>
                           <tr>
                              <td class="width35 hidden-xs"><a href="/#;" class="mail-star active"><i class="fa fa-star"></i></a></td>
                              <td class="text-center width40">
                                 <div class="avatar d-block"><img class="avatar" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar2.jpg')}}" alt="avatar"></div>
                              </td>
                              <td>
                                 <div><a href="/#;">Merri Diamond</a></div>
                                 <div class="text-muted">+264-625-2583</div>
                              </td>
                              <td class="hidden-xs">
                                 <div class="text-muted">hermanbeck@info.com</div>
                              </td>
                              <td class="hidden-sm">
                                 <div class="text-muted">455 S. Airport St. Moncks Corner, SC 29461</div>
                              </td>
                              <td class="text-right"><a class="btn btn-sm btn-link" href="/#" data-toggle="tooltip" title="Phone"><i class="fa fa-phone"></i></a><a class="btn btn-sm btn-link" href="/#" data-toggle="tooltip" title="Mail"><i class="fa fa-envelope"></i></a><a class="btn btn-sm btn-link hidden-xs js-sweetalert" data-type="confirm" href="/#" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a></td>
                           </tr>
                           <tr>
                              <td class="hidden-xs"><a href="/#;" class="mail-star love"><i class="fa fa-heart"></i></a></td>
                              <td class="text-center width40">
                                 <div class="avatar d-block"><img class="avatar" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar3.jpg')}}" alt="avatar"></div>
                              </td>
                              <td>
                                 <div class="from"><a href="/#;">Sara Hopkins</a></div>
                                 <div class="text-muted">+264-625-3333</div>
                              </td>
                              <td class="hidden-xs">
                                 <div class="text-muted">maryadams@info.com</div>
                              </td>
                              <td class="hidden-sm">
                                 <div class="text-muted">19 Ohio St. Snellville, GA 30039</div>
                              </td>
                              <td class="text-right"><a class="btn btn-sm btn-link" href="/#" data-toggle="tooltip" title="Phone"><i class="fa fa-phone"></i></a><a class="btn btn-sm btn-link" href="/#" data-toggle="tooltip" title="Mail"><i class="fa fa-envelope"></i></a><a class="btn btn-sm btn-link hidden-xs js-sweetalert" data-type="confirm" href="/#" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a></td>
                           </tr>
                           <tr>
                              <td class="hidden-xs"><a href="/#;" class="mail-star active"><i class="fa fa-star"></i></a></td>
                              <td class="text-center width40">
                                 <div class="avatar d-block"><img class="avatar" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar7.jpg')}}" alt="avatar"></div>
                              </td>
                              <td>
                                 <div class="from"><a href="/#;">Andrew Patrick</a></div>
                                 <div class="text-muted">+264-625-2586</div>
                              </td>
                              <td class="hidden-xs">
                                 <div class="text-muted">mikethimas@info.com</div>
                              </td>
                              <td class="hidden-sm">
                                 <div class="text-muted">728 Blackburn St. Andover, MA 01810</div>
                              </td>
                              <td class="text-right"><a class="btn btn-sm btn-link" href="/#" data-toggle="tooltip" title="Phone"><i class="fa fa-phone"></i></a><a class="btn btn-sm btn-link" href="/#" data-toggle="tooltip" title="Mail"><i class="fa fa-envelope"></i></a><a class="btn btn-sm btn-link hidden-xs js-sweetalert" data-type="confirm" href="/#" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a></td>
                           </tr>
                           <tr>
                              <td class="hidden-xs"><a href="/#;" class="mail-star"><i class="fa fa-star"></i></a></td>
                              <td class="text-center width40">
                                 <div class="avatar d-block"><img class="avatar" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar5.jpg')}}" alt="avatar"></div>
                              </td>
                              <td>
                                 <div class="from"><a href="/#;">Claire Peters</a></div>
                                 <div class="text-muted">+264-625-3333</div>
                              </td>
                              <td class="hidden-xs">
                                 <div class="text-muted">clairepeters@info.com</div>
                              </td>
                              <td class="hidden-sm">
                                 <div class="text-muted">19 Ohio St. Snellville, GA 30039</div>
                              </td>
                              <td class="text-right"><a class="btn btn-sm btn-link" href="/#" data-toggle="tooltip" title="Phone"><i class="fa fa-phone"></i></a><a class="btn btn-sm btn-link" href="/#" data-toggle="tooltip" title="Mail"><i class="fa fa-envelope"></i></a><a class="btn btn-sm btn-link hidden-xs js-sweetalert" data-type="confirm" href="/#" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a></td>
                           </tr>
                           <tr>
                              <td class="hidden-xs"><a href="/#;" class="mail-star"><i class="fa fa-star"></i></a></td>
                              <td class="text-center width40">
                                 <div class="avatar d-block"><img class="avatar" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar6.jpg')}}" alt="avatar"></div>
                              </td>
                              <td>
                                 <div class="from"><a href="/#;">Allen Collins</a></div>
                                 <div class="text-muted">+264-625-4526</div>
                              </td>
                              <td class="hidden-xs">
                                 <div class="text-muted">kenpatrick@info.com</div>
                              </td>
                              <td class="hidden-sm">
                                 <div class="text-muted">728 Blackburn St. Andover, MA 01810</div>
                              </td>
                              <td class="text-right"><a class="btn btn-sm btn-link" href="/#" data-toggle="tooltip" title="Phone"><i class="fa fa-phone"></i></a><a class="btn btn-sm btn-link" href="/#" data-toggle="tooltip" title="Mail"><i class="fa fa-envelope"></i></a><a class="btn btn-sm btn-link hidden-xs js-sweetalert" data-type="confirm" href="/#" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a></td>
                           </tr>
                           <tr>
                              <td class="width35 hidden-xs"><a href="/#;" class="mail-star"><i class="fa fa-star"></i></a></td>
                              <td class="text-center width40">
                                 <div class="avatar d-block"><img class="avatar" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar4.jpg')}}" alt="avatar"></div>
                              </td>
                              <td>
                                 <div><a href="/#;">Erin Gonzales</a></div>
                                 <div class="text-muted">+264-625-1593</div>
                              </td>
                              <td class="hidden-xs">
                                 <div class="text-muted">eringonzales@info.com</div>
                              </td>
                              <td class="hidden-sm">
                                 <div class="text-muted">455 S. Airport St. Moncks Corner, SC 29461</div>
                              </td>
                              <td class="text-right"><a class="btn btn-sm btn-link" href="/#" data-toggle="tooltip" title="Phone"><i class="fa fa-phone"></i></a><a class="btn btn-sm btn-link" href="/#" data-toggle="tooltip" title="Mail"><i class="fa fa-envelope"></i></a><a class="btn btn-sm btn-link hidden-xs js-sweetalert" data-type="confirm" href="/#" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a></td>
                           </tr>
                           <tr>
                              <td class="hidden-xs"><a href="/#;" class="mail-star"><i class="fa fa-star"></i></a></td>
                              <td class="text-center width40">
                                 <div class="avatar d-block"><img class="avatar" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar5.jpg')}}" alt="avatar"></div>
                              </td>
                              <td>
                                 <div class="from"><a href="/#;">Harry McCall</a></div>
                                 <div class="text-muted">+264-625-2468</div>
                              </td>
                              <td class="hidden-xs">
                                 <div class="text-muted">susiewillis@info.com</div>
                              </td>
                              <td class="hidden-sm">
                                 <div class="text-muted">19 Ohio St. Snellville, GA 30039</div>
                              </td>
                              <td class="text-right"><a class="btn btn-sm btn-link" href="/#" data-toggle="tooltip" title="Phone"><i class="fa fa-phone"></i></a><a class="btn btn-sm btn-link" href="/#" data-toggle="tooltip" title="Mail"><i class="fa fa-envelope"></i></a><a class="btn btn-sm btn-link hidden-xs js-sweetalert" data-type="confirm" href="/#" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="tab-pane fade" id="grid" role="tabpanel">
                  <div class="row row-deck">
                     <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card ">
                           <div class="card-body">
                              <div class="card-status bg-blue"></div>
                              <div class="mb-3"><img src="{{ asset('resources/user-assets/laravel/public/assets/images/sm/avatar1.jpg')}}" class="rounded-circle w100" alt="fake_url"> </div>
                              <div class="mb-2">
                                 <h5 class="mb-0">Paul Schmidt</h5>
                                 <p class="text-muted">Aalizeethomas@info.com</p>
                                 <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt</span>
                              </div>
                              <span class="font-12 text-muted">Common Contact</span>
                              <ul class="list-unstyled team-info margin-0 pt-2">
                                 <li><img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar1.jpg')}}" alt="Avatar"></li>
                                 <li><img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar8.jpg')}}" alt="Avatar"></li>
                                 <li><img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar2.jpg')}}" alt="Avatar"></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card ">
                           <div class="card-body">
                              <div class="mb-3"><img src="{{ asset('resources/user-assets/laravel/public/assets/images/sm/avatar2.jpg')}}" class="rounded-circle w100" alt="fake_url"> </div>
                              <div class="mb-2">
                                 <h5 class="mb-0">Andrew Patrick</h5>
                                 <p>Aalizeethomas@info.com</p>
                                 <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt</span>
                              </div>
                              <span class="font-12 text-muted">Common Contact</span>
                              <ul class="list-unstyled team-info margin-0 pt-2">
                                 <li><img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar1.jpg')}}" alt="Avatar"></li>
                                 <li><img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar2.jpg')}}" alt="Avatar"></li>
                                 <li><img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar3.jpg')}}" alt="Avatar"></li>
                                 <li><img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar4.jpg')}}" alt="Avatar"></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card ">
                           <div class="card-body">
                              <div class="mb-3"><img src="{{ asset('resources/user-assets/laravel/public/assets/images/sm/avatar3.jpg')}}" class="rounded-circle w100" alt="fake_url"> </div>
                              <div class="mb-2">
                                 <h5 class="mb-0">Mary Schneider</h5>
                                 <p>Aalizeethomas@info.com</p>
                                 <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt</span>
                              </div>
                              <span class="font-12 text-muted">Common Contact</span>
                              <ul class="list-unstyled team-info margin-0 pt-2">
                                 <li><img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar1.jpg')}}" alt="Avatar"></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card ">
                           <div class="card-body">
                              <div class="card-status bg-green"></div>
                              <div class="mb-3"><img src="{{ asset('resources/user-assets/laravel/public/assets/images/sm/avatar4.jpg')}}" class="rounded-circle w100" alt="fake_url"> </div>
                              <div class="mb-2">
                                 <h5 class="mb-0">Sean Black</h5>
                                 <p>Aalizeethomas@info.com</p>
                                 <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt</span>
                              </div>
                              <span class="font-12 text-muted">Common Contact</span>
                              <ul class="list-unstyled team-info margin-0 pt-2">
                                 <li><img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar2.jpg')}}" alt="Avatar"></li>
                                 <li><img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar6.jpg')}}" alt="Avatar"></li>
                                 <li><img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar5.jpg')}}" alt="Avatar"></li>
                                 <li><img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar7.jpg')}}" alt="Avatar"></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card ">
                           <div class="card-body">
                              <div class="mb-3"><img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar5.jpg')}}" class="rounded-circle w100" alt="fake_url"> </div>
                              <div class="mb-2">
                                 <h5 class="mb-0">David Wallace</h5>
                                 <p>Aalizeethomas@info.com</p>
                                 <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt</span>
                              </div>
                              <span class="font-12 text-muted">Common Contact</span>
                              <ul class="list-unstyled team-info margin-0 pt-2">
                                 <li><img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar3.jpg')}}" alt="Avatar"></li>
                                 <li><img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar4.jpg')}}" alt="Avatar"></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card ">
                           <div class="card-body">
                              <div class="card-status bg-pink"></div>
                              <div class="mb-3"><img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar6.jpg')}}" class="rounded-circle w100" alt="fake_url"> </div>
                              <div class="mb-2">
                                 <h5 class="mb-0">Andrew Patrick</h5>
                                 <p>Aalizeethomas@info.com</p>
                                 <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt</span>
                              </div>
                              <span class="font-12 text-muted">Common Contact</span>
                              <ul class="list-unstyled team-info margin-0 pt-2">
                                 <li><img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar5.jpg')}}" alt="Avatar"></li>
                                 <li><img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar6.jpg')}}" alt="Avatar"></li>
                                 <li><img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar1.jpg')}}" alt="Avatar"></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card ">
                           <div class="card-body">
                              <div class="mb-3"><img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar2.jpg')}}" class="rounded-circle w100" alt="fake_url"> </div>
                              <div class="mb-2">
                                 <h5 class="mb-0">Michelle Green</h5>
                                 <p>Aalizeethomas@info.com</p>
                                 <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt</span>
                              </div>
                              <span class="font-12 text-muted">Common Contact</span>
                              <ul class="list-unstyled team-info margin-0 pt-2">
                                 <li><img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar8.jpg')}}" alt="Avatar"></li>
                                 <li><img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar7.jpg')}}" alt="Avatar"></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card ">
                           <div class="card-body">
                              <div class="mb-3"><img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar4.jpg')}}" class="rounded-circle w100" alt="fake_url"> </div>
                              <div class="mb-2">
                                 <h5 class="mb-0">Mary Schneider</h5>
                                 <p>Aalizeethomas@info.com</p>
                                 <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt</span>
                              </div>
                              <span class="font-12 text-muted">Common Contact</span>
                              <ul class="list-unstyled team-info margin-0 pt-2">
                                 <li><img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar2.jpg')}}" alt="Avatar"></li>
                                 <li><img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar7.jpg')}}" alt="Avatar"></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="addnew" role="tabpanel">
                  <div class="card">
                     <div class="card-body">
                        <div class="row clearfix">
                           <div class="col-lg-4 col-md-12">
                              <div class="form-group"><input type="text" class="form-control" placeholder="Enter Name"></div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="form-group"><input type="number" class="form-control" placeholder="Enter Number"></div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="form-group"><input type="email" class="form-control" placeholder="Enter Email"></div>
                           </div>
                           <div class="col-lg-12 col-md-12">
                              <div class="form-group"><textarea type="text" class="form-control" rows="4">Enter your Address</textarea></div>
                           </div>
                           <div class="col-lg-12"><input type="file" class="dropify"></div>
                           <div class="col-lg-12 mt-3"><button type="submit" class="btn btn-primary">Add</button><button type="submit" class="btn btn-default">Cancel</button></div>
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
