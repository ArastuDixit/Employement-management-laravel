@include('layouts_user.header')

<div class="page">
   <div>
      <div id="page_top" class="section-body  ">
         <div class="container-fluid">
            <div class="page-header">
               <div class="left">
                  <h1 class="page-title">Job Settings</h1>
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
   <div class="section-body  mt-3">
      <div class="container-fluid">
         <div class="row clearfix">
            <div class="col-lg-4 col-md-12">
               <ul class="list-group mb-3">
                  <li class="list-group-item">
                     <div class="media mb-0">
                        <img class="rounded mr-3" src="{{ asset('resources/user-assets/laravel/public/assets/images/xs/avatar4.jpg')}}" alt="fake_url">
                        <div class="media-body">
                           <h5 class="m-0">Deborah Cox</h5>
                           <p class="text-muted mb-0">Webdeveloper</p>
                        </div>
                     </div>
                  </li>
                  <li class="list-group-item">
                     <small class="text-muted">Title: </small>
                     <p class="mb-0">FaceBook Inc.</p>
                  </li>
                  <li class="list-group-item">
                     <small class="text-muted">Address: </small>
                     <p class="mb-0">44 Shirley Ave. IL 60185</p>
                  </li>
                  <li class="list-group-item">
                     <small class="text-muted">Date: </small>
                     <p class="mb-0">07 Feb 2019</p>
                  </li>
                  <li class="list-group-item">
                     <div>In Progress</div>
                     <div class="progress progress-xs mt-2">
                        <div class="progress-bar" data-transitiongoal="67" aria-valuenow="67" style="width: 67%;"></div>
                     </div>
                  </li>
                  <li class="list-group-item">
                     Notifications
                     <div class="float-right"><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked=""><span class="custom-control-label">&nbsp;</span></label></div>
                  </li>
                  <li class="list-group-item">
                     Messages
                     <div class="float-right"><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked=""><span class="custom-control-label">&nbsp;</span></label></div>
                  </li>
                  <li class="list-group-item">
                     Message email
                     <div class="float-right"><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1"><span class="custom-control-label">&nbsp;</span></label></div>
                  </li>
                  <li class="list-group-item">
                     Applicant email
                     <div class="float-right"><label class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked=""><span class="custom-control-label">&nbsp;</span></label></div>
                  </li>
               </ul>
            </div>
            <div class="col-lg-8 col-md-12">
               <div class="card">
                  <div class="card-header">
                     <h3 class="card-title">General Settings</h3>
                     <div class="card-options">
                        <span class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></span>
                        <div class="item-action dropdown ml-2">
                           <a href="fake_url" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                           <div class="dropdown-menu dropdown-menu-right">
                              <a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                              <div class="dropdown-divider"></div>
                              <a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="row clearfix">
                        <div class="col-lg-6 col-md-12">
                           <div class="form-group"><input type="text" class="form-control" placeholder="First Name"></div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                           <div class="form-group"><input type="text" class="form-control" placeholder="Last Name"></div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                           <div class="form-group">
                              <select class="form-control">
                                 <option value="true">-- Select Gander --</option>
                                 <option value="AF">Male</option>
                                 <option value="AX">Female</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                           <div class="form-group">
                              <div class="input-group">
                                 <div class="react-datepicker-wrapper">
                                    <div class="react-datepicker__input-container"><input type="text" class="form-control" value="06/14/2023"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                           <div class="form-group">
                              <div class="input-group">
                                 <div class="input-group-prepend"><span class="input-group-text"><i class="icon-globe"></i></span></div>
                                 <input type="text" class="form-control" placeholder="http://">
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                           <div class="form-group">
                              <select class="form-control">
                                 <option value="true">-- Select Country --</option>
                                 <option value="AF">Afghanistan</option>
                                 <option value="AX">Åland Islands</option>
                                 <option value="AL">Albania</option>
                                 <option value="DZ">Algeria</option>
                                 <option value="AS">American Samoa</option>
                                 <option value="AD">Andorra</option>
                                 <option value="AO">Angola</option>
                                 <option value="AI">Anguilla</option>
                                 <option value="AQ">Antarctica</option>
                                 <option value="AG">Antigua and Barbuda</option>
                                 <option value="AR">Argentina</option>
                                 <option value="AM">Armenia</option>
                                 <option value="AW">Aruba</option>
                                 <option value="AU">Australia</option>
                                 <option value="AT">Austria</option>
                                 <option value="AZ">Azerbaijan</option>
                                 <option value="BS">Bahamas</option>
                                 <option value="BH">Bahrain</option>
                                 <option value="BD">Bangladesh</option>
                                 <option value="BB">Barbados</option>
                                 <option value="BY">Belarus</option>
                                 <option value="BE">Belgium</option>
                                 <option value="BZ">Belize</option>
                                 <option value="BJ">Benin</option>
                                 <option value="BM">Bermuda</option>
                                 <option value="BT">Bhutan</option>
                                 <option value="BO">Bolivia, Plurinational State of</option>
                                 <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                 <option value="BA">Bosnia and Herzegovina</option>
                                 <option value="BW">Botswana</option>
                                 <option value="BV">Bouvet Island</option>
                                 <option value="BR">Brazil</option>
                                 <option value="IO">British Indian Ocean Territory</option>
                                 <option value="BN">Brunei Darussalam</option>
                                 <option value="BG">Bulgaria</option>
                                 <option value="BF">Burkina Faso</option>
                                 <option value="BI">Burundi</option>
                                 <option value="KH">Cambodia</option>
                                 <option value="CM">Cameroon</option>
                                 <option value="CA">Canada</option>
                                 <option value="CV">Cape Verde</option>
                                 <option value="KY">Cayman Islands</option>
                                 <option value="CF">Central African Republic</option>
                                 <option value="TD">Chad</option>
                                 <option value="CL">Chile</option>
                                 <option value="CN">China</option>
                                 <option value="CX">Christmas Island</option>
                                 <option value="CC">Cocos (Keeling) Islands</option>
                                 <option value="CO">Colombia</option>
                                 <option value="KM">Comoros</option>
                                 <option value="CG">Congo</option>
                                 <option value="CD">Congo, the Democratic Republic of the</option>
                                 <option value="CK">Cook Islands</option>
                                 <option value="CR">Costa Rica</option>
                                 <option value="CI">Côte d'Ivoire</option>
                                 <option value="HR">Croatia</option>
                                 <option value="CU">Cuba</option>
                                 <option value="CW">Curaçao</option>
                                 <option value="CY">Cyprus</option>
                                 <option value="CZ">Czech Republic</option>
                                 <option value="DK">Denmark</option>
                                 <option value="DJ">Djibouti</option>
                                 <option value="DM">Dominica</option>
                                 <option value="DO">Dominican Republic</option>
                                 <option value="EC">Ecuador</option>
                                 <option value="EG">Egypt</option>
                                 <option value="SV">El Salvador</option>
                                 <option value="GQ">Equatorial Guinea</option>
                                 <option value="ER">Eritrea</option>
                                 <option value="EE">Estonia</option>
                                 <option value="ET">Ethiopia</option>
                                 <option value="FK">Falkland Islands (Malvinas)</option>
                                 <option value="FO">Faroe Islands</option>
                                 <option value="FJ">Fiji</option>
                                 <option value="FI">Finland</option>
                                 <option value="FR">France</option>
                                 <option value="GF">French Guiana</option>
                                 <option value="PF">French Polynesia</option>
                                 <option value="TF">French Southern Territories</option>
                                 <option value="GA">Gabon</option>
                                 <option value="GM">Gambia</option>
                                 <option value="GE">Georgia</option>
                                 <option value="DE">Germany</option>
                                 <option value="GH">Ghana</option>
                                 <option value="GI">Gibraltar</option>
                                 <option value="GR">Greece</option>
                                 <option value="GL">Greenland</option>
                                 <option value="GD">Grenada</option>
                                 <option value="GP">Guadeloupe</option>
                                 <option value="GU">Guam</option>
                                 <option value="GT">Guatemala</option>
                                 <option value="GG">Guernsey</option>
                                 <option value="GN">Guinea</option>
                                 <option value="GW">Guinea-Bissau</option>
                                 <option value="GY">Guyana</option>
                                 <option value="HT">Haiti</option>
                                 <option value="HM">Heard Island and McDonald Islands</option>
                                 <option value="VA">Holy See (Vatican City State)</option>
                                 <option value="HN">Honduras</option>
                                 <option value="HK">Hong Kong</option>
                                 <option value="HU">Hungary</option>
                                 <option value="IS">Iceland</option>
                                 <option value="IN">India</option>
                                 <option value="ID">Indonesia</option>
                                 <option value="IR">Iran, Islamic Republic of</option>
                                 <option value="IQ">Iraq</option>
                                 <option value="IE">Ireland</option>
                                 <option value="IM">Isle of Man</option>
                                 <option value="IL">Israel</option>
                                 <option value="IT">Italy</option>
                                 <option value="JM">Jamaica</option>
                                 <option value="JP">Japan</option>
                                 <option value="JE">Jersey</option>
                                 <option value="JO">Jordan</option>
                                 <option value="KZ">Kazakhstan</option>
                                 <option value="KE">Kenya</option>
                                 <option value="KI">Kiribati</option>
                                 <option value="KP">Korea, Democratic People's Republic of</option>
                                 <option value="KR">Korea, Republic of</option>
                                 <option value="KW">Kuwait</option>
                                 <option value="KG">Kyrgyzstan</option>
                                 <option value="LA">Lao People's Democratic Republic</option>
                                 <option value="LV">Latvia</option>
                                 <option value="LB">Lebanon</option>
                                 <option value="LS">Lesotho</option>
                                 <option value="LR">Liberia</option>
                                 <option value="LY">Libya</option>
                                 <option value="LI">Liechtenstein</option>
                                 <option value="LT">Lithuania</option>
                                 <option value="LU">Luxembourg</option>
                                 <option value="MO">Macao</option>
                                 <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                 <option value="MG">Madagascar</option>
                                 <option value="MW">Malawi</option>
                                 <option value="MY">Malaysia</option>
                                 <option value="MV">Maldives</option>
                                 <option value="ML">Mali</option>
                                 <option value="MT">Malta</option>
                                 <option value="MH">Marshall Islands</option>
                                 <option value="MQ">Martinique</option>
                                 <option value="MR">Mauritania</option>
                                 <option value="MU">Mauritius</option>
                                 <option value="YT">Mayotte</option>
                                 <option value="MX">Mexico</option>
                                 <option value="FM">Micronesia, Federated States of</option>
                                 <option value="MD">Moldova, Republic of</option>
                                 <option value="MC">Monaco</option>
                                 <option value="MN">Mongolia</option>
                                 <option value="ME">Montenegro</option>
                                 <option value="MS">Montserrat</option>
                                 <option value="MA">Morocco</option>
                                 <option value="MZ">Mozambique</option>
                                 <option value="MM">Myanmar</option>
                                 <option value="NA">Namibia</option>
                                 <option value="NR">Nauru</option>
                                 <option value="NP">Nepal</option>
                                 <option value="NL">Netherlands</option>
                                 <option value="NC">New Caledonia</option>
                                 <option value="NZ">New Zealand</option>
                                 <option value="NI">Nicaragua</option>
                                 <option value="NE">Niger</option>
                                 <option value="NG">Nigeria</option>
                                 <option value="NU">Niue</option>
                                 <option value="NF">Norfolk Island</option>
                                 <option value="MP">Northern Mariana Islands</option>
                                 <option value="NO">Norway</option>
                                 <option value="OM">Oman</option>
                                 <option value="PK">Pakistan</option>
                                 <option value="PW">Palau</option>
                                 <option value="PS">Palestinian Territory, Occupied</option>
                                 <option value="PA">Panama</option>
                                 <option value="PG">Papua New Guinea</option>
                                 <option value="PY">Paraguay</option>
                                 <option value="PE">Peru</option>
                                 <option value="PH">Philippines</option>
                                 <option value="PN">Pitcairn</option>
                                 <option value="PL">Poland</option>
                                 <option value="PT">Portugal</option>
                                 <option value="PR">Puerto Rico</option>
                                 <option value="QA">Qatar</option>
                                 <option value="RE">Réunion</option>
                                 <option value="RO">Romania</option>
                                 <option value="RU">Russian Federation</option>
                                 <option value="RW">Rwanda</option>
                                 <option value="BL">Saint Barthélemy</option>
                                 <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                 <option value="KN">Saint Kitts and Nevis</option>
                                 <option value="LC">Saint Lucia</option>
                                 <option value="MF">Saint Martin (French part)</option>
                                 <option value="PM">Saint Pierre and Miquelon</option>
                                 <option value="VC">Saint Vincent and the Grenadines</option>
                                 <option value="WS">Samoa</option>
                                 <option value="SM">San Marino</option>
                                 <option value="ST">Sao Tome and Principe</option>
                                 <option value="SA">Saudi Arabia</option>
                                 <option value="SN">Senegal</option>
                                 <option value="RS">Serbia</option>
                                 <option value="SC">Seychelles</option>
                                 <option value="SL">Sierra Leone</option>
                                 <option value="SG">Singapore</option>
                                 <option value="SX">Sint Maarten (Dutch part)</option>
                                 <option value="SK">Slovakia</option>
                                 <option value="SI">Slovenia</option>
                                 <option value="SB">Solomon Islands</option>
                                 <option value="SO">Somalia</option>
                                 <option value="ZA">South Africa</option>
                                 <option value="GS">South Georgia and the South Sandwich Islands</option>
                                 <option value="SS">South Sudan</option>
                                 <option value="ES">Spain</option>
                                 <option value="LK">Sri Lanka</option>
                                 <option value="SD">Sudan</option>
                                 <option value="SR">Suriname</option>
                                 <option value="SJ">Svalbard and Jan Mayen</option>
                                 <option value="SZ">Swaziland</option>
                                 <option value="SE">Sweden</option>
                                 <option value="CH">Switzerland</option>
                                 <option value="SY">Syrian Arab Republic</option>
                                 <option value="TW">Taiwan, Province of China</option>
                                 <option value="TJ">Tajikistan</option>
                                 <option value="TZ">Tanzania, United Republic of</option>
                                 <option value="TH">Thailand</option>
                                 <option value="TL">Timor-Leste</option>
                                 <option value="TG">Togo</option>
                                 <option value="TK">Tokelau</option>
                                 <option value="TO">Tonga</option>
                                 <option value="TT">Trinidad and Tobago</option>
                                 <option value="TN">Tunisia</option>
                                 <option value="TR">Turkey</option>
                                 <option value="TM">Turkmenistan</option>
                                 <option value="TC">Turks and Caicos Islands</option>
                                 <option value="TV">Tuvalu</option>
                                 <option value="UG">Uganda</option>
                                 <option value="UA">Ukraine</option>
                                 <option value="AE">United Arab Emirates</option>
                                 <option value="GB">United Kingdom</option>
                                 <option value="US">United States</option>
                                 <option value="UM">United States Minor Outlying Islands</option>
                                 <option value="UY">Uruguay</option>
                                 <option value="UZ">Uzbekistan</option>
                                 <option value="VU">Vanuatu</option>
                                 <option value="VE">Venezuela, Bolivarian Republic of</option>
                                 <option value="VN">Viet Nam</option>
                                 <option value="VG">Virgin Islands, British</option>
                                 <option value="VI">Virgin Islands, U.S.</option>
                                 <option value="WF">Wallis and Futuna</option>
                                 <option value="EH">Western Sahara</option>
                                 <option value="YE">Yemen</option>
                                 <option value="ZM">Zambia</option>
                                 <option value="ZW">Zimbabwe</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                           <div class="form-group"><input type="text" class="form-control" placeholder="State/Province"></div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                           <div class="form-group"><input type="text" class="form-control" placeholder="City"></div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                           <div class="form-group"><textarea rows="4" type="text" class="form-control" placeholder="Address"></textarea></div>
                        </div>
                     </div>
                     <button type="button" class="btn btn-round btn-primary">Update</button> &nbsp;&nbsp;<button type="button" class="btn btn-round btn-default">Cancel</button>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header">
                     <h3 class="card-title">Account Data</h3>
                     <div class="card-options">
                        <span class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></span>
                        <div class="item-action dropdown ml-2">
                           <a href="fake_url" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                           <div class="dropdown-menu dropdown-menu-right">
                              <a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                              <div class="dropdown-divider"></div>
                              <a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a><a href="fake_url" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="row clearfix">
                        <div class="col-lg-4 col-md-12">
                           <div class="form-group"><input type="text" class="form-control" disabled="" placeholder="Username" value="louispierce"></div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                           <div class="form-group"><input type="email" class="form-control" placeholder="Email" value="louis.info@yourdomain.com"></div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                           <div class="form-group"><input type="text" class="form-control" placeholder="Phone Number"></div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                           <hr>
                           <h6>Change Password</h6>
                           <div class="form-group"><input type="password" class="form-control" placeholder="Current Password"></div>
                           <div class="form-group"><input type="password" class="form-control" placeholder="New Password"></div>
                           <div class="form-group"><input type="password" class="form-control" placeholder="Confirm New Password"></div>
                        </div>
                     </div>
                     <button type="button" class="btn btn-round btn-primary">Update</button> &nbsp;&nbsp;<button type="button" class="btn btn-round btn-default">Cancel</button>
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
