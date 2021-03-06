<?php

/**
 * when writing an action you have a few things you can pass to the view to control it.
 * $_REQUEST variables are untouched, so you can use them like regular.
 * Use $pdo = db::getPDO(); to get a database connection. It's already included
 * return nothing if you don't need to change anything. It will default to
 * /views/{Controller}/{action}?{request}
 * return [
 *     'page_layout' => '/absolute/path/to/pageLayout'
 *          if no layout is specified, then is defaults to
 *          /views/_shared/_layout.php
 *          if you wanted a custom nav bar or need a different layout for one page
 *          you can specify it here and change what layout you use.
 *     'page_title' => 'page title in meta tags'
 *     'page_description' => 'page description in meta tags for SEO'
 *     'page_path' => '/abosolute/path/to/view'
 *          if no view is specified, then it defaults to
 *          /views/{controller}/{action}.php
 *     'page_css' => array ('/abosolute/path/to/css1','/abosolute/path/to/css2')
 *     'page_scripts' => array ('/abosolute/path/to/javascript1','/abosolute/path/to/javascript2')
 * ]
 * How Models work
 * /models/{controller}/{action}Model.php
 * It will be included on the page and can be used in the action of the controller
 * and on the view page.
 * When loading CSS and Javscript order matters. The first one in the array
 * are the first ones to get loaded.
 */
class home {

    public function index() {
        $index = new \home\index();
        $consumer = $index->getProductTable('consumer');
        $enterprise = $index->getProductTable('enterprise');
        return [
            'consumer' => $consumer,
            'enterprise' => $enterprise
        ];
    }

    public function contact() {
        $index = new \home\contact();
        $r = $index->getDbTest();
        return [
            'ourVar' => $r
        ];
    }

    public function connor_test() {
        $index = new \home\connor_test();
        $r = $index->getDBstuff();
        return [
            'ourVar' => $r
        ];
    }

    public function test() {

    }

    public function about() {
      return ['page_title' => 'About us',
              'page_description' => 'About dynauth'];
    }

    public function consumer() {

    }

    public function enterprise() {

    }

    public function security() {
        
    }

    public function dashboard() {
        session_start();
        if (empty($_SESSION['is_logged_in'])) {
            header('Location:/login');
            die();
        }
        require __ecom__ . "/models/home/indexModel.php";
        $indexModel = new home\index();
        $r = $indexModel->getSite($_SESSION['is_logged_in']["customer_id"]);
        $p = null;

        if(array_key_exists("sid", $_REQUEST) and array_key_exists("sid", $_REQUEST) and ($_REQUEST['sid'] !== 0 or !empty($_REQUEST['sid'])) and ($_REQUEST['cid'] !== 0 or !empty($_REQUEST['cid']))){
            $p = $indexModel->getSiteInfo($_REQUEST['sid'], $_REQUEST['cid']);
            // $p = array('ef' => 'efe');
        }
        return ['page_layout' => "/views/_shared/_dashboardLayout.php", 'passwords' => $r, 'password' => $p];
    }

    public function login() {
         $send = array('page_title' => "Dynauth Dashboard");
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $r =  $this->loginSubmit();
            $send = array_merge($send, $r);
        }
        session_start();
        if (!empty($_SESSION['is_logged_in'])) {
            header('Location:/dashboard');
            die();
        }
        return $send; 
    }

    public function logout(){
        session_start();
        session_destroy();
        $_SESSION = [];
        header('Location:/login');
    }

    public function loginSubmit() {
        require __ecom__ . "/models/home/indexModel.php";
        $indexModel = new home\index();
        // print_r($_POST);

        $email = !empty($_REQUEST['email']) ? $_REQUEST['email'] : '';
        $passwords = array();
        $tokens = explode(" - ", !empty($_REQUEST['authCheck']) ? $_REQUEST['authCheck'] : '');
        // print_r($tokens);
        foreach ($tokens as $key => $value) {
            $p = !empty($_REQUEST["dynauthInput" . ($key+1)]) ? $_REQUEST["dynauthInput" . ($key+1)] : '';
            if(array_key_exists($value."", $passwords)){
                array_push($passwords[$value.""], $p);

            }else{
                $passwords[$value.""] = array($p);
            }
           
        }

        if ($r = $indexModel->validLogin($email, $passwords)) {
            // print_r($r);
            session_start();
            $_SESSION['is_logged_in'] = $r;
            header('Location:/dashboard');
            die();
        } else {
            return ["Error" => "Invalid Login"];
        }
    }

    public function addPassword(){
        require __ecom__ . "/models/home/indexModel.php";
        $indexModel = new home\index();
        $url = !empty($_REQUEST['url']) ? $_REQUEST['url'] : '';
        $name = !empty($_REQUEST['name']) ? $_REQUEST['name'] : '';
        $username = !empty($_REQUEST['username']) ? $_REQUEST['username'] : '';
        $password = !empty($_REQUEST['password']) ? $_REQUEST['password'] : '';
        $cid = !empty($_REQUEST['cid']) ? $_REQUEST['cid'] : '';

        $result = false;
        if ($indexModel->addSitePassword($url, $name, $username, $password, $cid)) {
           header('Location:/dashboard');
           $result = true;
           // return ['success' => $result];
        } else {
            
        }
        
    }

    public function updatePassword(){
        require __ecom__ . "/models/home/indexModel.php";
        $indexModel = new home\index();
        $url = !empty($_REQUEST['url']) ? $_REQUEST['url'] : '';
        $name = !empty($_REQUEST['name']) ? $_REQUEST['name'] : '';
        $username = !empty($_REQUEST['username']) ? $_REQUEST['username'] : '';
        $password = !empty($_REQUEST['password']) ? $_REQUEST['password'] : '';
        $cid = !empty($_REQUEST['cid']) ? $_REQUEST['cid'] : '';
        $sid = !empty($_REQUEST['sid']) ? $_REQUEST['sid'] : '';

        $result = false;
        if ($indexModel->updateSitePassword($url, $name, $username, $password, $cid, $sid)) {
           header('Location:/dashboard');
           $result = true;
           // return ['success' => $result];
        } else {
            
        }
        
    }

    public function deleteSite(){
        require __ecom__ . "/models/home/indexModel.php";
        $indexModel = new home\index();
        $cid = !empty($_REQUEST['cid']) ? $_REQUEST['cid'] : '';
        $sid = !empty($_REQUEST['sid']) ? $_REQUEST['sid'] : '';

        $result = false;
        if ($indexModel->deleteSite($cid, $sid)) {
           header('Location:/dashboard');
           $result = true;
           // return ['success' => $result];
        } else {
            
        }
        
    }
    public function registerSubmit(){
        require __ecom__ . "/models/home/indexModel.php";
        $indexModel = new home\index();
        print_r($_POST);
        $result = false;
        
        
        if ($user = $indexModel->register($_POST)) {
            session_start();
            $_SESSION['is_logged_in'] = $user;
            header('Location:/dashboard');
            die();
           // return ['success' => $result];
        } 
        return ["Error" => "Invalid Registration"];
        
    }
    public function register(){
        $send = array('page_title' => "Dynauth Register");
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $r =  $this->registerSubmit();
            $send = array_merge($send, $r);
        }
        
        return $send; 
        
       
         
    }

    public function sitemap(){
        return ['page_title' => "Dynauth Sitemap"];
    }

    public function forgot(){
        return ['page_title' => "Forgot Password"];
    }
}
