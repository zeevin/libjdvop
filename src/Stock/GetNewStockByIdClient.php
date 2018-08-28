<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/28
 * Time: 下午3:42
 * Source: GetNewStockByIdClient.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Stock;


use Zeevin\Libjdvop\Core\BaseClient;

class GetNewStockByIdClient extends BaseClient
{
    protected $domain = 'stock';
    protected $prefix = 'getNewStockById';
    protected $method = 'POST';
}