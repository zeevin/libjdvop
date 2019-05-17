<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/30
 * Time: 16:29
 */

namespace Zeevin\Libjdvop\AfterSale\ResponseAttribute\GetServiceListPage\Struct;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
class Result
{
	/**
	 * 组件列表 AfsServicebyCustomerPin 实体
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("serviceInfoList")
	 * @JMS\Type("array<Zeevin\Libjdvop\AfterSale\ResponseAttribute\GetServiceListPage\Struct\ServiceAftersalesAddressInfoDTO>")
	 */
	public $serviceInfoList;

	/**
	 * 总记录数
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("totalNum")
	 * @JMS\Type("int")
	 */
	public $totalNum;

    /**
     * 每页记录数
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pageSize")
     * @JMS\Type("int")
     */
	public $pageSize;

    /**
     * 总页数
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pageNum")
     * @JMS\Type("int")
     */
	public $pageNum;

    /**
     * 当前页数
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pageIndex")
     * @JMS\Type("int")
     */
	public $pageIndex;

	public function getServiceInfoList(){
		return $this->serviceInfoList;
	}

	public function getTotalNum(){
		return $this->totalNum;
	}

	public function getPageSize(){
	    return $this->pageSize;
    }

    public function getPageNum(){
	    return $this->pageNum;
    }

    public function getPageIndex(){
	    return $this->pageIndex;
    }

}