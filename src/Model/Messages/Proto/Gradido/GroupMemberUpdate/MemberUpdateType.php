<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gradido/GroupMemberUpdate.proto

namespace Proto\Gradido\GroupMemberUpdate;

use UnexpectedValueException;

/**
 * Protobuf type <code>proto.gradido.GroupMemberUpdate.MemberUpdateType</code>
 */
class MemberUpdateType
{
    /**
     * Generated from protobuf enum <code>ADD_USER = 0;</code>
     */
    const ADD_USER = 0;
    /**
     * Generated from protobuf enum <code>MOVE_USER_INBOUND = 1;</code>
     */
    const MOVE_USER_INBOUND = 1;
    /**
     * Generated from protobuf enum <code>MOVE_USER_OUTBOUND = 2;</code>
     */
    const MOVE_USER_OUTBOUND = 2;

    private static $valueToName = [
        self::ADD_USER => 'ADD_USER',
        self::MOVE_USER_INBOUND => 'MOVE_USER_INBOUND',
        self::MOVE_USER_OUTBOUND => 'MOVE_USER_OUTBOUND',
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
class_alias(MemberUpdateType::class, \Proto\Gradido\GroupMemberUpdate_MemberUpdateType::class);

