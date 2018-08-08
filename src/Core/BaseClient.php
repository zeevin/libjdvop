<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/8
 * Time: 下午4:12
 * Source: BaseClient.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Core;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use LSS\Array2XML;

Abstract class BaseClient
{
    protected $client = 'libjdvop';
    protected $httpClient;
    protected $response;
    protected $result;
    protected $app;
    protected $id = null;
    protected $urlExtend = null;
    protected $resourcePath = 'api';
    protected $httpErrors = [];
    protected $config;
    protected $prefix = '';
    /**
     * 为了适配有些接口GET参数必须从url中代入
     * 必须要求拼接到url中
     *
     * @var null
     */
    protected $urlParams = null;


    public function __construct(ServiceContainer $app)
    {
        $this->app = $app;
        $this->config = $app['config']->get('jd-vop');

    }

    public function getUri()
    {
        $this->uri = $this->getPath();
        if ($this->urlParams) {
            $this->uri = $this->uri.'?'.$this->urlParams;
        }

        return $this->uri;
    }

    /**
     * @param string $body
     *
     * @return $this
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function request($body = '')
    {
        if ($this->getPrefix()!='accessToken')
            $body['token'] = $this->getToken();
        $method = strtoupper($this->getMethod());
//        echo $this->getUri();exit;
//        echo $method;exit;
        try {
            $this->response = $this->getHttpClient()->request(
                $method,
                $this->getUri(),
                [
                    'form_params'  => $body,
                    'verify'  => false,
                    'headers' => $this->getHeaders(),
                ]
            );
        } catch (ClientException $e) {
            $this->httpErrors = [
                'statusCode'   => $e->getCode(),
                'reasonPhrase' => $e->getResponse()->getReasonPhrase(),
            ];
            $message = (array)json_decode(
                $e->getResponse()->getBody()->getContents()
            );
            $this->httpErrors = array_merge($this->httpErrors, $message);
        }

        return $this;
    }

    protected function getHttpClient(): Client
    {
        return $this->app['http_client'];
    }

    /**
     * @param string $format
     *
     * @return array|\JMS\Serializer\scalar|mixed|null|object|string|string[]
     */
    public function getResponse($format = 'object')
    {
        if (empty($this->httpErrors)) {
            $body_array = json_decode(
                (string)$this->response->getBody(),
                true
            );

            $body_array['statusCode'] = $this->response->getStatusCode();
            $body_array['reasonPhrase'] = $this->response->getReasonPhrase();


        }
        else
            $body_array = $this->httpErrors;

        if (isset($body_array['error_desc'])) {
            $body_array['errorDesc'] = $body_array['error_desc'];
            unset($body_array['error_desc']);
        }
        if (isset($body_array['error_code'])) {
            $body_array['errorCode'] = $body_array['error_code'];
            unset($body_array['error_code']);
        }


        $body = json_encode($body_array);


        if ($format == 'json' || $format == 'text') {
            $this->result = $body;
        } elseif ($format == 'array') {
            $this->result = json_decode($body, true);
        } elseif ($format == 'object') {
            $object = 'Zeevin\Libjdvop\\'.ucfirst($this->getDomain())
                .'\ResponseAttribute\\'.ucfirst($this->getPrefix());
            if ($this->getId()) {
                $object .= '\\'.ucfirst($this->getId());
            }
            $object .= '\Response';
            $this->result = $this->deserialize($body, $object, 'json');
        } elseif ($format == 'xml') {
            $arr = json_decode($body, true);
            $xml = Array2XML::createXML('root', $arr);
            $this->result = $xml->saveXML();
        }

        return $this->result;
    }

    /**
     * @return array
     */
    protected function getHeaders()
    {
        $headers = ['User-Agent' => $this->client];
//        if ($this->getPrefix() != 'access') {
//            $app = $this->app;
//            $jdvopConfig = $app['config']->get('jd-vop');
//            $headers['Content-Type'] = 'application/json';
//            $headers['app_key'] = $jdvopConfig['appId'];
//            $headers['Authorization'] = 'Bearer '.$this->getAccessToken();
//        }

        return $headers;
    }

    /**
     * @return mixed|\Zeevin\Libjdvop\OAuth2\ResponseAttribute\AccessToken\Response
     */
    public function getToken()
    {
        $application = $this->app;
        $cache = $application['cache'];
        $cacheConfig = $application['config']->get('cache');
        $jdvopConfig = $application['config']->get('jd-vop');

        if ($ret = $cache->fetch($cacheConfig['oauth_key'])) {

        }
        //去掉自动刷新accessToken
//        elseif ($refreshToken = $cache->fetch($cacheConfig['oauth_refresh_key']))
//        {
//            $tmp = explode(':',$refreshToken);
//            $request = new \Zeevin\Libiocm\Sec\RequestAttribute\RefreshToken\Request();
//            $request->setAppId($jd-vopConfig['appId'])->setSecret($jd-vopConfig['secret'])->setRefreshToken($tmp[0]);
//            $ret = $app['sec.refreshToken']->request($request->serialize())->getResult();
//            $app['cache']->save($cacheConfig['oauth_key'],$ret,$ret->getExpiresIn()-600);
//            $app['cache']->save($cacheConfig['oauth_refresh_key'],$ret->getRefreshToken().':'.$ret->getAccessToken(),86400*28);
//        }
        else {
            $request = new \Zeevin\Libjdvop\OAuth2\RequestAttribute\AccessToken\Request();

            $request->setClientId($jdvopConfig['clientId'])->setClientSecret($jdvopConfig['clientSecret'])
                ->setUsername($jdvopConfig['userName'])->setPassword($jdvopConfig['password'])
                ->setTimestamp(date('Y-m-d H:i:s'))
                ->setSign();

            $reqData = $request->serialize();
            $app = $application['OAuth2.AccessToken'];
            /** @var \Zeevin\Libjdvop\OAuth2\ResponseAttribute\AccessToken\Response $ret */
            $ret = $app->request($reqData)->getResponse();
            $expirtime = $ret->getResult()->getExpiresIn()-600-(time()-$ret->getResult()->getTime()/1000);
            $application['cache']->save($cacheConfig['oauth_key'],$ret->getResult()->getAccessToken(),$expirtime);
            $application['cache']->save($cacheConfig['oauth_refresh_key'],$ret->getResult()->getRefreshToken(),$ret->getResult()->getRefreshTokenExpires()/100-time());
            $ret = $ret->getResult()->getAccessToken();
        }

        return $ret;
    }


    public function getId()
    {
        return $this->id;
    }

    public function getPath()
    {
        $url_array = array_filter([$this->getResourcePath(),$this->getDomain(),$this->getPrefix(),$this->getUrlExtend()]);
        return implode('/',$url_array);
    }

    /**
     * @param mixed ...$params
     *
     * @return $this
     */
    public function setUrlExtend(...$params)
    {
        $extend = '';
        foreach ($params as $item) {
            $extend .= '/'.$item;
        }

        $this->urlExtend = $extend;

        return $this;
    }

    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * @return null
     */
    public function getUrlExtend()
    {
        return $this->urlExtend;
    }

    /**
     * @return null
     */
    public function getUrlParams()
    {
        return $this->urlParams;
    }

    /**
     * @param $urlParams
     *
     * @return $this
     */
    public function setUrlParams($urlParams)
    {
        $this->urlParams = $urlParams;

        return $this;
    }

    /**
     * @return string
     */
    public function getResourcePath(): string
    {
        return  $this->resourcePath;
    }

    /**
     * @return string
     */
    public function getDomain(): string
    {
        return $this->domain;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    protected function deserialize($data, $object, $format)
    {
        $serializer = \JMS\Serializer\SerializerBuilder::create()->build();

        return $serializer->deserialize($data, $object, $format);
    }


}