<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/14
 * Time: 18:18
 */

namespace Zeevin\Libjdvop\Area;

use Zeevin\Libjdvop\Core\BaseClient;
class GetJDAddressFromLatLngClient extends BaseClient
{
	protected $domain = 'area';
	protected $prefix = 'getJDAddressFromLatLng';
	protected $method = 'POST';
}