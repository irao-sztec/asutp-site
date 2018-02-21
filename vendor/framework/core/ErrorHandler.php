<?php
    namespace framework\core;

    /**
     * Class ErrorHandler
     * @package vendor\core
     */
    class ErrorHandler {
        /**
         * ErrorHandler constructor.
         */
        public function __construct() {
            if (DEBUG) {
                error_reporting(-1);
            } else {
                error_reporting(0);
            }
            set_error_handler([$this, 'errorHandler']);
            ob_start();
            register_shutdown_function([$this, 'fatalErrorHandler']);
            set_exception_handler([$this, 'exceptionHandler']);
        }

        /**
         * @param int    $errorNumber - Номер ошибки
         * @param string $errorString - Текст ошибки
         * @param string $errorFile   - Файл, где произошла ошибка
         * @param int    $errorLine   - Номер строки, где находится ошибка
         *
         * @return bool
         */
        public function errorHandler($errorNumber, $errorString, $errorFile, $errorLine) {
            $this->logErrors($errorString, $errorFile, $errorLine);
            if (DEBUG || in_array($errorNumber, [E_USER_ERROR, E_RECOVERABLE_ERROR])) {
                $this->displayError($errorNumber, $errorString, $errorFile, $errorLine);
            }

            return true;
        }

        /**
         *
         */
        public function fatalErrorHandler() {
            $error = error_get_last();
            if (!empty($error) AND $error['type'] & (E_ERROR | E_PARSE | E_COMPILE_ERROR | E_CORE_ERROR)) {
                $this->logErrors($error['message'], $error['file'], $error['line']);
                ob_get_clean();
                $this->displayError($error['type'], $error['message'], $error['file'], $error['line']);
            } else {
                ob_end_flush();
            }
        }

        /**
         * @param $e
         */
        public function exceptionHandler(\Exception $e) {
            $this->logErrors($e->getMessage(), $e->getFile(), $e->getLine());
            $this->displayError('Исключение', $e->getMessage(), $e->getFile(), $e->getLine(), $e->getCode());
        }

        /**
         * @param string $message
         * @param string $file
         * @param string $line
         */
        protected function logErrors($message = '', $file = '', $line = '') {
            error_log("[ ".date('Y-m-d H:i:s')." ]  ||  Текст ошибки: {$message}  ||  Файл: {$file}  ||  Строка: {$line}\n*** *** *** *** ***\n", 3, LOGS.'/'.date('Y-m').'_-_errors.log');
        }

        /**
         * @param int    $errorNumber - Номер ошибки
         * @param string $errorString - Текст ошибки
         * @param string $errorFile   - Файл, где произошла ошибка
         * @param int    $errorLine   - Номер строки, где находится ошибка
         * @param int    $response    - Код ответа сервера, по умолчанию выставляем 500
         */
        protected function displayError($errorNumber, $errorString, $errorFile, $errorLine, $response = 500) {
            http_response_code($response);
            if ($response == 404 && !DEBUG) {
                require WWW.'/errors/404.php';
            }
            if (DEBUG) {
                require WWW.'/errors/dev.php';
            } else {
                require WWW.'/errors/prod.php';
            }
            die;
        }
    }