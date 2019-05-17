<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/22
 * Time: 上午11:30
 * Source: Result.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Product\ResponseAttribute\GetCommentSummarys\Struct;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class Result
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("averageScore")
     * @JMS\Type("float")
     */
    public $averageScore;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("generalRate")
     * @JMS\Type("float")
     */
    public $generalRate;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("goodRate")
     * @JMS\Type("float")
     */
    public $goodRate;
    /**
     * 商品编码
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("skuId")
     * @JMS\Type("string")
     */
    public $skuId;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("poorRate")
     * @JMS\Type("float")
     */
    public $poorRate;

    /**
     * @return mixed
     */
    public function getAverageScore()
    {
        return $this->averageScore;
    }

    /**
     * @return mixed
     */
    public function getGeneralRate()
    {
        return $this->generalRate;
    }

    /**
     * @return mixed
     */
    public function getGoodRate()
    {
        return $this->goodRate;
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
    public function getPoorRate()
    {
        return $this->poorRate;
    }

}