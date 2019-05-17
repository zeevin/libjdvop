<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/22
 * Time: 上午10:19
 * Source: Response.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Product\ResponseAttribute\SkuImage;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseResponseAttribute;

class Response extends BaseResponseAttribute
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("result")
     * @JMS\Type("array<string,array<Zeevin\Libjdvop\Product\ResponseAttribute\SkuImage\Struct\Result>>")
     */
    public $result;

    /**
     * @return Result
     */
    public function getResult()
    {
        return $this->result;
    }
}