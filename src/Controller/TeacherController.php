<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    // #[Route('/teacher', name: 'app_teacher')]
    // public function index(): Response
    // {
    //     return $this->render('teacher/index.html.twig', [
    //         'controller_name' => 'TeacherController',
    //     ]);
    // }

    #[Route('/index/{name}', name: 'name')] 
    public function showTeacher($name): Response
    {
        return new Response('bonjour ' .$name);
    }

    #[Route('/teacher/{name}', name: 'app_teacher')]
    public function xx($name): Response
    {
        return $this->render('teacher/index.html.twig', [
            'controller_name' => 'TeacherController',
            'name' => $name,
        ]);
    }

    #[Route('/redirect', name: 'redirect')]
    public function goToIndex(): Response
    {
        return $this->redirectToRoute("index");
    }

    
}
