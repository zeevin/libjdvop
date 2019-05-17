<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/30
 * Time: 16:29
 */

namespace Zeevin\Libjdvop\AfterSale\ResponseAttribute\GetServiceDetailInfo\Struct;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
class Result
{
	/**
	 * 服务单号
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("afsServiceId")
	 * @JMS\Type("string")
	 */
	public $afsServiceId;

	/**
     * 服务类型码
	 * 退货(10)、换货(20)、维修(20)
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("customerExpect")
	 * @JMS\Type("int")
	 */
	public $customerExpect;

    /**
     * 服务单申请 时间 格 式 为 yyyy-MM-dd HH:mm:ss
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
     * 是不是有发票 0 没有 1 有
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("isHasInvoice")
     * @JMS\Type("int")
     */
	public $isHasInvoice;

    /**
     * 是不是有检测报告 0 没有 1 有
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("isNeedDetectionReport")
     * @JMS\Type("int")
     */
	public $isNeedDetectionReport;

    /**
     * 是不是有包装 0 没有 1 有
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("isHasPackage")
     * @JMS\Type("int")
     */
	public $isHasPackage;

    /**
     * 上传图片访问地址 不同图片逗号分割,可能为空
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("questionPic")
     * @JMS\Type("string")
     */
    public $questionPic;

    /**
     * 服务单环节
     * 申请阶段(10),
     * 审核不通过(20),
     * 客服审核(21),
     * 商家审核 (22),
     * 京东收货(31),
     * 商家收货 (32),
     * 京东处理(33),
     * 商家处 理(34),
     * 用户确认(40),
     * 完成 (50),
     * 取消 (60);
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("afsServiceStep")
     * @JMS\Type("int")
     */
    public $afsServiceStep;

    /**
     * 服务单环节名称
     * 申请阶段,客服审核,商家审 核,京东收货,商家收货, 京 东处理,商家处理, 用户确 认,完成, 取消;
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("afsServiceStepName")
     * @JMS\Type("string")
     */
    public $afsServiceStepName;

    /**
     * 审核意见
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("approveNotes")
     * @JMS\Type("string")
     */
    public $approveNotes;

    /**
     * 问题描述 可能为空
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("questionDesc")
     * @JMS\Type("string")
     */
    public $questionDesc;

    /**
     * 审核结果
     * 直赔积分(11),
     * 直赔余额 (12),
     * 直赔优惠卷 (13),
     * 直赔京豆 (14),
     * 直赔商品 (21),
     * 上门换新 (22),
     * 自营取件 (31),
     * 客户送货(32),
     * 客户发货 (33),
     * 闪电退款 (34),
     * 虚拟退款 (35),
     * 大家电检测 (80),
     * 大家电安装(81),
     * 大家电移机 (82),
     * 大家电维修(83),
     * 大家电其它 (84);
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("approvedResult")
     * @JMS\Type("int")
     */
    public $approvedResult;

    /**
     * 审核结果名称
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("approvedResultName")
     * @JMS\Type("string")
     */
    public $approvedResultName;

    /**
     * 处理结果
     * 返修换新(23),
     * 退货(40),
     * 换良(50),
     * 原返 60),
     * 病单 (71),
     * 出检(72),
     * 维修 (73),
     * 强制关单 (80),
     * 线下换新(90)
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("processResult")
     * @JMS\Type("int")
     */
    public $processResult;

    /**
     * 处理结果名称
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("processResultName")
     * @JMS\Type("string")
     */
    public $processResultName;

    /**
     * 客户信息
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("serviceCustomerInfoDTO")
     * @JMS\Type("Zeevin\Libjdvop\AfterSale\ResponseAttribute\GetServiceDetailInfo\Struct\ServiceCustomerInfoDTO")
     */
    public $serviceCustomerInfoDTO;

    /**
     * 售后地址信息
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("serviceAftersalesAddressInfoDTO")
     * @JMS\Type("Zeevin\Libjdvop\AfterSale\ResponseAttribute\GetServiceDetailInfo\Struct\ServiceAftersalesAddressInfoDTO")
     */
    public $serviceAftersalesAddressInfoDTO;

    /**
     * 客户发货信息
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("serviceExpressInfoDTO")
     * @JMS\Type("Zeevin\Libjdvop\AfterSale\ResponseAttribute\GetServiceDetailInfo\Struct\ServiceExpressInfoDTO")
     */
    public $serviceExpressInfoDTO;

    /**
     * 退款明细
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("serviceFinanceDetailInfoDTOs")
     * @JMS\Type("array<Zeevin\Libjdvop\AfterSale\ResponseAttribute\GetServiceDetailInfo\Struct\ServiceFinanceDetailInfoDTO>")
     */
    public $serviceFinanceDetailInfoDTOs;

    /**
     * 服务单追踪信息
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("serviceTrackInfoDTOs")
     * @JMS\Type("array<Zeevin\Libjdvop\AfterSale\ResponseAttribute\GetServiceDetailInfo\Struct\ServiceTrackInfoDTO>")
     */
    public $serviceTrackInfoDTOs;

    /**
     * 服务单商品明细
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("serviceDetailInfoDTOs")
     * @JMS\Type("array<Zeevin\Libjdvop\AfterSale\ResponseAttribute\GetServiceDetailInfo\Struct\ServiceDetailInfoDTO>")
     */
    public $serviceDetailInfoDTOs;

    /**
     * 获取服务单 允许的操作 列表
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("allowOperations")
     * @JMS\Type("array")
     */
    public $allowOperations;

	public function getAfsServiceId(){
		return $this->afsServiceId;
	}

	public function getCustomerExpect(){
		return $this->customerExpect;
	}

	public function getAfsApplyTime(){
	    return $this->afsApplyTime;
    }

    public function getOrderId(){
	    return $this->orderId;
    }

    public function getIsHasInvoice(){
	    return $this->isHasInvoice;
    }

    public function getIsNeedDetectionReport(){
	    return $this->isNeedDetectionReport;
    }

    public function getIsHasPackage(){
        return $this->isHasPackage;
    }

    public function getQuestionPic(){
        $arrPic = [];
        if ($this->questionPic) $arrPic = explode(',',$this->questionPic);
	    return $arrPic;
    }

    public function getAfsServiceStep(){
	    return $this->afsServiceStep;
    }

    public function getAfsServiceStepName(){
	    return $this->afsServiceStepName;
    }

    public function getApproveNotes(){
	    return $this->approveNotes;
    }

    public function getQuestionDesc(){
	    return $this->questionDesc;
    }

    public function getApprovedResult(){
	    return $this->approvedResult;
    }

    public function getApprovedResultName(){
	    return $this->approvedResultName;
    }

    public function getProcessResult(){
	    return $this->processResult;
    }

    public function getProcessResultName(){
	    return $this->processResultName;
    }

    public function getServiceCustomerInfoDTO(){
	    return $this->serviceCustomerInfoDTO;
    }

    public function getServiceAftersalesAddressInfoDTO(){
	    return $this->serviceAftersalesAddressInfoDTO;
    }

    public function getServiceExpressInfoDTO(){
	    return $this->serviceExpressInfoDTO;
    }

    public function getServiceFinanceDetailInfoDTOs(){
	    return $this->serviceFinanceDetailInfoDTOs;
    }

    public function getServiceTrackInfoDTOs(){
	    return $this->serviceTrackInfoDTOs;
    }

    public function getServiceDetailInfoDTOs(){
	    return $this->serviceDetailInfoDTOs;
    }

    public function getAllowOperations(){
	    return $this->allowOperations;
    }

}