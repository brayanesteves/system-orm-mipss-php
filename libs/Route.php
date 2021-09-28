<?php
    /**
     * Created by Visual Studio Code
     * User: Brayan Esteves [VE]
     * Date: 28/09/2021
     * Time: 01:39 PM
     * 
     * Read routes, config @file 'app/routes/'
     */
    class Route {
        // Method that allows us to enter drivers with their respective routes
        private $_controllers = array();
        public function controllers($controller) {
            $this->_controllers = $controller; 
            /**
             * Call to the method that makes the route process
             * The class (Path) is called every time a page is reloaded or opened in the application
             * 
             * - (this)    Reference to the class instantiated object
             * - (self: :) Reference to current class
             */
            self::submit();
        }

        /**
         * Function or method that is executed each time the request is sent in the URL
         */
        public function submit() {
            /**
             * They are the GET ['url'] requests made on our app             * 
             * Retrieve URL
             */
            $url = isset($_GET['url']) ? $_GET['url'] : "/";
            /**
             * It will store the GET ['url] array divided by "/"
             * Split the url into parts and form an array
             */
            $paths = explode("/", $url);
            /**
             * Make a conditional to find out if it is in a controller or in the main route
             */
            if($url == "/") {
                /**
                 * Main
                 * Searching if the path (/) exists in the array of _controllers
                 */
                $response = array_key_exists("/", $this->_controllers);
                /**
                 * Checking
                 */
                if($response != "" && $response == 1) {
                    /**
                     * $route => $controller or also $key => $value the array
                     * 
                     * Looping through the _controllers
                     */
                    foreach($this->_controllers as $route => $controller) {
                        /**
                         * We check whether the routes are the same
                         */
                        if($route == "/") {
                            /**
                             * We assign a variable the path of the controller
                             */
                            $Storecontroller = $controller;
                        }
                    }
                    $this->getController();
                }
            } else {
                /**
                 * Controllers and Methods
                 */
                
            }

        }
    }
?>