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
      .label {
         font-size: 20px;
         font-family: inherit;
      }

      .description {
         margin: 0px;
         height: 110px;
         resize: none;
         font-size: 20px;
         font-family: initial;
      }

      #submit {
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
         background: rgb(255, 253, 186);
         margin-top: 5%;
         margin-left: 12px;
         min-width: 88%;
         min-height: 72px;
         font-size: 20px;
         font-family: initial;
         border-radius: 8px;
         color: #080808;
         padding: 10px;
         box-shadow: 4px 23px 42px -20px rgba(0, 0, 0, 0.54);
      }

      .card {
         box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
         transition: 0.3s;
         border-radius: 5px;
         margin-bottom: 10px;
      }

      .card:hover {
         box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
      }

      #stickNotesDiv {
         height: 727px;
      }

      .show_page_number {
         border-radius: 263px;
         height: 148px;
         width: 138px;
         padding: 90px;
         margin: 0px;
         padding-left: 43px !important;
         color: white;
         background-color: #399bff;
         font-size: 50px;
         margin-top: 60px;
         margin-left: 100px;
      }

      .title {
         font-size: 28px !important;
         margin-left: -176px;
      }

      .blink {
         animation: blink 1s infinite;
      }

      .footer {
         margin-top: 400px;
      }
   </style>
   <script>
      function myFunction() {
         document.getElementById("addcomment").reset();
      }
   </script>