<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: addressbook.proto

namespace Addressbook;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>addressbook.AddressBook</code>
 */
class AddressBook extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .addressbook.Person people = 1;</code>
     */
    private $people;

    public function __construct() {
        \GPBMetadata\Addressbook::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated .addressbook.Person people = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPeople()
    {
        return $this->people;
    }

    /**
     * Generated from protobuf field <code>repeated .addressbook.Person people = 1;</code>
     * @param \Addressbook\Person[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPeople($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Addressbook\Person::class);
        $this->people = $arr;

        return $this;
    }

}

