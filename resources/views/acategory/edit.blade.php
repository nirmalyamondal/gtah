<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Cache-control" content="public">
  <title>Category</title>
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <!-- <link rel="icon" type="image/png" sizes="16x16"
    href="https://www.gotoassignmenthelp.com/images/android-icon-16x16.png"> -->
  <style>    
    /* ================================================
   Google Web Fonts
   ================================================ */
   /* Montserrat */
   @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);
   /* Open Sans */
   @import url(https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,700,800,300);
   </style>
   <link href="{{ asset('public/css/bootstrape.css') }}" rel="stylesheet" />
   <!--link href="Css/font-awesome.min.css" rel="stylesheet" /-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="{{ asset('public/css/custom.css') }}" rel="stylesheet" />
   <link href="{{ asset('public/css/fonts.css') }}" rel="stylesheet" type="text/css" />
   <link href="{{ asset('public/css/root.css') }}" rel="stylesheet" />
   <link href="{{ asset('public/css/timepicker.css') }}" rel="stylesheet" />
   <link href="{{ asset('public/css/start-top.css') }}" rel="stylesheet" />
   <link href="{{ asset('public/css/navside.css') }}" rel="stylesheet" />
   <link href="{{ asset('public/css/start-top.css') }}" rel="stylesheet" />
   <link href="{{ asset('public/css/pranab.css') }}" rel="stylesheet">
   </head>
   <body>
      <!-- START TOP -->
      <style>
         .dropbtn {
         background-color: #399bff;
         color: white;
         padding: 16px;
         font-size: 16px;
         border: none;
         }
         .dropdown {
         position: relative;
         display: inline-block;
         }
         .dropdown-content {
         display: none;
         position: absolute;
         background-color: #f1f1f1;
         min-width: 160px;
         box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
         z-index: 1;
         }
         .dropdown-content a {
         color: black;
         padding: 12px 16px;
         text-decoration: none;
         display: block;
         }
         .sidebar-panel {
         background: none;
         margin: 0px 0px 0px 0px;
         border: none;
         border-bottom: 1px solid rgba(255, 255, 255, 0.1);
         padding: 15px 0px;
         }
         .dropdown-content a:hover {background-color: #ddd;}
         .dropdown:hover .dropdown-content {display: block;}
         .dropdown:hover .dropbtn {background-color: #399bff;}
      </style>
      <div id="top" class="clearfix">
         <!-- Start App Logo -->
         <div class="applogo">
            <a href="/">
            <img src="http://staging.gotoassignmenthelp.com/app-assets/images/logo/logo.png">
            </a>
         </div>
         <!-- End App Logo -->
         <!-- Start Sidebar Show Hide Button -->
         <a href="#" class="sidebar-open-button"><i class="fa fa-bars"></i></a>
         <a href="#" class="sidebar-open-button-mobile"><i class="fa fa-bars"></i></a>
         <!-- End Sidebar Show Hide Button -->
         <span style="margin-top: 20px!important;font-size: 17px;margin-left: 560px;"> </span>
         <div class="dropdown" style="float:right;">
            <button class="dropbtn">Action</button>
            <div class="dropdown-content">
               <a href="#">
                  <span class="icon color6">
                     <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
                  </span>
                  User Rights
               </a>
               <a href="#">
                  <span class="icon color6">
                     <!-- <i class="fa fa-lock"></i> -->
                  </span>
                  Change Password
               </a>
               <a href="/admin/logout">
                  <span class="icon color6">
                     <!-- <i class="fa fa-user"></i> -->
                  </span>
                  logout
               </a>
            </div>
         </div>
      </div>
      <!-- END TOP -->
      <div id="col-md-3" class="col-md-2">
         <!-- <nav class="navbar-default navbar-side" role="navigation"> -->
         <div class="sidebar clearfix">
            <ul class="sidebar-panel nav">
               <!-- <li><a href="#"><span class="icon color6"><i class="fa fa-file-text"></i></span>Inner Pages</a></li>
                  -->
               <li>
                  <a href="#"><span class="icon color6"><i class="fa fa-dashboard" aria-hidden="true"></i></span>Dashboard</a>
               </li>
               <li><a href="#"><span class="icon color6"><i class="fa fa-bars" aria-hidden="true"></i></span><span class="badge" style="color: #a7ff21;">Page Edit Request  ( 0 )</span></a></li>
               <li><a href="#"><span class="icon color6"><i class="fa fa-file-text"></i></span>All Pages</a></li>
               <li><a href="{{ route('category.create') }}"><span class="icon color6"><i class="fa fa-tasks" aria-hidden="true"></i></span>Category</a></li>
               <li><a href="{{ route('banner.create') }}"><span class="icon color6"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span> Page Banner</a></li>
               <li>
               </li>
               <li><a href="#"><span class="icon color6"><i class="fa fa-tasks" aria-hidden="true"></i></span>Testimonial</a></li>
               <li>
                  <a href="#"><span class="icon color6"><i class="fa fa-trash" aria-hidden="true"></i></span>Trash Page</a>
               </li>
               <li>
                  <a href="#"><span class="icon color6"><i class="fa fa-bars"></i></span>Question &amp; Free Sample<span class="caret"></span></a>
                  <ul>
                     <li>
                        <a href="#"><span class="icon color6"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>Add Category</a>
                     </li>
                     <li>
                        <a href="#"><span class="icon color6"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>View All Category</a>
                     </li>
                     <li>
                        <a href="#"><span class="icon color6"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>Add Question</a>
                     </li>
                     <li>
                        <a href="#"><span class="icon color6"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>View Question Details</a>
                     </li>
                  </ul>
               </li>
               <li>
                  <a href="#"><span class="icon color6"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>Home Page Content Change</a>
               </li>
               <li>
                  <a href="#"><span class="icon color6"><i class="fa fa-bars"></i></span>Experts on site<span class="caret"></span></a>
                  <ul>
                     <li>
                        <a href="{{ route('expert.create') }}"><span class="icon color6"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>Add Expert Details</a>
                     </li>
                     <li>
                        <a href="#"><span class="icon color6"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>View Expert Details</a>
                     </li>
                  </ul>
               </li>
            </ul>
         </div>
         <!--  </nav> -->
      </div>
      <!-- /. NAV SIDE  -->
      <style>
         .label{
         font-size: 20px;
         font-family: inherit;
         }
         .description{
         margin: 0px;
         height: 110px;
         resize:none;
         font-size: 20px;
         font-family: initial;
         }
         #submit{
         background-color: #4CAF50;
         font-size: 16px;
         color: white;
         padding: 3px 129px;
         margin: 8px 0;
         border: none;
         border-radius: 4px;
         cursor: pointer;
         margin-top: 28px;
         }
         .comment {
         background-color: rgba(237, 237, 221, 0.78);
         height: 250px;   
         overflow-y: scroll;
         }
         .detail {
         background:rgb(255, 253, 186);
         margin-top: 5%;
         margin-left: 12px;
         min-width: 88%;
         min-height: 72px;
         font-size: 20px;
         font-family: initial;
         border-radius: 8px;
         color: #080808;
         padding: 10px;
         box-shadow: 4px 23px 42px -20px rgba(0,0,0,0.54);
         }
         .card {
         box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
         transition: 0.3s;  
         border-radius: 5px;
         margin-bottom: 10px;
         }
         .card:hover {
         box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
         }
         #stickNotesDiv
         {
         height: 727px;
         }
         .show_page_number
         {
         border-radius: 263px;
         height: 148px;
         width: 138px;
         padding: 90px;
         margin: 0px;
         padding-left: 43px!important;
         color: white;
         background-color: #399bff;
         font-size: 50px;
         margin-top: 60px;
         margin-left: 100px;
         }
         .title{
         font-size: 28px!important;
         margin-left: -176px;
         }
         .blink{
         animation: blink 1s infinite;
         }
         .footer
         {
         margin-top: 400px;
         }
      </style>
      <script>
         function myFunction() {
              document.getElementById("addcomment").reset();
         }      
      </script>
      <!-- //////////////////////////////////////////////////////////////////////////// --> 
      <!-- START CONTENT -->
      <div class="content" style="min-height:900px;">
         <!-- //////////////////////////////////////////////////////////////////////////// --> 
         <!-- START CONTAINER -->
         <div class="container-widget">
            <!-- Start Top Stats -->
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-title">
                        Add Category         
                        <ul class="panel-tools">
                            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
                            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
                            <!--<li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>-->
                        </ul>
                     </div>
                     <div class="panel-body">
                       @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                {{ session('status') }}
                            </div>
                        @elseif(session('failed'))
                            <div class="alert alert-danger" role="alert">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                {{ session('failed') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('acategory.create') }}/{{$data['id']}}" id="acategory_form" novalidate>
                        @csrf
                        @method('PATCH')
                           <div class="row">
                              <div id="form_error" class="form-group col-md-12 col-lg-12"></div>
                           </div>
                           <div class="row">
                                <div class="form-group col-md-3 col-lg-3">
                                    <label for="name" class="form-label">Category Type:</label>
                                    <select class="dropdown-toggle selectpicker btn-option2" id="qid" name="qid" style="text-align:left;">
                                       {!! $data['qidSlect'] !!}
                                    </select>
                                 </div>
                                 <div class="form-group col-md-3 col-lg-3">
                                    <label for="name" class="form-label">Assignment Type:</label>
                                    <input type="text" id="name" name="name" value="{{$data['name']}}" required="required">
                                 </div>
                                 <div class="form-group col-md-3 col-lg-3">
                                    <label for="name" class="form-label">De-Active:</label>
                                    <input type="checkbox" id="status" name="status" {{$data['checked']}} >
                                 </div>
                                 <div class="form-group col-md-3 col-lg-3">
                                    <input type="submit" class="btn btn-default pull-left" id="updateAcategoryBtn" name="updateAcategoryBtn" value="Update">
                                 </div>
                            </div>
                        </form>  
                     </div>

                     <div class="panel-body" style="margin-top:50px;">
                        <table id="example0" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="example0_info">
                           <thead>
                              <tr role="row">
                                 <th id="default" class="sorting_desc" tabindex="0" aria-controls="example0" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending" aria-sort="descending" style="width: 131px;">Id</th>
                                 <th id="default" class="sorting" tabindex="0" aria-controls="example0" rowspan="1" colspan="1" aria-label="Menu Category Name: activate to sort column ascending" style="width: 141px;">Assignment Type</th>  
                                 <th id="default" class="sorting" tabindex="0" aria-controls="example0" rowspan="1" colspan="1" aria-label="Menu Category Name: activate to sort column ascending" style="width: 141px;">Category Name</th> 
                                 <th>Status</th>
                                 <th>&nbsp;</th>   
                                 <!--th>&nbsp;</th-->                           
                              </tr>
                           </thead>

                           <tbody>
                              @foreach ($data['catagories'] as $val)
                              <tr id="tr{{ $val['id'] }}" role="row" class="">
                                 <td>{{ $val['id'] }}</td>
                                 <td>{{ $val['name'] }}</td>
                                 <td>{{ $val['qid'] }}</td>
                                 <td>
                                    {{ $val['status'] }}
                                 </td>
                                 <td>
                                    <a href="{{ route('acategory.create') }}/{{ $val['id'] }}"><input type="button" class="btn btn-primary btnedit-delete" value="Edit" name="edit" id="edit"></a>
                                 </td>
                                 <!--td>
                                    <form method="POST" action="{{ route('acategory.create') }}/{{ $val['id'] }}" id="acategory_delete_form" enctype="multipart/form-data">
                                       @csrf
                                       @method('DELETE')
                                          <a href="#" onclick="return confirm('Are you sure you want to delete record?');"><input type="submit" class="btn btn-info btnedit-delete" value="Delete" name="delete" id="delete"></a>
                                    </form>
                                 </td-->
                              </tr>
                              @endforeach
                           </tbody>
                        </table>
                     </div>
                  </div>
               <!-- End Top Stats -->
               <!-- Start First Row -->
               <div class="footer">
                  <div class="row">
                     <div class="col-lg-12" style="text-align:center;">
                        Copyright  ©  GotoAssignmentHelp.com  2022                
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
   <footer>
        <script src="{{ asset('public/js/jquery.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/js/jquery-ui.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/js/timepicker.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/js/ckeditor.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/js/first-row.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/js/first-row-2.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/js/bootstrap-min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/js/custom.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/js/bootstrape-min-1.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/js/plugins.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/js/inc_ajax_function.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/js/jquery.validate.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/js/module/category.js') }}"></script>
   </footer>
</html>