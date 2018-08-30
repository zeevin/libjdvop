<?php
/**
 * @link   https://www.init.lu
 * @author wangwei
 * Date: 2018/8/8
 * Time: 下午4:34
 * Source: Request.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\CheckOrder\RequestAttribute\CheckRefuseOrder;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseRequestAttribute;

class Request extends BaseRequestAttribute
{
    /**
     * 2013-11-7 （不包含当天）
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("date")
     * @JMS\Type("string")
     */
    protected $date;
    /**
     * 当前页码， 默认为 1
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pageNo")
     * @JMS\Type("int")
     */
    protected $pageNo = 1;
    /**
     * 页大小取值[1,100]， 默认 20
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pageSize")
     * @JMS\Type("int")
     */
    protected $pageSize = 20;
    /**
     * 最小订单号索引游标，为解决大于 1W 条订单无法查询问题。
     * 注意事项：该字段和 page/pageNo 互斥，订单数小于 1W 可以用
     * page/pageNo 分页的方式来查询，订单数大于 1W 则需要使用索引游标的方
     * 式来读取数据。
     * 使用方式：第一次查询无需传入该字段，返回订单信息后（第一次记录订单
     * 总条数）；第二次查询将第一次查询结果中最小的订单号传入，查询返回结果
     * 中不包含传入的订单号；递归这个流程，直到接口返回无数据为止，订单查
     * 询完毕，核对本地订单数和第一次接口返回的订单数目是否一致。
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("jdOrderIdIndex")
     * @JMS\Type("string")
     */
    protected $jdOrderIdIndex;


    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param $date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPageNo()
    {
        return $this->pageNo;
    }

    /**
     * @param $pageNo
     *
     * @return $this
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize = 20)
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getjdOrderIdIndex()
    {
        return $this->jdOrderIdIndex;
    }

    /**
     * @param $jdOrderIdIndex
     *
     * @return $this
     */
    public function setJdOrderIdIndex($jdOrderIdIndex)
    {
        $this->jdOrderIdIndex = $jdOrderIdIndex;
        return $this;
    }
}