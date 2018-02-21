<?php
    namespace framework\core\base;

    /**
     * Class View
     * Базовый класс Вида
     *
     * @package vendor\core\base
     */
    class View {
        /**
         * Текущий маршрут и параметры ( controller / action / params )
         *
         * @var array
         */
        public $route = [];


        protected $prefix = '';

        /**
         * Текущий Вид
         *
         * @var string
         */
        public $view;

        /**
         * Текущий Шаблон
         *
         * @var string
         */
        public $layout;

        /**
         * Скрипты
         *
         * @var array
         */
        public $scripts = [];

        /**
         * @var array
         */
        public static $meta = ['title' => '', 'description' => '', 'keywords' => ''];

        /**
         * View constructor.
         *
         * @param array  $route
         * @param string $layout
         * @param string $view
         */
        public function __construct($route, $layout = '', $view = '') {
            $this->route  = $route;
            if ($layout === false) {
                $this->layout = false;
            } else {
                $this->layout = $layout ?: LAYOUT;
            }
            $this->view   = $view;
        }

        /**
         * @param $vars
         */
        public function render($vars) {
            $this->route['prefix'] = str_replace('\\', '/', $this->route['prefix']);
            if (is_array($vars)) {
                extract($vars);
            }
            $file_view = VIEWS."/{$this->setPrefix()}{$this->route['controller']}/{$this->view}.php";
            ob_start();
            if (is_file($file_view)) {
                require $file_view;
            } else {
                //echo "Не найден вид <b>{$file_view}</b>";
                throw new \Exception("Не найден вид <b>{$file_view}</b>", 404);
            }
            $content = ob_get_clean();
            if (false !== $this->layout) {
                $file_layout = VIEWS . "/layouts/{$this->layout}.php";
                if (is_file($file_layout)) {
                    $content = $this->getScript($content);
                    $scripts = [];
                    if (!empty($this->scripts[0])) {
                        $scripts = $this->scripts[0];
                    }
                    require $file_layout;
                } else {
                    //echo "Не найден шаблон <b>{$file_layout}</b>";
                    throw new \Exception("Не найден шаблон <b>{$file_layout}</b>", 404);
                }
            }
        }

        /**
         * @param $content
         *
         * @return mixed
         */
        protected function getScript($content) {
            $pattern = "#<script.*?>.*?</script>#si";
            preg_match_all($pattern, $content, $this->scripts);
            if (!empty($this->scripts)) {
                $content = preg_replace($pattern, '', $content);
            }
            return $content;
        }

        /**
         *
         */
        public static function getMeta() {
            echo '<title>'.self::$meta['title'].'</title>';
            echo '<meta name="description" content="'.self::$meta['description'].'">';
            echo '<meta name="keywords" content="'.self::$meta['keywords'].'">';
        }

        /**
         * @param string $title
         * @param string $description
         * @param string $keywords
         */
        public static function setMeta($title = '', $description = '', $keywords = '') {
            self::$meta['title'] = $title;
            self::$meta['description'] = $description;
            self::$meta['keywords'] = $keywords;
        }

        /**
         * @return string
         */
        protected function setPrefix() {
            if (!empty($this->route['prefix'])) {
                return $this->prefix = str_replace('\\', '/', $this->route['prefix']);
            } else {
                return $this->prefix = '';
            }
        }
    }