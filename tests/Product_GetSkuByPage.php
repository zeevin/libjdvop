<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/8
 * Time: 下午10:47
 * Source: Product_GetSkuByPage.php
 * Project: libjdvop
 */

require  './autoloader.php';
$config = require './config.php';

$application = new \Zeevin\Libjdvop\Application($config);

$request = new \Zeevin\Libjdvop\Product\RequestAttribute\GetSkuByPage\Request();
$request->setPageNo(1)->setPageNum(18);
$reqData = $request->serialize();
//var_dump($reqData);exit;
$app = $application['Product.GetSkuByPage'];
var_dump($app->request($reqData)->getResponse());