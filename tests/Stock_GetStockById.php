<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/28
 * Time: 下午3:20
 * Source: Stock_GetNewStockById.php
 * Project: libjdvop
 */

require  './autoloader.php';
$config = require './config.php';

$application = new \Zeevin\Libjdvop\Application($config);

/** @var \Zeevin\Libjdvop\Stock\RequestAttribute\GetStockById\Request $request */
$request = new \Zeevin\Libjdvop\Stock\RequestAttribute\GetStockById\Request();


$request->setSku(165145)->setArea(13,1112,3535);
$reqData = $request->serialize();
//print_r($reqData);exit;
/** @var \Zeevin\Libjdvop\Stock\GetNewStockByIdClient $app */
$app = $application['Stock.GetStockByIdClient'];
/** @var \Zeevin\Libjdvop\Stock\ResponseAttribute\GetNewStockById\Response $ret */
$ret = $app->request($reqData)->getResponse();
//var_dump($ret);exit;
print_r($ret->getResult());