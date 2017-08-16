<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: payment/paymentpb/payment.proto

namespace Paymentpb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>paymentpb.chargeRequest</code>
 */
class chargeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.paymentpb.currency currency = 1 [(.gogoproto.moretags) = "validate:&#92;"required,gte=1,lte=128&#92;""];</code>
     */
    private $currency = 0;
    /**
     * <code>uint64 total = 2 [(.gogoproto.moretags) = "validate:&#92;"required,gte=0&#92;""];</code>
     */
    private $total = 0;
    /**
     * <code>.paymentpb.card Card = 3 [(.gogoproto.moretags) = "validate:&#92;"required,dive&#92;""];</code>
     */
    private $Card = null;
    /**
     * <code>string email = 4 [(.gogoproto.moretags) = "validate:&#92;"email&#92;""];</code>
     */
    private $email = '';
    /**
     * <code>string statement = 5;</code>
     */
    private $statement = '';
    /**
     * <code>.paymentpb.paymentProviderId paymentProviderId = 6 [(.gogoproto.moretags) = "validate:&#92;"required,gte=1,lte=3&#92;""];</code>
     */
    private $paymentProviderId = 0;
    /**
     * <code>map&lt;string, string&gt; metadata = 7;</code>
     */
    private $metadata;

    public function __construct() {
        \GPBMetadata\Payment\Paymentpb\Payment::initOnce();
        parent::__construct();
    }

    /**
     * <code>.paymentpb.currency currency = 1 [(.gogoproto.moretags) = "validate:&#92;"required,gte=1,lte=128&#92;""];</code>
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * <code>.paymentpb.currency currency = 1 [(.gogoproto.moretags) = "validate:&#92;"required,gte=1,lte=128&#92;""];</code>
     */
    public function setCurrency($var)
    {
        GPBUtil::checkEnum($var, \Paymentpb\currency::class);
        $this->currency = $var;
    }

    /**
     * <code>uint64 total = 2 [(.gogoproto.moretags) = "validate:&#92;"required,gte=0&#92;""];</code>
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * <code>uint64 total = 2 [(.gogoproto.moretags) = "validate:&#92;"required,gte=0&#92;""];</code>
     */
    public function setTotal($var)
    {
        GPBUtil::checkUint64($var);
        $this->total = $var;
    }

    /**
     * <code>.paymentpb.card Card = 3 [(.gogoproto.moretags) = "validate:&#92;"required,dive&#92;""];</code>
     */
    public function getCard()
    {
        return $this->Card;
    }

    /**
     * <code>.paymentpb.card Card = 3 [(.gogoproto.moretags) = "validate:&#92;"required,dive&#92;""];</code>
     */
    public function setCard(&$var)
    {
        GPBUtil::checkMessage($var, \Paymentpb\card::class);
        $this->Card = $var;
    }

    /**
     * <code>string email = 4 [(.gogoproto.moretags) = "validate:&#92;"email&#92;""];</code>
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * <code>string email = 4 [(.gogoproto.moretags) = "validate:&#92;"email&#92;""];</code>
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;
    }

    /**
     * <code>string statement = 5;</code>
     */
    public function getStatement()
    {
        return $this->statement;
    }

    /**
     * <code>string statement = 5;</code>
     */
    public function setStatement($var)
    {
        GPBUtil::checkString($var, True);
        $this->statement = $var;
    }

    /**
     * <code>.paymentpb.paymentProviderId paymentProviderId = 6 [(.gogoproto.moretags) = "validate:&#92;"required,gte=1,lte=3&#92;""];</code>
     */
    public function getPaymentProviderId()
    {
        return $this->paymentProviderId;
    }

    /**
     * <code>.paymentpb.paymentProviderId paymentProviderId = 6 [(.gogoproto.moretags) = "validate:&#92;"required,gte=1,lte=3&#92;""];</code>
     */
    public function setPaymentProviderId($var)
    {
        GPBUtil::checkEnum($var, \Paymentpb\paymentProviderId::class);
        $this->paymentProviderId = $var;
    }

    /**
     * <code>map&lt;string, string&gt; metadata = 7;</code>
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * <code>map&lt;string, string&gt; metadata = 7;</code>
     */
    public function setMetadata(&$var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metadata = $arr;
    }

}
