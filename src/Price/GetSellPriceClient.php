<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/9
 * Time: 上午11:08
 * Source: GetSellPriceClient.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Price;


use Zeevin\Libjdvop\Core\BaseClient;

class GetSellPriceClient extends BaseClient
{
    protected $domain = 'price';
    protected $prefix = 'getSellPrice';
    protected $method = 'POST';
}