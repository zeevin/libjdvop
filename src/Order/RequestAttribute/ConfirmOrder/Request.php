<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/30
 * Time: 下午2:09
 * Source: Request.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Order\RequestAttribute\ConfirmOrder;

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
     * 企业支付金额，格式:100.00，注意该字段请勿暴露给其他客户，防止传入 错误导致票不一致对账不过
     * @var string
     * 非必须
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("jdOrderId")
     * @JMS\Type("float")
     */
    protected $companyPayMoney;

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

    /**
     * @return string
     */
    public function getCompanyPayMoney(): string
    {
        return $this->companyPayMoney;
    }

    /**
     * @param string $companyPayMoney
     *
     * @return $this
     */
    public function setCompanyPayMoney(string $companyPayMoney)
    {
        $this->companyPayMoney = $companyPayMoney;
        return $this;
    }

}