<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/30
 * Time: 下午7:43
 * Source: Result.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Order\ResponseAttribute\SelectJdOrder\Struct;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class Result
{
    /**
     * 京东父单
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pOrder")
     * @JMS\Type("array<Zeevin\Libjdvop\Order\ResponseAttribute\SelectJdOrder\Struct\ParentOrderRepVO>")
     */
    protected $pOrder;
    /**
     * 京东子单
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("cOrder")
     * @JMS\Type("array<Zeevin\Libjdvop\Order\ResponseAttribute\SelectJdOrder\Struct\ChildrenOrderRepVO>")
     */
    protected $cOrder;
    /**
     * 订单类型
     * 1 是父订单 2 是子订单
     * @var integer
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("type")
     * @JMS\Type("integer")
     */
    protected $type;
    /**
     * 订单状态
     * 0 为未确认下单订单 1 为确认下单订单
     * @var integer
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("submitState")
     * @JMS\Type("integer")
     */
    protected $submitState;
    /**
     * 订单状态
     * 0 为取消订单 1 为有效
     * @var integer
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("orderState")
     * @JMS\Type("integer")
     */
    protected $orderState;

    /**
     * @return mixed
     */
    public function getPOrder()
    {
        return $this->pOrder;
    }

    /**
     * @return mixed
     */
    public function getCOrder()
    {
        return $this->cOrder;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getSubmitState(): int
    {
        return $this->submitState;
    }

    /**
     * @return int
     */
    public function getOrderState(): int
    {
        return $this->orderState;
    }
}