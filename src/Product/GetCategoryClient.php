<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/9
 * Time: 下午9:52
 * Source: GetCategoryClient.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Product;


use Zeevin\Libjdvop\Core\BaseClient;

class GetCategoryClient extends BaseClient
{
    protected $domain = 'product';
    protected $prefix = 'getCategory';
    protected $method = 'POST';
}