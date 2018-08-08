<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/8
 * Time: 下午10:41
 * Source: Request.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Product\RequestAttribute\GetSkuByPage;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseRequestAttribute;

class Request extends BaseRequestAttribute
{
    /**
     * 商品池编号
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pageNum")
     * @JMS\Type("string")
     */
    protected $pageNum;
    /**
     * 页码，默认取第一页;每页最多 10000 条数据，品类商品池可能存在多页数据
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pageNo")
     * @JMS\Type("integer")
     */
    protected $pageNo;

    /**
     * @return int
     */
    public function getPageNum() :int
    {
        return $this->pageNum;
    }

    /**
     * @param $pageNum
     *
     * @return $this
     */
    public function setPageNum($pageNum)
    {
        $this->pageNum = $pageNum;
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
     * @param int $pageNo
     *
     * @return $this
     */
    public function setPageNo(int $pageNo)
    {
        $this->pageNo = $pageNo;
        return $this;
    }


}