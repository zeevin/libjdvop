<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/8
 * Time: 下午11:31
 * Source: GetDetailClient.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Product;

use Zeevin\Libjdvop\Core\BaseClient;

class GetDetailClient extends BaseClient
{
    protected $domain = 'product';
    protected $prefix = 'getDetail';
    protected $method = 'POST';
}