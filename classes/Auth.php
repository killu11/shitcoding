<?php
//если данные которые мы отправляем из формы совпадают с данными в бд то проверяем записаны ли они в сессии, если нет, то записываем их и входим...
namespace classes;

class Auth

{

    private $login;
    private $pass;


    public function isAuth () {
        if(isset($_SESSION['is_auth'])) return $_SESSION['is_auth'];

        else return false;
    }


    public function __set($name, $value)
    {
        $this->login = $value;
        $this->pass = $value;
    }

    public function authorization () {

    }

    public function exist () {

    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }
}