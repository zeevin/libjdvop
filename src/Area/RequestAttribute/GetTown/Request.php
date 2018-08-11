<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/10
 * Time: 19:52
 */

namespace Zeevin\Libjdvop\Area\RequestAttribute\GetTown;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseRequestAttribute;
class Request extends BaseRequestAttribute
{
	/**
	 * 三级地址id
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("id")
	 * @JMS\Type("int")
	 */
	protected $id;

	/**
	 * @param int $id 三级地址id
	 * @return $this
	 */
	public function setId(int $id){
		$this->id = $id;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getId(){
		return $this->id;
	}
}