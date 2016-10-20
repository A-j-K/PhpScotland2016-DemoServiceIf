<?php

namespace PhpScotland2016\Demo\Service\Interfaces;

class DemoServiceResponse extends \Yaf_Response_Abstract
{
	public function __construct() {
		parent::__construct();
		$this->_header = array();
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
}

