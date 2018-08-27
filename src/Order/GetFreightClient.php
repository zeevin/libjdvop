<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/27
 * Time: 下午2:29
 * Source: GetFreightClient.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Order;


use Zeevin\Libjdvop\Core\BaseClient;

class GetFreightClient extends BaseClient
{
    protected $domain = 'order';
    protected $prefix = 'getFreight';
    protected $method = 'POST';
}