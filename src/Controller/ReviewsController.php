<?php

namespace App\Controller;
use App\Form\ReviewType;
use Symfony\Component\HttpFoundation\Request;

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
    public function reviews(ManagerRegistry $doctrine, Request $request): Response
    {
        $review = new Review();
        $form = $this->createForm(ReviewType::class, $review);
        $form->handleRequest($request);
        $em = $doctrine->getManager();
        if ($form->isSubmitted() && $form->isValid()) {
            $review = $form->getData();
            $em->persist($review);
            $em->flush();

            return $this->redirectToRoute("app_reviews");
        }
        $reviews = $doctrine->getRepository(Review::class)->findAll();
        
        return $this->render('reviews/index.html.twig', [
            "reviews" => $reviews,
            "review"=> $form->createView()
        ]);
    }
}
