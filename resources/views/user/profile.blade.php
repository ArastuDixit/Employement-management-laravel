@include('layouts_user.header')

<div class="page">
    <div>
        <div id="page_top" class="section-body  ">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="left">
                        <h1 class="page-title">My Profile</h1><select class="custom-select">
                            <option>Year</option>
                            <option>Month</option>
                            <option>Week</option>
                        </select>
                        <div class="input-group xs-hide"><input type="text" class="form-control" placeholder="Search..."></div>
                    </div>
                    <div class="right">
                        <ul class="nav nav-pills">
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Language</a>
                                <div class="dropdown-menu"><a class="dropdown-item"><img class="w20 mr-2" src="{{ asset('resources/user-assets/laravel/public/assets/images/flags/us.svg')}}" alt="fake_url">English</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item"><img class="w20 mr-2" src="{{ asset('resources/user-assets/laravel/public/assets/images/flags/es.svg')}}" alt="fake_url">Spanish</a><a class="dropdown-item"><img class="w20 mr-2" src="{{ asset('resources/user-assets/laravel/public/assets/images/flags/jp.svg')}}" alt="fake_url">japanese</a><a class="dropdown-item"><img class="w20 mr-2" src="{{ asset('public/assets/images/flags/bl.svg')}}" alt="fake_url">France</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reports</a>
                                <div class="dropdown-menu"><a class="dropdown-item"><i class="dropdown-icon fa fa-file-excel-o"></i> MS Excel</a><a class="dropdown-item"><i class="dropdown-icon fa fa-file-word-o"></i> MS Word</a><a class="dropdown-item"><i class="dropdown-icon fa fa-file-pdf-o"></i> PDF</a></div>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Project</a>
                                <div class="dropdown-menu"><a class="dropdown-item">Graphics Design</a><a class="dropdown-item">Angular Admin</a><a class="dropdown-item">PSD to HTML</a><a class="dropdown-item">iOs App Development</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item">Home Development</a><a class="dropdown-item">New Blog post</a>
                                </div>
                            </li>
                        </ul>
                        <div class="notification d-flex">
                            <div class="dropdown d-flex"><a href="/#" class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-success nav-unread"></span></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <ul class="right_chat list-unstyled w250 p-0">
                                        <li class="online"><a href="fake_url">
                                                <div class="media"><img class="media-object " src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar4.jpg')}}" alt="fake_url">
                                                    <div class="media-body"><span class="name">Donald Gardner</span><span class="message">Designer, Blogger</span><span class="badge badge-outline status"></span></div>
                                                </div>
                                            </a></li>
                                        <li class="online"><a href="fake_url">
                                                <div class="media"><img class="media-object " src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar5.jpg')}}" alt="fake_url">
                                                    <div class="media-body"><span class="name">Wendy Keen</span><span class="message">Java Developer</span><span class="badge badge-outline status"></span></div>
                                                </div>
                                            </a></li>
                                        <li class="offline"><a href="fake_url">
                                                <div class="media"><img class="media-object " src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar2.jpg')}}" alt="fake_url">
                                                    <div class="media-body"><span class="name">Matt Rosales</span><span class="message">CEO, Epic Theme</span><span class="badge badge-outline status"></span></div>
                                                </div>
                                            </a></li>
                                        <li class="online"><a href="fake_url">
                                                <div class="media"><img class="media-object " src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar3.jpg')}}" alt="fake_url">
                                                    <div class="media-body"><span class="name">Phillip Smith</span><span class="message">Writter, Mag Editor</span><span class="badge badge-outline status"></span></div>
                                                </div>
                                            </a></li>
                                    </ul>
                                    <div class="dropdown-divider"></div><a class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
                                </div>
                            </div>
                            <div class="dropdown d-flex"><a href="/#" class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="badge badge-primary nav-unread"></span></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <ul class="list-unstyled feeds_widget">
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-check"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title text-danger">Issue Fixed <small class="float-right text-muted">11:05</small></h4><small>WE have fix all Design bug with Responsive</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-user"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title">New User <small class="float-right text-muted">10:45</small></h4><small>I feel great! Thanks team</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-thumbs-o-up"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title">7 New Feedback <small class="float-right text-muted">Today</small></h4><small>It will give a smart finishing to your site</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-question-circle"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title text-warning">Server Warning <small class="float-right text-muted">10:50</small></h4><small>Your connection is not private</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-shopping-cart"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title">7 New Orders <small class="float-right text-muted">11:35</small></h4><small>You received a new oder from Tina.</small>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="dropdown-divider"></div><a href="fake_url" class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
                                </div>
                            </div>
                            <div class="dropdown d-flex"><a href="/#" class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-user"></i></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(36px, 26px, 0px);"><a class="dropdown-item active" href="/profile" aria-current="page"><i class="dropdown-icon fe fe-user"></i> Profile</a><a class="dropdown-item"><i class="dropdown-icon fe fe-settings"></i> Settings</a><a class="dropdown-item"><span class="float-right"><span class="badge badge-primary">6</span></span><i class="dropdown-icon fe fe-mail"></i> Inbox</a><a class="dropdown-item"><i class="dropdown-icon fe fe-send"></i> Message</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item"><i class="dropdown-icon fe fe-help-circle"></i> Need help?</a><a class="dropdown-item" href="/login"><i class="dropdown-icon fe fe-log-out"></i> Sign out</a>
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
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card card-profile">
                        <div class="card-body text-center"><img class="card-profile-img" src="{{ asset('resources/user-assets/laravel/public/assets/images/sm/avatar1.jpg')}}" alt="fake_url">
                            <h4 class="mb-3">Sara Hopkins</h4>
                            <ul class="social-links list-inline mb-3 mt-2">
                                <li class="list-inline-item"><a href="fake_url" title="Facebook" data-toggle="tooltip"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="fake_url" title="Twitter" data-toggle="tooltip"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="fake_url" title="1234567890" data-toggle="tooltip"><i class="fa fa-phone"></i></a></li>
                                <li class="list-inline-item"><a href="fake_url" title="@skypename" data-toggle="tooltip"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <p class="mb-4">Contrary to popular belief, Lorem Ipsum is not simply random text.<br> It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p><button class="btn btn-outline-primary btn-sm"><span class="fa fa-twitter"></span> Follow</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-body  py-4">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-12">
                    <ul class="nav nav-tabs mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="pills-calendar-tab" data-toggle="pill" href="#pills-calendar" role="tab" aria-controls="pills-calendar" aria-selected="false">Calendar</a></li>
                        <li class="nav-item"><a class="nav-link" id="pills-timeline-tab" data-toggle="pill" href="#pills-timeline" role="tab" aria-controls="pills-timeline" aria-selected="true">Timeline</a></li>
                        <li class="nav-item"><a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a></li>
                        <li class="nav-item"><a class="nav-link" id="pills-blog-tab" data-toggle="pill" href="#pills-blog" role="tab" aria-controls="pills-blog" aria-selected="true">Blog</a></li>
                    </ul>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-calendar" role="tabpanel" aria-labelledby="pills-calendar-tab">
                            <div class="card">
                                <div class="card-header bline">
                                    <h3 class="card-title">Calendar</h3>
                                    <div class="card-options"><a href="/#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                        <div class="item-action dropdown ml-2"><a href="fake_url" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right"><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                                                <div class="dropdown-divider"></div><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-timeline" role="tabpanel" aria-labelledby="pills-timeline-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Activity</h3>
                                    <div class="card-options"><a href="/#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a href="/#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a><a href="/#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        <div class="item-action dropdown ml-2"><a href="fake_url" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right"><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                                                <div class="dropdown-divider"></div><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="timeline_item "><img class="tl_avatar" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar1.jpg')}}" alt="fake_url"><span><a href="fake_url;">Elisse Joson</a> San Francisco, CA <small class="float-right text-right">20-April-2019 - Today</small></span>
                                        <h6 class="font600">Hello, 'Im a single div responsive timeline without media Queries!</h6>
                                        <div class="msg">
                                            <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. I write the best placeholder text, and I'm the biggest developer on the web card she has is the Lorem card.</p><a href="fake_url;" class="mr-20 text-muted"><i class="fa fa-heart text-pink"></i> 12 Love</a><a class="text-muted" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-comments"></i> 1 Comment</a>
                                            <div class="collapse p-4 section-gray" id="collapseExample">
                                                <form class="well">
                                                    <div class="form-group"><textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea></div><button class="btn btn-primary">Submit</button>
                                                </form>
                                                <ul class="recent_comments list-unstyled mt-4 mb-0">
                                                    <li>
                                                        <div class="avatar_img"><img class="rounded img-fluid" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar4.jpg')}}" alt="fake_url"></div>
                                                        <div class="comment_body">
                                                            <h6>Donald Gardner <small class="float-right font-14">Just now</small></h6>
                                                            <p>Lorem ipsum Veniam aliquip culpa laboris minim tempor</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timeline_item "><img class="tl_avatar" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar4.jpg')}}" alt="fake_url"><span><a href="fake_url;">Dessie Parks</a> Oakland, CA <small class="float-right text-right">19-April-2019 - Yesterday</small></span>
                                        <h6 class="font600">Oeehhh, that's awesome.. Me too!</h6>
                                        <div class="msg">
                                            <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. on the web by far... While that's mock-ups and this is politics, are they really so different? I think the only card she has is the Lorem card.</p>
                                            <div class="timeline_img mb-20"><img class="width100" src="{{ asset('resources/user-assets/laravel/public/assets/images/gallery/1.jpg')}}" alt="Awesome"><img class="width100" src="{{ asset('resources/user-assets/laravel/public/assets/images/gallery/2.jpg')}}" alt="Awesome"></div><a href="fake_url;" class="mr-20 text-muted"><i class="fa fa-heart text-pink"></i> 23 Love</a><a class="text-muted" role="button" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1"><i class="fa fa-comments"></i> 2 Comment</a>
                                            <div class="collapse p-4 section-gray" id="collapseExample1">
                                                <form class="well">
                                                    <div class="form-group"><textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea></div><button class="btn btn-primary">Submit</button>
                                                </form>
                                                <ul class="recent_comments list-unstyled mt-4 mb-0">
                                                    <li>
                                                        <div class="avatar_img"><img class="rounded img-fluid" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar4.jpg')}}" alt="fake_url"></div>
                                                        <div class="comment_body">
                                                            <h6>Donald Gardner <small class="float-right font-14">Just now</small></h6>
                                                            <p>Lorem ipsum Veniam aliquip culpa laboris minim tempor</p>
                                                            <div class="timeline_img mb-20"><img class="width150" src="{{ asset('resources/user-assets/laravel/public/assets/images/gallery/7.jpg')}}" alt="Awesome"><img class="width150" src="{{ asset('resources/user-assets/laravel/public/assets/images/gallery/8.jpg')}}" alt="Awesome"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="avatar_img"><img class="rounded img-fluid" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar3.jpg')}}" alt="fake_url"></div>
                                                        <div class="comment_body">
                                                            <h6>Dessie Parks <small class="float-right font-14">1min ago</small></h6>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timeline_item "><img class="tl_avatar" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar7.jpg')}}" alt="fake_url"><span><a href="fake_url;">Rochelle Barton</a> San Francisco, CA <small class="float-right text-right">12-April-2019</small></span>
                                        <h6 class="font600">An Engineer Explains Why You Should Always Order the Larger Pizza</h6>
                                        <div class="msg">
                                            <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. I write the best placeholder text, and I'm the biggest developer on the web by far... While that's mock-ups and this is politics, is the Lorem card.</p><a href="fake_url;" class="mr-20 text-muted"><i class="fa fa-heart text-pink"></i> 7 Love</a><a class="text-muted" role="button" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2"><i class="fa fa-comments"></i> 1 Comment</a>
                                            <div class="collapse p-4 section-gray" id="collapseExample2">
                                                <form class="well">
                                                    <div class="form-group"><textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea></div><button class="btn btn-primary">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Edit Profile</h3>
                                    <div class="card-options"><a href="/#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a><a href="/#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        <div class="item-action dropdown ml-2"><a href="fake_url" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right"><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                                                <div class="dropdown-divider"></div><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row clearfix">
                                        <div class="col-md-5">
                                            <div class="form-group"><label class="form-label">Company</label><input type="text" class="form-control" disabled="" placeholder="Company" value="Epic Theme"></div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group"><label class="form-label">Username</label><input type="text" class="form-control" placeholder="Username" value="michael23"></div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group"><label class="form-label">Email address</label><input type="email" class="form-control" placeholder="Email"></div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group"><label class="form-label">First Name</label><input type="text" class="form-control" placeholder="Company" value="Jane"></div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group"><label class="form-label">Last Name</label><input type="text" class="form-control" placeholder="Last Name" value="Pearson"></div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group"><label class="form-label">Address</label><input type="text" class="form-control" placeholder="Home Address" value="455 S. Airport St. Moncks Corner"></div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group"><label class="form-label">City</label><input type="text" class="form-control" placeholder="City" value="New York"></div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group"><label class="form-label">Postal Code</label><input type="number" class="form-control" placeholder="ZIP Code"></div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group"><label class="form-label">Country</label><select class="form-control custom-select">
                                                    <option value="true">USA</option>
                                                </select></div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group mb-0"><label class="form-label">About Me</label><textarea rows="5" class="form-control" placeholder="Here can be your description">Oh so, your weak rhyme You doubt I'll bother, reading into it I'll probably won't, left to my own devices But that's the difference in our opinions.</textarea></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-right"><button type="submit" class="btn btn-primary">Update Profile</button></div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-blog" role="tabpanel" aria-labelledby="pills-blog-tab">
                            <div class="card">
                                <div class="card-body">
                                    <div class="new_post">
                                        <div class="form-group"><textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea></div>
                                        <div class="mt-4 text-right"><button class="btn btn-warning"><i class="icon-link"></i></button><button class="btn btn-warning"><i class="icon-camera"></i></button><button class="btn btn-primary">Post</button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card blog_single_post">
                                <div class="img-post"><img class="d-block img-fluid" src="{{ asset('resources/user-assets/laravel/public/assets/images/gallery/6.jpg')}}" alt="First slide"></div>
                                <div class="card-body">
                                    <h4><a href="/#">All photographs are accurate</a></h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                                </div>
                                <div class="footer">
                                    <div class="actions"><a href="fake_url;" class="btn btn-outline-secondary">Continue Reading</a></div>
                                    <ul class="stats list-unstyled">
                                        <li><a href="fake_url;">General</a></li>
                                        <li><a href="fake_url;" class="icon-heart"> 28</a></li>
                                        <li><a href="fake_url;" class="icon-bubbles"> 128</a></li>
                                    </ul>
                                </div>
                                <ul class="list-group card-list-group">
                                    <li class="list-group-item py-5">
                                        <div class="media"><img class="media-object avatar avatar-md mr-4" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar3.jpg')}}" alt="fake_url">
                                            <div class="media-body">
                                                <div class="media-heading"><small class="float-right text-muted">4 min</small>
                                                    <h5>Peter Richards</h5>
                                                </div>
                                                <div>Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</div>
                                                <ul class="media-list">
                                                    <li class="media mt-4"><img class="media-object avatar mr-4" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar1.jpg')}}" alt="fake_url">
                                                        <div class="media-body"><strong>Debra Beck: </strong>Donec id elit non mi porta gravida at eget metus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec ullamcorper nulla non metus auctor fringilla. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Sed posuere consectetur est at lobortis.</div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card blog_single_post">
                                <div class="img-post"><img class="d-block img-fluid" src="{{ asset('resources/user-assets/laravel/public/assets/images/gallery/4.jpg')}}" alt="First slide"></div>
                                <div class="card-body">
                                    <h4><a href="/#">All photographs are accurate</a></h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                                </div>
                                <div class="footer">
                                    <div class="actions"><a href="fake_url;" class="btn btn-outline-secondary">Continue Reading</a></div>
                                    <ul class="stats list-unstyled">
                                        <li><a href="fake_url;">General</a></li>
                                        <li><a href="fake_url;" class="icon-heart"> 28</a></li>
                                        <li><a href="fake_url;" class="icon-bubbles"> 128</a></li>
                                    </ul>
                                </div>
                                <ul class="list-group card-list-group">
                                    <li class="list-group-item py-5">
                                        <div class="media"><img class="media-object avatar avatar-md mr-4" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar7.jpg')}}" alt="fake_url">
                                            <div class="media-body">
                                                <div class="media-heading"><small class="float-right text-muted">12 min</small>
                                                    <h5>Peter Richards</h5>
                                                </div>
                                                <div>Donec id elit non mi porta gravida at eget metus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item py-5">
                                        <div class="media"><img class="media-object avatar avatar-md mr-4" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar6.jpg')}}" alt="fake_url">
                                            <div class="media-body">
                                                <div class="media-heading"><small class="float-right text-muted">34 min</small>
                                                    <h5>Peter Richards</h5>
                                                </div>
                                                <div>Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</div>
                                                <ul class="media-list">
                                                    <li class="media mt-4"><img class="media-object avatar mr-4" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar5.jpg')}}" alt="fake_url">
                                                        <div class="media-body"><strong>Wayne Holland: </strong>Donec id elit non mi porta gravida at eget metus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec ullamcorper nulla non metus auctor fringilla. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Sed posuere consectetur est at lobortis.</div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="widgets1">
                                <div class="icon"><i class="icon-trophy text-success font-30"></i></div>
                                <div class="details">
                                    <h6 class="mb-0 font600">Total Earned</h6><span class="mb-0">$96K +</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="widgets1">
                                <div class="icon"><i class="icon-heart text-warning font-30"></i></div>
                                <div class="details">
                                    <h6 class="mb-0 font600">Total Likes</h6><span class="mb-0">6,270</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="widgets1">
                                <div class="icon"><i class="icon-handbag text-danger font-30"></i></div>
                                <div class="details">
                                    <h6 class="mb-0 font600">Delivered</h6><span class="mb-0">720 Delivered</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="widgets1">
                                <div class="icon"><i class="icon-user text-primary font-30"></i></div>
                                <div class="details">
                                    <h6 class="mb-0 font600">Jobs</h6><span class="mb-0">614</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Followers</h3>
                            <div class="card-options"><a href="/#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a href="/#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                        </div>
                        <div class="card-body">
                            <ul class="right_chat list-unstyled mb-0">
                                <li class="online"><a href="fake_url;">
                                        <div class="media"><img class="media-object " src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar4.jpg')}}" alt="fake_url">
                                            <div class="media-body"><span class="name">Donald Gardner</span><span class="message">Designer, Blogger</span><span class="badge badge-outline status"></span></div>
                                        </div>
                                    </a></li>
                                <li class="offline"><a href="fake_url;">
                                        <div class="media"><img class="media-object " src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar1.jpg')}}" alt="fake_url">
                                            <div class="media-body"><span class="name">Nancy Flanary</span><span class="message">Art director, Movie Cut</span><span class="badge badge-outline status"></span></div>
                                        </div>
                                    </a></li>
                                <li class="online"><a href="fake_url;">
                                        <div class="media"><img class="media-object " src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar3.jpg')}}" alt="fake_url">
                                            <div class="media-body"><span class="name">Phillip Smith</span><span class="message">Writter, Mag Editor</span><span class="badge badge-outline status"></span></div>
                                        </div>
                                    </a></li>
                                <li class="online"><a href="fake_url;">
                                        <div class="media"><img class="media-object " src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar4.jpg')}}" alt="fake_url">
                                            <div class="media-body"><span class="name">Donald Gardner</span><span class="message">Designer, Blogger</span><span class="badge badge-outline status"></span></div>
                                        </div>
                                    </a></li>
                                <li class="offline"><a href="fake_url;">
                                        <div class="media"><img class="media-object " src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar1.jpg')}}" alt="fake_url">
                                            <div class="media-body"><span class="name">Nancy Flanary</span><span class="message">Art director, Movie Cut</span><span class="badge badge-outline status"></span></div>
                                        </div>
                                    </a></li>
                                <li class="online"><a href="fake_url;">
                                        <div class="media"><img class="media-object " src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar3.jpg')}}" alt="fake_url">
                                            <div class="media-body"><span class="name">Phillip Smith</span><span class="message">Writter, Mag Editor</span><span class="badge badge-outline status"></span></div>
                                        </div>
                                    </a></li>
                            </ul>
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