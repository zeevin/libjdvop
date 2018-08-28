<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/27
 * Time: 下午10:24
 * Source: Request.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Stock\RequestAttribute\GetNewStockById;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseRequestAttribute;

class Request extends BaseRequestAttribute
{
    /**
     * 商品和数量
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("skuNums")
     * @JMS\Type("string")
     */
    protected $skuNums;
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("area")
     * @JMS\Type("string")
     */
    protected $area;

    /**
     * @return mixed
     */
    public function getSkuNums()
    {
        return $this->skuNums;
    }

    /**
     * @param array ...$skuId_num_pair_array
     *
     * @return $this
     */
    public function setSkuNums(array ... $skuId_num_pair_array)
    {
        $this->skuNums = json_encode($skuId_num_pair_array);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param mixed $area
     */
    public function setArea(...$area)
    {
        $this->area = implode('_',$area);
        return $this;
    }

}