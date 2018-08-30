<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/30
 * Time: 下午4:08
 * Source: CancelClient.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Order;


use Zeevin\Libjdvop\Core\BaseClient;

class CancelClient extends BaseClient
{
    protected $domain = 'order';
    protected $prefix = 'cancel';
    protected $method = 'POST';
}