<?php 
    class Connection {
        private static $instance;

        public static function getConnection() {
            if (!self::$instance) {
                self::$instance = new mysqli(
                    "127.0.0.1",
                    "root",
                    "",
                    "crud_php"
                );
            }

            return self::$instance;
        }
    }
?>