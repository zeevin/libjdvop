<?php
/**
 * @author:wangwei<1194023603@qq.com>
 * Project:libjdvop
 * File:AfterSale_GetServiceListPage.php
 * Time:2019-05-08 15:54
 */



require './autoloader.php';
$config = require './config.php';

$application = new Zeevin\Libjdvop\Application($config);

$request = new Zeevin\Libjdvop\AfterSale\RequestAttribute\GetServiceListPage\Request();
$request->setJdOrderId(40215143944)->setPageIndex(1)->setPageSize(10);
$reqData = $request->serialize();
/** @var Zeevin\Libjdvop\AfterSale\GetServiceListPageClient $app */
$app = $application['AfterSale.GetServiceListPage'];
/** @var Zeevin\Libjdvop\AfterSale\ResponseAttribute\GetServiceListPage\Response $ret */
$ret = $app->request($reqData)->getResponse();
var_dump($ret);