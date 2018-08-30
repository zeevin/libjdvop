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

$request = new \Zeevin\Libjdvop\Message\RequestAttribute\Del\Request();
$request->setId('7399034911');
$reqData = $request->serialize();
//var_dump($reqData);die;
/** @var \Zeevin\Libjdvop\Message\DelClient $app */
$app = $application['Message.Del'];
/** @var \Zeevin\Libjdvop\Message\ResponseAttribute\Del\Response $ret */
$ret = $app->request($reqData)->getResponse();
var_dump($ret);