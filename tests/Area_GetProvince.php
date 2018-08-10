<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/10
 * Time: 16:32
 */

require  './autoloader.php';
$config = require './config.php';

$application = new \Zeevin\Libjdvop\Application($config);

$request = new \Zeevin\Libjdvop\Area\RequestAttribute\GetProvince\Request();
$reqData = $request->serialize();
/** @var \Zeevin\Libjdvop\Area\GetProvinceClient $app */
$app = $application['Area.GetProvince'];
/** @var \Zeevin\Libjdvop\Area\ResponseAttribute\GetProvince\Response $ret */
$ret = $app->request($reqData)->getResponse();
var_dump($ret->getResult());