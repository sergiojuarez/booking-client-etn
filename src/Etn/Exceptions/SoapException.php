<?php
namespace Etn\Exceptions;

class SoapException extends  \Exception{



    function __construct($message, $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }

    public function soapFunction() {
        echo "A custom function for this type of exception\n";
    }

}



