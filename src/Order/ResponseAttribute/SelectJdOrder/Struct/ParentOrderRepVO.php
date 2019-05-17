<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/30
 * Time: 下午4:36
 * Source: ParentOrderRepVO.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Order\ResponseAttribute\SelectJdOrder\Struct;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class ParentOrderRepVO
{
    /**
     * 京东订单编号
     * @var string
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("jdOrderId")
     * @JMS\Type("string")
     */
    public $jdOrderId;
    /**
     * 订单税费
     * @var float
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("orderTaxPrice")
     * @JMS\Type("float")
     */
    public $orderTaxPrice;
    /**
     * 订单裸价
     * @var float
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("orderNakedPrice")
     * @JMS\Type("float")
     */
    public $orderNakedPrice;
    /**
     * 订单价格
     * @var float
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("orderPrice")
     * @JMS\Type("float")
     */
    public $orderPrice;
    /**
     * 商品列表
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("sku")
     * @JMS\Type("array<Zeevin\Libjdvop\Order\ResponseAttribute\SelectJdOrder\Struct\OrderSkuVO>")
     */
    public $sku;
    /**
     * 运费
     * @var float
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("freight")
     * @JMS\Type("float")
     */
    public $freight;

    /**
     * @return string
     */
    public function getJdOrderId(): string
    {
        return $this->jdOrderId;
    }

    /**
     * @return float
     */
    public function getOrderTaxPrice(): float
    {
        return $this->orderTaxPrice;
    }

    /**
     * @return float
     */
    public function getOrderNakedPrice(): float
    {
        return $this->orderNakedPrice;
    }

    /**
     * @return float
     */
    public function getOrderPrice(): float
    {
        return $this->orderPrice;
    }

    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @return float
     */
    public function getFreight(): float
    {
        return $this->freight;
    }

}