<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/27
 * Time: 下午8:03
 * Source: BrandList.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Search\ResponseAttribute\Search\Struct;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class BrandList
{
    /**
     * 品牌id
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("id")
     * @JMS\Type("string")
     */
    public $id;
    /**
     * 品牌名称
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("name")
     * @JMS\Type("string")
     */
    public $name;
    /**
     * 品牌首字母拼音
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pinyin")
     * @JMS\Type("string")
     */
    public $pinyin;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPinyin()
    {
        return $this->pinyin;
    }
}