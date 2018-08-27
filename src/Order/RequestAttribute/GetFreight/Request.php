<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/27
 * Time: 下午2:13
 * Source: Request.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Order\RequestAttribute\GetFreight;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseRequestAttribute;

class Request extends BaseRequestAttribute
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("sku")
     * @JMS\Type("string")
     */
    protected $sku;
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
     * 非必须
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("town")
     * @JMS\Type("integer")
     */
    protected $town = 0;
    /**
     * 1：货到付款，2：邮局付款，4：在线支付（余额支付），5：公司转账，6：银行转账，7：网银钱包， 101：金采支付
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("paymentType")
     * @JMS\Type("string")
     */
    protected $paymentType = 4;

    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param mixed ...$skuId_num_paris_array
     *
     * @return $this
     */
    public function setSku(... $skuId_num_paris_array)
    {
        $this->sku = json_encode($skuId_num_paris_array);
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
    public function setProvince(int $province)
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
     * @param int $city
     *
     * @return $this
     */
    public function setCity(int $city)
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
     * @param int $county
     *
     * @return $this
     */
    public function setCounty(int $county)
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
     * @param int $town
     *
     * @return $this
     */
    public function setTown(int $town)
    {
        $this->town = $town;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * @param  $paymentType
     *
     * @return $this
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;
        return $this;
    }
}