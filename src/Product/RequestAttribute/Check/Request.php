<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/27
 * Time: 下午8:36
 * Source: Request.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Product\RequestAttribute\Check;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseRequestAttribute;

class Request extends BaseRequestAttribute
{
    /**
     * 商品编号，支持批量，以,分隔 (最高支持 100 个商品)
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("skuIds")
     * @JMS\Type("string")
     */
    protected $skuIds;

    /**
     * @return mixed
     */
    public function getSkuIds()
    {
        return $this->skuIds;
    }

    /**
     * @param mixed ...$skuIds
     *
     * @return $this
     */
    public function setSkuIds(... $skuIds)
    {
        $this->skuIds = implode(',',$skuIds);
        return $this;
    }
}