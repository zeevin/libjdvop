<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/30
 * Time: 下午4:09
 * Source: ConfirmOrderClient.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Order;


use Zeevin\Libjdvop\Core\BaseClient;

class ConfirmOrderClient extends BaseClient
{
    protected $domain = 'order';
    protected $prefix = 'confirmOrder';
    protected $method = 'POST';
}