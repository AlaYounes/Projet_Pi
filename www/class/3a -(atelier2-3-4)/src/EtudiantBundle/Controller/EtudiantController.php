<?php

namespace EtudiantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class EtudiantController extends Controller
{
    public function indexAction($nbr)
    {
       return new Response("Bonjour 3A".$nbr);
    }

    public function affichageAction($nom)
    {
        return $this->render("@Etudiant/Etudiant/etudiant.html.twig",array("nom"=>$nom));
    }
}
