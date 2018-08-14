<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/14
 * Time: 18:07
 */

namespace Zeevin\Libjdvop\Area\RequestAttribute\GetJDAddressFromLatLng;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseRequestAttribute;
class Request extends BaseRequestAttribute
{
	/**
	 * 经度，取值范围[-180,180]
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("lng")
	 * @JMS\Type("string")
	 */
	protected $lng;

	/**
	 * 维度，取值范围[-90,90]
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("lat")
	 * @JMS\Type("string") 详细地址
	 */
	protected $lat;

	/**
	 * @param string $lng 详细地址
	 * @return $this
	 */
	public function setLng($lng){
		$this->lng = $lng;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getLng(){
		return $this->lng;
	}

	/**
	 * @param string $lat 详细地址
	 * @return $this
	 */
	public function setLat(string $lat){
		$this->lat = $lat;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getLat(){
		return $this->lat;
	}
}