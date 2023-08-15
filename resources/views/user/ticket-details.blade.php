@include('layouts_user.header')
<div class="page">
    <div>
        <div id="page_top" class="section-body  ">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="left">
                        <h1 class="page-title">Ticket Details</h1>
                        <select class="custom-select">
                            <option>Year</option>
                            <option>Month</option>
                            <option>Week</option>
                        </select>
                        <div class="input-group xs-hide"><input type="text" class="form-control"
                                placeholder="Search..."></div>
                    </div>
                    <div class="right">
                        <ul class="nav nav-pills">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Language</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item"><img class="w20 mr-2" src="../assets/images/flags/us.svg"
                                            alt="fake_url">English</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item"><img class="w20 mr-2" src="../assets/images/flags/es.svg"
                                            alt="fake_url">Spanish</a><a class="dropdown-item"><img class="w20 mr-2"
                                            src="../assets/images/flags/jp.svg" alt="fake_url">japanese</a><a
                                        class="dropdown-item"><img class="w20 mr-2" src="../assets/images/flags/bl.svg"
                                            alt="fake_url">France</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Reports</a>
                                <div class="dropdown-menu"><a class="dropdown-item"><i
                                            class="dropdown-icon fa fa-file-excel-o"></i> MS Excel</a><a
                                        class="dropdown-item"><i class="dropdown-icon fa fa-file-word-o"></i> MS
                                        Word</a><a class="dropdown-item"><i class="dropdown-icon fa fa-file-pdf-o"></i>
                                        PDF</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Project</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item">Graphics Design</a><a class="dropdown-item">Angular
                                        Admin</a><a class="dropdown-item">PSD to HTML</a><a class="dropdown-item">iOs
                                        App Development</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item">Home Development</a><a class="dropdown-item">New Blog
                                        post</a>
                                </div>
                            </li>
                        </ul>
                        <div class="notification d-flex">
                            <div class="dropdown d-flex">
                                <a href="/#" class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1"
                                    data-toggle="dropdown"><i class="fa fa-envelope"></i><span
                                        class="badge badge-success nav-unread"></span></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <ul class="right_chat list-unstyled w250 p-0">
                                        <li class="online">
                                            <a href="fake_url">
                                                <div class="media">
                                                    <img class="media-object " src="../assets/images/xs/avatar4.jpg"
                                                        alt="fake_url">
                                                    <div class="media-body"><span class="name">Donald
                                                            Gardner</span><span class="message">Designer,
                                                            Blogger</span><span
                                                            class="badge badge-outline status"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="online">
                                            <a href="fake_url">
                                                <div class="media">
                                                    <img class="media-object " src="../assets/images/xs/avatar5.jpg"
                                                        alt="fake_url">
                                                    <div class="media-body"><span class="name">Wendy Keen</span><span
                                                            class="message">Java Developer</span><span
                                                            class="badge badge-outline status"></span></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="offline">
                                            <a href="fake_url">
                                                <div class="media">
                                                    <img class="media-object " src="../assets/images/xs/avatar2.jpg"
                                                        alt="fake_url">
                                                    <div class="media-body"><span class="name">Matt
                                                            Rosales</span><span class="message">CEO, Epic
                                                            Theme</span><span
                                                            class="badge badge-outline status"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="online">
                                            <a href="fake_url">
                                                <div class="media">
                                                    <img class="media-object " src="../assets/images/xs/avatar3.jpg"
                                                        alt="fake_url">
                                                    <div class="media-body"><span class="name">Phillip
                                                            Smith</span><span class="message">Writter, Mag
                                                            Editor</span><span
                                                            class="badge badge-outline status"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
                                </div>
                            </div>
                            <div class="dropdown d-flex">
                                <a href="/#" class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1"
                                    data-toggle="dropdown"><i class="fa fa-bell"></i><span
                                        class="badge badge-primary nav-unread"></span></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <ul class="list-unstyled feeds_widget">
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-check"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title text-danger">Issue Fixed <small
                                                        class="float-right text-muted">11:05</small></h4>
                                                <small>WE have fix all Design bug with Responsive</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-user"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title">New User <small
                                                        class="float-right text-muted">10:45</small></h4>
                                                <small>I feel great! Thanks team</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-thumbs-o-up"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title">7 New Feedback <small
                                                        class="float-right text-muted">Today</small></h4>
                                                <small>It will give a smart finishing to your site</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-question-circle"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title text-warning">Server Warning <small
                                                        class="float-right text-muted">10:50</small></h4>
                                                <small>Your connection is not private</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-shopping-cart"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title">7 New Orders <small
                                                        class="float-right text-muted">11:35</small></h4>
                                                <small>You received a new oder from Tina.</small>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="dropdown-divider"></div>
                                    <a href="fake_url" class="dropdown-item text-center text-muted-dark readall">Mark
                                        all as read</a>
                                </div>
                            </div>
                            <div class="dropdown d-flex">
                                <a href="/#" class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1"
                                    data-toggle="dropdown"><i class="fa fa-user"></i></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="/profile"><i class="dropdown-icon fe fe-user"></i>
                                        Profile</a><a class="dropdown-item"><i
                                            class="dropdown-icon fe fe-settings"></i> Settings</a><a
                                        class="dropdown-item"><span class="float-right"><span
                                                class="badge badge-primary">6</span></span><i
                                            class="dropdown-icon fe fe-mail"></i> Inbox</a><a class="dropdown-item"><i
                                            class="dropdown-icon fe fe-send"></i> Message</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item"><i class="dropdown-icon fe fe-help-circle"></i> Need
                                        help?</a><a class="dropdown-item" href="/login"><i
                                            class="dropdown-icon fe fe-log-out"></i> Sign out</a>
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
                <div class="col-lg-4 col-md-12">
                    <div class="card c_grid c_yellow">
                        <div class="card-body text-center">
                            <div class="circle"><img class="rounded-circle" src="../assets/images/sm/avatar1.jpg"
                                    alt="fake_url"></div>
                            <h6 class="mt-3 mb-0">Michelle Green</h6>
                            <span>jason-porter@info.com</span>
                            <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                <li><a class="p-3" target="_blank" href="/#"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li><a class="p-3" target="_blank" href="/#"><i class="fa fa-slack"></i></a>
                                </li>
                                <li><a class="p-3" target="_blank" href="/#"><i
                                            class="fa fa-linkedin"></i></a></li>
                            </ul>
                            <button class="btn btn-default btn-sm">Follow</button><button
                                class="btn btn-default btn-sm">Message</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Ticket Details</h3>
                            <div class="card-options">
                                <span class="card-options-remove" data-toggle="card-remove"><i
                                        class="fe fe-x"></i></span>
                                <div class="item-action dropdown ml-2">
                                    <a href="fake_url" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="fake_url" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-eye"></i> View Details </a><a
                                            href="fake_url" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-share-alt"></i> Share </a><a
                                            href="fake_url" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="fake_url" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-copy"></i> Copy to</a><a href="fake_url"
                                            class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move
                                            to</a><a href="fake_url" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-edit"></i> Rename</a><a href="fake_url"
                                            class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body"><span>Contrary to popular belief, Lorem Ipsum is not simply random text.
                                It has roots in a piece of classical Latin literature from 45 BC, making it over 2000
                                years old. Richard McClintock, a Latin professor at Hampden-Sydney College in
                                Virginia</span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Ticket Info</h3>
                            <div class="card-options">
                                <span class="card-options-remove" data-toggle="card-remove"><i
                                        class="fe fe-x"></i></span>
                                <div class="item-action dropdown ml-2">
                                    <a href="fake_url" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="fake_url" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-eye"></i> View Details </a><a
                                            href="fake_url" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-share-alt"></i> Share </a><a
                                            href="fake_url" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="fake_url" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-copy"></i> Copy to</a><a href="fake_url"
                                            class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move
                                            to</a><a href="fake_url" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-edit"></i> Rename</a><a href="fake_url"
                                            class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <small class="text-muted">Title: </small>
                                    <p class="mb-0">Oculux Admin Template</p>
                                </li>
                                <li class="list-group-item">
                                    <small class="text-muted">Department: </small>
                                    <p class="mb-0">Pre-Sales</p>
                                </li>
                                <li class="list-group-item">
                                    <small class="text-muted">Product: </small>
                                    <p class="mb-0">Oculux Side Menu Open OnClick</p>
                                </li>
                                <li class="list-group-item">
                                    <small class="text-muted">Date: </small>
                                    <p class="mb-0">07 Feb 2019</p>
                                </li>
                                <li class="list-group-item">
                                    <div>In Progress</div>
                                    <div class="progress progress-xs mb-0">
                                        <div class="progress-bar bg-info" style="width: 58%;"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <div class="p10">
                                    <div id="cke_editor1"
                                        class="cke_1 cke cke_reset cke_chrome cke_editor_editor1 cke_ltr cke_browser_webkit"
                                        dir="ltr" lang="en" role="application"
                                        aria-labelledby="cke_editor1_arialbl"><span id="cke_editor1_arialbl"
                                            class="cke_voice_label">Rich Text Editor, editor1</span>
                                        <div class="cke_inner cke_reset" role="presentation"><span id="cke_1_top"
                                                class="cke_top cke_reset_all" role="presentation"
                                                style="height: auto; user-select: none;"><span id="cke_8"
                                                    class="cke_voice_label">Editor toolbars</span><span
                                                    id="cke_1_toolbox" class="cke_toolbox" role="group"
                                                    aria-labelledby="cke_8" onmousedown="return false;"><span
                                                        id="cke_11" class="cke_toolbar"
                                                        aria-labelledby="cke_11_label" role="toolbar"><span
                                                            id="cke_11_label"
                                                            class="cke_voice_label">Clipboard/Undo</span><span
                                                            class="cke_toolbar_start"></span><span
                                                            class="cke_toolgroup" role="presentation"><a
                                                                id="cke_12"
                                                                class="cke_button cke_button__cut cke_button_disabled"
                                                                href="javascript:void('Cut')" title="Cut (Ctrl+X)"
                                                                tabindex="-1" hidefocus="true" role="button"
                                                                aria-labelledby="cke_12_label"
                                                                aria-describedby="cke_12_description"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(2,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(3,event);"
                                                                onclick="CKEDITOR.tools.callFunction(4,this);return false;"
                                                                aria-disabled="true"><span
                                                                    class="cke_button_icon cke_button__cut_icon"
                                                                    style="background-image:url('https://cdn.ckeditor.com/4.6.2/standard/plugins/icons.png?t=H0CG');background-position:0 -264px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_12_label"
                                                                    class="cke_button_label cke_button__cut_label"
                                                                    aria-hidden="false">Cut</span><span
                                                                    id="cke_12_description" class="cke_button_label"
                                                                    aria-hidden="false">Keyboard shortcut
                                                                    Ctrl+X</span></a><a id="cke_13"
                                                                class="cke_button cke_button__copy cke_button_disabled"
                                                                href="javascript:void('Copy')" title="Copy (Ctrl+C)"
                                                                tabindex="-1" hidefocus="true" role="button"
                                                                aria-labelledby="cke_13_label"
                                                                aria-describedby="cke_13_description"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(5,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(6,event);"
                                                                onclick="CKEDITOR.tools.callFunction(7,this);return false;"
                                                                aria-disabled="true"><span
                                                                    class="cke_button_icon cke_button__copy_icon"
                                                                    style="background-image:url('https://cdn.ckeditor.com/4.6.2/standard/plugins/icons.png?t=H0CG');background-position:0 -216px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_13_label"
                                                                    class="cke_button_label cke_button__copy_label"
                                                                    aria-hidden="false">Copy</span><span
                                                                    id="cke_13_description" class="cke_button_label"
                                                                    aria-hidden="false">Keyboard shortcut
                                                                    Ctrl+C</span></a><a id="cke_14"
                                                                class="cke_button cke_button__paste cke_button_off"
                                                                href="javascript:void('Paste')" title="Paste (Ctrl+V)"
                                                                tabindex="-1" hidefocus="true" role="button"
                                                                aria-labelledby="cke_14_label"
                                                                aria-describedby="cke_14_description"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(8,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(9,event);"
                                                                onclick="CKEDITOR.tools.callFunction(10,this);return false;"><span
                                                                    class="cke_button_icon cke_button__paste_icon"
                                                                    style="background-image:url('https://cdn.ckeditor.com/4.6.2/standard/plugins/icons.png?t=H0CG');background-position:0 -312px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_14_label"
                                                                    class="cke_button_label cke_button__paste_label"
                                                                    aria-hidden="false">Paste</span><span
                                                                    id="cke_14_description" class="cke_button_label"
                                                                    aria-hidden="false">Keyboard shortcut
                                                                    Ctrl+V</span></a><a id="cke_15"
                                                                class="cke_button cke_button__pastetext cke_button_off"
                                                                href="javascript:void('Paste as plain text')"
                                                                title="Paste as plain text" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_15_label"
                                                                aria-describedby="cke_15_description"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(11,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(12,event);"
                                                                onclick="CKEDITOR.tools.callFunction(13,this);return false;"><span
                                                                    class="cke_button_icon cke_button__pastetext_icon"
                                                                    style="background-image:url('https://cdn.ckeditor.com/4.6.2/standard/plugins/icons.png?t=H0CG');background-position:0 -720px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_15_label"
                                                                    class="cke_button_label cke_button__pastetext_label"
                                                                    aria-hidden="false">Paste as plain text</span><span
                                                                    id="cke_15_description" class="cke_button_label"
                                                                    aria-hidden="false"></span></a><a id="cke_16"
                                                                class="cke_button cke_button__pastefromword cke_button_off"
                                                                href="javascript:void('Paste from Word')"
                                                                title="Paste from Word" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_16_label"
                                                                aria-describedby="cke_16_description"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(14,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(15,event);"
                                                                onclick="CKEDITOR.tools.callFunction(16,this);return false;"><span
                                                                    class="cke_button_icon cke_button__pastefromword_icon"
                                                                    style="background-image:url('https://cdn.ckeditor.com/4.6.2/standard/plugins/icons.png?t=H0CG');background-position:0 -768px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_16_label"
                                                                    class="cke_button_label cke_button__pastefromword_label"
                                                                    aria-hidden="false">Paste from Word</span><span
                                                                    id="cke_16_description" class="cke_button_label"
                                                                    aria-hidden="false"></span></a><span
                                                                class="cke_toolbar_separator"
                                                                role="separator"></span><a id="cke_17"
                                                                class="cke_button cke_button__undo cke_button_disabled "
                                                                href="javascript:void('Undo')" title="Undo (Ctrl+Z)"
                                                                tabindex="-1" hidefocus="true" role="button"
                                                                aria-labelledby="cke_17_label"
                                                                aria-describedby="cke_17_description"
                                                                aria-haspopup="false" aria-disabled="true"
                                                                onkeydown="return CKEDITOR.tools.callFunction(17,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(18,event);"
                                                                onclick="CKEDITOR.tools.callFunction(19,this);return false;"><span
                                                                    class="cke_button_icon cke_button__undo_icon"
                                                                    style="background-image:url('https://cdn.ckeditor.com/4.6.2/standard/plugins/icons.png?t=H0CG');background-position:0 -1008px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_17_label"
                                                                    class="cke_button_label cke_button__undo_label"
                                                                    aria-hidden="false">Undo</span><span
                                                                    id="cke_17_description" class="cke_button_label"
                                                                    aria-hidden="false">Keyboard shortcut
                                                                    Ctrl+Z</span></a><a id="cke_18"
                                                                class="cke_button cke_button__redo cke_button_disabled "
                                                                href="javascript:void('Redo')" title="Redo (Ctrl+Y)"
                                                                tabindex="-1" hidefocus="true" role="button"
                                                                aria-labelledby="cke_18_label"
                                                                aria-describedby="cke_18_description"
                                                                aria-haspopup="false" aria-disabled="true"
                                                                onkeydown="return CKEDITOR.tools.callFunction(20,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(21,event);"
                                                                onclick="CKEDITOR.tools.callFunction(22,this);return false;"><span
                                                                    class="cke_button_icon cke_button__redo_icon"
                                                                    style="background-image:url('https://cdn.ckeditor.com/4.6.2/standard/plugins/icons.png?t=H0CG');background-position:0 -960px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_18_label"
                                                                    class="cke_button_label cke_button__redo_label"
                                                                    aria-hidden="false">Redo</span><span
                                                                    id="cke_18_description" class="cke_button_label"
                                                                    aria-hidden="false">Keyboard shortcut
                                                                    Ctrl+Y</span></a></span><span
                                                            class="cke_toolbar_end"></span></span><span id="cke_19"
                                                        class="cke_toolbar" aria-labelledby="cke_19_label"
                                                        role="toolbar"><span id="cke_19_label"
                                                            class="cke_voice_label">Editing</span><span
                                                            class="cke_toolbar_start"></span><span
                                                            class="cke_toolgroup" role="presentation"><a
                                                                id="cke_20"
                                                                class="cke_button cke_button__scayt cke_button_off"
                                                                href="javascript:void('Spell Checker')"
                                                                title="Spell Checker" tabindex="-1" hidefocus="true"
                                                                role="button" aria-labelledby="cke_20_label"
                                                                aria-describedby="cke_20_description"
                                                                aria-haspopup="true"
                                                                onkeydown="return CKEDITOR.tools.callFunction(23,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(24,event);"
                                                                onclick="CKEDITOR.tools.callFunction(25,this);return false;"><span
                                                                    class="cke_button_icon cke_button__scayt_icon"
                                                                    style="background-image:url('https://cdn.ckeditor.com/4.6.2/standard/plugins/icons.png?t=H0CG');background-position:0 -888px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_20_label"
                                                                    class="cke_button_label cke_button__scayt_label"
                                                                    aria-hidden="false">Spell Check As You
                                                                    Type</span><span id="cke_20_description"
                                                                    class="cke_button_label"
                                                                    aria-hidden="false"></span><span
                                                                    class="cke_button_arrow"></span></a></span><span
                                                            class="cke_toolbar_end"></span></span><span id="cke_21"
                                                        class="cke_toolbar" aria-labelledby="cke_21_label"
                                                        role="toolbar"><span id="cke_21_label"
                                                            class="cke_voice_label">Links</span><span
                                                            class="cke_toolbar_start"></span><span
                                                            class="cke_toolgroup" role="presentation"><a
                                                                id="cke_22"
                                                                class="cke_button cke_button__link cke_button_off"
                                                                href="javascript:void('Link')" title="Link (Ctrl+L)"
                                                                tabindex="-1" hidefocus="true" role="button"
                                                                aria-labelledby="cke_22_label"
                                                                aria-describedby="cke_22_description"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(26,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(27,event);"
                                                                onclick="CKEDITOR.tools.callFunction(28,this);return false;"><span
                                                                    class="cke_button_icon cke_button__link_icon"
                                                                    style="background-image:url('https://cdn.ckeditor.com/4.6.2/standard/plugins/icons.png?t=H0CG');background-position:0 -528px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_22_label"
                                                                    class="cke_button_label cke_button__link_label"
                                                                    aria-hidden="false">Link</span><span
                                                                    id="cke_22_description" class="cke_button_label"
                                                                    aria-hidden="false">Keyboard shortcut
                                                                    Ctrl+L</span></a><a id="cke_23"
                                                                class="cke_button cke_button__unlink cke_button_disabled "
                                                                href="javascript:void('Unlink')" title="Unlink"
                                                                tabindex="-1" hidefocus="true" role="button"
                                                                aria-labelledby="cke_23_label"
                                                                aria-describedby="cke_23_description"
                                                                aria-haspopup="false" aria-disabled="true"
                                                                onkeydown="return CKEDITOR.tools.callFunction(29,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(30,event);"
                                                                onclick="CKEDITOR.tools.callFunction(31,this);return false;"><span
                                                                    class="cke_button_icon cke_button__unlink_icon"
                                                                    style="background-image:url('https://cdn.ckeditor.com/4.6.2/standard/plugins/icons.png?t=H0CG');background-position:0 -552px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_23_label"
                                                                    class="cke_button_label cke_button__unlink_label"
                                                                    aria-hidden="false">Unlink</span><span
                                                                    id="cke_23_description" class="cke_button_label"
                                                                    aria-hidden="false"></span></a><a id="cke_24"
                                                                class="cke_button cke_button__anchor cke_button_off"
                                                                href="javascript:void('Anchor')" title="Anchor"
                                                                tabindex="-1" hidefocus="true" role="button"
                                                                aria-labelledby="cke_24_label"
                                                                aria-describedby="cke_24_description"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(32,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(33,event);"
                                                                onclick="CKEDITOR.tools.callFunction(34,this);return false;"><span
                                                                    class="cke_button_icon cke_button__anchor_icon"
                                                                    style="background-image:url('https://cdn.ckeditor.com/4.6.2/standard/plugins/icons.png?t=H0CG');background-position:0 -504px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_24_label"
                                                                    class="cke_button_label cke_button__anchor_label"
                                                                    aria-hidden="false">Anchor</span><span
                                                                    id="cke_24_description" class="cke_button_label"
                                                                    aria-hidden="false"></span></a></span><span
                                                            class="cke_toolbar_end"></span></span><span id="cke_25"
                                                        class="cke_toolbar" aria-labelledby="cke_25_label"
                                                        role="toolbar"><span id="cke_25_label"
                                                            class="cke_voice_label">Insert</span><span
                                                            class="cke_toolbar_start"></span><span
                                                            class="cke_toolgroup" role="presentation"><a
                                                                id="cke_26"
                                                                class="cke_button cke_button__image cke_button_off"
                                                                href="javascript:void('Image')" title="Image"
                                                                tabindex="-1" hidefocus="true" role="button"
                                                                aria-labelledby="cke_26_label"
                                                                aria-describedby="cke_26_description"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(35,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(36,event);"
                                                                onclick="CKEDITOR.tools.callFunction(37,this);return false;"><span
                                                                    class="cke_button_icon cke_button__image_icon"
                                                                    style="background-image:url('https://cdn.ckeditor.com/4.6.2/standard/plugins/icons.png?t=H0CG');background-position:0 -360px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_26_label"
                                                                    class="cke_button_label cke_button__image_label"
                                                                    aria-hidden="false">Image</span><span
                                                                    id="cke_26_description" class="cke_button_label"
                                                                    aria-hidden="false"></span></a><a id="cke_27"
                                                                class="cke_button cke_button__table cke_button_off"
                                                                href="javascript:void('Table')" title="Table"
                                                                tabindex="-1" hidefocus="true" role="button"
                                                                aria-labelledby="cke_27_label"
                                                                aria-describedby="cke_27_description"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(38,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(39,event);"
                                                                onclick="CKEDITOR.tools.callFunction(40,this);return false;"><span
                                                                    class="cke_button_icon cke_button__table_icon"
                                                                    style="background-image:url('https://cdn.ckeditor.com/4.6.2/standard/plugins/icons.png?t=H0CG');background-position:0 -912px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_27_label"
                                                                    class="cke_button_label cke_button__table_label"
                                                                    aria-hidden="false">Table</span><span
                                                                    id="cke_27_description" class="cke_button_label"
                                                                    aria-hidden="false"></span></a><a id="cke_28"
                                                                class="cke_button cke_button__horizontalrule cke_button_off"
                                                                href="javascript:void('Insert Horizontal Line')"
                                                                title="Insert Horizontal Line" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_28_label"
                                                                aria-describedby="cke_28_description"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(41,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(42,event);"
                                                                onclick="CKEDITOR.tools.callFunction(43,this);return false;"><span
                                                                    class="cke_button_icon cke_button__horizontalrule_icon"
                                                                    style="background-image:url('https://cdn.ckeditor.com/4.6.2/standard/plugins/icons.png?t=H0CG');background-position:0 -336px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_28_label"
                                                                    class="cke_button_label cke_button__horizontalrule_label"
                                                                    aria-hidden="false">Insert Horizontal
                                                                    Line</span><span id="cke_28_description"
                                                                    class="cke_button_label"
                                                                    aria-hidden="false"></span></a><a id="cke_29"
                                                                class="cke_button cke_button__specialchar cke_button_off"
                                                                href="javascript:void('Insert Special Character')"
                                                                title="Insert Special Character" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_29_label"
                                                                aria-describedby="cke_29_description"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(44,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(45,event);"
                                                                onclick="CKEDITOR.tools.callFunction(46,this);return false;"><span
                                                                    class="cke_button_icon cke_button__specialchar_icon"
                                                                    style="background-image:url('https://cdn.ckeditor.com/4.6.2/standard/plugins/icons.png?t=H0CG');background-position:0 -864px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_29_label"
                                                                    class="cke_button_label cke_button__specialchar_label"
                                                                    aria-hidden="false">Insert Special
                                                                    Character</span><span id="cke_29_description"
                                                                    class="cke_button_label"
                                                                    aria-hidden="false"></span></a></span><span
                                                            class="cke_toolbar_end"></span></span><span id="cke_30"
                                                        class="cke_toolbar" aria-labelledby="cke_30_label"
                                                        role="toolbar"><span id="cke_30_label"
                                                            class="cke_voice_label">Tools</span><span
                                                            class="cke_toolbar_start"></span><span
                                                            class="cke_toolgroup" role="presentation"><a
                                                                id="cke_31"
                                                                class="cke_button cke_button__maximize cke_button_off"
                                                                href="javascript:void('Maximize')" title="Maximize"
                                                                tabindex="-1" hidefocus="true" role="button"
                                                                aria-labelledby="cke_31_label"
                                                                aria-describedby="cke_31_description"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(47,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(48,event);"
                                                                onclick="CKEDITOR.tools.callFunction(49,this);return false;"><span
                                                                    class="cke_button_icon cke_button__maximize_icon"
                                                                    style="background-image:url('https://cdn.ckeditor.com/4.6.2/standard/plugins/icons.png?t=H0CG');background-position:0 -672px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_31_label"
                                                                    class="cke_button_label cke_button__maximize_label"
                                                                    aria-hidden="false">Maximize</span><span
                                                                    id="cke_31_description" class="cke_button_label"
                                                                    aria-hidden="false"></span></a></span><span
                                                            class="cke_toolbar_end"></span></span><span id="cke_32"
                                                        class="cke_toolbar" aria-labelledby="cke_32_label"
                                                        role="toolbar"><span id="cke_32_label"
                                                            class="cke_voice_label">Document</span><span
                                                            class="cke_toolbar_start"></span><span
                                                            class="cke_toolgroup" role="presentation"><a
                                                                id="cke_33"
                                                                class="cke_button cke_button__source cke_button_off"
                                                                href="javascript:void('Source')" title="Source"
                                                                tabindex="-1" hidefocus="true" role="button"
                                                                aria-labelledby="cke_33_label"
                                                                aria-describedby="cke_33_description"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(50,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(51,event);"
                                                                onclick="CKEDITOR.tools.callFunction(52,this);return false;"><span
                                                                    class="cke_button_icon cke_button__source_icon"
                                                                    style="background-image:url('https://cdn.ckeditor.com/4.6.2/standard/plugins/icons.png?t=H0CG');background-position:0 -840px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_33_label"
                                                                    class="cke_button_label cke_button__source_label"
                                                                    aria-hidden="false">Source</span><span
                                                                    id="cke_33_description" class="cke_button_label"
                                                                    aria-hidden="false"></span></a></span><span
                                                            class="cke_toolbar_end"></span></span><span
                                                        class="cke_toolbar_break"></span><span id="cke_34"
                                                        class="cke_toolbar" aria-labelledby="cke_34_label"
                                                        role="toolbar"><span id="cke_34_label"
                                                            class="cke_voice_label">Basic Styles</span><span
                                                            class="cke_toolbar_start"></span><span
                                                            class="cke_toolgroup" role="presentation"><a
                                                                id="cke_35"
                                                                class="cke_button cke_button__bold cke_button_off"
                                                                href="javascript:void('Bold')" title="Bold (Ctrl+B)"
                                                                tabindex="-1" hidefocus="true" role="button"
                                                                aria-labelledby="cke_35_label"
                                                                aria-describedby="cke_35_description"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(53,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(54,event);"
                                                                onclick="CKEDITOR.tools.callFunction(55,this);return false;"><span
                                                                    class="cke_button_icon cke_button__bold_icon"
                                                                    style="background-image:url('https://cdn.ckeditor.com/4.6.2/standard/plugins/icons.png?t=H0CG');background-position:0 -24px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_35_label"
                                                                    class="cke_button_label cke_button__bold_label"
                                                                    aria-hidden="false">Bold</span><span
                                                                    id="cke_35_description" class="cke_button_label"
                                                                    aria-hidden="false">Keyboard shortcut
                                                                    Ctrl+B</span></a><a id="cke_36"
                                                                class="cke_button cke_button__italic cke_button_off"
                                                                href="javascript:void('Italic')"
                                                                title="Italic (Ctrl+I)" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_36_label"
                                                                aria-describedby="cke_36_description"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(56,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(57,event);"
                                                                onclick="CKEDITOR.tools.callFunction(58,this);return false;"><span
                                                                    class="cke_button_icon cke_button__italic_icon"
                                                                    style="background-image:url('https://cdn.ckeditor.com/4.6.2/standard/plugins/icons.png?t=H0CG');background-position:0 -48px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_36_label"
                                                                    class="cke_button_label cke_button__italic_label"
                                                                    aria-hidden="false">Italic</span><span
                                                                    id="cke_36_description" class="cke_button_label"
                                                                    aria-hidden="false">Keyboard shortcut
                                                                    Ctrl+I</span></a><a id="cke_37"
                                                                class="cke_button cke_button__strike cke_button_off"
                                                                href="javascript:void('Strikethrough')"
                                                                title="Strikethrough" tabindex="-1" hidefocus="true"
                                                                role="button" aria-labelledby="cke_37_label"
                                                                aria-describedby="cke_37_description"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(59,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(60,event);"
                                                                onclick="CKEDITOR.tools.callFunction(61,this);return false;"><span
                                                                    class="cke_button_icon cke_button__strike_icon"
                                                                    style="background-image:url('https://cdn.ckeditor.com/4.6.2/standard/plugins/icons.png?t=H0CG');background-position:0 -72px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_37_label"
                                                                    class="cke_button_label cke_button__strike_label"
                                                                    aria-hidden="false">Strikethrough</span><span
                                                                    id="cke_37_description" class="cke_button_label"
                                                                    aria-hidden="false"></span></a><span
                                                                class="cke_toolbar_separator"
                                                                role="separator"></span><a id="cke_38"
                                                                class="cke_button cke_button__removeformat cke_button_off"
                                                                href="javascript:void('Remove Format')"
                                                                title="Remove Format" tabindex="-1" hidefocus="true"
                                                                role="button" aria-labelledby="cke_38_label"
                                                                aria-describedby="cke_38_description"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(62,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(63,event);"
                                                                onclick="CKEDITOR.tools.callFunction(64,this);return false;"><span
                                                                    class="cke_button_icon cke_button__removeformat_icon"
                                                                    style="background-image:url('https://cdn.ckeditor.com/4.6.2/standard/plugins/icons.png?t=H0CG');background-position:0 -792px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_38_label"
                                                                    class="cke_button_label cke_button__removeformat_label"
                                                                    aria-hidden="false">Remove Format</span><span
                                                                    id="cke_38_description" class="cke_button_label"
                                                                    aria-hidden="false"></span></a></span><span
                                                            class="cke_toolbar_end"></span></span><span id="cke_39"
                                                        class="cke_toolbar" aria-labelledby="cke_39_label"
                                                        role="toolbar"><span id="cke_39_label"
                                                            class="cke_voice_label">Paragraph</span><span
                                                            class="cke_toolbar_start"></span><span
                                                            class="cke_toolgroup" role="presentation"><a
                                                                id="cke_40"
                                                                class="cke_button cke_button__numberedlist cke_button_off"
                                                                href="javascript:void('Insert/Remove Numbered List')"
                                                                title="Insert/Remove Numbered List" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_40_label"
                                                                aria-describedby="cke_40_description"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(65,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(66,event);"
                                                                onclick="CKEDITOR.tools.callFunction(67,this);return false;"><span
                                                                    class="cke_button_icon cke_button__numberedlist_icon"
                                                                    style="background-image:url('https://cdn.ckeditor.com/4.6.2/standard/plugins/icons.png?t=H0CG');background-position:0 -648px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_40_label"
                                                                    class="cke_button_label cke_button__numberedlist_label"
                                                                    aria-hidden="false">Insert/Remove Numbered
                                                                    List</span><span id="cke_40_description"
                                                                    class="cke_button_label"
                                                                    aria-hidden="false"></span></a><a id="cke_41"
                                                                class="cke_button cke_button__bulletedlist cke_button_off"
                                                                href="javascript:void('Insert/Remove Bulleted List')"
                                                                title="Insert/Remove Bulleted List" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_41_label"
                                                                aria-describedby="cke_41_description"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(68,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(69,event);"
                                                                onclick="CKEDITOR.tools.callFunction(70,this);return false;"><span
                                                                    class="cke_button_icon cke_button__bulletedlist_icon"
                                                                    style="background-image:url('https://cdn.ckeditor.com/4.6.2/standard/plugins/icons.png?t=H0CG');background-position:0 -600px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_41_label"
                                                                    class="cke_button_label cke_button__bulletedlist_label"
                                                                    aria-hidden="false">Insert/Remove Bulleted
                                                                    List</span><span id="cke_41_description"
                                                                    class="cke_button_label"
                                                                    aria-hidden="false"></span></a><span
                                                                class="cke_toolbar_separator"
                                                                role="separator"></span><a id="cke_42"
                                                                class="cke_button cke_button__outdent cke_button_disabled "
                                                                href="javascript:void('Decrease Indent')"
                                                                title="Decrease Indent" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_42_label"
                                                                aria-describedby="cke_42_description"
                                                                aria-haspopup="false" aria-disabled="true"
                                                                onkeydown="return CKEDITOR.tools.callFunction(71,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(72,event);"
                                                                onclick="CKEDITOR.tools.callFunction(73,this);return false;"><span
                                                                    class="cke_button_icon cke_button__outdent_icon"
                                                                    style="background-image:url('https://cdn.ckeditor.com/4.6.2/standard/plugins/icons.png?t=H0CG');background-position:0 -456px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_42_label"
                                                                    class="cke_button_label cke_button__outdent_label"
                                                                    aria-hidden="false">Decrease Indent</span><span
                                                                    id="cke_42_description" class="cke_button_label"
                                                                    aria-hidden="false"></span></a><a id="cke_43"
                                                                class="cke_button cke_button__indent cke_button_disabled"
                                                                href="javascript:void('Increase Indent')"
                                                                title="Increase Indent" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_43_label"
                                                                aria-describedby="cke_43_description"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(74,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(75,event);"
                                                                onclick="CKEDITOR.tools.callFunction(76,this);return false;"
                                                                aria-disabled="true"><span
                                                                    class="cke_button_icon cke_button__indent_icon"
                                                                    style="background-image:url('https://cdn.ckeditor.com/4.6.2/standard/plugins/icons.png?t=H0CG');background-position:0 -408px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_43_label"
                                                                    class="cke_button_label cke_button__indent_label"
                                                                    aria-hidden="false">Increase Indent</span><span
                                                                    id="cke_43_description" class="cke_button_label"
                                                                    aria-hidden="false"></span></a><span
                                                                class="cke_toolbar_separator"
                                                                role="separator"></span><a id="cke_44"
                                                                class="cke_button cke_button__blockquote cke_button_off"
                                                                href="javascript:void('Block Quote')"
                                                                title="Block Quote" tabindex="-1" hidefocus="true"
                                                                role="button" aria-labelledby="cke_44_label"
                                                                aria-describedby="cke_44_description"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(77,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(78,event);"
                                                                onclick="CKEDITOR.tools.callFunction(79,this);return false;"><span
                                                                    class="cke_button_icon cke_button__blockquote_icon"
                                                                    style="background-image:url('https://cdn.ckeditor.com/4.6.2/standard/plugins/icons.png?t=H0CG');background-position:0 -168px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_44_label"
                                                                    class="cke_button_label cke_button__blockquote_label"
                                                                    aria-hidden="false">Block Quote</span><span
                                                                    id="cke_44_description" class="cke_button_label"
                                                                    aria-hidden="false"></span></a></span><span
                                                            class="cke_toolbar_end"></span></span><span id="cke_45"
                                                        class="cke_toolbar" aria-labelledby="cke_45_label"
                                                        role="toolbar"><span id="cke_45_label"
                                                            class="cke_voice_label">Styles</span><span
                                                            class="cke_toolbar_start"></span><span id="cke_9"
                                                            class="cke_combo cke_combo__styles cke_combo_off"
                                                            role="presentation"><span id="cke_9_label"
                                                                class="cke_combo_label">Styles</span><a
                                                                class="cke_combo_button" title="Formatting Styles"
                                                                tabindex="-1"
                                                                href="javascript:void('Formatting Styles')"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_9_label" aria-haspopup="true"
                                                                onkeydown="return CKEDITOR.tools.callFunction(81,event,this);"
                                                                onfocus="return CKEDITOR.tools.callFunction(82,event);"
                                                                onclick="CKEDITOR.tools.callFunction(80,this);return false;"><span
                                                                    id="cke_9_text"
                                                                    class="cke_combo_text cke_combo_inlinelabel">Styles</span><span
                                                                    class="cke_combo_open"><span
                                                                        class="cke_combo_arrow"></span></span></a></span><span
                                                            id="cke_10"
                                                            class="cke_combo cke_combo__format cke_combo_off"
                                                            role="presentation"><span id="cke_10_label"
                                                                class="cke_combo_label">Format</span><a
                                                                class="cke_combo_button" title="Paragraph Format"
                                                                tabindex="-1"
                                                                href="javascript:void('Paragraph Format')"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_10_label" aria-haspopup="true"
                                                                onkeydown="return CKEDITOR.tools.callFunction(84,event,this);"
                                                                onfocus="return CKEDITOR.tools.callFunction(85,event);"
                                                                onclick="CKEDITOR.tools.callFunction(83,this);return false;"><span
                                                                    id="cke_10_text"
                                                                    class="cke_combo_text">Normal</span><span
                                                                    class="cke_combo_open"><span
                                                                        class="cke_combo_arrow"></span></span></a></span><span
                                                            class="cke_toolbar_end"></span></span><span
                                                        id="cke_46" class="cke_toolbar cke_toolbar_last"
                                                        aria-labelledby="cke_46_label" role="toolbar"><span
                                                            id="cke_46_label"
                                                            class="cke_voice_label">about</span><span
                                                            class="cke_toolbar_start"></span><span
                                                            class="cke_toolgroup" role="presentation"><a
                                                                id="cke_47"
                                                                class="cke_button cke_button__about cke_button_off"
                                                                href="javascript:void('About CKEditor')"
                                                                title="About CKEditor" tabindex="-1"
                                                                hidefocus="true" role="button"
                                                                aria-labelledby="cke_47_label"
                                                                aria-describedby="cke_47_description"
                                                                aria-haspopup="false"
                                                                onkeydown="return CKEDITOR.tools.callFunction(86,event);"
                                                                onfocus="return CKEDITOR.tools.callFunction(87,event);"
                                                                onclick="CKEDITOR.tools.callFunction(88,this);return false;"><span
                                                                    class="cke_button_icon cke_button__about_icon"
                                                                    style="background-image:url('https://cdn.ckeditor.com/4.6.2/standard/plugins/icons.png?t=H0CG');background-position:0 0px;background-size:auto;">&nbsp;</span><span
                                                                    id="cke_47_label"
                                                                    class="cke_button_label cke_button__about_label"
                                                                    aria-hidden="false">About CKEditor</span><span
                                                                    id="cke_47_description" class="cke_button_label"
                                                                    aria-hidden="false"></span></a></span><span
                                                            class="cke_toolbar_end"></span></span></span></span>
                                            <div id="cke_1_contents" class="cke_contents cke_reset"
                                                role="presentation" style="height: 200px;"><span id="cke_51"
                                                    class="cke_voice_label">Press ALT 0 for help</span><iframe
                                                    src="" frameborder="0"
                                                    class="cke_wysiwyg_frame cke_reset"
                                                    style="width: 100%; height: 100%;"
                                                    title="Rich Text Editor, editor1" aria-describedby="cke_51"
                                                    tabindex="0" allowtransparency="true"></iframe></div><span
                                                id="cke_1_bottom" class="cke_bottom cke_reset_all"
                                                role="presentation" style="user-select: none;"><span
                                                    id="cke_1_resizer"
                                                    class="cke_resizer cke_resizer_vertical cke_resizer_ltr"
                                                    title="Resize"
                                                    onmousedown="CKEDITOR.tools.callFunction(0, event)">◢</span><span
                                                    id="cke_1_path_label" class="cke_voice_label">Elements
                                                    path</span><span id="cke_1_path" class="cke_path"
                                                    role="group" aria-labelledby="cke_1_path_label"><a
                                                        id="cke_elementspath_7_1" href="javascript:void('body')"
                                                        tabindex="-1" class="cke_path_item" title="body element"
                                                        hidefocus="true"
                                                        onkeydown="return CKEDITOR.tools.callFunction(90,1, event );"
                                                        onclick="CKEDITOR.tools.callFunction(89,1); return false;"
                                                        role="button" aria-label="body element">body</a><a
                                                        id="cke_elementspath_7_0" href="javascript:void('p')"
                                                        tabindex="-1" class="cke_path_item" title="p element"
                                                        hidefocus="true"
                                                        onkeydown="return CKEDITOR.tools.callFunction(90,0, event );"
                                                        onclick="CKEDITOR.tools.callFunction(89,0); return false;"
                                                        role="button" aria-label="p element">p</a><span
                                                        class="cke_path_empty">&nbsp;</span></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Ticket Replies</h3>
                            <div class="card-options"><span class="card-options-remove"
                                    data-toggle="card-remove"><i class="fe fe-x"></i></span>
                                <div class="item-action dropdown ml-2"><a href="fake_url"
                                        data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right"><a href="fake_url"
                                            class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View
                                            Details </a><a href="fake_url" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-share-alt"></i> Share </a><a
                                            href="fake_url" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                                        <div class="dropdown-divider"></div><a href="fake_url"
                                            class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy
                                            to</a><a href="fake_url" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-folder"></i> Move to</a><a
                                            href="fake_url" class="dropdown-item"><i
                                                class="dropdown-icon fa fa-edit"></i> Rename</a><a href="fake_url"
                                            class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="timeline_item "><img class="tl_avatar"
                                    src="../assets/images/xs/avatar1.jpg" alt="fake_url"><span><a
                                        href="fake_url">Elisse Joson</a> San Francisco, CA <small
                                        class="float-right text-right">20-April-2019 - Today</small></span>
                                <h6 class="font600">Hello, 'Im a single div responsive timeline without media Queries!
                                </h6>
                                <div class="msg">
                                    <p>I'm speaking with myself, number one, because I have a very good brain and I've
                                        said a lot of things. I write the best placeholder text, and I'm the biggest
                                        developer on the web card she has is the Lorem card.</p><a href="fake_url"
                                        class="mr-20 text-muted"><i class="fa fa-heart text-pink"></i> 12 Love</a><a
                                        class="text-muted" role="button" data-toggle="collapse"
                                        href="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample"><i class="fa fa-comments"></i> 1 Comment</a>
                                    <div class="collapse p-4 section-gray mt-2" id="collapseExample">
                                        <form class="well">
                                            <div class="form-group">
                                                <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                            </div><button class="btn btn-primary">Submit</button>
                                        </form>
                                        <ul class="recent_comments list-unstyled mt-4 mb-0">
                                            <li>
                                                <div class="avatar_img"><img class="rounded img-fluid"
                                                        src="../assets/images/xs/avatar4.jpg" alt="fake_url"></div>
                                                <div class="comment_body">
                                                    <h6>Donald Gardner <small class="float-right font-14">Just
                                                            now</small></h6>
                                                    <p>Lorem ipsum Veniam aliquip culpa laboris minim tempor</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline_item "><img class="tl_avatar"
                                    src="../assets/images/xs/avatar4.jpg" alt="fake_url"><span><a
                                        href="fake_url">Dessie Parks</a> Oakland, CA <small
                                        class="float-right text-right">19-April-2019 - Yesterday</small></span>
                                <h6 class="font600">Oeehhh, that's awesome.. Me too!</h6>
                                <div class="msg">
                                    <p>I'm speaking with myself, number one, because I have a very good brain and I've
                                        said a lot of things. on the web by far... While that's mock-ups and this is
                                        politics, are they really so different? I think the only card she has is the
                                        Lorem card.</p>
                                    <div class="timeline_img mb-20"><img class="width100"
                                            src="../assets/images/gallery/1.jpg" alt="Awesome"><img
                                            class="width100" src="../assets/images/gallery/2.jpg" alt="Awesome">
                                    </div><a href="fake_url" class="mr-20 text-muted"><i
                                            class="fa fa-heart text-pink"></i> 23 Love</a><a class="text-muted"
                                        role="button" data-toggle="collapse" href="#collapseExample1"
                                        aria-expanded="false" aria-controls="collapseExample1"><i
                                            class="fa fa-comments"></i> 2 Comment</a>
                                    <div class="collapse p-4 section-gray mt-2" id="collapseExample1">
                                        <form class="well">
                                            <div class="form-group">
                                                <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                            </div><button class="btn btn-primary">Submit</button>
                                        </form>
                                        <ul class="recent_comments list-unstyled mt-4 mb-0">
                                            <li>
                                                <div class="avatar_img"><img class="rounded img-fluid"
                                                        src="../assets/images/xs/avatar4.jpg" alt="fake_url"></div>
                                                <div class="comment_body">
                                                    <h6>Donald Gardner <small class="float-right font-14">Just
                                                            now</small></h6>
                                                    <p>Lorem ipsum Veniam aliquip culpa laboris minim tempor</p>
                                                    <div class="timeline_img mb-20"><img class="width150"
                                                            src="../assets/images/gallery/7.jpg" alt="Awesome"><img
                                                            class="width150" src="../assets/images/gallery/8.jpg"
                                                            alt="Awesome"></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="avatar_img"><img class="rounded img-fluid"
                                                        src="../assets/images/xs/avatar3.jpg" alt="fake_url"></div>
                                                <div class="comment_body">
                                                    <h5>Dessie Parks <small class="float-right font-14">1min
                                                            ago</small></h5>
                                                    <p>It is a long established fact that a reader will be distracted by
                                                        the readable content of a page when looking</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline_item "><img class="tl_avatar"
                                    src="../assets/images/xs/avatar7.jpg" alt="fake_url"><span><a
                                        href="fake_url">Rochelle Barton</a> San Francisco, CA <small
                                        class="float-right text-right">12-April-2019</small></span>
                                <h6 class="font600">An Engineer Explains Why You Should Always Order the Larger Pizza
                                </h6>
                                <div class="msg">
                                    <p>I'm speaking with myself, number one, because I have a very good brain and I've
                                        said a lot of things. I write the best placeholder text, and I'm the biggest
                                        developer on the web by far... While that's mock-ups and this is politics, is
                                        the Lorem card.</p><a href="fake_url" class="mr-20 text-muted"><i
                                            class="fa fa-heart text-pink"></i> 7 Love</a><a class="text-muted"
                                        role="button" data-toggle="collapse" href="#collapseExample2"
                                        aria-expanded="false" aria-controls="collapseExample2"><i
                                            class="fa fa-comments"></i> 1 Comment</a>
                                    <div class="collapse p-4 section-gray mt-2" id="collapseExample2">
                                        <form class="well">
                                            <div class="form-group">
                                                <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                            </div><button class="btn btn-primary">Submit</button>
                                        </form>
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
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('cke_editor1');
</script>
<script>
    CKEDITOR.replace('cke_1_contents');
</script>




@include('layouts_user.footer')
