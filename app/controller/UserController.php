<?php
    /**
     * Created by Visual Studio Code
     * User: Brayan Esteves [VE]
     * Date: 28/09/2021
     * Time: 08:39 PM  
     */
    use View\Views;
    class UserController {
        public function index() {
            /**
             * Example: 
             * 'users.list.index'
             * 1) 'users' => 'folder'
             * 2) 'list'  => 'folder'
             * 3) 'index' => file .php or .html
             */
            return Views::create("users.list");
        }
        public function insert() {
            echo "A";
        }
    }
?>