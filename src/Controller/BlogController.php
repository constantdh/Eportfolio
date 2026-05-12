<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BlogController extends AbstractController
{
    #[Route('/blog/home', name: 'app_blog')]
    public function index(): Response
    {
        return $this->render('blog/home.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
     #[Route('/blog/cv', name: 'app_cv')]
    public function cv(): Response
    {
        return $this->render('blog/Cv.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
    #[Route('/blog/esp', name: 'app_esp')]
        public function esp(): Response
    {
        return $this->render('blog/esp.html.twig', [
             'controller_name' => 'BlogController',
            ]);
    }
    #[Route('/blog/contacts', name: 'app_contacts')]
        public function contacts(): Response
    {
        return $this->render('blog/Contact.html.twig', [
             'controller_name' => 'BlogController',
            ]);
    }
    #[Route('/blog/hobbies', name: 'app_hobbies')]
        public function hobbies(): Response
    {
        return $this->render('blog/hobbies.html.twig', [
             'controller_name' => 'BlogController',
            ]);
    }
    #[Route('/blog/eportefolio', name: 'app_eportefolio')]
        public function eportefolio(): Response
    {
        return $this->render('blog/Eportefolio.html.twig', [
             'controller_name' => 'BlogController',
            ]);
    }
    #[Route('/blog/cv/formulaire', name: 'app_formulaire')]
        public function formulaire(): Response
    {
        return $this->render('blog/formulaire.html.twig', [
             'controller_name' => 'BlogController',
            ]);
    }
    #[Route('/blog/competence1', name: 'app_competence1')]
            public function competence1(): Response
        {
            return $this->render('blog/competence1.html.twig', [
                'controller_name' => 'BlogController',
                ]);
        }
        #[Route('/blog/competence2', name: 'app_competence2')]
            public function competence2(): Response
        {
            return $this->render('blog/competence2.html.twig', [
                'controller_name' => 'BlogController',
                ]);
        }
        #[Route('/blog/competence3', name: 'app_competence3')]
            public function competence3(): Response
        {
            return $this->render('blog/competence3.html.twig', [
                'controller_name' => 'BlogController',
                ]);
        }
        


        #[Route('/blog/AC', name: 'app_AC')]
            public function AC(): Response
        {
            return $this->render('blog/AC.html.twig', [
                'controller_name' => 'BlogController',
                ]);
        }
        #[Route('/blog/AR', name: 'app_AR')]
            public function AR(): Response
        {
            return $this->render('blog/AR.html.twig', [
                'controller_name' => 'BlogController',
                ]);
        }
    }



