<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/28
 * Time: 下午3:58
 * Source: StockNewResultVo.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Stock\ResponseAttribute\GetNewStockById\Struct;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class StockNewResultVo
{
    /**
     * 配送地址 id
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("areaId")
     * @JMS\Type("string")
     */
    protected $areaId;
    /**
     * 商品编号
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("skuId")
     * @JMS\Type("integer")
     */
    protected $skuId;
    /**
     * 库存状态编号 33,39,40,36,34
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("stockStateId")
     * @JMS\Type("integer")
     */
    protected $stockStateId;
    /**
     * 库存状态描述
     * 33 有货 现货-下单立即发货
     * 39 有货 在途-正在内部配货，预计 2~6 天到达本仓库 40 有货 可配货-下单后从有货仓库配货
     * 36 预订
     * 34 无货
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("stockStateDesc")
     * @JMS\Type("integer")
     */
    protected $stockStateDesc;
    /**
     * 剩余数量 -1 未知;当库存小于 5 时展示真实库存数量
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("remainNum")
     * @JMS\Type("integer")
     */
    protected $remainNum;

    /**
     * @return mixed
     */
    public function getAreaId()
    {
        return $this->areaId;
    }

    /**
     * @return mixed
     */
    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * @return mixed
     */
    public function getStockStateId()
    {
        return $this->stockStateId;
    }

    /**
     * @return mixed
     */
    public function getStockStateDesc()
    {
        return $this->stockStateDesc;
    }

    /**
     * @return mixed
     */
    public function getRemainNum()
    {
        return $this->remainNum;
    }

}