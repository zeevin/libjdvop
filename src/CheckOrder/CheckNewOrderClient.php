<?php
/**
 * @link   https://www.init.lu
 * @author wangwei
 * Date: 2018/8/30
 * Time: 11:40
 * Source: CheckNewOrderClient.phphp
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\CheckOrder;


use Zeevin\Libjdvop\Core\BaseClient;

class CheckNewOrderClient extends BaseClient
{
	protected $domain = 'checkOrder';
	protected $prefix = 'checkNewOrder';
	protected $method = 'POST';

}