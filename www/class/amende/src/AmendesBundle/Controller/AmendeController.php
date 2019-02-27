<?php
/**
 * Created by PhpStorm.
 * User: Mejri Dorra
 * Date: 11/14/2018
 * Time: 8:42 PM
 */

namespace AmendesBundle\Controller;


use AmendesBundle\Entity\amende;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AmendesBundle\Form\amendeType;

class AmendeController extends Controller
{
    public function AjouterAction(Request $request){
        $amende= new amende();
        $amende->setPenalite('0');
        $form=$this->createForm(amendeType::class,$amende);
        $form->handleRequest($request);
        if ($form->isSubmitted()&&$form->isValid()){
            //echo 'suite au click sur le bouton submit';
            $em=$this->getDoctrine()->getManager();
            $em->persist($amende);
            $em->flush();
            return$this->redirectToRoute('listeA');
        }
        return $this->render('@Amendes/Amende/ajouter.html.twig',array(
            "form"=>$form->createView()
        ));
    }
    public function listerAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $amende=$em->getRepository('AmendesBundle:amende')->findAll();
        return $this->render('@Amendes/Amende/liste.html.twig',array(
            "amende"=>$amende
        ));
    }
    public function chercherAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $amende=$em->getRepository('AmendesBundle:amende')->findAll();
        if($request->isMethod('POST')){
        $payee=$request->get('payee');
        $em=$this->getDoctrine()->getManager();
        $amende=$em->getRepository('AmendesBundle:amende')->findByPayee($payee);
        }
        return $this->render('@Amendes/Amende/chercher.html.twig',array('amende'=>$amende));
    }
    public function updateAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $amende=$em->getRepository('AmendesBundle:amende')->findByAmende();
        foreach ($amende as $a){
            $montant=$a->getMontant();
            $a->setPenalite($montant+($montant*0.3));
            $em->persist($a);
            $em->flush();
        }
        $amende=$em->getRepository('AmendesBundle:amende')->findAll();
        return $this->render('@Amendes/Amende/penalite.html.twig',array('amende'=>$amende));
    }

}