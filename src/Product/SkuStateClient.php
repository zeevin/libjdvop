<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/21
 * Time: 下午5:30
 * Source: SkuStateClient.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Product;



use Zeevin\Libjdvop\Core\BaseClient;

class SkuStateClient extends BaseClient
{
    protected $domain = 'product';
    protected $prefix = 'skuState';
    protected $method = 'POST';
}