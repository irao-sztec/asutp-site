<?php
    namespace framework\core\base;

    use \framework\core\Db;
    use framework\libs\Functions;
    use Valitron\Validator;

    /**
     * Class Model
     * Базовый класс Модели
     *
     * @package vendor\core\base
     */
    class Model {
        /**
         * @var Db
         */
        protected $pdo;

        /**
         * @var
         */
        protected $table;

        /**
         * Имя первичного ключа, для поиска в таблице
         *
         * @var string
         */
        protected $pk = 'id';

        /**
         *
         *
         * @var array
         */
        public $attributes = [];

        /**
         *
         *
         * @var array
         */
        public $errors = [];

        /**
         *
         *
         * @var array
         */
        public $rules = [];

        /**
         * Model constructor.
         */
        public function __construct() {
            $this->pdo = Db::instance();
        }

        /**
         * @param $data
         */
        public function load($data) {
            foreach($this->attributes as $key => $value) {
                if(isset($data[$key])) {
                    $this->attributes[$key] = $data[$key];
                }
            }
        }

        /**
         * @param $data
         *
         * @return bool
         */
        public function validate($data) {
            Validator::lang('ru');
            $v = new Validator($data);
            $v->rules($this->rules);

            if($v->validate()) {
                return true;
            }
            $this->errors = $v->errors();
            return false;
        }


        public function save($table) {
            $tbl = \R::dispense($table);
            foreach($this->attributes as $key => $value) {
                $tbl->$key = $value;
            }
            return \R::store($tbl);
        }


        public function getErrors() {
            //Functions::debug($this->errors);
            $errors = '<ul>';
            foreach($this->errors as $error) {
                foreach($error as $item) {
                    $errors .= "<li>$item</li>";
                }
            }
            $errors .= '</ul>';
            $_SESSION['error'] = $errors;
        }

        /**
         * Выполнение действий в таблице, которые дают ответ Да/Нет
         *
         * @param  string $sql
         *
         * @return bool
         */
        public function query($sql) {
            return $this->pdo->execute($sql);
        }

        /**
         * Поиск всех элементов в таблице
         *
         * @return array
         */
        public function findAll() {
            $sql = "SELECT * FROM {$this->table}";
            return $this->pdo->query($sql);
        }

        /**
         * Поиск одного элемента в таблице
         *
         * @param        $id
         * @param string $field
         *
         * @return array
         */
        public function findOne($id, $field = '') {
            $field = $field ?: $this->pk;
            $sql = "SELECT * FROM {$this->table} WHERE {$field} = ? LIMIT 1";
            return $this->pdo->query($sql, [$id]);
        }

        /**
         * Выполнение любого пользовательского запроса
         *
         * @param        $sql
         * @param  array $params
         *
         * @return array
         */
        public function findBySql($sql, $params = []) {
            return $this->pdo->query($sql, $params);
        }

        /**
         * Поиск чего-либо по любой части слова (значения)
         *
         * @param  string $str   - Что ищем
         * @param  string $field - Где ищем (столбец)
         * @param  string $table - В какой таблице (опционально)
         *
         * @return array
         */
        public function findLike($str, $field, $table = '') {
            $table = $table ?: $this->table;
            $sql = "SELECT * FROM $table WHERE $field LIKE ?";
            return $this->pdo->query($sql, ['%'.$str.'%']);
        }
    }