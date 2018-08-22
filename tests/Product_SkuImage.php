<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/22
 * Time: 上午10:22
 * Source: Product_SkuImage.php
 * Project: libjdvop
 */

require  './autoloader.php';
$config = require './config.php';

$application = new \Zeevin\Libjdvop\Application($config);

/** @var \Zeevin\Libjdvop\Product\RequestAttribute\SkuImage\Request $request */
$request = new \Zeevin\Libjdvop\Product\RequestAttribute\SkuImage\Request();


$request->setSku(165145,196567);
$reqData = $request->serialize();
//print_r($reqData);exit;
/** @var \Zeevin\Libjdvop\Product\SkuImageClient $app */
$app = $application['Product.SkuImage'];
/** @var \Zeevin\Libjdvop\Product\ResponseAttribute\SkuState\Response $ret */
$ret = $app->request($reqData)->getResponse();
//var_dump($ret);exit;
print_r($ret);