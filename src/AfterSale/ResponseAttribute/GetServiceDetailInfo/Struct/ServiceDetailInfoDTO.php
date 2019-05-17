<?php
/**
 * @author:wangwei<1194023603@qq.com>
 * Project:libjdvop
 * File:ServiceDetailInfoDTO.php
 * Time:2019-05-14 09:46
 */

namespace Zeevin\Libjdvop\AfterSale\ResponseAttribute\GetServiceDetailInfo\Struct;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
class ServiceDetailInfoDTO
{
    /**
     * 商品编号
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("wareId")
     * @JMS\Type("string")
     */
    public $wareId;

    /**
     * 商品名称
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("wareName")
     * @JMS\Type("string")
     */
    public $wareName;

    /**
     * 商品品牌
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("wareBrand")
     * @JMS\Type("string")
     */
    public $wareBrand;

    /**
     * 明细类型
     * 主商品(10), 赠品(20), 附 件(30)，拍拍取主商品就可以
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("afsDetailType")
     * @JMS\Type("int")
     */
    public $afsDetailType;

    /**
     * 附件描述
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("wareDescribe")
     * @JMS\Type("string")
     */
    public $wareDescribe;

    public function getWareId(){
        return $this->wareId;
    }

    public function getWareName(){
        return $this->wareName;
    }

    public function getWareBrand(){
        return $this->wareBrand;
    }

    public function getAfsDetailType(){
        return $this->afsDetailType;
    }

    public function getWareDescribe(){
        return $this->wareDescribe;
    }
}