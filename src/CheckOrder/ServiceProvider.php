<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/8
 * Time: 下午5:16
 * Source: ServiceProvider.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\CheckOrder;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['CheckOrder.CheckNewOrder'] = function ($app)
        {
            return new CheckNewOrderClient($app);
        };

        $app['CheckOrder.CheckDlokOrder'] = function ($app)
        {
	        return new CheckDlokOrderClient($app);
        };

	    $app['CheckOrder.CheckRefuseOrder'] = function ($app)
	    {
		    return new CheckRefuseOrderClient($app);
	    };

    }
}