<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/28
 * Time: 下午5:40
 * Source: Response.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Stock\ResponseAttribute\GetStockById;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseResponseAttribute;

class Response extends BaseResponseAttribute
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("result")
     * @JMS\Type("string")
     */
    protected $result;


    public function getResult()
    {
        $ret = json_decode($this->result);
        return $ret;
    }
}