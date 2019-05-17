<?php
/**
 * @author:wangwei<1194023603@qq.com>
 * Project:libjdvop
 * File:ServiceExpressInfoDTO.php
 * Time:2019-05-13 11:58
 */

namespace Zeevin\Libjdvop\AfterSale\ResponseAttribute\GetServiceDetailInfo\Struct;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
class ServiceExpressInfoDTO
{
    /**
     * 服务单号
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("afsServiceId")
     * @JMS\Type("string")
     */
    public $afsServiceId;

    /**
     * 运费
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("freightMoney")
     * @JMS\Type("float")
     */
    public $freightMoney;

    /**
     * 快递公司名称 中文
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("expressCompany")
     * @JMS\Type("string")
     */
    public $expressCompany;

    /**
     * 客户发货日期
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("deliverDate")
     * @JMS\Type("string")
     */
    public $deliverDate;

    /**
     * 快递单号
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("expressCode")
     * @JMS\Type("string")
     */
    public $expressCode;

    public function getAfsServiceId(){
        return $this->afsServiceId;
    }

    public function getFreightMoney(){
        return $this->freightMoney;
    }

    public function getExpressCompany(){
        return $this->expressCompany;
    }

    public function getDeliverDate(){
        return $this->deliverDate;
    }

    public function getExpressCode(){
        return $this->expressCode;
    }
}