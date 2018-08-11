<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/10
 * Time: 19:29
 */

namespace Zeevin\Libjdvop\Area;

use Zeevin\Libjdvop\Core\BaseClient;
class GetCountyClient extends BaseClient
{
	protected $domain = 'area';
	protected $prefix = 'getCounty';
	protected $method = 'POST';
}