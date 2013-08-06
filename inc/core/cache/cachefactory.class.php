<?php
require_once(ROOT . "inc/core/cache/cache.inc.php");
require_once(ROOT . "inc/core/cache/sinasaememcache.class.php");

/**
 * 缓存机制工厂。
 */
class CacheFactory{
    private static $factory = null;
    
    /**
     * 获取单例模式的工厂实例。
     * @return 缓存机制工厂的实例。
     */
    public static function getIntance(){
        if(!self::$factory){
            self::$factory = new self();
        }
        return self::$factory;
    }
    
    public function create(){
        //return new SinaSAEMemcache();
        return null;
    } 
}
 ?>
