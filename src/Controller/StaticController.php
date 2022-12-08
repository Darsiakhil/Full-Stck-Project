<?php

namespace App\Controller;

use App\Entity\Course;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StaticController extends AbstractController
{
    #[Route('/static', name: 'app_static')]
    public function index(ManagerRegistry $doctrine): Response
    {
        return $this->render('static/index.html.twig', [
            'courses' => $doctrine->getRepository(Course::class)->findAll(),
        ]);
    }
}
