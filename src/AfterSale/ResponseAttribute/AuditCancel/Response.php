<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/10
 * Time: 20:41
 */

namespace Zeevin\Libjdvop\AfterSale\ResponseAttribute\AuditCancel;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseResponseAttribute;
class Response extends BaseResponseAttribute
{
	/**
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("result")
	 * @JMS\Type("bool")
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