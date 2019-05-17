<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/10
 * Time: 20:33
 */

namespace Zeevin\Libjdvop\AfterSale\RequestAttribute\UpdateSendSku;

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
     * 服务单号
	 * @param int $afsServiceId
	 * @return $this
	 */
	public function setAfsServiceId(int $afsServiceId){
		$this->data['afsServiceId'] = $afsServiceId;
        $this->setParam();
		return $this;
	}

    /**
     * 运费
     * @param float $freightMoney
     * @return $this
     */
	public function setFreightMoney(float $freightMoney){
	    $this->data['freightMoney'] = $freightMoney;
        $this->setParam();
	    return $this;
    }

    /**
     * 发运公司 圆通快递、申通快递、韵达快递、中通 快递、宅急送、EMS、顺丰快递
     * @param string $expressCompany
     * @return $this
     */
    public function setExpressCompany(string $expressCompany){
	    $this->data['expressCompany'] = $expressCompany;
        $this->setParam();
	    return $this;
    }

    /**
     * 发货日期 必需，格式为 yyyy-MM-dd HH:mm:ss
     * @param String $deliverDate
     * @return $this
     */
    public function setDeliverDate(string $deliverDate){
        $this->data['deliverDate'] = $deliverDate;
        $this->setParam();
        return $this;
    }

    /**
     * 货运单号 必需，不超过 50
     * @param string $expressCode
     * @return $this
     */
    public function setExpressCode(string $expressCode){
        $this->data['expressCode'] = $expressCode;
        $this->setParam();
        return $this;
    }

    protected function setParam(){
        $this->param = json_encode($this->data);
    }


}