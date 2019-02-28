<?php

namespace ReclamationBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\User;
use ReclamationBundle\Entity\Reclamation;
use ReclamationBundle\Entity\Reponse;
use ReclamationBundle\Form\ReponseType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * Lists all claim entities. for admin
     *
     */
    public function indexAction(Request $request)
    {

        $user = $this->getUser();
        if($user!=null)
        {
            if($user->getRoles()[0] == "ROLE_ADMIN")
            {
                //die("admin");

                $em = $this->getDoctrine()->getManager();
                $claims = $em->getRepository(Reclamation::class)->orderTreatedAdmin();

                $list  = $this->get('knp_paginator')->paginate(
                    $claims,
                    $request->query->get('page', 1)/*le numéro de la page à afficher*/,
                    6/*nbre d'éléments par page*/
                );

                if(isset($_GET['submit']))
                {
                    return $this->redirectToRoute('admin_search',array('s' => $_GET['search'] ));
                }

             //  $count = $this->getDoctrine()->getRepository(User::class)->countUser();
                $countClaims = $this->getDoctrine()->getRepository(Reclamation::class)->countClaims();

                return $this->render('@Reclamation/Default/index.html.twig', array(
                    'c' => $list,
                  //  'count' => $count,
                    'claims' => $countClaims
                ));
            }
            else if($user->getRoles()[0] == 'ROLE_USER')
            {
                return $this->redirectToRoute('homepage');
            }
        }
        return $this->redirectToRoute('homepage');
    }

    /**
     * Creates a new claim entity.
     *
     */
    public function newAction(Request $request)
    {

        $user = $this->getUser();
        if($user!=null)
        {
            if($user->getRoles()[0] == 'ROLE_USER')
            {
                // die(' '.$user->getNom());
                $claim = new Reclamation();
                $form = $this->createForm('ReclamationBundle\Form\ReclamationType', $claim);
                $form->handleRequest($request);
                //die('here');
                if ($form->isSubmitted() && $form->isValid()) {

                    $claim->setClaimerId($user->getId());
                    $claim->setUser($user);
                    $claim->setDate(new \DateTime());
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($claim);
                    $em->flush();

                    return $this->redirectToRoute('claim_show', array('id' => $claim->getId()));
                }


                return $this->render('@Reclamation/Default/new.html.twig', array(
                    'claim' => $claim,
                    'form' => $form->createView(),
                    'user' => $user,

                ));
            }
            else
                return $this->redirectToRoute('claim_index');

        }
        return $this->redirectToRoute('fos_user_security_login');
    }

    /**
     * Finds and displays a claim entity.
     *
     */
    public function showAction(Reclamation $claim)
    {
        $user = $this->getUser();
        if($user!=null)
        {
            if($user->getRoles()[0]=="ROLE_ADMIN")
                $isAdmin = 1;
            else
                $isAdmin = 2;

            $deleteForm = $this->createDeleteForm($claim);
            return $this->render('@Reclamation/Default/show.html.twig', array(
                'claim' => $claim,
                'delete_form' => $deleteForm->createView(),
                'isadmin' => $isAdmin,
            ));
        }
        return $this->redirectToRoute('fos_user_security_login');


    }

    /**
     * Displays a form to edit an existing claim entity.
     *
     */
    public function editAction(Request $request, Reclamation $claim)
    {
        $deleteForm = $this->createDeleteForm($claim);
        $editForm = $this->createForm('ReclamationBundle\Form\ReclamationType', $claim);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $claim->setDate(new \DateTime());
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('claim_list');
        }

        return $this->render('@Reclamation/Default/edit.html.twig', array(
            'claim' => $claim,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a claim entity.
     *
     */
    public function deleteAction(Request $request, Reclamation $claim)
    {
        $form = $this->createDeleteForm($claim);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($claim);
            $em->flush();
        }

        return $this->redirectToRoute('claim_index');
    }

    /**
     * Creates a form to delete a claim entity.
     *
     * @param Reclamation $claim The claim entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Reclamation $claim)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('claim_delete', array('id' => $claim->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }

    public function replyAction(Request $request, Reclamation $claim)
    {
        $user = $this->getUser();
        if($user != null)
        {
            if($user->getRoles()[0] == 'ROLE_USER')
            {
                return $this->redirectToRoute('claim_new');
            }

            else if ($user->getRoles()[0] == 'ROLE_ADMIN')
            {
                $reply = new Reponse();
                $form = $this->createForm(ReponseType::class, $reply);
                $form->handleRequest($request);

                //die('date: '.$claim->getText());
                if ($form->isSubmitted() && $form->isValid()) {

                    $reply->setIdClaim($claim->getId());

                    $claim->setTreated(true);
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($reply);
                    $em->flush();

                    return $this->redirectToRoute('claim_show', array('id' => $claim->getId()));
                }

                return $this->render('@Reclamation/Default/replyAdmin.html.twig', array(
                    'claim' => $claim,
                    'form' => $form->createView(),
                ));
            }
        }

        return $this->redirectToRoute('fos_user_security_login');
    }

    public function listAction(Request $request)
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

    public function searchAction(Request $request)
    {
        //$statut = $_POST['search'];
        //$statut = $request->query->get('search');
        //die($this->getUser()->getRoles()[0]);
        if(isset($_GET['Search']))
        {
            if($this->getUser() !=null)
            {

                if($this->getUser()->getRoles()[0] == 'ROLE_ADMIN')
                {
                    $statut = $_GET['search'];
                    $result = $this->getDoctrine()->getRepository(Reclamation::class)->search($statut);

                    $list  = $this->get('knp_paginator')->paginate(
                        $result,
                        $request->query->get('page', 1)/*le numéro de la page à afficher*/,
                        6/*nbre d'éléments par page*/
                    );
                  //  $count = $this->getDoctrine()->getRepository(User::class)->countUser();
                    return $this->render('@Reclamation/Default/search.html.twig', array(
                        'result' => $list,
                      //  'count' => $count
                    ));
                }
                else
                    return $this->redirectToRoute('home');
            }
        }
        else{
            return $this->redirectToRoute('claim_index');
        }

    }

    public function searchhhAction(Request $request)
    {
        //$statut = $_POST['search'];
        //$statut = $request->query->get('search');
        //die($this->getUser()->getRoles()[0]);
        if(isset($_GET['Search']))
        {
            if($this->getUser() !=null)
            {
$user=$this->get('security.token_storage')->getToken()->getUser();
                if($this->getUser()->getRoles()[0] == 'ROLE_USER')
                {
                    $statut = $_GET['searchhh'];
                    $result = $this->getDoctrine()->getRepository(Reclamation::class)->search($statut);

                    $list  = $this->get('knp_paginator')->paginate(
                        $result,
                        $request->query->get('page', 1)/*le numéro de la page à afficher*/,
                        6/*nbre d'éléments par page*/
                    );
                    //  $count = $this->getDoctrine()->getRepository(User::class)->countUser();
                    return $this->render('@Reclamation/Default/searchuser.html.twig', array(
                        'result' => $list,
                        'user'=> $user,
                        //  'count' => $count
                    ));
                }
                else
                    return $this->redirectToRoute('searchuser');
            }
        }
        else{
            return $this->redirectToRoute('claim_index');
        }

    }


    public function searchhAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $entities =  $em->getRepository('ReclamationBundle:Reclamation')->findEntitiesByString($requestString);
        if(!$entities) {
            $result['entities']['error'] = "introuvable";
        } else {
            $result['entities'] = $this->getRealEntities($entities);
        }
        return new Response(json_encode($result));
    }

    public function getRealEntities($entities){
        foreach ($entities as $entity){

            $realEntities[$entity->getId()]['date']=$entity->getDate();
            $realEntities[$entity->getId()]['statut']=$entity->getStatut();
            $realEntities[$entity->getId()]['text']=$entity->getText();
            $realEntities[$entity->getId()]['treated']=$entity->getTreated();
           // $realEntities[$entity->getId()]['statut']=$entity->getAction();


            //  $realEntities[$entity->getId()] = [$entity->getStatut(),$entity->getText()];
        }
        return $realEntities;
    }


}
