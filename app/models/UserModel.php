<?php
    namespace app\models;
    use framework\core\base\Model;

    /**
     * Class User
     * @package app\models
     */
    class UserModel extends Model {

        public $attributes = [
            'login' => '',
            'password' => '',
            'name' => '',
            'email' => ''
        ];

        public $rules = [
            'required' => [
                ['login'],
                ['password'],
                ['name'],
                ['email']
            ],
            'email' => [
                ['email']
            ],
            'lengthMin' => [
                ['password', 6]
            ]
        ];

        /**
         * @return bool
         */
        public function checkUnique() {
            $user = \R::findOne('user', 'login = ? OR email = ? LIMIT 1', [$this->attributes['login'], $this->attributes['email']]);
            if($user) {
                if($user->login == $this->attributes['login']) {
                    $this->errors['unique'][] = 'Этот ЛОГИН уже занят';
                }
                if($user->email == $this->attributes['email']) {
                    $this->errors['unique'][] = 'Этот EMAIL уже занят';
                }
                return false;
            }
            return true;
        }


        public function login() {
            $login = !empty(trim($_POST['login'])) ? trim($_POST['login']) : null;
            $password = !empty(trim($_POST['password'])) ? trim($_POST['password']) : null;

            if($login && $password) {
                $user = \R::findOne('user', 'login = ? LIMIT 1', [$login]);
                if($user) {
                    if(password_verify($password, $user->password)) {
                        foreach($user as $key => $value) {
                            if($key != 'password') $_SESSION['user'][$key] = $value;
                        }
                        return true;
                    }
                }
            }
            return false;
        }
    }