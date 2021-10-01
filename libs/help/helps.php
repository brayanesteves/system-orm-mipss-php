<?php
    /**
     * Function that allows us to include the models dynamically
     */
    function includeModels() {
        $directory = opendir(MODELS);
        while($file = readdir($directory)) {
            if(!is_dir($file)) {
                require_once MODELS . $file;
            }
        }
    }

    /**
     * This function will help us to return an 'assets' 
     * $assets: Name of the file inside the 'assets' folder
     */
    function assets($assets) {
        $urlmain = trim(str_replace("index.php", "", $_SERVER['PHP_SELF']), "/");
        echo "/" . $urlmain . "/assets/" . $assets;
    }
    /**
     * Function that allows redirection to another part 
     * $route: Route to where we want to go
     */
    function redirect($route) {
        $urlmain = str_replace("index.php", "", $_SERVER['PHP_SELF']);
        header("location:/" . trim($urlmain, "/") . "" . $route);
    }

    /**
     * Function that allows us to write a 'URL' through which we pass it 
     * $route: Route to where to go
     */
    function url($route) {
        $urlmain = str_replace("index.php", "", $_SERVER['PHP_SELF']);
        echo "/" . trim($urlmain, "/") . "/" . $route;
    }

    /**
     * Function creating the 'csrf' for validation - token
     */
    session_start();
    function csrf_token() {
        if(isset($_SESSION["token"])) {
            unset($_SESSION["token"]);
        }
        $csrf_token = md5(uniqid(mt_rand(), true));
        $_SESSION["csrf_token"] = $csrf_token;
        echo $csrf_token;
    }
?>