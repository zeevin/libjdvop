<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/27
 * Time: 下午6:48
 * Source: Search_Search.php
 * Project: libjdvop
 */

require  './autoloader.php';
$config = require './config.php';

$application = new \Zeevin\Libjdvop\Application($config);

/** @var \Zeevin\Libjdvop\Search\RequestAttribute\Search\Request $request */
$request = new \Zeevin\Libjdvop\Search\RequestAttribute\Search\Request();


$request->setKeyword('小爱音箱')->setBrands('小米')->setPageIndex(1);
$reqData = $request->serialize();
//print_r(http_build_query($reqData));exit;
/** @var \Zeevin\Libjdvop\Search\SearchClient $app */
$app = $application['Search.Search'];
/** @var \Zeevin\Libjdvop\Product\ResponseAttribute\SkuState\Response $ret */
$ret = $app->request($reqData)->getResponse();
//var_dump($ret);exit;
print_r($ret);