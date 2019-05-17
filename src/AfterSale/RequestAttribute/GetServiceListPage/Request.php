<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/10
 * Time: 20:33
 */

namespace Zeevin\Libjdvop\AfterSale\RequestAttribute\GetServiceListPage;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\ExclusionPolicy;
use Zeevin\Libjdvop\Core\BaseRequestAttribute;

/**
 * @ExclusionPolicy("none")
 */
class Request extends BaseRequestAttribute
{
	/**
	 * 参数
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("param")
	 * @JMS\Type("string")
	 */
	protected $param;

    /**
     * @JMS\Exclude
     */
	protected $data = [];

	/**
     * 京东订单号
	 * @param int $jdOrderId
	 * @return $this
	 */
	public function setJdOrderId(int $jdOrderId){
		$this->data['jdOrderId'] = $jdOrderId;
        $this->setParam();
		return $this;
	}

    /**
     * 每页记录数
     * @param int $pageSize
     * @return $this
     */
	public function setPageSize(int $pageSize = 30){
	    $this->data['pageSize'] = $pageSize;
        $this->setParam();
	    return $this;
    }

    /**
     * 页码
     * @param int $pageIndex
     * @return $this
     */
    public function setPageIndex(int $pageIndex = 1){
        $this->data['pageIndex'] = $pageIndex;
        $this->setParam();
        return $this;
    }

    protected function setParam(){
        $this->param = json_encode($this->data);
    }


}