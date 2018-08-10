<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/8
 * Time: 下午11:29
 * Source: Product_GetDetail.php
 * Project: libjdvop
 */
require  './autoloader.php';
$config = require './config.php';

$application = new \Zeevin\Libjdvop\Application($config);

$request = new \Zeevin\Libjdvop\Area\RequestAttribute\CheckArea\Request();
$request->setId(13)->setCityId(2900)->setCountyId(2915)->setTownId(25785);
$reqData = $request->serialize();
/** @var \Zeevin\Libjdvop\Area\CheckAreaClient $app */
$app = $application['Area.CheckArea'];
/** @var \Zeevin\Libjdvop\Area\ResponseAttribute\CheckArea\Response $ret */
$ret = $app->request($reqData)->getResponse();
var_dump($ret);
