<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/22
 * Time: 上午10:56
 * Source: Response.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Product\ResponseAttribute\GetCommentSummarys;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseResponseAttribute;

class Response extends BaseResponseAttribute
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("result")
     * @JMS\Type("array<Zeevin\Libjdvop\Product\ResponseAttribute\GetCommentSummarys\Struct\Result>")
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