<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/8
 * Time: 下午10:47
 * Source: Product_GetSkuByPage.php
 * Project: libjdvop
 */

require  '../vendor/autoload.php';
$config = require './config.php';

$application = new \Zeevin\Libjdvop\Application($config);
$jdvopConfig = $application['config']->get('jd-vop');
$cacheConfig = $application['config']->get('cache');

$request = new \Zeevin\Libjdvop\Product\RequestAttribute\GetSkuByPage\Request();
$request->setPageNo(1)->setPageNum(16);
$reqData = $request->serialize();
//print_r($reqData);exit;
$app = $application['Product.GetSkuByPage'];
print_r($app->request($reqData)->getResponse());