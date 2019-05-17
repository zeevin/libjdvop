<?php
/**
 * @author:wangwei<1194023603@qq.com>
 * Project:libjdvop
 * File:ServiceCustomerInfoDTO.php
 * Time:2019-05-13 11:38
 */

namespace Zeevin\Libjdvop\AfterSale\ResponseAttribute\GetServiceDetailInfo\Struct;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
class ServiceCustomerInfoDTO
{
    /**
     * 客户京东账号
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("customerPin")
     * @JMS\Type("string")
     */
    public $customerPin;

    /**
     * 用户昵称
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("customerName")
     * @JMS\Type("string")
     */
    public $customerName;

    /**
     * 服务单联系人
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("customerContactName")
     * @JMS\Type("string")
     */
    public $customerContactName;

    /**
     * 联系电话
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("customerTel")
     * @JMS\Type("string")
     */
    public $customerTel;

    /**
     * 手机号
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("customerMobilePhone")
     * @JMS\Type("string")
     */
    public $customerMobilePhone;

    /**
     * 电子邮件地址
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("customerEmail")
     * @JMS\Type("string")
     */
    public $customerEmail;

    /**
     * 邮编
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("customerPostcode")
     * @JMS\Type("string")
     */
    public $customerPostcode;

    public function getCustomerPin(){
        return $this->customerPin;
    }

    public function getCustomerName(){
        return $this->customerName;
    }

    public function getCustomerContactName(){
        return $this->customerContactName;
    }

    public function getCustomerTel(){
        return $this->customerTel;
    }

    public function getCustomerMobilePhone(){
        return $this->customerMobilePhone;
    }

    public function getCustomerEmail(){
        return $this->customerEmail;
    }

    public function getCustomerPostcode(){
        return $this->customerPostcode;
    }
}