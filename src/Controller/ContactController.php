<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request): Response
    {
        return $this->render('contact/index.html.twig', [
            'title' => 'Contact',
            'myRoute' => $request->attributes->get('_route'),
            "page" => "Contact",
            "subtitle" => "Nous écrire"
        ]);
    }
}
