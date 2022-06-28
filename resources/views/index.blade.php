<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="Cache-control" content="public">
      <title>Admin Dashboard</title>
      <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
      <link rel="icon" href="https://www.gotoassignmenthelp.com/images/favicon.ico" type="image/x-icon">
      <link rel="icon" type="image/png" sizes="16x16" href="https://www.gotoassignmenthelp.com/images/android-icon-16x16.png">
      <!-- BOOTSTRAP STYLES-->
      <link href="https://www.gotoassignmenthelp.com/admin/assets/css/bootstrap.css" rel="stylesheet">
      <!-- FONTAWESOME STYLES-->
      <link href="http://staging.gotoassignmenthelp.com/admin/assets/css/font-awesome.css" rel="stylesheet">
      <!-- CUSTOM STYLES-->
      <link href="https://www.gotoassignmenthelp.com/admin/assets/css/custom.css" rel="stylesheet">
      <!-- GOOGLE FONTS-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
      <script src="https://www.gotoassignmenthelp.com/admin/ckeditor/ckeditor.js"></script>
      <style>.cke{visibility:hidden;}</style>
      <link href="https://www.gotoassignmenthelp.com/admin/css/root.css" rel="stylesheet">
      <!-- ============================================================= -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
      <script src="//jonthornton.github.io/jquery-timepicker/jquery.timepicker.js"></script>
      <link rel="stylesheet" href="//jonthornton.github.io/jquery-timepicker/jquery.timepicker.css">
      <style type="text/css">
         #main-menu{
         height: 600px;
         overflow-y: scroll;
         overflow-x: hidden;
         }
      </style>
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
            <a href="http://staging.gotoassignmenthelp.com/">
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
               <a href="http://staging.gotoassignmenthelp.com/admin/add-user-rights.php">
                  <span class="icon color6">
                     <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
                  </span>
                  User Rights
               </a>
               <a href="http://staging.gotoassignmenthelp.com/admin/user-cms-change-password.php">
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
                  <a href="http://staging.gotoassignmenthelp.com/admin/user-cms-dashboard.php"><span class="icon color6"><i class="fa fa-dashboard" aria-hidden="true"></i></span>Dashboard</a>
               </li>
               <li><a href="http://staging.gotoassignmenthelp.com/admin/page-edit-request.php"><span class="icon color6"><i class="fa fa-bars" aria-hidden="true"></i></span><span class="badge" style="color: #a7ff21;">Page Edit Request  ( 0 )</span></a></li>
               <li><a href="http://staging.gotoassignmenthelp.com/admin/view-new-page.php"><span class="icon color6"><i class="fa fa-file-text"></i></span>All Pages</a></li>
               <li><a href="{{ route('category.create') }}"><span class="icon color6"><i class="fa fa-tasks" aria-hidden="true"></i></span>Category</a></li>
               <li><a href="http://staging.gotoassignmenthelp.com/admin/page-add-edit-banner.php"><span class="icon color6"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span> Page Banner</a></li>
               <li>
               </li>
               <li><a href="http://staging.gotoassignmenthelp.com/admin/add-testimonial.php"><span class="icon color6"><i class="fa fa-tasks" aria-hidden="true"></i></span>Testimonial</a></li>
               <li>
                  <a href="http://staging.gotoassignmenthelp.com/admin/trash-page-details.php"><span class="icon color6"><i class="fa fa-trash" aria-hidden="true"></i></span>Trash Page</a>
               </li>
               <li>
                  <a href="#"><span class="icon color6"><i class="fa fa-bars"></i></span>Question &amp; Free Sample<span class="caret"></span></a>
                  <ul>
                     <li>
                        <a href="http://staging.gotoassignmenthelp.com/admin/add-category-assignment-subject.php"><span class="icon color6"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>Add Category</a>
                     </li>
                     <li>
                        <a href="http://staging.gotoassignmenthelp.com/admin/view_question_assignment_subject_cat.php"><span class="icon color6"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>View All Category</a>
                     </li>
                     <li>
                        <a href="http://staging.gotoassignmenthelp.com/admin/add-question.php"><span class="icon color6"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>Add Question</a>
                     </li>
                     <li>
                        <a href="http://staging.gotoassignmenthelp.com/admin/view-question-bank.php?sort_element=q_id&amp;sort_type=desc"><span class="icon color6"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>View Question Details</a>
                     </li>
                  </ul>
               </li>
               <li>
                  <a href="http://staging.gotoassignmenthelp.com/admin/home-page-content-add-edit.php"><span class="icon color6"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>Home Page Content Change</a>
               </li>
               <li>
                  <a href="#"><span class="icon color6"><i class="fa fa-bars"></i></span>Experts on site<span class="caret"></span></a>
                  <ul>
                     <li>
                        <a href="http://staging.gotoassignmenthelp.com/admin/addexpert-detail.php"><span class="icon color6"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>Add Expert Details</a>
                     </li>
                     <li>
                        <a href="http://staging.gotoassignmenthelp.com/admin/view-expert-detail.php"><span class="icon color6"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>View Expert Details</a>
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
         <!-- Start Page Header -->
         <div class="page-header">
            <h1 class="title">Dashboard</h1>
            <ol class="breadcrumb">
               <li class="active"></li>
            </ol>
            <!-- Start Page Header Right Div -->
            <div class="right">
               <div class="btn-group" role="group" aria-label="...">
                  <a href="http://staging.gotoassignmenthelp.com/admin/create-new-page.php" class="btn btn-success">Create New Page</a>
                  <a href="http://staging.gotoassignmenthelp.com/admin/add-testimonial.php" class="btn btn-success">Add Testimonial</a>
                  <!-- <a href="http://staging.gotoassignmenthelp.com/admin/page-add-edit-sidebar.php" class="btn btn-success">Add Side Bar</a> -->
                  <a href="{{ route('category.create') }}" class="btn btn-success">Add Category</a>
                  <a href="http://staging.gotoassignmenthelp.com/admin/page-add-edit-banner.php" class="btn btn-success">Add Banner</a>        
               </div>
               <div class="btn-group" role="group" aria-label="...">
                  <a href="http://staging.gotoassignmenthelp.com/admin/view-new-page.php" class="btn btn-primary">All Pages</a>
                  <a href="" class="btn btn-light"><i class="fa fa-refresh"></i></a>
                  <!-- <a href="#" class="btn btn-light"><i class="fa fa-search"></i></a>
                     <a href="#" class="btn btn-light" id="topstats"><i class="fa fa-line-chart"></i></a> -->
               </div>
            </div>
            <!-- End Page Header Right Div -->
         </div>
         <!-- End Page Header -->
         <!-- //////////////////////////////////////////////////////////////////////////// --> 
         <!-- START CONTAINER -->
         <div class="container-widget">
            <!-- Start Top Stats -->
            <div class="col-md-12">
               <!-- sticky form  -->
               <div class="row">
                  <a href="http://staging.gotoassignmenthelp.com/admin/view-new-page.php?show=1">
                     <div class="col-md-1 card show_page_number">0</div>
                     <div class="col-md-1 title"><span>Published Pages</span></div>
                  </a>
                  <a href="http://staging.gotoassignmenthelp.com/admin/view-new-page.php?show=P">
                     <div class="col-md-1 card show_page_number">0</div>
                     <div class="col-md-1 title"><span>Publisher</span></div>
                  </a>
                  <a href="http://staging.gotoassignmenthelp.com/admin/view-new-page.php?show=E">
                     <div class="col-md-1 card show_page_number">0</div>
                     <div class="col-md-1 title"><span>Editor</span></div>
                  </a>
                  <a href="http://staging.gotoassignmenthelp.com/admin/view-new-page.php?show=all">
                     <div class="col-md-1 card show_page_number">0</div>
                     <div class="col-md-1 title"><span>Total Pages</span></div>
                  </a>
                  <a href="http://staging.gotoassignmenthelp.com/admin/notification.php" class="blink">
                     <div class="col-md-1 card show_page_number"><span class="chat-icon">0<i style="color:orange;" class="fa fa-comment "></i></span></div>
                     <div class="col-md-1 title"><span>Notification</span></div>
                  </a>
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
               <script>
                  // if (datefield.type!="date"){ 
                       jQuery(function($){ 
                           $('#deadline').datepicker({
                               dateFormat: 'dd-mm-yy',
                        numberOfMonths: 1,
                        minDate:0
                           });
                           $('#deadline').change(function()
                           {
                           function formatAMPM(date) {
                                                      var hours = date.getHours();
                                                      var minutes = date.getMinutes();
                                                      var ampm = hours >= 12 ? 'pm' : 'am';
                                                      hours = hours % 12;
                                                      hours = hours ? hours : 12; // the hour '0' should be '12'
                                                      minutes = minutes < 10 ? '0'+minutes : minutes;
                                                      var strTime = hours + ':' + minutes + '' + ampm;
                                                      return strTime;
                                                    }
                  
                            function toDate(dateStr) {
                            var parts = dateStr.split("-");
                            return new Date(parts[2], parts[1] - 1, parts[0]);
                                                      }
                            var date = $('#deadline').val();
                            var f = toDate(date);
                            //alert(f);
                            var hours = f.getHours();
                            var minutes = f.getMinutes();
                  
                          time_plus_12 = new Date(f.getTime()+0*3600*1000);
                          $('#deadlinetime').timepicker({
                              'step': 15,
                              'forceRoundTime': true,
                              'timeFormat': 'H:i',
                              'disableTimeRanges': [
                                  [0, formatAMPM(time_plus_12)]
                              ]
                          });
                  
                           $('#deadlinetime').timepicker('setTime', time_plus_12);
                           $('#deadlinetime').val('23:45');
                          })
                         }); 
                  // }
               </script> 
               <script>
                  // if (datefield.type!="date"){ 
                       jQuery(function($){ 
                  function ShowLocalDate(){
                    var dNow = new Date();
                    var localdate= (dNow.getDate() + '-' + parseInt(dNow.getMonth()+1)) + '-' + dNow.getFullYear() + ' ' + dNow.getHours() + ':' + parseInt(dNow.getMinutes());
                    $('#clientDate').val(localdate);
                    $('#clientDate1').val(localdate);
                  }
                  ShowLocalDate();
                           $('#deadline1').datepicker({
                               dateFormat: 'dd-mm-yy',
                        numberOfMonths: 1,
                        minDate:0
                           });
                         $('#deadline1').change(function()
                           {
                           function formatAMPM(date) {
                                                      var hours = date.getHours();
                                                      var minutes = date.getMinutes();
                                                      var ampm = hours >= 12 ? 'pm' : 'am';
                                                      hours = hours % 12;
                                                      hours = hours ? hours : 12; // the hour '0' should be '12'
                                                      minutes = minutes < 10 ? '0'+minutes : minutes;
                                                      var strTime = hours + ':' + minutes + '' + ampm;
                                                      return strTime;
                                                    }
                  
                            function toDate(dateStr) {
                            var parts = dateStr.split("-");
                            return new Date(parts[2], parts[1] - 1, parts[0]);
                                                      }
                            var date = $('#deadline1').val();
                            var f1 = toDate(date);
                            //alert(f);
                            var hours = f1.getHours();
                            var minutes = f1.getMinutes();
                  
                          time_plus_12 = new Date(f1.getTime()+0*3600*1000);
                          $('#deadlinetime1').timepicker({
                              'step': 15,
                              'forceRoundTime': true,
                              'timeFormat': 'H:i',
                              'disableTimeRanges': [
                                  [0, formatAMPM(time_plus_12)]
                              ]
                          });
                           $('#deadlinetime1').timepicker('setTime', time_plus_12);
                           $('#deadlinetime1').val('23:45');
                          })
                  });
                  // }
               </script> 
               <!-- /. WRAPPER  -->
               <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
               <!-- JQUERY SCRIPTS -->
               <script src="https://www.gotoassignmenthelp.com/admin/assets/js/jquery-1.10.2.js"></script>
               <!-- BOOTSTRAP SCRIPTS -->
               <script src="https://www.gotoassignmenthelp.com/admin/assets/js/bootstrap.min.js"></script>
               <!-- CUSTOM SCRIPTS -->
               <script src="https://www.gotoassignmenthelp.com/admin/assets/js/custom.js"></script>
               <script src="https://www.gotoassignmenthelp.com/js/application.js"></script>
               <!-- ================================================
                  jQuery Library
                  ================================================ -->
               <script type="text/javascript" src="https://www.gotoassignmenthelp.com/admin/js/jquery.min.js"></script>
               <!-- ================================================
                  Bootstrap Core JavaScript File
                  ================================================ -->
               <script src="https://www.gotoassignmenthelp.com/admin/js/bootstrap/bootstrap.min.js"></script>
               <!-- ================================================
                  Plugin.js - Some Specific JS codes for Plugin Settings
                  ================================================ -->
               <script type="text/javascript" src="https://www.gotoassignmenthelp.com/admin/js/plugins.js"></script>
               <!-- ================================================
                  Data Tables
                  ================================================ -->
               <script src="https://www.gotoassignmenthelp.com/admin/js/datatables/datatables.min.js"></script>
               <script>
                  $(document).ready(function() {
                    $('#example0').DataTable();
                    $('#example01').DataTable();
                    $('#example02').DataTable();
                    $('#example03').DataTable();
                    $('#example04').DataTable();
                    $('#example05').DataTable();
                    
                  });
               </script>
               <script>
                  $(document).ready(function() {
                    var table = $('#example').DataTable({
                        "columnDefs": [
                            { "visible": false, "targets": 2 }
                        ],
                        "order": [[ 2, 'asc' ]],
                        "displayLength": 25,
                        "drawCallback": function ( settings ) {
                            var api = this.api();
                            var rows = api.rows( {page:'current'} ).nodes();
                            var last=null;
                  
                            api.column(2, {page:'current'} ).data().each( function ( group, i ) {
                                if ( last !== group ) {
                                    $(rows).eq( i ).before(
                                        '<tr class="group"><td colspan="5">'+group+'</td></tr>'
                                    );
                  
                                    last = group;
                                }
                            } );
                        }
                    } );
                  
                    // Order by the grouping
                    $('#example tbody').on( 'click', 'tr.group', function () {
                        var currentOrder = table.order()[0];
                        if ( currentOrder[0] === 2 && currentOrder[1] === 'asc' ) {
                            table.order( [ 2, 'desc' ] ).draw();
                        }
                        else {
                            table.order( [ 2, 'asc' ] ).draw();
                        }
                    } );
                    $('#default').click();
                  } );
                  
                  function ajax_status_change(formID,UrlPath,uniqId) {
                  
                   
                    var statusValue = $("#"+formID).find('#status').val();
                    var fd = new FormData(document.getElementById(formID));
                    fd.append("statusChange", formID);
                    $.ajax({
                            url: UrlPath,
                            type: "POST",
                            data: fd,
                            processData: false,  // tell jQuery not to process the data
                            contentType: false   // tell jQuery not to set contentType
                            }).done(function( data ) {
                            console.log( data );
                            if(data == 'success_status')
                            {
                              if(statusValue == '1')
                              {
                                $("#"+formID).find("#status").val('0');
                                $("#"+formID).find('#statusBtn').html('<input type="submit" class="btn btn-danger" value="Deactive">');
                  
                              }else{
                                 $("#"+formID).find('#status').val('1');
                                 $("#"+formID).find('#statusBtn').html('<input type="submit" class="btn btn-success" value="Active">');
                              }
                              //alert('Status updated successfully');
                              
                            }else{
                              alert('Status Not updated');
                            }
                            
                            
                            
                      });
                      return false;
                  
                  }
                  function ajax_delete_row(formID,UrlPath,uniqId) {
                    var fd = new FormData(document.getElementById(formID));
                    fd.append("deleteRecord", formID);
                  if(confirm("Are you sure you want to delete this page"))
                  {
                    $.ajax({
                            url: UrlPath,
                            type: "POST",
                            data: fd,
                            processData: false,  // tell jQuery not to process the data
                            contentType: false   // tell jQuery not to set contentType
                            }).done(function( data ) {
                            console.log( data );
                              alert(data);
                              $('#'+uniqId).hide();          
                            
                            
                      });
                    }else{
                  
                      return false;
                    }
                     return false;
                  
                  }
                  function ajax_restore_row(formID,UrlPath,uniqId) {
                    var fd = new FormData(document.getElementById(formID));
                    fd.append("deleteRecord", formID);
                  if(confirm("Are you sure you want to restore this page"))
                  {
                    $.ajax({
                            url: UrlPath,
                            type: "POST",
                            data: fd,
                            processData: false,  // tell jQuery not to process the data
                            contentType: false   // tell jQuery not to set contentType
                            }).done(function( data ) {
                            console.log( data );
                              alert(data);
                              $('#'+uniqId).hide();          
                            
                            
                      });
                    }else{
                  
                      return false;
                    }
                     return false;
                  
                  }
                  function ajax_permanent_delete_row(formID,UrlPath,uniqId) {
                    var fd = new FormData(document.getElementById(formID));
                    fd.append("deleteRecord", formID);
                  if(confirm("Are you sure you want to delete this page permanently"))
                  {
                    $.ajax({
                            url: UrlPath,
                            type: "POST",
                            data: fd,
                            processData: false,  // tell jQuery not to process the data
                            contentType: false   // tell jQuery not to set contentType
                            }).done(function( data ) {
                            console.log( data );
                              alert(data);
                              $('#'+uniqId).hide();          
                            
                            
                      });
                    }else{
                  
                      return false;
                    }
                     return false;
                  
                  }
               </script>
               <script src="https://www.gotoassignmenthelp.com/js/inc_ajax_functions.js"></script>
               <!-- Mirrored from egemem.com/theme/kode/v1.1/data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Jan 2016 18:52:48 GMT -->
               <!-- Mirrored from egemem.com/theme/kode/v1.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Jan 2016 18:52:09 GMT -->
            </div>
         </div>
      </div>
   </body>
</html>