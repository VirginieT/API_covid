<?php

namespace App\Controller;

use App\Service\CallApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FranceController extends AbstractController
{
    /**
     * @Route("/france", name="france")
     */
    public function index(CallApiService $callApiService): Response
    {
        dd($callApiService->getAllData());

        return $this->render('france/index.html.twig', [
            'franceData' => $callApiService->getFranceData(),
        ]);
    }
}