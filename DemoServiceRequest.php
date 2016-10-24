<?php
namespace PhpScotland2016\Demo\Service\Interfaces;

class DemoServiceRequest implements DemoServiceRequestInterface
{
    protected $_message = [];
    public function __construct($in = "{}") {
        $this->set($in);
    }
    public function set($in = "{}") {
        if(is_string($in)) {
            $this->_message = json_decode($in, true);
        }
        else if(is_array($in)) {
            $this->_message = $in;
        }
        if(!is_array($this->_message)) {
            $this->_message = [];
        }
        return $this;
    }
    public function get() {
	return json_encode($this->_message, JSON_FORCE_OBJECT);		
    }
    public function setParam($name, $value) {
        $this->_message[$name] = $value;
	$arr = json_decode($this->_message, true);
        $arr[$name] = $value;
        $this->_message = json_encode($arr, JSON_FORCE_OBJECT);
	return $this;
    }        
    public function getParam($name, $default) {
	if(array_key_exists($name, $this->_message)) {
            return $this->_message[$name];
	}
	return $default;
    }
    public function getAsArray() {
	return $this->_message;
    }
}

