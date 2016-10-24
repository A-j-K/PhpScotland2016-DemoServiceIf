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
interface DemoServiceRequestInterface
{
    public function get();
    public function set($in = "{}");
    public function setParam($name, $value);
    public function getParam($name, $default);
    public function getAsArray();
}
interface DemoServiceResponseInterface
{
    public function getJson();
    public function getArray();
    public function setFromArray(array $arr);
}

