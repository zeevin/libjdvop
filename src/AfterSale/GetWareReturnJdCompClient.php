<?php
/**
 * @author:wangwei<1194023603@qq.com>
 * Project:libjdvop
 * File:GetWareReturnJdCompClient.php
 * Time:2019-05-08 14:54
 */

namespace Zeevin\Libjdvop\AfterSale;


use Zeevin\Libjdvop\Core\BaseClient;

class GetWareReturnJdCompClient extends BaseClient
{
    protected $domain = 'afterSale';
    protected $prefix = 'getWareReturnJdComp';
    protected $method = 'POST';
}