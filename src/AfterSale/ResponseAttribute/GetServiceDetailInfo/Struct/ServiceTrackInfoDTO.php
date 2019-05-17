<?php
/**
 * @author:wangwei<1194023603@qq.com>
 * Project:libjdvop
 * File:ServiceTrackInfoDTO.php
 * Time:2019-05-14 09:31
 */

namespace Zeevin\Libjdvop\AfterSale\ResponseAttribute\GetServiceDetailInfo\Struct;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
class ServiceTrackInfoDTO
{
    /**
     * 服务单号
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("afsServiceId")
     * @JMS\Type("string")
     */
    public $afsServiceId;

    /**
     * 追踪标题
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("title")
     * @JMS\Type("string")
     */
    public $title;

    /**
     * 追踪内容
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("context")
     * @JMS\Type("string")
     */
    public $context;

    /**
     * 提交时间
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("createDate")
     * @JMS\Type("string")
     */
    public $createDate;

    /**
     * 操作人昵称
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("createName")
     * @JMS\Type("string")
     */
    public $createName;

    /**
     * 操作人账号
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("createPin")
     * @JMS\Type("string")
     */
    public $createPin;

    public function getAfsServiceId(){
        return $this->afsServiceId;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getContext(){
        return $this->context;
    }

    public function getCreateDate(){
        return $this->createDate;
    }

    public function getCreateName(){
        return $this->createName;
    }

    public function getCreatePin(){
        return $this->createPin;
    }
}