<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ContactController extends AbstractController
{
    // On définit la route vers la page contact
    /**
     * @Route("/contact", name="contact")
     */

    public function contactController(){
        return $this->render('contact.html.twig');
    }

    /**
     * @Route("/profil", name="profil")
     */
    public function profilController(){
        return $this->render('profil.html.twig');
    }






}