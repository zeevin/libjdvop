<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/10
 * Time: 19:07
 */

require  './autoloader.php';
$config = require './config.php';

$application = new \Zeevin\Libjdvop\Application($config);

$request = new \Zeevin\Libjdvop\Area\RequestAttribute\GetTown\Request();
$request->setId(2915);
$reqData = $request->serialize();
//var_dump($reqData);die;
/** @var \Zeevin\Libjdvop\Area\GetTownClient $app */
$app = $application['Area.GetTown'];
/** @var \Zeevin\Libjdvop\Area\ResponseAttribute\GetTown\Response $ret */
$ret = $app->request($reqData)->getResponse();
var_dump($ret->getResult());