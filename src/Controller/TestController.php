<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class TestController extends AbstractController
{
    #[Route('/test','test-index')]
    public function index():Response
    {
        return new Response(content:'Hello witaj na mojej stronie !!');
    }
}
