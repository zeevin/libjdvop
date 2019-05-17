<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/10
 * Time: 20:41
 */

namespace Zeevin\Libjdvop\AfterSale\ResponseAttribute\GetAvailableNumberComp;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseResponseAttribute;
class Response extends BaseResponseAttribute
{
	/**
     * 业务数据(可提交售后数量)
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("result")
	 * @JMS\Type("int")
	 */
	public $result;


    /**
     * @return mixed
     */
    public function getResult()
	{
		return $this->result;
	}
}