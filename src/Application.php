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
        \Zeevin\Libjdvop\Price\ServiceProvider::class,
        \Zeevin\Libjdvop\Order\ServiceProvider::class,
        \Zeevin\Libjdvop\Search\ServiceProvider::class,
        \Zeevin\Libjdvop\Stock\ServiceProvider::class,
	    \Zeevin\Libjdvop\CheckOrder\ServiceProvider::class,
	    \Zeevin\Libjdvop\Message\ServiceProvider::class,
    ];
}