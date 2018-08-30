<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/29
 * Time: 下午4:36
 * Source: SubmitOrderClient.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Order;


use Zeevin\Libjdvop\Core\BaseClient;

class SubmitOrderClient extends BaseClient
{
    protected $domain = 'order';
    protected $prefix = 'submitOrder';
    protected $method = 'POST';
}