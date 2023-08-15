         <div class="main_content_iner overly_inner ">
            <div class="container-fluid p-0 ">
               <div class="row">
                  <div class="col-12">
                     <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                        <div class="page_title_left">
                           <h3 class="f_s_25 f_w_700 dark_text">{{$heading}}</h3>
                           <ol class="breadcrumb page_bradcam mb-0">
                               
                              <?php foreach($links as $links_key => $link_value ){ ?>
                              <li class="breadcrumb-item"><a href="{{$admin_path}}<?php echo  @$link_value[1]; ?>"><?php echo  @$link_value[0]; ?></a></li>
                              <?php } ?>
                           </ol>
                        </div>
                        <div class="page_title_right">
                           <div class="page_date_button">
                              August 1, 2020 - August 31, 2020
                           </div>
                           <div class="dropdown common_bootstrap_button ">
                              <span class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                              action
                              </span>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                 <a class="dropdown-item f_s_16 f_w_600" href="{{$admin_path}}#"> Download</a>
                                 <a class="dropdown-item f_s_16 f_w_600" href="{{$admin_path}}#"> Print</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>