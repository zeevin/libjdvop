<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/10
 * Time: 16:20
 */

namespace Zeevin\Libjdvop\Area;

use Zeevin\Libjdvop\Core\BaseClient;
class GetProvinceClient extends BaseClient
{
	protected $domain = 'area';
	protected $prefix = 'getProvince';
	protected $method = 'POST';
}