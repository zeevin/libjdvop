<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/30
 * Time: 下午7:24
 * Source: SelectJdOrderClient.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Order;


use Zeevin\Libjdvop\Core\BaseClient;

class SelectJdOrderClient extends BaseClient
{
    protected $domain = 'order';
    protected $prefix = 'selectJdOrder';
    protected $method = 'POST';
}