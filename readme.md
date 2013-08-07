# PHP缓存机制框架说明 #

## 项目依赖 ##
无。

## 使用说明 ##
 * 由静态常量CACHE_CLASS_NAME定义框架使用的缓存机制实现类。
 * 也可以在调用缓存机制工厂类时，根据需要指定特定的实现，如CacheFactory:create('SinaSAEMemcache');
 * 缓存机制实现类包括：
 	* SinaSAEMemcache：新浪SAE缓存机制实现类
 * 缓存机制实现类枚举对应关系如下：
 	* CACHE_TYPE_SINASAEMEMCACHE：SinaSAEMemcache

## 作者信息 ##
 * 电子邮件：peigong@foxmail.com
 * 微博地址：[http://weibo.com/u/3030510210](http://weibo.com/u/3030510210)
 * 博客地址：[http://www.peigong.tk](http://www.peigong.tk)
 * 项目地址：[https://github.com/peigong/php-cache](https://github.com/peigong/php-cache)
