<?php

namespace ForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\User;
use Doctrine\Common\Persistence\ObjectManager;

use ForumBundle\Entity\commant;
use ForumBundle\Entity\like_q;
use ForumBundle\Entity\question;
use ForumBundle\Entity\signaler;

use ForumBundle\Form\commantType;
use ForumBundle\Form\questionType;
use ForumBundle\Form\signalerType;


use ForumBundle\Repository\questionRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class QuestionController extends Controller
{
    public function add_questionAction(Request $request)
    {
        if($this->getUser() !=null)
        {
            $question = new question();
            $form = $this->createForm(questionType::class, $question);
            $form->handleRequest($request);
            if ($form->isValid()) {
                $user = $this->get('security.token_storage')->getToken()->getUser();
                $question->setUser($user);
                $question->setDate(new \DateTime());
                $em = $this->getDoctrine()->getManager();
                $em->persist($question);
                $em->flush();
                return $this->redirectToRoute("mes_question");
            }
            return $this->render("@Forum/article/add_article.html.twig", array('form' => $form->createView()));
        }
        else
            return $this->redirectToRoute('fos_user_security_login');
    }


    public function mes_questionAction(Request $request)
    {
        if($this->getUser() !=null)
        {
            $user = $this->get('security.token_storage')->getToken()->getUser();

            $liste = $this->getDoctrine()->getRepository(question::class)->findby(array("user" => $user));
            $paginator = $this->get('knp_paginator');
            $liste = $paginator->paginate(
                $liste, /* query NOT result */
                $request->query->getInt('page', 1)/*page number*/,
                5/*limit per page*/


            );
            return $this->render("@Forum/article/mesliste_article.html.twig", array('liste' => $liste));
        }
        else
            return $this->redirectToRoute('fos_user_security_login');
    }
    // public function searchAction(Request $request)
    // {
    //$statut = $_POST['search'];
    //$statut = $request->query->get('search');
    //die($this->getUser()->getRoles()[0]);
    // if (isset($_GET['Search'])) {

    //   $users = $this->getDoctrine()->getRepository(User::class)->findAll();

    // $titre = $_GET['search'];
    // $liste = $this->getDoctrine()->getRepository(article::class)->search($titre);

    // $liste = $this->get('knp_paginator')->paginate(
    //     $liste,
    //      $request->query->get('page', 1)/*le numéro de la page à afficher*/,
    //    6/*nbre d'éléments par page*/
    //   );
//
    //   return $this->render("@Forum/article/signal.html.twig", array(
    //       'liste' => $liste,
    //       'users'=> $users

    //    ));
    //    }
    //  }


    public function listegenerralAction(request $request)
    {


        //$liste = $this->getDoctrine()->getRepository(article::class)->findAll();
        //

        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        $count = $this->getDoctrine()->getRepository(question::class)->count();
        $em = $this->getDoctrine()->getManager();

        {
            if(isset($_GET['Search'])){
                $titre= $_GET['search'];
                $liste = $em->getRepository(question::class)->search($titre);

            }else{
                $liste = $this->getDoctrine()->getRepository(question::class)->orderdate();
            }}
        $paginator  = $this->get('knp_paginator');
        $liste = $paginator->paginate(
            $liste, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            5/*limit per page*/


        );


        return $this->render("@Forum/article/listegenerral.html.twig", array('liste' => $liste,'users'=> $users ,'count'=> $count ));
    }

    public function commantAction(Request $request, $id , question $question)
    {
        if($this->getUser() !=null) {
            $liste = $this->getDoctrine()->getRepository(question::class)->findby(array("id" => $id));
            $users = $this->getDoctrine()->getRepository(User::class)->findAll();

            /// $users = $this->getDoctrine()->getRepository(User::class)->findby(array("id" => $this->get($liste.$user)));

            $comments = $this->getDoctrine()->getRepository(commant::class)->findByQuestion($question);
            $comment = new commant();
            $form = $this->createForm('ForumBundle\Form\commantType', $comment);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $user = $this->get('security.token_storage')->getToken()->getUser();
                $comment->setUser($user);

                $comment->setDateC(new \DateTime());
                //$con =$this->getParameter($id);
                $comment->setQuestion($question);
                $em = $this->getDoctrine()->getManager();
                $em->persist($comment);
                $em->flush();

                return $this->redirectToRoute('commant', array('id' => $question->getId()));
            }

            return $this->render("@Forum/article/liste_detalle.html.twig", array(
                'comments' => $comments,
                'form' => $form->createView(),
                'liste' => $liste,
                'users' => $users
            ));
        }
        else
            return $this->redirectToRoute('fos_user_security_login');
    }



    public function deletelistAction($id)
    {
        $e = $this->getDoctrine()->getManager();
        $question = $this->getDoctrine()->getRepository(question::class)->find($id);

        $e->remove($question);
        $e->flush();
        return $this->redirectToRoute("mes_question");


    }

    public function updateAction(Request $request, $id)
    {

        $question = $this->getDoctrine()->getRepository(question::class)->find($id);
        $form = $this->createForm(questionType::class, $question);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->flush();
            return $this->redirectToRoute("mes_question");
        }
        return $this->render("@Forum/article/add_article.html.twig", array('form' => $form->createView()));
    }
    /**
     * @Route("/question/{id}/like", name="question_like")
     *
     *
     * @param \ForumBundle\Entity\question $question
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function  likeAction (question $question )   {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        if(!$user)return $this->json([
            'code'=>403,
            'message'=>'000non',
        ],403
        );

        if ($question->isLikedByUser($user)){
            $like = $this->getDoctrine()->getRepository(like_q::class)->findOneBy([
                'question'=>$question,
                'user'=>$user
            ]);
            $em->remove($like);
            $em->flush();

            return $this->json([
                'code'=>200,
                'message'=>'like remove',

            ],200);
        }
        $like =new like_q();
        $like->setQuestion($question)->setUser($user);
        $em->persist($like);
        $em->flush();
        return $this->json(['code'=>200,'message'=>'bien'],200);
    }


    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $entities =  $em->getRepository(question::class)->findEntitiesByString($requestString);
        if(!$entities) {
            $result['entities']['error'] = "no result , try again";
        } else {
            $result['entities'] = $this->getRealEntities($entities);
        }
        return new Response(json_encode($result));
    }
    public function getRealEntities($entities){
        foreach ($entities as $entity){
            $realEntities[$entity->getId()] = [$entity->getTitre()];
        }
        return $realEntities;
    }

    public function signalerAction(Request $request , commant $commant)
    {
        $signal = new signaler();
        $form = $this->createForm(signalerType::class, $signal);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $user = $this->get('security.token_storage')->getToken()->getUser();
            $signal->setUser($user);
            $signal->setDateC(new \DateTime());
            $signal->setCommant($commant);
            $em = $this->getDoctrine()->getManager();
            $em->persist($signal);
            $em->flush();

        }
        return $this->render("@Forum/article/signal.html.twig", array('form' => $form->createView()));
    }
}
