<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/8
 * Time: 下午9:56
 * Source: GetPageNumClient.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Product;


use Zeevin\Libjdvop\Core\BaseClient;

class GetPageNumClient extends BaseClient
{
    protected $domain = 'product';
    protected $prefix = 'getPageNum';
    protected $method = 'POST';
}