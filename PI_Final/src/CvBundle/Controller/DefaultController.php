<?php

namespace CvBundle\Controller;

use AppBundle\Entity\User;
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

        $user = $this->getUser();

        if($user!=null)
        {
            if($user->getRoles()[0] == 'ROLE_USER')
            {
        $info = new InfoG();


        $form = $this->createForm('CvBundle\Form\InfoGType', $info);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

          $user->setHascv('1');


            $info->setUser($user);
            $em = $this->getDoctrine()->getManager();
            $em->persist($info);
            $em->flush();

            return $this->redirectToRoute('ajouter_formation');
        }
        return $this->render('@Cv/Default/ajoutInfo.html.twig', array(
            'info' => $info,
            'f' => $form->createView(),));

            }
            else
                return $this->redirectToRoute('claim_index');

        }
        return $this->redirectToRoute('fos_user_security_login');
    }






    public function ajoutFormationAction(Request $request)
    {

        $user = $this->getUser();
        if($user!=null)
        {
            if($user->getRoles()[0] == 'ROLE_USER')
            {
        $formation = new Formations();
        $form = $this->createForm('CvBundle\Form\FormationsType', $formation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            $formation->setUser($user);
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
        else
            return $this->redirectToRoute('claim_index');

    }
return $this->redirectToRoute('fos_user_security_login');
}






    public function ajoutExperienceAction(Request $request)
    {

        $user = $this->getUser();
        if($user!=null)
        {
            if($user->getRoles()[0] == 'ROLE_USER')
            {
        $experience = new Experiences();
        $form = $this->createForm('CvBundle\Form\ExperiencesType', $experience);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $experience->setUser($user);
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
            else
                return $this->redirectToRoute('claim_index');

        }
        return $this->redirectToRoute('fos_user_security_login');
    }







    public function ajoutCompetenceAction(Request $request)
    {
        $user = $this->getUser();
        if($user!=null)
        {
            if($user->getRoles()[0] == 'ROLE_USER')
            {

        $competence = new Competences();
        $form = $this->createForm('CvBundle\Form\CompetencesType', $competence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $competence->setUser($user);
            $em = $this->getDoctrine()->getManager();
            $em->persist($competence);
            $em->flush();

            return $this->redirectToRoute('template_Profile');
        }
        return $this->render('@Cv/Default/ajoutCompetence.html.twig', array(
            'comp' => $competence,
            'co' => $form->createView(),));
            }
            else
                return $this->redirectToRoute('claim_index');

        }
        return $this->redirectToRoute('fos_user_security_login');
    }




    public function afficherInfoAction(Request $request)
    {
        $user = $this->getUser();

        if($user != null)
        {
            if($user->getRoles()[0] == 'ROLE_USER')
            {



                if(isset($_GET['id']))
                {


                    $list = $this->getDoctrine()->getRepository(InfoG::class)->order($user->getId());
                    $paginated = $this->get('knp_paginator')->paginate(
                        $list,
                        $request->query->get('page',1),5
                    );
                    //die(print_r($reply));
                    return $this->render('@Cv/Default/afficheInfo.html.twig', array(
                        'list' => $paginated,

                    ));
                }


                $list = $this->getDoctrine()->getRepository(InfoG::class)->order($user->getId());
                $paginated = $this->get('knp_paginator')->paginate(
                    $list,
                    $request->query->get('page',1),5
                );

                return $this->render('@Cv/Default/afficheInfo.html.twig', array(
                    'list' => $paginated,

                ));


            }
            else{
                return $this->redirectToRoute('claim_index');
            }
        }

        return $this->redirectToRoute('fos_user_security_login');
    }


    public function afficherFormationAction(Request $request)
    {
        $user = $this->getUser();

        if($user != null)
        {
            if($user->getRoles()[0] == 'ROLE_USER')
            {



                if(isset($_GET['id']))
                {


                    $list = $this->getDoctrine()->getRepository(Formations::class)->order($user->getId());
                    $paginated = $this->get('knp_paginator')->paginate(
                        $list,
                        $request->query->get('page',1),5
                    );
                    //die(print_r($reply));
                    return $this->render('@Cv/Default/afficheFormation.html.twig', array(
                        'list' => $paginated,

                    ));
                }


                $list = $this->getDoctrine()->getRepository(Formations::class)->order($user->getId());
                $paginated = $this->get('knp_paginator')->paginate(
                    $list,
                    $request->query->get('page',1),5
                );

                return $this->render('@Cv/Default/afficheFormation.html.twig', array(
                    'list' => $paginated,

                ));


            }
            else{
                return $this->redirectToRoute('claim_index');
            }
        }

        return $this->redirectToRoute('fos_user_security_login');
    }

    public function afficherExperienceAction(Request $request)
    {
        $user = $this->getUser();

        if($user != null)
        {
            if($user->getRoles()[0] == 'ROLE_USER')
            {



                if(isset($_GET['id']))
                {


                    $list = $this->getDoctrine()->getRepository(Experiences::class)->order($user->getId());
                    $paginated = $this->get('knp_paginator')->paginate(
                        $list,
                        $request->query->get('page',1),5
                    );
                    //die(print_r($reply));
                    return $this->render('@Cv/Default/afficheExperience.html.twig', array(
                        'list' => $paginated,

                    ));
                }


                $list = $this->getDoctrine()->getRepository(Experiences::class)->order($user->getId());
                $paginated = $this->get('knp_paginator')->paginate(
                    $list,
                    $request->query->get('page',1),5
                );

                return $this->render('@Cv/Default/afficheExperience.html.twig', array(
                    'list' => $paginated,

                ));


            }
            else{
                return $this->redirectToRoute('claim_index');
            }
        }

        return $this->redirectToRoute('fos_user_security_login');
    }






    public function afficherCompetenceAction(Request $request)
    {

        $user = $this->getUser();

        if($user != null)
        {
            if($user->getRoles()[0] == 'ROLE_USER')
            {



                if(isset($_GET['id']))
                {


                    $list = $this->getDoctrine()->getRepository(Competences::class)->order($user->getId());
                    $paginated = $this->get('knp_paginator')->paginate(
                        $list,
                        $request->query->get('page',1),5
                    );
                    //die(print_r($reply));
                    return $this->render('@Cv/Default/afficheCompetence.html.twig', array(
                        'list' => $paginated,

                    ));
                }


                $list = $this->getDoctrine()->getRepository(Competences::class)->order($user->getId());
                $paginated = $this->get('knp_paginator')->paginate(
                    $list,
                    $request->query->get('page',1),5
                );

                return $this->render('@Cv/Default/afficheCompetence.html.twig', array(
                    'list' => $paginated,

                ));


            }
            else{
                return $this->redirectToRoute('claim_index');
            }
        }

        return $this->redirectToRoute('fos_user_security_login');
    }

}

