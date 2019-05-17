<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/30
 * Time: 16:29
 */

namespace Zeevin\Libjdvop\Message\ResponseAttribute\Get\Struct;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
class Result
{
	/**
	 * 消息编码
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("id")
	 * @JMS\Type("string")
	 */
	public $id;

	/**
	 * 消息类型
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("type")
	 * @JMS\Type("int")
	 */
	public $type;

	/**
	 * 时间
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("time")
	 * @JMS\Type("string")
	 */
	public $time;

	/**
	 * 消息
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("result")
	 * @JMS\Type("array<string,string>")
	 */
	public $result;

	public function getId(){
		return $this->id;
	}

	public function getType(){
		return $this->type;
	}

	public function getTime(){
		return $this->time;
	}

	public function getResult(){
		return $this->result;
	}

}