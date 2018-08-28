<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/28
 * Time: 下午3:53
 * Source: ServiceProvider.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Stock;


use Pimple\Container;
use Pimple\ServiceProviderInterface;
class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['Stock.GetNewStockByIdClient'] = function ($app)
        {
            return new GetNewStockByIdClient($app);
        };
    }
}