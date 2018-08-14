<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/14
 * Time: 10:44
 */

namespace Zeevin\Libjdvop\Area\RequestAttribute\GetJDAddressFromAddress;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseRequestAttribute;
class Request extends BaseRequestAttribute
{
	/**
	 * 详细地址
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("address")
	 * @JMS\Type("string") 详细地址
	 */
	protected $address;

	/**
	 * @param string $address 详细地址
	 * @return $this
	 */
	public function setAddress(string $address){
		$this->address = $address;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getAddress(){
		return $this->address;
	}
}