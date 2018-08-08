<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/8
 * Time: 下午5:02
 * Source: AccessTokenClient.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\OAuth2;


use Zeevin\Libjdvop\Core\BaseClient;

class AccessTokenClient extends BaseClient
{
    protected $resourcePath = '';
    protected $domain = 'oauth2';
    protected $prefix = 'accessToken';
    protected $id = null;
    protected $method = 'POST';

}