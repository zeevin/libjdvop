<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/22
 * Time: 上午10:27
 * Source: Result.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Product\ResponseAttribute\SkuImage\Struct;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class Result
{
    /**
     * ID
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("id")
     * @JMS\Type("integer")
     */
    protected $id;
    /**
     * 商品编码
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("skuId")
     * @JMS\Type("string")
     */
    protected $skuId;
    /**
     * 地址
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("path")
     * @JMS\Type("string")
     */
    protected $path;
    /**
     * 创建日期
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("created")
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     */
    protected $created;
    /**
     * 修改日期
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("modified")
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     */
    protected $modified;
    /**
     * 是否启用
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("yn")
     * @JMS\Type("integer")
     */
    protected $yn;
    /**
     * 1主图2附图
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("isPrimary")
     * @JMS\Type("integer")
     */
    protected $isPrimary;
    /**
     * 排序
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("orderSort")
     * @JMS\Type("integer")
     */
    protected $orderSort;
    /**
     * 位置
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("position")
     * @JMS\Type("integer")
     */
    protected $position;
    /**
     * 类别：0方图1长图（服装）
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("type")
     * @JMS\Type("integer")
     */
    protected $type;
    /**
     * 特征
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("feature")
     * @JMS\Type("integer")
     */
    protected $feature;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @return mixed
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * @return mixed
     */
    public function getYn()
    {
        return $this->yn;
    }

    /**
     * @return mixed
     */
    public function getisPrimary()
    {
        return $this->isPrimary;
    }

    /**
     * @return mixed
     */
    public function getOrderSort()
    {
        return $this->orderSort;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getFeature()
    {
        return $this->feature;
    }
}