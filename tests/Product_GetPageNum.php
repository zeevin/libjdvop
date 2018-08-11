<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/8
 * Time: 下午9:57
 * Source: Product_GetPageNum.php
 * Project: libjdvop
 */

require  './autoloader.php';
$config = require './config.php';

$application = new \Zeevin\Libjdvop\Application($config);

$request = new \Zeevin\Libjdvop\Product\RequestAttribute\GetPageNum\Request();
$reqData = $request->serialize();

$app = $application['Product.GetPageNum'];
var_dump($app->request($reqData)->getResponse());
