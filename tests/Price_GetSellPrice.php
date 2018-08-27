<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/9
 * Time: 上午11:11
 * Source: Price_GetSellPrice.php
 * Project: libjdvop
 */

require  'autoloader.php';
$config = require './config.php';

$application = new \Zeevin\Libjdvop\Application($config);

$request = new \Zeevin\Libjdvop\Price\RequestAttribute\GetSellPrice\Request();
$request->setSku([165145,174550])->setQueryExts(['containsTax','marketPrice']);
$reqData = $request->serialize();
//print_r($reqData);exit;
/** @var \Zeevin\Libjdvop\Price\GetSellPriceClient $app */
//print_r($application);exit;
$app = $application['Price.GetSellPrice'];
$ret = $app->request($reqData)->getResponse();
print_r($ret);exit;
//var_dump($ret->getResult());