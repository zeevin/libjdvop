<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/8
 * Time: 下午10:59
 * Source: Result.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Product\ResponseAttribute\GetSkuByPage\Struct;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class Result
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pageCount")
     * @JMS\Type("string")
     */
    protected $pageCount;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("skuIds")
     * @JMS\Type("array<string>")
     */
    protected $skuIds;

    /**
     * @return mixed
     */
    public function getPageCount()
    {
        return $this->pageCount;
    }

    /**
     * @return mixed
     */
    public function getSkuIds()
    {
        return $this->skuIds;
    }
}