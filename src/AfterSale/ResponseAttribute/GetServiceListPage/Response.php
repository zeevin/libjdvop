<?php
/**
 * @author:wangwei<1194023603@qq.com>
 * Project:libjdvop
 * File:Response.php
 * Time:2019-05-08 15:15
 */

namespace Zeevin\Libjdvop\AfterSale\ResponseAttribute\GetServiceListPage;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseResponseAttribute;
class Response extends BaseResponseAttribute
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("result")
     * @JMS\Type("Zeevin\Libjdvop\AfterSale\ResponseAttribute\GetServiceListPage\Struct\Result")
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