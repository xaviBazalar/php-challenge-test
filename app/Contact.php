<?php

namespace App;


class Contact
{
	public $contactName;
	public $contactPhone;

	function __construct($nameContact)
	{
		# code...
		$this->contactName=$nameContact;
	}

	public function setPhone($phone){
		$this->contactPhone=$phone;
	}
}