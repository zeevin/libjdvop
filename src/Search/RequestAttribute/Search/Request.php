<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/27
 * Time: 下午4:25
 * Source: Request.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Search\RequestAttribute\Search;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseRequestAttribute;

class Request extends BaseRequestAttribute
{
    /**
     * 搜索关键字，需要编码
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("keyword")
     * @JMS\Type("string")
     */
    protected $keyword;
    /**
     * 分类 Id,只支持三级类目 Id
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("catId")
     * @JMS\Type("string")
     */
    protected $catId;
    /**
     * 当前第几页
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pageIndex")
     * @JMS\Type("integer")
     */
    protected $pageIndex;
    /**
     * 每页大小
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pageSize")
     * @JMS\Type("integer")
     */
    protected $pageSize;
    /**
     * 价格区间，低价
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("min")
     * @JMS\Type("string")
     */
    protected $min;
    /**
     * 价格区间，高价
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("max")
     * @JMS\Type("string")
     */
    protected $max;
    /**
     * 品牌搜索 多个品牌以逗号分隔，需 要编码
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("brands")
     * @JMS\Type("string")
     */
    protected $brands;

    /**
     * @return mixed
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * @param $keyword
     *
     * @return $this
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCatId()
    {
        return $this->catId;
    }

    /**
     * @param $catId
     *
     * @return $this
     */
    public function setCatId($catId)
    {
        $this->catId = $catId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    /**
     * @param int $pageIndex
     *
     * @return $this
     */
    public function setPageIndex(int $pageIndex)
    {
        $this->pageIndex = $pageIndex;
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
     * @param int $pageSize
     *
     * @return $this
     */
    public function setPageSize(int $pageSize)
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * @param $min
     *
     * @return $this
     */
    public function setMin($min)
    {
        $this->min = $min;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * @param $max
     *
     * @return $this
     */
    public function setMax($max)
    {
        $this->max = $max;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBrands()
    {
        return $this->brands;
    }

    /**
     * @param array $brands
     * @return mixed
     */
    public function setBrands(array $brands)
    {

        $this->brands = implode(',',$brands);
        return $this;
    }


}