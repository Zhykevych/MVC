<?php
/**
 * Created by PhpStorm.
 * User: Exon
 * Date: 27.02.2016
 * Time: 16:02
 */

class Config{

    protected static $settings = array();

    public static function get($key){
        return isset(self::$settings[$key]) ? self::$settings[$key] : null;
    }

    public static function set($key, $value){
        self::$settings[$key] = $value;
    }

}