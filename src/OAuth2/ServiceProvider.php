<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/8
 * Time: 下午5:16
 * Source: ServiceProvider.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\OAuth2;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['OAuth2.CheckNewOrder'] = function ($app)
        {
            return new AccessTokenClient($app);
        };

    }
}