<?php

namespace App;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use App\Interfaces\CarrierInterface;
use App\Mobile;


class MobileTest extends TestCase
{
	
	/** @test */


	public function it_returns_null_when_name_empty()
	{
		$mobile = new Mobile();

		$this->assertNull($mobile->makeCallByName('')); // If is empty return;
		$this->assertIsBool($mobile->makeCallByName('Javier')); // If exist Dial Contact , return bool true
 		$this->assertIsString($mobile->makeCallByName('Tito')); // If not exist return message 
	}

}
