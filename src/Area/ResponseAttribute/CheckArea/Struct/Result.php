<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/10
 * Time: 20:46
 */

namespace Zeevin\Libjdvop\Area\ResponseAttribute\CheckArea\Struct;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
class Result
{
	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("success")
	 * @JMS\Type("bool") 是否正确
	 */
	protected $success;

	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("resultCode")
	 * @JMS\Type("int") 结果码
	 */
	protected $resultCode;

	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("addressId")
	 * @JMS\Type("int") 地址id
	 */
	protected $addressId;

	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("message")
	 * @JMS\Type("string") 错误信息
	 */
	protected $message;

	public function getResultCode(){
		return $this->resultCode;
	}

	public function getAddressId(){
		return $this->addressId;
	}

	public function getMessage(){
		return $this->message;
	}
}