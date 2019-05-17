<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/10
 * Time: 20:33
 */

namespace Zeevin\Libjdvop\AfterSale\RequestAttribute\GetAvailableNumberComp;

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
     * 京东商品编号
     * @param int $skuId
     * @return $this
     */
	public function setSkuId(int $skuId){
	    $this->data['skuId'] = $skuId;
        $this->setParam();
	    return $this;
    }

    protected function setParam(){
        $this->param = json_encode($this->data);
    }


}