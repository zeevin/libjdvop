<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/27
 * Time: 下午8:16
 * Source: HitResult.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Search\ResponseAttribute\Search\Struct;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class HitResult
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("wareId")
     * @JMS\Type("string")
     */
    public $wareId;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("warePId")
     * @JMS\Type("string")
     */
    public $warePId;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("brandId")
     * @JMS\Type("string")
     */
    public $brandId;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("brand")
     * @JMS\Type("string")
     */
    public $brand;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("wareName")
     * @JMS\Type("string")
     */
    public $wareName;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("catName")
     * @JMS\Type("string")
     */
    public $catName;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("imageUrl")
     * @JMS\Type("string")
     */
    public $imageUrl;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("catId")
     * @JMS\Type("string")
     */
    public $catId;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("cid1")
     * @JMS\Type("string")
     */
    public $cid1;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("cid2")
     * @JMS\Type("string")
     */
    public $cid2;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("cid1Name")
     * @JMS\Type("string")
     */
    public $cid1Name;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("cid2Name")
     * @JMS\Type("string")
     */
    public $cid2Name;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("wstate")
     * @JMS\Type("string")
     */
    public $wstate;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("wyn")
     * @JMS\Type("string")
     */
    public $wyn;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("synonyms")
     * @JMS\Type("string")
     */
    public $synonyms;

    /**
     * @return mixed
     */
    public function getWareId()
    {
        return $this->wareId;
    }

    /**
     * @return mixed
     */
    public function getWarePId()
    {
        return $this->warePId;
    }

    /**
     * @return mixed
     */
    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @return mixed
     */
    public function getWareName()
    {
        return $this->wareName;
    }

    /**
     * @return mixed
     */
    public function getCatName()
    {
        return $this->catName;
    }

    /**
     * @return mixed
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @return mixed
     */
    public function getCatId()
    {
        return $this->catId;
    }

    /**
     * @return mixed
     */
    public function getCid1()
    {
        return $this->cid1;
    }

    /**
     * @return mixed
     */
    public function getCid2()
    {
        return $this->cid2;
    }

    /**
     * @return mixed
     */
    public function getCid1Name()
    {
        return $this->cid1Name;
    }

    /**
     * @return mixed
     */
    public function getCid2Name()
    {
        return $this->cid2Name;
    }

    /**
     * @return mixed
     */
    public function getWstate()
    {
        return $this->wstate;
    }

    /**
     * @return mixed
     */
    public function getWyn()
    {
        return $this->wyn;
    }

    /**
     * @return mixed
     */
    public function getSynonyms()
    {
        return $this->synonyms;
    }
}