<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/10
 * Time: 16:22
 */

namespace Zeevin\Libjdvop\Area;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
class ServiceProvider implements ServiceProviderInterface
{
	public function register(Container $app)
	{
		$app['Area.GetProvince'] = function ($app)
		{
			return new GetProvinceClient($app);
		};
		$app['Area.GetCity'] = function ($app)
		{
			return new GetCityClient($app);
		};
		$app['Area.GetCounty'] = function ($app)
		{
			return new GetCountyClient($app);
		};
		$app['Area.GetTown'] = function ($app)
		{
			return new GetTownClient($app);
		};
		$app['Area.CheckArea'] = function ($app)
		{
			return new CheckAreaClient($app);
		};

		$app['Area.GetJDAddressFromAddress'] = function ($app)
		{
			return new GetJDAddressFromAddressClient($app);
		};

		$app['Area.GetJDAddressFromLatLng'] = function ($app)
		{
			return new GetJDAddressFromLatLngClient($app);
		};
	}
}