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
             * Fake data
             */
            $users = array(
                1 => array(
                    "name"     => "Brayan",
                    "lastanme" => "Esteves"
                ),
                2 => array(
                    "name"     => "Otniel",
                    "lastanme" => "Ponce"
                ),
                3 => array(
                    "name"     => "Jhou",
                    "lastanme" => "Pastor Alemán"
                ),
                4 => array(
                    "name"     => "Nerón",
                    "lastanme" => "Pitbull"
                ),
                5 => array(
                    "name"     => "Brandon",
                    "lastanme" => "Pitbull"
                ),
            );
            /**
             * Example: 
             * 'users.list.index'
             * 1) 'users' => 'folder'
             * 2) 'list'  => 'folder'
             * 3) 'index' => file .php or .html
             */
            return Views::create("users.list", "users", array("users" => $users));
        }
        public function insert() {
            echo "A";
        }
    }
?>