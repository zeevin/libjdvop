<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/8
 * Time: 下午3:17
 * Source: ServiceContainer.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Core;

use GuzzleHttp\Client;
use Symfony\Component\HttpFoundation\Request;
use Pimple\Container;

class ServiceContainer extends Container
{
    /**
     * @var array
     */
    protected $providers = [];

    /**
     * @var array
     */
    protected $defaultConfig = [];
    /**
     * @var array
     */
    protected $globalConfig
        = [
            // \GuzzleHttp\Client __construct params
            'http' => [
                'timeout' => 10.0,
            ],
        ];

    /**
     * ServiceContainer constructor.
     *
     * @param array $config
     * @param array $prepends
     */
    public function __construct(array $config, array $prepends = [])
    {
        parent::__construct($prepends);
        $this->registerConfig($config)
            ->registerProviders()
            ->registerRequest()
            ->registerHttpClient();

    }

    /**
     * @see \GuzzleHttp\Client __construct
     * @return $this
     */
    protected function registerHttpClient()
    {
        isset($this['http_client']) || $this['http_client'] = function ($app) {
            return new Client($app['config']->get('http'));
        };

        return $this;
    }

    /**
     * @return $this
     */
    protected function registerRequest()
    {
        isset($this['request'])
        || $this['request'] = function () {
            return Request::createFromGlobals();
        };

        return $this;
    }

    /**
     * @return $this
     */
    protected function registerProviders()
    {
        foreach ($this->providers as $provider) {
            $this->register(new $provider);
        }

        return $this;
    }

    /**
     * @param array $config
     *
     * @return $this
     */
    protected function registerConfig(array $config)
    {
        $this['config'] = function () use ($config) {
            return new Config(
                array_replace_recursive(
                    $this->globalConfig,
                    $this->defaultConfig,
                    $config
                )
            );
        };

        return $this;
    }

}