<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/30
 * Time: 16:05
 */

namespace Zeevin\Libjdvop\Message\RequestAttribute\Del;
use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseRequestAttribute;

class Request extends BaseRequestAttribute
{
	/**
	 * 信息推送接口获取的 id，支持批量删除，英文逗号间隔，最大 100 个
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("id")
	 * @JMS\Type("string")
	 */
	protected $id;

	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param array|string|int $id
	 *
	 * @return $this
	 */
	public function setId($id)
	{
		if(is_array($id)){
			$this->id = implode(",", $id);
		}
		if(is_string($id)){
			$this->id = $id;
		}
		if(is_int($id)){
			$this->id = (string)$id;
		}
		if(is_float($id)){
			$this->id = (string)$id;
		}
		return $this;
	}
}