<?php
    /**
     * Created by Visual Studio Code
     * User: Brayan Esteves [VE]
     * Date: 29/09/2021
     * Time: 12:19 PM 
     * 
     * The @class 'Views' will help us to create views through the instance of it 
     * @namespace In its most widely accepted definition, namespaces are a way of encapsulating elements
     */
    namespace View;
    class Views {
        /**
         * 
         */
        public static function create($path) {
            /**
             * We check if the variable exists $path
             */
            if($path != "") {
                /**
                 * We convert to an array separated by points
                 * Example: 
                 * 'users.list.index'
                 * 1) 'users' => 'folder'
                 * 2) 'list'  => 'folder'
                 * 3) 'index' => file .php or .html
                 */
                $paths = explode('.', $path);
                /**
                 * Initialize
                 */
                $route = "";
                /**
                 * Loop through variable $paths
                 */
                for($i = 0; $i < count($paths); $i++)  {
                    /**
                     * We check if it is the last
                     * Example: 
                     * 'users.list.index' => 'users/list/index'
                     */
                    if($i == count($paths) - 1) {
                        /**
                         * If it is, we assign it '.php'
                         * Example: 
                         * 'users.list.index' => 'users/list/index.php'
                         */
                        $route .= $paths[$i] . ".php";
                    } else {
                        /**If it is not the last one, we will concatenate it '/'
                         * Example: 
                         * 'users.list.index' => 'users/list/'
                         */
                        $route .= $paths[$i] . "/";
                    }
                }

                /**
                 * Check if that file exists
                 */
                if(file_exists(VIEWS_ROUTE . $route)) {
                    include VIEWS_ROUTE . $route;
                } else {
                    die("The path does not exist");
                }
            }
        }        
    }
?>