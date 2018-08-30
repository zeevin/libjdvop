<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/27
 * Time: 下午2:29
 * Source: ServiceProvider.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Order;


use Pimple\Container;
use Pimple\ServiceProviderInterface;
class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['Order.GetFreight'] = function ($app)
        {
            return new GetFreightClient($app);
        };
        $app['Order.SubmitOrder'] = function ($app)
        {
            return new SubmitOrderClient($app);
        };
    }
}