<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gradido/ManageNodeBody.proto

namespace Proto\Gradido;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.gradido.ManageNodeBody</code>
 */
class ManageNodeBody extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 version_number = 1;</code>
     */
    private $version_number = 0;
    protected $data;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $version_number
     *     @type \Proto\Gradido\ManageNodeGroupAdd $group_add
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Gradido\ManageNodeBody::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 version_number = 1;</code>
     * @return int|string
     */
    public function getVersionNumber()
    {
        return $this->version_number;
    }

    /**
     * Generated from protobuf field <code>uint64 version_number = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setVersionNumber($var)
    {
        GPBUtil::checkUint64($var);
        $this->version_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.gradido.ManageNodeGroupAdd group_add = 3;</code>
     * @return \Proto\Gradido\ManageNodeGroupAdd
     */
    public function getGroupAdd()
    {
        return $this->readOneof(3);
    }

    /**
     * Generated from protobuf field <code>.proto.gradido.ManageNodeGroupAdd group_add = 3;</code>
     * @param \Proto\Gradido\ManageNodeGroupAdd $var
     * @return $this
     */
    public function setGroupAdd($var)
    {
        GPBUtil::checkMessage($var, \Proto\Gradido\ManageNodeGroupAdd::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->whichOneof("data");
    }

}

