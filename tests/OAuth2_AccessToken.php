<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/8
 * Time: 下午5:19
 * Source: OAuth_AccessToken.php
 * Project: libjdvop
 */

require  './autoloader.php';
$config = require './config.php';

$application = new \Zeevin\Libjdvop\Application($config);
$jdvopConfig = $application['config']->get('jd-vop');
$cacheConfig = $application['config']->get('cache');

$request = new \Zeevin\Libjdvop\OAuth2\RequestAttribute\AccessToken\Request();

$request->setClientId($jdvopConfig['clientId'])->setClientSecret($jdvopConfig['clientSecret'])
    ->setUsername($jdvopConfig['userName'])->setPassword($jdvopConfig['password'])
    ->setTimestamp(date('Y-m-d H:i:s'))
    ->setSign();

$reqData = $request->serialize();

//print_r($reqData);exit;
/** @var \Zeevin\Libjdvop\OAuth2\AccessTokenClient $app */
$app = $application['OAuth2.AccessToken'];
/** @var \Zeevin\Libjdvop\OAuth2\ResponseAttribute\AccessToken\Response $ret */
$ret = $app->request($reqData)->getResponse();
//print_r($ret);
$expirtime = $ret->getResult()->getExpiresIn()-600-(time()-$ret->getResult()->getTime()/1000);
$application['cache']->save($cacheConfig['oauth_key'],$ret->getResult()->getAccessToken(),$expirtime);
$application['cache']->save($cacheConfig['oauth_refresh_key'],$ret->getResult()->getRefreshToken(),$ret->getResult()->getRefreshTokenExpires()/100-time());
