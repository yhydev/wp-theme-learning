<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/common/ad_asset.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V12\Common;

class AdAsset
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
<google/ads/googleads/v12/enums/asset_performance_label.protogoogle.ads.googleads.v12.enums"�
AssetPerformanceLabelEnum"m
AssetPerformanceLabel
UNSPECIFIED 
UNKNOWN
PENDING
LEARNING
LOW
GOOD
BESTB�
"com.google.ads.googleads.v12.enumsBAssetPerformanceLabelProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v12/enums;enums�GAA�Google.Ads.GoogleAds.V12.Enums�Google\\Ads\\GoogleAds\\V12\\Enums�"Google::Ads::GoogleAds::V12::Enumsbproto3
�
Xgoogle/ads/googleads/v12/enums/policy_topic_evidence_destination_mismatch_url_type.protogoogle.ads.googleads.v12.enums"�
1PolicyTopicEvidenceDestinationMismatchUrlTypeEnum"�
-PolicyTopicEvidenceDestinationMismatchUrlType
UNSPECIFIED 
UNKNOWN
DISPLAY_URL
	FINAL_URL
FINAL_MOBILE_URL
TRACKING_URL
MOBILE_TRACKING_URLB�
"com.google.ads.googleads.v12.enumsB2PolicyTopicEvidenceDestinationMismatchUrlTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v12/enums;enums�GAA�Google.Ads.GoogleAds.V12.Enums�Google\\Ads\\GoogleAds\\V12\\Enums�"Google::Ads::GoogleAds::V12::Enumsbproto3
�
9google/ads/googleads/v12/enums/policy_review_status.protogoogle.ads.googleads.v12.enums"�
PolicyReviewStatusEnum"�
PolicyReviewStatus
UNSPECIFIED 
UNKNOWN
REVIEW_IN_PROGRESS
REVIEWED
UNDER_APPEAL
ELIGIBLE_MAY_SERVEB�
"com.google.ads.googleads.v12.enumsBPolicyReviewStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v12/enums;enums�GAA�Google.Ads.GoogleAds.V12.Enums�Google\\Ads\\GoogleAds\\V12\\Enums�"Google::Ads::GoogleAds::V12::Enumsbproto3
�
<google/ads/googleads/v12/enums/policy_topic_entry_type.protogoogle.ads.googleads.v12.enums"�
PolicyTopicEntryTypeEnum"�
PolicyTopicEntryType
UNSPECIFIED 
UNKNOWN

PROHIBITED
LIMITED
FULLY_LIMITED
DESCRIPTIVE

BROADENING
AREA_OF_INTEREST_ONLYB�
"com.google.ads.googleads.v12.enumsBPolicyTopicEntryTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v12/enums;enums�GAA�Google.Ads.GoogleAds.V12.Enums�Google\\Ads\\GoogleAds\\V12\\Enums�"Google::Ads::GoogleAds::V12::Enumsbproto3
�
Ygoogle/ads/googleads/v12/enums/policy_topic_evidence_destination_not_working_device.protogoogle.ads.googleads.v12.enums"�
2PolicyTopicEvidenceDestinationNotWorkingDeviceEnum"q
.PolicyTopicEvidenceDestinationNotWorkingDevice
UNSPECIFIED 
UNKNOWN
DESKTOP
ANDROID
IOSB�
"com.google.ads.googleads.v12.enumsB3PolicyTopicEvidenceDestinationNotWorkingDeviceProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v12/enums;enums�GAA�Google.Ads.GoogleAds.V12.Enums�Google\\Ads\\GoogleAds\\V12\\Enums�"Google::Ads::GoogleAds::V12::Enumsbproto3
�
agoogle/ads/googleads/v12/enums/policy_topic_evidence_destination_not_working_dns_error_type.protogoogle.ads.googleads.v12.enums"�
8PolicyTopicEvidenceDestinationNotWorkingDnsErrorTypeEnum"�
4PolicyTopicEvidenceDestinationNotWorkingDnsErrorType
UNSPECIFIED 
UNKNOWN
HOSTNAME_NOT_FOUND
GOOGLE_CRAWLER_DNS_ISSUEB�
"com.google.ads.googleads.v12.enumsB9PolicyTopicEvidenceDestinationNotWorkingDnsErrorTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v12/enums;enums�GAA�Google.Ads.GoogleAds.V12.Enums�Google\\Ads\\GoogleAds\\V12\\Enums�"Google::Ads::GoogleAds::V12::Enumsbproto3
�
,google/ads/googleads/v12/common/policy.protogoogle.ads.googleads.v12.commonXgoogle/ads/googleads/v12/enums/policy_topic_evidence_destination_mismatch_url_type.protoYgoogle/ads/googleads/v12/enums/policy_topic_evidence_destination_not_working_device.protoagoogle/ads/googleads/v12/enums/policy_topic_evidence_destination_not_working_dns_error_type.proto"n
PolicyViolationKey
policy_name (	H �
violating_text (	H�B
_policy_nameB
_violating_text"�
PolicyValidationParameter
ignorable_policy_topics (	Y
exempt_policy_violation_keys (23.google.ads.googleads.v12.common.PolicyViolationKey"�
PolicyTopicEntry
topic (	H �[
type (2M.google.ads.googleads.v12.enums.PolicyTopicEntryTypeEnum.PolicyTopicEntryTypeG
	evidences (24.google.ads.googleads.v12.common.PolicyTopicEvidenceK
constraints (26.google.ads.googleads.v12.common.PolicyTopicConstraintB
_topic"�

PolicyTopicEvidenceX
website_list (2@.google.ads.googleads.v12.common.PolicyTopicEvidence.WebsiteListH R
	text_list (2=.google.ads.googleads.v12.common.PolicyTopicEvidence.TextListH 
language_code	 (	H i
destination_text_list (2H.google.ads.googleads.v12.common.PolicyTopicEvidence.DestinationTextListH h
destination_mismatch (2H.google.ads.googleads.v12.common.PolicyTopicEvidence.DestinationMismatchH m
destination_not_working (2J.google.ads.googleads.v12.common.PolicyTopicEvidence.DestinationNotWorkingH 
TextList
texts (	
WebsiteList
websites (	0
DestinationTextList
destination_texts (	�
DestinationMismatch�
	url_types (2.google.ads.googleads.v12.enums.PolicyTopicEvidenceDestinationMismatchUrlTypeEnum.PolicyTopicEvidenceDestinationMismatchUrlType�
DestinationNotWorking
expanded_url (	H��
device (2�.google.ads.googleads.v12.enums.PolicyTopicEvidenceDestinationNotWorkingDeviceEnum.PolicyTopicEvidenceDestinationNotWorkingDevice#
last_checked_date_time (	H��
dns_error_type (2�.google.ads.googleads.v12.enums.PolicyTopicEvidenceDestinationNotWorkingDnsErrorTypeEnum.PolicyTopicEvidenceDestinationNotWorkingDnsErrorTypeH 
http_error_code (H B
reasonB
_expanded_urlB
_last_checked_date_timeB
value"�
PolicyTopicConstrainto
country_constraint_list (2L.google.ads.googleads.v12.common.PolicyTopicConstraint.CountryConstraintListH h
reseller_constraint (2I.google.ads.googleads.v12.common.PolicyTopicConstraint.ResellerConstraintH {
#certificate_missing_in_country_list (2L.google.ads.googleads.v12.common.PolicyTopicConstraint.CountryConstraintListH �
+certificate_domain_mismatch_in_country_list (2L.google.ads.googleads.v12.common.PolicyTopicConstraint.CountryConstraintListH �
CountryConstraintList%
total_targeted_countries (H �[
	countries (2H.google.ads.googleads.v12.common.PolicyTopicConstraint.CountryConstraintB
_total_targeted_countries
ResellerConstraintI
CountryConstraint
country_criterion (	H �B
_country_criterionB
valueB�
#com.google.ads.googleads.v12.commonBPolicyProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v12/common;common�GAA�Google.Ads.GoogleAds.V12.Common�Google\\Ads\\GoogleAds\\V12\\Common�#Google::Ads::GoogleAds::V12::Commonbproto3
�
;google/ads/googleads/v12/enums/policy_approval_status.protogoogle.ads.googleads.v12.enums"�
PolicyApprovalStatusEnum"�
PolicyApprovalStatus
UNSPECIFIED 
UNKNOWN
DISAPPROVED
APPROVED_LIMITED
APPROVED
AREA_OF_INTEREST_ONLYB�
"com.google.ads.googleads.v12.enumsBPolicyApprovalStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v12/enums;enums�GAA�Google.Ads.GoogleAds.V12.Enums�Google\\Ads\\GoogleAds\\V12\\Enums�"Google::Ads::GoogleAds::V12::Enumsbproto3
�
2google/ads/googleads/v12/common/asset_policy.protogoogle.ads.googleads.v12.common;google/ads/googleads/v12/enums/policy_approval_status.proto9google/ads/googleads/v12/enums/policy_review_status.proto"�
AdAssetPolicySummaryO
policy_topic_entries (21.google.ads.googleads.v12.common.PolicyTopicEntry`
review_status (2I.google.ads.googleads.v12.enums.PolicyReviewStatusEnum.PolicyReviewStatusf
approval_status (2M.google.ads.googleads.v12.enums.PolicyApprovalStatusEnum.PolicyApprovalStatusB�
#com.google.ads.googleads.v12.commonBAssetPolicyProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v12/common;common�GAA�Google.Ads.GoogleAds.V12.Common�Google\\Ads\\GoogleAds\\V12\\Common�#Google::Ads::GoogleAds::V12::Commonbproto3
�
<google/ads/googleads/v12/enums/served_asset_field_type.protogoogle.ads.googleads.v12.enums"�
ServedAssetFieldTypeEnum"�
ServedAssetFieldType
UNSPECIFIED 
UNKNOWN

HEADLINE_1

HEADLINE_2

HEADLINE_3
DESCRIPTION_1
DESCRIPTION_2B�
"com.google.ads.googleads.v12.enumsBServedAssetFieldTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v12/enums;enums�GAA�Google.Ads.GoogleAds.V12.Enums�Google\\Ads\\GoogleAds\\V12\\Enums�"Google::Ads::GoogleAds::V12::Enumsbproto3
�
.google/ads/googleads/v12/common/ad_asset.protogoogle.ads.googleads.v12.common<google/ads/googleads/v12/enums/asset_performance_label.proto<google/ads/googleads/v12/enums/served_asset_field_type.proto"�
AdTextAsset
text (	H �c
pinned_field (2M.google.ads.googleads.v12.enums.ServedAssetFieldTypeEnum.ServedAssetFieldTypep
asset_performance_label (2O.google.ads.googleads.v12.enums.AssetPerformanceLabelEnum.AssetPerformanceLabelR
policy_summary_info (25.google.ads.googleads.v12.common.AdAssetPolicySummaryB
_text",
AdImageAsset
asset (	H �B
_asset",
AdVideoAsset
asset (	H �B
_asset"2
AdMediaBundleAsset
asset (	H �B
_asset"<
AdDiscoveryCarouselCardAsset
asset (	H �B
_assetB�
#com.google.ads.googleads.v12.commonBAdAssetProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v12/common;common�GAA�Google.Ads.GoogleAds.V12.Common�Google\\Ads\\GoogleAds\\V12\\Common�#Google::Ads::GoogleAds::V12::Commonbproto3'
        , true);
        static::$is_initialized = true;
    }
}

