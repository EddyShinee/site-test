<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/enums/asset_type.proto

namespace Google\Ads\GoogleAds\V9\Enums\AssetTypeEnum;

use UnexpectedValueException;

/**
 * Enum describing possible types of asset.
 *
 * Protobuf type <code>google.ads.googleads.v9.enums.AssetTypeEnum.AssetType</code>
 */
class AssetType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * YouTube video asset.
     *
     * Generated from protobuf enum <code>YOUTUBE_VIDEO = 2;</code>
     */
    const YOUTUBE_VIDEO = 2;
    /**
     * Media bundle asset.
     *
     * Generated from protobuf enum <code>MEDIA_BUNDLE = 3;</code>
     */
    const MEDIA_BUNDLE = 3;
    /**
     * Image asset.
     *
     * Generated from protobuf enum <code>IMAGE = 4;</code>
     */
    const IMAGE = 4;
    /**
     * Text asset.
     *
     * Generated from protobuf enum <code>TEXT = 5;</code>
     */
    const TEXT = 5;
    /**
     * Lead form asset.
     *
     * Generated from protobuf enum <code>LEAD_FORM = 6;</code>
     */
    const LEAD_FORM = 6;
    /**
     * Book on Google asset.
     *
     * Generated from protobuf enum <code>BOOK_ON_GOOGLE = 7;</code>
     */
    const BOOK_ON_GOOGLE = 7;
    /**
     * Promotion asset.
     *
     * Generated from protobuf enum <code>PROMOTION = 8;</code>
     */
    const PROMOTION = 8;
    /**
     * Callout asset.
     *
     * Generated from protobuf enum <code>CALLOUT = 9;</code>
     */
    const CALLOUT = 9;
    /**
     * Structured Snippet asset.
     *
     * Generated from protobuf enum <code>STRUCTURED_SNIPPET = 10;</code>
     */
    const STRUCTURED_SNIPPET = 10;
    /**
     * Sitelink asset.
     *
     * Generated from protobuf enum <code>SITELINK = 11;</code>
     */
    const SITELINK = 11;
    /**
     * Page Feed asset.
     *
     * Generated from protobuf enum <code>PAGE_FEED = 12;</code>
     */
    const PAGE_FEED = 12;
    /**
     * Dynamic Education asset.
     *
     * Generated from protobuf enum <code>DYNAMIC_EDUCATION = 13;</code>
     */
    const DYNAMIC_EDUCATION = 13;
    /**
     * Mobile app asset.
     *
     * Generated from protobuf enum <code>MOBILE_APP = 14;</code>
     */
    const MOBILE_APP = 14;
    /**
     * Hotel callout asset.
     *
     * Generated from protobuf enum <code>HOTEL_CALLOUT = 15;</code>
     */
    const HOTEL_CALLOUT = 15;
    /**
     * Call asset.
     *
     * Generated from protobuf enum <code>CALL = 16;</code>
     */
    const CALL = 16;
    /**
     * Price asset.
     *
     * Generated from protobuf enum <code>PRICE = 17;</code>
     */
    const PRICE = 17;
    /**
     * Call to action asset.
     *
     * Generated from protobuf enum <code>CALL_TO_ACTION = 18;</code>
     */
    const CALL_TO_ACTION = 18;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::YOUTUBE_VIDEO => 'YOUTUBE_VIDEO',
        self::MEDIA_BUNDLE => 'MEDIA_BUNDLE',
        self::IMAGE => 'IMAGE',
        self::TEXT => 'TEXT',
        self::LEAD_FORM => 'LEAD_FORM',
        self::BOOK_ON_GOOGLE => 'BOOK_ON_GOOGLE',
        self::PROMOTION => 'PROMOTION',
        self::CALLOUT => 'CALLOUT',
        self::STRUCTURED_SNIPPET => 'STRUCTURED_SNIPPET',
        self::SITELINK => 'SITELINK',
        self::PAGE_FEED => 'PAGE_FEED',
        self::DYNAMIC_EDUCATION => 'DYNAMIC_EDUCATION',
        self::MOBILE_APP => 'MOBILE_APP',
        self::HOTEL_CALLOUT => 'HOTEL_CALLOUT',
        self::CALL => 'CALL',
        self::PRICE => 'PRICE',
        self::CALL_TO_ACTION => 'CALL_TO_ACTION',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AssetType::class, \Google\Ads\GoogleAds\V9\Enums\AssetTypeEnum_AssetType::class);

