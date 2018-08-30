<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/30
 * Time: 下午4:18
 * Source: Request.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Order\RequestAttribute\SelectJdOrder;


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
     * 扩展参数，支持单个/多个查询[逗号间隔]
     * orderType:订单类别
     * jdOrderState:订单状态
     * name:姓名(加密)
     * address:地址(加密)
     * mobil:联系方式(加密)
     * remark:备注
     * paymentType:支付方式
     * poNo:采购单号
     *
     * @var string
     * 非必须
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("jdOrderId")
     * @JMS\Type("string")
     */
    protected $queryExts;

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
    public function getQueryExts(): string
    {
        return $this->queryExts;
    }

    /**
     * @param string ...$queryExts
     *
     * @return $this
     */
    public function setQueryExts(string ... $queryExts)
    {
        $this->queryExts = implode(',',$queryExts);
        return $this;
    }

}