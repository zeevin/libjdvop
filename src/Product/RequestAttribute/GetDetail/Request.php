<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/8
 * Time: 下午11:16
 * Source: Request.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Product\RequestAttribute\GetDetail;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseRequestAttribute;

class Request extends BaseRequestAttribute
{
    /**
     * 商品编号，只支持单个查询
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("sku")
     * @JMS\Type("string")
     */
    protected $sku;

	/**
	 * @var 默认 false:查询商品基本信息；
	 * true:商品基本信息 + 商品售后信息 + 移动商品详情介绍信息
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("isShow")
	 * @JMS\Type("string")
	 */
    protected $isShow;
    /**
     * 可选扩展参数，支持单个/多个查询[逗号间隔]: appintroduce:移动商品详情介绍信息 shouhou:商品售后信息
     * isFactoryShip 是否厂商直送
     * isEnergySaving 是否政府节能 contractSkuExt 定制商品池开关 ChinaCatalog 中图法分类号
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("queryExts")
     * @JMS\Type("string")
     */
    protected $queryExts;

    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->sku;
    }

	/**
	 * @return mixed
	 */
	public function getIsShow()
	{
		return $this->isShow;
	}

	/**
	 * @param $isShow
	 *
	 * @return $this
	 */
	public function setIsShow($isShow=false)
	{
		if(is_bool($isShow)){
			$this->isShow =  var_export($isShow,true);
		}else{
			$this->isShow = $isShow;
		}

		return $this;
	}
    /**
     * @param $sku
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQueryExts()
    {
        return $this->queryExts;
    }

    /**
     * @param array $queryExts
     *
     * @return $this
     */
    public function setQueryExts($queryExts = [])
    {
        $lists = ['appintroduce','shouhou','isFactoryShip','isEnergySaving','contractSkuExt','ChinaCatalog'];
        $ext = array_intersect_assoc($queryExts,$lists);
        if (!empty($ext))
            $this->queryExts = implode(',',$ext);
        return $this;
    }


}