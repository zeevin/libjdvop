<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/14
 * Time: 17:59
 */
require  './autoloader.php';
$config = require './config.php';

$application = new \Zeevin\Libjdvop\Application($config);

$request = new \Zeevin\Libjdvop\Area\RequestAttribute\GetJDAddressFromLatLng\Request();
$request->setLat('30.63216')->setLng('103.97402');
$reqData = $request->serialize();
/** @var \Zeevin\Libjdvop\Area\CheckAreaClient $app */
$app = $application['Area.GetJDAddressFromLatLng'];
/** @var \Zeevin\Libjdvop\Area\ResponseAttribute\CheckArea\Response $ret */
$ret = $app->request($reqData)->getResponse();
var_dump($ret);