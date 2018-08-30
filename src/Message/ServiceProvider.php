<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/10
 * Time: 16:22
 */

namespace Zeevin\Libjdvop\Message;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
class ServiceProvider implements ServiceProviderInterface
{
	public function register(Container $app)
	{
		$app['Message.Get'] = function ($app)
		{
			return new GetClient($app);
		};
		$app['Message.Del'] = function ($app)
		{
			return new DelClient($app);
		};

	}
}