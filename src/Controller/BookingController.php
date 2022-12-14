<?php

namespace App\Controller;

use App\Entity\Course;
use App\Entity\Booking;
use App\Form\BookingType;
use App\Repository\BookingRepository;
use Doctrine\ORM\Mapping\Id;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/booking')]
class BookingController extends AbstractController
{
    #[Route('/', name: 'app_booking_index', methods: ['GET'])]
    public function index(BookingRepository $bookingRepository): Response
    {
        return $this->render('booking/index.html.twig', [
            'bookings' => $bookingRepository->findAll(),
        ]);
    }

    #[Route('/new/{id}', name: 'app_booking_new', methods: ['GET', 'POST'])]
    public function new(Course $course, Request $request, BookingRepository $bookingRepository, UserInterface $user): Response
    {
        $booking = new Booking();
        $date = new \DateTime('@'.strtotime('now'));
        $booking->setBookingDate($date);
        $booking->setFkUserId($user);
        $booking->setFkCourseId($course);
        
        $bookingRepository->save($booking, true);

        $this->addFlash('success', 'Thank you for your booking! You will receive a confirmation email from us as soon as the booking is confirmed.');
        
        return $this->redirectToRoute('app_user_booking', ['id'=>$course->getId()], Response::HTTP_SEE_OTHER);

        // $form = $this->createForm(BookingType::class, $booking);
        // $form->handleRequest($request);

        // if ($form->isSubmitted() && $form->isValid()) {

        // }

        // return $this->renderForm('booking/new.html.twig', [
        //     'booking' => $booking,
        //     'form' => $form,
        // ]);
    }

    #[Route('/{id}', name: 'app_booking_show', methods: ['GET'])]
    public function show(Booking $booking): Response
    {
        return $this->render('booking/show.html.twig', [
            'booking' => $booking,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_booking_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Booking $booking, BookingRepository $bookingRepository): Response
    {
        $form = $this->createForm(BookingType::class, $booking);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $bookingRepository->save($booking, true);

            return $this->redirectToRoute('app_booking_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('booking/edit.html.twig', [
            'booking' => $booking,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_booking_delete', methods: ['POST'])]
    public function delete(Request $request, Booking $booking, BookingRepository $bookingRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$booking->getId(), $request->request->get('_token'))) {
            $bookingRepository->remove($booking, true);
        }

        return $this->redirectToRoute('app_booking_index', [], Response::HTTP_SEE_OTHER);
    }
}
