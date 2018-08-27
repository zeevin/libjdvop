<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/27
 * Time: 下午8:40
 * Source: Result.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Product\ResponseAttribute\Check\Struct;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class Result
{
    /**
     * 商品编号
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("skuId")
     * @JMS\Type("string")
     */
    protected $skuId;
    /**
     * 商品名称
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("name")
     * @JMS\Type("string")
     */
    protected $name;
    /**
     * 是否可售 1是2否
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("saleState")
     * @JMS\Type("integer")
     */
    protected $saleState;
    /**
     * 是否可开增票 1支持 0不支持
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("isCanVAT")
     * @JMS\Type("integer")
     */
    protected $isCanVAT;
    /**
     * 是否支持7天无理由退款 1是0否
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("is7ToReturn")
     * @JMS\Type("integer")
     */
    protected $is7ToReturn;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getSaleState()
    {
        return $this->saleState;
    }

    /**
     * @return mixed
     */
    public function getisCanVAT()
    {
        return $this->isCanVAT;
    }

    /**
     * @return mixed
     */
    public function getIs7ToReturn()
    {
        return $this->is7ToReturn;
    }


}