<?php
/**
 * @author:wangwei<1194023603@qq.com>
 * Project:libjdvop
 * File:ServiceFinanceDetailInfoDTO.php
 * Time:2019-05-13 16:13
 */

namespace Zeevin\Libjdvop\AfterSale\ResponseAttribute\GetServiceDetailInfo\Struct;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
class ServiceFinanceDetailInfoDTO
{
    /**
     * 退款方式
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("refundWay")
     * @JMS\Type("int")
     */
    public $refundWay;

    /**
     * 退款方式名称
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("refundWayName")
     * @JMS\Type("string")
     */
    public $refundWayName;

    /**
     * 状态
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("status")
     * @JMS\Type("int")
     */
    public $status;

    /**
     * 状态名称
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("statusName")
     * @JMS\Type("string")
     */
    public $statusName;

    /**
     * 退款金额
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("refundPrice")
     * @JMS\Type("float")
     */
    public $refundPrice;

    /**
     * 商品名称
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("wareName")
     * @JMS\Type("string")
     */
    public $wareName;

    /**
     * 商品编号
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("wareId")
     * @JMS\Type("string")
     */
    public $wareId;

    public function getRefundWay(){
        return $this->refundWay;
    }

    public function getRefundWayName(){
        return $this->refundWayName;
    }

    public function getStatus(){
        return $this->status;
    }

    public function getStatusName(){
        return $this->statusName;
    }

    public function getRefundPrice(){
        return $this->refundPrice;
    }

    public function getWareName(){
        return $this->wareName;
    }

    public function getWareId(){
        return $this->wareId;
    }
}