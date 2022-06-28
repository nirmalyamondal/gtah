<!-- INCLUDE HEAD -->
@include('common-component.head')
<!-- END INCLUDE HEAD -->

<body>

   <!-- INCLUDE HEADER -->
   @include('common-component.header')
   <!-- END INCLUDE HEADER -->

   <!-- INCLUDE SIDEBAR-->
   @include('common-component.sidebar')
   <!-- END INCLUDE SIDEBAR-->

   <div class="content" style="min-height:900px;">

      <!-- DOWN-HEADER-->

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

      <!-- END DOWN-HEADER-->

      <!-- ////////////////........... START CONTENT AREA .............///////////////// -->
      <!-- ////////////////........... START CONTENT AREA .............///////////////// -->


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
            <!-- End sticky form  -->

            <!-- INCLUDE FOOTER-->
            @include('common-component.footer')
            <!-- END INCLUDE FOOTER-->

         </div>
         <!-- End Top Stats -->

      </div>
      <!-- END CONTAINER -->

      <!-- ////////////////...........END START CONTENT AREA .............///////////////// -->
      <!-- ////////////////...........END START CONTENT AREA .............///////////////// -->

   </div>
</body>




<div class="script">
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
   <!-- Mirrored from egemem.com/theme/kode/v1.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Jan 2016 18:52:09 GMT -->
</div>