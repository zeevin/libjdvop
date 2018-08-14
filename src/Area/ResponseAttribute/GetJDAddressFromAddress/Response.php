<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/14
 * Time: 10:50
 */

namespace Zeevin\Libjdvop\Area\ResponseAttribute\GetJDAddressFromAddress;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseResponseAttribute;
class Response extends BaseResponseAttribute
{
	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("result")
	 * @JMS\Type("Zeevin\Libjdvop\Area\ResponseAttribute\GetJDAddressFromAddress\Struct\Result")
	 */
	protected $result;

	/**
	 * @return mixed
	 */
	public function getResult()
	{
		return $this->result;
	}
}