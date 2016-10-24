<?php
namespace PhpScotland2016\Demo\Service\Interfaces;
class DemoServiceRequest 
{
	protected $_message = "";

	public function __construct($in = "") {
		$this->_message = $in;
	}

	public function get() {
		return $this->_message;		
	}

	public function set($in) {
		$this->_message = $in;
		return $this;
	}

	public function getParam($name, $default) {
		$arr = json_decode($this->_message, true);
		if(is_array($arr) && array_key_exists($name, $arr)) {
			return $arr[$name];
		}
		return $default;
	}

	public function getAsArray() {
		return json_decode($this->_message, true);
	}

}

