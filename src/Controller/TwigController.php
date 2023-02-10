<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TwigController extends AbstractController
{
    #[Route('/twig', name: 'app_twig')]
    public function index(): Response
    {
        return $this->render('twig/index.html.twig', [
            'controller_name' => 'TwigController',
        ]);
    }

    #[Route('/twig/{msg}', name: 'twig')]
    public function twig($msg): Response
    {
        // liste des étudiants
        return $this->render('Atelier2/test.html.twig',[
            // 'key'=$value
            'key'=>$msg
        ]);
    }

    #[Route('/showmsg/{msg}', name: 'showmsg')]
    public function show($msg): Response
    {
        $name="maher";
        $formations = array(
            array('ref' => 'form147', 'Titre' => 'Formation Symfony
            4','Description'=>'formation pratique',
            'date_debut'=>'12/06/2020', 'date_fin'=>'19/06/2020',
            'nb_participants'=>19) ,
            array('ref'=>'form177','Titre'=>'Formation SOA' ,
            'Description'=>'formation
            theorique','date_debut'=>'03/12/2020','date_fin'=>'10/12/2020',
            'nb_participants'=>0),
            array('ref'=>'form178','Titre'=>'Formation Angular' ,
            'Description'=>'formation
            theorique','date_debut'=>'10/06/2020','date_fin'=>'14/06/2020',
            'nb_participants'=>12));
        
        return $this->render('Atelier2/show.html.twig',[
            'name'=>$name,
            'f'=>$formations
        ]);
           
    }

    #[Route('/detail/{t}', name: 'detail')]
    public function test($t): Response
    {
        return $this->render('Atelier2/detail.html.twig',[
            'm'=>$t
        ]);
    }
}
