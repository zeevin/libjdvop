<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/30
 * Time: 16:05
 */

namespace Zeevin\Libjdvop\Message\RequestAttribute\Get;
use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseRequestAttribute;

class Request extends BaseRequestAttribute
{
	/**
	 * 推送类型，支持多个组合，例如 1,2,3
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("type")
	 * @JMS\Type("string")
	 */
	protected $type;

	/**
	 * @return mixed
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * @param array|string|int $type
	 *
	 * @return $this
	 */
	public function setType($type)
	{
		if(is_array($type)){
			$this->type = implode(",", $type);
		}
		if(is_string($type)){
			$this->type = $type;
		}
		if(is_int($type)){
			$this->type = (string)$type;
		}
		return $this;
	}
}