<?php

namespace App\Controller;

use App\Entity\Course;
use App\Repository\CourseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user_index',    methods:['GET'])]
    public function index(CourseRepository $courseRepository): Response
    {
        return $this->render('user/index.html.twig', [
            'courses' => $courseRepository->findAll(),
        ]);
    }

    #[Route('/user/profile', name:'app_user_profile')]
    public function profile(): Response
    {

        return $this->render('/user/profile.html.twig');
    }

    #[Route('/user/course_details/{id}', name: 'app_user_course_details', methods: ['GET'])]
    public function course_details(Course $course): Response
    {
        return $this->render('user/course_details.html.twig', [
            'course' => $course,
        ]);
    }

    #[Route('/user/booking/{id}', name: 'app_user_booking', methods: ['GET'])]
    public function booking(Course $course): Response
    {
        return $this->render('user/booking.html.twig', [
            'course' => $course]);
    }
}
