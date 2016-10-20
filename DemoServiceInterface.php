<?php

namespace PhpScotland2016\Demo\Service\Interfaces;

interface DemoServiceInterface
{
	/**
	 * Handle the incoming request.
	 * @param PhpScotland2016\Demo\Service\Interfaces\DemoServiceRequest
	 * @return PhpScotland2016\Demo\Service\Interfaces\DemoServiceResponse
	 */
	public function handleRequest(DemoServiceRequest $request);
}

