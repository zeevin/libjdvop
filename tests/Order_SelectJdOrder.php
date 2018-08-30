<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/30
 * Time: 下午7:26
 * Source: Order_SelectJdOrder.php
 * Project: libjdvop
 */

require  './autoloader.php';
$config = require './config.php';

$application = new \Zeevin\Libjdvop\Application($config);

/** @var \Zeevin\Libjdvop\Order\RequestAttribute\SelectJdOrder\Request $request */
$request = new \Zeevin\Libjdvop\Order\RequestAttribute\SelectJdOrder\Request();


$request->setJdOrderId('78905665608');
$reqData = $request->serialize();
//print_r($reqData);exit;
/** @var \Zeevin\Libjdvop\Order\SelectJdOrderClient $app */
$app = $application['Order.SelectJdOrder'];
/** @var \Zeevin\Libjdvop\Order\ResponseAttribute\SelectJdOrder\Response $ret */
$ret = $app->request($reqData)->getResponse('json');
//var_dump($ret);exit;
print_r($ret->getResult());