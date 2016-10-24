<?php
namespace PhpScotland2016\Demo\Service\Interfaces;
class DemoServiceResponse implements DemoServiceResponseInterface
{
    protected $_message = [];
    public function __construct($json = "{}") {
        if(is_array($json)) {
            $this->setFromArray($json);
        }
        else {
           $this->_message = json_decode($in, true);
        }
    }
    public function getJson() {
        return json_encode($this->_message, JSON_FORCE_OBJECT);
    }
    public function getArray() {
        return $this->_message;
    }
    public function setFromArray(array $arr) {
        $this->_message = $arr;
    }
}
