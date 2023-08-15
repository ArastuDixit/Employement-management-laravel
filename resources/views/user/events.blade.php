@include('layouts_user.header')

<div class="page">
    <div id="page_top" class="section-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="left">
                    <h1 class="page-title">Events</h1>
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
                                                <img class="media-object " src="../assets/images/xs/avatar4.jpg" alt="">
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
                                                <img class="media-object " src="../assets/images/xs/avatar5.jpg" alt="">
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
                                                <img class="media-object " src="../assets/images/xs/avatar2.jpg" alt="">
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
                                                <img class="media-object " src="../assets/images/xs/avatar3.jpg" alt="">
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
    <div class="section-body mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bline">
                            <h3 class="card-title">Sara Hopkins</h3>
                            <div class="card-options">
                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="calendar" class="fc fc-unthemed fc-ltr">
                                <div class="fc-toolbar fc-header-toolbar">
                                    <div class="fc-left">
                                        <h2>June 2023</h2>
                                    </div>
                                    <div class="fc-right">
                                        <button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-active" data-toggle="fc-month-view">month</button>
                                        <button type="button" class="fc-agendaWeek-button fc-button fc-state-default fc-corner-left fc-corner-right" data-toggle="fc-agendaWeek-view">week</button>
                                        <button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-left fc-corner-right" data-toggle="fc-agendaDay-view">day</button>
                                        <button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left fc-corner-right" aria-label="prev" data-toggle="fc-prev"><span class="fc-icon fc-icon-left-single-arrow"></span></button>
                                        <button type="button" class="fc-next-button fc-button fc-state-default fc-corner-left fc-corner-right" aria-label="next" data-toggle="fc-next"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div>
                                    <div class="fc-center"></div>
                                    <div class="fc-clear"></div>
                                </div>
                                <div class="fc-view-container" style="">
                                    <div class="fc-view fc-month-view fc-basic-view" style="">
                                        <table class="">
                                            <thead class="fc-head">
                                                <tr>
                                                    <td class="fc-head-container fc-widget-header">
                                                        <div class="fc-row fc-widget-header">
                                                            <table class="">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="fc-day-header fc-widget-header fc-sun"><span>Sun</span></th>
                                                                        <th class="fc-day-header fc-widget-header fc-mon"><span>Mon</span></th>
                                                                        <th class="fc-day-header fc-widget-header fc-tue"><span>Tue</span></th>
                                                                        <th class="fc-day-header fc-widget-header fc-wed"><span>Wed</span></th>
                                                                        <th class="fc-day-header fc-widget-header fc-thu"><span>Thu</span></th>
                                                                        <th class="fc-day-header fc-widget-header fc-fri"><span>Fri</span></th>
                                                                        <th class="fc-day-header fc-widget-header fc-sat"><span>Sat</span></th>
                                                                    </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </thead>
                                            <tbody class="fc-body">
                                                <tr>
                                                    <td class="fc-widget-content">
                                                        <div class="fc-scroller fc-day-grid-container" style="overflow: hidden scroll; height: 270.5px;">
                                                            <div class="fc-day-grid fc-unselectable">
                                                                <div class="fc-row fc-week fc-widget-content fc-rigid" style="">
                                                                    <div class="fc-bg">
                                                                        <table class="">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2023-05-28"></td>
                                                                                    <td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2023-05-29"></td>
                                                                                    <td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2023-05-30"></td>
                                                                                    <td class="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2023-05-31"></td>
                                                                                    <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2023-06-01"></td>
                                                                                    <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2023-06-02"></td>
                                                                                    <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2023-06-03"></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="fc-content-skeleton">
                                                                        <table>
                                                                            <thead>
                                                                                <tr>
                                                                                    <td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2023-05-28" data-toggle="modal" data-target="#addDirectEvent"><span class="fc-day-number">28</span></td>
                                                                                    <td class="fc-day-top fc-mon fc-other-month fc-past" data-date="2023-05-29" data-toggle="modal" data-target="#addDirectEvent"><span class="fc-day-number">29</span></td>
                                                                                    <td class="fc-day-top fc-tue fc-other-month fc-past" data-date="2023-05-30" data-toggle="modal" data-target="#addDirectEvent"><span class="fc-day-number">30</span></td>
                                                                                    <td class="fc-day-top fc-wed fc-other-month fc-past" data-date="2023-05-31"><span class="fc-day-number">31</span></td>
                                                                                    <td class="fc-day-top fc-thu fc-past" data-date="2023-06-01" data-toggle="modal" data-target="#addDirectEvent"><span class="fc-day-number">1</span></td>
                                                                                    <td class="fc-day-top fc-fri fc-past" data-date="2023-06-02" data-toggle="modal" data-target="#addDirectEvent"><span class="fc-day-number">2</span></td>
                                                                                    <td class="fc-day-top fc-sat fc-past" data-date="2023-06-03" data-toggle="modal" data-target="#addDirectEvent"><span class="fc-day-number">3</span></td>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-info fc-draggable fc-resizable" data-toggle="modal" data-target="#eventEditModal">
                                                                                            <div class="fc-content"> <span class="fc-title">Birthday Party</span></div>
                                                                                            <div class="fc-resizer fc-end-resizer"></div>
                                                                                        </a></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="fc-row fc-week fc-widget-content fc-rigid" style="">
                                                                    <div class="fc-bg">
                                                                        <table class="">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2023-06-04"></td>
                                                                                    <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2023-06-05"></td>
                                                                                    <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2023-06-06"></td>
                                                                                    <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2023-06-07"></td>
                                                                                    <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2023-06-08"></td>
                                                                                    <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2023-06-09"></td>
                                                                                    <td class="fc-day fc-widget-content fc-sat fc-today " data-date="2023-06-10"></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="fc-content-skeleton">
                                                                        <table>
                                                                            <thead>
                                                                                <tr>
                                                                                    <td class="fc-day-top fc-sun fc-past" data-date="2023-06-04"><span class="fc-day-number" data-toggle="modal" data-target="#addDirectEvent">4</span></td>
                                                                                    <td class="fc-day-top fc-mon fc-past" data-date="2023-06-05"><span class="fc-day-number" data-toggle="modal" data-target="#addDirectEvent">5</span></td>
                                                                                    <td class="fc-day-top fc-tue fc-past" data-date="2023-06-06"><span class="fc-day-number" data-toggle="modal" data-target="#addDirectEvent">6</span></td>
                                                                                    <td class="fc-day-top fc-wed fc-past" data-date="2023-06-07"><span class="fc-day-number" data-toggle="modal" data-target="#addDirectEvent">7</span></td>
                                                                                    <td class="fc-day-top fc-thu fc-past" data-date="2023-06-08"><span class="fc-day-number" data-toggle="modal" data-target="#addDirectEvent">8</span></td>
                                                                                    <td class="fc-day-top fc-fri fc-past" data-date="2023-06-09"><span class="fc-day-number" data-toggle="modal" data-target="#addDirectEvent">9</span></td>
                                                                                    <td class="fc-day-top fc-sat fc-today " data-date="2023-06-10"><span class="fc-day-number" data-toggle="modal" data-target="#addDirectEvent">10</span></td>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td rowspan="2"></td>
                                                                                    <td class="fc-event-container" rowspan="2"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-warning fc-draggable fc-resizable" data-toggle="modal" data-target="#eventEditModal">
                                                                                            <div class="fc-content"> <span class="fc-title">Conference</span></div>
                                                                                            <div class="fc-resizer fc-end-resizer"></div>
                                                                                        </a></td>
                                                                                    <td rowspan="2"></td>
                                                                                    <td rowspan="2"></td>
                                                                                    <td rowspan="2"></td>
                                                                                    <td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-success fc-draggable" data-toggle="modal" data-target="#eventEditModal">
                                                                                            <div class="fc-content"><span class="fc-time">12:30p</span> <span class="fc-title">Meeting</span></div>
                                                                                        </a></td>
                                                                                    <td rowspan="2"></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-info fc-draggable" data-toggle="modal" data-target="#eventEditModal">
                                                                                            <div class="fc-content"><span class="fc-time">6:30p</span> <span class="fc-title">Meeting</span></div>
                                                                                        </a></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="fc-row fc-week fc-widget-content fc-rigid" style="">
                                                                    <div class="fc-bg">
                                                                        <table class="">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="fc-day fc-widget-content fc-sun fc-future" data-date="2023-06-11"></td>
                                                                                    <td class="fc-day fc-widget-content fc-mon fc-future" data-date="2023-06-12"></td>
                                                                                    <td class="fc-day fc-widget-content fc-tue fc-future" data-date="2023-06-13"></td>
                                                                                    <td class="fc-day fc-widget-content fc-wed fc-future" data-date="2023-06-14"></td>
                                                                                    <td class="fc-day fc-widget-content fc-thu fc-future" data-date="2023-06-15"></td>
                                                                                    <td class="fc-day fc-widget-content fc-fri fc-future" data-date="2023-06-16"></td>
                                                                                    <td class="fc-day fc-widget-content fc-sat fc-future" data-date="2023-06-17"></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="fc-content-skeleton">
                                                                        <table>
                                                                            <thead>
                                                                                <tr>
                                                                                    <td class="fc-day-top fc-sun fc-future" data-date="2023-06-11"><span class="fc-day-number" data-toggle="modal" data-target="#addDirectEvent">11</span></td>
                                                                                    <td class="fc-day-top fc-mon fc-future" data-date="2023-06-12"><span class="fc-day-number" data-toggle="modal" data-target="#addDirectEvent">12</span></td>
                                                                                    <td class="fc-day-top fc-tue fc-future" data-date="2023-06-13"><span class="fc-day-number" data-toggle="modal" data-target="#addDirectEvent">13</span></td>
                                                                                    <td class="fc-day-top fc-wed fc-future" data-date="2023-06-14"><span class="fc-day-number" data-toggle="modal" data-target="#addDirectEvent">14</span></td>
                                                                                    <td class="fc-day-top fc-thu fc-future" data-date="2023-06-15"><span class="fc-day-number" data-toggle="modal" data-target="#addDirectEvent">15</span></td>
                                                                                    <td class="fc-day-top fc-fri fc-future" data-date="2023-06-16"><span class="fc-day-number" data-toggle="modal" data-target="#addDirectEvent">16</span></td>
                                                                                    <td class="fc-day-top fc-sat fc-future" data-date="2023-06-17"><span class="fc-day-number" data-toggle="modal" data-target="#addDirectEvent">17</span></td>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="fc-row fc-week fc-widget-content fc-rigid" style="">
                                                                    <div class="fc-bg">
                                                                        <table class="">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="fc-day fc-widget-content fc-sun fc-future" data-date="2023-06-18"></td>
                                                                                    <td class="fc-day fc-widget-content fc-mon fc-future" data-date="2023-06-19"></td>
                                                                                    <td class="fc-day fc-widget-content fc-tue fc-future" data-date="2023-06-20"></td>
                                                                                    <td class="fc-day fc-widget-content fc-wed fc-future" data-date="2023-06-21"></td>
                                                                                    <td class="fc-day fc-widget-content fc-thu fc-future" data-date="2023-06-22"></td>
                                                                                    <td class="fc-day fc-widget-content fc-fri fc-future" data-date="2023-06-23"></td>
                                                                                    <td class="fc-day fc-widget-content fc-sat fc-future" data-date="2023-06-24"></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="fc-content-skeleton">
                                                                        <table>
                                                                            <thead>
                                                                                <tr>
                                                                                    <td class="fc-day-top fc-sun fc-future" data-date="2023-06-18"><span class="fc-day-number" data-toggle="modal" data-target="#addDirectEvent">18</span></td>
                                                                                    <td class="fc-day-top fc-mon fc-future" data-date="2023-06-19"><span class="fc-day-number" data-toggle="modal" data-target="#addDirectEvent">19</span></td>
                                                                                    <td class="fc-day-top fc-tue fc-future" data-date="2023-06-20"><span class="fc-day-number" data-toggle="modal" data-target="#addDirectEvent">20</span></td>
                                                                                    <td class="fc-day-top fc-wed fc-future" data-date="2023-06-21"><span class="fc-day-number" data-toggle="modal" data-target="#addDirectEvent">21</span></td>
                                                                                    <td class="fc-day-top fc-thu fc-future" data-date="2023-06-22"><span class="fc-day-number" data-toggle="modal" data-target="#addDirectEvent">22</span></td>
                                                                                    <td class="fc-day-top fc-fri fc-future" data-date="2023-06-23"><span class="fc-day-number" data-toggle="modal" data-target="#addDirectEvent">23</span></td>
                                                                                    <td class="fc-day-top fc-sat fc-future" data-date="2023-06-24"><span class="fc-day-number" data-toggle="modal" data-target="#addDirectEvent">24</span></td>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="fc-row fc-week fc-widget-content fc-rigid" style="">
                                                                    <div class="fc-bg">
                                                                        <table class="">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="fc-day fc-widget-content fc-sun fc-future" data-date="2023-06-25"></td>
                                                                                    <td class="fc-day fc-widget-content fc-mon fc-future" data-date="2023-06-26"></td>
                                                                                    <td class="fc-day fc-widget-content fc-tue fc-future" data-date="2023-06-27"></td>
                                                                                    <td class="fc-day fc-widget-content fc-wed fc-future" data-date="2023-06-28"></td>
                                                                                    <td class="fc-day fc-widget-content fc-thu fc-future" data-date="2023-06-29"></td>
                                                                                    <td class="fc-day fc-widget-content fc-fri fc-future" data-date="2023-06-30"></td>
                                                                                    <td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2023-07-01"></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="fc-content-skeleton">
                                                                        <table>
                                                                            <thead>
                                                                                <tr>
                                                                                    <td class="fc-day-top fc-sun fc-future" data-date="2023-06-25"><span class="fc-day-number" data-toggle="modal" data-target="#addDirectEvent">25</span></td>
                                                                                    <td class="fc-day-top fc-mon fc-future" data-date="2023-06-26"><span class="fc-day-number" data-toggle="modal" data-target="#addDirectEvent">26</span></td>
                                                                                    <td class="fc-day-top fc-tue fc-future" data-date="2023-06-27"><span class="fc-day-number" data-toggle="modal" data-target="#addDirectEvent">27</span></td>
                                                                                    <td class="fc-day-top fc-wed fc-future" data-date="2023-06-28"><span class="fc-day-number" data-toggle="modal" data-target="#addDirectEvent">28</span></td>
                                                                                    <td class="fc-day-top fc-thu fc-future" data-date="2023-06-29"><span class="fc-day-number" data-toggle="modal" data-target="#addDirectEvent">29</span></td>
                                                                                    <td class="fc-day-top fc-fri fc-future" data-date="2023-06-30"><span class="fc-day-number" data-toggle="modal" data-target="#addDirectEvent">30</span></td>
                                                                                    <td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2023-07-01"><span class="fc-day-number">1</span></td>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="fc-row fc-week fc-widget-content fc-rigid" style="">
                                                                    <div class="fc-bg">
                                                                        <table class="">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="fc-day fc-widget-content fc-sun fc-other-month fc-future" data-date="2023-07-02"></td>
                                                                                    <td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2023-07-03"></td>
                                                                                    <td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2023-07-04"></td>
                                                                                    <td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2023-07-05"></td>
                                                                                    <td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2023-07-06"></td>
                                                                                    <td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2023-07-07"></td>
                                                                                    <td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2023-07-08"></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="fc-content-skeleton">
                                                                        <table>
                                                                            <thead>
                                                                                <tr>
                                                                                    <td class="fc-day-top fc-sun fc-other-month fc-future" data-date="2023-07-02"><span class="fc-day-number" data-toggle="modal" data-target="#addDirectEvent">2</span></td>
                                                                                    <td class="fc-day-top fc-mon fc-other-month fc-future" data-date="2023-07-03"><span class="fc-day-number" data-toggle="modal" data-target="#addDirectEvent">3</span></td>
                                                                                    <td class="fc-day-top fc-tue fc-other-month fc-future" data-date="2023-07-04"><span class="fc-day-number" data-toggle="modal" data-target="#addDirectEvent">4</span></td>
                                                                                    <td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2023-07-05"><span class="fc-day-number" data-toggle="modal" data-target="#addDirectEvent">5</span></td>
                                                                                    <td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2023-07-06"><span class="fc-day-number" data-toggle="modal" data-target="#addDirectEvent">6</span></td>
                                                                                    <td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2023-07-07"><span class="fc-day-number" data-toggle="modal" data-target="#addDirectEvent">7</span></td>
                                                                                    <td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2023-07-08"><span class="fc-day-number" data-toggle="modal" data-target="#addDirectEvent">8</span></td>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
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
</div>
</div>

<div class="modal fade" id="addNewEvent" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>Add</strong> an event</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="control-label">Event Name</label>
                            <input class="form-control" placeholder="Enter name" type="text" name="category-name">
                        </div>
                        <div class="col-md-6">
                            <label class="control-label">Choose Event Color</label>
                            <select class="form-control" data-placeholder="Choose a color..." name="category-color">
                                <option value="success">Success</option>
                                <option value="danger">Danger</option>
                                <option value="info">Info</option>
                                <option value="primary">Primary</option>
                                <option value="warning">Warning</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success save-event" data-dismiss="modal">Save</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addDirectEvent" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Direct Event</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Event Name</label>
                            <input class="form-control" name="event-name" type="text" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Event Type</label>
                            <select name="event-bg" class="form-control">
                                <option value="success">Success</option>
                                <option value="danger">Danger</option>
                                <option value="info">Info</option>
                                <option value="primary">Primary</option>
                                <option value="warning">Warning</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn save-btn btn-success">Save</button>
                <button class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="eventEditModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Event</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Event Name</label>
                            <input class="form-control" name="event-name" type="text" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Event Type</label>
                            <select name="event-bg" class="form-control">
                                <option value="success">Success</option>
                                <option value="danger">Danger</option>
                                <option value="info">Info</option>
                                <option value="primary">Primary</option>
                                <option value="warning">Warning</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn mr-auto delete-btn btn-danger">Delete</button>
                <button class="btn save-btn btn-success">Save</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<script>
    
    $(document).ready(function() {
        // Open the "Add Event" modal when a date is clicked
        $('.calendar-date').on('click', function() {
            $('#addNewEvent').modal('show');
        });

        // Handle the "Save" button click event in the "Add Event" modal
        $('.save-event').on('click', function() {
            // Get the entered event name and color
            var eventName = $('[name="category-name"]').val();
            var eventColor = $('[name="category-color"]').val();

            // Do something with the event data (e.g., save it to a database)

            // Close the modal
            $('#addNewEvent').modal('hide');
        });

        // Handle the "Save" button click event in the "Add Direct Event" modal
        $('.save-btn').on('click', function() {
            // Get the entered event name and type
            var eventName = $('[name="event-name"]').val();
            var eventType = $('[name="event-bg"]').val();

            // Do something with the event data (e.g., save it to a database)

            // Close the modal
            $('#addDirectEvent').modal('hide');
        });

        // Handle the "Save" button click event in the "Edit Event" modal
        $('.save-btn').on('click', function() {
            // Get the entered event name and type
            var eventName = $('[name="event-name"]').val();
            var eventType = $('[name="event-bg"]').val();

            // Do something with the updated event data (e.g., save it to a database)

            // Close the modal
            $('#eventEditModal').modal('hide');
        });

        // Handle the "Delete" button click event in the "Edit Event" modal
        $('.delete-btn').on('click', function() {
            // Perform the delete operation (e.g., remove the event from the database)

            // Close the modal
            $('#eventEditModal').modal('hide');
        });
    });
</script>


@include('layouts_user.footer')