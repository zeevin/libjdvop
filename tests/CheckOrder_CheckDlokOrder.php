<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/30
 * Time: 14:27
 */
require  './autoloader.php';
$config = require './config.php';

$application = new \Zeevin\Libjdvop\Application($config);

$request = new \Zeevin\Libjdvop\CheckOrder\RequestAttribute\CheckDlokOrder\Request();
$request->setDate('2018-07-01')->setPageNo(1)->setPageSize(40);
$reqData = $request->serialize();

/** @var \Zeevin\Libjdvop\CheckOrder\CheckDlokOrderClient $app */
$app = $application['CheckOrder.CheckDlokOrder'];
/** @var \Zeevin\Libjdvop\CheckOrder\ResponseAttribute\CheckDlokOrder\Response $ret */
$ret = $app->request($reqData)->getResponse();
var_dump($ret);