<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/10
 * Time: 19:55
 */

namespace Zeevin\Libjdvop\Area\ResponseAttribute\GetTown;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseResponseAttribute;
class Response extends BaseResponseAttribute
{
	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("result")
	 * @JMS\Type("array<string, int>") 镇级别信息
	 */
    public $result;

	/**
	 * @return mixed
	 */
	public function getResult()
	{
		return $this->result;
	}
}