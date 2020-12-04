<?php

namespace App;


class Sms
{
    private $message;
    private $phone;

	function __construct($phoneNumber,$messageSms)
	{
        # code...
        $this->message=$messageSms;
        $this->phone=$phoneNumber;
	}
}