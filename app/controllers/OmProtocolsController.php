<?php
    namespace app\controllers;

    use app\models\OmProtocolsModel;
    use framework\core\App;
    use framework\core\base\View;
    use framework\libs\Functions;
    use Monolog\Handler\StreamHandler;
    use Monolog\Logger;
    use PHPMailer\PHPMailer\PHPMailer;

    /**
     * Class Om-Protocols
     *
     * @package app\controllers
     */
    class OmProtocolsController extends AppController {
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
            $this->layout = 'coreui';

            /**
             * Отключаем Шаблон (пустая страница без оформления)
             */
            //$this->layout = false;

            /**
             * Переопределяем Вид для текущего Action'а
             */
            //$this->view   = 'index';

            //$model = new OmProtocolsModel;
            $curdate = getdate();

            View::setMeta('Протоколы OM-650', 'Описание главной страницы', 'Ключевые слова главной страницы');
            $this->set(compact('curdate'));
        }


        public function tableAction()
        {
            /**
             * Переопределяем Шаблон для текущего Action'а
             */
            $this->layout = 'coreui';

            /**
             * Отключаем Шаблон (пустая страница без оформления)
             */
            //$this->layout = false;

            /**
             * Переопределяем Вид для текущего Action'а
             */
            //$this->view   = 'index';

            $model = new OmProtocolsModel;

            //Functions::debug($_POST);

            if(isset($_POST['object']) && $_POST['object'] === 'unit0') {
                $u0 = $model->u0();
                $values = \R::getAll($u0);
            }

            $this->set(compact('values'));

        }


        public function helpAction() {
            /**
             * Переопределяем Шаблон для текущего Action'а
             */
            $this->layout = 'coreui';

            /**
             * Отключаем Шаблон (пустая страница без оформления)
             */
            //$this->layout = false;

            /**
             * Переопределяем Вид для текущего Action'а
             */
            //$this->view   = 'index';

            //$model = new OmProtocolsModel;

        }
    }