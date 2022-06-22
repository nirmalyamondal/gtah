<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-control" content="public">
    <title>Admin Banner Dashboard</title>
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
    <style>
        .cke {
            visibility: hidden;
        }
    </style>

    <link href="https://www.gotoassignmenthelp.com/admin/css/root.css" rel="stylesheet">

    <!-- ============================================================= -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="//jonthornton.github.io/jquery-timepicker/jquery.timepicker.js"></script>

    <link rel="stylesheet" href="//jonthornton.github.io/jquery-timepicker/jquery.timepicker.css">
    <style type="text/css">
        #main-menu {
            height: 600px;
            overflow-y: scroll;
            overflow-x: hidden;
        }
    </style>
    <script>
        // if (datefield.type!="date"){ 
        jQuery(function($) {
            $('#deadline').datepicker({
                dateFormat: 'dd-mm-yy',
                numberOfMonths: 1,
                minDate: 0
            });
            $('#deadline').change(function() {
                function formatAMPM(date) {
                    var hours = date.getHours();
                    var minutes = date.getMinutes();
                    var ampm = hours >= 12 ? 'pm' : 'am';
                    hours = hours % 12;
                    hours = hours ? hours : 12; // the hour '0' should be '12'
                    minutes = minutes < 10 ? '0' + minutes : minutes;
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

                time_plus_12 = new Date(f.getTime() + 0 * 3600 * 1000);
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
        jQuery(function($) {
            function ShowLocalDate() {
                var dNow = new Date();
                var localdate = (dNow.getDate() + '-' + parseInt(dNow.getMonth() + 1)) + '-' + dNow.getFullYear() + ' ' + dNow.getHours() + ':' + parseInt(dNow.getMinutes());
                $('#clientDate').val(localdate);
                $('#clientDate1').val(localdate);
            }
            ShowLocalDate();
            $('#deadline1').datepicker({
                dateFormat: 'dd-mm-yy',
                numberOfMonths: 1,
                minDate: 0
            });
            $('#deadline1').change(function() {
                function formatAMPM(date) {
                    var hours = date.getHours();
                    var minutes = date.getMinutes();
                    var ampm = hours >= 12 ? 'pm' : 'am';
                    hours = hours % 12;
                    hours = hours ? hours : 12; // the hour '0' should be '12'
                    minutes = minutes < 10 ? '0' + minutes : minutes;
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

                time_plus_12 = new Date(f1.getTime() + 0 * 3600 * 1000);
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
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
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

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #399bff;
        }
    </style>
    <div id="top" class="clearfix">

        <!-- Start App Logo -->
        <div class="applogo">
            <a href="#">
                <img src="http://staging.gotoassignmenthelp.com/app-assets/images/logo/logo.png">
            </a>
        </div>
        <!-- End App Logo -->

        <!-- Start Sidebar Show Hide Button -->
        <a href="#" class="sidebar-open-button"><i class="fa fa-bars"></i></a>
        <a href="#" class="sidebar-open-button-mobile"><i class="fa fa-bars"></i></a>
        <!-- End Sidebar Show Hide Button -->

        <span style="margin-top: 20px!important;font-size: 17px;margin-left: 560px;">anuradha.sarkar48@gmail.com (Super Admin)</span>
        <div class="dropdown">
            <button class="dropbtn">Action</button>
            <div class="dropdown-content">

                <a href="#"><span class="icon color6">
                        <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
                    </span>User Rights</a>

                <a href="#"><span class="icon color6">
                        <!-- <i class="fa fa-lock"></i> -->
                    </span>Change Password</a>
                <a href="#"><span class="icon color6">
                        <!-- <i class="fa fa-user"></i> -->
                    </span>logout</a>
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
                <li>
                    <a href="#"><span class="icon color6"><i class="fa fa-dashboard" aria-hidden="true"></i></span>Home Page</a>
                </li>
                <li><a href="#"><span class="icon color6"><i class="fa fa-bars" aria-hidden="true"></i></span><span class="badge" style="color: #a7ff21;">Page Edit Request ( 0 )</span></a></li>
                <li><a href="#"><span class="icon color6"><i class="fa fa-file-text"></i></span>All Pages</a></li>



                <li><a href="#"><span class="icon color6"><i class="fa fa-tasks" aria-hidden="true"></i></span>Category</a></li>

                <li><a href="#"><span class="icon color6"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span> Page Banner</a></li>
                <li>


                </li>
                <li><a href="#"><span class="icon color6"><i class="fa fa-tasks" aria-hidden="true"></i></span>Testimonial</a></li>
                <li>
                    <a href="#"><span class="icon color6"><i class="fa fa-trash" aria-hidden="true"></i></span>Trash Page</a>
                </li>
                <li><a href="#"><span class="icon color6"><i class="fa fa-bars"></i></span>Question &amp; Free Sample<span class="caret"></span></a>

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

                <li><a href="#"><span class="icon color6"><i class="fa fa-bars"></i></span>Experts on site<span class="caret"></span></a>

                    <ul>
                        <li>
                            <a href="#"><span class="icon color6"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>Add Expert Details</a>
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
        .page-header {
            background: #fff;
            margin: 17px -30px 20px -30px !important;
            padding: 36px !important;
            border-bottom: none;
            position: relative;
        }
    </style>

    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START CONTENT -->
    <div class="content" style="min-height:900px;">
        <div class="page-header">
            <!-- Start Page Header -->
            <div class="right">

                <div class="btn-group" role="group" aria-label="...">

                </div>
                <div class="btn-group" role="group" aria-label="...">

                    <a href="#" class="btn btn-success">Create New Page</a>

                    <a href="#" class="btn btn-success">Add Testimonial</a>
                    <!-- <a href="http://staging.gotoassignmenthelp.com/admin/page-add-edit-sidebar.php" class="btn btn-success">Add Side Bar</a> -->
                    <a href="#" class="btn btn-success">Add Category</a>
                    <a href="#" class="btn btn-success">Add Banner</a>
                </div>
            </div>
        </div>
        <!-- End Page Header -->

        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START CONTAINER -->
        <div class="container-widget">

            <!-- Start Top Stats -->
            <div class="col-md-12">

            </div>
            <!-- End Top Stats -->

            <!-- ////////////////////////////////////////////////BANNER FORM//////////////////////////////////////////////////////////////////// -->
            <!-- ////////////////////////////////////////////////BANNER FORM//////////////////////////////////////////////////////////////////// -->
            <!-- ////////////////////////////////////////////////BANNER FORM//////////////////////////////////////////////////////////////////// -->
            <!-- ////////////////////////////////////////////////BANNER FORM//////////////////////////////////////////////////////////////////// -->
            <!-- ////////////////////////////////////////////////BANNER FORM//////////////////////////////////////////////////////////////////// -->
            <!-- ////////////////////////////////////////////////BANNER FORM//////////////////////////////////////////////////////////////////// -->
            <!-- Start First Row -->
            <div class="row">
                <form method="POST" action="add-banner" enctype="multipart/form-data" id="add_bg_img_form" name="add_bg_img_form">
                    <!-- @if($errors->any())
                    @foreach($errors->all() as $error)
                    <p class="text-warning" align="center">{{$error}}</p>
                    @endforeach
                    @endif -->


                    <!-- ////////////////////////////Successfull mesage//////////////////////////////////// -->

                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">X</button>

                        {{session()->get('message')}}

                    </div>
                    @endif


                    <!-- /////////FORM VALIDATION////////// -->
                    @if($errors)
                    @foreach($errors->all() as $errors)
                    <li style="color: red;">
                        {{$errors}}
                    </li>
                    @endforeach
                    @endif



                    @csrf
                    <!-- //////////////////////////  Section add Testimonial start  /////////////////////////////////////// -->
                    <div class="col-md-12 col-lg-12">

                        <div class="panel panel-default">

                            <div class="panel-title">
                                Add Page Banner Image
                                <ul class="panel-tools">
                                    <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
                                    <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
                                    <!--<li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>-->
                                </ul>
                            </div>
                            <!-- <div class="form-group col-md-12 col-lg-12">
                  
                   <label for="name"  class="form-label"> Select Page:</label>
                   <select  class="col-md-12 btn dropdown-toggle selectpicker btn-option2" id="category" name="category" required >
                     <option> Select Category</option>
                      <option></option>
                   </select>
                </div> -->

                            <div class="panel-body">
                                <div class="form-group col-md-3 col-lg-3">
                                    <label for="input3" class="form-label" required>Banner Image:</label>
                                    <input type="file" class="col-md-12 btn dropdown-toggle selectpicker btn-primary" id="bg_image" name="bannerimage" required="">
                                </div>

                                <div class="form-group col-md-2 col-lg-2">

                                    <label for="name" class="form-label" required>Banner Image Alt:</label>
                                    <input type="text" class="form-control" id="bg_image_alt" name="bannerimagealt" required="">
                                </div>
                                <br>
                                <br>
                                <br>
                                <br>

                                <div class="form-group col-md-3 col-lg-3">
                                    <label for="input3" class="form-label" required>Order Form Image:</label>
                                    <input type="file" class="col-md-12 btn dropdown-toggle selectpicker btn-primary" id="side_image" name="imageorder" required="">
                                </div>
                                <div class="form-group col-md-2 col-lg-2">

                                    <label for="mail" class="form-label" required>Order Form Image Alt:</label>
                                    <input type="text" class="form-control" id="side_image_alt" name="imageorderalt" required="">
                                </div>
                                <br>
                                <br>
                                <br>
                                <br>

                                <div class="form-group col-md-3 col-lg-3">
                                    <label for="input3" class="form-label" required>Right Side Bar Image:</label>
                                    <input type="file" class="col-md-12 btn dropdown-toggle selectpicker btn-primary" id="side_botom_image" name="imageright" required="">
                                </div>
                                <div class="form-group col-md-3 col-lg-3">

                                    <label for="mail" class="form-label" required>Right Side Bar Image Alt:</label>
                                    <input type="text" class="form-control" id="side_botom_image_alt" name="imagerightal" required="">
                                </div>
                                <br>
                                <br>
                                <br>
                                <br>
                                <div class="form-group col-md-3 col-lg-3">

                                    <label for="mail" class="form-label">Banner Status:</label>
                                    <br>
                                    <!-- <select type="text" class="form-control" id="bg_image_status"
                                        name="bg_image_status"> -->
                                      <input type="radio" name="status" value="0">
                                      <label>ACTIVE</label>

                                      <input type="radio" name="status" value="1">
                                      <label>DEACTIVE</label>

                                    <!-- <option value="1">ACTIVE</option>
                                        <option value="0">DEACTIVE</option> -->
                                    <!-- </select> -->
                                </div>


                                <div class="form-group col-md-12">

                                    <input type="submit" class="btn btn-default" id="authorPicture" name="authorPicture" value="Add">
                                </div>

                            </div>

                        </div>

                        <!-- ////////////////////  Section add Testimonial end here   ////////////////////////////// -->


                        <!-- ////////////////////  Section add Side bar end here   ////////////////////////////// -->

                        <!-- //////////////////////////  Section add Side Bar start  /////////////////////////////////////// -->


                        <div class="col-lg-12 col-md-12 table-responsive">



                            <div id="example0_wrapper" class="dataTables_wrapper no-footer">

                               


                                <!-- <div id="example0_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="example0"></label></div> -->
                                <table id="example0" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="example0_info">
                                    <!-- <thead>
                                        <tr role="row" class="bg-primary">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Banner Image: activate to sort column descending" style="width: 184px;">Banner Image</th>
                                            <th class="sorting" tabindex="0" aria-controls="example0" rowspan="1" colspan="1" aria-label="Alt(Banner Image): activate to sort column ascending" style="width: 156px;">Alt(Banner Image)</th>
                                            <th class="sorting" tabindex="0" aria-controls="example0" rowspan="1" colspan="1" aria-label="Order Form Image: activate to sort column ascending" style="width: 83px;">Order Form Image</th>
                                            <th class="sorting" tabindex="0" aria-controls="example0" rowspan="1" colspan="1" aria-label="Alt(Order Form Image): activate to sort column ascending" style="width: 159px;">Alt(Order Form Image)</th>
                                            <th class="sorting" tabindex="0" aria-controls="example0" rowspan="1" colspan="1" aria-label="Right Side Bar bottom Image: activate to sort column ascending" style="width: 103px;">Right Side Bar bottom Image</th>
                                            <th class="sorting" tabindex="0" aria-controls="example0" rowspan="1" colspan="1" aria-label="Alt(Right Side Bar bottom Image): activate to sort column ascending" style="width: 155px;">Alt(Right Side Bar bottom Image)</th>
                                            <th class="sorting" tabindex="0" aria-controls="example0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 80px;">Status</th>
                                            <th class="sorting" tabindex="0" aria-controls="example0" rowspan="1" colspan="1" aria-label="Delete: activate to sort column ascending" style="width: 49px;">Delete</th>
                                        </tr>

                                    </thead> -->

                                    <!-- <tbody>


                                        <tr role="row" class="odd">

                                            <td class="sorting_1"><img src="http://staging.gotoassignmenthelp.com/admin/img/banner-img/1516106029_gotoassignmenthelp_home_banner_background_image.jpg" width="200" height="80" class="img-rounded">
                                            </td>
                                            <td>GotoAssignmentHelp Home background Image</td>
                                            <td><img src="http://staging.gotoassignmenthelp.com/admin/img/banner-img/order-form-girl.png" width="80" height="100" class="img-rounded">
                                            </td>
                                            <td>GotoAssignmentHelp Home Student Slider Image</td>
                                            <td><img src="http://staging.gotoassignmenthelp.com/admin/img/banner-img/1516106032_gotoassignmenthelp_services_sidebar_student_image.jpg" width="80" height="100" class="img-rounded">
                                            </td>
                                            <td>GotoAssignmentHelp Services Sidebar Student</td>

                                            <td>
                                                <form id="statusChangeForm15" method="post" onsubmit="return ajax_status_change('statusChangeForm15','http://staging.gotoassignmenthelp.com/admin/ajax-create-inner-page.php','15')">
                                                    <input type="hidden" name="img_id" id="img_id" value="15">
                                                    <input type="hidden" name="status" id="status" value="0">
                                                    <div id="statusBtn">
                                                        <input type="submit" class="btn btn-danger" value="Deactive">
                                                    </div>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="http://staging.gotoassignmenthelp.com/admin/testimonial_response.php" method="post" id="delete_banner">

                                                    <input type="hidden" name="del-banner-id" id="del-banner-id" value="15">
                                                    <button data-toggle="tooltip" title="" type="submit" id="delbtn_banner" name="delbtn_banner" onclick="return confirm('Are you sure you want to delete this banner ?')" data-original-title="Delete banner"><i class="fa fa-trash-o" aria-hidden="true" style="font-size: 34px;cursor:pointer;"></i></button>
                                                </form>
                                            </td>
                                        </tr>


                                        <tr role="row" class="even">

                                            <td class="sorting_1"><img src="http://staging.gotoassignmenthelp.com/admin/img/banner-img/1542439846_Chrysanthemum.jpg" width="200" height="80" class="img-rounded">
                                            </td>
                                            <td>test</td>
                                            <td><img src="http://staging.gotoassignmenthelp.com/admin/img/banner-img/1542439846_order-form-girl.png" width="80" height="100" class="img-rounded">
                                            </td>
                                            <td>Order form Image</td>
                                            <td><img src="http://staging.gotoassignmenthelp.com/admin/img/banner-img/1542439846_Jellyfish.jpg" width="80" height="100" class="img-rounded">
                                            </td>
                                            <td>test</td>

                                            <td>
                                                <form id="statusChangeForm17" method="post" onsubmit="return ajax_status_change('statusChangeForm17','http://staging.gotoassignmenthelp.com/admin/ajax-create-inner-page.php','17')">
                                                    <input type="hidden" name="img_id" id="img_id" value="17">
                                                    <input type="hidden" name="status" id="status" value="1">
                                                    <div id="statusBtn">
                                                        <input type="submit" class="btn btn-success" value="Active">
                                                    </div>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="http://staging.gotoassignmenthelp.com/admin/testimonial_response.php" method="post" id="delete_banner">

                                                    <input type="hidden" name="del-banner-id" id="del-banner-id" value="17">
                                                    <button data-toggle="tooltip" title="" type="submit" id="delbtn_banner" name="delbtn_banner" onclick="return confirm('Are you sure you want to delete this banner ?')" data-original-title="Delete banner"><i class="fa fa-trash-o" aria-hidden="true" style="font-size: 34px;cursor:pointer;"></i></button>
                                                </form>
                                            </td>
                                        </tr>


                                    </tbody> -->
                                    <thead class="bg-primary">
                                        <tr>
                                            <th>Sl No</th>
                                            <th>Banner Image</th>
                                            <th>Banner Image Alt</th>
                                            <th>Order Form Image</th>
                                            <th>Order Form Image Alt</th>
                                            <th>Right Side Bar Image</th>
                                            <th>Right Side Bar Image Alt</th>
                                            <th>Status</th>
                                            <th>Delete</th>
                                        </tr>

                                    </thead>

                                    <tbody>
                                        @php

                                        $i = 1;
                                        @endphp


                                        @foreach($data as $banner)

                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <!-- <th>{{$banner['id']}}</th> -->
                                            <td width="15%"> <img src="https://images.unsplash.com/photo-1541569863345-f97c6484a917?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="BannerImage" width="100%"></td>
                                            <td>{{$banner['bannerimagealt']}}</td>
                                            <td width="15%"> <img src="https://images.unsplash.com/photo-1638913660106-73b4bac0db09?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1172&q=80" alt="OrderImage" width="100%"></td>
                                            <td>{{$banner['imageorderalt']}}</td>
                                            <td width="15%"> <img src="https://images.unsplash.com/photo-1581478730747-4850812b9b14?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="RightImage" width="100%"></td>
                                            <td>{{$banner['imagerightal']}}</td>
                                            <td>{{$banner['status']}}</td>
                                            <td><a class="btn btn-danger" onclick="if (!confirm('Are you sure you want to delete?')) { return false }" href={{"delete/".$banner['id']}}>Delete</a></td>

                                        </tr>

                                        @endforeach

                                    </tbody>

                                </table>

                                <!-- <div class="dataTables_info" id="example0_info" role="status" aria-live="polite">Showing 1 to 2 of 2 entries</div> -->
                                <!-- <div class="dataTables_paginate paging_simple_numbers" id="example0_paginate"><a class="paginate_button previous disabled" aria-controls="example0" data-dt-idx="0" tabindex="0" id="example0_previous">Previous</a><span><a class="paginate_button current" aria-controls="example0" data-dt-idx="1" tabindex="0">1</a></span><a class="paginate_button next disabled" aria-controls="example0" data-dt-idx="2" tabindex="0" id="example0_next">Next</a></div> -->
                            </div>


                        </div>

                        <!-- ////////////////////  Section add Side bar end here   ////////////////////////////// -->

                    </div>
                </form>

            </div>
        </div>
        <!-- End First Row -->
    </div>


    <!-- End Content -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->


    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <div class="footer">
        <div class="row">
            <div class="col-lg-12" style="text-align:center;">
                Copyright © GotoAssignmentHelp.com 2022 </div>
        </div>
    </div>


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
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;

                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before(
                                '<tr class="group"><td colspan="5">' + group + '</td></tr>'
                            );

                            last = group;
                        }
                    });
                }
            });

            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
            $('#default').click();
        });

        function ajax_status_change(formID, UrlPath, uniqId) {


            var statusValue = $("#" + formID).find('#status').val();
            var fd = new FormData(document.getElementById(formID));
            fd.append("statusChange", formID);
            $.ajax({
                url: UrlPath,
                type: "POST",
                data: fd,
                processData: false, // tell jQuery not to process the data
                contentType: false // tell jQuery not to set contentType
            }).done(function(data) {
                console.log(data);
                if (data == 'success_status') {
                    if (statusValue == '1') {
                        $("#" + formID).find("#status").val('0');
                        $("#" + formID).find('#statusBtn').html('<input type="submit" class="btn btn-danger" value="Deactive">');

                    } else {
                        $("#" + formID).find('#status').val('1');
                        $("#" + formID).find('#statusBtn').html('<input type="submit" class="btn btn-success" value="Active">');
                    }
                    //alert('Status updated successfully');

                } else {
                    alert('Status Not updated');
                }



            });
            return false;

        }

        function ajax_delete_row(formID, UrlPath, uniqId) {
            var fd = new FormData(document.getElementById(formID));
            fd.append("deleteRecord", formID);
            if (confirm("Are you sure you want to delete this page")) {
                $.ajax({
                    url: UrlPath,
                    type: "POST",
                    data: fd,
                    processData: false, // tell jQuery not to process the data
                    contentType: false // tell jQuery not to set contentType
                }).done(function(data) {
                    console.log(data);
                    alert(data);
                    $('#' + uniqId).hide();


                });
            } else {

                return false;
            }
            return false;

        }

        function ajax_restore_row(formID, UrlPath, uniqId) {
            var fd = new FormData(document.getElementById(formID));
            fd.append("deleteRecord", formID);
            if (confirm("Are you sure you want to restore this page")) {
                $.ajax({
                    url: UrlPath,
                    type: "POST",
                    data: fd,
                    processData: false, // tell jQuery not to process the data
                    contentType: false // tell jQuery not to set contentType
                }).done(function(data) {
                    console.log(data);
                    alert(data);
                    $('#' + uniqId).hide();


                });
            } else {

                return false;
            }
            return false;

        }

        function ajax_permanent_delete_row(formID, UrlPath, uniqId) {
            var fd = new FormData(document.getElementById(formID));
            fd.append("deleteRecord", formID);
            if (confirm("Are you sure you want to delete this page permanently")) {
                $.ajax({
                    url: UrlPath,
                    type: "POST",
                    data: fd,
                    processData: false, // tell jQuery not to process the data
                    contentType: false // tell jQuery not to set contentType
                }).done(function(data) {
                    console.log(data);
                    alert(data);
                    $('#' + uniqId).hide();


                });
            } else {

                return false;
            }
            return false;

        }
    </script>


    <script src="https://www.gotoassignmenthelp.com/js/inc_ajax_functions.js"></script>




    <!-- Mirrored from egemem.com/theme/kode/v1.1/data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Jan 2016 18:52:48 GMT -->

    <script>
        $("button").click(function() {
            $.post("demo_test_post.asp", {
                    name: "Donald Duck",
                    city: "Duckburg"
                },
                function(data, status) {
                    alert("Data: " + data + "\nStatus: " + status);
                });
        });
    </script>



    <!-- <script type="text/javascript">
        $("document").ready(function() {

            $("div.alert").remove();

        },5000);
    </script> -->

    <!-- Mirrored from egemem.com/theme/kode/v1.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Jan 2016 18:52:09 GMT -->
</body>

</html>