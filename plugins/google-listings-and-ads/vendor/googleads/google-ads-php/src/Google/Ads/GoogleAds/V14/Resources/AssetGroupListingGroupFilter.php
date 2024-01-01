<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/resources/asset_group_listing_group_filter.proto

namespace Google\Ads\GoogleAds\V14\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AssetGroupListingGroupFilter represents a listing group filter tree node in
 * an asset group.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.resources.AssetGroupListingGroupFilter</code>
 */
class AssetGroupListingGroupFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the asset group listing group filter.
     * Asset group listing group filter resource name have the form:
     * `customers/{customer_id}/assetGroupListingGroupFilters/{asset_group_id}~{listing_group_filter_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Immutable. The asset group which this asset group listing group filter is
     * part of.
     *
     * Generated from protobuf field <code>string asset_group = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $asset_group = '';
    /**
     * Output only. The ID of the ListingGroupFilter.
     *
     * Generated from protobuf field <code>int64 id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = 0;
    /**
     * Immutable. Type of a listing group filter node.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.ListingGroupFilterTypeEnum.ListingGroupFilterType type = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $type = 0;
    /**
     * Immutable. The vertical the current node tree represents. All nodes in the
     * same tree must belong to the same vertical.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.ListingGroupFilterVerticalEnum.ListingGroupFilterVertical vertical = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $vertical = 0;
    /**
     * Dimension value with which this listing group is refining its parent.
     * Undefined for the root group.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.resources.ListingGroupFilterDimension case_value = 6;</code>
     */
    protected $case_value = null;
    /**
     * Immutable. Resource name of the parent listing group subdivision. Null for
     * the root listing group filter node.
     *
     * Generated from protobuf field <code>string parent_listing_group_filter = 7 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $parent_listing_group_filter = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the asset group listing group filter.
     *           Asset group listing group filter resource name have the form:
     *           `customers/{customer_id}/assetGroupListingGroupFilters/{asset_group_id}~{listing_group_filter_id}`
     *     @type string $asset_group
     *           Immutable. The asset group which this asset group listing group filter is
     *           part of.
     *     @type int|string $id
     *           Output only. The ID of the ListingGroupFilter.
     *     @type int $type
     *           Immutable. Type of a listing group filter node.
     *     @type int $vertical
     *           Immutable. The vertical the current node tree represents. All nodes in the
     *           same tree must belong to the same vertical.
     *     @type \Google\Ads\GoogleAds\V14\Resources\ListingGroupFilterDimension $case_value
     *           Dimension value with which this listing group is refining its parent.
     *           Undefined for the root group.
     *     @type string $parent_listing_group_filter
     *           Immutable. Resource name of the parent listing group subdivision. Null for
     *           the root listing group filter node.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Resources\AssetGroupListingGroupFilter::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the asset group listing group filter.
     * Asset group listing group filter resource name have the form:
     * `customers/{customer_id}/assetGroupListingGroupFilters/{asset_group_id}~{listing_group_filter_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the asset group listing group filter.
     * Asset group listing group filter resource name have the form:
     * `customers/{customer_id}/assetGroupListingGroupFilters/{asset_group_id}~{listing_group_filter_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Immutable. The asset group which this asset group listing group filter is
     * part of.
     *
     * Generated from protobuf field <code>string asset_group = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAssetGroup()
    {
        return $this->asset_group;
    }

    /**
     * Immutable. The asset group which this asset group listing group filter is
     * part of.
     *
     * Generated from protobuf field <code>string asset_group = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAssetGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->asset_group = $var;

        return $this;
    }

    /**
     * Output only. The ID of the ListingGroupFilter.
     *
     * Generated from protobuf field <code>int64 id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Output only. The ID of the ListingGroupFilter.
     *
     * Generated from protobuf field <code>int64 id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Immutable. Type of a listing group filter node.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.ListingGroupFilterTypeEnum.ListingGroupFilterType type = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Immutable. Type of a listing group filter node.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.ListingGroupFilterTypeEnum.ListingGroupFilterType type = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V14\Enums\ListingGroupFilterTypeEnum\ListingGroupFilterType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Immutable. The vertical the current node tree represents. All nodes in the
     * same tree must belong to the same vertical.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.ListingGroupFilterVerticalEnum.ListingGroupFilterVertical vertical = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getVertical()
    {
        return $this->vertical;
    }

    /**
     * Immutable. The vertical the current node tree represents. All nodes in the
     * same tree must belong to the same vertical.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.ListingGroupFilterVerticalEnum.ListingGroupFilterVertical vertical = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setVertical($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V14\Enums\ListingGroupFilterVerticalEnum\ListingGroupFilterVertical::class);
        $this->vertical = $var;

        return $this;
    }

    /**
     * Dimension value with which this listing group is refining its parent.
     * Undefined for the root group.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.resources.ListingGroupFilterDimension case_value = 6;</code>
     * @return \Google\Ads\GoogleAds\V14\Resources\ListingGroupFilterDimension|null
     */
    public function getCaseValue()
    {
        return $this->case_value;
    }

    public function hasCaseValue()
    {
        return isset($this->case_value);
    }

    public function clearCaseValue()
    {
        unset($this->case_value);
    }

    /**
     * Dimension value with which this listing group is refining its parent.
     * Undefined for the root group.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.resources.ListingGroupFilterDimension case_value = 6;</code>
     * @param \Google\Ads\GoogleAds\V14\Resources\ListingGroupFilterDimension $var
     * @return $this
     */
    public function setCaseValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V14\Resources\ListingGroupFilterDimension::class);
        $this->case_value = $var;

        return $this;
    }

    /**
     * Immutable. Resource name of the parent listing group subdivision. Null for
     * the root listing group filter node.
     *
     * Generated from protobuf field <code>string parent_listing_group_filter = 7 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParentListingGroupFilter()
    {
        return $this->parent_listing_group_filter;
    }

    /**
     * Immutable. Resource name of the parent listing group subdivision. Null for
     * the root listing group filter node.
     *
     * Generated from protobuf field <code>string parent_listing_group_filter = 7 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParentListingGroupFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent_listing_group_filter = $var;

        return $this;
    }

}

