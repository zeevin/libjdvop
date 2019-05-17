<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/22
 * Time: 上午10:55
 * Source: Request.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Product\RequestAttribute\GetCommentSummarys;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseRequestAttribute;

class Request extends BaseRequestAttribute
{
    /**
     * 商品编号，支持批量，以,分隔 (最高支持 100 个商品)
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("sku")
     * @JMS\Type("string")
     */
    protected $sku;

    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param mixed ...$sku
     *
     * @return $this
     */
    public function setSku(array $sku)
    {
        $this->sku = implode(',',$sku);
        return $this;
    }

}