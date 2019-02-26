<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/common.proto

namespace Google\Cloud\Monitoring\V3;

/**
 * The tier of service for a Workspace. Please see the
 * [service tiers
 * documentation](https://cloud.google.com/monitoring/workspaces/tiers) for more
 * details.
 *
 * Protobuf type <code>google.monitoring.v3.ServiceTier</code>
 */
class ServiceTier
{
    /**
     * An invalid sentinel value, used to indicate that a tier has not
     * been provided explicitly.
     *
     * Generated from protobuf enum <code>SERVICE_TIER_UNSPECIFIED = 0;</code>
     */
    const SERVICE_TIER_UNSPECIFIED = 0;
    /**
     * The Stackdriver Basic tier, a free tier of service that provides basic
     * features, a moderate allotment of logs, and access to built-in metrics.
     * A number of features are not available in this tier. For more details,
     * see [the service tiers
     * documentation](https://cloud.google.com/monitoring/workspaces/tiers).
     *
     * Generated from protobuf enum <code>SERVICE_TIER_BASIC = 1;</code>
     */
    const SERVICE_TIER_BASIC = 1;
    /**
     * The Stackdriver Premium tier, a higher, more expensive tier of service
     * that provides access to all Stackdriver features, lets you use Stackdriver
     * with AWS accounts, and has a larger allotments for logs and metrics. For
     * more details, see [the service tiers
     * documentation](https://cloud.google.com/monitoring/workspaces/tiers).
     *
     * Generated from protobuf enum <code>SERVICE_TIER_PREMIUM = 2;</code>
     */
    const SERVICE_TIER_PREMIUM = 2;
}

