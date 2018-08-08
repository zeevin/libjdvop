<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/8
 * Time: 下午4:34
 * Source: Request.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\OAuth2\RequestAttribute\AccessToken;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseRequestAttribute;

class Request extends BaseRequestAttribute
{
    /**
     * 该值固定为 access_token
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("grant_type")
     * @JMS\Type("string")
     */
    protected $grant_type = 'access_token';
    /**
     * 即对接账号(由京东人员提供)
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("client_id")
     * @JMS\Type("string")
     */
    protected $client_id;
    /**
     * 即对接账号的密码 (由京东人员提供)
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("client_secret")
     * @JMS\Type("string")
     */
    protected $client_secret;
    /**
     * 当前调用时间，格式为“2014-01-01 01:01:01” 与京东服务器时差不能相差半小时以上，
     * 京东服务器时间为北京时间(年月日和 时分秒中间有空格)
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("timestamp")
     * @JMS\Type("string")
     */
    protected $timestamp;
    /**
     * 京东的用户名
     * (注意:在调用接口时，如果 username 是中文，在 url 参数里面，
     * 需要将 username 使用 urf-8 格式进行 UrlEncode 编码，自动编码除外)，
     * 在生成 sign 签名串时，不 需要进行编码，使用原文!)
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("username")
     * @JMS\Type("string")
     */
    protected $username;
    /**
     * 京东的用户密码，必须是 md5 加密后的字符串，不要使用原文
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("password")
     * @JMS\Type("string")
     */
    protected $password;
    /**
     * 申请权限。(目前推荐为空。为以后扩展用)
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("scope")
     * @JMS\Type("string")
     */
    protected $scope = '';
    /**
     * 签名,生成规则如下:
     * 1. 按照以下顺序将字符串拼接起来
     * client_secret+timestamp+client_id+username+password +grant_type+scope+client_secret
     * 其中 client_secret 的值是京东分配的
     * username 使用原文，password 需要 md5 加密后的
     * 当 username 为中文时，需确定自带 MD5 程序是否支持
     * 2. 将上述拼接的字符串使用 MD5 加密，加密后的值再转为大写
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("sign")
     * @JMS\Type("string")
     */
    protected $sign;

    /**
     * @return mixed
     */
    public function getGrantType()
    {
        return $this->grant_type;
    }

    /**
     * @param $grant_type
     *
     * @return $this
     */
    public function setGrantType($grant_type)
    {
        $this->grant_type = $grant_type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * @param $client_id
     *
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->client_id = $client_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getClientSecret()
    {
        return $this->client_secret;
    }

    /**
     * @param $client_secret
     *
     * @return $this
     */
    public function setClientSecret($client_secret)
    {
        $this->client_secret = $client_secret;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param $timestamp
     *
     * @return $this
     */
    public function setTimestamp($timestamp = null)
    {
        if ($timestamp == null)
        {
            $date = new \DateTime('now');
            $timestamp = $date;
        }
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param $username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = md5($password);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param $scope
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $this->scope = $scope;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSign()
    {
        return $this->sign;
    }

    /**
     * @return $this
     */
    public function setSign()
    {
        $sign = $this->getClientSecret().$this->getTimestamp().$this->getClientId().$this->getUsername()
            .$this->getPassword().$this->getGrantType().$this->getScope().$this->getClientSecret();
        $this->sign = strtoupper(md5($sign));
        return $this;
    }



}