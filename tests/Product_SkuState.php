<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/21
 * Time: 下午5:33
 * Source: Product_SkuState.php
 * Project: libjdvop
 */

require  './autoloader.php';
$config = require './config.php';

$application = new \Zeevin\Libjdvop\Application($config);

/** @var \Zeevin\Libjdvop\Product\RequestAttribute\SkuState\Request $request */
$request = new \Zeevin\Libjdvop\Product\RequestAttribute\SkuState\Request();


$request->setSku(165145);
$reqData = $request->serialize();
//print_r($reqData);exit;
/** @var \Zeevin\Libjdvop\Product\SkuStateClient $app */
$app = $application['Product.SkuState'];
/** @var \Zeevin\Libjdvop\Product\ResponseAttribute\SkuState\Response $ret */
$ret = $app->request($reqData)->getResponse();
//var_dump($ret);exit;
print_r($ret);