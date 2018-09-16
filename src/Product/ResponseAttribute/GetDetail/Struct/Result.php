<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/8
 * Time: 下午11:38
 * Source: Result.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Product\ResponseAttribute\GetDetail\Struct;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class Result
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("sku")
     * @JMS\Type("string")
     */
    protected $sku;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("weight")
     * @JMS\Type("float")
     */
    protected $weight;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("imagePath")
     * @JMS\Type("string")
     */
    protected $imagePath;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("state")
     * @JMS\Type("string")
     */
    protected $state;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("brandName")
     * @JMS\Type("string")
     */
    protected $brandName;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("name")
     * @JMS\Type("string")
     */
    protected $name;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("productArea")
     * @JMS\Type("string")
     */
    protected $productArea;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("upc")
     * @JMS\Type("string")
     */
    protected $upc;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("saleUnit")
     * @JMS\Type("string")
     */
    protected $saleUnit;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("category")
     * @JMS\Type("string")
     */
    protected $category;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("eleGift")
     * @JMS\Type("string")
     */
    protected $eleGift;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("introduction")
     * @JMS\Type("string")
     */
    protected $introduction;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("param")
     * @JMS\Type("string")
     */
    protected $param;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("wareQD")
     * @JMS\Type("string")
     */
    protected $wareQD;

    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param string $pixel_size_no
     *
     * @return string
     */
    public function getImagePath($pixel_size_no = 'n4')
    {
        $lists = ['n0','n1','n2','n3','n4'];
        if (in_array($pixel_size_no,$lists))
            return 'https://img13.360buyimg.com/'.$pixel_size_no.'/'.$this->imagePath;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @return mixed
     */
    public function getBrandName()
    {
        return $this->brandName;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getProductArea()
    {
        return $this->productArea;
    }

    /**
     * @return mixed
     */
    public function getUpc()
    {
        return $this->upc;
    }

    /**
     * @return mixed
     */
    public function getSaleUnit()
    {
        return $this->saleUnit;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @return mixed
     */
    public function getEleGift()
    {
        return $this->eleGift;
    }

    /**
     * @return mixed
     */
    public function getIntroduction()
    {
        return $this->introduction;
    }

    /**
     * @return mixed
     */
    public function getParam()
    {
        return $this->param;
    }

    /**
     * @return mixed
     */
    public function getWareQD()
    {
        return $this->wareQD;
    }
}