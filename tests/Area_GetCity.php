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

$request = new \Zeevin\Libjdvop\Area\RequestAttribute\GetCity\Request();
$request->setId(13);
$reqData = $request->serialize();

/** @var \Zeevin\Libjdvop\Area\GetCityClient $app */
$app = $application['Area.GetCity'];
/** @var \Zeevin\Libjdvop\Area\ResponseAttribute\GetCity\Response $ret */
$ret = $app->request($reqData)->getResponse();
var_dump($ret->getResult());