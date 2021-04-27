<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AliveController extends AbstractController
{

	/**
	 * @Route(name="aliveController", "/api/alive")
	 */
	public function pingMe(Request $request) :Response
	{
		return (new Response())->setStatusCode(200);
	}
}