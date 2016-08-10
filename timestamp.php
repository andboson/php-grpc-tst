<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: google/protobuf/timestamp.proto
//   Date: 2016-08-09 14:51:06

namespace google\protobuf {

  class Timestamp extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $seconds = null;
    
    /**  @var int */
    public $nanos = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.protobuf.Timestamp');

      // OPTIONAL INT64 seconds = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "seconds";
      $f->type      = \DrSlump\Protobuf::TYPE_INT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL INT32 nanos = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "nanos";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <seconds> has a value
     *
     * @return boolean
     */
    public function hasSeconds(){
      return $this->_has(1);
    }
    
    /**
     * Clear <seconds> value
     *
     * @return \google\protobuf\Timestamp
     */
    public function clearSeconds(){
      return $this->_clear(1);
    }
    
    /**
     * Get <seconds> value
     *
     * @return int
     */
    public function getSeconds(){
      return $this->_get(1);
    }
    
    /**
     * Set <seconds> value
     *
     * @param int $value
     * @return \google\protobuf\Timestamp
     */
    public function setSeconds( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <nanos> has a value
     *
     * @return boolean
     */
    public function hasNanos(){
      return $this->_has(2);
    }
    
    /**
     * Clear <nanos> value
     *
     * @return \google\protobuf\Timestamp
     */
    public function clearNanos(){
      return $this->_clear(2);
    }
    
    /**
     * Get <nanos> value
     *
     * @return int
     */
    public function getNanos(){
      return $this->_get(2);
    }
    
    /**
     * Set <nanos> value
     *
     * @param int $value
     * @return \google\protobuf\Timestamp
     */
    public function setNanos( $value){
      return $this->_set(2, $value);
    }
  }
}

