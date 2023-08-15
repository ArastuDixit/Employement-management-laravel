@include('layouts_user.header')


<div class="page">
   <div>
      <div id="page_top" class="section-body  ">
         <div class="container-fluid">
            <div class="page-header">
               <div class="left">
                  <h1 class="page-title">Calendar</h1>
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
   <div>
      <div class="section-body  mt-3">
         <div class="container-fluid">
            <div class="row clearfix row-deck">
               <div class="col-lg-4 col-md-12">
                  <div class="card">
                     <div class="card-body">
                        <h3 class="card-title">Events List</h3>
                        <div id="event-list" class="fc event_list">
                           <div class="fc-event bg-primary" data-class="bg-primary">My Event 1</div>
                           <div class="fc-event bg-info" data-class="bg-info">Birthday Party</div>
                           <div class="fc-event bg-success" data-class="bg-success">Meeting</div>
                           <div class="fc-event bg-warning" data-class="bg-warning">Conference</div>
                           <div class="fc-event bg-danger" data-class="bg-danger">My Event 5</div>
                        </div>
                        <div class="todo_list mt-4">
                           <h3 class="card-title">ToDo List <small>This Month task list</small></h3>
                           <ul class="list-unstyled mb-0">
                              <li><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked=""><span class="custom-control-label">Report Panel Usag</span></label></li>
                              <li><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1"><span class="custom-control-label">Report Panel Usag</span></label></li>
                              <li><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked=""><span class="custom-control-label">New logo design for Angular Admin</span></label></li>
                              <li><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1"><span class="custom-control-label">Design PSD files for Angular Admin</span></label></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-8 col-md-12">
                  <div class="card">
                     <div class="card-header bline">
                        <h3 class="card-title">Sara Hopkins</h3>
                        <div class="card-options"><a href="/#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a></div>
                     </div>
                     <div class="card-body">
                        <div id="example-component">
                           <div id="your-custom-ID" class="fc fc-unthemed fc-ltr">
                              <div class="fc-toolbar fc-header-toolbar">
                                 <div class="fc-left">
                                    <div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div>
                                    <button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="">today</button>
                                 </div>
                                 <div class="fc-right">
                                    <div class="fc-button-group"><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">month</button><button type="button" class="fc-basicWeek-button fc-button fc-state-default">week</button><button type="button" class="fc-basicDay-button fc-button fc-state-default fc-corner-right">day</button></div>
                                 </div>
                                 <div class="fc-center">
                                    <h2>June 2023</h2>
                                 </div>
                                 <div class="fc-clear"></div>
                              </div>
                              <div class="fc-view-container" style="">
                                 <div class="fc-view fc-month-view fc-basic-view" style="">
                                    <table>
                                       <thead class="fc-head">
                                          <tr>
                                             <td class="fc-head-container fc-widget-header">
                                                <div class="fc-row fc-widget-header">
                                                   <table>
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
                                                <div class="fc-scroller fc-day-grid-container" style="overflow: hidden; height: 391px;">
                                                   <div class="fc-day-grid fc-unselectable">
                                                      <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 65px;">
                                                         <div class="fc-bg">
                                                            <table>
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
                                                                     <td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2023-05-28"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-05-28&quot;,&quot;type&quot;:&quot;day&quot;}">28</a></td>
                                                                     <td class="fc-day-top fc-mon fc-other-month fc-past" data-date="2023-05-29"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-05-29&quot;,&quot;type&quot;:&quot;day&quot;}">29</a></td>
                                                                     <td class="fc-day-top fc-tue fc-other-month fc-past" data-date="2023-05-30"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-05-30&quot;,&quot;type&quot;:&quot;day&quot;}">30</a></td>
                                                                     <td class="fc-day-top fc-wed fc-other-month fc-past" data-date="2023-05-31"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-05-31&quot;,&quot;type&quot;:&quot;day&quot;}">31</a></td>
                                                                     <td class="fc-day-top fc-thu fc-past" data-date="2023-06-01"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-06-01&quot;,&quot;type&quot;:&quot;day&quot;}">1</a></td>
                                                                     <td class="fc-day-top fc-fri fc-past" data-date="2023-06-02"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-06-02&quot;,&quot;type&quot;:&quot;day&quot;}">2</a></td>
                                                                     <td class="fc-day-top fc-sat fc-past" data-date="2023-06-03"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-06-03&quot;,&quot;type&quot;:&quot;day&quot;}">3</a></td>
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
                                                      <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 65px;">
                                                         <div class="fc-bg">
                                                            <table>
                                                               <tbody>
                                                                  <tr>
                                                                     <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2023-06-04"></td>
                                                                     <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2023-06-05"></td>
                                                                     <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2023-06-06"></td>
                                                                     <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2023-06-07"></td>
                                                                     <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2023-06-08"></td>
                                                                     <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2023-06-09"></td>
                                                                     <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2023-06-10"></td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                         </div>
                                                         <div class="fc-content-skeleton">
                                                            <table>
                                                               <thead>
                                                                  <tr>
                                                                     <td class="fc-day-top fc-sun fc-past" data-date="2023-06-04"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-06-04&quot;,&quot;type&quot;:&quot;day&quot;}">4</a></td>
                                                                     <td class="fc-day-top fc-mon fc-past" data-date="2023-06-05"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-06-05&quot;,&quot;type&quot;:&quot;day&quot;}">5</a></td>
                                                                     <td class="fc-day-top fc-tue fc-past" data-date="2023-06-06"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-06-06&quot;,&quot;type&quot;:&quot;day&quot;}">6</a></td>
                                                                     <td class="fc-day-top fc-wed fc-past" data-date="2023-06-07"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-06-07&quot;,&quot;type&quot;:&quot;day&quot;}">7</a></td>
                                                                     <td class="fc-day-top fc-thu fc-past" data-date="2023-06-08"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-06-08&quot;,&quot;type&quot;:&quot;day&quot;}">8</a></td>
                                                                     <td class="fc-day-top fc-fri fc-past" data-date="2023-06-09"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-06-09&quot;,&quot;type&quot;:&quot;day&quot;}">9</a></td>
                                                                     <td class="fc-day-top fc-sat fc-past" data-date="2023-06-10"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-06-10&quot;,&quot;type&quot;:&quot;day&quot;}">10</a></td>
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
                                                      <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 65px;">
                                                         <div class="fc-bg">
                                                            <table>
                                                               <tbody>
                                                                  <tr>
                                                                     <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2023-06-11"></td>
                                                                     <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2023-06-12"></td>
                                                                     <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2023-06-13"></td>
                                                                     <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2023-06-14"></td>
                                                                     <td class="fc-day fc-widget-content fc-thu fc-today fc-state-highlight" data-date="2023-06-15"></td>
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
                                                                     <td class="fc-day-top fc-sun fc-past" data-date="2023-06-11"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-06-11&quot;,&quot;type&quot;:&quot;day&quot;}">11</a></td>
                                                                     <td class="fc-day-top fc-mon fc-past" data-date="2023-06-12"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-06-12&quot;,&quot;type&quot;:&quot;day&quot;}">12</a></td>
                                                                     <td class="fc-day-top fc-tue fc-past" data-date="2023-06-13"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-06-13&quot;,&quot;type&quot;:&quot;day&quot;}">13</a></td>
                                                                     <td class="fc-day-top fc-wed fc-past" data-date="2023-06-14"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-06-14&quot;,&quot;type&quot;:&quot;day&quot;}">14</a></td>
                                                                     <td class="fc-day-top fc-thu fc-today fc-state-highlight" data-date="2023-06-15"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-06-15&quot;,&quot;type&quot;:&quot;day&quot;}">15</a></td>
                                                                     <td class="fc-day-top fc-fri fc-future" data-date="2023-06-16"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-06-16&quot;,&quot;type&quot;:&quot;day&quot;}">16</a></td>
                                                                     <td class="fc-day-top fc-sat fc-future" data-date="2023-06-17"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-06-17&quot;,&quot;type&quot;:&quot;day&quot;}">17</a></td>
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
                                                      <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 65px;">
                                                         <div class="fc-bg">
                                                            <table>
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
                                                                     <td class="fc-day-top fc-sun fc-future" data-date="2023-06-18"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-06-18&quot;,&quot;type&quot;:&quot;day&quot;}">18</a></td>
                                                                     <td class="fc-day-top fc-mon fc-future" data-date="2023-06-19"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-06-19&quot;,&quot;type&quot;:&quot;day&quot;}">19</a></td>
                                                                     <td class="fc-day-top fc-tue fc-future" data-date="2023-06-20"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-06-20&quot;,&quot;type&quot;:&quot;day&quot;}">20</a></td>
                                                                     <td class="fc-day-top fc-wed fc-future" data-date="2023-06-21"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-06-21&quot;,&quot;type&quot;:&quot;day&quot;}">21</a></td>
                                                                     <td class="fc-day-top fc-thu fc-future" data-date="2023-06-22"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-06-22&quot;,&quot;type&quot;:&quot;day&quot;}">22</a></td>
                                                                     <td class="fc-day-top fc-fri fc-future" data-date="2023-06-23"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-06-23&quot;,&quot;type&quot;:&quot;day&quot;}">23</a></td>
                                                                     <td class="fc-day-top fc-sat fc-future" data-date="2023-06-24"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-06-24&quot;,&quot;type&quot;:&quot;day&quot;}">24</a></td>
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
                                                      <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 65px;">
                                                         <div class="fc-bg">
                                                            <table>
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
                                                                     <td class="fc-day-top fc-sun fc-future" data-date="2023-06-25"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-06-25&quot;,&quot;type&quot;:&quot;day&quot;}">25</a></td>
                                                                     <td class="fc-day-top fc-mon fc-future" data-date="2023-06-26"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-06-26&quot;,&quot;type&quot;:&quot;day&quot;}">26</a></td>
                                                                     <td class="fc-day-top fc-tue fc-future" data-date="2023-06-27"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-06-27&quot;,&quot;type&quot;:&quot;day&quot;}">27</a></td>
                                                                     <td class="fc-day-top fc-wed fc-future" data-date="2023-06-28"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-06-28&quot;,&quot;type&quot;:&quot;day&quot;}">28</a></td>
                                                                     <td class="fc-day-top fc-thu fc-future" data-date="2023-06-29"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-06-29&quot;,&quot;type&quot;:&quot;day&quot;}">29</a></td>
                                                                     <td class="fc-day-top fc-fri fc-future" data-date="2023-06-30"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-06-30&quot;,&quot;type&quot;:&quot;day&quot;}">30</a></td>
                                                                     <td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2023-07-01"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-07-01&quot;,&quot;type&quot;:&quot;day&quot;}">1</a></td>
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
                                                      <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 66px;">
                                                         <div class="fc-bg">
                                                            <table>
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
                                                                     <td class="fc-day-top fc-sun fc-other-month fc-future" data-date="2023-07-02"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-07-02&quot;,&quot;type&quot;:&quot;day&quot;}">2</a></td>
                                                                     <td class="fc-day-top fc-mon fc-other-month fc-future" data-date="2023-07-03"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-07-03&quot;,&quot;type&quot;:&quot;day&quot;}">3</a></td>
                                                                     <td class="fc-day-top fc-tue fc-other-month fc-future" data-date="2023-07-04"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-07-04&quot;,&quot;type&quot;:&quot;day&quot;}">4</a></td>
                                                                     <td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2023-07-05"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-07-05&quot;,&quot;type&quot;:&quot;day&quot;}">5</a></td>
                                                                     <td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2023-07-06"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-07-06&quot;,&quot;type&quot;:&quot;day&quot;}">6</a></td>
                                                                     <td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2023-07-07"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-07-07&quot;,&quot;type&quot;:&quot;day&quot;}">7</a></td>
                                                                     <td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2023-07-08"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2023-07-08&quot;,&quot;type&quot;:&quot;day&quot;}">8</a></td>
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
                     <div class="col-md-6"><label class="control-label">Event Name</label><input class="form-control" placeholder="Enter name" type="text" name="category-name"></div>
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
            <div class="modal-footer"><button type="button" class="btn btn-success save-event" data-dismiss="modal">Save</button><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></div>
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
                     <div class="form-group"><label>Event Name</label><input class="form-control" name="event-name" type="text"></div>
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
            <div class="modal-footer"><button class="btn save-btn btn-success">Save</button><button class="btn btn-secondary" data-dismiss="modal">Close</button></div>
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
                     <div class="form-group"><label>Event Name</label><input class="form-control" name="event-name" type="text"></div>
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
            <div class="modal-footer"><button class="btn mr-auto delete-btn btn-danger">Delete</button><button class="btn save-btn btn-success">Save</button><button class="btn btn-default" data-dismiss="modal">Cancel</button></div>
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
