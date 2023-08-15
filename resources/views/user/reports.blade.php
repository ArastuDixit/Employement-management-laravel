@include('layouts_user.header')

<div class="page">
    <div id="page_top" class="section-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="left">
                    <h1 class="page-title">Report</h1>
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

        $result = DB::table('reports')
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

                                <h3 class="card-title">Update Reports Detail</h3>

                            </div>

                            <div class="card-body">

                                <form action="{{ route('edit-report') }}" method="post" enctype="multipart/form-data">

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
                                                            <label for="item">Item</label>
                                                            <input type="text" class="form-control" name="item" value="<?php echo @$result->item; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 col-md-12 col-sm-12">

                                                        <div class="form-group">

                                                            <label for="category">Category</label>

                                                            <input type="text" class="form-control" name="category" value="<?php echo @$result->category; ?>">

                                                        </div>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12">

                                                        <div class="form-group">

                                                            <label for="order_by">Order By</label>

                                                            <input type="text" class="form-control" name="order_by" value="<?php echo @$result->order_by; ?>">

                                                        </div>
                                                  </div>
                                                    
                                                        <div class="col-lg-6 col-md-6 col-sm-12">

                                                        <div class="form-group">

                                                            <label for="order_from">Order From</label>

                                                            <input type="text" class="form-control" name="order_from" value="<?php echo @$result->order_from; ?>">

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
                                                            <label for="paid_by">Paid By</label>
                                                            <input type="text" class="form-control" name="paid_by" value="<?php echo @$result->paid_by; ?>">
                                                        </div>
                                                    </div>
                                                    
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label for="status">Status</label>
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

                                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href='/reports'">Close</button>

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
            <div class="d-md-flex justify-content-between align-items-center">
                <ul class="nav nav-tabs page-header-tab">
                    <li class="nav-item"><a class="nav-link active" id="Report-tab" data-toggle="tab" href="#Report-Invoices">Expenses</a></li>
                    <li class="nav-item"><a class="nav-link" id="Report-tab" data-toggle="tab" href="#Report-Invoice">Invoice</a></li>
                    <li class="nav-item"><a class="nav-link" id="Report-tab" data-toggle="tab" href="#Report-detail">Detail</a></li>
                </ul>
                <div class="header-action d-flex">
                    <select class="custom-select mr-2">
                        <option>Year</option>
                        <option>Month</option>
                        <option>Week</option>
                    </select>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fe fe-plus mr-2"></i>Add</button>
                </div>
            </div>
        </div>
    </div>
    <div class="section-body mt-3">
        <div class="container-fluid">
            <div class="tab-content mt-3">
                <div class="tab-pane fade show active" id="Report-Invoices" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-value float-right text-azure">23%</div>
                                    <h4 class="mb-1">$<span class="counter">562</span></h4>
                                    <div>Computer</div>
                                    <div class="mt-4">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-azure" style="width: 23%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-value float-right text-cyan">52%</div>
                                    <h4 class="mb-1">$<span class="counter">2,450</span></h4>
                                    <div>Laptop</div>
                                    <div class="mt-4">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-cyan" style="width: 52%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-value float-right text-danger">27%</div>
                                    <h4 class="mb-1">$<span class="counter">1,258</span></h4>
                                    <div>Accessories</div>
                                    <div class="mt-4">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-danger" style="width: 27%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-value float-right text-pink">12%</div>
                                    <h4 class="mb-1">$<span class="counter">562</span></h4>
                                    <div>Others</div>
                                    <div class="mt-4">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-pink" style="width: 12%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="myTable" class="table table-hover table-striped table-vcenter mb-0 text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Item</th>
                                            <th>Order by</th>
                                            <th>OrderFrom</th>
                                            <th>Date</th>
                                            <th>Paid By</th>
                                            <th>Status</th>
                                            <th>Amount</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $result = DB::table('reports')->get()->toArray();

                                            $i = 1;

                                            foreach ($result as $result_in) {

                                            ?>
                                        <tr>
                                            <td><?php echo $result_in->item; ?></td>
                                            <td><?php echo $result_in->order_by; ?></td>
                                            <td><?php echo $result_in->order_from; ?></td>
                                            <td><?php echo $result_in->date; ?></td>
                                            <td><?php echo $result_in->paid_by; ?></td>
                                            <td><span class="badge badge-warning"><?php echo $result_in->status; ?></span></td>
                                            <td><?php echo $result_in->amount; ?></td>
                                        
                                        <td>
                                                <a href="/reports/edit/<?php echo $result_in->id; ?>" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
                                                <button type="button" class="btn btn-icon btn-sm btn-sm" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                                <button type="button" class="btn btn-icon btn-sm" title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                                <button onclick="deleteReport('{{$result_in->id}}')" type="button" class="btn btn-icon btn-sm" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
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
                <div class="tab-pane fade" id="Report-Invoice" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            <div class="row text-center">
                                <div class="col-lg-4">
                                    <h4 class="mb-1"><i class="mdi mdi-trending-down text-danger"></i> <span class="counter">562</span></h4>
                                    <div class="text-muted-dark">Total Approved</div>
                                </div>
                                <div class="col-lg-4">
                                    <h4 class="mb-1"><i class="mdi mdi-trending-up text-success"></i> <span class="counter">254</span></h4>
                                    <div class="text-muted-dark">Pending Invoice</div>
                                </div>
                                <div class="col-lg-4">
                                    <h4 class="mb-1"><i class="mdi mdi-trending-neutral text-warning"></i> <span class="counter">982</span></h4>
                                    <div class="text-muted-dark">Closed</div>
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
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped table-vcenter text-nowrap">
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
                                        <tr>
                                            <td>#LA-5218</td>
                                            <td>vPro tec LLC.</td>
                                            <td>07 March, 2018</td>
                                            <td><i class="payment payment-cirrus" data-toggle="tooltip" title="" data-original-title="payment payment-cirrus"></i></td>
                                            <td><span class="badge badge-success">Approved</span></td>
                                            <td>$4,205</td>
                                            <td>
                                                <button type="button" class="btn btn-icon btn-sm btn-sm" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                                <button type="button" class="btn btn-icon btn-sm" title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                                <button type="button" class="btn btn-icon btn-sm" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#LA-1212</td>
                                            <td>BT Technology</td>
                                            <td>25 Jun, 2018</td>
                                            <td><i class="payment payment-bitcoin" data-toggle="tooltip" title="" data-original-title="payment payment-bitcoin"></i></td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                            <td>$5,205</td>
                                            <td>
                                                <button type="button" class="btn btn-icon btn-sm" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                                <button type="button" class="btn btn-icon btn-sm" title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                                <button type="button" class="btn btn-icon btn-sm" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#LA-0222</td>
                                            <td>More Infoweb Pvt.</td>
                                            <td>12 July, 2018</td>
                                            <td><i class="payment payment-paypal" data-toggle="tooltip" title="" data-original-title="payment payment-paypal"></i></td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                            <td>$2,000</td>
                                            <td>
                                                <button type="button" class="btn btn-icon btn-sm" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                                <button type="button" class="btn btn-icon btn-sm" title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                                <button type="button" class="btn btn-icon btn-sm" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#LA-0312</td>
                                            <td>RETO Tech LLC.</td>
                                            <td>13 July, 2018</td>
                                            <td><i class="payment payment-paypal" data-toggle="tooltip" title="" data-original-title="payment payment-paypal"></i></td>
                                            <td><span class="badge badge-success">Approved</span></td>
                                            <td>$10,000</td>
                                            <td>
                                                <button type="button" class="btn btn-icon btn-sm" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                                <button type="button" class="btn btn-icon btn-sm" title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                                <button type="button" class="btn btn-icon btn-sm" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#LA-5656</td>
                                            <td>SDRAPP Pvt.</td>
                                            <td>27 July, 2018</td>
                                            <td><i class="payment payment-visa-dark" data-toggle="tooltip" title="" data-original-title="payment payment-visa-dark"></i></td>
                                            <td><span class="badge badge-success">Approved</span></td>
                                            <td>$1,205</td>
                                            <td>
                                                <button type="button" class="btn btn-icon btn-sm" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                                <button type="button" class="btn btn-icon btn-sm" title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                                <button type="button" class="btn btn-icon btn-sm" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#LA-4515</td>
                                            <td>Kdash Infoweb LLC.</td>
                                            <td>07 March, 2018</td>
                                            <td><i class="payment payment-paypal" data-toggle="tooltip" title="" data-original-title="payment payment-paypal"></i></td>
                                            <td><span class="badge badge-success">Approved</span></td>
                                            <td>$4,205</td>
                                            <td>
                                                <button type="button" class="btn btn-icon btn-sm" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                                <button type="button" class="btn btn-icon btn-sm" title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                                <button type="button" class="btn btn-icon btn-sm" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#LA-1212</td>
                                            <td>BT Technology</td>
                                            <td>25 Jun, 2018</td>
                                            <td><i class="payment payment-bitcoin" data-toggle="tooltip" title="" data-original-title="payment payment-bitcoin"></i></td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                            <td>$5,205</td>
                                            <td>
                                                <button type="button" class="btn btn-icon btn-sm" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                                <button type="button" class="btn btn-icon btn-sm" title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                                <button type="button" class="btn btn-icon btn-sm" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#LA-0222</td>
                                            <td>More Infoweb Pvt.</td>
                                            <td>12 July, 2018</td>
                                            <td><i class="payment payment-paypal" data-toggle="tooltip" title="" data-original-title="payment payment-paypal"></i></td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                            <td>$2,000</td>
                                            <td>
                                                <button type="button" class="btn btn-icon btn-sm" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                                <button type="button" class="btn btn-icon btn-sm" title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                                <button type="button" class="btn btn-icon btn-sm" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#LA-7845</td>
                                            <td>BT infoweb</td>
                                            <td>25 Jun, 2018</td>
                                            <td><i class="payment payment-bitcoin" data-toggle="tooltip" title="" data-original-title="payment payment-bitcoin"></i></td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                            <td>$5,205</td>
                                            <td>
                                                <button type="button" class="btn btn-icon btn-sm" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                                <button type="button" class="btn btn-icon btn-sm" title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                                <button type="button" class="btn btn-icon btn-sm" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#LA-5656</td>
                                            <td>SDRAPP Pvt.</td>
                                            <td>27 July, 2018</td>
                                            <td><i class="payment payment-visa-dark" data-toggle="tooltip" title="" data-original-title="payment payment-visa-dark"></i></td>
                                            <td><span class="badge badge-success">Approved</span></td>
                                            <td>$1,205</td>
                                            <td>
                                                <button type="button" class="btn btn-icon btn-sm" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                                <button type="button" class="btn btn-icon btn-sm" title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                                <button type="button" class="btn btn-icon btn-sm" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                            </td>
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
                <div class="tab-pane fade" id="Report-detail" role="tabpanel">
                    <div class="row clearfix">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">#AB0017</h3>
                                    <div class="card-options">
                                        <button type="button" class="btn btn-primary"><i class="si si-printer"></i> Print Invoice</button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row my-8">
                                        <div class="col-6">
                                            <p class="h3">Company</p>
                                            <address>
                                                Street Address<br>
                                                State, City<br>
                                                Region, Postal Code<br>
                                                <a href="https://epic.nsdbytes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="513d2535113429303c213d347f323e3c">[email&#160;protected]</a>
                                            </address>
                                        </div>
                                        <div class="col-6 text-right">
                                            <p class="h3">Client</p>
                                            <address>
                                                Street Address<br>
                                                State, City<br>
                                                Region, Postal Code<br>
                                                <a href="https://epic.nsdbytes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4f2c3b3d0f2a372e223f232a612c2022">[email&#160;protected]</a>
                                            </address>
                                        </div>
                                    </div>
                                    <div class="table-responsive push">
                                        <table class="table table-bordered table-hover text-nowrap">
                                            <tbody>
                                                <tr>
                                                    <th class="text-center width35"></th>
                                                    <th>Product</th>
                                                    <th class="text-center" style="width: 1%">Qnt</th>
                                                    <th class="text-right" style="width: 1%">Unit</th>
                                                    <th class="text-right" style="width: 1%">Amount</th>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>
                                                        <p class="font600 mb-1">Logo Creation</p>
                                                        <div class="text-muted">Logo and business cards design</div>
                                                    </td>
                                                    <td class="text-center">1</td>
                                                    <td class="text-right">$1.800,00</td>
                                                    <td class="text-right">$1.800,00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>
                                                        <p class="font600 mb-1">Online Store Design &amp; Development</p>
                                                        <div class="text-muted">Design/Development for all popular modern browsers</div>
                                                    </td>
                                                    <td class="text-center">1</td>
                                                    <td class="text-right">$20.000,00</td>
                                                    <td class="text-right">$20.000,00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td>
                                                        <p class="font600 mb-1">App Design</p>
                                                        <div class="text-muted">Promotional mobile application</div>
                                                    </td>
                                                    <td class="text-center">1</td>
                                                    <td class="text-right">$3.200,00</td>
                                                    <td class="text-right">$3.200,00</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" class="font600 text-right">Subtotal</td>
                                                    <td class="text-right">$25.000,00</td>
                                                </tr>
                                                <tr class="bg-light">
                                                    <td colspan="4" class="font600 text-right">Vat Rate</td>
                                                    <td class="text-right">20%</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" class="font600 text-right">Vat Due</td>
                                                    <td class="text-right">$5.000,00</td>
                                                </tr>
                                                <tr class="bg-green text-light">
                                                    <td colspan="4" class="font700 text-right">Total Due</td>
                                                    <td class="font700 text-right">$30.000,00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <p class="text-muted text-center">Thank you very much for doing business with us. We look forward to working with you again!</p>
                                </div>
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

            <form action="{{route('add-report')}}" method="post" enctype="multipart/form-data">

                @csrf

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="item" placeholder="Enter item">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="category" placeholder="Enter category">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="order_by" placeholder="Enter Order By">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="order_from" placeholder="Enter Order From">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="date" class="form-control" name="date" placeholder="Enter Date">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="paid_by" placeholder="Enter Paid By">
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
        window.location.href = "{{ route('reports') }}";
    }
</script>

<script type="text/javascript">
    var rakesh = $.noConflict();

    rakesh(document).ready(function() {

        rakesh('.songs').select2();

    });

    function deleteReport(id)

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

                    url: "<?= url('delete_report') ?>",

                    data: {
                        'table': 'reports',
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