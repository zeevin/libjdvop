<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/8
 * Time: 下午5:05
 * Source: config.php
 * Project: libiocm
 */

return [
    'http'   =>
        [
            'base_uri' => 'https://bizapi.jd.com/',
        ],
    'jd-vop' =>
        [
            'clientId'     => 'xxx',
            'userName'     => 'xxx',
            'clientSecret' => 'xxxx',
            'password'     => 'xxxxx',
        ],
    'cache'  =>
        [
            //http://doctrine-orm.readthedocs.io/projects/doctrine-orm/en/latest/reference/caching.html
            'default'           => 'file',
            'oauth_key'         => 'jd-vop-oauth_return',
            'oauth_refresh_key' => 'jd-vop-oauth_refresh',
            'stores'            => [
                'file'      => [
                    'driver' => 'file',
                    'patch'  => __DIR__.DIRECTORY_SEPARATOR.'cache',
                ],
                'memcached' => [
                    'server' => '127.0.0.1',
                    'port'   => 11211,
                ],
                'redis'     => [
                    'driver'   => 'predis',
                    'host'     => '127.0.0.1',
                    'password' => null,
                    'port'     => 6379,
                    'database' => 0,
                ],
            ],
        ],
];
