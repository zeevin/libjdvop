<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/27
 * Time: 下午8:49
 * Source: Product_Check.php
 * Project: libjdvop
 */

require  './autoloader.php';
$config = require './config.php';

$application = new \Zeevin\Libjdvop\Application($config);

/** @var \Zeevin\Libjdvop\Product\RequestAttribute\Check\Request $request */
$request = new \Zeevin\Libjdvop\Product\RequestAttribute\Check\Request();


$request->setSkuIds(774304);
$reqData = $request->serialize();
//print_r($reqData);exit;
/** @var \Zeevin\Libjdvop\Product\CheckClient $app */
$app = $application['Product.Check'];
/** @var \Zeevin\Libjdvop\Product\ResponseAttribute\Check\Response $ret */
$ret = $app->request($reqData)->getResponse();
//var_dump($ret);exit;
print_r($ret);