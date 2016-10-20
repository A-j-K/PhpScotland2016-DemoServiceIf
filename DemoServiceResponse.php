<?php

namespace PhpScotland2016\Demo\Service\Interfaces;

class DemoServiceResponse extends \Yaf_Response_Abstract
{
	public function __construct($json = "{}") {
		parent::__construct();
		$this->_header = array();
		if(is_array($json)) {
			$this->setBodyFromArray($json);
		}
		else {
			$this->setBody($json);
		}
	}

	public function setHeader($header, $value) {
		$this->_header[$header] = $value;
		return $this;
	}

	public function getHeader($header) {
		if(array_key_exists($header, $this->_header)) {
			return $this->_header[$header];
		}
		return null;
	}

	public function getHeaders() {
		return $this->_header;
	}

	public function getJson() {
		return $this->getBody();
	}

	public function getBodyAsArray() {
		return json_decode($this->getBody(), true);
	}

	public function setBodyFromArray(array $arr) {
		$this->setBody(json_encode($arr, JSON_FORCE_OBJECT));
	}
}

