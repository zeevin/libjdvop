<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/10
 * Time: 18:56
 */

namespace Zeevin\Libjdvop\Area;


use Zeevin\Libjdvop\Core\BaseClient;

class GetCityClient extends BaseClient
{
	protected $domain = 'area';
	protected $prefix = 'getCity';
	protected $method = 'POST';
}