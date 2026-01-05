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
}
