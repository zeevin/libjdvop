<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/8
 * Time: 下午4:25
 * Source: BaseRequestAttribute.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Core;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

abstract class BaseRequestAttribute
{
    /**
     * token
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("token")
     * @JMS\Type("string")
     */
    protected $token;


    public function serialize($format = 'array')
    {
        $serializer = \JMS\Serializer\SerializerBuilder::create()->build();

        if ($format == 'form-url-encode')
        {
            $json = $serializer->serialize($this,'json');
            return http_build_query(json_decode($json,true));
        }
        elseif ($format == 'array')
        {
            $json = $serializer->serialize($this,'json');
            return json_decode($json,true);
        }
        else
            return $serializer->serialize($this, $format);

    }

}