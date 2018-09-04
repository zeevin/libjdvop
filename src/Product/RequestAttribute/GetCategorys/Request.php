<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/9/4
 * Time: 下午1:44
 * Source: Request.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Product\RequestAttribute\GetCategorys;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseRequestAttribute;

class Request extends BaseRequestAttribute
{
    /**
     * @var integer
     * 页号
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pageNo")
     * @JMS\Type("integer")
     */
    protected $pageNo;
    /**
     * @var integer
     * 页大小
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pageSize")
     * @JMS\Type("integer")
     */
    protected $pageSize;
    /**
     * @var integer
     * 父ID
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("parentId")
     * @JMS\Type("integer")
     */
    protected $parentId;
    /**
     * @var integer
     * 分类登记
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("catClass")
     * @JMS\Type("integer")
     */
    protected $catClass = 0;

    /**
     * @return int
     */
    public function getPageNo(): int
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

    /**
     * @return int
     */
    public function getPageSize(): int
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
     * @return int
     */
    public function getParentId(): int
    {
        return $this->parentId;
    }

    /**
     * @param int $parentId
     *
     * @return $this
     */
    public function setParentId(int $parentId)
    {
        $this->parentId = $parentId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCatClass(): int
    {
        return $this->catClass;
    }

    /**
     * @param int $catClass
     *
     * @return $this
     */
    public function setCatClass(int $catClass)
    {
        $this->catClass = $catClass;
        return $this;
    }


}