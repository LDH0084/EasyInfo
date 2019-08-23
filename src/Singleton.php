<?php
/**
 * Created by PhpStorm.
 * User: landehua
 * Date: 2019/8/23
 * Time: 16:12
 */

namespace EasyInfo;


trait Singleton
{
    private static $instance;

    static function getInstance(...$args)
    {
        if(!isset(self::$instance)){
            self::$instance = new static(...$args);
        }
        return self::$instance;
    }
}
