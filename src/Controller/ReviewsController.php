<?php

namespace App\Controller;

use App\Entity\Review;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReviewsController extends AbstractController
{
    // #[Route('/reviews', name: 'app_reviews')]
    // public function index(): Response
    // {
    //     return $this->render('reviews/index.html.twig', [
    //         'controller_name' => 'ReviewsController',
    //     ]);
    // }

    #[Route('/reviews', name: 'app_reviews')]
    public function reviews(ManagerRegistry $doctrine): Response
    {
        $reviews = $doctrine->getRepository(Review::class)->findAll();
        
        return $this->render('reviews/index.html.twig', [
            "reviews" => $reviews
        ]);
    }
}
