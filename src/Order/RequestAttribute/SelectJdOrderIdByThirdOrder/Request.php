<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/30
 * Time: 下午3:54
 * Source: Request.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Order\RequestAttribute\SelectJdOrderIdByThirdOrder;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseRequestAttribute;

class Request extends BaseRequestAttribute
{
    /**
     * 客户系统订单号
     * @var string
     * 必须
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("thirdOrder")
     * @JMS\Type("string")
     */
    protected $thirdOrder;

    /**
     * @return string
     */
    public function getThirdOrder(): string
    {
        return $this->thirdOrder;
    }

    /**
     * @param string $thirdOrder
     *
     * @return $this
     */
    public function setThirdOrder(string $thirdOrder)
    {
        $this->thirdOrder = $thirdOrder;
        return $this;
    }

}