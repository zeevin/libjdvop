<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/8
 * Time: 下午3:15
 * Source: Application.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop;

use Zeevin\Libjdvop\Core\ServiceContainer;

class Application extends ServiceContainer
{
    protected $providers = [
        \Zeevin\Libjdvop\Core\Providers\CacheProvider::class,
        \Zeevin\Libjdvop\OAuth2\ServiceProvider::class,
        \Zeevin\Libjdvop\Product\ServiceProvider::class,
	    \Zeevin\Libjdvop\Area\ServiceProvider::class,
        \Zeevin\Libjdvop\Price\ServiceProvider::class
    ];
}