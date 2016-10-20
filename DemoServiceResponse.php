<?php

namespace PhpScotland2016\Demo\Service\Interfaces;

class DemoServiceResponse extends \Yaf_Response_Abstract
{
	public function setHeader($header, $value) {
		$this->_header[$header] = $value;
		return $this;
	}
}

