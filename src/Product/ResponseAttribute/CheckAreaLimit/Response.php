<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/22
 * Time: 上午11:51
 * Source: Response.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Product\ResponseAttribute\CheckAreaLimit;


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

    /**
     * @return mixed|null
     */
    public function getResult()
    {
        if(stripos($this->result,'[')==0)
            return json_decode($this->result);
        else
            return null;
    }
}