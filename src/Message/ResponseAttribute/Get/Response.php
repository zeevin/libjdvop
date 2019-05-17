<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/30
 * Time: 16:29
 */

namespace Zeevin\Libjdvop\Message\ResponseAttribute\Get;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseResponseAttribute;
use Zeevin\Libjdvop\Message\ResponseAttribute\Get\Struct\Result;
class Response extends BaseResponseAttribute
{
	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("result")
	 * @JMS\Type("array<Zeevin\Libjdvop\Message\ResponseAttribute\Get\Struct\Result>")
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