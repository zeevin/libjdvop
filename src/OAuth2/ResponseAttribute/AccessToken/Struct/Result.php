<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/8
 * Time: 下午7:28
 * Source: Result.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\OAuth2\ResponseAttribute\AccessToken\Struct;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class Result
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("uid")
     * @JMS\Type("string")
     */
    protected $uid;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("refresh_token_expires")
     * @JMS\Type("string")
     */
    protected $refresh_token_expires;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("time")
     * @JMS\Type("string")
     */
    protected $time;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("expires_in")
     * @JMS\Type("string")
     */
    protected $expires_in;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("refresh_token")
     * @JMS\Type("string")
     */
    protected $refresh_token;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("access_token")
     * @JMS\Type("string")
     */
    protected $access_token;

    /**
     * @return mixed
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @return mixed
     */
    public function getRefreshTokenExpires()
    {
        return $this->refresh_token_expires;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @return mixed
     */
    public function getExpiresIn()
    {
        return $this->expires_in;
    }

    /**
     * @return mixed
     */
    public function getRefreshToken()
    {
        return $this->refresh_token;
    }

    /**
     * @return mixed
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }
}