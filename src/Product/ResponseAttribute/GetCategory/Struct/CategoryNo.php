<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/9
 * Time: 下午9:36
 * Source: Result.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Product\ResponseAttribute\GetCategory\Struct;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class CategoryNo
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("catId")
     * @JMS\Type("integer")
     */
    public $catId;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("parentId")
     * @JMS\Type("integer")
     */
    public $parentId;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("name")
     * @JMS\Type("string")
     */
    public $name;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("catClass")
     * @JMS\Type("integer")
     */
    public $catClass;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("state")
     * @JMS\Type("integer")
     */
    public $state;

    /**
     * @return mixed
     */
    public function getCatId() :int
    {
        return $this->catId;
    }

    /**
     * @return mixed
     */
    public function getParentId() :int
    {
        return $this->parentId;
    }

    /**
     * @return mixed
     */
    public function getName() :string
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getCatClass() :int
    {
        return $this->catClass;
    }

    /**
     * @return mixed
     */
    public function getState() :int
    {
        return $this->state;
    }
}