<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/28
 * Time: 下午5:48
 * Source: Request.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Order\RequestAttribute\SubmitOrder;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libjdvop\Core\BaseRequestAttribute;

class Request extends BaseRequestAttribute
{
    /**
     * 第三方订单号
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("thirdOrder")
     * @JMS\Type("string")
     */
    protected $thirdOrder;
    /**
     * [{"skuId":商品编号, "num":商品数量,"bNeedAnnex":true, "bNeedGift":true, "price":100, "yanbao":[{"skuId": 商 品 编 号}]}](最高支持 50 种商品)
     * bNeedAnnex 表示是否需要附件，默认为需要
     * bNeedGift 表示是否需要赠品，默认不要赠品，默认值为:false，
     * 如果需要增品 bNeedGift 请给 true,建议该参数都给 true,但如
     * 果实在不需要赠品可以给 false;
     * price 表示透传价格，需要合同权限，接受价格权限，否则不
     * 允许传该值;一般不建议使用该字段。
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("sku")
     * @JMS\Type("string")
     */
    protected $sku;
    /**
     * 收货人
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("name")
     * @JMS\Type("string")
     */
    protected $name;
    /**
     * @var integer
     * 一级地址
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("province")
     * @JMS\Type("integer")
     */
    protected $province;
    /**
     * @var integer
     * 二级地址
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("city")
     * @JMS\Type("integer")
     */
    protected $city;
    /**
     * @var integer
     * 三级地址
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("county")
     * @JMS\Type("integer")
     */
    protected $county;
    /**
     * @var integer
     * 四级地址 (如果该地区有四级地址，则必须传递四级地址， 没有四级地址则传 0)
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("town")
     * @JMS\Type("integer")
     */
    protected $town = 0;
    /**
     * 详细地址
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("address")
     * @JMS\Type("string")
     */
    protected $address;
    /**
     * 邮编
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("zip")
     * @JMS\Type("string")
     */
    protected $zip;
    /**
     * 座机号
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("phone")
     * @JMS\Type("string")
     */
    protected $phone;
    /**
     * 手机号
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("mobile")
     * @JMS\Type("string")
     */
    protected $mobile;
    /**
     * 邮箱
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("email")
     * @JMS\Type("string")
     */
    protected $email;
    /**
     * 备注：非必须，少于100字
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("remark")
     * @JMS\Type("string")
     */
    protected $remark;
    /**
     * @var integer
     * 开票方式(1 为随货开票，0 为订单预借，2 为集中开票 )
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("invoiceState")
     * @JMS\Type("integer")
     */
    protected $invoiceState;
    /**
     * @var integer
     * 1 普通发票 2 增值税发票 3 电子发票
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("invoiceType")
     * @JMS\Type("integer")
     */
    protected $invoiceType;
    /**
     * @var integer
     * 发票类型:4 个人，5 单位
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("selectedInvoiceTitle")
     * @JMS\Type("string")
     */
    protected $selectedInvoiceTitle;
    /**
     * 发票抬头 (如果 selectedInvoiceTitle=5 则此字段必须)
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("companyName")
     * @JMS\Type("string")
     */
    protected $companyName;
    /**
     * @var integer
     * 1:明细，3:电脑配件，19:耗材，22:办公用品 备注:若增值发票则只能选 1 明细
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("invoiceContent")
     * @JMS\Type("integer")
     */
    protected $invoiceContent;
    /**
     * @var integer
     * 支付方式 (1:货到付款，2:邮局付款，4:余额支付，5:公 司转账(公对公转账)，7:网银钱包，101:金采支付)
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("paymentType")
     * @JMS\Type("integer")
     */
    protected $paymentType = 4;
    /**
     * @var integer
     * 使用余额 paymentType=4 时，此值固定是 1 其他支付方式 0
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("isUseBalance")
     * @JMS\Type("integer")
     */
    protected $isUseBalance = 1;
    /**
     * @var integer
     * 是否预占库存，0 是预占库存(需要调用确认订单接口)，1 是 不预占库存
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("submitState")
     * @JMS\Type("integer")
     */
    protected $submitState;
    /**
     * 增值票收票人姓名
     * 备注:当 invoiceType=2 且 invoiceState=1 时则此字段必填
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("invoiceName")
     * @JMS\Type("string")
     */
    protected $invoiceName;
    /**
     * 增值票收票人电话
     * 备注:当 invoiceType=2 且 invoiceState=1 时则此字段必填
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("invoicePhone")
     * @JMS\Type("string")
     */
    protected $invoicePhone;
    /**
     * @var integer
     * 增值票收票人所在省(京东地址编码)
     * 备注:当 invoiceType=2 且 invoiceState=1 时则此字段必填
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("invoiceProvice")
     * @JMS\Type("integer")
     */
    protected $invoiceProvice;
    /**
     * @var integer
     * 增值票收票人所在市(京东地址编码)
     * 备注:当 invoiceType=2 且 invoiceState=1 时则此字段必填
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("invoiceCity")
     * @JMS\Type("integer")
     */
    protected $invoiceCity;
    /**
     * @var integer
     * 增值票收票人所在区/县(京东地址编码)
     * 备注:当 invoiceType=2 且 invoiceState=1 时则此字段必填
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("invoiceCounty")
     * @JMS\Type("integer")
     */
    protected $invoiceCounty;
    /**
     * 增值票收票人所在地址
     * 备注:当 invoiceType=2 且 invoiceState=1 时则此字段必填
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("invoiceAddress")
     * @JMS\Type("string")
     */
    protected $invoiceAddress;
    /**
     * @var integer
     * 下单价格模式
     * 0: 客户端订单价格快照不做验证对比，还是以京东价格正常 下单;
     * 1:必需验证客户端订单价格快照，如果快照与京东价格不一致 返回下单失败，需要更新商品价格后，重新下单;
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("doOrderPriceMode")
     * @JMS\Type("integer")
     */
    protected $doOrderPriceMode;
    /**
     * 客户端订单价 格快照
     * Json 格式的数据，格式为: [
     * {
     * "price":21.30, //商品价格 ,类型:BigDecimal
     * "skuId":123123 //商品编号,类型:long },{
     * "price":99.55,
     * "skuId":22222 }
     * ]
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("orderPriceSnap")
     * @JMS\Type("string")
     */
    protected $orderPriceSnap;
    /**
     * @var integer
     * 大家电配送日期
     * 默认值为-1，0 表示当天，1 表示明天，2:表示后天; 如果为 -1 表示不使用大家电预约日历
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("reservingDate")
     * @JMS\Type("integer")
     */
    protected $reservingDate;
    /**
     * @var integer
     * 大家电安装日期
     * 不支持默认按-1 处理，0 表示当天，1 表示明天，2:表示后天
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("installDate")
     * @JMS\Type("integer")
     */
    protected $installDate;
    /**
     * @var boolean
     * 大家电是否选择了安装
     * 是否选择了安装，默认为 true，选择了“暂缓安装”，此为必填 项，必填值为 false。
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("needInstall")
     * @JMS\Type("boolean")
     */
    protected $needInstall = true;
    /**
     * 中小件配送预 约日期
     * 格式:yyyy-MM-dd
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("promiseDate")
     * @JMS\Type("string")
     */
    protected $promiseDate;
    /**
     * 中小件配送预 约时间段
     * 时间段如: 9:00-15:00
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("promiseTimeRange")
     * @JMS\Type("string")
     */
    protected $promiseTimeRange;
    /**
     * @var integer
     * 中小件预约时 间段的标记
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("promiseTimeRangeCode")
     * @JMS\Type("integer")
     */
    protected $promiseTimeRangeCode;
    /**
     * 大家电配送预 约日期
     * 格式:yyyy-MM-dd
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("reservedDateStr")
     * @JMS\Type("string")
     */
    protected $reservedDateStr;
    /**
     * 大家电配送预 约时间段
     * 时间段如: 9:00-15:00
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("reservedTimeRange")
     * @JMS\Type("string")
     */
    protected $reservedTimeRange;
    /**
     * 采购单号
     * 长度范围【1-26】
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("poNo")
     * @JMS\Type("string")
     */
    protected $poNo;
    /**
     * 纳税人识别号
     * 开普票并要打印出来识别号时， 需传入该字段
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("regcode")
     * @JMS\Type("string")
     */
    protected $regcode;
    /**
     * 结算单位
     * 单账号多点结算时， 根据该字段分别结算
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("customerName")
     * @JMS\Type("string")
     */
    protected $customerName;

    /**
     * @return mixed
     */
    public function getThirdOrder()
    {
        return $this->thirdOrder;
    }

    /**
     * @param $thirdOrder
     *
     * @return $this
     */
    public function setThirdOrder($thirdOrder)
    {
        $this->thirdOrder = $thirdOrder;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param array ...$sku
     *
     * @return $this
     */
    public function setSku(array ... $sku)
    {
        $this->sku = json_encode($sku);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getProvince(): int
    {
        return $this->province;
    }

    /**
     * @param int $province
     *
     * @return $this
     */
    public function setProvince(int $province)
    {
        $this->province = $province;
        return $this;
    }

    /**
     * @return int
     */
    public function getCity(): int
    {
        return $this->city;
    }

    /**
     * @param int $city
     *
     * @return $this
     */
    public function setCity(int $city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return int
     */
    public function getCounty(): int
    {
        return $this->county;
    }

    /**
     * @param int $county
     *
     * @return $this
     */
    public function setCounty(int $county)
    {
        $this->county = $county;
        return $this;
    }

    /**
     * @return int
     */
    public function getTown(): int
    {
        return $this->town;
    }

    /**
     * @param int $town
     *
     * @return $this
     */
    public function setTown(int $town)
    {
        $this->town = $town;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param $address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param $zip
     *
     * @return $this
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param $phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param $mobile
     *
     * @return $this
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * @param $remark
     *
     * @return $this
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
        return $this;
    }

    /**
     * @return int
     */
    public function getInvoiceState(): int
    {
        return $this->invoiceState;
    }

    /**
     * @param int $invoiceState
     *
     * @return $this
     */
    public function setInvoiceState(int $invoiceState)
    {
        $this->invoiceState = $invoiceState;
        return $this;
    }

    /**
     * @return int
     */
    public function getInvoiceType(): int
    {
        return $this->invoiceType;
    }

    /**
     * @param int $invoiceType
     *
     * @return $this
     */
    public function setInvoiceType(int $invoiceType)
    {
        $this->invoiceType = $invoiceType;
        return $this;
    }

    /**
     * @return int
     */
    public function getSelectedInvoiceTitle() :int
    {
        return $this->selectedInvoiceTitle;
    }

    /**
     * @param int $selectedInvoiceTitle
     *
     * @return $this
     */
    public function setSelectedInvoiceTitle(int $selectedInvoiceTitle)
    {
        $this->selectedInvoiceTitle = $selectedInvoiceTitle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param $companyName
     *
     * @return $this
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * @return int
     */
    public function getInvoiceContent(): int
    {
        return $this->invoiceContent;
    }

    /**
     * @param int $invoiceContent
     *
     * @return $this
     */
    public function setInvoiceContent(int $invoiceContent)
    {
        $this->invoiceContent = $invoiceContent;
        return $this;
    }

    /**
     * @return int
     */
    public function getPaymentType(): int
    {
        return $this->paymentType;
    }

    /**
     * @param int $paymentType
     *
     * @return $this
     */
    public function setPaymentType(int $paymentType)
    {
        $this->paymentType = $paymentType;
        return $this;
    }

    /**
     * @return int
     */
    public function getisUseBalance(): int
    {
        return $this->isUseBalance;
    }

    /**
     * @param int $isUseBalance
     *
     * @return $this
     */
    public function setIsUseBalance(int $isUseBalance)
    {
        $this->isUseBalance = $isUseBalance;
        return $this;
    }

    /**
     * @return int
     */
    public function getSubmitState(): int
    {
        return $this->submitState;
    }

    /**
     * @param int $submitState
     *
     * @return $this
     */
    public function setSubmitState(int $submitState)
    {
        $this->submitState = $submitState;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoiceName()
    {
        return $this->invoiceName;
    }

    /**
     * @param $invoiceName
     *
     * @return $this
     */
    public function setInvoiceName($invoiceName)
    {
        $this->invoiceName = $invoiceName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoicePhone()
    {
        return $this->invoicePhone;
    }

    /**
     * @param $invoicePhone
     *
     * @return $this
     */
    public function setInvoicePhone($invoicePhone)
    {
        $this->invoicePhone = $invoicePhone;
        return $this;
    }

    /**
     * @return int
     */
    public function getInvoiceProvice(): int
    {
        return $this->invoiceProvice;
    }

    /**
     * @param int $invoiceProvice
     *
     * @return $this
     */
    public function setInvoiceProvice(int $invoiceProvice)
    {
        $this->invoiceProvice = $invoiceProvice;
        return $this;
    }

    /**
     * @return int
     */
    public function getInvoiceCity(): int
    {
        return $this->invoiceCity;
    }

    /**
     * @param int $invoiceCity
     *
     * @return $this
     */
    public function setInvoiceCity(int $invoiceCity)
    {
        $this->invoiceCity = $invoiceCity;
        return $this;
    }

    /**
     * @return int
     */
    public function getInvoiceCounty(): int
    {
        return $this->invoiceCounty;
    }

    /**
     * @param int $invoiceCounty
     *
     * @return $this
     */
    public function setInvoiceCounty(int $invoiceCounty)
    {
        $this->invoiceCounty = $invoiceCounty;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoiceAddress()
    {
        return $this->invoiceAddress;
    }

    /**
     * @param $invoiceAddress
     *
     * @return $this
     */
    public function setInvoiceAddress($invoiceAddress)
    {
        $this->invoiceAddress = $invoiceAddress;
        return $this;
    }

    /**
     * @return int
     */
    public function getDoOrderPriceMode(): int
    {
        return $this->doOrderPriceMode;
    }

    /**
     * @param int $doOrderPriceMode
     *
     * @return $this
     */
    public function setDoOrderPriceMode(int $doOrderPriceMode)
    {
        $this->doOrderPriceMode = $doOrderPriceMode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderPriceSnap()
    {
        return $this->orderPriceSnap;
    }

    /**
     * @param array ...$orderPriceSnap
     *
     * @return $this
     */
    public function setOrderPriceSnap(array ... $orderPriceSnap)
    {
        $this->orderPriceSnap = json_encode($orderPriceSnap);
        return $this;
    }

    /**
     * @return int
     */
    public function getReservingDate(): int
    {
        return $this->reservingDate;
    }

    /**
     * @param int $reservingDate
     *
     * @return $this
     */
    public function setReservingDate(int $reservingDate)
    {
        $this->reservingDate = $reservingDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getInstallDate(): int
    {
        return $this->installDate;
    }

    /**
     * @param int $installDate
     *
     * @return $this
     */
    public function setInstallDate(int $installDate)
    {
        $this->installDate = $installDate;
        return $this;
    }

    /**
     * @return bool
     */
    public function isNeedInstall(): bool
    {
        return $this->needInstall;
    }

    /**
     * @param bool $needInstall
     *
     * @return $this
     */
    public function setNeedInstall(bool $needInstall)
    {
        $this->needInstall = $needInstall;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPromiseDate()
    {
        return $this->promiseDate;
    }

    /**
     * @param $promiseDate
     *
     * @return $this
     */
    public function setPromiseDate($promiseDate)
    {
        $this->promiseDate = $promiseDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPromiseTimeRange()
    {
        return $this->promiseTimeRange;
    }

    /**
     * @param $promiseTimeRange
     *
     * @return $this
     */
    public function setPromiseTimeRange($promiseTimeRange)
    {
        $this->promiseTimeRange = $promiseTimeRange;
        return $this;
    }

    /**
     * @return int
     */
    public function getPromiseTimeRangeCode(): int
    {
        return $this->promiseTimeRangeCode;
    }

    /**
     * @param int $promiseTimeRangeCode
     *
     * @return $this
     */
    public function setPromiseTimeRangeCode(int $promiseTimeRangeCode)
    {
        $this->promiseTimeRangeCode = $promiseTimeRangeCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReservedDateStr()
    {
        return $this->reservedDateStr;
    }

    /**
     * @param $reservedDateStr
     *
     * @return $this
     */
    public function setReservedDateStr($reservedDateStr)
    {
        $this->reservedDateStr = $reservedDateStr;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReservedTimeRange()
    {
        return $this->reservedTimeRange;
    }

    /**
     * @param $reservedTimeRange
     *
     * @return $this
     */
    public function setReservedTimeRange($reservedTimeRange)
    {
        $this->reservedTimeRange = $reservedTimeRange;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPoNo()
    {
        return $this->poNo;
    }

    /**
     * @param $poNo
     *
     * @return $this
     */
    public function setPoNo($poNo)
    {
        $this->poNo = $poNo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRegcode()
    {
        return $this->regcode;
    }

    /**
     * @param $regcode
     *
     * @return $this
     */
    public function setRegcode($regcode)
    {
        $this->regcode = $regcode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * @param $customerName
     *
     * @return $this
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
        return $this;
    }



}