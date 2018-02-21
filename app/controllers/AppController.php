<?php
    namespace app\controllers;

    use framework\core\base\Controller;
    use app\models\MainModel;


    class AppController extends Controller {

        public $menu;


        public $meta = [];


        public function __construct($route) {
            parent::__construct($route);
            //$model = new MainModel;
            //$this->menu = \R::findAll('category');
        }

        protected function setMeta($title = '', $description = '', $keywords = '') {
            $this->meta['title'] = $title;
            $this->meta['description'] = $description;
            $this->meta['keywords'] = $keywords;
        }
    }