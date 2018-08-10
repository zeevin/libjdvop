<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/8
 * Time: 下午4:26
 * Source: BaseResponseAttribute.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Core;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

abstract class BaseResponseAttribute
{
    /**
     * 响应头信息statusCode
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("statusCode")
     * @JMS\Type("integer")
     */
    protected $statusCode;
    /**
     * 响应头信息reasonPhrase
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("reasonPhrase")
     * @JMS\Type("string")
     */
    protected $reasonPhrase;

    /**
     * body错误码
     * 可选
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("resultCode")
     * @JMS\Type("string")
     */
    protected $resultCode;
    /**
     * body错误描述
     * 可选
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("resultMessage")
     * @JMS\Type("string")
     */
    protected $resultMessage;

    /**
     * 执行结果成功，还是失败
     * 可选
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("success")
     * @JMS\Type("bool")
     */
    protected $success;


    /**
     * @return int
     */
    public function getStatusCode() :int
    {
        return $this->statusCode;
    }

    /**
     * @return string
     */
    public function getReasonPhrase() :string
    {
        return $this->reasonPhrase;
    }

    /**
     * @return string
     */
    public function getResultCode() :string
    {
        return $this->resultCode;
    }

    /**
     * @return string
     */
    public function getResultMessage() :string
    {
        return $this->resultMessage;
    }

    /**
     * @return mixed
     */
    public function getSuccess()
    {
        return $this->success;
    }




}