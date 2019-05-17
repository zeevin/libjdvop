<?php
/**
 * @author:wangwei<1194023603@qq.com>
 * Project:libjdvop
 * File:AfterSale_CreateAfsApply.php
 * Time:2019-05-07 16:37
 */

require './autoloader.php';
$config = require './config.php';

$application = new Zeevin\Libjdvop\Application($config);

$request = new Zeevin\Libjdvop\AfterSale\RequestAttribute\GetCustomerExpectComp\Request();
$request->setJdOrderId(91493943430)->setSkuId(2358480);
$reqData = $request->serialize();
/** @var Zeevin\Libjdvop\AfterSale\GetCustomerExpectCompClient $app */
$app = $application['AfterSale.GetCustomerExpectComp'];
/** @var Zeevin\Libjdvop\AfterSale\ResponseAttribute\GetCustomerExpectComp\Response $ret */
$ret = $app->request($reqData)->getResponse();
var_dump($ret);