<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/10
 * Time: 20:41
 */

namespace Zeevin\Libjdvop\AfterSale\ResponseAttribute\GetWareReturnJdComp;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseResponseAttribute;
class Response extends BaseResponseAttribute
{
	/**
     * 业务数据(可提交售后数量)
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("result")
	 * @JMS\Type("array<Zeevin\Libjdvop\AfterSale\ResponseAttribute\GetWareReturnJdComp\Struct\Result>")
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