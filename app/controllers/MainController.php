<?php
    namespace app\controllers;

    use app\models\MainModel;
    use framework\core\App;
    use framework\core\base\View;
    use framework\libs\Functions;
    use Monolog\Handler\StreamHandler;
    use Monolog\Logger;
    use PHPMailer\PHPMailer\PHPMailer;

    /**
     * Class Main
     *
     * @package app\controllers
     */
    class MainController extends AppController {
        /**
         * Переопределяем Шаблон для всего Контроллера
         *
         * @var string
         */
        //public $layout = 'posts';

        /**
         * Переопределяем Вид для всего контроллера
         *
         * @var string
         */
        //public $view = 'index';


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

            //$model = new MainModel;

            View::setMeta('Главная страница', 'Описание главной страницы', 'Ключевые слова главной страницы');
        }
    }