<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/28
 * Time: 下午5:09
 * Source: Request.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Stock\RequestAttribute\GetStockById;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseRequestAttribute;

class Request extends BaseRequestAttribute
{
    /**
     * 商品编号 批量以逗号分隔 (最高支持 100 个商品)
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("sku")
     * @JMS\Type("string")
     */
    protected $sku;
    /**
     * 格式:1_0_0 (分别代表 1、2、3 级地址)
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("area")
     * @JMS\Type("string")
     */
    protected $area;

    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param int ...$sku
     *
     * @return $this
     */
    public function setSku(int ... $sku)
    {
        $this->sku = implode(',',$sku);
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
     * @param mixed ...$area
     *
     * @return $this
     */
    public function setArea(...$area)
    {
        $this->area = implode('_',$area);
        return $this;
    }


}