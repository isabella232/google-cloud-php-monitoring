<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/uptime.proto

namespace Google\Cloud\Monitoring\V3\UptimeCheckConfig\ContentMatcher;

use UnexpectedValueException;

/**
 * Options to perform content matching.
 *
 * Protobuf type <code>google.monitoring.v3.UptimeCheckConfig.ContentMatcher.ContentMatcherOption</code>
 */
class ContentMatcherOption
{
    /**
     * No content macher option specified. Treated as CONTAINS_STRING.
     *
     * Generated from protobuf enum <code>CONTENT_MATCHER_OPTION_UNSPECIFIED = 0;</code>
     */
    const CONTENT_MATCHER_OPTION_UNSPECIFIED = 0;
    /**
     * Allows checking substring matching.
     * Default value for previous versions without option.
     *
     * Generated from protobuf enum <code>CONTAINS_STRING = 1;</code>
     */
    const CONTAINS_STRING = 1;
    /**
     * Allows checking negation of substring matching (doesn't contain the
     * substring).
     *
     * Generated from protobuf enum <code>NOT_CONTAINS_STRING = 2;</code>
     */
    const NOT_CONTAINS_STRING = 2;
    /**
     * Allows checking regular expression matching.
     *
     * Generated from protobuf enum <code>MATCHES_REGEX = 3;</code>
     */
    const MATCHES_REGEX = 3;
    /**
     * Allows checking negation of regular expression matching.
     *
     * Generated from protobuf enum <code>NOT_MATCHES_REGEX = 4;</code>
     */
    const NOT_MATCHES_REGEX = 4;

    private static $valueToName = [
        self::CONTENT_MATCHER_OPTION_UNSPECIFIED => 'CONTENT_MATCHER_OPTION_UNSPECIFIED',
        self::CONTAINS_STRING => 'CONTAINS_STRING',
        self::NOT_CONTAINS_STRING => 'NOT_CONTAINS_STRING',
        self::MATCHES_REGEX => 'MATCHES_REGEX',
        self::NOT_MATCHES_REGEX => 'NOT_MATCHES_REGEX',
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
class_alias(ContentMatcherOption::class, \Google\Cloud\Monitoring\V3\UptimeCheckConfig_ContentMatcher_ContentMatcherOption::class);

