<?php

namespace App;
include 'Interfaces/CarrierInterface.php';


use App\Interfaces\CarrierInterface;
use App\Services\ContactService;
use App\Contact;
use App\Call;
use App\Sms;

class Mobile  implements  CarrierInterface
{

	//protected $provider;
	private $dataContact;
	
	/*function __construct(CarrierInterface $provider)
	{
		$this->provider = $provider;
	}*/

	function __construct()
	{
		
	}

	public function dialContact(Contact $contact):bool{
		//echo "Calling {$contact->contactName} ...";
		return true;
	}

	public function makeCall():Call{
		return new Call;
	}

	public function sendSms(Sms $sms):bool{

		return true;
	}

	public function makeCallByName($name = '')
	{
		if( empty($name) ) return;

		$contact = ContactService::findByName($name);
		
		if($contact->contactName==""){
			return "Contact not found";
		}else{
			//$this->provider->dialContact($contact);
			
			$phoneNumber="992793515"; // My phone number
			$contactPhone=$contact->setPhone($phoneNumber); 

			if(ContactService::validateNumber($phoneNumber)){
				
				//echo "Phone Number is valid";
				//If number is valid send Sms

				$sms=new Sms($phoneNumber,"Test Message");
				$this->sendSms($sms); // Send SMS

			}else{

				//echo "Phone Number is not valid";
			}
			

			return $this->dialContact($contact);
		}
		

		//return $this->provider->makeCall();
		//return $this->makeCall();
	}

	

	


}

/*
$test=new Mobile();
var_dump($test);*/