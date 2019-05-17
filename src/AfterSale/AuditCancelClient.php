<?php
/**
 * @author:wangwei<1194023603@qq.com>
 * Project:libjdvop
 * File:AuditCancelClient.php
 * Time:2019-05-14 10:44
 */

namespace Zeevin\Libjdvop\AfterSale;


use Zeevin\Libjdvop\Core\BaseClient;

class AuditCancelClient extends BaseClient
{
    protected $domain = 'afterSale';
    protected $prefix = 'auditCancel';
    protected $method = 'POST';
}