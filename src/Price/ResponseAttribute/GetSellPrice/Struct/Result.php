<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/9
 * Time: 上午11:36
 * Source: Result.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Price\ResponseAttribute\GetSellPrice\Struct;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class Result
{
    /**
     * 商品ID
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("skuId")
     * @JMS\Type("integer")
     */
    public $skuId;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("jdPrice")
     * @JMS\Type("float")
     */
    public $jdPrice;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("price")
     * @JMS\Type("float")
     */
    public $price;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("tax")
     * @JMS\Type("float")
     */
    public $tax;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("taxPrice")
     * @JMS\Type("float")
     */
    public $taxPrice;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("nakedPrice")
     * @JMS\Type("float")
     */
    public $nakedPrice;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("marketPrice")
     * @JMS\Type("float")
     */
    public $marketPrice;

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
    public function getJdPrice()
    {
        return $this->jdPrice;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * @return mixed
     */
    public function getTaxPrice()
    {
        return $this->taxPrice;
    }

    /**
     * @return mixed
     */
    public function getNakedPrice()
    {
        return $this->nakedPrice;
    }

    /**
     * @return mixed
     */
    public function getMarketPrice()
    {
        return $this->marketPrice;
    }
}