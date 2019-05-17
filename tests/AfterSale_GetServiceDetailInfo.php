<?php
/**
 * @author:wangwei<1194023603@qq.com>
 * Project:libjdvop
 * File:AfterSale_GetServiceDetailInfo.php
 * Time:2019-05-14 10:15
 */

require './autoloader.php';
$config = require './config.php';

$application = new Zeevin\Libjdvop\Application($config);

$request = new Zeevin\Libjdvop\AfterSale\RequestAttribute\GetServiceDetailInfo\Request();
$request->setAfsServiceId('100011597')->setAppendInfoSteps([1,2,3,4,5]);
$reqData = $request->serialize();
/** @var Zeevin\Libjdvop\AfterSale\CreateAfsApplyClient $app */
$app = $application['AfterSale.GetServiceDetailInfo'];
/** @var Zeevin\Libjdvop\AfterSale\ResponseAttribute\GetServiceDetailInfo\Response $ret */
$ret = $app->request($reqData)->getResponse();
var_dump($ret);