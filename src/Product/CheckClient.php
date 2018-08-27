<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/27
 * Time: 下午8:48
 * Source: CheckClient.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Product;


use Zeevin\Libjdvop\Core\BaseClient;

class CheckClient extends BaseClient
{
    protected $domain = 'product';
    protected $prefix = 'check';
    protected $method = 'POST';
}