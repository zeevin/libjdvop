<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/30
 * Time: 下午4:40
 * Source: OrderSkuVO.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Order\ResponseAttribute\SelectJdOrder\Struct;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class OrderSkuVO
{
    /**
     * 商品编码
     * @var string
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("skuId")
     * @JMS\Type("string")
     */
    public $skuId;
    /**
     * 商品名称
     * @var string
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("name")
     * @JMS\Type("string")
     */
    public $name;
    /**
     * 商品数据
     * @var integer
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("num")
     * @JMS\Type("integer")
     */
    public $num;
    /**
     * 商品类型 0普通、1附件、2赠品
     * @var integer
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("type")
     * @JMS\Type("integer")
     */
    public $type;
    /**
     * 商品类目
     * @var integer
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("category")
     * @JMS\Type("integer")
     */
    public $category;
    /**
     * 商品价格
     * @var float
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("price")
     * @JMS\Type("float")
     */
    public $price;
    /**
     * 商品裸价
     * @var float
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("nakedPrice")
     * @JMS\Type("float")
     */
    public $nakedPrice;
    /**
     * 商品税费
     * @var float
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("taxPrice")
     * @JMS\Type("integer")
     */
    public $taxPrice;
    /**
     * oid为主商品skuid，如果本身是主商品，则oid为0
     * @var integer
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("oid")
     * @JMS\Type("integer")
     */
    public $oid;
    /**
     * 商品税率
     * @var integer
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("tax")
     * @JMS\Type("integer")
     */
    public $tax;

    /**
     * @return string
     */
    public function getSkuId(): string
    {
        return $this->skuId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getNum(): int
    {
        return $this->num;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getCategory(): int
    {
        return $this->category;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return float
     */
    public function getNakedPrice(): float
    {
        return $this->nakedPrice;
    }

    /**
     * @return float
     */
    public function getTaxPrice(): float
    {
        return $this->taxPrice;
    }

    /**
     * @return int
     */
    public function getOid(): int
    {
        return $this->oid;
    }

    /**
     * @return int
     */
    public function getTax(): int
    {
        return $this->tax;
    }

}