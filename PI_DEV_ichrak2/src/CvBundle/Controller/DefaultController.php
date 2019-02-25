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
            'formation' => $formation,
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


    public function afficheCvAction(Request $request)
    {
        $user = $this->getUser();

        if($user != null)
        {
            if($user->getRoles()[0] == 'ROLE_USER')
            {
                if(isset($_GET['order']))
                {
                    $order = $_GET['order'];

                    if($order == 'date')
                    {
                        $list = $this->getDoctrine()->getRepository(Reclamation::class)->order($user->getId());
                        $paginated = $this->get('knp_paginator')->paginate(
                            $list,
                            $request->query->get('page',1),5
                        );
                        $reply =$this->getDoctrine()->getRepository(Reponse::class)->myResponse(0);
                        return $this->render('@Reclamation/Default/mylist.html.twig', array(
                            'list' => $paginated,
                            'reply' => $reply,
                        ));
                    }
                    else
                    {
                        $list = $this->getDoctrine()->getRepository(Reclamation::class)->orderTreated($user->getId());
                        $reply =$this->getDoctrine()->getRepository(Reponse::class)->myResponse(0);
                        $paginated = $this->get('knp_paginator')->paginate(
                            $list,
                            $request->query->get('page',1),5
                        );
                        return $this->render('@Reclamation/Default/mylist.html.twig', array(
                            'list' => $paginated,
                            'reply' => $reply,
                        ));
                    }

                }


                if(isset($_GET['id']))
                {
                    $id = $_GET['id'];
                    $reply =$this->getDoctrine()->getRepository(Reponse::class)->myResponse($id);
                    $list = $this->getDoctrine()->getRepository(Reclamation::class)->order($user->getId());
                    $paginated = $this->get('knp_paginator')->paginate(
                        $list,
                        $request->query->get('page',1),5
                    );
                    //die(print_r($reply));
                    return $this->render('@Reclamation/Default/mylist.html.twig', array(
                        'list' => $paginated,
                        'reply' => $reply,
                    ));
                }


                $list = $this->getDoctrine()->getRepository(Reclamation::class)->order($user->getId());
                $paginated = $this->get('knp_paginator')->paginate(
                    $list,
                    $request->query->get('page',1),5
                );
                $reply = null;
                return $this->render('@Reclamation/Default/mylist.html.twig', array(
                    'list' => $paginated,
                    'reply' => $reply,
                ));


            }
            else{
                return $this->redirectToRoute('claim_index');
            }
        }

        return $this->redirectToRoute('fos_user_security_login');
    }

    public function afficheinfobyAction()
    {
        $doctrine=$this->getDoctrine();
        $repository=$doctrine->getRepository('CvBundle\Entity\InfoG');

        $hotels=$repository->findOneBy();

        return $this->render("@Cv/Default/.html.twig",array('hotel'=>$hotels));
    }
}

