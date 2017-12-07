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

        <title><?= empty($viewbag['page_title']) ? 'Dynauth.io' : $viewbag['page_title'] ?></title>

        <link href="<?= __relpath__ ?>/public/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= __relpath__ ?>/public/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans|Raleway" rel="stylesheet">
        <link rel="stylesheet" href="<?= __relpath__ ?>/public/css/evan.css">
        <link rel="stylesheet" href="<?= __relpath__ ?>/public/vendors/MyBiz/css/flexslider.css">
        <link rel="stylesheet" href="<?= __relpath__ ?>/public/vendors/bootstrap/font-awesome.min.css">
        <link rel="stylesheet" href="<?= __relpath__ ?>/public/vendors/bootstrap/css/style.css">
        <link rel="stylesheet" href="<?= __relpath__ ?>/public/vendors/bootstrap/css/main.css">
        <!--individual css for each student-->
        <link href="<?= __relpath__ ?>/public/css/connor.css" rel="stylesheet" type="text/css"/>
        <link href="<?= __relpath__ ?>/public/css/evan.css" rel="stylesheet" type="text/css"/>
        <link href="<?= __relpath__ ?>/public/css/quinton.css" rel="stylesheet" type="text/css"/>
        <link href="<?= __relpath__ ?>/public/css/sam.css" rel="stylesheet" type="text/css"/>
        <!-- all javascript files moved here by Connor (ITS BETTER QUINTON) -->
        <script src="<?= __relpath__ ?>/public/vendors/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="<?= __relpath__ ?>/public/vendors/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?= __relpath__ ?>/public/vendors/angular/angular.min.js"></script>
        <script src="<?= __relpath__ ?>/public/js/connor.js" type="text/javascript"></script>
        <script src="<?= __relpath__ ?>/public/js/evan.js" type="text/javascript"></script>
        <!-- Are you having a hard day fixing code?
        On any page this is included press [up, down, left, right, enter].  -->
        <script src="<?= __relpath__ ?>/public/js/sam.js" type="text/javascript"></script>
        <script src="<?= __relpath__ ?>/public/vendors/jquery/jquery.min.js"></script>
        <script src="<?= __relpath__ ?>/public/vendors/MyBiz/js/jquery.flexslider.js"></script>
        <script src="<?= __relpath__ ?>/public/vendors/MyBiz/js/jquery.inview.js"></script>
        <script src="<?= __relpath__ ?>/public/vendors/jquery/script.js"></script>
        <script src="<?= __relpath__ ?>/public/vendors/MyBiz/contactform/contactform.js"></script>
        <?php
        /**
         * this allows use to dynamically include css files dependant on our needs.
         */
        if (!empty($viewbag['page_css']) && is_array($viewbag['page_css'])) {
            foreach ($viewbag['page_css'] as $css) {
                echo "<link href='" . __relpath__ . "$css' rel='stylesheet' type='text/css'>";
            }
        }
        ?>
    </head>
    <body>
        <!--handles all of the navigation, uses bootstrap classes-->
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?= __relpath__ ?>/">Dynauth.io</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="<?= __relpath__ ?>/">Home</a></li>
                        <li><a href="<?= __relpath__ ?>/enterprise">Enterprise</a></li>
                        <!-- <li><a href="<?= __relpath__ ?>/security">Security</a></li> -->
                        <li><a href="<?= __relpath__ ?>/about">About Us</a></li>
                        <li><a href="<?= __relpath__ ?>/dashboard">Dashboard</a></li>
                        <li><a href="http://blog.cis442.dynauth.io/">Blog</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="body-wrapper-class">
            <?php
            /**
             * includes the meat of the file
             */
            require __ecom__ . "$viewbag[page_path]";
            ?>
        </div>

        <footer >
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h6>Address</h6>
                        <p>
                            The Frontier<br>
                            800 Park Offices Drive<br>
                            Research Triangle Park, NC
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <h6>Hours</h6>
                        <p>
                            Monday—Friday: 9:00AM–5:00PM<br>
                            Saturday &amp; Sunday: 11:00AM–3:00PM</p>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h6>About This Site</h6>
                        <p>Our mission is to secure the infrastructure of the Internet to create a safe and productive environment accessible for everyone everywhere.</p>
                        <a href="/sitemap">Sitemap</a>
                    </div>
                </div>
                <div class="row">

                    <div class="footer-left">
                        <div class="credits">
                            &copy; MyBiz Theme. All rights reserved.
                            <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=MyBiz
            -->
                            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
                    </div>

                </div>
            </div>
        </footer>
        <script src="<?= __relpath__ ?>/public/js/quinton.js" type="text/javascript"></script>
        <?php
        /**
         * again, dynamically insert javascript files
         */
        if (!empty($viewbag) && !empty($viewbag['page_scripts']) && is_array($viewbag['page_scripts'])) {
            foreach ($viewbag['page_scripts'] as $script) {
                echo "<script src='" . __relpath__ . "$script'></script>";
            }
        }
        ?>
    </body>
    </html>
