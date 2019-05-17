<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/30
 * Time: 16:29
 */

namespace Zeevin\Libjdvop\AfterSale\ResponseAttribute\GetCustomerExpectComp\Struct;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
class Result
{
	/**
	 * 服务类型码 退货(10)、换货(20)、维修(30)
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("code")
	 * @JMS\Type("int")
	 */
	public $code;

	/**
	 * 服务类型名称 退货、换货、维修
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