<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: addressbook.proto

namespace Addressbook;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>addressbook.AddPersonRequest</code>
 */
class AddPersonRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.addressbook.Person person = 1;</code>
     */
    private $person = null;

    public function __construct() {
        \GPBMetadata\Addressbook::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.addressbook.Person person = 1;</code>
     * @return \Addressbook\Person
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Generated from protobuf field <code>.addressbook.Person person = 1;</code>
     * @param \Addressbook\Person $var
     * @return $this
     */
    public function setPerson($var)
    {
        GPBUtil::checkMessage($var, \Addressbook\Person::class);
        $this->person = $var;

        return $this;
    }

}
