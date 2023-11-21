<?php

namespace traits;

trait Singleton
{
    private static $instance;


    public static function getInstance()
    {
        if (self::$instance == null) return self::$instance = new self();

        return self::$instance;
    }

    private function __construct()
    {
    }
}