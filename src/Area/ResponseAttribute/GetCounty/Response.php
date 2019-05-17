<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/10
 * Time: 19:41
 */

namespace Zeevin\Libjdvop\Area\ResponseAttribute\GetCounty;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseResponseAttribute;
class Response extends BaseResponseAttribute
{
	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("result")
	 * @JMS\Type("array<string, int>")
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