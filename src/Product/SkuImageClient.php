<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/22
 * Time: 上午10:21
 * Source: SkuImageClient.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Product;


use Zeevin\Libjdvop\Core\BaseClient;

class SkuImageClient extends BaseClient
{
    protected $domain = 'product';
    protected $prefix = 'skuImage';
    protected $method = 'POST';
}