<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/27
 * Time: 下午8:39
 * Source: Response.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Product\ResponseAttribute\Check;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseResponseAttribute;

class Response extends BaseResponseAttribute
{
    /**
     * 商品编号
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("result")
     * @JMS\Type("array<Zeevin\Libjdvop\Product\ResponseAttribute\Check\Struct\Result>")
     */
    public $result;

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

}