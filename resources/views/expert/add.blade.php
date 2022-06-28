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
                        Add Expert         
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
                        <form method="POST" action="{{ route('expert.create') }}" id="expert_form" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                           <div id="form_error" class="form-group col-md-12 col-lg-12"></div>
                        </div>
                        <div class="panel panel-default">
                           <div class="row">
                              <div class="col-md-6">
                                 <label for="name">Expert Name</label>
                                 <input type="text" id="name" class="form-control" name="name" placeholder="Enter name" value="" required="">
                              </div>
                              <div class="col-md-6">
                                 <label for="subject">Expert Subject</label>
                                 <div class="form-group">
                                    <input list="subject" class="form-control" name="subject" placeholder="Enter subject.." value="" required="">
                                    <datalist id="subject">
                                       <option value="Accounting"></option>
                                       <option value="Business Law"></option>
                                       <option value="Chemistry"></option>
                                       <option value="Civil Law"></option>
                                       <option value="Criminal Law"></option>
                                       <option value="Database"></option>
                                       <option value="Economics"></option>
                                       <option value="Electrical Engineering"></option>
                                       <option value="Engineering"></option>
                                       <option value="Finance"></option>
                                       <option value="Geography"></option>
                                       <option value="Healthcare"></option>
                                       <option value="HRM"></option>
                                       <option value="IT Write Up"></option>
                                       <option value="Management"></option>
                                       <option value="Maths"></option>
                                       <option value="Medical"></option>
                                       <option value="Migration Law"></option>
                                       <option value="Music"></option>
                                       <option value="Networking"></option>
                                       <option value="Pharmacy"></option>
                                       <option value="Physics"></option>
                                       <option value="Programming"></option>
                                       <option value="Project Management"></option>
                                       <option value="Psychology"></option>
                                       <option value="Statistics"></option>
                                       <option value="Supply Chain"></option>
                                       <option value="Tax"></option>
                                       <option value="Webpage Design"></option>
                                    </datalist>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <label for="rating">Select Rating</label>
                                 <div class="form-group">
                                    <select id="rating" name="rating" class="form-control" required="">
                                       <option value="">Select Rating</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <label for="finished">Order Finished</label>
                                 <div class="form-group">
                                    <input type="text" id="orderfinish" class="form-control" name="orderfinish" placeholder="Enter order finished.." value="" required="">
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <label for="progress">Order Progress</label>
                                 <div class="form-group">
                                    <input type="text" id="orderprogress" class="form-control" name="orderprogress" value="" placeholder="Enter order progress.." required="">
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <label for="country">Country</label>
                                 <div class="form-group">
                                    <input list="country" class="form-control" name="country" placeholder="Enter country.." value="" required="">
                                    <datalist id="country">
                                       <option value="Australia">Australia</option>
                                       <option value="Canada">Canada</option>
                                       <option value="Malaysia">Malaysia</option>
                                       <option value="New Zealand">New Zealand</option>
                                       <option value="Singapore">Singapore</option>
                                       <option value="United Arab Emirates">United Arab Emirates</option>
                                       <option value="United Kingdom">United Kingdom</option>
                                       <option value="United States">United States</option>
                                    </datalist>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <label for="desc">Description</label>
                                 <div class="form-group">
                                    <textarea cols="5" rows="5" class="form-control" name="description" placeholder="Type description here.." id="description" required=""></textarea>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <label for="desc">Expert Picture </label> 
                                 <div class="form-group">
                                    <input type="file" id="image" class=" form-control photo" name="image" placeholder="Upload Image">
                                    <input type="hidden" id="old_pic_name" class=" form-control photo" name="old_pic_name" value="<br />
                                       ">
                                 </div>
                                 <p style="font-size:15px;margin-top:5px;">Note:Only jpg, png, jpeg, gif type images allowed</p>
                              </div>
                              <div class="col-md-6">
                                 <label for="name">Alt Tag</label>
                                 <input type="text" id="imagealt" class="form-control" name="imagealt" placeholder="Enter Alt Tag" value="" required="">
                              </div>
                           </div>
                           <div class="row">
                              <div class="panel panel-default">
                                 <div class="panel-body">
                                    <div class="col-md-6">
                                       <label for="qualification">Expert Qualification</label>
                                       <div class="form-group">
                                          <input list="qualification" class="form-control" name="qualification" placeholder="Enter subject.." value="" required>
                                          <datalist id="qualification">
                                             <br>
                                          </datalist>
                                       </div>
                                    </div>
                                    <div class="col-md-6" id="related-question">
                                       &nbsp;
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <label for="qualification">Testimonials</label>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <label for="category" class="form-label">Category:</label>
                                 <select class="col-md-12" id="category" name="category" required="">
                                    <option value="0"> Select Category</option>
                                    @foreach ($data['categories'] as $val)
                                       <option value="{{ $val->id }}">{{ $val->slug }}</option>
                                    @endforeach
                                 </select>
                              </div>
                              <div class="col-md-6">
                                 <label for="Sub-Category" class="form-label">Sub-Category</label>
                                 <select class="col-md-12" id="sub_category" name="sub_category">
                                    <option value="0"> Select Sub Category</option>
                                 </select>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <label for="country" class="form-label">Country</label>
                                 <select id="countryt" name="countryt" class="col-md-12" >
                                    <option value="0"> -Select Country- </option>
                                    @foreach ($data['countries'] as $val)
                                       <option value="{{ $val->id }}">{{ $val->name }}</option>
                                    @endforeach
                                 </select>
                              </div>
                              <div class="col-md-2">
                                 &nbsp;
                              </div>
                              <div class="col-md-2">
                                 <button type="button" id="testimonials_filter" class="btn btn-default btn-block">Search &raquo;</button>
                              </div>
                              <div class="col-md-2">
                                 &nbsp;
                              </div>
                           </div>
                           <div class="row">
                              <div class="panel panel-default">
                                 <div class="panel-body">
                                    <div class="col-md-5">                                              
                                       <select name="from[]" id="testimonials" class="form-control" size="10" multiple="multiple">
                                          {!! $data['testimonials'] !!}
                                       </select>
                                    </div> 
                                    <div class="col-md-2">
                                       <br/>
                                       <button type="button" id="testimonials_undo" class="btn btn-danger btn-block">undo</button>
                                       <button type="button" id="testimonials_rightSelected" class="btn btn-default btn-block"><i class="glyphicon glyphicon-chevron-right"></i>&raquo;</button>
                                       <button type="button" id="testimonials_leftSelected" class="btn btn-default btn-block"><i class="glyphicon glyphicon-chevron-left"></i>&laquo;</button>
                                       <button type="button" id="testimonials_redo" class="btn btn-warning btn-block">redo</button>
                                    </div>
                                    <div class="col-md-5">
                                       <select name="to[]" id="testimonials_to" class="form-control" size="10" multiple="multiple"></select>
                                    </div>       
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <input type="submit" class=" btn btn-default pull-right" value="submit" id="addExpertBtn">
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
         <script src="{{ asset('public/js/application.js') }}" type="text/javascript"></script>
         <script src="{{ asset('public/js/bootstrape-min-1.js') }}" type="text/javascript"></script>
         <script src="{{ asset('public/js/plugins.js') }}" type="text/javascript"></script>
         <script src="{{ asset('public/js/datatables-min.js') }}" type="text/javascript"></script>
         <script src="{{ asset('public/js/datatable-function.js') }}" type="text/javascript"></script>
         <script src="{{ asset('public/js/data-table.js') }}" type="text/javascript"></script>
         <script src="{{ asset('public/js/inc_ajax_function.js') }}" type="text/javascript"></script>
         <script src="{{ asset('public/js/jquery.validate.js') }}" type="text/javascript"></script>
         <script src="{{ asset('public/js/multiselect.js') }}" type="text/javascript"></script>
         <script src="{{ asset('public/js/module/expert.js') }}" type="text/javascript"></script>        
   </footer>
</html>