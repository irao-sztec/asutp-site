<?php
    namespace app\controllers;

    use app\models\MainModel;
    use framework\core\App;
    use framework\core\base\View;
    use framework\libs\Functions;
    use workerman\worker;
    /**
     * Class CoreUI
     *
     * @package app\controllers
     */
    class CoreuiController extends AppController {
        /**
         * Переопределяем Шаблон для всего Контроллера
         *
         * @var string
         */
        public $layout = 'coreui';

        /**
         * Переопределяем Вид для всего контроллера
         *
         * @var string
         */
        //public $view = 'index';

        /**
         *
         */
        public function indexAction() {
            /**
             * Переопределяем Шаблон для текущего Action'а
             */
            //$this->layout = '';

            /**
             * Отключаем Шаблон (пустая страница без оформления)
             */
            //$this->layout = false;

            /**
             * Переопределяем Вид для текущего Action'а
             */
            //$this->view   = 'index';

        }
    }