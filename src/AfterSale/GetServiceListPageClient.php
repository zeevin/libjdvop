<?php
/**
 * @author:wangwei<1194023603@qq.com>
 * Project:libjdvop
 * File:GetServiceListPageClient.php
 * Time:2019-05-08 15:03
 */

namespace Zeevin\Libjdvop\AfterSale;


use Zeevin\Libjdvop\Core\BaseClient;

class GetServiceListPageClient extends BaseClient
{
    protected $domain = 'afterSale';
    protected $prefix = 'getServiceListPage';
    protected $method = 'POST';
}