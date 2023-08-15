@include('layouts_user.header')

<div class="page">
    <div>
        <div id="page_top" class="section-body  ">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="left">
                        <h1 class="page-title">Todo List</h1><select class="custom-select">
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
                                        class="dropdown-item" href="{{asset('signout')}}"><i
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

        $result = DB::table('projecttodo')
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

                                <h3 class="card-title">Update Project To Do Detail</h3>

                            </div>

                            <div class="card-body">

                                <form action="{{ route('edit-projecttodo') }}" method="post" enctype="multipart/form-data">

                                    @csrf

                                    <div class="">

                                        <div class="row clearfix">

                                            <!------------------------------------------------>

                                            <div class="col-md-12">

                                                <h6 style="background: #edeff3;padding: 10px;">Project To Do Information</h6>

                                                <input type="hidden" name="id" value="<?php echo @$result->id; ?>">


                                                <div class="row">


                                                   <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                            <label for="short_description">Short Description</label>
                                                            <input type="text" class="form-control" name="short_description" value="<?php echo @$result->short_description; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                                        <div class="form-group">

                                                            <label for="due">Due</label>

                                                            <input type="datetime-local" class="form-control" name="due" value="{{ isset($result->due) ? $result->due : '' }}">

                                                        </div>
                                                        </div>

                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="priority">PRIORITY</label>
                                                        <select class="form-control show-tick" name="priority">
                                                            <option value="med" {{ $result->priority == 'Med' ? 'selected' : '' }}>Med</option>
                                                            <option value="high" {{ $result->priority == 'High' ? 'selected' : '' }}>High</option>
                                                        </select>
                                                    </div>
                                                </div>


                                                  <div class="col-lg-6 col-md-6 col-sm-12">

                                                        <div class="form-group">

                                                            <label for="user">User</label>

                                                            <input type="text" class="form-control" name="user" value="<?php echo @$result->user; ?>">

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

                                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href='/project-todo'">Close</button>

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
<br>
<div class="section-body">

         <div class="container-fluid">

            <div class="d-flex justify-content-between align-items-center mb-3">

               <div class="header-action">

                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fe fe-plus mr-2"></i>Add</button>

               </div>

            </div>
         </div>
      </div>

    <div class="section-body  mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
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

                        <div class="card-body">
                            <div class="table-responsive todo_list">
                                <table id="myTable" class="table table-hover table-striped table-vcenter mb-0">
                                    <thead>
                                        <tr>
                                            <th class="w150">Short Description</th>
                                            <th class="w150 text-right">Due</th>
                                            <th class="w100">Priority</th>
                                            <th class="w80"><i class="icon-user"></i></th>
                                            <th class="w80">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $result = DB::table('projecttodo')->get()->toArray();

                                            $i = 1;

                                            foreach ($result as $result_in) {

                                            ?>
                                        <tr>
                                            <td><label class="custom-control custom-checkbox"><input type="checkbox"
                                                        class="custom-control-input" name="example-checkbox1"
                                                        value="option1" checked=""><span
                                                        class="custom-control-label"><?php echo $result_in->short_description; ?></span></label>
                                            </td>
                                            <td class="text-right"><?php echo $result_in->due; ?></td>
                                            <td><span class="tag tag-danger ml-0 mr-0">HIGH</span></td>
                                            <td><span class="avatar avatar-pink" data-toggle="tooltip"
                                                    data-placement="top" data-original-title="Avatar Name"><?php echo $result_in->user; ?></span>
                                            </td>
                                        <td>
                                                <a href="/project-todo/edit/<?php echo $result_in->id; ?>" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
                                                 <button onclick="deleteProjecttodo('{{$result_in->id}}')" type="button" class="btn btn-icon btn-sm" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
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

            <form action="{{route('add-projecttodo')}}" method="post" enctype="multipart/form-data">

                @csrf

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Project To Do</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row clearfix">
                    <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="short_description" placeholder="Enter Short Description">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="date" class="form-control" name="due" placeholder="Enter Due">
                            </div>
                        </div>
                        
                       
                        <div class="col-md-4 col-sm-12">
                              <div class="form-group">
                                 <select class="form-control show-tick" name="priority">
                                    <option>Priority</option>
                                    <option>Med</option>
                                    <option>High</option>
                                  </select>
                              </div>
                           </div>  

                           <div class="col-md-12">
    <div class="form-group">
        <label for="user">User</label>
        <select class="form-control" name="user">
            <option value="">Select User</option>
            @foreach ($employees as $employee)
                <option value="{{ $employee->id }}">{{ $employee->emp_first_name }} {{ $employee->emp_last_name }}</option>
            @endforeach
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
        window.location.href = "{{ route('project-todo') }}";
    }
</script>

<script type="text/javascript">
    var rakesh = $.noConflict();

    rakesh(document).ready(function() {

        rakesh('.songs').select2();

    });

    function deleteProjecttodo(id)

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

                    url: "<?= url('delete_projecttodo') ?>",

                    data: {
                        'table': 'projecttodo',
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
