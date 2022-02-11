<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/errors/ad_parameter_error.proto

namespace Google\Ads\GoogleAds\V8\Errors\AdParameterErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible ad parameter errors.
 *
 * Protobuf type <code>google.ads.googleads.v8.errors.AdParameterErrorEnum.AdParameterError</code>
 */
class AdParameterError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The ad group criterion must be a keyword criterion.
     *
     * Generated from protobuf enum <code>AD_GROUP_CRITERION_MUST_BE_KEYWORD = 2;</code>
     */
    const AD_GROUP_CRITERION_MUST_BE_KEYWORD = 2;
    /**
     * The insertion text is invalid.
     *
     * Generated from protobuf enum <code>INVALID_INSERTION_TEXT_FORMAT = 3;</code>
     */
    const INVALID_INSERTION_TEXT_FORMAT = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::AD_GROUP_CRITERION_MUST_BE_KEYWORD => 'AD_GROUP_CRITERION_MUST_BE_KEYWORD',
        self::INVALID_INSERTION_TEXT_FORMAT => 'INVALID_INSERTION_TEXT_FORMAT',
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
class_alias(AdParameterError::class, \Google\Ads\GoogleAds\V8\Errors\AdParameterErrorEnum_AdParameterError::class);

