<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/10
 * Time: 20:33
 */

namespace Zeevin\Libjdvop\AfterSale\RequestAttribute\GetServiceDetailInfo;

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
     * 获取信息模块
     * 不设置数据表示只获取服务单主信息、商品明细以及客户信息;
     * 1、代表增加获取售后地址信息
     * 2、代表增加获 取客户发货信息
     * 3、代表增加获取退款明细
     * 4、增加获 取跟踪信息
     * 5.获取允许的操作信息
     * @param array $appendInfoSteps
     * @return $this
     */
	public function setAppendInfoSteps(array $appendInfoSteps){
	    $this->data['appendInfoSteps'] = $appendInfoSteps;
        $this->setParam();
	    return $this;
    }

    protected function setParam(){
        $this->param = json_encode($this->data);
    }


}