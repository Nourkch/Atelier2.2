<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

    // partie II
class StudentController extends AbstractController
{
   
    #[Route('/index', name: 'index')] 
    public function index(): Response
    {
        return new Response('bonjour mes étudiants');
    }
    
}

?>