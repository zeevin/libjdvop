<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/9/4
 * Time: 下午1:52
 * Source: Product_GetCategorys.php
 * Project: libjdvop
 */

require  './autoloader.php';
$config = require './config.php';

$application = new \Zeevin\Libjdvop\Application($config);

$request = new \Zeevin\Libjdvop\Product\RequestAttribute\GetCategorys\Request();
$request->setPageNo(1)->setPageSize(1000);
$reqData = $request->serialize();
//print_r($reqData);exit;
/** @var \Zeevin\Libjdvop\Product\GetCategorysClient $app */
$app = $application['Product.GetCategorys'];
$ret = $app->request($reqData)->getResponse('json');
echo($ret);