<?php

/**
 * __relname__ is the relative name for the place you set this code into.
 * if you have /public_html/ecom/{code}
 * Then ecom would the the relname
 */
define("__relname__", "");
/* Make sure to name your directory that holds the top level domain to relname
 * since $_SERVER[DOCUMENT_ROOT] returns /var/www/html and not 
 * /home/fall16/{username}/public_html/{relname}
 * The getcwd() is a work around.
 */
define("__ecom__", $_SERVER["DOCUMENT_ROOT"]);
/**
 * __relpath__ gets the /~qward1 part of the path so you can do absolute paths
 * on css and javascript
 */
define("__relpath__", __relname__);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function run() {
    $viewbag = null;
    /* Get the URL and parse it into the controller and view */
    $request = [null, null];
    $request = (isset($_GET['request']) ? explode('/', $_GET['request']) : null);
$request[1] = $request[0];
$request[0] = 'home';
    if (empty($request[1]) && empty($request[0])) {
        /* if no URI passed. Then send to home index */
        $request[0] = 'home';
        $request[1] = 'index';
    } elseif (!empty($request[0]) && empty($request[1])) {
        /* if no action is passed, send to index */
        $request[1] = 'index';
    }
    if (file_exists(__ecom__ . "/controllers/$request[0]Controller.php")) {
        /* include the database connection on every page */
        require __ecom__ . "/models/_shared/db.php";
        if (file_exists(__ecom__ . "/models/$request[0]/$request[1]Model.php")) {
            /* if there is a model for this page, the include it */
            require __ecom__ . "/models/$request[0]/$request[1]Model.php";
        }
        /* include the controller */
        require __ecom__ . "/controllers/$request[0]Controller.php";
        /* construct the controller and use the action. */
        $controller = new $request[0]();
        $viewbag = $controller->{$request[1]}();
        /* get the count of the products in the shopping cart for the navbar */
        if (empty($viewbag['page_path'])) {
            $viewbag['page_path'] = "/views/$request[0]/$request[1].php";
        }
        if (!empty($viewbag['page_layout']) && $viewbag['page_layout'] == 'none') {
            
        } elseif (empty($viewbag['page_layout'])) {
            /* use default page layout */
            require __ecom__ . "/views/_shared/_layout.php";
        } else {
            /* use controller defined layout */
            require __ecom__ . "$viewbag[page_layout]";
        }
    } else {
        echo '404 File does not exist';
    }
    return $viewbag;
}

$viewbag = run();
