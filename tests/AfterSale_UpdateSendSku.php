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

$request = new Zeevin\Libjdvop\AfterSale\RequestAttribute\UpdateSendSku\Request();
$request->setAfsServiceId(100011597)
    ->setFreightMoney(10)
    ->setExpressCode('19850810')
    ->setDeliverDate('2014-04-15 00:00:00')
    ->setExpressCompany('宅急送');
$reqData = $request->serialize();
/** @var Zeevin\Libjdvop\AfterSale\UpdateSendSkuClient $app */
$app = $application['AfterSale.UpdateSendSku'];
/** @var Zeevin\Libjdvop\AfterSale\ResponseAttribute\UpdateSendSku\Response $ret */
$ret = $app->request($reqData)->getResponse();
var_dump($ret);