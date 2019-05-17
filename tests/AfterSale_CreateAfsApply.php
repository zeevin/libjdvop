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

$request = new Zeevin\Libjdvop\AfterSale\RequestAttribute\CreateAfsApply\Request();
$request->setJdOrderId(91493943430)
    ->setAsCustomerDto('王威','18766864441','1194023603@qq.com','272100','18766864441')
    ->setCustomerExpect(10)
    ->setIsHasPackage(false)
    ->setIsNeedDetectionReport(false)
    ->setQuestionDesc('测试')
    ->setAsDetailDto(2358480,1)
    ->setPackageDesc(10)
    ->setAsPickwareDto(7)
    ->setAsReturnwareDto(20,13,1000,40491,0,'大地锐城1号楼2单元');
$reqData = $request->serialize();
/** @var Zeevin\Libjdvop\AfterSale\CreateAfsApplyClient $app */
$app = $application['AfterSale.CreateAfsApply'];
/** @var Zeevin\Libjdvop\AfterSale\ResponseAttribute\CreateAfsApply\Response $ret */
$ret = $app->request($reqData)->getResponse();
var_dump($ret);