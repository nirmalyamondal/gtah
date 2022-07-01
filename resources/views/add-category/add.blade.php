@include('common-component.head')

<body>

    @include('common-component.header')
    


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

    <div class="content">
        <div id="page-wrapper" class="clearfix">
            <div id="page-inner">

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <h2>Add Category Type</h2>
                        
                        <form action="add-category" method="POST" id="questionCategory" >
                        @csrf
                            <div class="form-group">
                                <input type="hidden" name="question_category">
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="edit_question_cat_id" id="edit_question_cat_id" value="">
                                <input type="text" name="title" id="addquestion_cat" placeholder="Enter Category Type..." class="form-control" value="" required="">
                            </div>
                            <div class="form-group">
                                <input type="submit" class=" btn btn-default" value="Submit" id="submit">
                            </div>
                        </form>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="panel panel-default">
                        <h2>Add Assignment Category Type</h2>
                        <form action="" id="assignmentCategory">
                            <div class="form-group">
                                <input type="hidden" name="assignment">
                                <input type="hidden" name="edit_assignment_cat_id" id="edit_assignment_cat_id" value="">
                            </div>
                            <div class="form-group">
                                <select name="question_category_type" class="form-control" required="">
                                    <option value="">Select Category</option>
                                    <option value="1">Question Bank</option>
                                    <option value="2">Free Samples</option>
                                    <option value="12">abcd1</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" name="addassignment" id="addassignment" placeholder="Enter Assignment Type..." value="" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <input type="submit" class=" btn btn-default" value="Submit" id="submit">
                            </div>
                        </form>
                    </div>
                </div>




                <div class="col-md-6">
                    <div class="panel panel-default">
                        <h2>Add Subject Category Type</h2>
                        <form action="" id="addsubjectassignment">
                            <div class="form-group">
                                <input type="hidden" name="addsubjectassignment">
                                <input type="hidden" name="edit_subject_cat_id" value="">
                            </div>
                            <div class="form-group">
                                <select name="question_category_type1" id="question_category_type1" class="form-control" required="">
                                    <option value="">Select Category</option>
                                    <option value="1">Question Bank</option>
                                    <option value="2">Free Samples</option>
                                    <option value="12">abcd1</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="assignment_cat" id="assignment_cat" placeholder="Enter Assignment Type..." class="form-control" required="">
                                    <option value="">Select Assignment Type</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" name="addsubject" id="addsubject" placeholder="Enter Subject..." class="form-control" value="" required="">
                            </div>
                            <div class="form-group">
                                <input type="submit" class=" btn btn-default" value="Submit" id="submit">
                            </div>
                        </form>
                    </div>
                </div>

                

            </div>
        </div>
        @include('common-component.footer')
    </div>





    <!-- Mirrored from egemem.com/theme/kode/v1.1/data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Jan 2016 18:52:48 GMT -->


</body>

</html>