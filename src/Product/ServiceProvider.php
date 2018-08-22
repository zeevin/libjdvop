<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/8
 * Time: 下午10:05
 * Source: ServiceProvider.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Product;


use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['Product.GetPageNum'] = function ($app)
        {
            return new GetPageNumClient($app);
        };
        $app['Product.GetSkuByPage'] = function ($app)
        {
            return new GetSkuByPageClient($app);
        };
        $app['Product.GetDetail'] = function ($app)
        {
            return new GetDetailClient($app);
        };
        $app['Product.GetCategory'] = function ($app)
        {
            return new GetCategoryClient($app);
        };
        $app['Product.SkuState'] = function ($app)
        {
            return new SkuStateClient($app);
        };
        $app['Product.SkuImage'] = function ($app)
        {
            return new SkuImageClient($app);
        };
        $app['Product.GetCommentSummarys'] = function ($app)
        {
            return new GetCommentSummarysClient($app);
        };
    }
}