<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/8
 * Time: 下午11:29
 * Source: Product_GetDetail.php
 * Project: libjdvop
 */

require  '../vendor/autoload.php';
$config = require './config.php';

$application = new \Zeevin\Libjdvop\Application($config);

$request = new \Zeevin\Libjdvop\Product\RequestAttribute\GetDetail\Request();
$request->setSku(165145);
$reqData = $request->serialize();
/** @var \Zeevin\Libjdvop\Product\GetDetailClient $app */
$app = $application['Product.GetDetail'];
/** @var \Zeevin\Libjdvop\Product\ResponseAttribute\GetDetail\Response $ret */
$ret = $app->request($reqData)->getResponse();
var_dump($ret->getResult());
