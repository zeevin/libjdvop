<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/8
 * Time: 下午10:47
 * Source: GetSkuByPageClient.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Product;


use Zeevin\Libjdvop\Core\BaseClient;

class GetSkuByPageClient extends BaseClient
{
    protected $domain = 'product';
    protected $prefix = 'getSkuByPage';
    protected $method = 'POST';
}