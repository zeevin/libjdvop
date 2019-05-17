<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/10
 * Time: 16:22
 */

namespace Zeevin\Libjdvop\AfterSale;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
	public function register(Container $app)
	{
		$app['AfterSale.CreateAfsApply'] = function ($app)
		{
			return new CreateAfsApplyClient($app);
		};
		$app['AfterSale.UpdateSendSku'] = function ($app)
		{
			return new UpdateSendSkuClient($app);
		};
		$app['AfterSale.GetAvailableNumberComp'] = function ($app)
		{
			return new GetAvailableNumberCompClient($app);
		};
		$app['AfterSale.GetCustomerExpectComp'] = function ($app)
		{
			return new GetCustomerExpectCompClient($app);
		};
		$app['AfterSale.GetWareReturnJdComp'] = function ($app)
		{
			return new GetWareReturnJdCompClient($app);
		};

		$app['AfterSale.GetServiceListPage'] = function ($app)
		{
			return new GetServiceListPageClient($app);
		};

		$app['AfterSale.GetServiceDetailInfo'] = function ($app)
		{
			return new GetServiceDetailInfoClient($app);
		};

		$app['AfterSale.AuditCancel'] = function ($app)
        {
            return new AuditCancelClient($app);
        };
	}
}