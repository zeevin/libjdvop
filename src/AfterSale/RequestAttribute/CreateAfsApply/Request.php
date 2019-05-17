<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/10
 * Time: 20:33
 */

namespace Zeevin\Libjdvop\AfterSale\RequestAttribute\CreateAfsApply;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\ExclusionPolicy;
use Zeevin\Libjdvop\Core\BaseRequestAttribute;

/**
 * @ExclusionPolicy("none")
 */
class Request extends BaseRequestAttribute
{
	/**
	 * 参数
	 * @JMS\XmlElement(cdata=false)
	 * @SerializedName("param")
	 * @JMS\Type("string")
	 */
	protected $param;

    /**
     * @JMS\Exclude
     */
	protected $data = [];

	/**
     * 订单号
	 * @param int $jdOrderId
	 * @return $this
	 */
	public function setJdOrderId(int $jdOrderId){
		$this->data['jdOrderId'] = $jdOrderId;
        $this->setParam();
		return $this;
	}

    /**
     * 客户预期 必填，退货(10)、换货(20)、 维修(30)
     * @param int $customerExpect
     * @return $this
     */
	public function setCustomerExpect(int $customerExpect){
	    $this->data['customerExpect'] = $customerExpect;
        $this->setParam();
	    return $this;
    }

    /**
     * 产品问题描述 最多 1000 字符
     * @param string $questionDesc
     * @return $this
     */
    public function setQuestionDesc(string $questionDesc){
	    $this->data['questionDesc'] = $questionDesc;
        $this->setParam();
	    return $this;
    }

    /**
     * 是否需要检测报告
     * @param bool $isNeedDetectionReport
     * @return $this
     */
    public function setIsNeedDetectionReport(bool $isNeedDetectionReport){
        $this->data['isNeedDetectionReport'] = $isNeedDetectionReport;
        $this->setParam();
        return $this;
    }

    /**
     * 问题描述图片 最多 2000 字符 支持多张图片，用逗号分隔 (英文逗号)
     * @param array|string $questionPic
     * @return $this
     */
    public function setQuestionPic($questionPic){
        if(is_string($questionPic)){
            $this->data['questionPic'] = $questionPic;
        }
        if(is_array($questionPic)){
            $this->data['questionPic'] = implode(',',$questionPic);
        }
        $this->setParam();
        return $this;
    }

    /**
     * 是否有包装
     * @param bool $isHasPackage
     * @return $this
     */
    public function setIsHasPackage(bool $isHasPackage){
        $this->data['isHasPackage'] = $isHasPackage;
        $this->setParam();
        return $this;
    }

    /**
     * 包装描述
     * 0 无包装 10 包装完整 20 包装破损
     * @param int $packageDesc
     * @return $this
     */
    public function setPackageDesc(int $packageDesc){
        $this->data['packageDesc'] = $packageDesc;
        $this->setParam();
        return $this;
    }

    /**
     * 客户实体信息
     * @param string $customerContactName 联系人 最多 50 字符，能获取到就必填
     * @param string $customerMobilePhone 手机号
     * @param string $customerEmail Email
     * @param string $customerPostcode 邮编
     * @param string $customerTel 联系电话 最多 50 字符，能获取到就必填
     * @return $this
     */
    public function setAsCustomerDto(string $customerContactName,string $customerTel, string $customerEmail,string $customerPostcode,string $customerMobilePhone=''){
        $this->data['asCustomerDto'] = [
            'customerContactName' => $customerContactName,
            'customerTel' => $customerTel,
            'customerEmail' => $customerEmail,
            'customerPostcode' => $customerPostcode
        ];
        if($customerMobilePhone) $this->data['asCustomerDto']['customerMobilePhone'] = $customerMobilePhone;
        $this->setParam();
        return $this;
    }

    /**
     * 取件信息实体，即原商品如何返回京东或者卖家，如果不为取件方式，默认设置 订单中省市县镇信息
     * @param int $pickwareType 取件方式 必填 4 上门取件 7 客户送货 40 客户发货
     * @param int|null $pickwareProvince 取件省
     * @param int|null $pickwareCity 取件市
     * @param int|null $pickwareCounty 取件县
     * @param int|null $pickwareVillage 取件乡镇
     * @param string|null $pickwareAddress 取件街道地址
     * @return $this
     */
    public function setAsPickwareDto(int $pickwareType, $pickwareProvince = null, $pickwareCity = null, $pickwareCounty = null, $pickwareVillage = null, $pickwareAddress = null){
        $this->data['asPickwareDto'] = [
            'pickwareType' => $pickwareType
        ];
        if ($pickwareProvince !== null){
            $this->data['asPickwareDto']['pickwareProvince'] = $pickwareProvince;
        }
        if ($pickwareCity !== null){
            $this->data['asPickwareDto']['pickwareCity'] = $pickwareCity;
        }

        if ($pickwareCounty !== null){
            $this->data['asPickwareDto']['pickwareCounty'] = $pickwareCounty;
        }

        if ($pickwareVillage !== null){
            $this->data['asPickwareDto']['pickwareVillage'] = $pickwareVillage;
        }

        if ($pickwareAddress !== null){
            $this->data['asPickwareDto']['pickwareAddress'] = $pickwareAddress;
        }
        $this->setParam();
        return $this;

    }

    /**
     * 返件信息实体，即商品如何返回客户手中
     * @param int $returnwareType 返件方式 自营配送(10),第三方配送(20);换、修这两种 情况必填(默认值)
     * @param int $returnwareProvince 返件省
     * @param int $returnwareCity 返件市
     * @param int $returnwareCounty 返件县
     * @param int $returnwareVillage 返件乡镇
     * @param string $returnwareAddress 返件街道地址
     * @return $this
     */
    public function setAsReturnwareDto(int $returnwareType,int $returnwareProvince,int $returnwareCity,int $returnwareCounty,int $returnwareVillage,string $returnwareAddress){
        $this->data['asReturnwareDto'] = [//返件信息实体
            'returnwareType'=>$returnwareType,//反件方式，自营配送
            'returnwareProvince'=>$returnwareProvince,//返件省
            'returnwareCity'=>$returnwareCity,
            'returnwareCounty'=>$returnwareCounty,
            'returnwareVillage'=>$returnwareVillage,
            'returnwareAddress'=>$returnwareAddress
        ];
        $this->setParam();
        return $this;

    }

    /**
     * 申请单明细
     * @param int $skuId 商品编号
     * @param int $skuNum 商品申请数量
     * @return $this
     */
    public function setAsDetailDto(int $skuId, int $skuNum){
        $this->data['asDetailDto'] = [
            'skuId'=>$skuId,
            'skuNum'=>$skuNum
        ];
        $this->setParam();
        return $this;
    }

    protected function setParam(){
        $this->param = json_encode($this->data);
    }


}