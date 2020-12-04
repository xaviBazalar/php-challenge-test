<?php

namespace App\Services;

use App\Contact;


class ContactService
{
	
	public static function findByName($name): Contact
	{
		// queries to the db
		if($name=="Javier"){
			return new Contact($name);
		}else{
			return new Contact("");
		}
	}

	public static function validateNumber(string $number): bool
	{
		// logic to validate numbers
		

		if(preg_match("/^[0-9]{3}[0-9]{3}[0-9]{3}$/", $number)) {
			// $phone is valid
			return true;
		}else{
			return false;
		}
	}


}