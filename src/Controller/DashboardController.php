<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/', name: 'dashboard')]
    public function index(): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        if ($this->getUser() && in_array("ROLE_ADMIN", $this->getUser()->getRoles())) {
            return $this->redirectToRoute('app_course_index');
        } else {
            return $this->redirectToRoute('app_user_index');
        }

        // $courses = $courseRepository->findAll();
        // return $this->render('dashboard/index.html.twig', [
        //     'courses' => $courses,
        // ]);
    }

}
