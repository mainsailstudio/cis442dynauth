<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?= empty($viewbag['page_description']) ? '' : $viewbag['page_description'] ?>">
        <meta name="keywords" content="<?= empty($viewbag['page_keywords']) ? '' : $viewbag['page_keywords'] ?>">
        <meta name="author" content="Quinton Ward">

        <title><?= empty($viewbag['page_title']) ? 'Test' : $viewbag['page_title'] ?></title>

        <link href="<?= __relpath__ ?>/public/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= __relpath__ ?>/public/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= __relpath__ ?>/public/css/connor.css" rel="stylesheet" type="text/css"/>
        <link href="<?= __relpath__ ?>/public/css/evan.css" rel="stylesheet" type="text/css"/>
        <link href="<?= __relpath__ ?>/public/css/quinton.css" rel="stylesheet" type="text/css"/>
        <link href="<?= __relpath__ ?>/public/css/sam.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!empty($viewbag['page_css']) && is_array($viewbag['page_css'])) {
            foreach ($viewbag['page_css'] as $css) {
                echo "<link href='" . __relpath__ . "$css' rel='stylesheet' type='text/css'>";
            }
        }
        ?>
    </head>
    <body>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?= __relpath__ ?>/">Home</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="<?= __relpath__ ?>/test">Test</a></li>
                        <li><a href="<?= __relpath__ ?>/about">About Us</a></li>
                        <li><a href="<?= __relpath__ ?>/dashboard">Dashboard</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <?php require __ecom__ . "$viewbag[page_path]"; ?>
        <script src="<?= __relpath__ ?>/public/vendors/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="<?= __relpath__ ?>/public/vendors/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?= __relpath__ ?>/public/js/connor.js" type="text/javascript"></script>
        <script src="<?= __relpath__ ?>/public/js/evan.js" type="text/javascript"></script>
        <script src="<?= __relpath__ ?>/public/js/quinton.js" type="text/javascript"></script>
        <script src="<?= __relpath__ ?>/public/js/sam.js" type="text/javascript"></script>
        <?php
        if (!empty($viewbag) && !empty($viewbag['page_scripts']) && is_array($viewbag['page_scripts'])) {
            foreach ($viewbag['page_scripts'] as $script) {
                echo "<script src='" . __relpath__ . "$script'></script>";
            }
        }
        ?>
    </body>
</html>
