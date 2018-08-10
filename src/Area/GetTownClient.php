<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/10
 * Time: 19:49
 */

namespace Zeevin\Libjdvop\Area;

use Zeevin\Libjdvop\Core\BaseClient;
class GetTownClient extends BaseClient
{
	protected $domain = 'area';
	protected $prefix = 'getTown';
	protected $method = 'POST';
}