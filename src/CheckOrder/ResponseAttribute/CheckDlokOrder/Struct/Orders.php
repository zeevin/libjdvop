<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/30
 * Time: 14:08
 */

namespace Zeevin\Libjdvop\CheckOrder\ResponseAttribute\CheckDlokOrder\Struct;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
class Orders
{
	/**
	 * 京东订单编号
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("jdOrderId")
	 * @JMS\Type("string")
	 */
    public $jdOrderId;
	/**
	 * 订单状态 0 是新建 1 是妥投 2 是拒收
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("state")
	 * @JMS\Type("int")
	 */
	public $state;
	/**
	 * 是否挂起 0 为为挂起 1 为挂起
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("hangUpState")
	 * @JMS\Type("int")
	 */
	public $hangUpState;

	/**
	 * 开票方式(1 为随货开票， 0 为订单预借， 2 为集中开票 )
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("invoiceState")
	 * @JMS\Type("int")
	 */
	public $invoiceState;

	/**
	 * 订单金额
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("orderPrice")
	 * @JMS\Type("string")
	 */
	public $orderPrice;

	/**
	 * 订单时间
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("time")
	 * @JMS\Type("string")
	 */
	public $time;

	/**
	 * @return mixed
	 */
	public function getJdOrderId()
	{
		return $this->jdOrderId;
	}

	/**
	 * @return mixed
	 */
	public function getState()
	{
		return $this->state;
	}

	/**
	 * @return mixed
	 */
	public function getHangUpState()
	{
		return $this->hangUpState;
	}

	/**
	 * @return mixed
	 */
	public function getInvoiceState()
	{
		return $this->invoiceState;
	}

	/**
	 * @return mixed
	 */
	public function getOrderPrice(){
		return $this->orderPrice;
	}

	/**
	 * @return mixed
	 */
	public function getTime(){
		return $this->time;
	}
}