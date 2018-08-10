<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/9
 * Time: 上午11:36
 * Source: Response.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Price\ResponseAttribute\GetSellPrice;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseResponseAttribute;
use Zeevin\Libjdvop\Price\ResponseAttribute\GetSellPrice\Struct\Result;

class Response extends BaseResponseAttribute
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("result")
     * @JMS\Type("array<Zeevin\Libjdvop\Price\ResponseAttribute\GetSellPrice\Struct\Result>")
     */
    protected $result;

    /**
     * @return Result
     */
    public function getResult()
    {
        return $this->result;
    }
}