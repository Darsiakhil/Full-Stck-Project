<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class FileResponseController extends AbstractController
{
    #[Route('/file/response', name: 'app_file_response')]
    // public function index(): Response
    // {
    //     return $this->render('file_response/index.html.twig', [
    //         'controller_name' => 'FileResponseController',
    //     ]);
    // }

    public function download(): BinaryFileResponse
    {
        // send the file contents and force the browser to download it
        return $this->file('C:\xampp\htdocs\Full-Stck-Project\public\downloads\test.pdf');
    }
}
