<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/30
 * Time: 下午3:54
 * Source: Response.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Order\ResponseAttribute\SelectJdOrderIdByThirdOrder;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseResponseAttribute;

class Response extends BaseResponseAttribute
{
    /**
     * 京东订单号
     * @var string
     * 必须
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("result")
     * @JMS\Type("string")
     */
    public $result;

    /**
     * @return string
     */
    public function getResult(): string
    {
        return $this->result;
    }
}