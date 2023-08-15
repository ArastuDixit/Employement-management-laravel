@include('layouts_user.header')

<div class="page">
    <div>
        <div id="page_top" class="section-body  ">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="left">
                        <h1 class="page-title">Job Dashboard</h1><select class="custom-select">
                            <option>Year</option>
                            <option>Month</option>
                            <option>Week</option>
                        </select>
                        <div class="input-group xs-hide"><input type="text" class="form-control"
                                placeholder="Search..."></div>
                    </div>
                    <div class="right">
                        <ul class="nav nav-pills">
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown"
                                    role="button" aria-haspopup="true" aria-expanded="false">Language</a>
                                <div class="dropdown-menu"><a class="dropdown-item"><img class="w20 mr-2"
                                            src="../assets/images/flags/us.svg" alt="fake_url">English</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item"><img class="w20 mr-2"
                                            src="../assets/images/flags/es.svg" alt="fake_url">Spanish</a><a
                                        class="dropdown-item"><img class="w20 mr-2" src="../assets/images/flags/jp.svg"
                                            alt="fake_url">japanese</a><a class="dropdown-item"><img class="w20 mr-2"
                                            src="../assets/images/flags/bl.svg" alt="fake_url">France</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown"
                                    role="button" aria-haspopup="true" aria-expanded="false">Reports</a>
                                <div class="dropdown-menu"><a class="dropdown-item"><i
                                            class="dropdown-icon fa fa-file-excel-o"></i> MS Excel</a><a
                                        class="dropdown-item"><i class="dropdown-icon fa fa-file-word-o"></i> MS
                                        Word</a><a class="dropdown-item"><i class="dropdown-icon fa fa-file-pdf-o"></i>
                                        PDF</a></div>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown"
                                    role="button" aria-haspopup="true" aria-expanded="false">Project</a>
                                <div class="dropdown-menu"><a class="dropdown-item">Graphics Design</a><a
                                        class="dropdown-item">Angular Admin</a><a class="dropdown-item">PSD to
                                        HTML</a><a class="dropdown-item">iOs App Development</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item">Home Development</a><a
                                        class="dropdown-item">New Blog post</a>
                                </div>
                            </li>
                        </ul>
                        <div class="notification d-flex">
                            <div class="dropdown d-flex"><a href="/#"
                                    class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1"
                                    data-toggle="dropdown"><i class="fa fa-envelope"></i><span
                                        class="badge badge-success nav-unread"></span></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <ul class="right_chat list-unstyled w250 p-0">
                                        <li class="online"><a href="fake_url">
                                                <div class="media"><img class="media-object "
                                                        src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar4.jpg')}}" alt="fake_url">
                                                    <div class="media-body"><span class="name">Donald
                                                            Gardner</span><span class="message">Designer,
                                                            Blogger</span><span
                                                            class="badge badge-outline status"></span></div>
                                                </div>
                                            </a></li>
                                        <li class="online"><a href="fake_url">
                                                <div class="media"><img class="media-object "
                                                        src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar5.jpg')}}" alt="fake_url">
                                                    <div class="media-body"><span class="name">Wendy Keen</span><span
                                                            class="message">Java Developer</span><span
                                                            class="badge badge-outline status"></span></div>
                                                </div>
                                            </a></li>
                                        <li class="offline"><a href="fake_url">
                                                <div class="media"><img class="media-object "
                                                        src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar2.jpg')}}" alt="fake_url">
                                                    <div class="media-body"><span class="name">Matt
                                                            Rosales</span><span class="message">CEO, Epic
                                                            Theme</span><span
                                                            class="badge badge-outline status"></span></div>
                                                </div>
                                            </a></li>
                                        <li class="online"><a href="fake_url">
                                                <div class="media"><img class="media-object "
                                                        src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar3.jpg')}}" alt="fake_url">
                                                    <div class="media-body"><span class="name">Phillip
                                                            Smith</span><span class="message">Writter, Mag
                                                            Editor</span><span
                                                            class="badge badge-outline status"></span></div>
                                                </div>
                                            </a></li>
                                    </ul>
                                    <div class="dropdown-divider"></div><a
                                        class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
                                </div>
                            </div>
                            <div class="dropdown d-flex"><a href="/#"
                                    class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1"
                                    data-toggle="dropdown"><i class="fa fa-bell"></i><span
                                        class="badge badge-primary nav-unread"></span></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <ul class="list-unstyled feeds_widget">
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-check"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title text-danger">Issue Fixed <small
                                                        class="float-right text-muted">11:05</small></h4><small>WE have
                                                    fix all Design bug with Responsive</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-user"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title">New User <small
                                                        class="float-right text-muted">10:45</small></h4><small>I feel
                                                    great! Thanks team</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-thumbs-o-up"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title">7 New Feedback <small
                                                        class="float-right text-muted">Today</small></h4><small>It will
                                                    give a smart finishing to your site</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-question-circle"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title text-warning">Server Warning <small
                                                        class="float-right text-muted">10:50</small></h4><small>Your
                                                    connection is not private</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-shopping-cart"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title">7 New Orders <small
                                                        class="float-right text-muted">11:35</small></h4><small>You
                                                    received a new oder from Tina.</small>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="dropdown-divider"></div><a href="fake_url"
                                        class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
                                </div>
                            </div>
                            <div class="dropdown d-flex"><a href="/#"
                                    class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1"
                                    data-toggle="dropdown"><i class="fa fa-user"></i></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow"><a
                                        class="dropdown-item" href="/profile"><i
                                            class="dropdown-icon fe fe-user"></i> Profile</a><a
                                        class="dropdown-item"><i class="dropdown-icon fe fe-settings"></i>
                                        Settings</a><a class="dropdown-item"><span class="float-right"><span
                                                class="badge badge-primary">6</span></span><i
                                            class="dropdown-icon fe fe-mail"></i> Inbox</a><a class="dropdown-item"><i
                                            class="dropdown-icon fe fe-send"></i> Message</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item"><i
                                            class="dropdown-icon fe fe-help-circle"></i> Need help?</a><a
                                        class="dropdown-item" href="{{'signout'}}"><i
                                            class="dropdown-icon fe fe-log-out"></i> Sign out</a>
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

        $result = DB::table('jobportal')
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

                                <h3 class="card-title">Update Jobportal Dashboard Detail</h3>

                            </div>

                            <div class="card-body">

                                <form action="{{ route('edit-jobportaldashboard') }}" method="post" enctype="multipart/form-data">

                                    @csrf

                                    <div class="">

                                        <div class="row clearfix">

                                            <!------------------------------------------------>

                                            <div class="col-md-12">

                                                <h6 style="background: #edeff3;padding: 10px;">Jobportal Dashboard Information</h6>

                                                <input type="hidden" name="id" value="<?php echo @$result->id; ?>">


                                                <div class="row">


                                                   <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                            <label for="name">Name</label>
                                                            <input type="text" class="form-control" name="name" value="<?php echo @$result->name; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                                        <div class="form-group">

                                                            <label for="email">Email</label>

                                                            <input type="text" class="form-control" name="email" value="<?php echo @$result->email; ?>">

                                                        </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label for="image">Image</label>
                                                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                                                                @error('image')
                                                                <p class="invalid-feedback">{{ $message }}</p>
                                                                @enderror
                                                                <div class="pt-3">
                                                                    @if ($result->image != '' && file_exists(storage_path('app/images/jobportal/' . $result->image)))
                                                                        <img src="{{ asset('storage/app/images/jobportal/' . $result->image) }}" alt="Avatar" width="100" height="100">
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>


                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                            <label for="apply_for">Apply For</label>
                                                            <input type="text" class="form-control" name="apply_for" value="<?php echo @$result->apply_for; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                            <label for="date">Date</label>
                                                            <input type="date" class="form-control" name="date" value="<?php echo @$result->date; ?>">
                                                        </div>
                                                    </div>

                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="status">Status</label>
                                                        <select class="form-control show-tick" name="status">
                                                            <option value="interview" {{ $result->status == 'Interview' ? 'selected' : '' }}>Interview</option>
                                                            <option value="cancel" {{ $result->status == 'Cancel' ? 'selected' : '' }}>Cancel</option>
                                                            <option value="interviewed" {{ $result->status == 'Interviewed' ? 'selected' : '' }}>Interviewed</option>
                                                        </select>
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

                                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href='/jobportal-dashboard'">Close</button>

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
            <div class="row clearfix row-deck">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Top Locations</h3>
                            <div class="card-options">
                                <div class="item-action dropdown ml-2"><a href="fake_url" data-toggle="dropdown"><i
                                            class="fe fe-more-vertical"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right"><a href="fake_url"
                                            class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details
                                        </a><a href="fake_url" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-share-alt"></i> Share </a><a
                                            href="fake_url" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                                        <div class="dropdown-divider"></div><a href="fake_url"
                                            class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy
                                            to</a><a href="fake_url" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-folder"></i> Move to</a><a href="fake_url"
                                            class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i>
                                            Rename</a><a href="fake_url" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-trash"></i> Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body"><svg viewBox="0 0 800 600" class="rsm-svg ">
                                <g class="rsm-geographies "></g>
                                <g transform="translate(397.7892828072126, 401.68026946737984)" class="rsm-marker ">
                                    <g fill="none" stroke="#FF5533" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" transform="translate(-12, -24)">
                                        <circle cx="12" cy="10" r="3"></circle>
                                        <path d="M12 21.7C17.3 17 20 13 20 10a8 8 0 1 0-16 0c0 3 2.7 6.9 8 11.7z">
                                        </path>
                                    </g><text text-anchor="middle" y="-30"
                                        style="font-family: system-ui; fill: rgb(93, 90, 109);">Buenos Aires</text>
                                </g>
                                <g transform="translate(332.3418414831312, 277.45972425075945)" class="rsm-marker ">
                                    <g fill="none" stroke="#FF5533" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" transform="translate(-12, -24)">
                                        <circle cx="12" cy="10" r="3"></circle>
                                        <path d="M12 21.7C17.3 17 20 13 20 10a8 8 0 1 0-16 0c0 3 2.7 6.9 8 11.7z">
                                        </path>
                                    </g><text text-anchor="middle" y="15"
                                        style="font-family: system-ui; fill: rgb(93, 90, 109);">La Paz</text>
                                </g>
                                <g transform="translate(467.89906750420397, 272.5964222165743)" class="rsm-marker ">
                                    <g fill="none" stroke="#FF5533" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" transform="translate(-12, -24)">
                                        <circle cx="12" cy="10" r="3"></circle>
                                        <path d="M12 21.7C17.3 17 20 13 20 10a8 8 0 1 0-16 0c0 3 2.7 6.9 8 11.7z">
                                        </path>
                                    </g><text text-anchor="middle" y="15"
                                        style="font-family: system-ui; fill: rgb(93, 90, 109);">Brasilia</text>
                                </g>
                                <g transform="translate(325.9342429002873, 396.9444215177014)" class="rsm-marker ">
                                    <g fill="none" stroke="#FF5533" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" transform="translate(-12, -24)">
                                        <circle cx="12" cy="10" r="3"></circle>
                                        <path d="M12 21.7C17.3 17 20 13 20 10a8 8 0 1 0-16 0c0 3 2.7 6.9 8 11.7z">
                                        </path>
                                    </g><text text-anchor="middle" y="15"
                                        style="font-family: system-ui; fill: rgb(93, 90, 109);">Santiago</text>
                                </g>
                                <g transform="translate(285.91925609328814, 132.66160445020446)" class="rsm-marker ">
                                    <g fill="none" stroke="#FF5533" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" transform="translate(-12, -24)">
                                        <circle cx="12" cy="10" r="3"></circle>
                                        <path d="M12 21.7C17.3 17 20 13 20 10a8 8 0 1 0-16 0c0 3 2.7 6.9 8 11.7z">
                                        </path>
                                    </g><text text-anchor="middle" y="15"
                                        style="font-family: system-ui; fill: rgb(93, 90, 109);">Bogota</text>
                                </g>
                                <g transform="translate(255.78872111900586, 169.0750786246498)" class="rsm-marker ">
                                    <g fill="none" stroke="#FF5533" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" transform="translate(-12, -24)">
                                        <circle cx="12" cy="10" r="3"></circle>
                                        <path d="M12 21.7C17.3 17 20 13 20 10a8 8 0 1 0-16 0c0 3 2.7 6.9 8 11.7z">
                                        </path>
                                    </g><text text-anchor="middle" y="15"
                                        style="font-family: system-ui; fill: rgb(93, 90, 109);">Quito</text>
                                </g>
                                <g transform="translate(398.89472489713796, 114.5931927829775)" class="rsm-marker ">
                                    <g fill="none" stroke="#FF5533" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" transform="translate(-12, -24)">
                                        <circle cx="12" cy="10" r="3"></circle>
                                        <path d="M12 21.7C17.3 17 20 13 20 10a8 8 0 1 0-16 0c0 3 2.7 6.9 8 11.7z">
                                        </path>
                                    </g><text text-anchor="middle" y="-30"
                                        style="font-family: system-ui; fill: rgb(93, 90, 109);">Georgetown</text>
                                </g>
                                <g transform="translate(402.68040597425943, 336.73824410921804)" class="rsm-marker ">
                                    <g fill="none" stroke="#FF5533" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" transform="translate(-12, -24)">
                                        <circle cx="12" cy="10" r="3"></circle>
                                        <path d="M12 21.7C17.3 17 20 13 20 10a8 8 0 1 0-16 0c0 3 2.7 6.9 8 11.7z">
                                        </path>
                                    </g><text text-anchor="middle" y="-30"
                                        style="font-family: system-ui; fill: rgb(93, 90, 109);">Asuncion</text>
                                </g>
                                <g transform="translate(419.9222401268684, 121.1599198979751)" class="rsm-marker ">
                                    <g fill="none" stroke="#FF5533" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" transform="translate(-12, -24)">
                                        <circle cx="12" cy="10" r="3"></circle>
                                        <path d="M12 21.7C17.3 17 20 13 20 10a8 8 0 1 0-16 0c0 3 2.7 6.9 8 11.7z">
                                        </path>
                                    </g><text text-anchor="middle" y="15"
                                        style="font-family: system-ui; fill: rgb(93, 90, 109);">Paramaribo</text>
                                </g>
                                <g transform="translate(410.5981936496399, 403.8048678035218)" class="rsm-marker ">
                                    <g fill="none" stroke="#FF5533" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" transform="translate(-12, -24)">
                                        <circle cx="12" cy="10" r="3"></circle>
                                        <path d="M12 21.7C17.3 17 20 13 20 10a8 8 0 1 0-16 0c0 3 2.7 6.9 8 11.7z">
                                        </path>
                                    </g><text text-anchor="middle" y="15"
                                        style="font-family: system-ui; fill: rgb(93, 90, 109);">Montevideo</text>
                                </g>
                                <g transform="translate(336.715416946986, 90.75919388795106)" class="rsm-marker ">
                                    <g fill="none" stroke="#FF5533" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" transform="translate(-12, -24)">
                                        <circle cx="12" cy="10" r="3"></circle>
                                        <path d="M12 21.7C17.3 17 20 13 20 10a8 8 0 1 0-16 0c0 3 2.7 6.9 8 11.7z">
                                        </path>
                                    </g><text text-anchor="middle" y="15"
                                        style="font-family: system-ui; fill: rgb(93, 90, 109);">Caracas</text>
                                </g>
                                <g transform="translate(270.40845016842167, 251.23758349443403)" class="rsm-marker ">
                                    <g fill="none" stroke="#FF5533" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" transform="translate(-12, -24)">
                                        <circle cx="12" cy="10" r="3"></circle>
                                        <path d="M12 21.7C17.3 17 20 13 20 10a8 8 0 1 0-16 0c0 3 2.7 6.9 8 11.7z">
                                        </path>
                                    </g><text text-anchor="middle" y="15"
                                        style="font-family: system-ui; fill: rgb(93, 90, 109);">Lima</text>
                                </g>
                            </svg></div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-xl-4 col-md-12">
                                    <div class="clearfix">
                                        <div class="float-left"><strong>35%</strong></div>
                                        <div class="float-right"><small class="text-muted">2018</small></div>
                                    </div>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-gray" role="progressbar" aria-valuenow="42"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 35%;"></div>
                                    </div><span class="text-uppercase font-10">USA</span>
                                </div>
                                <div class="col-xl-4 col-md-12">
                                    <div class="clearfix">
                                        <div class="float-left"><strong>61%</strong></div>
                                        <div class="float-right"><small class="text-muted">2018</small></div>
                                    </div>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-gray" role="progressbar" aria-valuenow="42"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 61%;"></div>
                                    </div><span class="text-uppercase font-10">India</span>
                                </div>
                                <div class="col-xl-4 col-md-12">
                                    <div class="clearfix">
                                        <div class="float-left"><strong>37%</strong></div>
                                        <div class="float-right"><small class="text-muted">2018</small></div>
                                    </div>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-gray" role="progressbar" aria-valuenow="37"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 37%;"></div>
                                    </div><span class="text-uppercase font-10">Australia</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Job View</h3>
                            <div class="card-options"><span class="card-options-remove" data-toggle="card-remove"><i
                                        class="fe fe-x"></i></span>
                                <div class="item-action dropdown ml-2"><a href="fake_url" data-toggle="dropdown"><i
                                            class="fe fe-more-vertical"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right"><a href="fake_url"
                                            class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details
                                        </a><a href="fake_url" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-share-alt"></i> Share </a><a
                                            href="fake_url" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                                        <div class="dropdown-divider"></div><a href="fake_url"
                                            class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy
                                            to</a><a href="fake_url" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-folder"></i> Move to</a><a href="fake_url"
                                            class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i>
                                            Rename</a><a href="fake_url" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-trash"></i> Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row text-center">
                                <div class="col-lg-4 col-sm-12 border-right"><label class="mb-0 font-10">All
                                        Time</label>
                                    <h4 class="font-20 font-weight-bold">2,025</h4>
                                </div>
                                <div class="col-lg-4 col-sm-12 border-right"><label class="mb-0 font-10">Last
                                        Month</label>
                                    <h4 class="font-20 font-weight-bold">754</h4>
                                </div>
                                <div class="col-lg-4 col-sm-12"><label class="mb-0 font-10">Today</label>
                                    <h4 class="font-20 font-weight-bold">54</h4>
                                </div>
                            </div>
                            <table class="table table-striped mt-4">
                                <tbody>
                                    <tr>
                                        <td><label class="d-block">Biology - BIO <span
                                                    class="float-right">43%</span></label>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-lightgray" role="progressbar"
                                                    aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 43%;"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label class="d-block">Business Analysis - BUS <span
                                                    class="float-right">27%</span></label>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-lightgray" role="progressbar"
                                                    aria-valuenow="27" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 27%;"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label class="d-block">Computer Technology - CT <span
                                                    class="float-right">81%</span></label>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-lightgray" role="progressbar"
                                                    aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 81%;"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label class="d-block">Management - MGT <span
                                                    class="float-right">61%</span></label>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-lightgray" role="progressbar"
                                                    aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 61%;"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label class="d-block">Angular Dev <span
                                                    class="float-right">77%</span></label>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-lightgray" role="progressbar"
                                                    aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 77%;"></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer"><small>Measure How Fast You’re Growing Monthly Recurring Revenue. <a
                                    href="/#">Learn More</a></small></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Current job Openings</h3>
                            <div class="card-options"><span class="card-options-remove" data-toggle="card-remove"><i
                                        class="fe fe-x"></i></span>
                                <div class="item-action dropdown ml-2"><a href="fake_url" data-toggle="dropdown"><i
                                            class="fe fe-more-vertical"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right"><a href="fake_url"
                                            class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details
                                        </a><a href="fake_url" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-share-alt"></i> Share </a><a
                                            href="fake_url" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                                        <div class="dropdown-divider"></div><a href="fake_url"
                                            class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy
                                            to</a><a href="fake_url" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-folder"></i> Move to</a><a href="fake_url"
                                            class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i>
                                            Rename</a><a href="fake_url" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-trash"></i> Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-vcenter table_custom spacing5 mb-0">
                                    <tbody>
                                        <tr>
                                            <td class="w40"><i class="flag flag-us" data-toggle="tooltip"
                                                    data-original-title="flag flag-us"></i></td>
                                            <td><small>United States</small>
                                                <h5 class="mb-0">434</h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="flag flag-au" data-toggle="tooltip"
                                                    data-original-title="flag flag-au"></i></td>
                                            <td><small>Australia</small>
                                                <h5 class="mb-0">215</h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="flag flag-ca" data-toggle="tooltip"
                                                    data-original-title="flag flag-ca"></i></td>
                                            <td><small>Canada</small>
                                                <h5 class="mb-0">105</h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="flag flag-gb" data-toggle="tooltip"
                                                    data-original-title="flag flag-gb"></i></td>
                                            <td><small>United Kingdom</small>
                                                <h5 class="mb-0">250</h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="flag flag-nl" data-toggle="tooltip"
                                                    data-original-title="flag flag-nl"></i></td>
                                            <td><small>Netherlands</small>
                                                <h5 class="mb-0">52</h5>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer"><small>Measure How Fast You’re Growing Monthly Recurring Revenue. <a
                                    href="/#">Learn More</a></small></div>
                    </div>
                </div>
            </div>


             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fe fe-plus mr-2"></i>Add</button>
             <br><br>
               
            <div class="row clearfix row-deck">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">

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

                        <div class="card-header">
                            <h3 class="card-title">Recent Applicants</h3>
                            <div class="card-options"><span class="card-options-remove" data-toggle="card-remove"><i
                                        class="fe fe-x"></i></span>
                                <div class="item-action dropdown ml-2"><a href="fake_url" data-toggle="dropdown"><i
                                            class="fe fe-more-vertical"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right"><a href="fake_url"
                                            class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details
                                        </a><a href="fake_url" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-share-alt"></i> Share </a><a
                                            href="fake_url" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                                        <div class="dropdown-divider"></div><a href="fake_url"
                                            class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy
                                            to</a><a href="fake_url" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-folder"></i> Move to</a><a href="fake_url"
                                            class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i>
                                            Rename</a><a href="fake_url" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-trash"></i> Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="myTable" class="table table-hover table-striped table-vcenter mb-0">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Name</th>
                                            <th>Apply for</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $result = DB::table('jobportal')->get()->toArray();

                                            $i = 1;

                                            foreach ($result as $result_in) {

                                            ?>
                                        <tr>
                                            <td class="w60">
                                              <div  data-toggle="tooltip" data-placement="top" title="Avatar Name">
                                                    @if ($result_in->image != '' && file_exists(storage_path('app/images/jobportal/' . $result_in->image)))
                                                        <img src="{{ asset('storage/app/images/jobportal/' . $result_in->image) }}" alt="Avatar" width="40" height="40" class="rounded-circle">
                                                    @else
                                                        <img src="{{ asset('assets/images/no-image.png') }}" alt="" width="40" height="40" class="rounded-circle">
                                                    @endif
                                               </div>

                                            </td>
                                            <td>
                                                <div class="font-15"><?php echo $result_in->name; ?></div><span
                                                    class="text-muted"><?php echo $result_in->email	; ?></span>
                                            </td>
                                            <td><span><?php echo $result_in->apply_for; ?></span></td>
                                            <td><?php echo $result_in->date; ?></td>
                                            <td><a href="fake_url;" class="btn btn-info btn-round"><?php echo $result_in->status; ?></a></td>
                                            <td>
                                                <a href="/jobportal-dashboard/edit/<?php echo $result_in->id; ?>" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
                                                 <button onclick="deletejobportaldashboard('{{$result_in->id}}')" type="button" class="btn btn-icon btn-sm" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
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
                        <div class="col-md-6 col-sm-12">Copyright © 2020 <a
                                href="https://themeforest.net/user/puffintheme/portfolio">PuffinTheme</a>.</div>
                        <div class="col-md-6 col-sm-12 text-md-right">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a href="fake_url">Documentation</a></li>
                                <li class="list-inline-item"><a href="fake_url">FAQ</a></li>
                                <li class="list-inline-item"><a href="fake_url"
                                        class="btn btn-outline-primary btn-sm">Buy Now</a></li>
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

            <form action="{{route('add-jobportaldashboard')}}" method="post" enctype="multipart/form-data">

                @csrf

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Job Portal Dashboard</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row clearfix">
                    <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Enter Email">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="file" class="form-control" name="image" placeholder="Upload Image">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="apply_for" placeholder="Enter Apply For">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="date" class="form-control" name="date" placeholder="Enter Date">
                            </div>
                        </div>
                                              
                        <div class="col-md-4 col-sm-12">
                              <div class="form-group">
                                 <select class="form-control show-tick" name="status">
                                    <option>Status</option>
                                    <option>Interview</option>
                                    <option>Cancel</option>
                                    <option>Interviewed</option>
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
        window.location.href = "{{ route('jobportal-dashboard') }}";
    }
</script>

<script type="text/javascript">
    var rakesh = $.noConflict();

    rakesh(document).ready(function() {

        rakesh('.songs').select2();

    });

    function deletejobportaldashboard(id)

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

                    url: "<?= url('delete_jobportaldashboard') ?>",

                    data: {
                        'table': 'jobportal',
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
