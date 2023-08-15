<?php include( app_path() . "/MyConstant/" . "MyConstant.php" );?>

@extends('layouts_admin.header')

@section('content')
      
@include('layouts_admin.navi')

@include('layouts_admin.header_part')

<?php $breadcrumbs = array("heading"=> "", "links" => array( array("Home","dashboard") , array("Account","account")));  ?>

@include('layouts_admin.breadcrumbs',$breadcrumbs)

               
               <div class="row ">
                   
                  <div class="col-md-12">
                      
                  <?php
                  
                      
                       include($xcrud_path_in_app_myconstant_file);
                       $xcrud = Xcrud::get_instance();

                       $xcrud->table('skills');

                        echo $xcrud->render();


                    ?>
                            
                  </div>
                  
                  
                  

 

               </div>
               

         
@include('layouts_admin.footer_part')

@include('layouts_admin.footer')
@endsection


