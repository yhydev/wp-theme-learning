<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/services/keyword_plan_service.proto

namespace Google\Ads\GoogleAds\V12\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [KeywordPlanService.GenerateHistoricalMetrics][google.ads.googleads.v12.services.KeywordPlanService.GenerateHistoricalMetrics].
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.services.GenerateHistoricalMetricsRequest</code>
 */
class GenerateHistoricalMetricsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the keyword plan of which historical metrics are
     * requested.
     *
     * Generated from protobuf field <code>string keyword_plan = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $keyword_plan = '';
    /**
     * The aggregate fields to include in response.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.common.KeywordPlanAggregateMetrics aggregate_metrics = 2;</code>
     */
    protected $aggregate_metrics = null;
    /**
     * The options for historical metrics data.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.common.HistoricalMetricsOptions historical_metrics_options = 3;</code>
     */
    protected $historical_metrics_options = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $keyword_plan
     *           Required. The resource name of the keyword plan of which historical metrics are
     *           requested.
     *     @type \Google\Ads\GoogleAds\V12\Common\KeywordPlanAggregateMetrics $aggregate_metrics
     *           The aggregate fields to include in response.
     *     @type \Google\Ads\GoogleAds\V12\Common\HistoricalMetricsOptions $historical_metrics_options
     *           The options for historical metrics data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Services\KeywordPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the keyword plan of which historical metrics are
     * requested.
     *
     * Generated from protobuf field <code>string keyword_plan = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getKeywordPlan()
    {
        return $this->keyword_plan;
    }

    /**
     * Required. The resource name of the keyword plan of which historical metrics are
     * requested.
     *
     * Generated from protobuf field <code>string keyword_plan = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setKeywordPlan($var)
    {
        GPBUtil::checkString($var, True);
        $this->keyword_plan = $var;

        return $this;
    }

    /**
     * The aggregate fields to include in response.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.common.KeywordPlanAggregateMetrics aggregate_metrics = 2;</code>
     * @return \Google\Ads\GoogleAds\V12\Common\KeywordPlanAggregateMetrics|null
     */
    public function getAggregateMetrics()
    {
        return $this->aggregate_metrics;
    }

    public function hasAggregateMetrics()
    {
        return isset($this->aggregate_metrics);
    }

    public function clearAggregateMetrics()
    {
        unset($this->aggregate_metrics);
    }

    /**
     * The aggregate fields to include in response.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.common.KeywordPlanAggregateMetrics aggregate_metrics = 2;</code>
     * @param \Google\Ads\GoogleAds\V12\Common\KeywordPlanAggregateMetrics $var
     * @return $this
     */
    public function setAggregateMetrics($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V12\Common\KeywordPlanAggregateMetrics::class);
        $this->aggregate_metrics = $var;

        return $this;
    }

    /**
     * The options for historical metrics data.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.common.HistoricalMetricsOptions historical_metrics_options = 3;</code>
     * @return \Google\Ads\GoogleAds\V12\Common\HistoricalMetricsOptions|null
     */
    public function getHistoricalMetricsOptions()
    {
        return $this->historical_metrics_options;
    }

    public function hasHistoricalMetricsOptions()
    {
        return isset($this->historical_metrics_options);
    }

    public function clearHistoricalMetricsOptions()
    {
        unset($this->historical_metrics_options);
    }

    /**
     * The options for historical metrics data.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.common.HistoricalMetricsOptions historical_metrics_options = 3;</code>
     * @param \Google\Ads\GoogleAds\V12\Common\HistoricalMetricsOptions $var
     * @return $this
     */
    public function setHistoricalMetricsOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V12\Common\HistoricalMetricsOptions::class);
        $this->historical_metrics_options = $var;

        return $this;
    }

}

