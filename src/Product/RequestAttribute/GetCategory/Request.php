<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/9
 * Time: 下午9:32
 * Source: Request.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Product\RequestAttribute\GetCategory;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseRequestAttribute;

class Request extends BaseRequestAttribute
{
    /**
     * 分类 id(可通过商品详情接口查询)
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("cid")
     * @JMS\Type("string")
     */
    protected $cid;

    /**
     * @return mixed
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * @param $cid
     *
     * @return $this
     */
    public function setCid($cid)
    {
        $this->cid = $cid;
        return $this;
    }

}