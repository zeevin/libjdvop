<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/14
 * Time: 18:24
 */

namespace Zeevin\Libjdvop\Area\ResponseAttribute\GetJDAddressFromLatLng\Struct;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
class Result
{
	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("provinceId")
	 * @JMS\Type("int")
	 */
	protected $provinceId;

	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("county")
	 * @JMS\Type("string")
	 */
	protected $county;


	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("cityId")
	 * @JMS\Type("int")
	 */
	protected $cityId;

	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("province")
	 * @JMS\Type("string")
	 */
	protected $province;

	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("townId")
	 * @JMS\Type("int")
	 */
	protected $townId;

	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("town")
	 * @JMS\Type("string")
	 */
	protected $town;
	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("countyId")
	 * @JMS\Type("int")
	 */
	protected $countyId;
	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("nation")
	 * @JMS\Type("string")
	 */
	protected $nation;
	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("city")
	 * @JMS\Type("string")
	 */
	protected $city;

	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("nationId")
	 * @JMS\Type("int")
	 */
	protected $nationId;


	public function getProvinceId(){
		return $this->provinceId;
	}

	public function getCounty(){
		return $this->county;
	}

	public function getCityId(){
		return $this->cityId;
	}

	public function getProvince(){
		return $this->province;
	}
	public function getTownId(){
		return $this->townId;
	}

	public function getTown(){
		return $this->town;
	}

	public function getCountyId(){
		return $this->countyId;
	}

	public function getNation(){
		return $this->nation;
	}

	public function getCity(){
		return $this->city;
	}

	public function getNationId(){
		return $this->nationId;
	}
}