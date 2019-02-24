<?php

namespace CvBundle\Controller;

use CvBundle\Entity\Competences;
use CvBundle\Entity\Experiences;
use CvBundle\Entity\Formations;
use CvBundle\Entity\InfoG;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CvBundle:Default:index.html.twig');
    }

    public function ajoutInfoAction(Request $request)
    {


        $info = new InfoG();
        $form = $this->createForm('CvBundle\Form\InfoGType', $info);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            $em = $this->getDoctrine()->getManager();
            $em->persist($info);
            $em->flush();

            return $this->redirectToRoute('ajouter_formation');
        }
        return $this->render('@Cv/Default/ajoutInfo.html.twig', array(
            'info' => $info,
            'f' => $form->createView(),));


    }

    public function ajoutFormationAction(Request $request)
    {


        $formation = new Formations();
        $form = $this->createForm('CvBundle\Form\FormationsType', $formation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $formation->setDateDebut(new \DateTime());
            $formation->setDateFin(new \DateTime());
            $em = $this->getDoctrine()->getManager();
            $em->persist($formation);
            $em->flush();

            return $this->redirectToRoute('ajouter_experience');
        }
        return $this->render('@Cv/Default/ajoutFormation.html.twig', array(
            'forma' => $formation,
            'ff' => $form->createView(),));


    }

    public function ajoutExperienceAction(Request $request)
    {


        $experience = new Experiences();
        $form = $this->createForm('CvBundle\Form\ExperiencesType', $experience);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $experience->setDateDebut(new \DateTime());
            $experience->setDateFin(new \DateTime());
            $em = $this->getDoctrine()->getManager();
            $em->persist($experience);
            $em->flush();

            return $this->redirectToRoute('ajouter_competence');
        }
        return $this->render('@Cv/Default/ajoutExperience.html.twig', array(
            'exp' => $experience,
            'ex' => $form->createView(),));
    }
    public function ajoutCompetenceAction(Request $request)
    {


        $competence = new Competences();
        $form = $this->createForm('CvBundle\Form\CompetencesType', $competence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            $em = $this->getDoctrine()->getManager();
            $em->persist($competence);
            $em->flush();

            return $this->redirectToRoute('ajouter_infoG');
        }
        return $this->render('@Cv/Default/ajoutCompetence.html.twig', array(
            'comp' => $competence,
            'co' => $form->createView(),));
    }
}

