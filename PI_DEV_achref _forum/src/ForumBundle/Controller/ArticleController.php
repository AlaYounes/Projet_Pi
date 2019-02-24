<?php

namespace ForumBundle\Controller;

use AppBundle\Entity\User;
use Doctrine\Common\Persistence\ObjectManager;
use ForumBundle\Entity\article;
use ForumBundle\Entity\commant;
use ForumBundle\Entity\like_q;
use ForumBundle\Form\articleType;
use ForumBundle\Form\commantType;
use ForumBundle\Repository\articleRepository;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends Controller
{
    public function add_articleAction(Request $request)
    {
        $article = new article();
        $form = $this->createForm(articleType::class, $article);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $user = $this->get('security.token_storage')->getToken()->getUser();
            $article->setUser($user);
            $article->setDate(new \DateTime());
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();
            return $this->redirectToRoute("mes_article");
        }
        return $this->render("@Forum/article/add_article.html.twig", array('form' => $form->createView()));
    }

    public function mes_articleAction(Request $request)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();

        $liste = $this->getDoctrine()->getRepository(article::class)->findby(array("user" => $user));
        $paginator  = $this->get('knp_paginator');
        $liste = $paginator->paginate(
            $liste, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            5/*limit per page*/


        );
        return $this->render("@Forum/article/mesliste_article.html.twig", array('liste' => $liste));
    }
    public function searchAction(Request $request)
    {
        //$statut = $_POST['search'];
        //$statut = $request->query->get('search');
        //die($this->getUser()->getRoles()[0]);
        if (isset($_GET['Search'])) {

            $users = $this->getDoctrine()->getRepository(User::class)->findAll();

            $titre = $_GET['search'];
            $liste = $this->getDoctrine()->getRepository(article::class)->search($titre);

            $liste = $this->get('knp_paginator')->paginate(
                $liste,
                $request->query->get('page', 1)/*le numéro de la page à afficher*/,
                6/*nbre d'éléments par page*/
            );

            return $this->render("@Forum/article/search.html.twig", array(
                'liste' => $liste,
                'users'=> $users

            ));
        }
    }


    public function listegenerralAction(request $request)
    {


                //$liste = $this->getDoctrine()->getRepository(article::class)->findAll();
                //

                $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        $count = $this->getDoctrine()->getRepository(article::class)->count();
                $em = $this->getDoctrine()->getManager();

        {
            if(isset($_GET['Search'])){
                $titre= $_GET['search'];
            $liste = $em->getRepository(article::class)->search($titre);

        }else{                $liste = $this->getDoctrine()->getRepository(article::class)->orderdate();
        }}
        $paginator  = $this->get('knp_paginator');
        $liste = $paginator->paginate(
            $liste, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            5/*limit per page*/


        );


        return $this->render("@Forum/article/listegenerral.html.twig", array('liste' => $liste,'users'=> $users ,'count'=> $count ));
    }

    public function newAction(Request $request, $id , article $article)
    {
        $liste = $this->getDoctrine()->getRepository(article::class)->findby(array("id" => $id));
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();

       /// $users = $this->getDoctrine()->getRepository(User::class)->findby(array("id" => $this->get($liste.$user)));

        $comments = $this->getDoctrine()->getRepository(commant::class)->findByArticle($article);
        $comment = new commant();
        $form = $this->createForm('ForumBundle\Form\commantType', $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
           $user = $this->get('security.token_storage')->getToken()->getUser();
          $comment->setUser($user);

            $comment->setDateC(new \DateTime());
            //$con =$this->getParameter($id);
            $comment->setArticle($article);
            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();

           return $this->redirectToRoute('new',array('id' =>$article->getId()));
        }

        return $this->render("@Forum/article/liste_detalle.html.twig", array(
            'comments' => $comments,
            'form' => $form->createView(),
            'liste' => $liste,
            'users'=> $users
        ));
    }

    public function rechercherAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $liste = $em->getRepository(article::class)->findAll();

        if ($request->isMethod('POST')) {
            $titre = $request->get('titre');
            $liste = $em->getRepository(article::class)->findBy(array("titre" => $titre));

        }
        return $this->render("@Forum/article/liste_article.html.twig", array('liste' => $liste));
    }

    public function deletelistAction($id)
    {
        $e = $this->getDoctrine()->getManager();
        $article = $this->getDoctrine()->getRepository(article::class)->find($id);

        $e->remove($article);
        $e->flush();
        return $this->redirectToRoute("mes_article");


    }

    public function updateAction(Request $request, $id)
    {

        $article = $this->getDoctrine()->getRepository(article::class)->find($id);
        $form = $this->createForm(articleType::class, $article);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->flush();
            return $this->redirectToRoute("mes_article");
        }
        return $this->render("@Forum/article/add_article.html.twig", array('form' => $form->createView()));
    }
    /**
     * @Route("/article/{id}/like", name="article_like")
     *
     *
     * @param \ForumBundle\Entity\article $article
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function  likeAction (article $article )   {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
       if(!$user)return $this->json([
                'code'=>403,
               'message'=>'000non',
               ],403
    );

        if ($article->isLikedByUser($user)){
            $like = $this->getDoctrine()->getRepository(like_q::class)->findOneBy([
                'article'=>$article,
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
        $like->setArticle($article)->setUser($user);
        $em->persist($like);
        $em->flush();
return $this->json(['code'=>200,'message'=>'bien'],200);
    }

}