<nav class="sidebar">
         <div class="logo d-flex justify-content-between">
            <a class="large_logo" href="{{$admin_path}}dashboard"><img src="{{$admin_asset_path}}img/logo.png" alt=""></a>
            <a class="small_logo" href="{{$admin_path}}dashboard"><img src="{{$admin_asset_path}}img/mini_logo.png" alt=""></a>
            <div class="sidebar_close_icon d-lg-none">
               <i class="ti-close"></i>
            </div>
         </div>
         <ul id="sidebar_menu">
            <li>
               <a href="{{$admin_path}}dashboard" aria-expanded="false">
                  <div class="nav_icon_small">
                     <img src="{{$admin_asset_path}}img/menu-icon/dashboard.svg" alt="">
                  </div>
                  <div class="nav_title">
                     <span>Analytic</span>
                  </div>
               </a>
            </li>

            


            <h4 class="menu-text"><span>CUSTOM</span> <i class="fas fa-ellipsis-h"></i> </h4>
            
            
            


            
            
            
            <li class="mm-active">
                
               <a class="has-arrow" href="#" aria-expanded="true">
                  <div class="nav_icon_small">
                     <img src="{{$admin_asset_path}}img/menu-icon/5.svg" alt="">
                  </div>
                  <div class="nav_title">
                     <span>Setting </span>
                  </div>
               </a>
               
               <ul class="mm-collapse mm-show" >
                  <li><a class="active" href="/admin/view/country">Country</a></li>
                  <li><a href="/admin/view/roles">Roles</a></li>
                  <li><a href="/admin/view/skill">Skills</a></li>
                  <li><a href="/admin/view/documents">Documents</a></li>

                  

               </ul>
            </li>

{{--            
            <h4 class="menu-text"><span>LAYOUT</span> <i class="fas fa-ellipsis-h"></i> </h4>
            <li class="">
               <a class="has-arrow" href="{{$admin_path}}dashboard#" aria-expanded="false">
                  <div class="nav_icon_small">
                     <img src="{{$admin_asset_path}}img/menu-icon/4.svg" alt="">
                  </div>
                  <div class="nav_title">
                     <span>Themes</span>
                  </div>
               </a>
               <ul>
                  <li><a href="{{$admin_path}}dark_sidebar.html">Dark Sidebar</a></li>
                  <li><a href="{{$admin_path}}light_sidebar.html">light Sidebar</a></li>
               </ul>
            </li>
            <li class="">
               <a class="has-arrow" href="{{$admin_path}}dashboard#" aria-expanded="false">
                  <div class="nav_icon_small">
                     <img src="{{$admin_asset_path}}img/menu-icon/16.svg" alt="">
                  </div>
                  <div class="nav_title">
                     <span>General</span>
                  </div>
               </a>
               <ul>
                  <li><a href="{{$admin_path}}Minimized_Aside.html">Minimized Aside</a></li>
                  <li><a href="{{$admin_path}}empty_page.html">Empty page</a></li>
                  <li><a href="{{$admin_path}}fixed_footer.html">Fixed Footer</a></li>
               </ul>
            </li>
            <li>
               <a href="{{$admin_path}}Builder.html" aria-expanded="false">
                  <div class="nav_icon_small">
                     <img src="{{$admin_asset_path}}img/menu-icon/2.svg" alt="">
                  </div>
                  <div class="nav_title">
                     <span>Builder </span>
                  </div>
               </a>
            </li>
            <h4 class="menu-text"><span>Elements</span> <i class="fas fa-ellipsis-h"></i> </h4>
            <li class="">
               <a href="{{$admin_path}}invoice.html" aria-expanded="false">
                  <div class="nav_icon_small">
                     <img src="{{$admin_asset_path}}img/menu-icon/6.svg" alt="">
                  </div>
                  <div class="nav_title">
                     <span>Invoice</span>
                  </div>
               </a>
            </li>
            <li class="">
               <a class="has-arrow" href="{{$admin_path}}dashboard#" aria-expanded="false">
                  <div class="nav_icon_small">
                     <img src="{{$admin_asset_path}}img/menu-icon/4.svg" alt="">
                  </div>
                  <div class="nav_title">
                     <span>forms</span>
                  </div>
               </a>
               <ul>
                  <li><a href="{{$admin_path}}Basic_Elements.html">Basic Elements</a></li>
                  <li><a href="{{$admin_path}}Groups.html">Groups</a></li>
                  <li><a href="{{$admin_path}}Max_Length.html">Max Length</a></li>
                  <li><a href="{{$admin_path}}Layouts.html">Layouts</a></li>
               </ul>
            </li>
            <li class="">
               <a href="{{$admin_path}}Board.html" aria-expanded="false">
                  <div class="nav_icon_small">
                     <img src="{{$admin_asset_path}}img/menu-icon/5.svg" alt="">
                  </div>
                  <div class="nav_title">
                     <span>Board</span>
                  </div>
               </a>
            </li>
            <li class="">
               <a href="{{$admin_path}}calender.html" aria-expanded="false">
                  <div class="nav_icon_small">
                     <img src="{{$admin_asset_path}}img/menu-icon/7.svg" alt="">
                  </div>
                  <div class="nav_title">
                     <span>Calander</span>
                  </div>
               </a>
            </li>
            <li class="">
               <a class="has-arrow" href="{{$admin_path}}dashboard#" aria-expanded="false">
                  <div class="nav_icon_small">
                     <img src="{{$admin_asset_path}}img/menu-icon/8.svg" alt="">
                  </div>
                  <div class="nav_title">
                     <span>Products</span>
                  </div>
               </a>
               <ul>
                  <li><a href="{{$admin_path}}Products.html">Products</a></li>
                  <li><a href="{{$admin_path}}Product_Details.html">Product Details</a></li>
                  <li><a href="{{$admin_path}}Cart.html">Cart</a></li>
                  <li><a href="{{$admin_path}}Checkout.html">Checkout</a></li>
               </ul>
            </li>
            <li class="">
               <a class="has-arrow" href="{{$admin_path}}dashboard#" aria-expanded="false">
                  <div class="nav_icon_small">
                     <img src="{{$admin_asset_path}}img/menu-icon/9.svg" alt="">
                  </div>
                  <div class="nav_title">
                     <span>Icons</span>
                  </div>
               </a>
               <ul>
                  <li><a href="{{$admin_path}}Fontawesome_Icon.html">Fontawesome Icon</a></li>
                  <li><a href="{{$admin_path}}themefy_icon.html">themefy icon</a></li>
               </ul>
            </li>
            <h4 class="menu-text"><span>Features</span> <i class="fas fa-ellipsis-h"></i> </h4>
            <li class="">
               <a class="has-arrow" href="{{$admin_path}}dashboard#" aria-expanded="false">
                  <div class="nav_icon_small">
                     <img src="{{$admin_asset_path}}img/menu-icon/8.svg" alt="">
                  </div>
                  <div class="nav_title">
                     <span>Animations</span>
                  </div>
               </a>
               <ul>
                  <li><a href="{{$admin_path}}wow_animation.html">Animate</a></li>
                  <li><a href="{{$admin_path}}Scroll_Reveal.html">Scroll Reveal</a></li>
                  <li><a href="{{$admin_path}}tilt.html">Tilt Animation</a></li>
               </ul>
            </li>
            <li class="">
               <a class="has-arrow" href="{{$admin_path}}dashboard#" aria-expanded="false">
                  <div class="nav_icon_small">
                     <img src="{{$admin_asset_path}}img/menu-icon/9.svg" alt="">
                  </div>
                  <div class="nav_title">
                     <span>Components</span>
                  </div>
               </a>
               <ul>
                  <li><a href="{{$admin_path}}accordion.html">Accordions</a></li>
                  <li><a href="{{$admin_path}}Scrollable.html">Scrollable</a></li>
                  <li><a href="{{$admin_path}}notification.html">Notifications</a></li>
                  <li><a href="{{$admin_path}}carousel.html">Carousel</a></li>
                  <li><a href="{{$admin_path}}Pagination.html">Pagination</a></li>
               </ul>
            </li>
            <li class="">
               <a class="has-arrow" href="{{$admin_path}}dashboard#" aria-expanded="false">
                  <div class="nav_icon_small">
                     <img src="{{$admin_asset_path}}img/menu-icon/11.svg" alt="">
                  </div>
                  <div class="nav_title">
                     <span>Table</span>
                  </div>
               </a>
               <ul>
                  <li><a href="{{$admin_path}}data_table.html">Data Tables</a></li>
                  <li><a href="{{$admin_path}}bootstrap_table.html">Bootstrap</a></li>
               </ul>
            </li>
            <li class="">
               <a class="has-arrow" href="{{$admin_path}}dashboard#" aria-expanded="false">
                  <div class="nav_icon_small">
                     <img src="{{$admin_asset_path}}img/menu-icon/12.svg" alt="">
                  </div>
                  <div class="nav_title">
                     <span>Cards</span>
                  </div>
               </a>
               <ul>
                  <li><a href="{{$admin_path}}basic_card.html">Basic Card</a></li>
                  <li><a href="{{$admin_path}}theme_card.html">Theme Card</a></li>
                  <li><a href="{{$admin_path}}dargable_card.html">Draggable Card</a></li>
               </ul>
            </li>
            <li class="">
               <a class="has-arrow" href="{{$admin_path}}dashboard#" aria-expanded="false">
                  <div class="nav_icon_small">
                     <img src="{{$admin_asset_path}}img/menu-icon/12.svg" alt="">
                  </div>
                  <div class="nav_title">
                     <span>Charts</span>
                  </div>
               </a>
               <ul>
                  <li><a href="{{$admin_path}}chartjs.html">ChartJS</a></li>
                  <li><a href="{{$admin_path}}apex_chart.html">Apex Charts</a></li>
                  <li><a href="{{$admin_path}}chart_sparkline.html">Chart sparkline</a></li>
                  <li><a href="{{$admin_path}}am_chart.html">am-charts</a></li>
                  <li><a href="{{$admin_path}}nvd3_charts.html">nvd3 charts.</a></li>
               </ul>
            </li>
            <li class="">
               <a class="has-arrow" href="{{$admin_path}}dashboard#" aria-expanded="false">
                  <div class="nav_icon_small">
                     <img src="{{$admin_asset_path}}img/menu-icon/3.svg" alt="">
                  </div>
                  <div class="nav_title">
                     <span>UI Kits </span>
                  </div>
               </a>
               <ul>
                  <li><a href="{{$admin_path}}colors.html">colors</a></li>
                  <li><a href="{{$admin_path}}Alerts.html">Alerts</a></li>
                  <li><a href="{{$admin_path}}buttons.html">Buttons</a></li>
                  <li><a href="{{$admin_path}}modal.html">modal</a></li>
                  <li><a href="{{$admin_path}}dropdown.html">Droopdowns</a></li>
                  <li><a href="{{$admin_path}}Badges.html">Badges</a></li>
                  <li><a href="{{$admin_path}}Loading_Indicators.html">Loading Indicators</a></li>
                  <li><a href="{{$admin_path}}State_color.html">State color</a></li>
                  <li><a href="{{$admin_path}}typography.html">Typography</a></li>
                  <li><a href="{{$admin_path}}datepicker.html">Date Picker</a></li>
               </ul>
            </li>
            <li class="">
               <a class="has-arrow" href="{{$admin_path}}dashboard#" aria-expanded="false">
                  <div class="nav_icon_small">
                     <img src="{{$admin_asset_path}}img/menu-icon/14.svg" alt="">
                  </div>
                  <div class="nav_title">
                     <span>Widgets</span>
                  </div>
               </a>
               <ul>
                  <li><a href="{{$admin_path}}chart_box_1.html">Chart Boxes 1</a></li>
                  <li><a href="{{$admin_path}}profilebox.html">Profile Box</a></li>
               </ul>
            </li>
            <li class="">
               <a class="has-arrow" href="{{$admin_path}}dashboard#" aria-expanded="false">
                  <div class="nav_icon_small">
                     <img src="{{$admin_asset_path}}img/menu-icon/15.svg" alt="">
                  </div>
                  <div class="nav_title">
                     <span>Maps</span>
                  </div>
               </a>
               <ul>
                  <li><a href="{{$admin_path}}mapjs.html">Maps JS</a></li>
                  <li><a href="{{$admin_path}}vector_map.html">Vector Maps</a></li>
               </ul>
            </li>
            
            --}}
            
         </ul>
      </nav>