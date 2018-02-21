<?php
    namespace app\controllers;

    use app\models\MainModel;
    use framework\core\App;
    use framework\core\base\View;
    use framework\libs\Functions;

    /**
     * Class Bootstrap
     *
     * @package app\controllers
     */
    class BootstrapController extends AppController {
        /**
         * Переопределяем Шаблон для всего Контроллера
         *
         * @var string
         */
        public $layout = 'default-bootstrap';

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

        }


        public function topmenuAction() {
            /**
             * Переопределяем Шаблон для текущего Action'а
             */
            $this->layout = 'topmenu-bootstrap';

            /**
             * Отключаем Шаблон (пустая страница без оформления)
             */
            //$this->layout = false;

            /**
             * Переопределяем Вид для текущего Action'а
             */
            //$this->view   = 'index';

        }


        public function dashboardAction() {
            /**
             * Переопределяем Шаблон для текущего Action'а
             */
            $this->layout = 'dashboard-bootstrap';

            /**
             * Отключаем Шаблон (пустая страница без оформления)
             */
            //$this->layout = false;

            /**
             * Переопределяем Вид для текущего Action'а
             */
            //$this->view   = 'index';

        }


        public function articlesAction() {
            $articles = \R::findAll('doc_articles');
            $this->set(compact('articles'));
        }


        public function articleAction() {
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
            if (isset($this->route['alias'])) {
                $id = $this->route['alias'];
                if (is_numeric($id)) {
                    $articles = \R::findOne('doc_articles', "id = {$id}");
                    $this->set(compact('articles'));
                } else {
                    $articles = \R::findOne('doc_articles', "doc_article_link = ?", [$id]);
                    $this->set(compact('articles'));
                }
            } else {
                echo 'NOT ALIAS';
            }
        }
    }