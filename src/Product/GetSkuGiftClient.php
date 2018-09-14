<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/9/14
 * Time: 上午10:49
 * Source: GetSkuGiftClient.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Product;


use Zeevin\Libjdvop\Core\BaseClient;

class GetSkuGiftClient extends BaseClient
{
    protected $domain = 'product';
    protected $prefix = 'getSkuGift';
    protected $method = 'POST';
}