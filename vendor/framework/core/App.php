<?php
    namespace framework\core;

    use \framework\core\Registry;
    use \framework\core\ErrorHandler;

    /**
     * Class App
     *
     * @package vendor\core
     */
    class App {
        /**
         * @var TSingletone
         */
        public static $app;

        /**
         * App constructor.
         */
        public function __construct() {
            session_start();
            self::$app = Registry::instance();
            new ErrorHandler();
        }
    }