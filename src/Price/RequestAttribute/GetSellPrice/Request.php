<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/9
 * Time: 上午10:56
 * Source: Request.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Price\RequestAttribute\GetSellPrice;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseRequestAttribute;

class Request extends BaseRequestAttribute
{
    /**
     * 商品编号，最多100个商品，英文逗号分隔
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("sku")
     * @JMS\Type("string")
     */
    protected $sku;
    /**
     * 可选扩展参数，支持单个/多个查询[逗号间隔]
     * containsTax: 税率、税额、裸价
     * marketPrice: 市场价(对于图书商品来说，即为定价)
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("queryExts")
     * @JMS\Type("string")
     */
    protected $queryExts;

    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param array $sku
     *
     * @return $this
     */
    public function setSku(array $sku)
    {
        $skus = implode(',', $sku);
        $this->sku = $skus;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQueryExts()
    {
        return $this->queryExts;
    }

    /**
     * @param array $queryExts
     *
     * @return $this
     */
    public function setQueryExts(array $queryExts = [])
    {
        $lists = ['containsTax','marketPrice'];
        $ext = array_intersect_assoc($queryExts,$lists);
        if (!empty($ext))
            $this->queryExts = implode(',',$ext);
        return $this;
    }
}