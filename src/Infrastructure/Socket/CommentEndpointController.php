<?php

namespace App\Tests\Infrastructure\Socket;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CommentEndpointController extends AbstractController
{

	/**
	 * @Route(name="commentEndpoint","api/comment/comment/{id}")
	 * @param Request $request
	 * @return JsonResponse
	 */
	public function getComment(Request $request) :JsonResponse
	{
		return new JsonResponse();
	}
}