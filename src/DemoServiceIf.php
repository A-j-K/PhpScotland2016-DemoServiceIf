<?php

namespace PhpScotland2016\DemoServiceIf;

class Request extends \Yaf_Request_Http
{
}

class JsonResponse extends \Yaf_Response_Abstract 
{
	public function __construct() {
		parent::__construct();
		$this->setHeader('Content-Type', 'application/json');
	}
}

interface DemoServiceIf
{
	/**
	 * Handle the incoming request.
	 * @param PhpScotland2016\DemoServiceIf\Request
	 * @return PhpScotland2016\DemoServiceIf\JsonResponse
	 */
	public function handleRequest(Request request);
}

