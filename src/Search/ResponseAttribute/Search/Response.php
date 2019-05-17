<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/27
 * Time: 下午7:29
 * Source: Response.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Search\ResponseAttribute\Search;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseResponseAttribute;

class Response extends BaseResponseAttribute
{
    /**
     * 品牌汇总信息
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("result")
     * @JMS\Type("Zeevin\Libjdvop\Search\ResponseAttribute\Search\Struct\Result")
     */
    public $result;

    /**
     * @return Zeevin\Libjdvop\Search\ResponseAttribute\Search\Struct\Result
     */
    public function getResult()
    {
        return $this->result;
    }

}