<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/30
 * Time: 下午2:15
 * Source: Response.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Order\ResponseAttribute\Cancel;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseResponseAttribute;

class Response extends BaseResponseAttribute
{
    /**
     * 查询结果(true/false)
     * @var boolean
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("result")
     * @JMS\Type("boolean")
     */
    public $result;

    /**
     * @return bool
     */
    public function isResult(): bool
    {
        return $this->result;
    }
}