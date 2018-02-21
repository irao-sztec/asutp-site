<?php
    namespace framework\core;
    use \framework\libs\Functions;

    /**
     * Class Router
     * Класс Маршрутизатор
     *
     * @package vendor\core
     */
    class Router {
        /**
         *  Таблица маршрутов
         *
         * @var array
         */
        protected static $routes = [];

        /**
         * Текущий маршрут
         *
         * @var array
         */
        protected static $route = [];

        /**
         * Добавляет маршрут а таблицу маршрутов
         *
         * @param string $regexp - регулярное выражение маршрута
         * @param array  $route  - маршрут ( controller / action / params )
         */
        public static function add($regexp, $route = []) {
            self::$routes[$regexp] = $route;
        }

        /**
         * Возвращает таблицу маршрутов
         *
         * @return array
         */
        public static function getRoutes() {
            return self::$routes;
        }

        /**
         * Возвращает текущий маршрут
         *
         * @return array
         */
        public static function getRoute() {
            return self::$route;
        }

        /**
         * Ищет URL в таблице маршрутов
         *
         * @param string $url - Входящий URL
         *
         * @return bool
         */
        public static function matchRoute($url) {
            foreach(self::$routes as $pattern => $route) {
                if(preg_match("#$pattern#i", $url, $matches)) {
                    foreach ($matches as $key => $value) {
                        if (is_string($key)) {
                            $route[$key] = $value;
                        }
                    }
                    if (!isset($route['action'])) {
                        $route['action'] = 'index';
                    }
                    // Префикс для Администраторского сайта
                    if (!isset($route['prefix'])) {
                        $route['prefix'] = '';
                    } else {
                        $route['prefix'] .= '\\';
                    }
                    $route['controller'] = self::upperCamelCase($route['controller']);
                    self::$route = $route;
                    return true;
                }
            }
            return false;
        }

        /**
         * Перенаправляет URL по корректному маршруту
         *
         * @param string $url - Входящий URL
         *
         * @return void
         */
        public static function dispatch($url) {
            $url = self::removeQueryString($url);
            if (self::matchRoute($url)) {
                $controller = 'app\controllers\\'.self::$route['prefix'].self::$route['controller'].'Controller';
                if (class_exists($controller)) {
                    $cObj = new $controller(self::$route);
                    $action = self::lowerCamelCase(self::$route['action']).'Action';
                    if (method_exists($cObj, $action)) {
                        $cObj->$action();
                        $cObj->getView();
                    } else {
                        //echo "Метод <b>$controller::$action()</b> не найден.";
                        throw new \Exception("Метод <b>$controller::$action()</b> не найден.", 404);
                    }
                } else {
                    //echo "Котроллер <b>$controller</b> не найден.";
                    throw new \Exception("Котроллер <b>$controller</b> не найден.", 404);
                }
            } else {
                //http_response_code(404);
                //include WWW.'/error.php';
                throw new \Exception("Запрашиваемая вами страница не найдена", 404);
            }
        }

        /**
         * Делаем заглавными первые буквы в словах и соединяем их в одно слово
         * test-test => TestTest
         *
         * @param string $name
         *
         * @return string
         */
        protected static function upperCamelCase($name) {
            return str_replace(' ', '', ucwords(str_replace('-', ' ', $name)));
        }

        /**
         * Делаем заглавными первые буквы во всех словах, кроме первого и соединяем их в одно слово
         * test-test => testTest
         *
         * @param string $name
         *
         * @return string
         */
        protected static function lowerCamelCase($name) {
            return lcfirst(self::upperCamelCase($name));
        }

        /**
         * "Отрезаем" лишние GET-параметры
         *
         * @param string $url
         *
         * @return string
         */
        protected static function removeQueryString($url) {
            if ($url) {
                $params = explode('&', $url, 2);
                if (false === strpos($params[0], '=')) {
                    return rtrim($params[0], '/');
                } else {
                    return '';
                }
            }
        }
    }