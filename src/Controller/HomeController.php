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
        dd($callApiService->getFranceData());

        return $this->render('home/index.html.twig', [
            'data' => $callApiService->getFranceData(),
        ]);




        // for ($i = 1; $i < 8; $i++) {
        //     $date = new DateTime('- '. $i .' day');
        //     $datas = $callApiService->getAllDataByDate($date->format('d-m-Y'));

        //     $label[] = $datas[0]['date'];
        //     $hospitalisation[] = $datas[0]['incid_hosp'];
        //     $rea[] = $datas[0]['incid_rea'];
        // };
      
        // return $this->render('home/index.html.twig', [
        //     'label' => $label,
        //     'hospitalisation' => $hospitalisation,
        //     'rea' => $rea,
        // ]);
        
        // return $this->render('home/index.html.twig', [
        //     'data' => $callApiService->getFranceData(),
        //     'departements' => $callApiService->getAllData(),
        // ]);

    }
}