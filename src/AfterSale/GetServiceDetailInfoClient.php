<?php
/**
 * @author:wangwei<1194023603@qq.com>
 * Project:libjdvop
 * File:GetServiceDetailInfoClient.php
 * Time:2019-05-08 17:31
 */

namespace Zeevin\Libjdvop\AfterSale;


use Zeevin\Libjdvop\Core\BaseClient;

class GetServiceDetailInfoClient extends BaseClient
{
    protected $domain = 'afterSale';
    protected $prefix = 'getServiceDetailInfo';
    protected $method = 'POST';
}