<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/22
 * Time: 上午11:56
 * Source: Product_CheckAreaLimit.php
 * Project: libjdvop
 */

require  'autoloader.php';
$config = require './config.php';

$application = new \Zeevin\Libjdvop\Application($config);

/** @var \Zeevin\Libjdvop\Product\RequestAttribute\CheckAreaLimit\Request $request */
$request = new \Zeevin\Libjdvop\Product\RequestAttribute\GetSkuGift\Request();


$request->setSkuId(1651145)->setProvince(13)->setCity(1112)->setCounty(3535)->setTown(46682);
$reqData = $request->serialize();
//print_r($reqData);exit;
/** @var \Zeevin\Libjdvop\Product\GetSkuGiftClient $app */
$app = $application['Product.GetSkuGift'];
$ret = $app->request($reqData)->getResponse('array');

print_r($ret);