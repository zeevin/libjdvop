<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/14
 * Time: 10:37
 */

namespace Zeevin\Libjdvop\Area;


use Zeevin\Libjdvop\Core\BaseClient;

class GetJDAddressFromAddressClient extends BaseClient
{
	protected $domain = 'area';
	protected $prefix = 'getJDAddressFromAddress';
	protected $method = 'POST';
}