<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/10
 * Time: 20:41
 */

namespace Zeevin\Libjdvop\AfterSale\ResponseAttribute\UpdateSendSku;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Area\ResponseAttribute\CheckArea\Struct\Result;
use Zeevin\Libjdvop\Core\BaseResponseAttribute;
class Response extends BaseResponseAttribute
{
	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("result")
	 * @JMS\Type("string")
	 */
	public $result;

	/**
	 * @return Result
	 */
	public function getResult()
	{
		return $this->result;
	}
}