<?php


namespace App\Tests\Infrastructure\Socket;


use Liip\FunctionalTestBundle\Test\WebTestCase;

class CommentEndpointTest extends WebTestCase
{
	public function testACommentShouldBeRetrivedFromEndpoint()
	{
		$client = $this->createClient();
		$request = $client->request('GET','/api/comment/comment/1');

		$this->assertJsonStringEqualsJsonString(
			file_get_contents(__DIR__.'/Fixtures/response.json'),
				$client->getResponse()->getContent()
		);
	}
}