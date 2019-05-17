<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/8
 * Time: 下午7:25
 * Source: Response.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\CheckOrder\ResponseAttribute\CheckDlokOrder;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseResponseAttribute;
use Zeevin\Libjdvop\CheckOrder\ResponseAttribute\CheckDlokOrder\Struct\Result;

class Response extends BaseResponseAttribute
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("result")
     * @JMS\Type("Zeevin\Libjdvop\CheckOrder\ResponseAttribute\CheckDlokOrder\Struct\Result")
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