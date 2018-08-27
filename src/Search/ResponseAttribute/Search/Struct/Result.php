<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/27
 * Time: 下午7:31
 * Source: Result.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Search\ResponseAttribute\Search\Struct;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class Result
{
    /**
     * 总记录数
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("resultCount")
     * @JMS\Type("integer")
     */
    protected $resultCount;
    /**
     * 当前第几页
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pageIndex")
     * @JMS\Type("integer")
     */
    protected $pageIndex;
    /**
     * 每页大小
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pageSize")
     * @JMS\Type("integer")
     */
    protected $pageSize;
    /**
     * 总页数
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pageCount")
     * @JMS\Type("integer")
     */
    protected $pageCount;
    /**
     * 品牌汇总信息
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("brandAggregate")
     * @JMS\Type("Zeevin\Libjdvop\Search\ResponseAttribute\Search\Struct\BrandAggregate")
     */
    protected $brandAggregate;
    /**
     * 相关分类汇总信息
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("categoryAggregate")
     * @JMS\Type("array<string,array>")
     */
    protected $categoryAggregate;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("priceIntervalAggregate")
     * @JMS\Type("array")
     */
    protected $priceIntervalAggregate;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("expandAttrAggregate")
     * @JMS\Type("string")
     */
    protected $expandAttrAggregate;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("hitResult")
     * @JMS\Type("array<Zeevin\Libjdvop\Search\ResponseAttribute\Search\Struct\HitResult>")
     */
    protected $hitResult;
}