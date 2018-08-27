<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/27
 * Time: 下午8:00
 * Source: BrandAggregate.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Search\ResponseAttribute\Search\Struct;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class BrandAggregate
{
    /**
     * 品牌列表
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("brandList")
     * @JMS\Type("array<Zeevin\Libjdvop\Search\ResponseAttribute\Search\Struct\BrandList>")
     */
    protected $brandList;
    /**
     * 品牌列表
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pinyinAggr")
     * @JMS\Type("array<string>")
     */
    protected $pinyinAggr;
}