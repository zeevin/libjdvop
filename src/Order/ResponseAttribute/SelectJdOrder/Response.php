<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/30
 * Time: 下午4:29
 * Source: Response.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Order\ResponseAttribute\SelectJdOrder;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseResponseAttribute;
use Zeevin\Libjdvop\Order\ResponseAttribute\SelectJdOrder\Struct\Result;

class Response extends BaseResponseAttribute
{
    /**
     * @var Result
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("result")
     * @JMS\Type("Zeevin\Libjdvop\Order\ResponseAttribute\SelectJdOrder\Struct\Result")
     */
   protected $result;

    /**
     * @return Result
     */
    public function getResult(): Result
    {
        return $this->result;
    }

}