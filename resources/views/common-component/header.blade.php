
<header>
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

    <!-- START TOP -->
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
    
</header>