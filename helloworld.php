<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: helloworld.proto
//   Date: 2016-08-10 07:48:25

namespace helloworld {

  class HelloRequest1 extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $name = null;
    
    /**  @var int */
    public $wait_minutes = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'helloworld.HelloRequest1');

      // OPTIONAL STRING name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL INT32 wait_minutes = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "wait_minutes";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <name> has a value
     *
     * @return boolean
     */
    public function hasName(){
      return $this->_has(1);
    }
    
    /**
     * Clear <name> value
     *
     * @return \helloworld\HelloRequest1
     */
    public function clearName(){
      return $this->_clear(1);
    }
    
    /**
     * Get <name> value
     *
     * @return string
     */
    public function getName(){
      return $this->_get(1);
    }
    
    /**
     * Set <name> value
     *
     * @param string $value
     * @return \helloworld\HelloRequest1
     */
    public function setName( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <wait_minutes> has a value
     *
     * @return boolean
     */
    public function hasWaitMinutes(){
      return $this->_has(2);
    }
    
    /**
     * Clear <wait_minutes> value
     *
     * @return \helloworld\HelloRequest1
     */
    public function clearWaitMinutes(){
      return $this->_clear(2);
    }
    
    /**
     * Get <wait_minutes> value
     *
     * @return int
     */
    public function getWaitMinutes(){
      return $this->_get(2);
    }
    
    /**
     * Set <wait_minutes> value
     *
     * @param int $value
     * @return \helloworld\HelloRequest1
     */
    public function setWaitMinutes( $value){
      return $this->_set(2, $value);
    }
  }
}

namespace helloworld {

  class HelloReply extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $message = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'helloworld.HelloReply');

      // OPTIONAL STRING message = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "message";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <message> has a value
     *
     * @return boolean
     */
    public function hasMessage(){
      return $this->_has(1);
    }
    
    /**
     * Clear <message> value
     *
     * @return \helloworld\HelloReply
     */
    public function clearMessage(){
      return $this->_clear(1);
    }
    
    /**
     * Get <message> value
     *
     * @return string
     */
    public function getMessage(){
      return $this->_get(1);
    }
    
    /**
     * Set <message> value
     *
     * @param string $value
     * @return \helloworld\HelloReply
     */
    public function setMessage( $value){
      return $this->_set(1, $value);
    }
  }
}

namespace helloworld {

  class GreeterClient extends \Grpc\BaseStub {

    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }
    /**
     * @param helloworld\HelloRequest1 $input
     */
    public function SayHello(\helloworld\HelloRequest1 $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/helloworld.Greeter/SayHello', $argument, '\helloworld\HelloReply::deserialize', $metadata, $options);
    }
  }
}
