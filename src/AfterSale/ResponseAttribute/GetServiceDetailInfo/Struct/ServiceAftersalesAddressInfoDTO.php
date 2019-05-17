<?php
/**
 * @author:wangwei<1194023603@qq.com>
 * Project:libjdvop
 * File:ServiceAftersalesAddressInfoDTOesAddressInfoDTO.php
 * Time:2019-05-08 15:25
 */

namespace Zeevin\Libjdvop\AfterSale\ResponseAttribute\GetServiceDetailInfo\Struct;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
class ServiceAftersalesAddressInfoDTO
{
    /**
     * 售后地址
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("address")
     * @JMS\Type("string")
     */
    public $address;

    /**
     * 售后电话
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("tel")
     * @JMS\Type("int")
     */
    public $tel;

    /**
     * 售后联系人
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("linkMan")
     * @JMS\Type("string")
     */
    public $linkMan;

    /**
     * 售后邮编
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("postCode")
     * @JMS\Type("string")
     */
    public $postCode;


    public function getAddress(){
        return $this->address;
    }

    public function getTel(){
        return $this->tel;
    }

    public function getLinkMan(){
        return $this->linkMan;
    }

    public function getPostCode(){
        return $this->postCode;
    }
}