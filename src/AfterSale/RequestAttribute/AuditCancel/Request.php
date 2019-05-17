<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/10
 * Time: 20:33
 */

namespace Zeevin\Libjdvop\AfterSale\RequestAttribute\AuditCancel;

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
     * 服务单号集合
	 * @param  $serviceIdList
	 * @return $this
	 */
	public function setServiceIdList($serviceIdList){
	    if (is_array($serviceIdList)){
            $this->data['serviceIdList'] = $serviceIdList;
        }else{
	        $this->data['serviceIdList'] = [$serviceIdList];
        }
        $this->setParam();
		return $this;
	}

    /**
     * 审核意见
     * @param string $approveNotes
     * @return $this
     */
	public function setApproveNotes(string $approveNotes){
	    $this->data['approveNotes'] = $approveNotes;
        $this->setParam();
	    return $this;
    }

    protected function setParam(){
        $this->param = json_encode($this->data);
    }


}