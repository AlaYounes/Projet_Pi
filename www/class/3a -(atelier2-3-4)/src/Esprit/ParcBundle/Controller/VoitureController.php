<?php

namespace Esprit\ParcBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class VoitureController extends Controller
{
    public function affichageAction($marque)
    {
        return $this->render("@EspritParc/Voiture/affiche.html.twig",array("marque"=>$marque));
    }

    public function listAction()
    {
        $marques=array("BMW","Renault","Peugeot","Fiat");
        $voitures= array(
            array('id'=>1,'serie'=>'131','marque'=>$marques[0]),
            array('id'=>2,'serie'=>'201','marque'=>$marques[1]),
            array('id'=>3,'serie'=>'205','marque'=>$marques[2]),
        );
        return $this->render("@EspritParc/Voiture/list.html.twig",array('voitures'=>$voitures));
    }
}
