<?php
    namespace libs\ORM;
    class Model {
        /**
         * Property that will dynamically contain all properties
         */
        private $data = array();

        function __construct($data = null) {
            $this->data = $data;
        }
        
        function __get($name) {
            return $this->data[$name];
        }                
        function __set($name, $value) {
            $this->data[$name] = $value;
        }

        
    }
?>