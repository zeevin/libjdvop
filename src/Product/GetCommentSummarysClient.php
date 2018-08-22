<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/22
 * Time: 上午11:31
 * Source: GetCommentSummarysClient.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Product;


use Zeevin\Libjdvop\Core\BaseClient;

class GetCommentSummarysClient extends BaseClient
{
    protected $domain = 'product';
    protected $prefix = 'getCommentSummarys';
    protected $method = 'POST';
}