<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/27
 * Time: 下午6:43
 * Source: SearchClient.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Search;


use Zeevin\Libjdvop\Core\BaseClient;

class SearchClient extends BaseClient
{
    protected $domain = 'search';
    protected $prefix = 'search';
    protected $method = 'POST';
}