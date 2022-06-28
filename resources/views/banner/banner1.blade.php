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
            <a href="http://staging.gotoassignmenthelp.com/">
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

                <a href="http://staging.gotoassignmenthelp.com/admin/add-user-rights.php"><span class="icon color6">
                        <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
                    </span>User Rights</a>

                <a href="http://staging.gotoassignmenthelp.com/admin/user-cms-change-password.php"><span class="icon color6">
                        <!-- <i class="fa fa-lock"></i> -->
                    </span>Change Password</a>
                <a href="http://staging.gotoassignmenthelp.com/admin/writer-admin-logout/"><span class="icon color6">
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
                    <a href="http://staging.gotoassignmenthelp.com/admin/user-cms-dashboard.php"><span class="icon color6"><i class="fa fa-dashboard" aria-hidden="true"></i></span>Dashboard</a>
                </li>
                <li>
                    <a href="/"><span class="icon color6"><i class="fa fa-dashboard" aria-hidden="true"></i></span>Home Page</a>
                </li>
                <li><a href="http://staging.gotoassignmenthelp.com/admin/page-edit-request.php"><span class="icon color6"><i class="fa fa-bars" aria-hidden="true"></i></span><span class="badge" style="color: #a7ff21;">Page Edit Request ( 0 )</span></a></li>
                <li><a href="http://staging.gotoassignmenthelp.com/admin/view-new-page.php"><span class="icon color6"><i class="fa fa-file-text"></i></span>All Pages</a></li>



                <li><a href="http://staging.gotoassignmenthelp.com/admin/page-add-edit-category.php"><span class="icon color6"><i class="fa fa-tasks" aria-hidden="true"></i></span>Category</a></li>

                <li><a href="http://staging.gotoassignmenthelp.com/admin/page-add-edit-banner.php"><span class="icon color6"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span> Page Banner</a></li>
                <li>


                </li>
                <li><a href="http://staging.gotoassignmenthelp.com/admin/add-testimonial.php"><span class="icon color6"><i class="fa fa-tasks" aria-hidden="true"></i></span>Testimonial</a></li>
                <li>
                    <a href="http://staging.gotoassignmenthelp.com/admin/trash-page-details.php"><span class="icon color6"><i class="fa fa-trash" aria-hidden="true"></i></span>Trash Page</a>
                </li>
                <li><a href="#"><span class="icon color6"><i class="fa fa-bars"></i></span>Question &amp; Free Sample<span class="caret"></span></a>

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

                <li><a href="#"><span class="icon color6"><i class="fa fa-bars"></i></span>Experts on site<span class="caret"></span></a>

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

                    <a href="http://staging.gotoassignmenthelp.com/admin/create-new-page.php" class="btn btn-success">Create New Page</a>

                    <a href="http://staging.gotoassignmenthelp.com/admin/add-testimonial.php" class="btn btn-success">Add Testimonial</a>
                    <!-- <a href="http://staging.gotoassignmenthelp.com/admin/page-add-edit-sidebar.php" class="btn btn-success">Add Side Bar</a> -->
                    <a href="http://staging.gotoassignmenthelp.com/admin/page-add-edit-category.php" class="btn btn-success">Add Category</a>
                    <a href="http://staging.gotoassignmenthelp.com/admin/page-add-edit-banner.php" class="btn btn-success">Add Banner</a>
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
                <form method="POST" action="banner" enctype="multipart/form-data" id="add_bg_img_form" name="add_bg_img_form">
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
                                    <label for="input3" class="form-label">Banner Image:</label>
                                    <input type="file" class="col-md-12 btn dropdown-toggle selectpicker btn-primary" id="bg_image" name="bannerimage">
                                </div>

                                <div class="form-group col-md-2 col-lg-2">

                                    <label for="name" class="form-label">Banner Image Alt:</label>
                                    <input type="text" class="form-control" id="bg_image_alt" name="bannerimagealt">
                                </div>
                                <br>
                                <br>
                                <br>
                                <br>

                                <div class="form-group col-md-3 col-lg-3">
                                    <label for="input3" class="form-label">Order Form Image:</label>
                                    <input type="file" class="col-md-12 btn dropdown-toggle selectpicker btn-primary" id="side_image" name="imageorder">
                                </div>
                                <div class="form-group col-md-2 col-lg-2">

                                    <label for="mail" class="form-label">Order Form Image Alt:</label>
                                    <input type="text" class="form-control" id="side_image_alt" name="imageorderalt">
                                </div>
                                <br>
                                <br>
                                <br>
                                <br>

                                <div class="form-group col-md-3 col-lg-3">
                                    <label for="input3" class="form-label">Right Side Bar Image:</label>
                                    <input type="file" class="col-md-12 btn dropdown-toggle selectpicker btn-primary" id="side_botom_image" name="imageright">
                                </div>
                                <div class="form-group col-md-3 col-lg-3">

                                    <label for="mail" class="form-label">Right Side Bar Image Alt:</label>
                                    <input type="text" class="form-control" id="side_botom_image_alt" name="imagerightal">
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
                                <!-- <div class="dataTables_length" id="example0_length"><label>Show <select name="example0_length" aria-controls="example0" class="">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries</label></div> -->
                                <!-- <div id="example0_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="example0"></label></div> -->
                                <table id="example0" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="example0_info">
                                    <thead>
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

                                    </thead>
                                    <tbody>


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
   </footer>
</html>