<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/10
 * Time: 20:33
 */

namespace Zeevin\Libjdvop\Area\RequestAttribute\CheckArea;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseRequestAttribute;
class Request extends BaseRequestAttribute
{
	/**
	 * 一级地址id
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("provinceId")
	 * @JMS\Type("int")
	 */
	protected $id;

	/**
	 *  二级地址id
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("cityId")
	 * @JMS\Type("int")
	 */
	protected $cityId;

	/**
	 *  三级地址id 如果为空请传入0
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("countyId")
	 * @JMS\Type("int")
	 */
	protected $countyId;

	/**
	 * 四级地址，如果是空请传入0
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("townId")
	 * @JMS\Type("int")
	 */
	protected $townId;

	/**
	 * @param int $id
	 * @return $this
	 */
	public function setId(int $id){
		$this->id = $id;
		return $this;
	}

	/**
	 * @param int $cityId
	 * @return $this
	 */
	public function setCityId(int $cityId){
		$this->cityId = $cityId;
		return $this;
	}

	/**
	 * @param int $countyId
	 * @return $this
	 */
	public function setCountyId(int $countyId){
		$this->countyId = $countyId;
		return $this;
	}

	/**
	 * @param int $townId
	 * @return $this
	 */
	public function setTownId(int $townId){
		$this->townId = $townId;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getId(){
		return $this->id;
	}

	/**
	 * @return mixed
	 */
	public function getCityId(){
		return $this->cityId;

	}

	/**
	 * @return mixed
	 */
	public function getCountyId(){
		return $this->countyId;
	}

	/**
	 * @return mixed
	 */
	public function getTownId(){
		return $this->townId;
	}
}