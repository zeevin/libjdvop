<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/22
 * Time: 上午11:37
 * Source: Product_GetCommentSummarys.php
 * Project: libjdvop
 */

require  './autoloader.php';
$config = require './config.php';

$application = new \Zeevin\Libjdvop\Application($config);

/** @var \Zeevin\Libjdvop\Product\RequestAttribute\GetCommentSummarys\Request $request */
$request = new \Zeevin\Libjdvop\Product\RequestAttribute\GetCommentSummarys\Request();


$request->setSku(165145,7735915);
$reqData = $request->serialize();
//print_r($reqData);exit;
/** @var \Zeevin\Libjdvop\Product\GetCommentSummarysClient $app */
$app = $application['Product.GetCommentSummarys'];
/** @var \Zeevin\Libjdvop\Product\ResponseAttribute\GetCommentSummarys\Response $ret */
$ret = $app->request($reqData)->getResponse();
//var_dump($ret);exit;
print_r($ret);