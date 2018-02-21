<?php
    namespace framework\core;

    /**
     * Class Db
     *
     * @package vendor\core
     */
    class Db {

        use TSingletone;

        /**
         * @var \PDO
         */
        protected $pdo;

        /**
         * Количество выполненых запросов
         *
         * @var int
         */
        public static $countSql = 0;

        /**
         * Массив выполненых запросов
         *
         * @var array
         */
        public static $queries = [];

        /**
         * Db constructor.
         */
        protected function __construct() {
            $db = require ROOT.'/config/config_db.php';

            require LIBS.'/rb.php';
            \R::setup($db['dsn'], $db['user'], $db['pass']);
            \R::freeze(true);
            //\R::fancyDebug(true);

            //$options = [
            //    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            //    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
            //];
            //$this->pdo = new \PDO($db['dsn'], $db['user'], $db['pass'], $options);
        }

        /**
         * @param  string $sql
         * @param  array  $params
         *
         * @return bool
         */
        //public function execute($sql, $params = []) {
        //    self::$countSql++;
        //    self::$queries[] = $sql;
        //    $stmt = $this->pdo->prepare($sql);
        //    return $stmt->execute($params);
        //}

        /**
         * @param  string $sql
         * @param  array  $params
         *
         * @return array
         */
        //public function query($sql, $params = []) {
        //    self::$countSql++;
        //    self::$queries[] = $sql;
        //    $stmt = $this->pdo->prepare($sql);
        //    $res = $stmt->execute($params);
        //    if ($res !== false) {
        //        return $stmt->fetchAll();
        //    }
        //    return [];
        //}
    }