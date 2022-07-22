<?php

namespace App\Controller;

use DateTime;
use App\Service\CallApiService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(CallApiService $callApiService): Response
    {
         dd($callApiService->getAllData());

        return $this->render('home/index.html.twig', [
            'data' => $callApiService->getAllData(),
            'franceData' => $callApiService->getFranceData(),
        ]);


    }
}