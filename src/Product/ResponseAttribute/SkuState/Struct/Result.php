<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/21
 * Time: 下午5:20
 * Source: Result.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Product\ResponseAttribute\SkuState\Struct;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class Result
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("state")
     * @JMS\Type("string")
     */
    public $state;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("sku")
     * @JMS\Type("string")
     */
    public $sku;

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
    public function getSku()
    {
        return $this->sku;
    }


}