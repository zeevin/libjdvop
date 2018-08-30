<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/9
 * Time: 下午9:54
 * Source: Product_GetCategory.php
 * Project: libjdvop
 */

require  'autoloader.php';
$config = require './config.php';

$application = new \Zeevin\Libjdvop\Application($config);

/** @var \Zeevin\Libjdvop\Product\RequestAttribute\GetCategory\Request $request */
$request = new \Zeevin\Libjdvop\Product\RequestAttribute\GetCategory\Request();
$request->setCid(3986);
$reqData = $request->serialize();
//print_r($reqData);exit;
/** @var \Zeevin\Libjdvop\Product\GetCategoryClient $app */
$app = $application['Product.GetCategory'];
/** @var \Zeevin\Libjdvop\Product\ResponseAttribute\GetCategory\Response $ret */
$ret = $app->request($reqData)->getResponse();
var_dump($ret->getResult()->getName());exit;
//var_dump($ret->getResult());