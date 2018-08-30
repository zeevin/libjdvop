<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/29
 * Time: 下午4:35
 * Source: Order_SubmitOrder.php
 * Project: libjdvop
 */

require './autoloader.php';
$config = require './config.php';

$application = new \Zeevin\Libjdvop\Application($config);

/** @var \Zeevin\Libjdvop\Order\RequestAttribute\SubmitOrder\Request $request */
$request = new \Zeevin\Libjdvop\Order\RequestAttribute\SubmitOrder\Request();


$request->setThirdOrder('JD'.date('YmdHis'))
    ->setSku(['skuId'=>774304,'num'=>1,'bNeedAnnex'=>false,'bNeedGift'=>true])
    ->setName('曹康')
    ->setProvince(13)
    ->setCity(1000)
    ->setCounty(40491)
    ->setAddress('华能路38号1号楼2单元1901')
    ->setMobile('13325115789')
    ->setEmail('caokang@outlook.com')
    ->setInvoiceState(2)
    ->setInvoiceType(2)
    ->setSelectedInvoiceTitle(5)
    ->setCompanyName('北京第五生活网络技术服务有限公司')
    ->setInvoiceContent(1)
    ->setPaymentType(4)
    ->setReservingDate(-1)
    ->setOrderPriceSnap(
        ['price' => 39.90, 'skuId' => 774304]
    )
    ->setIsUseBalance(1)
    ->setSubmitState(0)
    ->setInvoiceName('朱俊翰')
    ->setInvoicePhone('18001183524')
    ->setInvoiceProvice(1)
    ->setInvoiceCity(72)
    ->setInvoiceCounty(2819)
    ->setDoOrderPriceMode(1);

    $request->setInvoiceAddress('北京市朝阳区建国路93号万达广场9号楼8层')
    ->setInstallDate(-1)
    ->setNeedInstall(false)
    ->setPromiseDate(date('Y-m-d'))
    ->setPromiseTimeRange('9:00-18:00');


$reqData = $request->serialize();
//print_r($reqData);exit;
/** @var \Zeevin\Libjdvop\Product\SkuStateClient $app */
$app = $application['Order.SubmitOrder'];
/** @var \Zeevin\Libjdvop\Product\ResponseAttribute\SkuState\Response $ret */
$ret = $app->request($reqData)->getResponse('json');
//var_dump($ret);exit;
print_r($ret);