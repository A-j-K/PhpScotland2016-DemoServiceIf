<?php
namespace PhpScotland2016\Demo\Service\Interfaces;
class DemoServiceResponse
{
	protected $_message = "";

	public function __construct($json = "{}") {
		if(is_array($json)) {
			$this->setFromArray($json);
		}
		else {
			$this->_message = $json;
		}
	}
	public function getJson() {
		return $this->_message;
	}
	public function getArray() {
		return json_decode($this->_message, true);
	}
	public function setFromArray(array $arr) {
		$this->_message = json_encode($arr, JSON_FORCE_OBJECT);
	}
}
