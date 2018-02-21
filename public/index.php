<?php
    use framework\core\Router;
    use framework\libs\Functions;

    error_reporting(E_ALL);

    $query = rtrim($_SERVER['QUERY_STRING'], '/');
    print_r($query);

    define('VERSION', '1.0-alpha');

    define('CONTROLLERS', dirname(__DIR__).'/app/controllers');
    define('MODELS', dirname(__DIR__).'/app/models');
    define('VIEWS', dirname(__DIR__).'/app/views');
    define('LAYOUT', 'default');

    define('ROOT', dirname(__DIR__));
    define('CONFIG', dirname(__DIR__).'/config');
    define('CACHE', dirname(__DIR__).'/tmp/cache');
    define('LOGS', dirname(__DIR__).'/tmp/logs');

    define('CORE', dirname(__DIR__).'/vendor/framework/core');
    define('LIBS', dirname(__DIR__).'/vendor/framework/libs');
    define('WIDGETS', dirname(__DIR__).'/vendor/framework/widgets');

    define('WWW', __DIR__);

    if(isset($_SERVER['HTTPS'])) {
        define('SITE', 'https://asutp.dev');
    } else {
        define('SITE', 'http://asutp.dev');
    }

    define('DEBUG', 1);

    require ROOT.'/vendor/autoload.php';

    new \framework\core\App;

    Router::add('^page/?(?P<action>[a-z-]+)/?(?P<alias>[a-z-]+)$', ['controller' => 'Page']);
    Router::add('^page/?(?P<alias>[a-z-]+)$', ['controller' => 'Page', 'action' => 'view']);

    Router::add('^(?P<controller>[a-z-]+)?/?(?P<action>[a-z-]+)?/?(?P<alias>[0-9a-z-]+)?$');

    /**
     * Default Routes
     */
    Router::add('^admin$', ['controller' => 'User', 'action' => 'index', 'prefix' => 'admin']);
    Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);

    Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
    Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

    Router::dispatch($query);