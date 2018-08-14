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

$request = new \Zeevin\Libjdvop\Area\RequestAttribute\GetJDAddressFromAddress\Request();
$request->setAddress('四川省成都市武侯区武科西五路360号');
$reqData = $request->serialize();
/** @var \Zeevin\Libjdvop\Area\CheckAreaClient $app */
$app = $application['Area.GetJDAddressFromAddress'];
/** @var \Zeevin\Libjdvop\Area\ResponseAttribute\CheckArea\Response $ret */
$ret = $app->request($reqData)->getResponse();
var_dump($ret);