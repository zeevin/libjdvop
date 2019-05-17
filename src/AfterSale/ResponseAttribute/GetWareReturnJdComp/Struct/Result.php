<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/30
 * Time: 16:29
 */

namespace Zeevin\Libjdvop\AfterSale\ResponseAttribute\GetWareReturnJdComp\Struct;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
class Result
{
	/**
	 * 服务类型码 上门取件(4)、客户发货(40)、客户送货(7)
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("code")
	 * @JMS\Type("int")
	 */
	public $code;

	/**
	 * 服务类型名称 上门取件、客户发货、客户送货
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("name")
	 * @JMS\Type("string")
	 */
	public $name;

	public function getCode(){
		return $this->code;
	}

	public function getName(){
		return $this->name;
	}

}