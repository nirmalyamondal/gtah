<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Cache-control" content="public">
  <title>Expert</title>
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
               <li><a href="{{ route('banner.show') }}"><span class="icon color6"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span> Page Banner</a></li>
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
                        <a href="{{ route('expert.show') }}"><span class="icon color6"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>View Expert Details</a>
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
                        Add Testimonial         
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
                        <form method="POST" action="{{ route('testimonial.create') }}/{{ $data['id'] }}" id="testimonial_form" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                           <div class="row">
                              <div id="form_error" class="form-group col-md-12 col-lg-12"></div>
                           </div>                                     
                           <div class="row">
                              <div class="form-group col-md-3 col-lg-3">                 
                                 <label for="name" class="form-label"> Author Name:</label>
                                 <input type="text" class="form-control" id="author" name="author" value="{{ $data['author'] }}">
                              </div>
                              <div class="form-group col-md-3 col-lg-3">
                                 <label for="country" class="form-label"> Country:</label>
                                 <select id="country" name="country">
                                    <option value=""> Select Country</option>
                                    @foreach ($data['countries'] as $val)
                                       <option value="{{ $val->id }}" {{ ($data['country'] == $val->id) ? 'selected' : '' }}>{{ $val->name }}</option>
                                    @endforeach
                                 </select>
                              </div>
                              <div class="form-group col-md-3 col-lg-3">
                                 <label for="country" class="form-label">Testimonial Category:</label>
                                 <select class="col-md-12" id="category" name="category" required="">
                                    <option value=""> Select Category</option>
                                    @foreach ($data['categories'] as $val)
                                       <option value="{{ $val->id }}" {{ ($data['category'] == $val->id) ? 'selected' : '' }}>{{ $val->slug }}</option>
                                    @endforeach
                                 </select>
                              </div>
                              <div class="form-group col-md-3 col-lg-3">
                                 <label for="country" class="form-label">Testimonial Sub Category:</label>
                                 <select class="col-md-12" id="sub_category" name="sub_category">
                                    <option value="0"> Select Sub Category</option>
                                    @php $records = App\Models\Category::where('pid',$data['category'])->get();@endphp

                                    @foreach ($records as $val)
                                       <option value="{{ $val->id }}" {{ ($data['sub_category'] == $val->id) ? 'selected' : '' }}>{{ $val->slug }}</option>
                                    @endforeach
                              
                                 </select>
                              </div>
                           </div>
                           <div class="row">
                              <div class="form-group col-md-3 col-lg-3">
                                 <label for="desc" class="form-label">  Description:</label>
                                 <textarea class="col-md-12" id="description" name="description" required="">{{ $data['description'] }}</textarea>
                              </div>
                              <div class="form-group col-md-3 col-lg-3">
                                 <label for="testimonial" class="form-label">Gender</label>
                                 <select type="text" class="form-control" id="gender" name="gender" required="">
                                    <option value="">Select Gender</option>
                                    <option value="Male" {{ ($data['gender'] == 'Male') ? 'selected' : '' }}>Male</option>
                                    <option value="Female" {{ ($data['gender'] == 'Female') ? 'selected' : '' }}>Female</option>
                                 </select>
                              </div>
                              <div class="form-group col-md-3 col-lg-3">
                                 <label for="pic" class="form-label">Upload Picture</label>
                                 <input type="file" class="col-md-12 btn dropdown-toggle selectpicker btn-primary" id="image" name="image">
                              </div>
                              <div class="form-group col-md-3 col-lg-3">                 
                                 <label for="image_alt" class="form-label"> Alt Tag:</label>
                                 <input type="text" class="form-control" id="image_alt" name="image_alt" value="{{ $data['image_alt'] }}">
                              </div>
                           </div>
                           <div class="row">
                              <div class="form-group col-md-3 col-lg-3">                 
                                 <label for="stream" class="form-label"> Stream:</label>
                                 <input type="text" class="form-control" id="stream" name="stream" value="{{ $data['stream'] }}" required="">
                              </div>
                              <div class="form-group col-md-3 col-lg-3">
                                 <label for="testimonial" class="form-label">Testimonial Status:</label>
                                 <select type="text" class="form-control" id="status" name="status" required="">
                                    <option value="1" {{ ($data['status'] == 1) ? 'selected' : '' }}>ACTIVE</option>
                                    <option value="0" {{ ($data['status'] == 0) ? 'selected' : '' }}>DEACTIVE</option>
                                 </select>
                              </div>
                              <div class="form-group col-md-3 col-lg-3">
                                 <label for="rating" class="form-label">Testimonial Rating:</label>
                                 <select class="form-control" id="rating" name="rating" required="">
                                    <option value=""> Select Testimonial Rating</option>
                                    <option value="1" {{ ($data['rating'] == '1') ? 'selected' : '' }}>1</option>
                                    <option value="2" {{ ($data['rating'] == '2') ? 'selected' : '' }}>2</option>
                                    <option value="3" {{ ($data['rating'] == '3') ? 'selected' : '' }}>3</option>
                                    <option value="4" {{ ($data['rating'] == '4') ? 'selected' : '' }}>4</option>
                                    <option value="5" {{ ($data['rating'] == '5') ? 'selected' : '' }}>5</option>
                                 </select>
                              </div>
                              <div class="form-group col-md-3 col-lg-3">                
                                 <input type="submit" style=" margin: 7%;" class="btn btn-default" value="Update">
                              </div>
                           </div>
                        </form>
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
         <script type="text/javascript">
            var baseUrl = "{{ url('') }}/";
         </script>
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
         <script src="{{ asset('public/js/datatables-min.js') }}" type="text/javascript"></script>
         <script src="{{ asset('public/js/datatable-function.js') }}" type="text/javascript"></script>
         <script src="{{ asset('public/js/data-table.js') }}" type="text/javascript"></script>
         <script src="{{ asset('public/js/inc_ajax_function.js') }}" type="text/javascript"></script>
         <script src="{{ asset('public/js/jquery.validate.js') }}" type="text/javascript"></script>
         <script src="{{ asset('public/js/module/testimonial.js') }}" type="text/javascript"></script>
   </footer>
</html>