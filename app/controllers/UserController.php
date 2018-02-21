<?php
    namespace app\controllers;
    use app\models\User;
    use framework\core\base\View;
    use framework\libs\Functions;

    /**
     * Class UserController
     * @package app\controllers
     */
    class UserController extends AppController {
        /**
         * Переопределяем Шаблон для всего Контроллера
         *
         * @var string
         */
        public $layout = 'coreui';


        public function singupAction() {
            if(!empty($_POST)) {
                $user = new UserModel();
                $data = $_POST;
                $user->load($data);
                if(!$user->validate($data) || !$user->checkUnique()) {
                    $user->getErrors();
                    $_SESSION['form_data'] = $data;
                    Functions::redirect();
                }
                $user->attributes['password'] = password_hash($user->attributes['password'], PASSWORD_DEFAULT);
                if($user->save('user')) {
                    $_SESSION['success'] = 'Вы успешно зарегистрированы!';
                } else {
                    $_SESSION['error'] = 'Ошибка! Попробуйте позже!';
                }
                Functions::redirect(SITE);
            }
            View::setMeta('Регистрация');
        }


        public function loginAction() {
            if(!empty($_POST)) {
                $user = new User();
                if($user->login()) {
                    $_SESSION['success'] = 'Вы успешно авторизованы!';
                } else {
                    $_SESSION['error'] = 'Логин / Пароль введены не верно!';
                }
                Functions::redirect(SITE);
            }
        }


        public function logoutAction() {
            if(isset($_SESSION['user'])) unset($_SESSION['user']);
            Functions::redirect();
        }
    }