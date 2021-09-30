<?php
    /**
     * Created by Visual Studio Code
     * User: Brayan Esteves [VE]
     * Date: 30/09/2021
     * Time: 13:44 
     */
    namespace libs\ORM;
    class EtORM extends \Connection {

        protected static $cnnctn;
        /**
         * Recover table
         */
        protected static  $table;

        function __construct() {
            /**
             * Execute every time the class is invoked by means of an object
             */
            self::getConnect();
        }

        public static function getConnect() {
            self::$cnnctn = \Connection::connect();
        }

        public static function getTable() {
            echo static::$table;
        }

        public function save() {
            $values   = $this->getColumns();
            $filtered = null;
            foreach ($values as $key => $value) {
                /**
                 * 
                 */
                if($value !== null && !is_integer($key) && $value !== '' && strpos($key, 'obj_') === false && $key !== 'Rfrnc') {
                    if($value === false) {
                        $value = 0;
                    }
                    $filtered[$key] = $value;
                    // echo $key . " - " . $value;
                }
                // echo $key . "<br />";
            }
            $columns = array_keys($filtered);
            // echo json_encode($columns);

            /**
             * Field 'Rfrnc' (Integer) Auto Increment
             */
            if($this->Rfrnc) {
                $params = "";
                foreach($columns as $column) {
                    $params .= $column . " = :" . $column . ",";
                }
                $params = trim($params, ",");
                $query  = "UPDATE " . static::$table . " SET $params WHERE `Rfrnc` = " . $this->Rfrnc;
                // echo $query;
            } else {
                $params  = join(", :", $columns);
                $params  = ":" . $params;
                $columns = join(", ", $columns);
                $query   = "INSERT INTO " . static::$table . " ($columns) VALUES ($params)";
                // echo $query;
            }
            /**
             * Let's prepare the query
             */
            self::getConnect();
            $response = self::$cnnctn->prepare($query);
            /**
             * We load all the values of the parameters.
             */
            foreach($filtered as $key => &$val) {                
                $response->bindParam(":" . $key, $val);
            }
            /**
             * We made a response
             */
            if($response->execute()) {
                $this->Rfrnc   = self::$connctn->lastInsertId();
                self::$connctn = null;
                return true;
            } else {
                return false;
            }
        }
        
    }
?>