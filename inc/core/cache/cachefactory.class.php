<?php
require_once(ROOT . "inc/core/cache/cache.inc.php");

/**
 * 缓存机制工厂。
 */
class CacheFactory{
    private static $factory = null;
    private static $dict = array();
    
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
    
    /**
    * 返回缓存实现类的实现。
    */
    public function create(){
        $cache = null;
        $clazz = CACHE_CLASS_NAME;
        if (isset($clazz) && strlen($clazz) > 0) {
            if (!array_key_exists($clazz, self::dict)) {
                require_once(ROOT . "inc/core/cache/" . strtolower($clazz) . ".class.php");
                self::dict[$clazz] = new $clazz();
            }
            $cache = self::dict[$clazz];
        }
        return $cache;
    } 
}
 ?>
