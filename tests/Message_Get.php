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

$request = new \Zeevin\Libjdvop\Message\RequestAttribute\Get\Request();
$request->setType('10');
$reqData = $request->serialize();
//var_dump($reqData);die;
/** @var \Zeevin\Libjdvop\Message\GetClient $app */
$app = $application['Message.Get'];
/** @var \Zeevin\Libjdvop\Message\ResponseAttribute\Get\Response $ret */
$ret = $app->request($reqData)->getResponse();
var_dump($ret);