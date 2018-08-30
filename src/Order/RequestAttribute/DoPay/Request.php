<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/30
 * Time: 下午2:40
 * Source: Request.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Order\RequestAttribute\DoPay;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseRequestAttribute;

class Request extends BaseRequestAttribute
{
    /**
     * 京东的订单单号
     * @var string
     * 必须
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("jdOrderId")
     * @JMS\Type("string")
     */
    protected $jdOrderId;

    /**
     * @return string
     */
    public function getJdOrderId(): string
    {
        return $this->jdOrderId;
    }

    /**
     * @param string $jdOrderId
     *
     * @return $this
     */
    public function setJdOrderId(string $jdOrderId)
    {
        $this->jdOrderId = $jdOrderId;
        return $this;
    }
}