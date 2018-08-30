<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/27
 * Time: 下午2:28
 * Source: Order_GetFreight.php
 * Project: libjdvop
 */

require  './autoloader.php';
$config = require './config.php';

$application = new \Zeevin\Libjdvop\Application($config);

/** @var \Zeevin\Libjdvop\Order\RequestAttribute\GetFreight\Request $request */
$request = new \Zeevin\Libjdvop\Order\RequestAttribute\GetFreight\Request();


$request->setSku(['skuId'=>774304,"num"=>1])->setProvince(13)->setCity(1000)->setCounty(40491)->setTown(0);
$reqData = $request->serialize();
//print_r($reqData);exit;
/** @var \Zeevin\Libjdvop\Order\GetFreightClient $app */
$app = $application['Order.GetFreight'];
//var_dump($app);exit;
/** @var \Zeevin\Libjdvop\Order\ResponseAttribute\GetFreight\Response $ret */
$ret = $app->request($reqData)->getResponse('json');
//var_dump($ret);exit;
print_r($ret);