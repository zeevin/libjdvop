<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/30
 * Time: 下午4:38
 * Source: ChildrenOrderRepVO.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Order\ResponseAttribute\SelectJdOrder\Struct;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class ChildrenOrderRepVO
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
     * 物流状态 0新建 1投妥 2拒收
     * @var integer
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("state")
     * @JMS\Type("integer")
     */
    public $state;
    /**
     * 订单类型 1是父订单 2是子订单
     * @var integer
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("type")
     * @JMS\Type("integer")
     */
    public $type;
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
     * 父订单号
     * @var string
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pOrder")
     * @JMS\Type("string")
     */
    public $pOrder;
    /**
     * 订单状态 0 为取消订单 1 为有效
     * @var integer
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("orderState")
     * @JMS\Type("integer")
     */
    public $orderState;
    /**
     * 0 为未确认下单订单 1 为确认下单订单
     * @var integer
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("submitState")
     * @JMS\Type("integer")
     */
    public $submitState;
    /**
     * 运费(合同有运费配置才会返回，否则不会返回该字段)
     * @var float
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("freight")
     * @JMS\Type("float")
     */
    public $freight;
    /**
     * 订单类别，查询参数中包含 queryExts=orderType 1.普通商品
     * 2.大家电
     * 3.实物礼品卡
     * 4.售后换新单 5.厂家直送订单
     * 6.FBP 订单
     * 7.生鲜
     * 20.电子卡
     * 21.机票
     * 22.酒店
     * 23.合约机号卡
     * 24.火车票 xx.xx(未来不定时增加类别)
     * @var integer
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("orderType")
     * @JMS\Type("integer")
     */
    public $orderType;
    /**
     * 京东状态，查询参数中包含 queryExts=jdOrderState
     * 1.新单
     * 2.等待支付
     * 3.等待支付确认
     * 4.延迟付款确认
     * 5.订单暂停
     * 6.店长最终审核
     * 7.等待打印
     * 8.等待出库
     * 9.等待打包
     * 10.等待发货
     * 11.自提途中
     * 12.上门提货
     * 13.自提退货
     * 14.确认自提
     * 16.等待确认收货
     * 17.配送退货
     * 18.货到付款确认
     * 19.已完成
     * 21.收款确认
     * 22.锁定
     * 29.等待三方出库
     * 30.等待三方发货
     * 31.等待三方发货完成
     * xx.xx(未来不定时增加类别)
     *
     * @var integer
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("jdOrderState")
     * @JMS\Type("integer")
     */
    public $jdOrderState;
    /**
     * 收货地址，查询参数中包含 queryExts=address
     * 解密方式:AD+client_id 前 6 位
     * 解密规则:DES/CBC/PKCS5Padding，Hex
     *
     * @var string
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("address")
     * @JMS\Type("string")
     */
    public $address;
    /**
     * 姓名，查询参数中包含 queryExts=name
     * 解密方式:NA+client_id 前 6 位，
     * 解密规则:DES/CBC/PKCS5Padding，Hex
     *
     * @var string
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("name")
     * @JMS\Type("string")
     */
    public $name;
    /**
     * 联系方式，查询参数中包含 queryExts=mobile
     * 解密方式:MO+client_id 前 6 位
     * 解密规则:DES/CBC/PKCS5Padding，Hex
     *
     * @var string
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("mobile")
     * @JMS\Type("string")
     */
    public $mobile;
    /**
     * 采购单号，查询参数中包含 queryExts=poNo
     * @var string
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("poNo")
     * @JMS\Type("string")
     */
    public $poNo;

    /**
     * @return string
     */
    public function getJdOrderId(): string
    {
        return $this->jdOrderId;
    }

    /**
     * @return int
     */
    public function getState(): int
    {
        return $this->state;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
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
     * @return string
     */
    public function getPOrder(): string
    {
        return $this->pOrder;
    }

    /**
     * @return int
     */
    public function getOrderState(): int
    {
        return $this->orderState;
    }

    /**
     * @return int
     */
    public function getSubmitState(): int
    {
        return $this->submitState;
    }

    /**
     * @return float
     */
    public function getFreight(): float
    {
        return $this->freight;
    }

    /**
     * @return int
     */
    public function getOrderType(): int
    {
        return $this->orderType;
    }

    /**
     * @return int
     */
    public function getJdOrderState(): int
    {
        return $this->jdOrderState;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getMobile(): string
    {
        return $this->mobile;
    }

    /**
     * @return string
     */
    public function getPoNo(): string
    {
        return $this->poNo;
    }


}