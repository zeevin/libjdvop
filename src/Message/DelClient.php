<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/30
 * Time: 16:06
 */

namespace Zeevin\Libjdvop\Message;

use Zeevin\Libjdvop\Core\BaseClient;
class DelClient extends BaseClient
{
	protected $domain = 'message';
	protected $prefix = 'del';
	protected $method = 'POST';
}