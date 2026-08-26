<?php defined('SYSPATH') OR die('No direct script access.');

class Kohana_App {

    protected static $_model;

    private static $_instance = null;

    protected static $_app;
    
    const ADMIN = 1;
    const FRONTEND = 2;    
    const API = 3;

    protected static function _callEventMethod($object, $method, $classmethod)
    {
        if (method_exists($object, $method)) {
            $object->$method($classmethod);
        }
    }

    public static function instance()
    {
        if (self::$_instance === null) { 
            self::$_instance = new self;
        }
        return self::$_instance;
    }

    public static function model($classname, $loadsingleton = true)
    {
        if(!$loadsingleton) {
            return Model::factory($classname);
        }
        if(!isset(self::$_model[$classname])) {
            self::$_model[$classname] = Model::factory($classname);
        }
        return self::$_model[$classname];
    }


    public static function helper($classname)
    {
        require APPPATH.'classes/helpers/'.$classname.EXT;
        if($classname) {
            $name = 'helpers_'.$classname;            
            return new $name();
        }
        return false;
    }

    public static function t($string,$replace = [])
    {
        return __($string,$replace);
    }
    
}
