<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/8
 * Time: 下午11:29
 * Source: Product_GetDetail.php
 * Project: libjdvop
 */
require  './autoloader.php';
$config = require './config.php';

$application = new \Zeevin\Libjdvop\Application($config);

/** @var \Zeevin\Libjdvop\Product\RequestAttribute\GetDetail\Request $request */
$request = new \Zeevin\Libjdvop\Product\RequestAttribute\GetDetail\Request();


$request->setSku(3008171)->setQueryExts(['appintroduce','shouhou']);
$reqData = $request->serialize();
//print_r($reqData);exit;
/** @var \Zeevin\Libjdvop\Product\GetDetailClient $app */
$app = $application['Product.GetDetail'];
/** @var \Zeevin\Libjdvop\Product\ResponseAttribute\GetDetail\Response $ret */
$ret = $app->request($reqData)->getResponse();
//var_dump($ret);exit;
echo($ret->getResult()->getIntroduction());
