<?php
    namespace framework\libs;

    /**
     * Class Functions
     *
     * @package vendor\libs\Functions
     */
    class Functions {

        public static function debug($array) {
            echo '<pre>'.print_r($array, true).'</pre>';
        }


        public static function redirect($http = false) {
            if($http) {
                $redirect = $http;
            } else {
                $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : SITE;
            }
            header("Location: $redirect");
            exit;
        }


        public static function h($str) {
            return htmlspecialchars($str, ENT_QUOTES);
        }
    }