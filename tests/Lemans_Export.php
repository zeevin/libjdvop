<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/9
 * Time: 上午11:55
 * Source: Lemans_Export.php
 * Project: libjdvop
 */

require  '../vendor/autoload.php';
$config = require './config.php';

$application = new \Zeevin\Libjdvop\Application($config);

$request = new \Zeevin\Libjdvop\Product\RequestAttribute\GetSkuByPage\Request();
$request->setPageNo(1)->setPageNum(16);
$reqData = $request->serialize();
//print_r($reqData);exit;
/** @var \Zeevin\Libjdvop\Product\GetSkuByPageClient $app */
$app = $application['Product.GetSkuByPage'];
//print_r($app->request($reqData)->getResponse()->getResult());exit;
$skuids = $app->request($reqData)->getResponse()->getResult()->getSkuIds();
$fp = fopen('products.csv', 'w');

foreach ($skuids as $skuid)
{
    $product = '';
    try{
        /** @var \Zeevin\Libjdvop\Product\RequestAttribute\GetDetail\Request $request */
        $request = new \Zeevin\Libjdvop\Product\RequestAttribute\GetDetail\Request();
        $request->setSku($skuid)->setQueryExts(['appintroduce','shouhou']);
        $reqData = $request->serialize();
//print_r($reqData);exit;
        /** @var \Zeevin\Libjdvop\Product\GetDetailClient $app */
        $app = $application['Product.GetDetail'];
        /** @var \Zeevin\Libjdvop\Product\ResponseAttribute\GetDetail\Response $ret */
        $ret = $app->request($reqData)->getResponse();
        $detail = $ret->getResult();

        $name = $detail->getName();
        $brand_name = $detail->getBrandName();

        $cates = $detail->getCategory();
        $cates_array = explode(';',$cates);
        $cate_name = '';
        $price = '';

        foreach($cates_array as $cate)
        {
            /** @var \Zeevin\Libjdvop\Product\RequestAttribute\GetCategory\Request $request */
            $request = new \Zeevin\Libjdvop\Product\RequestAttribute\GetCategory\Request();
            $request->setCid($cate);
            $reqData = $request->serialize();
            /** @var \Zeevin\Libjdvop\Product\GetCategoryClient $app */
            $app = $application['Product.GetCategory'];
            /** @var \Zeevin\Libjdvop\Product\ResponseAttribute\GetCategory\Response $ret */
            $ret = $app->request($reqData)->getResponse();
            $cate_name .= '-'.$ret->getResult()->getName();
        }

        $request = new \Zeevin\Libjdvop\Price\RequestAttribute\GetSellPrice\Request();
        $request->setSku([$detail->getSku()])->setQueryExts(['containsTax','marketPrice']);
        $reqData = $request->serialize();

        /** @var \Zeevin\Libjdvop\Price\GetSellPriceClient $app */
        $app = $application['Price.GetSellPrice'];
        $ret = $app->request($reqData)->getResponse();
        if (empty($ret->getResult()))
            continue;
        $p_data = $ret->getResult()[0];
        $price .= $p_data->getJdPrice().'-'.$p_data->getPrice().'-'.$p_data->getTax().'-'.$p_data->getTaxPrice()
            .'-'.$p_data->getNakedPrice().'-'.$p_data->getMarketPrice();


        $product = [$name,$price,$cate_name,$brand_name];
        fputcsv($fp,$product);
    }catch (Exception $e)
    {
        continue;
    }
}
fclose($fp);