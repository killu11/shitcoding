<?php
namespace classes;

use traits\Singleton;

class DB
{
    use Singleton;

    private $connect;

    public function __construct()
    {

        $this->connect = $this->openConnect();

    }

    public function openConnect()
    {
        $path = __DIR__ . '/../config.php';
        if (!file_exists($path)) return null;

        $dbinfo = require $path;
        if ($connect = mysqli_connect($dbinfo['host'], $dbinfo['user'], $dbinfo['pass'], $dbinfo['db'])) {

            $_GET['db']=1;
            echo 'успешное подключение бд';

            return $connect;

        } else echo mysqli_error($connect);


    }

    public function select ($table, $content = [], $where = null)
    {

        $params = implode(',', $content);
        $sql = "SELECT {$params} FROM $table";

        if ($where) $sql .= " WHERE {$where}";

        $fetch = mysqli_query($this->connect, $sql);

        if($data = mysqli_fetch_assoc($fetch)) return $data;

        else print_r(mysqli_error($this->connect));


    }

}