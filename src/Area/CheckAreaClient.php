<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/10
 * Time: 20:28
 */

namespace Zeevin\Libjdvop\Area;

use Zeevin\Libjdvop\Core\BaseClient;
class CheckAreaClient extends BaseClient
{
	protected $domain = 'area';
	protected $prefix = 'checkArea';
	protected $method = 'POST';
}