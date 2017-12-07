<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--dynamic page descriptions and keywords-->
        <meta name="description" content="<?= empty($viewbag['page_description']) ? '' : $viewbag['page_description'] ?>">
        <meta name="keywords" content="<?= empty($viewbag['page_keywords']) ? '' : $viewbag['page_keywords'] ?>">
        <meta name="author" content="Quinton Ward">

        <title><?= empty($viewbag['page_title']) ? 'Dynauth Dashboard' : $viewbag['page_title'] ?></title>
        <!-- Bootstrap Core CSS -->
        <link href="<?= __relpath__ ?>/public/vendors/sb-admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="<?= __relpath__ ?>/public/vendors/sb-admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?= __relpath__ ?>/public/vendors/sb-admin/dist/css/sb-admin-2.css" rel="stylesheet" type="text/css">
        <link href="<?= __relpath__ ?>/public/vendors/sb-admin/dist/css/dashboard.css" rel="stylesheet" type="text/css">
        <!-- Morris Charts CSS -->
        <link href="<?= __relpath__ ?>/public/vendors/sb-admin/vendor/morrisjs/morris.css" rel="stylesheet" type="text/css">
        <!-- Custom Fonts -->
        <link href="<?= __relpath__ ?>/public/vendors/sb-admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            .navbar-brand{
              font-family: 'Bitter', serif !important;
              color:black !important;
              font-size: 1.5em;
              vertical-align: middle;
              line-height: 50px;
              margin-left: 40px;
            }
        </style>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="<?= __relpath__ ?>/public/vendors/sb-admin/vendor/jquery/jquery.min.js"></script>
    </head>
    <body>
        <div id="wrapper">
            
            <!-- <div id="page-wrapper"> -->
            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="/dashboard">Dynauth.io</a>
                </div>
                <!-- /.navbar-header -->
                <ul class="nav navbar-top-links navbar-right">
                    
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <div id="user-profile">
                                <img src="<?= __relpath__ ?>/public/vendors/sb-admin/dist/img/Profile.png">
                                <div id="user-preview">
                                    <div id="user-name">
                                        <?php  
                                            
                                            echo $_SESSION['is_logged_in']['email'];
                                         ?>
                                        <!-- obaba1@brockport.edu -->
                                    </div>
                                    <div id="user-type">
                                        Free User
                                    </div>
                                </div>
                                <div>
                                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <!-- <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li> -->
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Account Settings</a>
                    </li>
                    <!-- <li class="divider"></li> -->
                    <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->
</nav>
<!-- </div> -->

        <?php
            /**
             * includes the meat of the file
             */
            require __ecom__ . "$viewbag[page_path]";
            ?>

</div>
<!-- /#wrapper -->
<!-- jQuery -->


<!-- Bootstrap Core JavaScript -->
<script src="<?= __relpath__ ?>/public/vendors/sb-admin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- Metis Menu Plugin JavaScript -->
<script src="<?= __relpath__ ?>/public/vendors/sb-admin/vendor/metisMenu/metisMenu.min.js"></script>
<!-- Morris Charts JavaScript -->
<script src="<?= __relpath__ ?>/public/vendors/sb-admin/vendor/raphael/raphael.min.js"></script>
<script src="<?= __relpath__ ?>/public/vendors/sb-admin/vendor/morrisjs/morris.min.js"></script>
<script src="<?= __relpath__ ?>/public/vendors/sb-admin/data/morris-data.js"></script>
<!-- Custom Theme JavaScript -->
<script src="<?= __relpath__ ?>/public/vendors/sb-admin/dist/js/sb-admin-2.js" type="text/javascript"></script>
<script src="<?= __relpath__ ?>/public/js/sam.js" type="text/javascript"></script>
</body>
</html>