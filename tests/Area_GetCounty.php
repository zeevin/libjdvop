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

$request = new \Zeevin\Libjdvop\Area\RequestAttribute\GetCounty\Request();
$request->setId(1000);
$reqData = $request->serialize();

/** @var \Zeevin\Libjdvop\Area\GetCountyClient $app */
$app = $application['Area.GetCounty'];
/** @var \Zeevin\Libjdvop\Area\ResponseAttribute\GetCounty\Response $ret */
$ret = $app->request($reqData)->getResponse();
var_dump($ret->getResult());