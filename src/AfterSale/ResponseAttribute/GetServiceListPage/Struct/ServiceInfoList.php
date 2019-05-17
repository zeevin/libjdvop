<?php
/**
 * @author:wangwei<1194023603@qq.com>
 * Project:libjdvop
 * File:ServiceAftersalesAddressInfoDTOesAddressInfoDTO.php
 * Time:2019-05-08 15:25
 */

namespace Zeevin\Libjdvop\AfterSale\ResponseAttribute\GetServiceListPage\Struct;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
class ServiceInfoList
{
    /**
     * 服务单号
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("afsServiceId")
     * @JMS\Type("int")
     */
    public $afsServiceId;

    /**
     * 服务类型码 退货(10)、换货(20)、维修 (30)
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("customerExpect")
     * @JMS\Type("int")
     */
    public $customerExpect;

    /**
     * 服务类型名称
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("customerExpectName")
     * @JMS\Type("string")
     */
    public $customerExpectName;

    /**
     * 服务单申请时间 格 式 为 yyyy-MM-dd HH:mm:ss
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("afsApplyTime")
     * @JMS\Type("string")
     */
    public $afsApplyTime;

    /**
     * 订单号
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("orderId")
     * @JMS\Type("string")
     */
    public $orderId;

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
     * 服务单环节
     * 申请阶段(10),
     * 审核不通 过(20),
     * 客服审核(21),
     * 商家审核(22),
     * 京东收货 (31),
     * 商家收货(32),
     * 京东 处理(33),
     * 商家处理(34),
     * 用户确认(40),
     * 完成(50),
     * 取消(60);
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("afsServiceStep")
     * @JMS\Type("int")
     */
    public $afsServiceStep;

    /**
     * 服务单环节名称
     * 申请阶段,客服审核,商家 审核,京东收货,商家收 货, 京东处理,商家处理, 用户确认,完成, 取消;
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("afsServiceStepName")
     * @JMS\Type("string")
     */
    public $afsServiceStepName;

    /**
     * 是否可取消
     * 0 代表否，1 代表是
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("cancel")
     * @JMS\Type("int")
     */
    public $cancel;

    public function getAfsServiceId(){
        return $this->afsServiceId;
    }

    public function getCustomerExpect(){
        return $this->customerExpect;
    }

    public function getCustomerExpectName(){
        return $this->customerExpectName;
    }

    public function getAfsApplyTime(){
        return $this->afsApplyTime;
    }

    public function getOrderId(){
        return $this->orderId;
    }

    public function getWareId(){
        return $this->wareId;
    }

    public function getWareName(){
        return $this->wareName;
    }

    public function getAfsServiceStep(){
        return $this->afsServiceStep;
    }

    public function getAfsServiceStepName(){
        return $this->afsServiceStepName;
    }

    public function getCancel(){
        return $this->cancel;
    }
}