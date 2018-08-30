<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/8
 * Time: 下午7:28
 * Source: Result.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\CheckOrder\ResponseAttribute\CheckNewOrder\Struct;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class Result
{
    /**
     * 订单总数
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("total")
     * @JMS\Type("int")
     */
    protected $total;
    /**
     * 总页码数
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("curPage")
     * @JMS\Type("int")
     */
    protected $totalPage;
	/**
	 * 当前页码
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("curPage")
	 * @JMS\Type("int")
	 */
    protected $curPage;
    /**
     * 订单信息
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("orders")
     * @JMS\Type("array<Zeevin\Libjdvop\CheckOrder\ResponseAttribute\CheckNewOrder\Struct\Orders>")
     */
    protected $orders;

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @return mixed
     */
    public function getTotalPage()
    {
        return $this->totalPage;
    }

    /**
     * @return mixed
     */
    public function getCurPage()
    {
        return $this->curPage;
    }

    /**
     * @return Zeevin\Libjdvop\OAuth2\ResponseAttribute\CheckNewOrder\Struct\Orders
     */
    public function getOrders()
    {
        return $this->orders;
    }

}