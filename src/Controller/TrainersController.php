<?php

namespace App\Controller;

use App\Repository\TrainerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TrainersController extends AbstractController
{
    #[Route('/trainers', name: 'app_trainers')]
    public function index(TrainerRepository $trainerRepository): Response
    {
        return $this->render('trainers/index.html.twig', [
            'trainer' => $trainerRepository->findAll(),
        ]);
    }
}
