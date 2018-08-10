<?php
/**
 * Created by PhpStorm.
 * User: wangwei
 * Date: 2018/8/10
 * Time: 15:21
 */
use Doctrine\Common\Annotations\AnnotationRegistry;

$loader = require_once '../vendor/autoload.php';
AnnotationRegistry::registerLoader([$loader, 'loadClass']);
return $loader;