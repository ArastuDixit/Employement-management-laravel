@include('layouts_user.header')

<div class="page">
    <div id="page_top" class="section-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="left">
                    <h1 class="page-title">Accounts</h1>
                    <div class="input-icon xs-hide">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-icon-addon"><i class="fe fe-search"></i></span>
                    </div>
                </div>
                <div class="right">
                    <ul class="nav nav-pills">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Language</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"><img class="w20 mr-2" src="https://epic.nsdbytes.com/laravel/public/assets/images/flags/us.svg">English</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><img class="w20 mr-2" src="https://epic.nsdbytes.com/laravel/public/assets/images/flags/es.svg">Spanish</a>
                                <a class="dropdown-item" href="#"><img class="w20 mr-2" src="https://epic.nsdbytes.com/laravel/public/assets/images/flags/jp.svg">japanese</a>
                                <a class="dropdown-item" href="#"><img class="w20 mr-2" src="https://epic.nsdbytes.com/laravel/public/assets/images/flags/bl.svg">France</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Reports</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"><i class="dropdown-icon fa fa-file-excel-o"></i> MS Excel</a>
                                <a class="dropdown-item" href="#"><i class="dropdown-icon fa fa-file-word-o"></i> MS Word</a>
                                <a class="dropdown-item" href="#"><i class="dropdown-icon fa fa-file-pdf-o"></i> PDF</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Project</a>
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
                            <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-success nav-unread"></span></a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <ul class="right_chat list-unstyled w250 p-0">
                                    <li class="online">
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object " src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar4.jpg')}}" alt="">
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
                                                <img class="media-object " src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar5.jpg')}}" alt="">
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
                                                <img class="media-object " src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar2.jpg')}}" alt="">
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
                                                <img class="media-object " src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar3.jpg')}}" alt="">
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
                                <a href="javascript:void(0)" class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
                            </div>
                        </div>
                        <div class="dropdown d-flex">
                            <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="badge badge-primary nav-unread"></span></a>
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
                                <a href="javascript:void(0)" class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
                            </div>
                        </div>
                        <div class="dropdown d-flex">
                            <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-user"></i></a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item" href="page-profile.html"><i class="dropdown-icon fe fe-user"></i> Profile</a>
                                <a class="dropdown-item" href="app-setting.html"><i class="dropdown-icon fe fe-settings"></i> Settings</a>
                                <a class="dropdown-item" href="javascript:void(0)"><span class="float-right"><span class="badge badge-primary">6</span></span><i class="dropdown-icon fe fe-mail"></i> Inbox</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon fe fe-send"></i> Message</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon fe fe-help-circle"></i> Need help?</a>
                                <a class="dropdown-item" href="login.html"><i class="dropdown-icon fe fe-log-out"></i> Sign out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php

    $request = request();

    if ($request->segment(3) != "" && $request->segment(2) == "edit") {

    ?>

        <?php

        $result = DB::table('accounts')
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

                                <h3 class="card-title">Update Accounts Detail</h3>

                            </div>

                            <div class="card-body">

                                <form action="{{ route('edit-account') }}" method="post" enctype="multipart/form-data">

                                    @csrf

                                    <div class="">

                                        <div class="row clearfix">

                                            <!------------------------------------------------>

                                            <div class="col-md-12">

                                                <h6 style="background: #edeff3;padding: 10px;">Account Information</h6>

                                                <input type="hidden" name="id" value="<?php echo @$result->id; ?>">


                                                <div class="row">

                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label for="invoice_no">Invoice No.</label>
                                                            <input type="text" class="form-control" name="invoice_no" value="<?php echo @$result->invoice_no; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                                        <div class="form-group">

                                                            <label for="clients">Clients</label>

                                                            <input type="text" class="form-control" name="clients" value="<?php echo @$result->clients; ?>">

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
                                                            <label for="type">Type</label>
                                                            <input type="text" class="form-control" name="type" value="<?php echo @$result->type; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <select class="form-control show-tick" name="status">
                                                        <option>Status</option>
                                                        <option value="approved" {{ $result->status == 'Approved' ? 'selected' : '' }}>Approved</option>
                                                        <option value="pending" {{ $result->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                                    </select>
                                                    </div>
                                                </div>
                                                   
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                            <label for="amount">Amount</label>
                                                            <input type="text" class="form-control" name="amount" value="<?php echo @$result->amount; ?>">
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

                                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href='/accounts'">Close</button>

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

    <div class="section-body">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center">
                <ul class="nav nav-tabs page-header-tab">
                    <li class="nav-item"><a class="nav-link active" id="Accounts-tab" data-toggle="tab" href="#Accounts-Invoices">Invoices</a></li>
                    <li class="nav-item"><a class="nav-link" id="Accounts-tab" data-toggle="tab" href="#Accounts-Payments">Payments</a></li>
                    <li class="nav-item"><a class="nav-link" id="Accounts-tab" data-toggle="tab" href="#Accounts-Expenses">Expenses</a></li>
                </ul>
                <div class="header-action">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fe fe-plus mr-2"></i>Add</button>
                </div>
            </div>
        </div>
    </div>

    <div class="section-body mt-3">
        <div class="container-fluid">
            <div class="tab-content mt-3">
                <div class="tab-pane fade show active" id="Accounts-Invoices" role="tabpanel">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div>Total Accounts</div>
                                    <div class="py-4 m-0 text-center h1 text-success counter"><?php echo count(DB::table('accounts')->get()->toArray()) ?></div>
                                    <div class="d-flex">
                                        <small class="text-muted">This years</small>
                                        <div class="ml-auto"><i class="fa fa-caret-up text-success"></i>4%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div>New Account</div>
                                    <div class="py-4 m-0 text-center h1 text-info counter"><?php echo count(DB::table('accounts')->get()->toArray()) ?></div>
                                    <div class="d-flex">
                                        <small class="text-muted">This years</small>
                                        <div class="ml-auto"><i class="fa fa-caret-up text-success"></i>13%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div>Total Current A/C</div>
                                    <div class="py-4 m-0 text-center h1 text-warning counter"><?php echo count(DB::table('accounts')->get()->toArray()) ?></div>
                                    <div class="d-flex">
                                        <small class="text-muted">This years</small>
                                        <div class="ml-auto"><i class="fa fa-caret-up text-success"></i>3%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div>Total Saving A/C</div>
                                    <div class="py-4 m-0 text-center h1 text-danger counter"><?php echo count(DB::table('accounts')->get()->toArray()) ?></div>
                                    <div class="d-flex">
                                        <small class="text-muted">This years</small>
                                        <div class="ml-auto"><i class="fa fa-caret-down text-danger"></i>10%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Invoices</h3>
                            <div class="card-options">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-sm" placeholder="Search something..." name="s">
                                        <span class="input-group-btn ml-2"><button class="btn btn-icon btn-sm" type="submit"><span class="fe fe-search"></span></button></span>
                                    </div>
                                </form>
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

    $(document).ready( function () {

    $('#myTable').DataTable({

        "order": [[ 0, "desc" ]] // order the first column by descending order

    });

} );

</script>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="myTable" class="table table-hover table-striped table-vcenter text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Invoice No.</th>
                                            <th>Clients</th>
                                            <th>Date</th>
                                            <th>Type</th>
                                            <th>Status</th>
                                            <th class="w100">Amount</th>
                                            <th class="w150">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $result = DB::table('accounts')->get()->toArray();

                                            $i = 1;

                                            foreach ($result as $result_in) {

                                            ?>
                                        <tr>
                                            <td><?php echo $result_in->invoice_no; ?></td>
                                            <td><?php echo $result_in->clients; ?></td>
                                            <td><?php echo $result_in->date; ?></td>
                                            <td><?php echo $result_in->type; ?></i></td>
                                            <td><span class="tag tag-success"><?php echo $result_in->status; ?></span></td>
                                            <td><?php echo $result_in->amount; ?></td>
                                            <td>
                                                <a href="/accounts/edit/<?php echo $result_in->id; ?>" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
                                                <button type="button" class="btn btn-icon btn-sm btn-sm" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                                <button type="button" class="btn btn-icon btn-sm" title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                                <button onclick="deleteAccount('{{$result_in->id}}')" type="button" class="btn btn-icon btn-sm" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
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
                <div class="tab-pane fade" id="Accounts-Payments" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive invoice_list">
                                <table class="table table-hover table-striped table-vcenter text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Clients Name</th>
                                            <th>Project Name</th>
                                            <th>Date</th>
                                            <th>Type</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>MP 4515</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar1.jpg')}}" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                                                    <div class="ml-3">
                                                        <a href="javascript:void(0)" title="">Zoe Baker</a>
                                                        <p class="mb-0"><a href="https://epic.nsdbytes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fb81949ed5999a909e89bb9e839a968b979ed5989496">[email&#160;protected]</a></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>UPlo - Bootstrap 4 </td>
                                            <td>07 March, 2018</td>
                                            <td><i class="payment payment-paypal" data-toggle="tooltip" title="" data-original-title="payment payment-paypal"></i></td>
                                            <td>$4,205</td>
                                        </tr>
                                        <tr>
                                            <td>LK 1515</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar2.jpg')}}" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                                                    <div class="ml-3">
                                                        <a href="javascript:void(0)" title="">South Shyanne</a>
                                                        <p class="mb-0"><a href="https://epic.nsdbytes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="87f4e8f2f3efa9f4effee6e9e9e2c7e2ffe6eaf7ebe2a9e4e8ea">[email&#160;protected]</a></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Tito Wordpress</td>
                                            <td>25 Jun, 2018</td>
                                            <td><i class="payment payment-visa-dark" data-toggle="tooltip" title="" data-original-title="payment payment-visa-dark"></i></td>
                                            <td>$5,205</td>
                                        </tr>
                                        <tr>
                                            <td>SS 6323</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar3.jpg')}}" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                                                    <div class="ml-3">
                                                        <a href="javascript:void(0)" title="">South Shyanne</a>
                                                        <p class="mb-0"><a href="https://epic.nsdbytes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="abd8c4dedfc385d8c3d2cac5c5ceebced3cac6dbc7ce85c8c4c6">[email&#160;protected]</a></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Hotel Management</td>
                                            <td>12 July, 2018</td>
                                            <td><i class="payment payment-visa-dark" data-toggle="tooltip" title="" data-original-title="payment payment-visa-dark"></i></td>
                                            <td>$2,000</td>
                                        </tr>
                                        <tr>
                                            <td>PQ 8585</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar4.jpg')}}" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                                                    <div class="ml-3">
                                                        <a href="javascript:void(0)" title="">Zoe Baker</a>
                                                        <p class="mb-0"><a href="https://epic.nsdbytes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1f65707a317d7e747a6d5f7a677e726f737a317c7072">[email&#160;protected]</a></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Bootstrap 4 Angular5 Admin</td>
                                            <td>13 July, 2018</td>
                                            <td><i class="payment payment-visa-dark" data-toggle="tooltip" title="" data-original-title="payment payment-visa-dark"></i></td>
                                            <td>$10,000</td>
                                        </tr>
                                        <tr>
                                            <td>WD 4455</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar5.jpg')}}" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                                                    <div class="ml-3">
                                                        <a href="javascript:void(0)" title="">Zoe Baker</a>
                                                        <p class="mb-0"><a href="https://epic.nsdbytes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="94eefbf1baf6f5fff1e6d4f1ecf5f9e4f8f1baf7fbf9">[email&#160;protected]</a></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Angular Dashboard</td>
                                            <td>27 July, 2018</td>
                                            <td><i class="payment payment-visa-dark" data-toggle="tooltip" title="" data-original-title="payment payment-visa-dark"></i></td>
                                            <td>$1,205</td>
                                        </tr>
                                        <tr>
                                            <td>MP 4515</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar6.jpg')}}" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                                                    <div class="ml-3">
                                                        <a href="javascript:void(0)" title="">Zoe Baker</a>
                                                        <p class="mb-0"><a href="https://epic.nsdbytes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bec4d1db90dcdfd5dbccfedbc6dfd3ced2db90ddd1d3">[email&#160;protected]</a></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>UPlo - Bootstrap 4 </td>
                                            <td>07 March, 2018</td>
                                            <td><i class="payment payment-paypal" data-toggle="tooltip" title="" data-original-title="payment payment-paypal"></i></td>
                                            <td>$4,205</td>
                                        </tr>
                                        <tr>
                                            <td>LK 1515</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar7.jpg')}}" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                                                    <div class="ml-3">
                                                        <a href="javascript:void(0)" title="">South Shyanne</a>
                                                        <p class="mb-0"><a href="https://epic.nsdbytes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e99a869c9d81c79a81908887878ca98c91888499858cc78a8684">[email&#160;protected]</a></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Tito Wordpress</td>
                                            <td>25 Jun, 2018</td>
                                            <td><i class="payment payment-visa-dark" data-toggle="tooltip" title="" data-original-title="payment payment-visa-dark"></i></td>
                                            <td>$5,205</td>
                                        </tr>
                                        <tr>
                                            <td>SS 6323</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar8.jpg')}}" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                                                    <div class="ml-3">
                                                        <a href="javascript:void(0)" title="">South Shyanne</a>
                                                        <p class="mb-0"><a href="https://epic.nsdbytes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8ffce0fafbe7a1fce7f6eee1e1eacfeaf7">[email&#160;protected]</a>ample.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Hotel Management</td>
                                            <td>12 July, 2018</td>
                                            <td><i class="payment payment-visa-dark" data-toggle="tooltip" title="" data-original-title="payment payment-visa-dark"></i></td>
                                            <td>$2,000</td>
                                        </tr>
                                        <tr>
                                            <td>PQ 8585</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar1.jpg')}}" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                                                    <div class="ml-3">
                                                        <a href="javascript:void(0)" title="">Zoe Baker</a>
                                                        <p class="mb-0"><a href="https://epic.nsdbytes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b7cdd8d299d5d6dcd2c5f7d2cfd6dac7dbd299d4d8da">[email&#160;protected]</a></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Bootstrap 4 Angular5 Admin</td>
                                            <td>13 July, 2018</td>
                                            <td><i class="payment payment-visa-dark" data-toggle="tooltip" title="" data-original-title="payment payment-visa-dark"></i></td>
                                            <td>$10,000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <nav aria-label="Page navigation">
                                <ul class="pagination mb-0 justify-content-end">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="Accounts-Expenses" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped table-vcenter text-nowrap mb-0">
                                    <thead>
                                        <tr>
                                            <th>Item</th>
                                            <th>Order by</th>
                                            <th>From</th>
                                            <th>Date</th>
                                            <th>Paid By</th>
                                            <th>Status</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>HP Laptop</td>
                                            <td>Marshall Nichols</td>
                                            <td>Paytem</td>
                                            <td>07 March, 2018</td>
                                            <td><i class="payment payment-paypal" data-toggle="tooltip" title="" data-original-title="payment payment-paypal"></i></td>
                                            <td><span class="tag tag-warning">Pending</span></td>
                                            <td>$205</td>
                                        </tr>
                                        <tr>
                                            <td>iMack Desktop</td>
                                            <td>Marshall Nichols</td>
                                            <td>ebay USA</td>
                                            <td>22 July, 2017</td>
                                            <td><i class="payment payment-paypal" data-toggle="tooltip" title="" data-original-title="payment payment-paypal"></i></td>
                                            <td><span class="tag tag-warning">Pending</span></td>
                                            <td>$355</td>
                                        </tr>
                                        <tr>
                                            <td>Logitech USB Mouse, Keyboard</td>
                                            <td>Marshall Nichols</td>
                                            <td>Amazon</td>
                                            <td>28 July, 2018</td>
                                            <td><i class="payment payment-paypal" data-toggle="tooltip" title="" data-original-title="payment payment-paypal"></i></td>
                                            <td><span class="tag tag-success">Approved</span></td>
                                            <td>$40</td>
                                        </tr>
                                        <tr>
                                            <td>MacBook Pro Air</td>
                                            <td>Debra Stewart</td>
                                            <td>Amazon</td>
                                            <td>17 Jun, 2018</td>
                                            <td><i class="payment payment-mastercard" data-toggle="tooltip" title="" data-original-title="payment payment-mastercard"></i></td>
                                            <td><span class="tag tag-success">Approved</span></td>
                                            <td>$800</td>
                                        </tr>
                                        <tr>
                                            <td>Dell Monitor 28 inch</td>
                                            <td>Ava Alexander</td>
                                            <td>Flipkart UK</td>
                                            <td>21 Jun, 2018</td>
                                            <td><i class="payment payment-paypal" data-toggle="tooltip" title="" data-original-title="payment payment-paypal"></i></td>
                                            <td><span class="tag tag-success">Approved</span></td>
                                            <td>$205</td>
                                        </tr>
                                        <tr>
                                            <td>Logitech USB Mouse, Keyboard</td>
                                            <td>Marshall Nichols</td>
                                            <td>Amazon</td>
                                            <td>28 July, 2018</td>
                                            <td><i class="payment payment-paypal" data-toggle="tooltip" title="" data-original-title="payment payment-paypal"></i></td>
                                            <td><span class="tag tag-success">Approved</span></td>
                                            <td>$40</td>
                                        </tr>
                                        <tr>
                                            <td>MacBook Pro Air</td>
                                            <td>Debra Stewart</td>
                                            <td>Amazon</td>
                                            <td>17 Jun, 2018</td>
                                            <td><i class="payment payment-mastercard" data-toggle="tooltip" title="" data-original-title="payment payment-mastercard"></i></td>
                                            <td><span class="tag tag-success">Approved</span></td>
                                            <td>$800</td>
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
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-outline-primary btn-sm">Buy Now</a></li>
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

            <form action="{{route('add-account')}}" method="post" enctype="multipart/form-data">

                @csrf

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="invoice_no" placeholder="Enter invoice_no">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="clients" placeholder="Enter Clients Name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="date" class="form-control" name="date" placeholder="Enter Date">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="type" placeholder="Enter Type">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                              <div class="form-group">
                                 <select class="form-control show-tick" name="status">
                                    <option>Status</option>
                                    <option>Approved</option>
                                    <option>Pending</option>
                                </select>
                              </div>
                           </div>
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="amount" placeholder="Enter Amount">
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
        window.location.href = "{{ route('departments') }}";
    }
</script>

<script type="text/javascript">
    var rakesh = $.noConflict();

    rakesh(document).ready(function() {

        rakesh('.songs').select2();

    });

    function deleteAccount(id)

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

                    url: "<?= url('delete_department') ?>",

                    data: {
                        'table': 'accounts',
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