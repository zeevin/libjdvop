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

$request = new Zeevin\Libjdvop\AfterSale\RequestAttribute\AuditCancel\Request();
$request->setServiceIdList(12312321)->setApproveNotes('asdsdasd');
$reqData = $request->serialize();
/** @var Zeevin\Libjdvop\AfterSale\AuditCancelClient $app */
$app = $application['AfterSale.AuditCancel'];
/** @var Zeevin\Libjdvop\AfterSale\ResponseAttribute\AuditCancel\Response $ret */
$ret = $app->request($reqData)->getResponse();
var_dump($ret);