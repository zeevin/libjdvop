<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/22
 * Time: 上午11:43
 * Source: Request.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Product\RequestAttribute\CheckAreaLimit;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseRequestAttribute;

class Request extends BaseRequestAttribute
{
    /**
     * 商品编号，支持批量，以,分隔 (最高支持 100 个商品)
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("skuIds")
     * @JMS\Type("string")
     */
    protected $skuIds;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("province")
     * @JMS\Type("integer")
     */
    protected $province;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("city")
     * @JMS\Type("integer")
     */
    protected $city;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("county")
     * @JMS\Type("integer")
     */
    protected $county;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("town")
     * @JMS\Type("integer")
     */
    protected $town;

    /**
     * @return mixed
     */
    public function getSkuIds()
    {
        return $this->skuIds;
    }

    /**
     * @param mixed ...$skuIds
     *
     * @return $this
     */
    public function setSkuIds(... $skuIds)
    {
        $this->skuIds = implode(',',$skuIds);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @param $province
     *
     * @return $this
     */
    public function setProvince($province)
    {
        $this->province = $province;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param $city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * @param $county
     *
     * @return $this
     */
    public function setCounty($county)
    {
        $this->county = $county;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * @param $town
     *
     * @return $this
     */
    public function setTown($town)
    {
        $this->town = $town;
        return $this;
    }


}