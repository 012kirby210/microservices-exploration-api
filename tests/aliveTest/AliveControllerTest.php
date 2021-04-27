<?php


namespace App\Tests;

use Liip\FunctionalTestBundle\Test\WebTestCase;

class AliveControllerTest extends WebTestCase
{
	public function testTheAliveControllerShouldResponseA200()
	{
		$client = $this->createClient();
		$client->request('GET','/api/alive');
		$this->assertEquals(200,$client->getResponse()->getStatusCode());
	}
}