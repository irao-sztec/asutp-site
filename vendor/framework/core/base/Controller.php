<?php
    namespace framework\core\base;


    /**
     * Class Controller
     * Базовый класс Контроллера
     *
     * @package vendor\core\base
     */
    abstract class Controller {
        /**
         * Текущий маршрут и параметры ( controller / action / params )
         *
         * @var array
         */
        public $route = [];

        /**
         * Текущий Шаблон
         *
         * @var string
         */
        public $layout;

        /**
         * Вид
         *
         * @var string
         */
        public $view;

        /**
         * Данные для передачи в Вид
         *
         * @var array
         */
        public $vars = [];

        /**
         * Controller constructor.
         * Конструктор контроллера
         *
         * @param array $route
         */
        public function __construct($route) {
            $this->route = $route;
            $this->view  = $route['action'];
        }

        /**
         *
         */
        public function getView() {
            $vObj = new View($this->route, $this->layout, $this->view);
            $vObj->render($this->vars);
        }

        /**
         * @param $vars
         */
        public function set($vars) {
            $this->vars = $vars;
        }

        /**
         * @return bool
         */
        public function getIsAjax() {
            return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';
        }

        /**
         * @param       $view
         * @param array $vars
         */
        public function loadView($view, $vars = []){
            extract($vars);
            require VIEWS."/{$this->route['controller']}/{$view}.php";
        }
    }