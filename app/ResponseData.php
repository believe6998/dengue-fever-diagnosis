<?php


namespace App;


class ResponseData
{
    public $code;
    public $message;
    public $data;

    function __construct($code, $message, $data)
    {
        $this->code = $code;
        $this->message = $message;
        $this->data = $data;
    }
}
