<?php

namespace PhpScotland2016\Demo\Service\Interfaces;

interface DemoServiceIf
{
	/**
	 * Handle the incoming request.
	 * @param \Yaf_Request_Http
	 * @return \Yaf_Response_Abstract
	 */
	public function handleRequest(\Yaf_Request_Http request);
}

