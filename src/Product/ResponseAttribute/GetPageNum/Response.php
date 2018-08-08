<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/8
 * Time: 下午10:32
 * Source: Response.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Product\ResponseAttribute\GetPageNum;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseResponseAttribute;
use Zeevin\Libjdvop\Product\ResponseAttribute\GetPageNum\Struct\Page;

class Response extends BaseResponseAttribute
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("result")
     * @JMS\Type("array<Zeevin\Libjdvop\Product\ResponseAttribute\GetPageNum\Struct\Page>")
     */
    protected $result;

    /**
     * @return Page
     */
    public function getResult()
    {
        return $this->result;
    }
}